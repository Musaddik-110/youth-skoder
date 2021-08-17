@extends('layouts.frontend')
@section('title','Gallery')
@section('content')
@include('includes.banner',['title'=>'Our Gallery'])

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
        {{$galleries->links()}}
    </div>
</div>
@endsection