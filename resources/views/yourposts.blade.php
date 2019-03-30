@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<h3>All your posts</h3>
	<table class="table">
		<tr class="thead-dark">
		    <th>Post title</th>
		    <th>Number of comments</th>
	  	</tr>
	  	@foreach($posts as $post)
		<tr>	  		
	  		<td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
	  		<td>{{$post->postHasManyComments->count()}}</td>
	  	</tr>
		@endforeach
		
	</table>

</div>

	
  	

	


@endsection