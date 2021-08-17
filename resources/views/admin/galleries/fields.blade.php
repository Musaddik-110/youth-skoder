<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Type:') !!}
    <select class="form-control" name="type" required>
        <option value="Gallery">Gallery</option>
        <option value="Slider">Slider</option>
    </select>
</div>


<!-- Image Field -->
@isset($gallery)
<img src="{{asset('images/'.$gallery->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image" class="form-control" accept="image/*"/>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cancel</a>
</div>

{{-- @include('includes.ckeditor') --}}