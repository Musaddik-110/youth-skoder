<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $activity->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{!! $activity->details !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b><br>
    <img src="{{asset('images/'.$activity->image)}}" alt="" srcset="">
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $activity->created_at->toFormattedDateString() }}</p>
</div>


