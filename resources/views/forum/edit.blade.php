@extends('base')

@section('content')
<div class="container d-flex align-items-center justify-content-center vh-94">
    <div class="card mt-5 mb-5">
        <div class="card-body">
            <h1 class="mt-4 mb-4">Edit Post:</h1>
            <form action="{{ route('forum.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{$post->subject}}" required>
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}"  required>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
