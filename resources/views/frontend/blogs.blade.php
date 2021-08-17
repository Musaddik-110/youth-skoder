@extends('layouts.frontend')
@section('title','Blogs')
@section('content')
@include('includes.banner',['title'=>'Blogs'])
<section class="news-page-area ptb-110">
    <div class="container">
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
        {{$blogs->links()}}
    </div>
</section>
@endsection