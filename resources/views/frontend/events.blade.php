@extends('layouts.frontend')
@section('title','All Events')
@section('content')
@include('includes.banner',['title'=>'All Events'])

<section class="events-page ptb-110">
    <div class="container">
       <div class="row">
            <div class="all-upcoming-event">
                @foreach ($events as $event)
                @include('frontend.includes.single_event')
                @endforeach
            </div>
        </div>
       {{$events->links()}}
    </div>
</section>
@endsection