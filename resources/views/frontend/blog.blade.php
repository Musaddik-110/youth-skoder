@extends('layouts.frontend')
@section('title','Blog')
@section('content')
@include('includes.banner',['title'=>'Blog'])
<section class="news-details-area pt-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-details-all gray-bg">
                    <img src="{{asset('images/big-'.$blog->image)}}" alt="">
                    <div class="news-details-all-area pt-40 pl-200 pr-200">
                        <div class="news-details-top">
                            <h3>{{$blog->title}} </h3>
                            <div class="news-details-calender">
                                <div class="blog-meta-2">
                                    <span class="published3">
                                        <i class="icofont icofont-ui-calendar"></i>
                                        {{$blog->created_at->toFormattedDateString()}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="news-details-middle">
                            {!!$blog->details!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection