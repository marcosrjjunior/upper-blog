@extends('default')

@section('content')

<h1>Create a Tag</h1>

{{ Form::open(array('url' => 'tags')) }}

	@include('tags._form')

{{ Form::submit('Create Tag', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop