@extends('base')
@section('content')
<div class="container">
<h1>Test</h1>
<a href="{{ route('forum.create')}}" class="btn btn-primary">New Post</a>

@foreach ($posts as $post)
    <div class="col mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->subject }}</h5>
                <h6 class="card-subtitle text-black-50 mb-2">{{$post->user->name}}</h6>
                <h6 class="card-text mb-4">Description: {{ $post->content }}</h6>
                @foreach ($post->comments as $comment)
                <p class="card-text mt-3">{{$comment->user->name}}: {{$comment->content}}</p>
                @endforeach

                @if (auth()->check() && auth()->user()->id === $post->user_id)
                <form action="{{ route('forum.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-danger text-white mt-2">Delete Post</button>
                </form>
            @endif

            @if (auth()->check() && auth()->user()->id === $post->user_id)
            <a href="{{route('forum.edit', $post->id) }}" class="btn btn-primary">Edit</a>
        @endif
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
