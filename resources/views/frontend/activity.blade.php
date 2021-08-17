@extends('layouts.frontend')
@section('title','Activity')
@section('content')
@include('includes.banner',['title'=>'Activity'])
<section class="news-details-area pt-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-details-all gray-bg">
                    <img src="{{asset('images/big-'.$activity->image)}}" alt="">
                    <div class="news-details-all-area pt-40 pl-200 pr-200">
                        <div class="news-details-top">
                            <h3>{{$activity->title}} </h3>
                            <div class="news-details-calender">
                                <div class="blog-meta-2">
                                    <span class="published3">
                                        <i class="icofont icofont-ui-calendar"></i>
                                        {{$activity->created_at->toFormattedDateString()}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="news-details-middle">
                            {!!$activity->details!!}
                        </div>
                        {{-- <div class="news-details-bottom">
                            <div class="blog-reply-all">
                                <h3 class="leave-comment-text">Comment</h3>
                                <div class="blog-top">
                                    <div class="news-allreply">
                                        <img src="images/blog/33.jpg" alt="">
                                        <div class="nes-icon">
                                            <a href="#"><i class="icofont icofont-reply"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <h3>Mobashir Ian</h3>
                                            <span>14 September 2016</span>
                                        </div>
                                        <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud </p>
                                    </div>
                                </div>
                                <div class="blog-top blog-top-mrg">
                                    <div class="news-allreply">
                                        <img src="images/blog/34.jpg" alt="">
                                        <div class="nes-icon">
                                            <a href="#"><i class="icofont icofont-reply"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <h3>Farhana shuvo</h3>
                                            <span>14 September 2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis </p>
                                    </div>
                                </div>
                                <div class="blog-top">
                                    <div class="news-allreply">
                                        <img src="images/blog/35.jpg" alt="">
                                        <div class="nes-icon">
                                            <a href="#"><i class="icofont icofont-reply"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <h3>Shakara Tasnim</h3>
                                            <span>14 September 2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud </p>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-comment">
                                <h3 class="leave-comment-text">Leave a Comment</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input placeholder="Name*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input placeholder="Email*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-leave">
                                                <textarea placeholder="Comment*"></textarea>
                                                <button class="submit" type="submit">Send Commant</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection