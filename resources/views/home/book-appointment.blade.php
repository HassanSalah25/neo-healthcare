@extends('layouts.master')
@section('content')
    @push('styles')
        <style>
            /* Select the input element with the id 'bookName' and style its placeholder */
            #search-what::placeholder {
                color: red; /* Replace 'red' with the desired color */
            }
        </style>
    @endpush
<div class="page-header">
        <div class="container">

            <div class="page-header__image">
                <picture>
                    <source srcset="{{asset('assets/images/page-header.webp?v=33')}}" type="image/webp">
                    <img src="{{asset('assets/images/page-header.webp?v=33')}}" draggable="false" alt="page image" data-aos="zoom-out">
                </picture>
            </div>


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
                {{trans('website.book_appointment_now.book_appointment_now')}}
            </h1>

        </div>
    </div>

<section class="book d-pad">
    <div class="container">

        <div class="section-title">
            <h2 class="title" data-aos="fade-up">
                {{trans('website.book_appointment_now.book_appointment_now')}}
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">
                {{trans('website.book_appointment_now.book_appointment_desc')}}
            </p>
        </div>

        <div class="book__container">

            <div class="book__form">
                <form class="form" method="post" action="{{route('website.appointment.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.dept')}}</label>
                        <div class="col-lg-9">
                            <nav class="services-nav">
                                @foreach(\App\Models\ServiceCategory::all() as $category)
                                    <span onclick="updateServiceId({{$category->id}},this)" id="services-1" class="btn btn-service btn-brand-primary-5 {{$category->id == 2 ? 'active' : '' }} ">
                                    <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=33#medical')}}"></use>
                                    </svg>
                                    {{app()->getLocale() == 'ar' ? $category->name_ar : $category->name}}
                                    </span>
                                @endforeach

                            </nav>

                        </div>
                    </div>

                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookService" class="col-lg-3 col-form-label">{{trans('website.serv')}}</label>
                        <div class="col-lg-9">
                            <select class="custom-select" id="bookService" name="service" required>
                                <option value="" >{{trans('website.book_appointment_now.c_t_r_s_f_y')}}</option>
                                @foreach(\App\Models\Service::where('service_category_id',2)->get() as $service)
                                    <option value="{{$service->id}}" {{ isset($doctor) ? $service->id == $doctor->service?->first()?->id ? "selected":"":""}}>
                                        {{app()->getLocale() == 'ar' ?$service->name_ar :$service->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row d-flex align-items-center" id="show_doctors" data-aos="fade-up" style="display: none">
                        <label for="bookDoctor" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.doctor')}}</label>
                        <div class="col-lg-9">

                                <select class="custom-select" id="doctor_input" name="doctor_id">
                                    <option value="" >{{trans('website.book_appointment_now.c_t_r_s_f_y')}}</option>
                                </select>
                        </div>
                    </div>

                    <h3 class="h5" data-aos="fade-up">{{trans('website.book_appointment_now.personal_data')}}</h3>

                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookName" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.full_name')}}</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="bookName" placeholder="{{trans('website.book_appointment_now.enter_full_name')}}" name="name" value required>
                        </div>
                    </div>


                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookPhone" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.mobile')}}</label>
                        <div class="col-lg-9">
                            <input type="tel" class="form-control" onchange="validateContact(this)" maxlength="10" id="bookPhone" placeholder="{{trans('website.book_appointment_now.enter_mobile')}}" name="phone" value required>
                        </div>
                    </div>


                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookEmail" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.email')}}</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" id="bookEmail" placeholder="{{trans('website.book_appointment_now.enter_email')}}" name="email" value required>
                        </div>
                    </div>


                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookDate" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.date')}}</label>
                        <div class="col-lg-9">
                            <input onchange="return checkAvailableAppointment();" type="date" class="form-control" name="attendance_date" value id="bookDate" required>
                        </div>
                    </div>




                    <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                        <label for="bookTime1" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.date')}}</label>
                        <div class="col-lg-9">
                            <select class="custom-select" id="bookTime1" name="available_time" required>
                                <option value>{{trans('website.book_appointment_now.choose_date')}}</option>
                                <option value="1">{{trans('website.book_appointment_now.morning')}}</option>
                                <option value="2">{{trans('website.book_appointment_now.night')}}</option>
                            </select>
                        </div>
                    </div>



                    <div class="row d-flex align-items-center">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                            <button type="submit" class="btn btn-brand-primary btn-form Booking_ads" data-aos="fade-up">
                                {{trans('website.book_appointment_now.book_appointment_now')}}
                                <svg class="btn-icon">
                                    <use href="/web/assets/images/icons/icons.svg?v=33#book"></use>
                                </svg>
                            </button>
                        </div>
                    </div>

                </form>
            </div>


            <div class="book__image">
                <picture>
                    <source srcset="{{asset('assets/images/book.webp?v=33')}}" type="image/webp">
                    <img src="{{asset('/uploads/services/2022/02/14/20220214012828842243950_services.jpg?v=33')}}" draggable="false" alt="book now" data-aos="zoom-out">
                </picture>
            </div>

        </div>
    </div>
</section>

{{--@include('components.partners')--}}
@endsection

