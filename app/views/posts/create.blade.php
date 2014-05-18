@extends('default')

@section('content')

<h1>Create a Post</h1>

{{ Form::open(array('url' => 'posts')) }}

	@include('posts._form')

{{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop