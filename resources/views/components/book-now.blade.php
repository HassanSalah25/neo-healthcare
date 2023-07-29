
<section class="book-now">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <h2 class="h3" data-aos="fade-up">
                   {{trans('website.book_now_2.d_u_w_r_n')}}
                </h2>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                <a href="{{route('website.appointment')}}" class="btn btn-brand-white Booking_ads" data-aos="zoom-in">
                    {{trans('website.nav.reserve_now')}}
                    <svg class="btn-icon">
                        <use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
