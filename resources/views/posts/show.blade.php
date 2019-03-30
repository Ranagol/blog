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


<div class="container">
	<br>
	<h6>Comments</h6>
</div>
@include('errors')
<!--CREATING A NEW COMMENT-->
<div class="container">
	<div class="card">
		<div class="card-body">
				<p class="card-text">
				    
				    <form method="POST" action="/posts/{{$post->id}}/comment">
				    	@csrf

				    	<div class="d-flex justify-content-start">
				    		<div><i class="fas fa-user"></i></div>

				    		<div><input class="form-control"  size="110" type="text" name="content" value ="{{old('content')}}" placeholder="Join the discussion..." required=""></div>

				    		<div><input class="btn btn-success" type="submit" name="submit" value="Submit comment"></div>
				    	</div>				    	
				    </form>	    			
				</p>
		</div>
	</div>
</div>		


<!--DISPLAYING ALL COMMENTS FOR THIS POST BELOW-->
@if($post->postHasManyComments->count())
	<div class="container">
		@foreach($post->postHasManyComments as $comment)
			<div class="card">
		  		<div class="card-body">
		    		<p class="card-text">
		    			<i class="fas fa-user"></i>

		    			{{$comment->commentBelongsToUser->name}} on {{$comment->commentBelongsToUser->created_at}}:
		    			<br>
		    			{{$comment->content}}
		    		</p>
		  		</div>
			</div>
		@endforeach
	</div>
@endif





@endsection