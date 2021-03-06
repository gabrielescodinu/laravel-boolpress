<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('style')

    </head>
    <body>
        <div class="nav">
            <a href="/">Home</a>
            <a href="{{ route('posts.index') }}">Admin</a>
            <a href="/posts_api">Posts</a>
        </div>
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>