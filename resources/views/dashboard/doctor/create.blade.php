@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name in English</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="name_ar" class="form-label">Name in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar">
                </div>
                <div class="mb-3">
                    <label for="speciality" class="form-label">Speciality in English</label>
                    <textarea type="text" class="form-control" name="speciality" id="speciality"></textarea>
                </div>
                <div class="mb-3">
                    <label for="speciality_ar" class="form-label">Speciality in Arabic</label>
                    <textarea type="text" class="form-control" name="speciality_ar" id="speciality_ar"></textarea>
                </div>
                <div class="mb-3">
                    <label for="years_of_experience" class="form-label">Years Of Experience</label>
                    <input type="number" class="form-control" name="years_of_experience" id="years_of_experience">
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
