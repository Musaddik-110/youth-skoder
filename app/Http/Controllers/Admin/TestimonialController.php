<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TestimonialDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\TestimonialCreateRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Models\Testimonial;
use App\Http\Controllers\AppBaseController;
class TestimonialController extends AppBaseController
{

    public function index(TestimonialDataTable $testimonialDataTable)
    {
        return $testimonialDataTable->render('admin.testimonials.index');
    }


    public function create()
    {
        return view('admin.testimonials.create');
    }


    public function store(TestimonialCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request,NULL,[],100,100);      
        Testimonial::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Testimonial Created Successful.", "Success");
        return redirect(route('admin.testimonials.index'));
    }


    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show',compact('testimonial'));
    }


    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit',compact('testimonial'));
    }


    public function update(Testimonial $testimonial, TestimonialUpdateRequest $request)
    {

        $imageName = FileHelper::uploadImage($request, $testimonial, [], 100, 100);  
        $testimonial->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Testimonial Updated Successful.", "Success");
        return redirect(route('admin.testimonials.index'));
    }


    public function destroy(Testimonial $testimonial)
    {
        FileHelper::deleteImage($testimonial);
        $testimonial->delete();
    }
}
