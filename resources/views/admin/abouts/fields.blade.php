<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required','maxlength' => 65530]) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.abouts.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cancel</a>
</div>

@include('includes.ckeditor')