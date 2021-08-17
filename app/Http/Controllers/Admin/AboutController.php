<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AboutDataTable;
use App\Http\Requests;
use App\Http\Requests\AboutCreateRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use App\Http\Controllers\AppBaseController;
class AboutController extends AppBaseController
{

    public function index(AboutDataTable $aboutDataTable)
    {
        return $aboutDataTable->render('admin.abouts.index');
    }


    public function create()
    {
        return redirect(route('admin.abouts.index'));
        return view('admin.abouts.create');
    }


    public function store(AboutCreateRequest $request)
    {
        About::create($request->all());  
        //$imageName = FileHelper::uploadImage($request);      
        //About::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("About Created Successful.", "Success");
        return redirect(route('admin.abouts.index'));
    }


    public function show(About $about)
    {
        return view('admin.abouts.show',compact('about'));
    }


    public function edit(About $about)
    {
        return view('admin.abouts.edit',compact('about'));
    }


    public function update(About $about, AboutUpdateRequest $request)
    {
        // $imageName = FileHelper::uploadImage($request, $about);
        // $about->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        $about->fill($request->all())->save();
        notify()->success("About Updated Successful.", "Success");
        return redirect(route('admin.abouts.index'));
    }


    public function destroy(About $about)
    {
        //FileHelper::deleteImage($about);
        $about->delete();
    }
}
