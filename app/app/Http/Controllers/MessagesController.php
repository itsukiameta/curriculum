<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Message;

use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function create(){

        $title = '新規投稿';

        return view('create',[
            'title' => $title,
        ]);
    }

    public function createForm(Request $request){

        // requestオブジェクトのvalidateメソッドを利用。
        $request->validate([
            'title' => 'required|max:30',
            'date' => 'required',
            'comment' => 'required|max:100',
            'image' => [
                'file',
                'image',
                'mimes:jpeg,png',
                'dimensions:min_width=100,min_height=100,max_width=600,max_height=600',
            ], // ファイルアップロードが行われ、画像ファイルでjpeg,pngのいずれか、100x100~600x600まで
            [
                'title.required' => 'タイトルを30文字以内で入力してください',
                'date.required' => '日付を入力してください',
                'comment.required' => 'コメントを100文字以内で入力してください',
            ],
        ]);

        $filename = '';
        $image = $request->file('image');
        if( isset($image) === true ){
            // 拡張子を取得
            $ext = $image->guessExtension();
            // アップロードファイル名は [ランダム文字列20文字].[拡張子]
            $filename = str_random(20) . ".{$ext}";
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->storeAs('photos', $filename, 'public');
        }

        // Messageモデルを利用して空のMessageオブジェクトを作成
        $message = new Message;

        $message->title = $request->title;
        $message->date = $request->date;
        $message->comment = $request->comment;
        // ファイル名を保存
        $message->image = $filename;

        // messagesテーブルにINSERT
        Auth::user()->message()->save($message);

        // メッセージ一覧ページにリダイレクト
        return redirect('/home');
    }

    public function search(){

        $items = \App\Message::withCount('likes')->orderBy('id', 'desc')->get();
        
        $title = null;
        $from = null;
        $until = null;

        return view('search',[
            'title' => $title,
            'items' => $items,
            'from' => $from,
            'until' => $until,
        ]);
    }

    public function searchForm(Request $request) {

        $items = \App\Message::withCount('likes')->orderBy('id', 'desc')->get();
        
        $title = $request->input('title');
        $from = $request->input('from');
        $until = $request->input('until');

        if (isset($title) && isset($from) && isset($until)) {
            $message = \App\Message::withCount('likes')->where('title','LIKE',"%{$title}%")->get();
            $items = $message->whereBetween("date", [$from, $until]);

            return view('search',[
                'title' => $title,
                'items' => $items,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($title)) {
            $items = \App\Message::withCount('likes')->where('title','LIKE',"%{$title}%")->get();

            return view('search',[
                'title' => $title,
                'items' => $items,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($from) && isset($until)) {
            $items = \App\Message::withCount('likes')->get()->whereBetween('date',[$from, $until]);

            return view('search',[
                'title' => $title,
                'items' => $items,
                'from' => $from,
                'until' => $until,
            ]);
        }

        return view('search',[
            'title' => $title,
            'items' => $items,
            'from' => $from,
            'until' => $until,
        ]);
    }
}
