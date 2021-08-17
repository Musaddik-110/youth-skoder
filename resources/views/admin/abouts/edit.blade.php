@extends('layouts.admin')
@section('title')Update  About Page Content @endsection
@section('content')
@include('includes.page_header',['title'=>'Update About Page Content','url'=>route('admin.abouts.index'),'icon' => 'pe-7s-album'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($about, ['route' => ['admin.abouts.update', $about->id], 'method' => 'patch']) !!}

                        @include('admin.abouts.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

