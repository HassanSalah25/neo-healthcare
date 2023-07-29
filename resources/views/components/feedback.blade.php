

<div class="ram-cards">
    <div class="container">
        <div class="row">



            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <a href="{{route('website.feedback')}}" class="ram__card d-block">

                    <div class="ram__card-image" data-aos="zoom-out">
                        <picture>
                            <source class="lazyload" src="{{asset('assets/images/placeholder.svg')}}" data-srcset="{{asset('assets/images/placeholder.svg')}}" type="image/webp">
                            <img class="lazyload" src="{{asset('assets/images/placeholder.svg')}}" data-src="{{asset('assets/images/placeholder.svg')}}" draggable="false" loading="lazy" alt="rate">
                        </picture>
                    </div>

                    <div class="ram__card-text"><span class="overline" data-aos="fade-up">
{{trans('website.visitation')}}
</span>
                        <h2 class="h4" data-aos="fade-up" data-aos-delay="100">
                            {{trans('website.clinic')}} <span class="color">{{trans('website.now')}}</span>
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{trans('website.level')}}
                        </p></div>
                </a>
            </div>

        </div>
    </div>
</div>
