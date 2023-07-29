@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name in English</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$service->name_ar}}">
                </div>
                <div class="mb-3">
                    <label for="name_ar" class="form-label">Name in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{$service->name_ar}}">
                </div>
                <div class="mb-3">
                    <label for="doctor" class="form-label">Doctor</label>
                    <select multiple class="form-control" name="doctor[]" id="doctor">
                        <option value="">Select Doctor</option>
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}" {{\App\Models\DoctorService::where('service_id', $service->id)->where('doctor_id', $doctor->id)->exists() ? "selected":''}}>{{$doctor->first_name_ar}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="service_category" class="form-label">Category</label>
                    <select class="form-control" name="service_category" id="service_category">
                        <option value="">Select Service Category</option>
                        @foreach($service_category as $category)
                            <option value="{{$category->id}}" {{$service->service_category_id == $category->id ? "selected":''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description in English</label>
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description" required>{{ $service->description??null }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description_ar" class="form-label">Description in Arabic</label>
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="description_ar" required>{{ $service->description_ar??null }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
