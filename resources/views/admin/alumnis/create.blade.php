@extends('layouts.admin')
@section('title')Create Alumni @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Alumni','url'=>route('admin.alumnis.index'),'icon' => 'pe-7s-users'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.alumnis.store', 'files' => true]) !!}

                @include('admin.alumnis.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection