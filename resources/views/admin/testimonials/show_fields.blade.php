<!-- Name Field -->
<div class="form-group">
    <b>{!! Form::label('name', 'Name:') !!}</b>
    <p>{{ $testimonial->name }}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    <b>{!! Form::label('designation', 'Designation:') !!}</b>
    <p>{{ $testimonial->designation }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    <b>{!! Form::label('message', 'Message:') !!}</b>
    <p>{{ $testimonial->message }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <p><img src="{{asset('images/'.$testimonial->image)}}" alt="" srcset=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $testimonial->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $testimonial->updated_at->toFormattedDateString() }}</p>
</div>

