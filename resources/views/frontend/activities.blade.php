@extends('layouts.frontend')
@section('title','Activities')
@section('content')
@include('includes.banner',['title'=>'Activities'])

<section class="top-courses pt-110 pb-80">
    <div class="container">
        <div class="row">
            @foreach ($activities as $activity)
            <div class="col-md-4 col-sm-6">
                <div class="single-course mb-30">
                    <a href="{{$activity->url()}}"><img src="{{asset('images/'.$activity->image)}}" alt=""></a>
                    <div class="single-coures-text">
                        <h3><a href="{{$activity->url()}}">{{$activity->title}}</a></h3>
                        <p>{!!Str::limit($activity->details,100)!!}</p>
                        <a href="{{$activity->url()}}">READ MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$activities->links()}}
    </div>
</section>
@endsection