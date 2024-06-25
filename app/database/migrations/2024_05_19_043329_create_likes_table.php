<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('message_id');
            $table->timestamps(); //s複数形でcreated_atとupdated_atを生成

            $table->foreign('user_id') //usersテーブルの外部キー設定
                ->references('id')->on('users') //usersテーブルのidカラムを参照する
                ->onDelete('cascade'); //削除時のオプション

            $table->foreign('message_id') //同じことをmessagesテーブルとも
                ->references('id')->on('messages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
