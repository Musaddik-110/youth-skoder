<!-- Key Field -->
<div class="form-group">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control','required','maxlength' => 191,'readonly']) !!}
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.settings.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cancel</a>
</div>

{{-- @include('includes.ckeditor') --}}