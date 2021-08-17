@extends('layouts.admin')
@section('title')View  About Page Content @endsection
@section('content')
@include('includes.page_header',['title'=>'View About Page Content','url'=>route('admin.abouts.index'),'icon' => 'pe-7s-album'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.abouts.show_fields')
                    <a href="{{ route('admin.abouts.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
