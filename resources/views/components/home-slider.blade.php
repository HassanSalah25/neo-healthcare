<div class="slider">
    <div class="swiper mainSlider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="slider__slide">

                    <div class="slider__image">
                        <picture>
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-1.jpg')}}" type="image/webp">
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-1.jpg')}}" type="image/jpeg">
                            <img class="swiper-lazy lazyload" src="{{asset('assets/images/slider/slider-1.jpg')}}" draggable="false" alt="alt">
                        </picture>
                        <div class="swiper-lazy-preloader"></div>
                    </div>


                    <div class="slider__text">
                        <div class="container">
                            <div class="info wrapper960"><div class="info-wrapper" style="max-width: 500px;">
                                    <div class="layerslideshow-title-container">
                                        <h2 class="layerslideshow-title">{{trans('website.slider.title_slider1')}}</h2>
                                    </div>
                                    <div class="layerslideshow-caption">
                                        {{trans('website.slider.slider1')}}
                                    </div>
                                </div>
                            </div>
                            <div class="slider__actions" data-aos="fade-up" data-aos-delay="500">
                                <a href="{{route('website.appointment')}}" class="btn btn-brand-primary Booking_ads">
                                    {{trans('website.nav.reserve_now')}}
                                    <svg class="btn-icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider__slide">

                    <div class="slider__image">
                        <picture>
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-2.jpg')}}" type="image/webp">
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-2.jpg')}}" type="image/jpeg">
                            <img class="swiper-lazy lazyload" src="{{asset('assets/images/slider/slider-2.jpg')}}" draggable="false" alt="alt">
                        </picture>
                        <div class="swiper-lazy-preloader"></div>
                    </div>


                    <div class="slider__text">
                        <div class="container">
                            <div class="info-wrapper" style="max-width: 500px;">
                                <div class="layerslideshow-title-container">
                                    <h2 class="layerslideshow-title">{{trans('website.slider.title_slider2')}}</h2>
                                </div>
                                <div class="layerslideshow-caption">
                                    {{trans('website.slider.slider2')}}
                                </div></div>
                            <div class="slider__actions" data-aos="fade-up" data-aos-delay="500">
                                <a href="{{route('website.appointment')}}" class="btn btn-brand-primary Booking_ads">
                                    {{trans('website.nav.reserve_now')}}
                                    <svg class="btn-icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider__slide">

                    <div class="slider__image">
                        <picture>
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-3.jpg')}}" type="image/webp">
                            <source class="swiper-lazy" srcset="{{asset('assets/images/slider/slider-3.jpg')}}" type="image/jpeg">
                            <img class="swiper-lazy lazyload" src="{{asset('assets/images/slider/slider-3.jpg')}}" draggable="false" alt="alt">
                        </picture>
                        <div class="swiper-lazy-preloader"></div>
                    </div>


                    <div class="slider__text">
                        <div class="container">
                            <div class="info wrapper960"><div class="info-wrapper" style="max-width: 500px;"><div class="layerslideshow-title-container">
                                        <h2 class="layerslideshow-title">{{trans('website.slider.title_slider3')}}</h2></div><div class="layerslideshow-caption">
                                        {{trans('website.slider.slider3')}}
                                    </div></div></div>
                            <div class="slider__actions" data-aos="fade-up" data-aos-delay="500">
                                <a href="{{route('website.appointment')}}" class="btn btn-brand-primary Booking_ads">
                                    {{trans('website.nav.reserve_now')}}
                                    <svg class="btn-icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
