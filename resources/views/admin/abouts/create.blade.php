@extends('layouts.admin')
@section('title')Create About @endsection
@section('content')
@include('includes.page_header',['title'=>'Create About','url'=>route('admin.abouts.index'),'icon' => 'pe-7s-album'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.abouts.store']) !!}

                        @include('admin.abouts.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

