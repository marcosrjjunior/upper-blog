@extends('default')

@section('content')

<h1>Create a Author</h1>

{{Form::model($author, array('route' => array('authors.update', $author->id), 'method' => 'PUT')) }}

	@include('authors._form')

{{ Form::submit('Edit Author', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop