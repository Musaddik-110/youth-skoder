@extends('layouts.admin')
@section('title')Create Event @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Event','url'=>route('admin.events.index'),'icon' => 'pe-7s-science'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.events.store', 'files' => true]) !!}

                        @include('admin.events.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

