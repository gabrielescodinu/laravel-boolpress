@extends('layouts.app')

@section('content')

    <a href="{{route('posts.index')}}">Back to posts</a>
    <a href="/">Back Home</a>

    <h1>Edit {{$post->title}}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
        <label for="body">Body</label>
        <input type="body" name="body" id="body" value="{{$post->body}}">
        </div>

        <button type="submit">Submit</button>    
    </form>

    <div>
    <a href="{{route('posts.index')}}">Back to posts</a>
    </div>

@endsection