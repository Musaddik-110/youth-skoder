<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control','required','maxlength' => 65530]) !!}
</div>

<!-- Image Field -->
@isset($testimonial)
<img src="{{asset('images/'.$testimonial->image)}}" alt="" srcset="">
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
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cancel</a>
</div>

{{-- @include('includes.ckeditor') --}}