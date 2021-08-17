<!-- Type Field -->
<div class="form-group">
    <b>{!! Form::label('type', 'Type:') !!}</b>
    <p>{{ $gallery->type }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <img src="{{asset('images/'.$gallery->image)}}" alt="">
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $gallery->created_at->toFormattedDateString() }}</p>
</div>