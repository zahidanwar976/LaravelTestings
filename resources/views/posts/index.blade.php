@extends('layouts.app')
@section('content')
 <div class="container">
 <h1>Posts</h1>
 	@if(count($posts) > 1)
 			@foreach($posts as $post)
 				<div class="well">
 					<h2><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></h2>
 						<small>Written on : {{$post->created_at}}</small>
 				</div> 
 			@endforeach
 	@else
 	<p>Posts Not Found...</p>
 	@endif
 </div>	
@endsection        