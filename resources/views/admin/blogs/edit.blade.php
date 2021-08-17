@extends('layouts.admin')
@section('title')Update  Blog @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Blog','url'=>route('admin.blogs.index'),'icon' => $icon])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($blog, ['route' => ['admin.blogs.update', $blog->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.blogs.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

