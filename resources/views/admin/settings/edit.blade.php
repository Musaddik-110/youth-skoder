@extends('layouts.admin')
@section('title')Update Setting @endsection
@section('content')
@include('includes.page_header',['title'=>'Update Setting','url'=>route('admin.settings.index'),'icon' =>
'pe-7s-settings'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                {!! Form::model($setting, ['route' => ['admin.settings.update', $setting->id], 'method' => 'patch']) !!}

                @include('admin.settings.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection