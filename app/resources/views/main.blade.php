@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メインページ</div>

                <div class="card-body">
                    <a href="{{ route('create') }}">
                        <button type='button' class='btn btn-primary'>新規投稿</button>
                    </a>
                    <a href="{{ route('search') }}">
                        <button type='button' class='btn btn-primary'>投稿検索</button>
                    </a>
                </div>

                <div class="card-body">
                    <ul>
                        @forelse($items as $item)
                            <li class="list">
                                @if($item->image !== '')
                                    <img src="{{ asset('storage/photos/' . $item->image) }}">
                                    <br>
                                @endif
                                {{ $item->id }}: 
                                {{ $item->title }}  
                                [{{ $item->date }}]  
                                @if (!$item->isLikedBy(Auth::user()))
                                    <span class="likes">
                                            <i class="fas fa-heart like-toggle" data-message-id="{{ $item->id }}"></i>
                                        <span class="like-counter">{{ $item->likes_count }}</span>
                                    </span><!-- /.likes -->
                                @else
                                    <span class="likes">
                                            <i class="fas fa-heart like-toggle liked" data-message-id="{{ $item->id }}"></i>
                                        <span class="like-counter">{{ $item->likes_count }}</span>
                                    </span><!-- /.likes -->
                                @endif
                                <br>
                                <?php echo nl2br($item->comment); ?>
                            </li>
                        @empty
                            <li>投稿はありません。</li>
                        @endforelse
                        <script src="like.js"></script>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection