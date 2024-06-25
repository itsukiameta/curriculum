@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
    <main class="py-4">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class='text-center'>削除しますか？</h1>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <li>
                            {{ $user->id }}: 
                            {{ $user->name }}  
                            {{ $user->email }}
                            {{ $user->created_at }}
                            <form action="{{ route('user-delete', ['id'=>$user->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </li> 
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection