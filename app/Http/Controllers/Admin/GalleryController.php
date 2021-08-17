<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GalleryDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\GalleryCreateRequest;
use App\Http\Requests\GalleryUpdateRequest;
use App\Models\Gallery;
use App\Http\Controllers\AppBaseController;

class GalleryController extends AppBaseController
{

    public function index(GalleryDataTable $galleryDataTable)
    {
        return $galleryDataTable->render('admin.galleries.index');
    }


    public function create()
    {
        return view('admin.galleries.create');
    }


    public function store(GalleryCreateRequest $request)
    {
        // return $request;
        if($request->type == "Gallery"){
            $imageName = FileHelper::uploadImage($request,NULL,[],370,300);
        }else{
            $imageName = FileHelper::uploadImage($request, NULL, [], 1920, 753);

        }
        Gallery::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Gallery Created Successful.", "Success");
        return redirect(route('admin.galleries.index'));
    }


    public function show(Gallery $gallery)
    {
        return view('admin.galleries.show', compact('gallery'));
    }


    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }


    public function update(Gallery $gallery, GalleryUpdateRequest $request)
    {

        return redirect(route('admin.galleries.index'));
        // $imageName = FileHelper::uploadImage($request, $gallery);
        // $gallery->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        $gallery->fill($request->all())->save();
        notify()->success("Gallery Updated Successful.", "Success");
        return redirect(route('admin.galleries.index'));
    }


    public function destroy(Gallery $gallery)
    {
        FileHelper::deleteImage($gallery);
        $gallery->delete();
    }
}
