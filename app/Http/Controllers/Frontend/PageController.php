<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberCreateRequest;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Activity;
use App\Models\Alumni;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Member;

class PageController extends Controller
{
    public function gallery()
    {
        $galleries = Gallery::where('type', 'Gallery')->latest()->paginate(12);
        return view('frontend.galleries', compact('galleries'));
    }

    public function activities()
    {
        $activities = Activity::latest()->paginate(12);
        return view('frontend.activities', compact('activities'));
    }

    public function activity($slug, $id)
    {
        $activity = Activity::findOrFail($id);
        return view('frontend.activity', compact('activity'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('frontend.blogs', compact('blogs'));
    }

    public function alumnis()
    {
        $alumnis = Alumni::latest()->paginate(12);
        return view('frontend.alumnis', compact('alumnis'));
    }

    public function clubMembers()
    {
        $clubMembers = Member::where('status', 1)->orderBy('id')->paginate(12);
        return view('frontend.club_members', compact('clubMembers'));
    }

    public function blog($slug, $id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog', compact('blog'));
    }

    public function events()
    {
        $events = Event::orderBy('date')->paginate(12);
        return view('frontend.events', compact('events'));
    }

    public function upcomingEvents()
    {
        $events = Event::where('date', '>=', today())->orderBy('date')->get();
        return view('frontend.upcoming_events', compact('events'));
    }

    public function event($slug, $id)
    {
        $event = Event::findOrFail($id);
        return view('frontend.event', compact('event'));
    }

    public function becomeAMemberView()
    {
        return view('frontend.become_a_member');
    }

    public function becomeAMember(MemberCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, NULL, [], 270, 340);
        Member::create(array_merge($request->all(), ['image' => $imageName, 'status' => 0, 'designation' => 'General Member']));
        return back()->with('success', 'Submit Successful. Admin will review your account.');
    }

    public function termsAndConditions()
    {
        return view('frontend.terms_and_conditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }
}
