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

    <section class="doctors d-pad">
        <div class="container">

            <div class="section-title">
                <h2 class="title" data-aos="fade-up">
                    {{trans('website.know')}}
                    <span class="color">
{{trans('website.news')}}
</span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    {{trans('website.national')}}
                </p>
            </div>
            <div class="row">

                <div class="col-lg-4 col-xl-3">
                    <div class="filters">

                        <div class="filters__bg" data-aos="fade-up">
                            <div class="filter__search">
                                <form method="GET" action="">
                                    <input type="search" name="" class="form-control" placeholder=" {{trans('website.search_doctor')}} ">
                                    <button type="submit" class="btn btn-brand-primary btn-icon">
                                        <span class="sr-only">{{trans('website.nav.search')}}</span>
                                        <svg>
                                            <use href="{{asset('assets/images/icons/icons.svg?v=33#search')}}"></use>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">

                    <div class="doctors__container ">
                    @foreach($doctors as $doctor)
                        <div class="doctor" style=" display: flex;
        flex: 0 0 31.4%;
        flex-direction: column;
        align-content: space-between;
        justify-content: space-between;">

                            <div class="doctor__image">
                                <picture>
                                    <source srcset="{{asset($doctor->getImg())}}" type="image/webp">
                                    <img src="{{asset($doctor->getImg())}}" draggable="false" alt="{{app()->getLocale() == 'ar' ?$doctor->first_name_ar : $doctor->first_name}}" data-aos="zoom-out">
                                </picture>
                            </div>


                            <div class="doctor__info" data-aos="fade-up">
                                <h3 class="h5">{{app()->getLocale() == 'ar' ? $doctor->first_name_ar : $doctor->first_name}}</h3>
                                <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden">{!! app()->getLocale() == 'ar' ? $doctor->speciality_ar : $doctor->speciality!!}</div>
                            </div>


                            <div class="doctor__actions d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <a href="{{route('website.appointment.doctor',$doctor->id)}}" class="btn btn-brand-primary Booking_ads">
                                    {{trans('website.nav.reserve_now')}}
                                    <svg class="btn-icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=33#book')}}"></use>
                                    </svg>
                                </a>
                                <a href="{{route('website.doctor.show',$doctor->id)}}" class="btn btn-white">{{trans('website.doctors.more')}}</a>
                            </div>


                        </div>
                        @endforeach


                    </div>

{{--                    <div class="pagination justify-content-center" data-aos="fade-up">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item"><a class="page-link active" href="https://ramclinics.net/list/doctors?page=1">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="https://ramclinics.net/list/doctors?page=2">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="https://ramclinics.net/list/doctors?page=3">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="https://ramclinics.net/list/doctors?page=4">4</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="https://ramclinics.net/list/doctors?page=5">5</a></li>--}}
{{--                            <li class="page-item d-flex align-items-end"><span>...</span></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="https://ramclinics.net/list/doctors?page=24">24</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="https://ramclinics.net/list/doctors?page=2">التالي</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="https://ramclinics.net/list/doctors?page=24">&rsauo;&rsauo;</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </section>

@endsection

