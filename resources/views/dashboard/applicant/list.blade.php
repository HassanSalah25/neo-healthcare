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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applicants as $applicant)
                    <tr>
                        <th scope="row">{{$applicant->id}}</th>
                        <td>{{$applicant->name}}</td>
                        <td>{{$applicant->email}}</td>
                        <td>{{$applicant->phone}}</td>
                        <td>{{$applicant->job_title}}</td>
                        <td>{{$applicant->address}}</td>
                        <td>
{{--                            <a class="btn btn-info btn-icon btn-circle btn-sm"--}}
{{--                               href="{{ route('applicant.edit', ['id' => $applicant->id]) }}"--}}
{{--                               >{{ __('Edit') }}--}}
{{--                                <i class="las la-edit"></i>--}}
{{--                            </a>--}}

                            <a class="btn btn-danger  btn-icon btn-circle btn-sm"
                               href="{{ route('applicant.destroy', $applicant->id) }}"
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
