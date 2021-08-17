@extends('layouts.admin')
@section('title')Testimonials @endsection
@section('content')
@include('includes.page_header_index',['title'=>'Testimonials','url'=>route('admin.testimonials.create'),'icon' =>'pe-7s-menu'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.testimonials.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

