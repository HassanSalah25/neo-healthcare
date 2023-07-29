@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('offer.update',$offer->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name in English</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$offer->name}}">
                </div>
                <div class="mb-3">
                    <label for="name_ar" class="form-label">Name in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{$offer->name_ar}}">
                </div>
               {{-- <div class="mb-3">
                    <label for="offer_type" class="form-label">Type</label>
                    <input type="text" class="form-control" name="offer_type" id="offer_type" value="{{$offer->offer_type}}">
                </div>--}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$offer->price}}">
                </div>
                <div class="mb-3">
                    <label for="offer_category" class="form-label">Category</label>
                    <select type="text" class="form-control" name="offer_category" id="offer_category">
                        @foreach($offer_category as $category)
                            <option value="{{$category->id}}" {{$category->id == $offer->offer_category->id ? "selected" : ""}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection
