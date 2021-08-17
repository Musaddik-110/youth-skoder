<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\EventDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use App\Http\Controllers\AppBaseController;
class EventController extends AppBaseController
{

    public function index(EventDataTable $eventDataTable)
    {
        return $eventDataTable->render('admin.events.index');
    }


    public function create()
    {
        return view('admin.events.create');
    }


    public function store(EventCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request,NULL,[],770,400);      
        Event::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Event Created Successful.", "Success");
        return redirect(route('admin.events.index'));
    }


    public function show(Event $event)
    {
        return view('admin.events.show',compact('event'));
    }


    public function edit(Event $event)
    {
        return view('admin.events.edit',compact('event'));
    }


    public function update(Event $event, EventUpdateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, $event,[],770,400);
        $event->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Event Updated Successful.", "Success");
        return redirect(route('admin.events.index'));
    }


    public function destroy(Event $event)
    {
        FileHelper::deleteImage($event);
        $event->delete();
    }
}
