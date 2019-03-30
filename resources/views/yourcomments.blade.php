@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<h3>All comments created by you</h3>
	<table class="table">
		<tr class="thead-dark">
		    <th>Your comment...</th>
		    <th>...on this post</th>
	  	</tr>
	  	@foreach($comments as $comment)
		<tr>	  		
	  		<td>{{$comment->content}}</td>
	  		<td><a href="/posts/{{$comment->commentBelongsToPost->id}}">{{$comment->commentBelongsToPost->title}}</a></td>
	  	</tr>
		@endforeach
		
	</table>

</div>

	
  	

	


@endsection