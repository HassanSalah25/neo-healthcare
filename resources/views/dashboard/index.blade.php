@extends('dashboard.layouts.app')

@section('content')
        <div class="row">
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <div class="card border-primary">
                    <div class="card-body bg-primary text-white">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-user-doctor fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h1>{{\App\Models\Doctor::count()}}</h1>
                                <h4>Doctors</h4>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('doctor.index')}}" >
                        <div class="card-footer bg-light text-primary">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <div class="card border-secondary">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-kit-medical fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <h1>{{\App\Models\Service::count()}}</h1>
                                <h4>Services</h4>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('service.index')}}">
                        <div class="card-footer bg-light text-secondary">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <div class="card border-secondary">
                    <div class="card-body bg-info text-white">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa-solid fa-percent fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <h1>{{\App\Models\Offer::count()}}</h1>
                                <h4>Offers</h4>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('offer.index')}}">
                        <div class="card-footer bg-light text-secondary">
                            <span class="float-left">More details</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection
