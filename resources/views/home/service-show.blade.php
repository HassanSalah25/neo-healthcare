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


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">{{trans('website.serviced_cilinical')}}</h1>

        </div>
    </div>0


    <section class="services d-pad" dir="ltr">
        <div class="container ">
<div class="row ">
            <div class="section-title col-lg-9 row  justify-content-center ">
                <h2 class="title" data-aos="fade-up">
                    <span class="color">
                    {{app()->getLocale() == 'ar' ? $service->name_ar : $service->name}}
                    </span>
                </h2>
                <p style="text-align:center" data-aos="fade-up" data-aos-delay="100">
                    {!! app()->getLocale() == 'ar' ? $service->description_ar : $service->description!!}
                </p>
            </div>

            <div class="col-lg-1" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset($service->getImg())}}" width="500">
            </div>
</div>
        </div>
    </section>


    @include('components.book-now')


    @include('components.doctors')


    @include('components.blogs')


{{--    @include('components.partners')--}}

@endsection
