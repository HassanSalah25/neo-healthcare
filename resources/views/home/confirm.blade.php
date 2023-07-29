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
            {{trans('website.book_appointment_now.book_appointment_now')}}
        </h1>

    </div>
</div>

<h1 class="h3" data-aos="fade-up" data-aos-delay="100">
    {{trans('website.requestion')}}
</h1>

</div>
</div>


<section class="thanks d-pad">
    <div class="container">

        <div class="section-title">
            <h2 class="title" data-aos="fade-up">
                {{trans('website.thank')}} <br>
                <span class="color">{{trans('website.your_masseger')}}</span>
            </h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">{{trans('website.recieved')}}
            </p>

            <a href="{{route('website.home')}}" class="btn btn-brand-primary-5" data-aos="fade-up" data-aos-delay="200">
                {{trans('website.main')}}
            </a>
        </div>

    </div>
</section>


@endsection
