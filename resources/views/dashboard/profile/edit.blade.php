@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('profile.update',$admin->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image" value="{{$admin->media?->file_original_name}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$admin->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$admin->email}}">
                </div>
                    <div class="form-group col-md-6">
                        <label for="password">{{__('Password')}}</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password" />
                        @error('password')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                    <!--  password confirm -->
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">{{__('Confirm Password')}}</label>
                        <input type="password"
                               class="form-control"
                               id="password_confirmation"
                               name="password_confirmation" />
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
