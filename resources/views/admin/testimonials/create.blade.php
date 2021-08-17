@extends('layouts.admin')
@section('title')Create Testimonial @endsection
@section('content')
@include('includes.page_header',['title'=>'Create Testimonial','url'=>route('admin.testimonials.index'),'icon' => 'pe-7s-menu'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.testimonials.store', 'files' => true]) !!}

                        @include('admin.testimonials.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

