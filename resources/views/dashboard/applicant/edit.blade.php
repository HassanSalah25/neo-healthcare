@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input  type="text" class="form-control" name="name" id="name" value="{{$applicant->name_}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="offer_type" class="form-label"></label>
                    <input  type="text" class="form-control" name="offer_type" id="offer_type" value="{{$applicant-}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Doctor</label>
                    <input  type="text" class="form-control" name="price" id="price" value="{{$appointment->doctor?->first_name_ar}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Patient</label>
                    <input  type="text" class="form-control" name="price" id="price" value="{{$appointment->patient->name}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Scheduled At</label>
                    <input  type="text" class="form-control" name="price" id="price" value="{{$appointment->scheduled_at}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Time</label>
                    <input  type="text" class="form-control" name="price" id="price" value="{{$applicant->time}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status" disabled>
                            <option value="0" {{$applicant->status == 0 ? "selected" : ""}}>pending</option>
                            <option value="1" {{$applicant->status == 1 ? "selected" : ""}}>Done</option>
                    </select>
                </div>

{{--                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>--}}
            </form>
        </div>
    </div>
@endsection
