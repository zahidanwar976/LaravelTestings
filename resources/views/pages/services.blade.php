@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($services) > 0)
        <ul>
        @foreach($services as $ser)
        <li>
          {{$ser}}
        </li>
        @endforeach
        </ul>
        @endif
        <p>Laravel Testing Service Page</p>
@endsection        