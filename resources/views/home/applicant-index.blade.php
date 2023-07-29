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
                {{trans('website.foot  ')}}
            </h1>

        </div>
    </div>

    <section class="book d-pad">
        <div class="container">

            <div class="section-title">
                {{--                <h2 class="title" data-aos="fade-up">--}}
                {{--                    {{trans('website.book_appointment_now.book_appointment_now')}} <span class="color">{{trans('website.alan')}}</span>--}}
                {{--                </h2>--}}
                {{--                <p data-aos="fade-up" data-aos-delay="100">--}}
                {{--                    {{trans('website.center')}}--}}
                {{--                </p>--}}
            </div>

            <div class="book__container">

                <div class="book__form">
                    <form class="form" method="post" action="{{route('website.applicant.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mt-5 row d-flex align-items-center" data-aos="fade-up">
                            <label for="cv_id" class="col-lg-3 col-form-label">{{trans('website.wthaf')}}</label>
                            <div class="col-lg-9">
                                <a href="{{route('website.applicant.jobs')}}" class="btn btn-brand-primary btn-form Booking_ads" data-aos="fade-up">
                                    {{trans('website.wthaf')}}

                                </a>
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

                                </button>
                            </div>

                        </div>

                    </form>
                </div>


            </div>
        </div>
    </section>

    {{--@include('components.partners')--}}
@endsection

