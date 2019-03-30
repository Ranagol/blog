@extends('layouts.app')

@section('title', 'Blog')

@section('content')

@include('errors')

<div class="container">
	<h3>Write a new post</h3>
	<form method="POST" action="/posts">
		@csrf
		<div class="form-group">
		    <label>Post title</label>
		    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required="">
		 </div>

		<div class="form-group">
		  	<label>Post content</label>
		  	<textarea class="form-control" rows="10" name="content" value="{{ old('content') }}" required=""></textarea>
		</div>

		 <div class="form-group">
		    <input type="submit" class="btn btn-success" name="submit" value="Submit">
		 </div>
	</form>
</div>



@endsection