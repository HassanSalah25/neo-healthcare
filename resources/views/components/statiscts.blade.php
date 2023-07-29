
<section class="statistics">
    <div class="container">
        <div class="statistics__container">

{{--            <div class="statistic" data-aos="fade-up">--}}
{{--                <div class="statistic__icon">--}}
{{--                    <svg class="icon">--}}
{{--                        <use href="{{asset('assets/images/icons/icons.svg?v=32#countr')}}y"></use>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <span class="small">أكثر من</span>--}}
{{--                <h2 class="h3">20</h2>--}}
{{--                <span class="lead">فرع</span>--}}
{{--            </div>--}}





            <div class="statistic" data-aos="fade-up" data-aos-delay="200">
                <div class="statistic__icon">
                    <svg class="icon">
                        <use href="{{asset('assets/images/icons/icons.svg?v=32#doctor')}}"></use>
                    </svg>
                </div>
                <span class="small">{{trans('website.statiscts.more')}}</span>
                <h2 class="h3">{{get_setting('no_of_doctors')}}</h2>
                <span class="lead">{{trans('website.statiscts.doctor')}}</span>
            </div>


            <div class="statistic" data-aos="fade-up" data-aos-delay="300">
                <div class="statistic__icon">
                    <svg class="icon">
                        <use href="{{asset('assets/images/icons/icons.svg?v=32#client')}}"></use>
                    </svg>
                </div>
                <span class="small">{{trans('website.statiscts.more')}}</span>
                <h2 class="h3">{{get_setting('no_of_clients')}}</h2>
                <span class="lead">{{trans('website.statiscts.client')}}</span>
            </div>

        </div>
    </div>
</section>
