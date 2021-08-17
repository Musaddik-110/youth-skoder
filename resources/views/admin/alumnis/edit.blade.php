@extends('layouts.admin')
@section('title')Update Alumni @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Alumni','url'=>route('admin.alumnis.index'),'icon' => 'pe-7s-users'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::model($alumni, ['route' => ['admin.alumnis.update', $alumni->id], 'method' => 'patch', 'files'
                => true]) !!}

                @include('admin.alumnis.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection