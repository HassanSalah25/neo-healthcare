@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('register-offer.update',$registered_offer->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$registered_offer->offer->name}}">
                </div>
                <div class="mb-3">
                    <label for="offer_type" class="form-label">Service Category</label>
                    <input type="text" class="form-control" name="offer_type" id="offer_type" value="{{$registered_offer->offer->offer_category->name}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Patient</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$registered_offer->patient->name}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Patient</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$registered_offer->scheduled_at}}">
                </div>
                . <div class="mb-3">
                    <label for="price" class="form-label">Patient</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$registered_offer->time}}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                            <option value="0" {{$registered_offer->status == 0 ? "selected" : ""}}>pending</option>
                            <option value="1" {{$registered_offer->status == 1 ? "selected" : ""}}>Done</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
