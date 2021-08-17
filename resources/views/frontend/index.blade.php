@extends('layouts.frontend')
@section('title','Bup CF')
@section('content')
<!-- Start of slider area -->
<div class="slider-area">
    <div class="slider-active">
        @foreach ($sliders as $slider)
        <div class="slider-all">
            <img src="{{asset('images/'.$slider->image)}}" alt="">
            <div class="slider-text-wrapper">
                <div class="table">
                    <div class="table-cell">
                        <div class="slider-text animated">
                            <h3>The Best Learning Club</h3>
                            <h2>WELCOME TO OUR Club</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod. </p>
                            <a class="button extra-small mb-20" href="{{route('about')}}">
                                <span>READ MORE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End of slider area -->
<!-- start categoris area -->
<div class="categoris-area pb-80 pt-110">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">OUR Strengths</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br>eiumod tempor incididunt ut
                labore et. </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img src="{{asset('frontend/images/icons/c1.png')}}" alt="">
                    <h3><a href="#">SCIENCE & TECHNOLOGY</a></h3>
                    <p>Lorem ipsum dolor sit amet, consecte elsed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua Ut.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img src="{{asset('frontend/images/icons/c2.png')}}" alt="">
                    <h3><a href="#">HEALTH & PSYCHOLOGY</a></h3>
                    <p>Lorem ipsum dolor sit amet, consecte elsed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua Ut.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img src="{{asset('frontend/images/icons/c3.png')}}" alt="">
                    <h3><a href="#">BUSINESS & ACCOUNTING</a></h3>
                    <p>Lorem ipsum dolor sit amet, consecte elsed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua Ut.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img src="{{asset('frontend/images/icons/c4.png')}}" alt="">
                    <h3><a href="#">REAL ESTATE LAW</a></h3>
                    <p>Lorem ipsum dolor sit amet, consecte elsed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua Ut.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End categoris area -->
<!-- start courses area -->
<div class="top-courses-area gray-bg pb-160 pt-110">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">Recent Activities</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br>eiumod tempor incididunt ut
                labore et. </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            <div class="all-courses">
                @foreach ($activities as $activity)
                <div class="col-md-4">
                    <div class="single-course">
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
        </div>
    </div>
</div>
<!-- End courses area -->
<!-- start courses area -->
<div class="upcoming-event-area pt-110 pb-70">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">UPCOMING EVENTS</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br>eiumod tempor incididunt ut
                labore et. </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            <div class="all-upcoming-event">
                @foreach ($events as $event)
                @include('frontend.includes.single_event')
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End courses area -->
<div class="countdown-area bg-1 ptb-110 bg-opacity bg-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="countdown-all">
                    <h3>Get Benifits From The Club </h3>
                    <a  href="#"><h1 style="color: rgb(73, 110, 233)">Become a Member</h1></a>
                    <div class="timer">
                        {{-- <div style="" data-countdown="2022/01/01"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start courses area -->
<div class="upcoming-event-area pt-110 pb-80">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">OUR GALLERY</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br> eiumod tempor incididunt ut
                labore et. </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-md-4 col-sm-6">
                <div class="gallery-img mb-30">
                    <img src="{{asset('images/'.$gallery->image)}}" alt="">
                    <div class="gallery-view">
                        <a class="img-poppu" href="{{asset('images/'.$gallery->image)}}">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 text-center">
                <div class="counter-bottom2">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/1.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Members</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countMembers}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/2.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Alumnis</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countAlumnis}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/3.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Activities</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countActivities}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/4.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Events</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countEvents}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End courses area -->
<div class="lecturers-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Our Club Members</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                        <br>
                        eiumod tempor incididunt ut labore et.
                    </p>
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
    </div>
</div>
<!-- End page content -->
<div class="testimonial-area bg-10 bg-opacity bg-relative ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-all slider-active2">
                    @foreach ($testimonials as $testimonial)
                    <div class="single-testimonial">
                        <div class="test-img-name">
                            <div class="test-img">
                                <img src="{{asset('images/'.$testimonial->image)}}" alt="">
                            </div>
                            <div class="test-name">
                                <h3>{{$testimonial->name}}</h3>
                                <p>{{$testimonial->designation}}</p>
                            </div>
                        </div>
                        <p>{{$testimonial->message}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">BLOG</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br> eiumod tempor
                        incididunt ut labore et. </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-6">
                <div class="news-are">
                    <div class="news-img">
                        <img src="{{asset('images/'.$blog->image)}}" alt="">
                        <div class="news-date">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    {{$blog->created_at->toFormattedDateString()}}
                                </span>
                            </div>
                            {{-- <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>
                                <span class="published4">
                                    <a href="#">
                                        <i class="icofont icofont-comment"></i> 20
                                    </a>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="{{$blog->url()}}">{{$blog->title}}</a></h3>
                        <p>{!!Str::limit($blog->details,100)!!}</p>
                        <a class="button extra-small" href="{{$blog->url()}}">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection