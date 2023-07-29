<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = BlogCategory::all();
        return view('home.blog-cats.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.blog-cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $blog = BlogCategory::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
        ]);

        return redirect()->route('blog-cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog = BlogCategory::find($id);
        return view('dashboard.blog-cats.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        //

        $blog = BlogCategory::find($id);
        $blog->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
        ]);


        return redirect()->route('blog-cats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $blog = BlogCategory::find($id);
        $blog->delete();

        return redirect()->route('blog-cats.index');
    }
}
