<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SettingDataTable;
use App\Http\Requests;
use App\Http\Requests\SettingCreateRequest;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use App\Http\Controllers\AppBaseController;
class SettingController extends AppBaseController
{

    public function index(SettingDataTable $settingDataTable)
    {
        return $settingDataTable->render('admin.settings.index');
    }


    public function create()
    {
        return view('admin.settings.create');
    }


    public function store(SettingCreateRequest $request)
    {
        Setting::create($request->all());  
        //$imageName = FileHelper::uploadImage($request);      
        //Setting::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Setting Created Successful.", "Success");
        return redirect(route('admin.settings.index'));
    }


    public function show(Setting $setting)
    {
        return view('admin.settings.show',compact('setting'));
    }


    public function edit(Setting $setting)
    {
        return view('admin.settings.edit',compact('setting'));
    }


    public function update(Setting $setting, SettingUpdateRequest $request)
    {
        // $imageName = FileHelper::uploadImage($request, $setting);
        // $setting->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        $setting->fill($request->all())->save();
        notify()->success("Setting Updated Successful.", "Success");
        return redirect(route('admin.settings.index'));
    }


    public function destroy(Setting $setting)
    {
        //FileHelper::deleteImage($setting);
        $setting->delete();
    }
}
