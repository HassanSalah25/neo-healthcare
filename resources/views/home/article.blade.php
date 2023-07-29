@extends('layouts.master')
@section('content')


    <div class="page-header">
        <div class="container">

            <div class="page-header__image">
                <picture>
                    <source srcset="{{asset($blog->getImg())}}" type="image/webp" />
                    <img src="{{asset($blog->getImg())}}" draggable="false" alt="{{$blog->alt_image}}" data-aos="zoom-out" />
                </picture>
            </div>

            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
                {{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}
            </h1>

        </div>
    </div>

    <section itemscope itemtype="http://schema.org/Article" class="article d-pad">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">

                    <div class="article-title" data-aos="fade-up">
                        <p itemprop="name" itemprop="articleBody" class="title">  {{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}</p>
                        <span itemprop="datePublished" class="date small"> {{$blog->created_at}}</span>
                    </div>


                    <div class="article__content">

                        <div class="article__image" data-aos="zoom-out">
                            <picture>
                                <source srcset="{{asset($blog->getImg())}}" type="image/webp" />
                                <img src="{{asset($blog->getImg())}}" draggable="false" alt="{{app()->getLocale() == 'ar' ? $blog->alt_image_ar : $blog->alt_image }}" data-aos="zoom-out" />
                            </picture>
                        </div>

                        <div itemprop="articleBody">
                            {!!app()->getLocale() == 'ar' ? $blog->content_ar : $blog->content_en !!}
                        </div>
                    </div>


                    <div class="article__block article__add-comment" data-aos="fade-up" >
                        <p class="h4 article__section-title">{{trans('website.add')}}</p>
                        <form action="{{route('website.blog_comment.store')}}" method="post" class="article__form" >
                            @csrf
                            <input type="hidden" value="{{$blog->id}}" id="blog_id" name="blog_id" >
                            <div class="form-row" >
                                <div class="form-group col-md-6">
                                    <label for="commentName" class="sr-only" >{{trans('website.full_name')}}</label>
                                    <input type="text" class="form-control" style="background-color: #d5d5d5" id="commentName" name="commenter" placeholder="{{trans('website.book_appointment_now.enter_full_name')}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="commentEmail" class="sr-only">{{trans('website.email')}}</label>
                                    <input type="email" class="form-control" style="background-color: #d5d5d5" id="commentEmail" name="email" placeholder="{{trans('website.book_appointment_now.enter_email')}}" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="commentMessage" class="sr-only">{trans('website.add')}}</label>
                                    <textarea class="form-control" style="background-color: #d5d5d5" id="commMessage" name="comment" placeholder="{{trans('website.add')}}." required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit"  class="btn btn-brand-primary">{{trans('website.add')}}</button>
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
                                        <p class="h4" data-aos="fade-up">
                                            {{trans('website.book_now_2.d_u_w_r_n')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="{{route('website.appointment')}}" class="btn btn-brand-white Booking_ads" data-aos="fade-up" data-aos-delay="100">
                                            {{trans('website.nav.reserve_now')}}
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
                                    <p class="h6 color">{{trans('website.calendar.time')}}
                                    </p>
                                    <p style="color: white">{{trans('website.calendar.time_calender')}}ً</p>
                                </div>

                            </div>

                        </div>



{{--                        <div class="article__side-block article__subscribe" data-aos="fade-up">--}}
{{--                            <div class="footer__form">--}}
{{--                                <h6>	{{trans('website.subscribe')}}:</h6>--}}
{{--                                <form method="POST" action="https://ramclinics.net/post/subscribe">--}}
{{--                                    <input type="hidden" name="_token" value="Qjgc5P4mpdMZ30u6tJNx3cQafs7YBXjIntY4gv47"> <div class="form-group">--}}
{{--                                        <label for="subscribeNewsletter" class="sr-only">أدخل رقم الجوال</label>--}}
{{--                                        <span class="form-icon">--}}
{{--<svg class="icon">--}}
{{--<use href="/web/assets/images/icons/icons.svg?v=33#iphone"></use>--}}
{{--</svg>--}}
{{--</span>--}}
{{--                                        <input type="tel" name="phone" class="form-control" onchange="validateContact(this)" maxlength="10" placeholder="أدخل رقم الجوال" id="subscribeNewsletter" required>--}}
{{--                                        <button class="btn btn-brand-primary">إشترك</button>--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            {{trans('website.saudi')}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <div class="article__side-block article__related">
                            <div class="footer__form" data-aos="fade-up">
                                  <p class="h5">{{trans('website.article')}}</p>
                                @foreach($blogs->take(5) as $blog)

                                    <div class="blog__article" data-aos="fade-up" data-aos-delay="100">
                                        <a href="{{route('website.blog.show',$blog->id)}}" class="d-block blog__article-photo">
                                            <picture>
                                                <source srcset="{{asset($blog->getImg())}}" type="image/webp" />
                                                <img src="{{asset($blog->getImg())}}" draggable="false"  loading="lazy" alt="{{$blog->alt_image}}" />
                                            </picture>
                                        </a>
                                        <div class="blog__article-info">
                                            <a href="{{route('website.blog.show',$blog->id)}}">
                                                 <p class="h5">{{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}</p>
                                                <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden">{!! app()->getLocale() == 'ar' ? $blog->content_ar : $blog->content_en!!}</div>

                                                <span class="date small">{{$blog->created_at}}</span>
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
