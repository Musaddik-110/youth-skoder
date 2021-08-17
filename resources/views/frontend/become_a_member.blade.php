@extends('layouts.frontend')
@section('title','Become A Club Member')
@section('content')
@include('includes.banner',['title'=>'Become A Club Member'])

<section class="news-details-area pt-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-details-all gray-bg">
                    <div class="news-details-all-area pt-40 pl-200 pr-200">
                        @include('includes.message')
                        <div class="news-details-bottom">
                            <div class="leave-comment">
                                <h3 class="leave-comment-text">Become A Club Member</h3>
                                <form action="{{route('becomeAMember')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input required name="designation" value="General Member" type="hidden">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('name')}}" required name="name" placeholder="Name*"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('email')}}" required name="email"
                                                    placeholder="Email*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('phone')}}" required name="phone"
                                                    placeholder="Phone*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('facebook')}}" name="facebook"
                                                    placeholder="Facebook" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('twitter')}}" name="twitter" placeholder="Twitter"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input value="{{old('linkedin')}}" name="linkedin"
                                                    placeholder="Linked In" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-leave">
                                                <textarea required name="about"
                                                    placeholder="About Youself. Write about your skills,achievement,Experience.*">{{old('about')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-leave">
                                                Image: <input required name="image" type="file"><br><br>
                                                <button class="submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection