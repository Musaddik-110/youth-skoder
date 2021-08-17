@extends('layouts.admin')
@section('title')Update Event @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Event','url'=>route('admin.events.index'),'icon' => 'pe-7s-science'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::model($event, ['route' => ['admin.events.update', $event->id], 'method' => 'patch', 'files' =>
                true]) !!}

                @include('admin.events.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection