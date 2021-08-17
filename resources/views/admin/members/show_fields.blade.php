<!-- Name Field -->
<div class="form-group">
    <b>{!! Form::label('name', 'Name:') !!}</b>
    <p>{{ $member->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    <b>{!! Form::label('email', 'Email:') !!}</b>
    <p>{{ $member->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <b>{!! Form::label('phone', 'Phone:') !!}</b>
    <p>{{ $member->phone }}</p>
</div>

<!-- Designation Field -->
<div class="form-group">
    <b>{!! Form::label('designation', 'Designation:') !!}</b>
    <p>{{ $member->designation }}</p>
</div>

<!-- About Field -->
<div class="form-group">
    <b>{!! Form::label('about', 'About:') !!}</b>
    <p>{{ $member->about }}</p>
</div>
<!-- Facebook Field -->
<div class="form-group">
    <b>{!! Form::label('facebook', 'Facebook:') !!}</b>
    <p><a href="{{$member->facebook}}" target="_blank">{{ $member->facebook }}</p></a>
</div>

<!-- Twitter Field -->
<div class="form-group">
    <b>{!! Form::label('twitter', 'Twitter:') !!}</b>
    <p><a href="{{$member->twitter}}" target="_blank">{{ $member->twitter }}</p></a>
</div>

<!-- Linkedin Field -->
<div class="form-group">
    <b>{!! Form::label('linkedin', 'Linkedin:') !!}</b>
    <p><a href="{{$member->linkedin}}" target="_blank">{{ $member->linkedin }}</p></a>
</div>

<!-- Image Field -->
<div class="form-group">
    <b>{!! Form::label('image', 'Image:') !!}</b>
    <p><img src="{{asset('images/'.$member->image)}}" alt="" srcset=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $member->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $member->updated_at->toFormattedDateString() }}</p>
</div>