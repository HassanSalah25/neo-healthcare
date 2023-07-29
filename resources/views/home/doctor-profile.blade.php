@extends('layouts.master')
@section('content')

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

    <section itemscope itemtype="http://schema.org/Physician" class="doctors-profile d-pad">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="filters">

                        <div class="doctor__image" style="height: 40rem;">
                            <picture>
                                <source srcset="{{asset($doctor->getImg())}}" type="image/webp">
                                <img itemprop="image" src="{{asset($doctor->getImg())}}" draggable="false" data-aos="zoom-out" alt>
                            </picture>
                        </div>




                    </div>
                </div>


                <div class="col-lg-8">

                    <div class="profile__container">
                        <div class="title-container align-items-start" data-aos="fade-up">
                            <a itemprop="url" href="" class="h4 title">
                                <h2 class="h4 title" itemprop="name">
                                    {{app()->getLocale() == 'ar' ? $doctor->first_name_ar : $doctor->first_name }}
                                </h2>
                                    </a>
                            <a href="{{route('website.appointment.doctor',$doctor->id)}}" class="btn btn-brand-primary Booking_ads" itemprop="tourBookingPage">
                                {{trans('website.book_now')}} {{app()->getLocale() == 'ar' ? $doctor->first_name_ar : $doctor->first_name}}
                            </a>
                        </div>
                    </div>


                    <div class="profile__container" id="profileAbout">
                        <h3 class="h5 title" data-aos="fade-up">
                            {{trans('website.about_doctor')}}
                        </h3>
                        <div class="section-bg" data-aos="fade-up" data-aos-delay="100">
                            <h4 class="h6">{{app()->getLocale() == 'ar' ?  $doctor->first_name_ar : $doctor->first_name }}</h4>
                            <p>
                                {!! app()->getLocale() == 'ar' ?  $doctor->speciality_ar : $doctor->speciality !!}
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="h6">{{trans('website.exper')}}</h4>
                                    <span class="h3 color" itemprop="foundingDate">{{ (int)$doctor->years_of_experience }}</span>
                                    <small class="d-block">{{trans('website.year')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if($doctor->service->first())
                        <a href="{{route('website.service.view',$doctor->service?->first()?->id)}}" class="profile__container" id="profileServices">
                            <h3 class="h5 title">
                                {{trans('website.services_of_doctor')}}
                            </h3>
                            <div class="profile__services d-flex">

                                <div class="profile__service">

                                    <div class="service__image">
                                        <picture>
                                            <source srcset="{{asset($doctor->service?->first()?->getImg())}}" type="image/webp"><img src="{{asset($doctor->service?->first()?->getImg())}}" draggable="false" loading="lazy" alt="service" data-aos="zoom-out">
                                        </picture>
                                    </div>


                                    <div class="service__title d-block text-center">
                                        <h4 class="h6" data-aos="fade-up">
                                            {{app()->getLocale() == 'ar' ? $doctor->service?->first()?->name_ar : $doctor->service?->first()?->name}}
                                        </h4>
                                    </div>


                                    <div class="profile__service-btn" data-aos="fade-up" data-aos-delay="100">
                                        <a href="{{route('website.appointment.doctor',$doctor->id)}}" class="btn btn-brand-white Booking_ads">
                                            {{trans('website.nav.reserve_now')}}
                                            <svg class="btn-icon">
                                                <use href="{{asset("assets/images/icons/icons.svg?v=33#book")}}"></use>
                                            </svg>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </a>
                    @endif
                    <div class="profile__container" id="profileServices">

                    </div>
{{--                    <div class="profile__service">--}}
{{--                        <div class="service__image">--}}
{{--                            <picture>--}}
{{--                                <source srcset="{{asset($doctor->service?->getImg())}}" type="image/webp"><img src="{{asset($doctor->service?->getImg())}}" draggable="false" loading="lazy" alt="service" data-aos="zoom-out">--}}
{{--                            </picture>--}}
{{--                        </div>--}}
{{--                    </div>--}}




                </div>

            </div>
    </section>


    <section class="book-now">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <h2 class="h3" data-aos="fade-up">
                            {{trans('website.book_now_2.d_u_w_r_n')}}
                    </h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                    <a href="{{route('website.appointment.doctor',$doctor->id)}}" class="btn btn-brand-white Booking_ads" data-aos="zoom-in">
                        {{trans('website.book_appointment_now.book_appointment_now')}}
                        <svg class="btn-icon">
                            <use href="{{asset('assets/images/icons/icons.svg?v=33#book')}}"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
