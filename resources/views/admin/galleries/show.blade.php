@extends('layouts.admin')
@section('title')View Gallery Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Gallery','url'=>route('admin.galleries.index'),'icon' => 'pe-7s-photo'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                @include('admin.galleries.show_fields')
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-info"><i
                        class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection