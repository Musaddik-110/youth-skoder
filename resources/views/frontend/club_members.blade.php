@extends('layouts.frontend')
@section('title','Club Members')
@section('content')
@include('includes.banner',['title'=>'Club Members'])
<section class="lecturers-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Club Members</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($clubMembers as $clubMember)
            <div class="col-md-3 col-sm-6">
                <div class="single-lecturers">
                    <div class="lecturers-img">
                        <a href="#"><img alt="" src="{{asset('images/'.$clubMember->image)}}"></a>
                        <div class="img-title">
                            <h3>{{$clubMember->name}}</h3>
                            <p> {{$clubMember->designation}}</p>
                        </div>
                    </div>
                    <div class="lecturers-details">
                        <h3>{{$clubMember->name}}</h3>
                        <p> {{$clubMember->designation}}</p>
                        <div class="last-about-details">
                            <ul>
                                @if ($clubMember->facebook)
                                <li><a href="{{$clubMember->facebook}}"><i class="icofont icofont-social-facebook"></i></a></li>
                                @endif
                                @if ($clubMember->twitter)
                                <li><a href="{{$clubMember->twitter}}"><i class="icofont icofont-social-tumblr"></i></a></li>
                                @endif
                                @if ($clubMember->linkedin)
                                <li><a href="{{$clubMember->linkedin}}"><i class="icofont icofont-social-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <p>Email : {{$clubMember->email}}</p>
                        <p>Phone : {{$clubMember->phone}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$clubMembers->links()}}
    </div>
</section>
@endsection