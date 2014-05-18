@extends('default')

@section('content')
<h1>Tags</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<a href="{{ URL::to('tags/create') }}"  type="button" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create</a>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
      <td>Name</td>
      <td>Actions</td>
    </tr>
  </thead>
  <tbody>
        @foreach($tags as $tag)
        <tr>
            <td><a href="{{ URL::to('tags/'.$tag->id.'/edit') }}">{{$tag->name}}</a></td>
            <td>
              <a href="{{ URL::to('tags/delete/'.$tag->id.'/') }}" class="btn btn-danger">x</a>
            </td>
        </tr>
        @endforeach
	</tbody>
</table>
@stop