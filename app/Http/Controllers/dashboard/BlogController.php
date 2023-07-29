<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\media;
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
        $blogs = Blog::all();
        return view('dashboard.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $blog_cats = BlogCategory::all();
        return view('dashboard.blog.create',compact('blog_cats'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $blog = Blog::create([
            'title_ar' => $request->name_ar,
            'title' => $request->name,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'blog_category_id' => $request->blog_category_id,
            'slug_ar' => $request->slug_ar,
            'new_slug_ar' => $request->new_slug_ar,
            'meta_title_ar' => $request->meta_title_ar,
            'meta_description_ar' => $request->meta_description_ar,
            'meta_keyword_ar' => $request->meta_keyword_ar,
            'alt_image_ar' => $request->alt_image_ar,
            'slug' => $request->slug,
            'new_slug' => $request->new_slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'alt_image' => $request->alt_image,

        ]);

        if($request->hasFile('image')){

            $upload = new media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $blog->update([
                'image' => $upload->id,
            ]);
        }

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blog = Blog::find($id);
        $blog_cats = BlogCategory::all();
        return view('dashboard.blog.edit',compact('blog','blog_cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->name == null? $blog->title : $request->name,
            'content_en' =>  $request->content_en == null? $blog->content_en : $request->content_en,
            'blog_category_id' => $request->blog_category_id == null? $blog->blog_category_id : $request->blog_category_id,
            'slug' => $request->slug == null? $blog->slug : $request->slug,
            'new_slug' => $request->new_slug == null? $blog->new_slug : $request->new_slug,
            'meta_title' => $request->meta_title == null? $blog->meta_title : $request->meta_title,
            'meta_keyword' => $request->meta_keyword == null? $blog->meta_keyword : $request->meta_keyword,
            'alt_image' => $request->alt_image == null? $blog->alt_image : $request->alt_image,
            'canonical'  => $request->canonical == null? $blog->canonical : $request->canonical,
            'slug_ar' => $request->slug_ar == null? $blog->slug_ar : $request->slug_ar,
            'new_slug_ar' => $request->new_slug_ar == null? $blog->new_slug_ar : $request->new_slug_ar,
            'meta_title_ar' =>  $request->meta_title_ar == null? $blog->meta_title_ar : $request->meta_title_ar,
            'meta_description_ar' => $request->meta_description_ar == null? $blog->meta_description_ar : $request->meta_description_ar,
            'meta_keyword_ar' => $request->meta_keyword_ar == null? $blog->meta_keyword_ar : $request->meta_keyword_ar,
            'alt_image_ar' => $request->alt_image_ar == null? $blog->alt_image_ar : $request->alt_image_ar, 'title_ar' => $request->name_ar == null? $blog->name_ar : $request->name_ar,
            'content_ar' => $request->content_ar == null? $blog->content_ar : $request->content_ar,

        ]);
        if($request->hasFile('image')){

            $upload = new media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $blog->update([
                'image' => $upload->id,
            ]);
        }

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
