@extends('layouts.admin')
@section('title')Update Member @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Member','url'=>route('admin.members.index'),'icon' =>
'pe-7s-diamond'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::model($member, ['route' => ['admin.members.update', $member->id], 'method' => 'patch', 'files'
                => true]) !!}

                @include('admin.members.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection