@extends('layouts.app')

@section('style')
<style>
    html, body {
        background-color: black;
        color: white;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        background-image: url('../img/sfondo.jpg');
        background-size: cover;
    }

    a {
        text-decoration: none;
        font-weight: 600;
        color: orange;
    }
    a:hover {
        color: lightgrey;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: white;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .links a:hover {
        color: lightgrey;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            My Blog
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="{{ route('posts.index') }}">Posts</a>
            <a href="/posts_api">Posts with API</a>
        </div>
    </div>
</div>
@endsection
