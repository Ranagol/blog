@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<h3>All posts</h3>
	<table class="table">
		<tr class="thead-dark">
		    <th>Author</th>
		    <th>Post title</th>
	  	</tr>
	  	@foreach($posts as $post)
		<tr>
	  		<td>{{$post->postBelongsToUser->name}}</td>
	  		<td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
	  	</tr>
		@endforeach
		{{ $posts->render() }}
	</table>

</div>

	
  	

	


@endsection
