<section class="doctors d-pad">
    <div class="container">

        <div class="title-container aos-init aos-animate" data-aos="fade-up">
            <h2 class="title">
                {{trans('website.doctors.doctors')}} <span class="color">{{trans('website.doctors.neo_clinics')}}</span>
            </h2>
            <a href="{{route('website.doctor')}}" class="btn btn-brand-link">
                {{trans('website.doctors.all_doctors')}}
                <svg class="btn-icon">
                    <use href="{{asset('assets/images/icons/icons.svg?v=35#btn-arrow')}}"></use>
                </svg>
            </a>
        </div>


        <div class="swiper doctorsSlider swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper" id="swiper-wrapper-ccbda471d1c1f9d4" aria-live="off" style="transition-duration: 500ms; transform: translate3d(8218px, 0px, 0px);">

                @foreach(\App\Models\Doctor::all() as $doctor)
                <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 30" style="width: 269.5px; margin-left: 24px;">

                    <div class="doctor__image">
                        <picture>
                            <source class="lazyload" src="{{asset($doctor->getImg())}}" data-srcset="{{asset($doctor->getImg())}}" type="image/webp" />
                            <img class="lazyload" src="{{asset($doctor->getImg())}}" data-src="{{asset($doctor->getImg())}}" draggable="false" alt />
                        </picture>
                    </div>


                    <div class="doctor__info">
                        <h3 class="h5">{{app()->getLocale() == 'ar'? $doctor->first_name_ar : $doctor->first_name}}</h3>
                        <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:1;overflow:hidden">{!! app()->getLocale() == 'ar'? $doctor->speciality_ar : $doctor->speciality !!}</div>

                       </div>


                    <div class="doctor__actions d-flex justify-content-center">
                        <a href="{{route('website.appointment.doctor',$doctor->id)}}" class="btn btn-brand-primary Booking_ads">
                            {{trans('website.nav.reserve_now')}}
                            <svg class="btn-icon">
                                <use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use>
                            </svg>
                        </a>
                        <a href="{{route('website.doctor.show',$doctor->id)}}" class="btn btn-white"> {{trans('website.doctors.more')}}</a>
                    </div>
                </div>
                @endforeach

        </div>


            <div class="slider-controls">
                <div class="swiper-button-next doctor-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ccbda471d1c1f9d4"></div>
                <div class="swiper-button-prev doctor-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ccbda471d1c1f9d4"></div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

    </div>
</section>
