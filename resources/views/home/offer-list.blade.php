@extends('layouts.master')
@section('content')

<div class="page-header">
    <div class="container">

        <div class="page-header__image">
            <picture>
                <source srcset="{{asset($offer_category->getImg())}}" type="image/webp" />
                <img src="{{asset($offer_category->getImg())}}" draggable="false" alt="page image" data-aos="zoom-out" />
            </picture>
        </div>


        <h1 class="h3" data-aos="fade-up" data-aos-delay="100">{{trans('website.offered_')}}</h1>

    </div>
</div>


<section class="offers-list d-pad">
    <div class="container">

        <div class="section-title">
            <h2 class="title" data-aos="fade-up">
{{$offer_category->name}}
            </h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-xl-3">
                <div class="filters">

                    <div class="filters__bg" data-aos="fade-up">

                        <div class="filters__bg-image">
                            <picture>
                                <source srcset="{{asset($offer_category->getImg())}}" type="image/webp" />
                                <img src="{{asset($offer_category->getImg())}}" draggable="false" loading="lazy" alt="alt" />
                            </picture>
                        </div>

                        <div class="filter__btns">
                            <div class="nav flex-column nav-pills">
                                <input type="hidden" id="GetLocale" name="locale" class="form-control" value=" ">
                                 @foreach(\App\Models\OfferCategory::all()   as $category)
                                    <a href="{{route('website.page.offers_show',$category->id)}}" class="btn btn-white {{active_if_full_match('page/offers_show/'.$offer_category->id)}}">{{$category->name}} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-8 col-xl-9">
                <div class="offers-list__container">
                @foreach($offer_category->offers as $offer)
                        <div class="offer-list" data-aos="fade-up">

                            <a href="" class="offer-list__image">
                                <picture>
                                    <source srcset="{{asset($offer->getImg())}}" type="image/webp"><img src="{{asset($offer->getImg())}}" draggable="false" loading="lazy" alt="alt">
                                </picture>
                            </a>


                            <div class="offer-list__info">
                                <div class="offer-list__title">
                                    <h3 class="h6">
                                        <a href="">
                                            {{$offer->name}}
                                        </a>
                                    </h3>
                                    <span class="h5 color">
{{$offer->price}} <small>{{trans('website.real')}}</small>
</span>
                                </div>
                                <div class="offer-list__btn">
                                    <a href="{{route('website.page.create_offer',$offer->id)}}" class="btn btn-brand-primary Booking_offer_ads">
                                        {{trans('website.book_offer')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                @endforeach


                </div>
            </div>

        </div>
    </div>
</section>


{{--@include('components.partners')--}}



@endsection
