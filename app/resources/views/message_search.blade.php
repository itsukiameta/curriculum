@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">タイトル検索</div>

                <form action="{{ route('message-search-form')}}" method="post" class="card-body">
                    {{ csrf_field() }}
                    <div>
                        <label>
                            タイトル:
                            <input type="text" name="title" class="title_field" placeholder="タイトルを入力" value="{{ $title }}">
                        </label>
                    </div>

                    <div>
                        <label>
                            日付検索:
                            <input type='date' name='from' class="date_field" value="{{ $from }}">
                                <span class="ms-3">~</span>
                            <input type='date' name='until' class="date_field" value="{{ $until }}">
                        </lavel>
                    </div>

                    <div>
                        <input type="submit" value="検索">
                    </div>
                </form>

                <div class="card-body">
                    <ul>
                        @forelse($messages as $message)
                            <li class="list">
                                @if($message->image !== '')
                                    <img src="{{ asset('storage/photos/' . $message->image) }}">
                                    <br>
                                @endif
                                {{ $message->id }}: 
                                {{ $message->title }}  
                                [{{ $message->date }}]
                                <a href="{{ route('message-delete', $message->id) }}">削除</a>
                            </li>
                        @empty
                            <li>投稿はありません。</li>
                        @endforelse
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection