@extends('layouts.app')

@section('content')
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
        <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
        <label for="body">Body</label>
        <input class="form-control" type="body" name="body" id="body" value="{{$post->body}}">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags[]" id="tags" multiple multiple id="inputState" class="form-control">
                @if($tags)
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'selected' : ''}}> {{ $tag->name }} </option>
                    @endforeach
                @endif
            </select>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-success" type="submit">Submit</button>    
    </form>

@endsection