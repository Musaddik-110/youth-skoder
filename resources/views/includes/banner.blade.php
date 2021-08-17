{{-- <section class="sub-bnr" style="background:url('{{asset('frontend/images/bg/sub-bnr-bg-2.jpg')}}') no-repeat"
    data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h1>{{$programName}}</h1>
            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">{{$programName}}</li>
            </ol>
        </div>
    </div>
</section> --}}

<section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs">
                    <h2 class="page-title">{{$title}}</h2>
                    <ul>
                        <li>
                            <a class="active" href="{{route('index')}}">Home</a>
                        </li>
                        <li>{{$title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>