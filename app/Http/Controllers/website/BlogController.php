<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::query()->paginate(8);
        return view('home.blog-list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getBlog($id)
    {
        //
        $blog = Blog::find($id);
        return redirect()->route('website.blog.show',app()->getLocale() == 'ar'? $blog->slug_ar : $blog->slug);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
        $blogs = Blog::all();
        $blog = Blog::where('slug',$slug)->orWhere('slug_ar',$slug)->orWhere('title',$slug)->orWhere('title_ar',$slug)->first();
        $meta_title = app()->getLocale() =='ar'? $blog->meta_title_ar :  $blog->meta_title;
        $meta_description = app()->getLocale() =='ar'? $blog->meta_description_ar : $blog->meta_description;
        $keyword = app()->getLocale() =='ar'? $blog->meta_keyword_ar :  $blog->meta_keyword;
        $canonical = $blog->canonical;
        return view('home.article',compact(
            'blogs','blog','meta_title',
        'meta_description','keyword','canonical'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
