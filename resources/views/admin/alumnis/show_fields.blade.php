<!-- Name Field -->
<div class="form-group">
    <b>{!! Form::label('name', 'Name:') !!}</b>
    <p>{{ $alumni->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    <b>{!! Form::label('email', 'Email:') !!}</b>
    <p>{{ $alumni->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <b>{!! Form::label('phone', 'Phone:') !!}</b>
    <p>{{ $alumni->phone }}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    <b>{!! Form::label('designation', 'Designation:') !!}</b>
    <p>{{ $alumni->designation }}</p>
</div>

<!-- Facebook Field -->
<div class="form-group">
    <b>{!! Form::label('facebook', 'Facebook:') !!}</b>
    <p><a href="{{$alumni->facebook}}" target="_blank">{{ $alumni->facebook }}</p></a>
</div>

<!-- Twitter Field -->
<div class="form-group">
    <b>{!! Form::label('twitter', 'Twitter:') !!}</b>
    <p><a href="{{$alumni->twitter}}" target="_blank">{{ $alumni->twitter }}</p></a>
</div>

<!-- Linkedin Field -->
<div class="form-group">
    <b>{!! Form::label('linkedin', 'Linkedin:') !!}</b>
    <p><a href="{{$alumni->linkedin}}" target="_blank">{{ $alumni->linkedin }}</p></a>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <p><img src="{{asset('images/'.$alumni->image)}}" alt="" srcset=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $alumni->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $alumni->updated_at->toFormattedDateString() }}</p>
</div>

