@extends('layouts.admin')
@section('title')Alumnis @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Alumnis','url'=>route('admin.alumnis.create'),'icon' =>'pe-7s-users'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.alumnis.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection