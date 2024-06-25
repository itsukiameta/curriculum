<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Illuminate\Support\Facades\Log;

use App\Like;
use App\Message;

class LikeController extends Controller
{
    public function like(Request $request)
{
    $user_id = Auth::user()->id; //1.ログインユーザーのid取得
    $message_id = $request->message_id; //2.投稿idの取得
    $already_liked = Like::where('user_id', $user_id)->where('message_id', $message_id)->first(); //3.

    if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
        $like = new Like; //4.Likeクラスのインスタンスを作成
        $like->message_id = $message_id; //Likeインスタンスにmessage_id,user_idをセット
        $like->user_id = $user_id;
        $like->save();
    } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
        Like::where('message_id', $message_id)->where('user_id', $user_id)->delete();
    }
    //5.この投稿の最新の総いいね数を取得
    $message_likes_count = Message::withCount('likes')->findOrFail($message_id)->likes_count;
    $items = [
        'message_likes_count' => $message_likes_count,
    ];
    return response()->json($items); //6.JSONデータをjQueryに返す
}
}
