@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-box2 icon-gradient bg-plum-plate">
                    </i>
                </div>
                <div>Dashboard
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.alumnis.index')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Alumni</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success"><span>{{$alumnis}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.members.index')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Club Member</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-primary"><span>{{$members}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.members.requests')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Member Requests</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>{{$memberRequests}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.activities.index')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Activities</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-danger"><span>{{$activities}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.events.index')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Events</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>{{$events}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">

                <a href="{{route('admin.blogs.index')}}">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Blogs</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-info"><span>{{$blogs}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection