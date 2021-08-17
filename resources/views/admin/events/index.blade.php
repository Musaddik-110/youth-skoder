@extends('layouts.admin')
@section('title')Events @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Events','url'=>route('admin.events.create'),'icon' =>'pe-7s-science'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.events.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection