@extends('default')

@section('content')
<h1>Authors</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<a href="{{ URL::to('authors/create') }}"  type="button" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create</a>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
      <td>Name</td>
      <td>Actions</td>
    </tr>
  </thead>
  <tbody>
        @foreach($authors as $author)
        <tr>
            <td><a href="{{ URL::to('authors/'.$author->id.'/edit') }}">{{$author->name}}</a></td>
            <td>
              <a href="{{ URL::to('authors/delete/'.$author->id.'/') }}" class="btn btn-danger">x</a>
            </td>
        </tr>
        @endforeach
	</tbody>
</table>
@stop