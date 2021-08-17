<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AlumniDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\AlumniCreateRequest;
use App\Http\Requests\AlumniUpdateRequest;
use App\Models\Alumni;
use App\Http\Controllers\AppBaseController;
class AlumniController extends AppBaseController
{

    public function index(AlumniDataTable $alumniDataTable)
    {
        return $alumniDataTable->render('admin.alumnis.index');
    }


    public function create()
    {
        return view('admin.alumnis.create');
    }


    public function store(AlumniCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request,NULL,[],270,340);      
        Alumni::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Alumni Created Successful.", "Success");
        return redirect(route('admin.alumnis.index'));
    }


    public function show(Alumni $alumni)
    {
        return view('admin.alumnis.show',compact('alumni'));
    }


    public function edit(Alumni $alumni)
    {
        return view('admin.alumnis.edit',compact('alumni'));
    }


    public function update(Alumni $alumni, AlumniUpdateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, $alumni,[],270,340);
        $alumni->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Alumni Updated Successful.", "Success");
        return redirect(route('admin.alumnis.index'));
    }


    public function destroy(Alumni $alumni)
    {
        FileHelper::deleteImage($alumni);
        $alumni->delete();
    }
}
