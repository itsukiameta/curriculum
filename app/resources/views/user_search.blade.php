@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー検索</div>

                <form action="{{ route('user-search-form')}}" method="post" class="card-body">
                    {{ csrf_field() }}
                    <div>
                        <label>
                            名前:
                            <input type="text" name="name" class="name_field" placeholder="名前を入力" value="{{ $name }}">
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
                        @forelse($users as $user)
                            <li>
                                {{ $user->id }}: 
                                {{ $user->name }}  
                                {{ $user->email }}
                                {{ $user->created_at }}
                                <a href="{{ route('user-delete', $user->id) }}">削除</a>
                            </li>
                        @empty
                            <li>ユーザーはありません。</li>
                        @endforelse
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection