@extends('layouts.master')
@section('content')
    @push('styles')
        <style>
            .service .service__title .h5{

                font-size: var(--fnt-size-1x);
                margin-bottom: var(--spc-1x);
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
                transition: all 0.5s cubic-bezier(0, 0, 0.2, 1);
            }
            .services .service:hover .service__title .h5{
                display: block;
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


        <h1 class="h3" data-aos="fade-up" data-aos-delay="100">{{trans('website.service_center')}}</h1>

    </div>
</div>


    <section class="services d-pad">
        <div class="container">

            <div class="section-title"><h2 class="title" data-aos="fade-up">
   {!!app()->getLocale() == 'ar' ? $service_category->description_ar : $service_category->description!!}</div>

            <div class="services__container" data-aos="fade-up" data-aos-delay="300">
                @foreach($services as $category)
                    <a href="{{route('website.service.view',$category->id)}}" class="service d-block">
                        <div class="service__image" data-aos="zoom-out">
                            <picture>
                                <source srcset="{{asset($category->getImg())}}" type="image/webp" />
                                <img src="{{asset($category->getImg())}}" draggable="false" loading="lazy" />
                            </picture>
                        </div>
                        <div class="service__title">
                            <h3 class="h5" >
                              {{app()->getLocale() == 'ar' ?  $category->name_ar : $category->name}}
                            </h3>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>


    @include('components.book-now')


    @include('components.doctors')


    @include('components.blogs')


{{--    @include('components.partners')--}}

@endsection
