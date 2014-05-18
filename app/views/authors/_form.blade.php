<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'required')) }}
</div>