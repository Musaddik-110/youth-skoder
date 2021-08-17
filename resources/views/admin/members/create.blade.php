@extends('layouts.admin')
@section('title')Create Member @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Member','url'=>route('admin.members.index'),'icon' =>
'pe-7s-diamond'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.members.store', 'files' => true]) !!}

                @include('admin.members.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection