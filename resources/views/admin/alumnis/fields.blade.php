<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Facebook Field -->
<div class="form-group">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::url('facebook', null, ['class' => 'form-control','maxlength' => 191,'placeholder'=>'https://abc.com']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::url('twitter', null, ['class' => 'form-control','maxlength' => 191,'placeholder'=>'https://abc.com']) !!}
</div>

<!-- Linked In Field -->
<div class="form-group">
    {!! Form::label('linkedin', 'Linked In:') !!}
    {!! Form::url('linkedin', null, ['class' => 'form-control','maxlength' => 191,'placeholder'=>'https://abc.com']) !!}
</div>

<!-- Image Field -->
@isset($alumni)
<img src="{{asset('images/'.$alumni->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.alumnis.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cancel</a>
</div>

{{-- @include('includes.ckeditor') --}}