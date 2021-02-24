@extends('layouts.app')

@section('content')

    <a href="{{route('posts.index')}}">Back to posts</a>
    <a href="/">Back Home</a>

    <p>{{$post->title}}</p>
    <p>{{$post->body}}</p>
    <p>Category: {{$post->category->name}}</p>

@endsection