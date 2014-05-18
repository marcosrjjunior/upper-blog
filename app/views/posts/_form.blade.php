<script src="{{ asset('assets/js/slugify.js') }}"></script>

<link href="{{ asset('assets/css/redactor.css') }}" rel="stylesheet" type='text/css'>
<script src="{{ asset('assets/js/redactor.js') }}"></script>

<link href="{{ asset('assets/css/selectize.css') }}" rel="stylesheet" type='text/css'>
<script src="{{ asset('assets/js/selectize.js') }}"></script>

<script>
    $(document).ready(function() 
    { 
        $('#title').keyup(function()
        {
            $('#slug').val($(this).val().slugify());
        });
        
        $('#content').redactor({
            minHeight: 130,
            convertDivs: false,
        });
        
         $('#tag_id').selectize({
             plugins: ['remove_button'],
        });
    });
</script>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'required')) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug', Input::old('slug'), array('class' => 'form-control', 'required')) }}
</div>

<div class="form-group">
    {{ Form::label('img', 'Image') }}
    {{ Form::text('img', Input::old('img'), array('class' => 'form-control', 'required')) }}
</div>

<div class="form-group">
    {{ Form::label('content_short', 'Description') }}
    {{ Form::text('content_short', Input::old('content_short'), array('class' => 'form-control', 'required')) }}
</div>

<div class="form-group">
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'required')) }}
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
           {{ Form::label('date', 'Date') }}
           {{ Form::input('date', 'date', Input::old('date'), array('class' => 'form-control', 'required')) }}
        </div>
    </div>
    
     <div class="col-md-3">
        <div class="form-group">
           {{ Form::label('author_id', 'Author') }}
           {{ Form::select('author_id', $authors, null, array('class' => 'form-control')) }}
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="author_id">Tags</label>
            <select name="tag_id[]" id="tag_id" multiple required>
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ in_array($tag->id, $postTags)? 'selected="selected"' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>