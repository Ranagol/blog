@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<div class="card">
  		<div class="card-body">
    		<h5 class="card-title">Post title: {{$post->title}}</h5>
    		<h5 class="card-title">Author: {{$post->postBelongsToUser->name}}</h5>
    		<p class="card-text">{{$post->content}}</p>
    		<a href="/posts/{{$post->id}}/edit" class="card-link">Edit post</a>
    		<a href="#" class="card-link">Another link</a>
  		</div>
	</div>
</div>


@endsection