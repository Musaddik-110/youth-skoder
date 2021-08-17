<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Alumni;
use App\Models\Blog;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\Event;
use App\Models\Member;
use App\Models\Setting;
use App\Models\Testimonial;
use Arr;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $countActivities = Activity::count();
        $countMembers = Member::count();
        $countAlumnis = Alumni::count();
        $countEvents = Event::count();
        $sliders = Gallery::where('type', 'Slider')->latest()->get();
        $galleries = Gallery::where('type', 'Gallery')->latest()->take(6)->get();
        $activities = Activity::latest()->take(5)->get();
        $events = Event::where('date', '>=', today())->orderBy('date')->take(4)->get();
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->get();
        $clubMembers = Member::where('status', 1)->orderBy('id')->take(4)->get();
        return view('frontend.index', compact(
            'sliders',
            'galleries',
            'activities',
            'events',
            'blogs',
            'testimonials',
            'clubMembers',
            'countActivities',
            'countMembers',
            'countAlumnis',
            'countEvents'
        ));
    }
}
