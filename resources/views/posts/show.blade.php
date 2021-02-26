@extends('layouts.app')

@section('content')

    <a href="{{route('posts.index')}}">Back to posts</a>
    <a href="/">Back Home</a>

    <p>{{$post->title}}</p>
    <p>{{$post->body}}</p>
    <p>Category: {{$post->category->name}}</p>

    <div class="tag">
        Tags: 
        @if(count($post->tags) > 0) 
            @foreach ($post->tags as $tag)
                <span>{{ $tag->name }}</span>
            @endforeach
        @else
        <span>N/A</span>
        @endif
    </div>

@endsection