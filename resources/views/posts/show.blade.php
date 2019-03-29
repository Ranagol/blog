@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<div class="card">
  		<div class="card-body">
    		<h5 class="card-title">Post title: {{$post->title}}</h5>
    		<h5 class="card-title">Author: {{$post->postBelongsToUser->name}}</h5>
    		<h6 class="card-title">Created: {{$post->created_at}}</h5>
    		<p class="card-text">{{$post->content}}</p>
    		<table>
    			<tr>
    				<td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit post</a></td>
    				<td>
    					<form method="POST" action="/posts/{{$post->id}}">
			    			@csrf
			    			@method('DELETE')
			    			<button class="btn btn-danger">Delete post</button>
			    		</form>
    				</td>
    			</tr>
    		</table>    		
  		</div>
	</div>
</div>


@endsection