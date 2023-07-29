@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('service-category.update',$service_category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$service_category->name}}">
                </div>
                <div class="mb-3">
                    <label for="name_ar" class="form-label">Name in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{$service_category->name_ar}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description in English</label>
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{ $service_category->description }}</textarea>
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
