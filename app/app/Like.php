<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {   //usersテーブルとのリレーションを定義するuserメソッド
        return $this->belongsTo(User::class);
    }

    public function message()
    {   //messagesテーブルとのリレーションを定義するmessageメソッド
        return $this->belongsTo(Message::class);
    }
}
