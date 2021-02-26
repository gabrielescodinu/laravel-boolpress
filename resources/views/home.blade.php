@extends('layouts.app')

@section('style')
<style>
    body {
        
    }
</style>
@endsection

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            BOOLPRESS
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="{{ route('posts.index') }}">Admin</a>
            <a href="/posts_api">Posts</a>
        </div>
    </div>
</div>
@endsection
