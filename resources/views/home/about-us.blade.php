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


    <div class="about d-pad">
        <div class="container">
            <div class="about__container d-flex align-items-center">

                <div class="about__image">
                    <picture>
                        <source srcset="{{asset(\App\Models\media::find(get_setting('about_image'))->file_name)}}" type="image/webp"><img src="{{asset('assets/images/about.webp')}}" draggable="false" alt="alt" data-aos="zoom-out">
                    </picture>
                </div>


                <div class="about__text">
                    <div class="overline" data-aos="fade-up">
                        {{trans('website.on')}}
                    </div>
                    <h2 class="title" data-aos="fade-up" data-aos-delay="100">
                        {!! get_setting('about_title') !!}
                    </h2>
                    {!! get_setting('about_content') !!}
                </div>

            </div>
        </div>
    </div>


    @include('components.statiscts')


    <div class="about__blocks">
        <div class="container">
            <div class="about__container d-flex">

                <div class="about__block">
                    <div class="about__block-icons" data-aos="zoom-in">
                        <svg class="icon" >
                            <use href="{{asset('assets2/images/icons/icons.svg#vision')}}"></use>
                        </svg>
                    </div>
                    <div class="about__block-text">
                        <h2 class="h6" data-aos="fade-up" data-aos-delay="100">{{trans('website.view')}}</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{trans('website.increase')}}
                        </p>
                    </div>
                </div>


                <div class="about__block">
                    <div class="about__block-icons" data-aos="zoom-in">
                        <svg class="icon">
                            <use href="{{asset('assets2/images/icons/icons.svg#message')}}"></use>
                        </svg>
                    </div>
                    <div class="about__block-text">
                        <h2 class="h6" data-aos="fade-up" data-aos-delay="100">{{trans('website.massage')}}</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{trans('website.present')}}
                        </p>
                    </div>
                </div>


                <div class="about__block">
                    <div class="about__block-icons" data-aos="zoom-in">
                        <svg class="icon">
                            <use href="{{asset('assets2/images/icons/icons.svg#values')}}"></use>
                        </svg>
                    </div>
                    <div class="about__block-text">
                        <h2 class="h6" data-aos="fade-up" data-aos-delay="100">{{trans('website.values')}}</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{trans('website.safty')}}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    @include('components.book-now')


    <section>
{{--        <div class="container">--}}

{{--            <div class="title-container" data-aos="fade-up">--}}
{{--                <h2 class="title">--}}
{{--                    {{trans('website.team')}} <span class="color">الرائع</span>--}}
{{--                </h2>--}}
{{--                <a href="{{route('website.doctor')}}" class="btn btn-brand-link">--}}
{{--                    {{trans('website.show')}}--}}
{{--                    <svg class="btn-icon">--}}
{{--                        <use href="{{asset('assets/images/icons/icons.svg#btn-arrow')}}"></use>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="title-container" data-aos="fade-up">--}}
{{--                <p>--}}
{{--                    {{trans('website.magister')}}--}}
{{--                    {{trans('website.high')}}--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    {{trans('website.join')}}--}}
{{--                </p>--}}
{{--            </div>--}}


            @include('components.doctors')

        </div>
    </section>

{{--
    <div class="about__more">
        <div class="container">
            <h2 class="title" data-aos-delay="fade-up">
                أنت في <span class="color">أيد آمنة</span>
            </h2>
            <div class="about__container d-flex">

                <div class="about__more-block d-flex">
                    <div class="about__more-block-image">
                        <picture>
                            <source srcset="/web/assets/images/about-more-1.webp" type="image/webp"><img src="/web/assets/images/about-more-1.jpg" draggable="false" loading="lazy" alt="alt" data-aos="zoom-out">
                        </picture>
                    </div>
                    <div class="about__more-block-text" data-aos="fade-up">
                        <p>
{{trans('website.2007')}}                        </p>
                    </div>
                </div>


                <div class="about__more-block d-flex">
                    <div class="about__more-block-image">
                        <picture>
                            <source srcset="/web/assets/images/about-more-2.webp" type="image/webp"><img src="/web/assets/images/about-more-2.jpg" draggable="false" loading="lazy" alt="alt" data-aos="zoom-out">
                        </picture>
                    </div>
                    <div class="about__more-block-text" data-aos="fade-up">
                        <p>
{{trans('website.network')}}                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>--}}


{{--    @include('components.partners')--}}
@endsection
