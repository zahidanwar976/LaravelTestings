@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
{!! Form::open(['action' => 'PostController@store','method'=>'post']) !!}
    <div class="form-group">
    	{{Form::label('title', 'Title')}}
    	{{Form::text('title' ,'',['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
    	{{Form::label('body', 'Body')}}
    	{{Form::textarea('body' ,'',['class' => 'form-control','placeholder'=>'body text'])}}
    </div>
    {{Form::submit('Submit',['class' => 'btn btn-info'])}}

{!! Form::close() !!}

@endsection