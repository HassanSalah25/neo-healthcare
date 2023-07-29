@extends('layouts.master')
@section('content')
    @push('styles')
        <style>
            /* Select the input element with the id 'bookName' and style its placeholder */
            ::placeholder {
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
                {{trans('website.foot')}}
            </h1>

        </div>
    </div>

    <section class="book d-pad">
        <div class="container">

            <div class="section-title">
{{--                <h2 class="title" data-aos="fade-up">--}}
{{--                    {{trans('website.book_appointment_now.book_appointment_now')}} <span class="color">الآن</span>--}}
{{--                </h2>--}}
{{--                <p data-aos="fade-up" data-aos-delay="100">--}}
{{--                   {{trans('website.center')}}--}}
{{--                </p>--}}
            </div>

            <div class="book__container">

                <div class="book__form">
                    <form class="form" method="post" action="{{route('website.applicant.store')}}" enctype="multipart/form-data">
                        @csrf


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
                                <div class="invalid-feedback">
                                    {{trans('website.saudi')}}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookEmail" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.email')}}</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="bookEmail" placeholder="{{trans('website.book_appointment_now.enter_email')}}" name="email" value required>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="job_title" class="col-lg-3 col-form-label">{{trans('website.job')}}</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="job_title" placeholder="{trans('website.job')}}" name="job_title" value required>
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="address" class="col-lg-3 col-form-label">{{trans('website.address')}}</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="address" placeholder="{{trans('website.address')}}" name="address" value required>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="cv_id" class="col-lg-3 col-form-label">C.V</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" id="cv_id" name="cv_id" value required>
                            </div>
                        </div>




                        <div class="row d-flex align-items-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-brand-primary btn-form Booking_ads" data-aos="fade-up">
                                    {{trans('website.send')}}
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

