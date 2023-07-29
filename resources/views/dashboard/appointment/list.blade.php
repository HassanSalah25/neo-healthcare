@extends('dashboard.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Appointments')}}</h6>
                </div>
               {{-- <div class="col-2">

                    <a href="{{route('doctor.create')}}" type="button" class="btn btn-success m-2 w-50">{{__('New')}}</a>
                </div>--}}
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Service Category</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Scheduled At</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <th scope="row">{{$appointment->id}}</th>
                        <td>{{$appointment->service->name_ar}}</td>
                        <td>{{$appointment->service->service_category->name_ar}}</td>
                        <td>{{$appointment->doctor?->first_name_ar}}</td>
                        <td>{{$appointment->patient->name}}</td>
                        <td>{{$appointment->scheduled_at}}</td>
                        <td>{{$appointment->time}}</td>
                        <td>{{$appointment->status == 0 ? "Pending":"Done"}}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('appointment.edit', ['id' => $appointment->id]) }}"
                               >{{ __('Edit') }}
                                <i class="las la-edit"></i>
                            </a>

                            <a class="btn btn-danger  btn-icon btn-circle btn-sm"
                               href="{{ route('appointment.destroy', $appointment->id) }}"
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
