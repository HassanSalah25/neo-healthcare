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


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">مقالات نيو</h1>

        </div>
    </div>


    <section class="blog d-pad">
        <div class="container">

            <div class="section-title" data-aos="fade-up"><h2 class="title">
                    {{trans('website.blogs.s_blogs')}} <span class="color">{{trans('website.blogs.medical')}}:
        </span>
                </h2>
                <p>
                    {{trans('website.blogs.blogs_desc')}}
                </p></div>


            <!--<div class="filters d-lg-flex justify-content-between">-->

            <!--    <div class="filters__bg" data-aos="fade-up">-->
            <!--        <div class="filter__search">-->
            <!--            <form method="GET" action="">-->
            <!--                <input type="search" name="q" class="form-control" placeholder=" {{trans('website.nav.البحث')}} ">-->
            <!--                <button type="submit" class="btn btn-brand-primary btn-icon">-->
            <!--                    <span class="sr-only">{{trans('website.nav.البحث')}}</span>-->
            <!--                    <svg>-->
            <!--                        <use href="{{asset('assets/images/icons/icons.svg?v=33#search')}}"></use>-->
            <!--                    </svg>-->
            <!--                </button>-->
            <!--            </form>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->

            <div class="row">
            @foreach($blogs as $blog)
                    <div class="col-lg-6">
                        <div class="blog__article" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{route('website.blog.show',app()->getLocale() == 'en' ? ($blog->slug  == null ?  $blog->title  :  $blog->slug) : ($blog->slug_ar == null ?  $blog->title_ar :  $blog->slug_ar))}}" class="d-block blog__article-photo">
                                <picture>
                                    <source srcset="{{asset($blog->getImg())}}" type="image/webp" />
                                    <img src="{{asset($blog->getImg())}}" alt="{{app()->getLocale() == 'ar' ? $blog->alt_image_ar : $blog->alt_image}}" draggable="false" loading="lazy" />
                                </picture>
                            </a>
                            <div class="blog__article-info">

                                <a href="{{route('website.blog.show',app()->getLocale() == 'en' ? ($blog->slug  == null ?  $blog->title  :  $blog->slug) : ($blog->slug_ar == null ?  $blog->title_ar :  $blog->slug_ar))}}">
                                    <a href="{{route('website.blog.show',app()->getLocale() == 'en' ? ($blog->slug  == null ?  $blog->title  :  $blog->slug) : ($blog->slug_ar == null ?  $blog->title_ar :  $blog->slug_ar))}}">
                                        <h3 class="h5">{{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}</h3>
                                        <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:10;overflow:hidden">{!! app()->getLocale() == 'ar' ? $blog->content_ar : $blog->content_en!!}</div>

                                        <span class="date small">{{$blog->created_at}}</span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach


            </div>

        </div>
        <div id="page" style="
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
">
            {{ $blogs->links() }}
        </div>
    </section>


{{-- @include('components.partners')--}}

@endsection
