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

            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
                {{trans('website.offered_')}}
            </h1>

        </div>
    </div>


    <section class="offers d-pad">
        <div class="container">

            <div class="section-title">
                <h2 class="title" data-aos="fade-up">
<span class="color">{{trans('website.offered_')}}:</span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    {{trans('website.new_offered_')}}
                </p>
            </div>


            <div class="offers__container" data-aos="fade-up" data-aos-delay="300">
            @foreach(\App\Models\OfferCategory::all() as $offer)
                    <a href="{{route('website.page.offers_show',$offer->id)}}" class="offer d-block">
                        <div class="offer__image" data-aos="zoom-out">
                            <picture>
                                <source srcset="{{asset($offer->getImg())}}" type="image/webp"><img src="{{asset($offer->getImg())}}" draggable="false" loading="lazy" alt="offer">
                            </picture>
                        </div>
                        <div class="offer__title">
                            <h3 class="h5">
                                <span class="overline d-block">{{$offer->name}}</span>
                            </h3>
                        </div>
                    </a>

                @endforeach

            </div>
        </div>
    </section>


{{--  @include('components.partners')--}}

@endsection
