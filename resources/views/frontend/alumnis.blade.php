@extends('layouts.frontend')
@section('title','Alumni Members')
@section('content')
@include('includes.banner',['title'=>'Alumni Members'])
<section class="lecturers-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Alumni Members</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($alumnis as $alumni)
            <div class="col-md-3 col-sm-6">
                <div class="single-lecturers">
                    <div class="lecturers-img">
                        <a href="#"><img alt="" src="{{asset('images/'.$alumni->image)}}"></a>
                        <div class="img-title">
                            <h3>{{$alumni->name}}</h3>
                            <p> {{$alumni->designation}}</p>
                        </div>
                    </div>
                    <div class="lecturers-details">
                        <h3>{{$alumni->name}}</h3>
                        <p> {{$alumni->designation}}</p>
                        <div class="last-about-details">
                            <ul>
                                @if ($alumni->facebook)
                                <li><a href="{{$alumni->facebook}}"><i class="icofont icofont-social-facebook"></i></a></li>
                                @endif
                                @if ($alumni->twitter)
                                <li><a href="{{$alumni->twitter}}"><i class="icofont icofont-social-tumblr"></i></a></li>
                                @endif
                                @if ($alumni->linkedin)
                                <li><a href="{{$alumni->linkedin}}"><i class="icofont icofont-social-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <p>Email : {{$alumni->email}}</p>
                        <p>Phone : {{$alumni->phone}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$alumnis->links()}}
    </div>
</section>
@endsection