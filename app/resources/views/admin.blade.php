@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理者画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    管理者としてログインしました
                </div>

                <div class="card-body">
                    <a href="{{ route('user-search') }}">
                        <button type='button' class='btn btn-primary'>ユーザー検索</button>
                    </a>
                    
                    <a href="{{ route('message-search') }}">
                        <button type='button' class='btn btn-primary'>投稿検索</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
