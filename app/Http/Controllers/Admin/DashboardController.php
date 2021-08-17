<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Alumni;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $alumnis = Alumni::count();
        $activities = Activity::count();
        $members = Member::where('status',1)->count();
        $events = Event::count();
        $blogs = Blog::count();
        $memberRequests = Member::where('status',0)->count();
        return view('admin.others.dashboard', compact(
            'alumnis','activities','members','events','blogs','memberRequests'));
    }
}
