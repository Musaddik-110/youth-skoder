@extends('layouts.admin')
@section('title')Activities @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Activities','url'=>route('admin.activities.create'),'icon' =>'pe-7s-map'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.activities.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

