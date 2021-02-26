@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">  
                        <h5>{{$post->title}}</h5>  
                    </div>
                    
                    <div class="card-body">
                    <p>Description: {{$post->body}}</p>
                    Tags: 
                    @if(count($post->tags) > 0) 
                        @foreach ($post->tags as $tag)
                            <span>{{ $tag->name }}</span>
                        @endforeach
                    @else
                    <span>N/A</span>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection