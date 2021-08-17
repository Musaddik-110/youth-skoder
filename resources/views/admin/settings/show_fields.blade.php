<!-- Key Field -->
<div class="form-group">
    <b>{!! Form::label('key', 'Key:') !!}</b>
    <p>{{ $setting->key }}</p>
</div>

<!-- Value Field -->
<div class="form-group">
    <b>{!! Form::label('value', 'Value:') !!}</b>
    <p>{{ $setting->value }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <p>{{ $setting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <p>{{ $setting->updated_at }}</p>
</div>

