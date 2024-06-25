@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    @foreach($errors->all() as $error)
                        <p class="error">{{ $error }}</p>
                    @endforeach
                </div>

                <form method="post" class="card-body" action="{{ url('/create') }}" enctype="multipart/form-data">
                    {{-- LaravelではCSRF対策のため以下の一行が必須です。 --}}
                    {{ csrf_field() }}
                    <div>
                        <label>
                            タイトル:
                            <input type="text" name="title" class="title_field" placeholder="タイトルを入力">
                        </label>
                    </div>

                    <div>
                        <label>
                            日付:
                            <input type='date' name='date' class="date_field">
                        </lavel>
                    </div>

                    <div>
                        <label>
                            感想・評価：
                            <textarea name="comment" class="comment_field" placeholder="コメントを入力"></textarea>
                        </label>
                    </div>

                    {{-- ファイルアップロード用のinputを追加します。 --}}
                    <div>
                        <label>
                            画像：
                            <input type="file" name="image">
                        </label>
                    </div>

                    <div>
                        <input type="submit" value="投稿">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection