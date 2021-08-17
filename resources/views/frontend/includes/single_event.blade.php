<a href="{{$event->url()}}">
    <div class="col-md-6 col-sm-12">
        <div class="single-upcoming mb-40">
            <div class="upcoming-date text-center">
                <div class="date-all">
                    <span>{{date('d',strtotime($event->date))}}</span>
                    <span class="month">{{date('M',strtotime($event->date))}}</span>
                </div>
            </div>
            <div class="single-upcoming-text">
                <div class="blog-meta">
                    <span class="published3">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        {{date('h:i a',strtotime($event->time))}}
                    </span>
                    <span class="published4">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{$event->place}}
                    </span>
                </div>
                <h3><a href="{{$event->url()}}">{{$event->title}}</a></h3>
                <p>{!!Str::limit($event->details,100)!!}
                    <a style="color: blue" href="{{$event->url()}}">View Details <i class="fa fa-arrow-right"
                            aria-hidden="true"> </i></a></p>
            </div>
        </div>
    </div>
</a>