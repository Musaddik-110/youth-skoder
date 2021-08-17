@extends('layouts.frontend')
@section('title','Event Details')
@section('content')
@include('includes.banner',['title'=>'Event Details'])

<section class="events-details-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="events-details-right-sidebar">
                    <div class="events-details-img1">
                        <img alt="" src="{{asset('images/'.$event->image)}}">
                    </div>
                    <div class="events-details-all">
                        <div class="events-details-time">
                            <div class="time-icon">
                                <i class="icofont icofont-clock-time"></i>
                            </div>
                            <div class="time-text">
                                <span>Date</span>
                                <p>{{$event->date->toFormattedDateString()}}</p>
                            </div>
                        </div>
                        <div class="events-details-time mrg-xs">
                            <div class="time-icon">
                                <i class="icofont icofont-flag"></i>
                            </div>
                            <div class="time-text">
                                <span>Start Time</span>
                                <p>{{date('h:i a',strtotime($event->time))}}</p>
                            </div>
                        </div>
                        <div class="events-details-time mrg-xs">
                            <div class="time-icon">
                                <i class="icofont icofont-social-google-map"></i>
                            </div>
                            <div class="time-text">
                                <span>Address</span>
                                <p>{{$event->place}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-lectures">

                        <h2>{{$event->title}}</h2>
                        <h3>Event Description</h3>
                        <p>{!!$event->details!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection