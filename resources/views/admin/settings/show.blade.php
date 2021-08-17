@extends('layouts.admin')
@section('title')View Setting Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Setting','url'=>route('admin.settings.index'),'icon' =>
'pe-7s-settings'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                @include('admin.settings.show_fields')
                <a href="{{ route('admin.settings.index') }}" class="btn btn-info"><i
                        class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection