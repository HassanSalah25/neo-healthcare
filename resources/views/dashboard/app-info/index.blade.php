@extends('dashboard.layouts.app')

@section('content')

    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Statistics</h6>
            <form action="{{route('appInfo.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Number of Clients</label>
                    <input type="hidden" name="type[]" value="no_of_clients">
                    <input type="text" class="form-control" name="no_of_clients" value="{{get_setting('no_of_clients')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Number of Doctors</label>
                    <input type="hidden" name="type[]" value="no_of_doctors">
                    <input type="text" class="form-control" name="no_of_doctors" value="{{get_setting('no_of_doctors')}}">
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>

    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">About Page</h6>
            <form action="{{route('appInfo.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Image</label>
                    <input type="hidden" name="type[]" value="about_image">
                    <input type="file" class="form-control" name="about_image" value="{{get_setting('about_image')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="hidden" name="type[]" value="about_title">
                    <input type="text" class="form-control" name="about_title" value="{{get_setting('about_title')}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Content</label>
                    <input type="hidden" name="type[]" value="about_content">
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control" placeholder="Content....." data-min-height="300" name="about_content" required>{!!get_setting('about_content')!!}</textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>

@endsection
