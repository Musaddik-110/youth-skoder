@extends('layouts.admin')
@section('title')Members @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Members','url'=>route('admin.members.create'),'icon'
=>'pe-7s-diamond'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.members.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection