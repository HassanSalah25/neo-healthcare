@extends('dashboard.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4" style="overflow: scroll">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Feedback')}}</h6>
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
                    <th scope="col">Doctor</th>
                    <th scope="col">Patient</th>
                    <th scope="col">First Question</th>
                    <th scope="col">Second Question</th>
                    <th scope="col">Third Question</th>
                    <th scope="col">Fourth Question</th>
                    <th scope="col">Fifth Question</th>
                    <th scope="col">Sixth Question</th>
                    <th scope="col">Seventh Question</th>
                    <th scope="col">eighth Question</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedbacks as $feedback)
                    <tr>
                        <th scope="row">{{$feedback->id}}</th>
                        <td>{{$feedback->service->name_ar}}</td>
                        <td>{{$feedback->service->service_category->name_ar}}</td>
                        <td>{{$feedback->doctor->first_name_ar}}</td>
                        <td>{{$feedback->rate1}}</td>
                        <td>{{$feedback->rate2}}</td>
                        <td>{{$feedback->third}}</td>
                        <td>{{$feedback->fourth}}</td>
                        <td>{{$feedback->fifth}}</td>
                        <td>{{$feedback->sixth}}</td>
                        <td>{{$feedback->seventh}}</td>
                        <td>{{$feedback->eighth}}</td>

                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('feedback.show', ['id' => $feedback->id]) }}"
                               >
                                <i class="fas fa-eye"></i>
                            </a>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
