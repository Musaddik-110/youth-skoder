@extends('layouts.admin')
@section('title')Settings @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Settings','url'=>route('admin.settings.create'),'icon'
=>'pe-7s-settings'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.settings.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection