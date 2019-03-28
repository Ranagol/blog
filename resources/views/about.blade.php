@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container">
	
	<div class="card">
	  <div class="card-header">
	    Just a couple of words...
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">...About this page</h5>
	    <p class="card-text">These functions are built in into this website:
	    	<ul>
	    		<li>Authentication</li>
	    		<li>User can write posts and comment other posts</li>
	    		<li>Everyboy can see everybodies posts and comments, but only the admin and the author can edit/delete posts and comments</li>
	    	</ul>
	    </p>
	    <a href="#" class="btn btn-primary">Now go and write something beautiful! :)</a>
	  </div>
	</div>
</div>


@endsection