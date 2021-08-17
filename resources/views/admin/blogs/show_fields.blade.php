<!-- Title Field -->
<div class="form-group">
    <b>{!! Form::label('title', 'Title:') !!}</b>
    <p>{{ $blog->title }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    <b>{!! Form::label('details', 'Details:') !!}</b>
    <p>{{ $blog->details }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <p><img src="{{asset('images/'.$blog->image)}}" alt="" srcset=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $blog->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $blog->updated_at->toFormattedDateString() }}</p>
</div>

