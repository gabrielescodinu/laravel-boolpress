@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')

    <a href="{{route('posts.create')}}">Create a new post</a>
    <a href="/">Back Home</a>

    @foreach($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->body}}</p>
        <p>{{$post->created_at}}</p>
        <p>{{$post->updated_at}}</p> 
            <a href="{{route('posts.show', ['post'=> $post->id] )}}">View</a> 
            <a href="{{route('posts.edit', ['post'=> $post->id] )}}">Edit</a> 
            <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
        <hr>
    @endforeach
    
@endsection