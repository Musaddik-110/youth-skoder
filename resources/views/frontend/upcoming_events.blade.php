@extends('layouts.frontend')
@section('title','Upcoming Events')
@section('content')
@include('includes.banner',['title'=>'Upcoming Events'])

<section class="events-page ptb-110">
    <div class="container">
       <div class="row">
            <div class="all-upcoming-event">
                @foreach ($events as $event)
               @include('frontend.includes.single_event')
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection