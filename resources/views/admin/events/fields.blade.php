<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required','maxlength' => 65530]) !!}
</div>

<!-- Date Field -->
<div class="form-group ">
    {!! Form::label('date', 'Date:') !!}
    @isset($event)
    {!! Form::date('date', date('Y-m-d', strtotime($event->date)), ['class' => 'form-control','id'=>'date','required']) !!}
    @else
    {!! Form::date('date', null, ['class' => 'form-control','id'=>'date','required']) !!}
    @endisset
</div>

<div class="form-group ">
    {!! Form::label('time', 'Time:') !!}
    {!! Form::time('time', null, ['class' => 'form-control','id'=>'time','required']) !!}
</div>


<!-- Place Field -->
<div class="form-group">
    {!! Form::label('place', 'Place:') !!}
    {!! Form::text('place', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Image Field -->
@isset($event)
<img src="{{asset('images/'.$event->image)}}" alt="" srcset="">
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
    <a href="{{ route('admin.events.index') }}" class="btn btn-danger"><i class="fa fa-window-close"
            aria-hidden="true"></i> Cancel</a>
</div>

@include('includes.ckeditor')