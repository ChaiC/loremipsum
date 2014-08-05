@extends('landing')

@section('title')
    A few random Paragraphs
@stop

@section('content')
    <h1>Here are a few random paragraphs:</h1>
	@foreach($paragraphs as $para) 
			<p> {{ $para}} </p>
	@endforeach
@stop
