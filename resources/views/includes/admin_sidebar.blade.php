{{-- @include('layouts.menu') --}}
<li class="app-sidebar__heading">Welcome To The Admin Panel</li>
{{-- Dashboard --}}
<li class="">
    <a href="{{route('admin.dashboard')}}" class="{{ Request::is('rt-admin/dashboard*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-box2"></i>
        Dashboard
    </a>
</li>
{{-- Admins --}}
@if(Auth::user()->super_admin == 1)
<li class="">
    <a href="{{route('admin.admins.index')}}" class="{{ Request::is('rt-admin/admins*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-user"></i>
        Admins
    </a>
</li>
@endif
{{-- Users --}}
@if(Route::has('admin.users.index'))
<li class="">
    <a href="{{route('admin.users.index')}}" class="{{ Request::is('rt-admin/users**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-users"></i>
        Users
    </a>
</li>
@endif


<li class="">
    <a href="{{route('admin.abouts.index')}}" class="{{ Request::is('rt-admin/abouts**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-album"></i>
        About Page
    </a>
</li>

<li class="">
    <a href="{{route('admin.activities.index')}}" class="{{ Request::is('rt-admin/activities**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-map"></i>
        Recent Activities
    </a>
</li>

<li class="">
    <a href="{{route('admin.events.index')}}" class="{{ Request::is('rt-admin/events**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-science"></i>
        Events
    </a>
</li>
<li class="{{ Request::is('rt-admin/members**') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-diamond"></i>
        Club Members
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="{{route('admin.members.index')}}">
                <i class="metismenu-icon"></i>
                Members
            </a>
        </li>
        <li>
            <a href="{{route('admin.members.requests')}}">
                <i class="metismenu-icon">
                </i>Requests
            </a>
        </li>
    </ul>
</li>

<li class="">
    <a href="{{route('admin.testimonials.index')}}"
        class="{{ Request::is('rt-admin/testimonials**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-menu"></i>
        Testimonials
    </a>
</li>

<li class="">
    <a href="{{route('admin.alumnis.index')}}" class="{{ Request::is('rt-admin/alumnis**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-users"></i>
        Alumnis
    </a>
</li>

<li class="">
    <a href="{{route('admin.galleries.index')}}" class="{{ Request::is('rt-admin/galleries**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-photo"></i>
        Galleries
    </a>
</li>




<li class="">
    <a href="{{route('admin.blogs.index')}}" class="{{ Request::is('rt-admin/blogs**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-wallet"></i>
        Blogs
    </a>
</li>


<li class="">
    <a href="{{route('admin.settings.index')}}" class="{{ Request::is('rt-admin/settings**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-settings"></i>
        Settings
    </a>
</li>

{{-- Backup --}}
<li class="">
    <a href="{{route('admin.backups.index')}}" class="{{ Request::is('rt-admin/backups**') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-cloud"></i>
        Backup
    </a>
</li>
{{-- Contacts --}}
@if(Route::has('admin.contacts'))
<li class="">
    <a href="{{route('admin.contacts')}}" class="{{ Request::is('rt-admin/contact*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-network"></i>
        Contacts
    </a>
</li>
@endif
{{-- Feedbacks --}}
@if(Route::has('admin.feedbacks'))
<li class="">
    <a href="{{route('admin.feedbacks')}}" class="{{ Request::is('rt-admin/feedback*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-note2"></i>
        Feedbacks
    </a>
</li>
@endif



