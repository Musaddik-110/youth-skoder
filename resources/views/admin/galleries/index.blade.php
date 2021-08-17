@extends('layouts.admin')
@section('title')Galleries @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Galleries','url'=>route('admin.galleries.create'),'icon'
=>'pe-7s-photo'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.galleries.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection