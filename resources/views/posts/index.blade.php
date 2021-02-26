@extends('layouts.app')

@section('content')
    
    <a href="{{route('posts.create')}}" class="btn btn-primary">Create a new post</a>

    <table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td>
                <a href="{{route('posts.show', ['post'=> $post->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    View
                </a>
                <a href="{{route('posts.edit', ['post'=> $post->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    Edit
                </a>
                <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="post">
                    <i class="fas fa-trash fa-lg fa-fw"></i>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection