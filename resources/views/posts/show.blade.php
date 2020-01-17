@extends('layouts.app')
@section('content')
<hr>
<a href="{{route('post.index')}}" class="btn btn-success">Go Back</a>
<hr>
<div class="container">
 	<h1>{{$post->title}}</h1>
	{{$post->body}}
</div>

<hr>
 	<small>Written on: {{$post->created_at}}</small>
<hr>
<a href="{{route('post.edit',$post->id)}}" class="btn btn-info">Edit</a>

{!!Form::open(['action' => ['PostController@destroy',$post->id], 'method'=> 'post','class'=>'btn pull-right']) !!}
	{{Form::hidden('_method','DELETE')}}
	{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!! Form::close()!!}

@endsection