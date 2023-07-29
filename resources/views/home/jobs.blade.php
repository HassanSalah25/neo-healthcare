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


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">{{trans('website.job_neo')}}</h1>

        </div>
    </div>


    <section class="blog d-pad">
        <div class="container">

            <div class="section-title" data-aos="fade-up"><h2 class="title">
                    {{trans('website.wthaf')}} <span class="color">{{trans('website.blogs.medical')}}:
        </span>
                </h2>
                </div>


            <!--<div class="filters d-lg-flex justify-content-between">-->

            <!--    <div class="filters__bg" data-aos="fade-up">-->
            <!--        <div class="filter__search">-->
            <!--            <form method="GET" action="">-->
            <!--                <input type="search" name="q" class="form-control" placeholder=" {{trans('website.nav.search')}} ">-->
            <!--                <button type="submit" class="btn btn-brand-primary btn-icon">-->
            <!--                    <span class="sr-only">{{trans('website.nav.search')}}</span>-->
            <!--                    <svg>-->
            <!--                        <use href="{{asset('assets/images/icons/icons.svg?v=33#search')}}"></use>-->
            <!--                    </svg>-->
            <!--                </button>-->
            <!--            </form>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->

            <div class="row">
                @foreach($jobs as $job)
                    <div class="col-lg-6">
                        <div class="blog__article" data-aos="fade-up" data-aos-delay="100">
{{--                            <a href="{{route('website.blog.show',$job->id)}}" class="d-block blog__article-photo">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="{{asset($job->getImg())}}" type="image/webp" />--}}
{{--                                    <img src="{{asset($job->getImg())}}" draggable="false" loading="lazy" />--}}
{{--                                </picture>--}}
{{--                            </a>--}}
                            <div class="blog__article-info">

                                <a href="{{route('website.applicant.job.show',$job->id)}}">
                                    <a href="{{route('website.applicant.job.show',$job->id)}}">
                                        <h3 class="h5">{{app()->getLocale() == 'ar' ? $job->name_ar: $job->name}}</h3>
                                        <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:10;overflow:hidden">{!!app()->getLocale() == 'ar' ? $job->description_ar:$job->description!!}</div>

                                        <span class="date small">{{$job->created_at}}</span>
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
            {{ $jobs->links() }}
        </div>
    </section>


    {{-- @include('components.partners')--}}

@endsection
