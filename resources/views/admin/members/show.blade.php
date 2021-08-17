@extends('layouts.admin')
@section('title')View Member Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Member','url'=>route('admin.members.index'),'icon' => 'pe-7s-diamond'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                @include('admin.members.show_fields')
                <a href="{{ route('admin.members.index') }}" class="btn btn-info"><i
                        class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection