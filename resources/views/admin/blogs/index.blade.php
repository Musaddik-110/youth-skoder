@extends('layouts.admin')
@section('title')Blogs @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Blogs','url'=>route('admin.blogs.create'),'icon' =>$icon])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.blogs.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

