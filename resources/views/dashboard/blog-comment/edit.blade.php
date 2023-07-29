@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$blog_comment->name}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$blog_comment->email}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Content</label>
                    <textarea type="text" class="form-control" name="name">{{$blog_comment->comment}}</textarea>
                </div>

            </form>
        </div>
    </div>
@endsection
