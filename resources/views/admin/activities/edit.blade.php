@extends('layouts.admin')
@section('title')Update  Activity @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Activity','url'=>route('admin.activities.index'),'icon' => 'pe-7s-map'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($activity, ['route' => ['admin.activities.update', $activity->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.activities.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

