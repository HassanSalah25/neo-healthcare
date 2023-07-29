@extends('layouts.master')
@section('content')


    <div class="page-header">
        <div class="container">

{{--            <div class="page-header__image">--}}
{{--                <picture>--}}
{{--                    <source srcset="{{asset($job->getImg())}}" type="image/webp" />--}}
{{--                    <img src="{{asset($job->getImg())}}" draggable="false" alt="" data-aos="zoom-out" />--}}
{{--                </picture>--}}
{{--            </div>--}}


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
                {{$job->name_ar}}
            </h1>

        </div>
    </div>


    <section itemscope itemtype="http://schema.org/Article" class="article d-pad">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">

                    <div class="article-title" data-aos="fade-up">
                        <h2 itemprop="name" itemprop="articleBody" class="title"> {{$job->name_ar}}</h2>
                        <span itemprop="datePublished" class="date small"> {{$job->created_at}}</span>
                    </div>


                    <div class="article__content">

{{--                        <div class="article__image" data-aos="zoom-out">--}}
{{--                            <picture>--}}
{{--                                <source srcset="{{asset($job->getImg())}}" type="image/webp" />--}}
{{--                                <img src="{{asset($job->getImg())}}" draggable="false" alt="" data-aos="zoom-out" />--}}
{{--                            </picture>--}}
{{--                        </div>--}}

                        <div itemprop="articleBody">
                            {!!$job->description_ar!!}
                        </div>
                    </div>


                    <div class="article__block article__add-comment" data-aos="fade-up" >
                        <form action="{{route('website.applicant.store')}}" method="post" class="article__form" >
                            @csrf
                            <div class="form-row" >
                                <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                                    <label for="cv_id" class="col-lg-3 col-form-label">C.V</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" id="cv_id" name="cv_id" value required>
                                    </div>
                                </div>




                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn btn-brand-primary btn-form Booking_ads" data-aos="fade-up">
                                            {{trans('website.send')}}
                                            <svg class="btn-icon">
                                                <use href="/web/assets/images/icons/icons.svg?v=33#book"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>


                <div class="col-lg-5">
                    <div class="article__side">

                        <div class="article__side-block book-now">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="h4" data-aos="fade-up">
                                            {{trans('website.book_now_2.d_u_w_r_n')}}
                                        </h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="{{route('website.appointment')}}" class="btn btn-brand-white Booking_ads" data-aos="fade-up" data-aos-delay="100">
                                            q{{trans('website.nav.reserve_now')}}
                                            <svg class="btn-icon">
                                                <use href="{{asset('assets/images/icons/icons.svg?v=33#book')}}"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="article__side-block">

                            <div class="overlay-bg opening" data-aos="zoom-out-up">
                                <div class="overlay-bg__icon">
                                    <svg class="icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=32#derma')}}"></use>
                                    </svg>
                                </div>
                                <div class="row overlay-bg__block justify-content-center">
                                    <h2 class="h6 color"> {{trans('website.calendar.time')}}
                                    </h2>
                                    <h7 style="color: white">{{trans('website.calendar.time_calender')}}ً</h7>
                                </div>

                            </div>

                        </div>



                        {{--                        <div class="article__side-block article__subscribe" data-aos="fade-up">--}}
                        {{--                            <div class="footer__form">--}}
                        {{--                                <h6>{{trans('website.subscribe')}}:</h6>--}}
                        {{--                                <form method="POST" action="https://ramclinics.net/post/subscribe">--}}
                        {{--                                    <input type="hidden" name="_token" value="Qjgc5P4mpdMZ30u6tJNx3cQafs7YBXjIntY4gv47"> <div class="form-group">--}}
                        {{--                                        <label for="subscribeNewsletter" class="sr-only">{{trans('website.book_appointment_now.enter_mobile')}}</label>--}}
                        {{--                                        <span class="form-icon">--}}
                        {{--<svg class="icon">--}}
                        {{--<use href="/web/assets/images/icons/icons.svg?v=33#iphone"></use>--}}
                        {{--</svg>--}}
                        {{--</span>--}}
                        {{--                                        <input type="tel" name="phone" class="form-control" onchange="validateContact(this)" maxlength="10" placeholder="{{trans('website.book_appointment_now.enter_mobile')}}" id="subscribeNewsletter" required>--}}
                        {{--                                        <button class="btn btn-brand-primary">إشترك</button>--}}
                        {{--                                        <div class="invalid-feedback">--}}
                        {{--                                           {{trans('website.saudi')}}.--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <div class="article__side-block article__related">
                            <div class="footer__form" data-aos="fade-up">
                                <h3 class="h5">{{trans('website.article')}}</h3>
                                @foreach($jobs as $job)

                                    <div class="blog__article" data-aos="fade-up" data-aos-delay="100">
{{--                                        <a href="{{route('website.blog.show',$job->id)}}" class="d-block blog__article-photo">--}}
{{--                                            <picture>--}}
{{--                                                <source srcset="{{asset($job->getImg())}}" type="image/webp" />--}}
{{--                                                <img src="{{asset($job->getImg())}}" draggable="false" loading="lazy" alt="alt" />--}}
{{--                                            </picture>--}}
{{--                                        </a>--}}
                                        <div class="blog__article-info">
                                            <a href="{{route('website.blog.show',$job->id)}}">
                                                <h3 class="h5">{{app()->getLocale() == 'ar' ? $job->name_ar: $job->name}}</h3>
                                                <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden">{!!app()->getLocale() == 'ar' ? $job->description_ar : $job->description!!}</div>

                                                <span class="date small">{{$job->created_at}}</span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{--@include('components.partners')--}}




@endsection
