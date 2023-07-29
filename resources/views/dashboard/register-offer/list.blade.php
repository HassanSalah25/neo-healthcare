@extends('dashboard.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Registered Offers')}}</h6>
                </div>
               {{-- <div class="col-2">

                    <a href="{{route('doctor.create')}}" type="button" class="btn btn-success m-2 w-50">{{__('New')}}</a>
                </div>--}}
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Offer Name</th>
                    <th scope="col">Offer Category</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Scheduled At</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registered_offers as $registered_offer)
                    <tr>
                        <th scope="row">{{$registered_offer->id}}</th>
                        <td>{{$registered_offer->offer?->name}}</td>
                        <td>{{$registered_offer->offer?->offer_category->name}}</td>
                        <td>{{$registered_offer->patient->name}}</td>
                        <td>{{$registered_offer->scheduled_at}}</td>
                        <td>{{$registered_offer->time}}</td>
                        <td>{{$registered_offer->status == 0 ? "Pending":"Done"}}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('register-offer.edit', ['id' => $registered_offer->id]) }}"
                               >{{ __('Edit') }}
                                <i class="las la-edit"></i>
                            </a>

                            <a class="btn btn-danger  btn-icon btn-circle btn-sm"
                               href="{{ route('register-offer.destroy', $registered_offer->id) }}"
                               >{{ __('Delete') }}
                                <i class="las la-trash"></i>
                            </a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
