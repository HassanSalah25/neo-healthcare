

<section class="reviews d-pad">
    <div class="container">

        <h2 class="title" data-aos="fade-up">
            {{trans('website.opinions')}} <span class="color">{{trans('website.cust')}}</span>
        </h2>

        <div class="row">

            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="swiper reviewsSlider" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial d-flex align-items-center justify-content-center flex-column text-center">
                                <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=32#quote')}}"></use>
                                </svg>
                                <p>
                                    {{trans('website.honor')}}
                                </p>
                                <h6 class="color">
                                    {{trans('website.amel')}}
                                </h6>
                                <ul class="list-inline rate">
                                    @for($i=0;$i < 5; $i++)
                                    <li class="list-inline-item">
                                        <svg class="icon">
                                            <use href="{{asset('assets/images/icons/icons.svg?v=32#star')}}"></use>
                                        </svg>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="slider-controls">
                        <div class="swiper-button-next reviews-next"></div>
                        <div class="swiper-button-prev reviews-prev"></div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="video" data-toggle="modal" data-target="#reviewVideo">
                    <div class="video__thumb" data-aos="fade-up" data-aos-delay="100">
                        <picture>
                            <source class="lazyload" src="{{asset('assets/images/placeholder.svg?v=32')}}" data-srcset="{{asset('assets/images/placeholder.svg?v=32')}}" type="image/webp"><img class="lazyload" src="{{asset('/assets/images/video.jpg?v=32')}}" data-src="{{asset('/assets/images/video.jpg?v=32')}}" draggable="false" loading="lazy" alt="video name">
                        </picture>
                    </div>
                    <div class="video__btn-container">
                        <div class="video__btn">
                            <svg class="btn-icon">
                                <use href="{{asset('assets/images/icons/icons.svg?v=32#play')}}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
