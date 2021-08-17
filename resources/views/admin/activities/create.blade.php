@extends('layouts.admin')
@section('title')Create Activity @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Activity','url'=>route('admin.activities.index'),'icon' => 'pe-7s-map'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.activities.store', 'files' => true]) !!}

                        @include('admin.activities.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

