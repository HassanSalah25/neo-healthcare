@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="row">
            <button onclick="openTab('item1',this)" id="btn_item1" class="col btn">English</button>
            <button onclick="openTab('item2',this)" id="btn_item2" class="col btn">Arabic</button>
        </div>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div  id="item1" class="tab-content" >
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Title in English</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$blog->title}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="content" class="form-label">Content in English</label>
                            <div class="col">
                                <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="content_en" required>{!! $blog->content_en !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="blog_categor_id" class="form-label">Blog Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="blog_categor_id">
                                <option value="">Choose Category</option>
                                @foreach($blog_cats as $blog_cat)
                                    <option value="{{$blog_cat->id}}" {{$blog_cat->id == $blog->blog_category_id ? 'selected' : ''}}>{{$blog_cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <h2 for="content_ar" class="form-label">SEO Information</h2>
                    </div>
                    <div class="mb-3">
                        <label for="canonical" class="form-label">Canonical</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="canonical" value="{{$blog->canonical}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="slug" class="form-label">slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" value="{{$blog->slug}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="new_slug" class="form-label">New Slug</label>
                            <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$blog->new_slug}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="meta_title" class="form-label">meta title</label>
                            <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$blog->meta_title}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="meta_description" class="form-label">meta description</label>
                            <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$blog->meta_description}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="meta_keyword" class="form-label">meta keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$blog->meta_keyword}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alt_image" class="form-label">Alt image</label>
                            <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$blog->alt_image}}">
                        </div>
                    </div>
                </div>
                <div  id="item2" class="tab-content" >
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name_ar" class="form-label">Title in Arabic</label>
                            <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{$blog->title_ar}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="content_ar" class="form-label">Content in Arabic</label>
                            <div class="col">
                                <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="content_ar" required>{{$blog->content_ar}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="blog_category_id" class="form-label">Blog Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="blog_category_id">
                                <option  value="">Choose Category</option>
                                @foreach($blog_cats as $blog_cat)
                                    <option value="{{$blog_cat->id}}" {{$blog_cat->id == $blog->blog_category_id ? 'selected' : ''}}>{{$blog_cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <h2 for="content_ar" class="form-label">SEO Information</h2>
                    </div>
                    <div class="mb-3">
                        <label for="canonical" class="form-label">Canonical</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="canonical" value="{{$blog->canonical}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="slug_ar" class="form-label">slug</label>
                            <input type="text" class="form-control" name="slug_ar" id="slug_ar" value="{{$blog->slug_ar}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="new_slug_ar" class="form-label">New Slug</label>
                            <input type="text" class="form-control" name="new_slug_ar" id="new_slug_ar" value="{{$blog->new_slug_ar}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="meta_title_ar" class="form-label">meta title</label>
                            <input type="text" class="form-control" name="meta_title_ar" id="meta_title_ar" value="{{$blog->meta_title_ar}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="meta_description_ar" class="form-label">meta description</label>
                            <input type="text" class="form-control" name="meta_description_ar" id="meta_description_ar" value="{{$blog->meta_description_ar}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="meta_keyword_ar" class="form-label">meta keyword</label>
                            <input type="text" class="form-control" name="meta_keyword_ar" id="meta_keyword_ar" value="{{$blog->meta_keyword_ar}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alt_image_ar" class="form-label">Alt image</label>
                            <input type="text" class="form-control" name="alt_image_ar" id="alt_image_ar" value="{{$blog->alt_image_ar}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
