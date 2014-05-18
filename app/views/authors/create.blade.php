@extends('default')

@section('content')

<h1>Create a Author</h1>

{{ Form::open(array('url' => 'authors')) }}

	@include('authors._form')

{{ Form::submit('Create Author', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop