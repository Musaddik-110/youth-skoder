@extends('layouts.admin')
@section('title')Update  Testimonial @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Testimonial','url'=>route('admin.testimonials.index'),'icon' => 'pe-7s-menu'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($testimonial, ['route' => ['admin.testimonials.update', $testimonial->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.testimonials.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

