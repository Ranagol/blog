@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container">
	<h3>Edit this post</h3>
	@include('errors')
	<form method="POST" action="/posts/{{$post->id}}">
		@csrf
		@method('PATCH')
		<div class="form-group">
		    <label>Post title</label>
		    <input type="text" class="form-control" name="title" value="{{$post->title}}">
		 </div>

		<div class="form-group">
		  	<label>Post content</label>
		  	<textarea class="form-control" rows="10" name="content">{{$post->content}}</textarea>
		</div>

		 <div class="form-group">
		    <input type="submit" class="btn btn-success" name="submit" value="Update post">
		 </div>
	</form>
</div>

@endsection