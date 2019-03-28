@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
	<h3>Authors</h3>
	<table class="table">
		<thead class="thead-dark">
			<tr>
			    <th>Author</th>
			    <th>Email</th>
			    <th>Number of posts</th>
			    <th>Number of comments</th>
		  	</tr>
		</thead>
			
	  	@foreach($users as $user)
			<tr>
		  		<td>{{$user->name}}</td>
		  		<td>{{$user->email}}</td>
		  		<td>{{$user->userHasManyPosts->count()}}</td>
		  		<td>{{$user->userHasManyComments->count()}}</td>
		  	</tr>
		@endforeach		
	</table>
</div>
@endsection