@extends('layouts.admin')
@section('title')View  Activity Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Activity','url'=>route('admin.activities.index'),'icon' => 'pe-7s-map'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.activities.show_fields')
                    <a href="{{ route('admin.activities.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
