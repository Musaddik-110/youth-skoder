@extends('layouts.admin')
@section('title')View Alumni Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Alumni','url'=>route('admin.alumnis.index'),'icon' => 'pe-7s-users'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                @include('admin.alumnis.show_fields')
                <a href="{{ route('admin.alumnis.index') }}" class="btn btn-info"><i
                        class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection