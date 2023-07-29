@extends('layouts.master')
@section('content')

    <div class="page-header">
        <div class="container">

            <div class="page-header__image">
                <picture>
                    <source srcset="{{asset('assets/images/page-header.webp?v=33')}}" type="image/webp">
                    <img src="{{asset('assets/images/page-header.webp?v=33')}}" draggable="false" alt="page image" data-aos="zoom-out">

                    <h1 class="h3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        {{$discount->name}}
                    </h1>
                </picture>
            </div>
        </div>
    </div>

            <div class="discount-partners d-pad">
                <div class="container">

                    <div class="section-title">
                        <h2 class="title" data-aos="fade-up">
                            {{trans('website.discounts')}} <span class="color">{{$discount->name}}</span>
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            {{$discount->description}} </p>
                    </div>

                    <div class="row">

                        <div class="col-md-5 col-lg-4 col-xl-3">
                            <div class="filters" data-aos="fade-up">

                                <div class="filters__bg" data-aos="fade-up">

                                    <div class="discount-partner__image">
                                        <picture>
                                            <source srcset="{{asset($discount->getImg())}}" type="image/webp"><img src="/web/assets/images/partners/partners-discount/01.webp" draggable="false" loading="lazy" alt="alt">
                                        </picture>
                                    </div>

                                    <div class="filter__btns">
                                        <div class="nav flex-column nav-pills">
                                            <a href="#dental" class="btn btn-white"> {{$discount->service_category->name_ar}}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-7 col-lg-8 col-xl-9">

                            <div class="discount-partner__section" id="dental">
                                <h3 class="h4" data-aos="fade-up">{{$discount->service_category->name_ar}}</h3>
                                <div class="discount__container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="discount__block d-none d-lg-block">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-xl-8 d-flex align-items-center">
                                                <h4 class="h6">{{$discount->service_category->name_ar}}</h4>
                                            </div>
                                            <div class="col-6 col-lg-3 col-xl-2 d-flex align-items-center justify-content-lg-center">
                                                <h4 class="h6">{{trans('website.price')}}</h4>
                                            </div>
                                            <div class="col-6 col-lg-3 col-xl-2 d-flex align-items-center justify-content-lg-center">
                                                <h4 class="h6">{{trans('website.nav.reserve_now')}}</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="discount__block">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-xl-8 d-flex align-items-center">
                                                <h4 class="h6">German porcelain fittings for one tooth</h4>
                                            </div>
                                            <div class="col-6 col-lg-3 col-xl-2 d-flex align-items-center justify-content-lg-center">
                                                <h4 class="h6 color">{{$discount->discount}} <small>{{trans('website.real')}}</small></h4>
                                            </div>
                                            <div class="col-6 col-lg-3 col-xl-2 d-flex align-items-center justify-content-lg-center">
                                                <a href="{{route('website.appointment')}}" class="btn btn-brand-link btn-md-block">
                                                    {{trans('website.nav.reserve_now')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

{{--    @include('components.partners')--}}



@endsection
