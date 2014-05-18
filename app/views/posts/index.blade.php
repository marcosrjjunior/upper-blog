@extends('default')

@section('content')
<h1>Posts</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<a href="{{ URL::to('posts/create') }}"  type="button" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create</a>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Title</td>
            <td>Slug</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td><a href="{{ URL::to('posts/'.$post->id.'/edit') }}">{{$post->title}}</a></td>
            <td>{{$post->slug}}</td>
            <td><a href="{{ URL::to('posts/delete/'.$post->id.'/') }}" class="btn btn-danger">x</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop