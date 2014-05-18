@extends('default')

@section('content')

<h1>Create a Post</h1>

{{Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

	@include('posts._form')

{{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop