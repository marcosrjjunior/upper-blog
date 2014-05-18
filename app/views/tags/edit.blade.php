@extends('default')

@section('content')

<h1>Create a Tag</h1>

{{Form::model($tag, array('route' => array('tags.update', $tag->id), 'method' => 'PUT')) }}

	@include('tags._form')

{{ Form::submit('Edit Tag', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop