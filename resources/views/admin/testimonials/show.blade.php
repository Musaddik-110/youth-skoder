@extends('layouts.admin')
@section('title')View  Testimonial Details @endsection
@section('content')
@include('includes.page_header',['title'=>'View Testimonial','url'=>route('admin.testimonials.index'),'icon' => 'pe-7s-menu'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.testimonials.show_fields')
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
