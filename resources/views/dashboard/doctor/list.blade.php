@extends('dashboard.layouts.app')

@section('content')



            <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Doctors')}}</h6>
                </div>
                <div class="col-2">

                    <a href="{{route('doctor.create')}}" type="button" class="btn btn-success m-2 w-50">{{__('New')}}</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Specialty</th>
                    <th scope="col">Years Of Experience</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <th scope="row">{{$doctor->id}}</th>
                        <td>{{$doctor->first_name_ar}}</td>
                        <td>{{$doctor->specialty_ar}}</td>
                        <td>{{$doctor->years_of_experience}}</td>
                        <td>{{$doctor->location}}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('doctor.edit', ['id' => $doctor->id]) }}"
                               >{{ __('Edit') }}
                                <i class="las la-edit"></i>
                            </a>

                            <a class="btn btn-danger  btn-icon btn-circle btn-sm"
                               href="{{ route('doctor.destroy', $doctor->id) }}"
                               >{{ __('Delete') }}
                                <i class="las la-trash"></i>
                            </a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

@endsection
