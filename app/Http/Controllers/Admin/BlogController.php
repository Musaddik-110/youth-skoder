<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Http\Controllers\AppBaseController;

class BlogController extends AppBaseController
{
    private $icon = 'pe-7s-wallet';

    public function index(BlogDataTable $blogDataTable)
    {
        $icon = 'pe-7s-wallet';
        return $blogDataTable->render('admin.blogs.index',compact('icon'));
    }


    public function create()
    {
        return view('admin.blogs.create')->with('icon', $this->icon);
    }


    public function store(BlogCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, NULL, ['big', 'bigHeight' => 500, 'bigWidth' => 1100], 370, 250);
        Blog::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success("Blog Created Successful.", "Success");
        return redirect(route('admin.blogs.index'));
    }


    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'))->with('icon',$this->icon);
    }


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'))->with('icon', $this->icon);
    }


    public function update(Blog $blog, BlogUpdateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, $blog, ['big', 'bigHeight' => 500, 'bigWidth' => 1100], 370, 250);
        $blog->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        notify()->success("Blog Updated Successful.", "Success");
        return redirect(route('admin.blogs.index'));
    }


    public function destroy(Blog $blog)
    {
        FileHelper::deleteImage($blog);
        $blog->delete();
    }
}
