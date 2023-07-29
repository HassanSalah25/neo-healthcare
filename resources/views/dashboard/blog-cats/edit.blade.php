@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('blog-cats.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              
                <div class="mb-3">
                    <label for="name" class="form-label">Title in English</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$blog->title}}">
                </div>
                <div class="mb-3">
                    <label for="name_ar" class="form-label">Title in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{$blog->title_ar}}">
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
