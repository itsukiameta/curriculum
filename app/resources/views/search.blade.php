@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">投稿検索</div>

                <form action="{{ route('search-form')}}" method="post" class="card-body">
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
