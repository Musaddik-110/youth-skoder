@extends('layouts.admin')
@section('title')Create Blog @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Blog','url'=>route('admin.blogs.index'),'icon' => $icon])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.blogs.store', 'files' => true]) !!}

                        @include('admin.blogs.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

