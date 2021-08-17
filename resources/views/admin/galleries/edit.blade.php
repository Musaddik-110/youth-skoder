@extends('layouts.admin')
@section('title')Update Gallery @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Gallery','url'=>route('admin.galleries.index'),'icon' =>
'pe-7s-photo'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::model($gallery, ['route' => ['admin.galleries.update', $gallery->id], 'method' => 'patch',
                'files' => true]) !!}

                @include('admin.galleries.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection