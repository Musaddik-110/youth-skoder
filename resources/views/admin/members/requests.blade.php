@extends('layouts.admin')
@section('title')Requested Members @endsection
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-diamond icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Requested Members</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.members.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection