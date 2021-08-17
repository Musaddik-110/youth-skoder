<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ActivityDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\ActivityCreateRequest;
use App\Http\Requests\ActivityUpdateRequest;
use App\Models\Activity;
use App\Http\Controllers\AppBaseController;
class ActivityController extends AppBaseController
{

    public function index(ActivityDataTable $activityDataTable)
    {
        return $activityDataTable->render('admin.activities.index');
    }


    public function create()
    {
        return view('admin.activities.create');
    }


    public function store(ActivityCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, NULL, ['big', 'bigHeight' => 500, 'bigWidth' => 1100], 370, 204);
        Activity::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Activity Created Successful.", "Success");
        return redirect(route('admin.activities.index'));
    }


    public function show(Activity $activity)
    {
        return view('admin.activities.show',compact('activity'));
    }


    public function edit(Activity $activity)
    {
        return view('admin.activities.edit',compact('activity'));
    }


    public function update(Activity $activity, ActivityUpdateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, $activity, ['big', 'bigHeight' => 500, 'bigWidth' => 1100], 370, 204);
        $activity->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Activity Updated Successful.", "Success");
        return redirect(route('admin.activities.index'));
    }


    public function destroy(Activity $activity)
    {
        FileHelper::deleteImage($activity);
        $activity->delete();
    }
}
