<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $event->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{!! $event->details !!}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    <b>{!! Form::label('date', 'Date:') !!}</b>
    <p>{{ $event->date->toFormattedDateString() }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    <b>{!! Form::label('time', 'Time:') !!}</b>
    <p>{{ date('h:i a',strtotime($event->time)) }}</p>
</div>

<!-- Place Field -->
<div class="form-group">
    <b>{!! Form::label('place', 'Place:') !!}</b>
    <p>{{ $event->place }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <p><img src="{{asset('images/'.$event->image)}}" alt=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $event->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $event->updated_at->toFormattedDateString() }}</p>
</div>

