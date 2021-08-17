@extends('layouts.admin')
@section('title')Create Gallery @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Gallery','url'=>route('admin.galleries.index'),'icon' =>
'pe-7s-photo'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.galleries.store', 'files' => true]) !!}

                @include('admin.galleries.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection