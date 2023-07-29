@extends('layouts.master')
@section('content')
<div class="page-header">
    <div class="container">

        <div class="page-header__image">
            <picture>
                <source srcset="{{asset($offer->offer_category->getImg())}}" type="image/webp">
                <img src="{{asset($offer->offer_category->getImg())}}" draggable="false" alt="page image" data-aos="zoom-out">
            </picture>
        </div>


        <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
            {{trans('website.session')}}
        </h1>

    </div>
</div>


<section class="offers-book d-pad">
    <div class="container">

        <div class="section-title">
            <h2 class="title" data-aos="fade-up">
                {{$offer->name}}
            </h2>
        </div>

        <div class="row">

            <div class="col-lg-7 order-2 order-lg-1">

                <div class="book__form">
                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('website.page.store_offer')}}">
                       @csrf
                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookOffer" class="col-lg-3 col-form-label">{{trans('website.offer')}}</label>
                            <div class="col-lg-9">
                                <select class="custom-select" id="bookOffer" name="offer_id" required>
                                    <option value disabled>{{trans('website.offer')}}</option>
                                    @foreach($offers as $off)
                                        <option value="{{$off->id}}" {{$off->id == $offer->id? 'selected':''}}>{{$off->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


{{--                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">--}}
{{--                            <label for="bookBranch" class="col-lg-3 col-form-label">الدولة</label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <select class="custom-select" id="bookBranch" name="branche_id" required>--}}
{{--                                    <option value disabled>الدولة</option>--}}
{{--                                    <option value="1" disabled>السعودية</option>--}}
{{--                                    <option value="3" selected>(عروض الافتتاح (فرع الفاخرية</option>--}}
{{--                                    <option value="4" disabled>(عروض الافتتاح (فرع العزيزية</option>--}}
{{--                                    <option value="9" disabled>عروض الربيع (المنار-الخفجي-جدة-رأس تنورة-سيهات- العقربية جلدية)</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">--}}
{{--                            <label for="bookBranch" class="col-lg-3 col-form-label">الفرع</label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <select class="custom-select" name="sub_branche_id" required>--}}
{{--                                    <option value>إختر الفرع المناسب لك</option>--}}
{{--                                    <option value="35">الفاخرية</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookDate" class="col-lg-3 col-form-label">التاريخ</label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" id="date_picker" name="attendance_date" value required>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookTime" class="col-lg-3 col-form-label">التوقيت</label>
                            <div class="col-lg-9">
                                <select class="custom-select" id="bookTime" name="available_time" required>
                                    <option value>إختر التوقيت المناسب لك</option>
                                    <option value="1">صباحي</option>
                                    <option value="2">مسائي</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookName" class="col-lg-3 col-form-label">الاسم بالكامل</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="bookName" placeholder="أدخل الإسم بالكامل" name="name" value required>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookPhone" class="col-lg-3 col-form-label">الجوال</label>
                            <div class="col-lg-9">
                                <input type="tel" class="form-control" id="bookPhone" onchange="validateContact(this)" maxlength="10" placeholder="أدخل رقم الجوال (05xxxxxxxx)." name="phone" value required>
                                <div class="invalid-feedback">
                                    يجب أن يكون هذا الحقل جوالًا سعوديًا (05xxxxxxxx).
                                </div>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookEmail" class="col-lg-3 col-form-label">البريد الإلكتروني</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="bookEmail" placeholder="أدخل البريد الإلكتروني" name="email" value required>
                            </div>
                        </div>


{{--                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">--}}
{{--                            <label for="offerPayment" class="col-lg-3 col-form-label">الدفع</label>--}}
{{--                            <div class="col-lg-9">--}}
{{--                                <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                    <input type="radio" id="offerPayment" name="type_pay" value="Pay online" class="custom-control-input">--}}
{{--                                    <label class="custom-control-label" for="offerPayment"> أونلاين </label>--}}
{{--                                </div>--}}
{{--                                <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                    <input type="radio" id="Installment" name="type_pay" value="Pay with installment" class="custom-control-input">--}}
{{--                                    <label class="custom-control-label" for="Installment"> للتقسيط </label>--}}
{{--                                </div>--}}
{{--                                <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                    <input type="radio" id="cashInBranch" name="type_pay" value="Payment in branch" class="custom-control-input" checked>--}}
{{--                                    <label class="custom-control-label" for="cashInBranch"> في الفرع </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="installment-payment d-none">--}}
{{--                            <div class="form-group row d-flex align-items-center" data-aos="fade-up">--}}
{{--                                <label for="PaymentInstallment" class="col-lg-3 col-form-label"> التقسيط </label>--}}
{{--                                <div class="col-lg-9">--}}
{{--                                    <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                        <input type="radio" id="TamaraInstallment" name="installment_pay" value="Tamara" class="custom-control-input">--}}
{{--                                        <label class="custom-control-label" for="TamaraInstallment"> تمارا </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                        <input type="radio" id="TabbyInstallment" name="installment_pay" value="Tabby" class="custom-control-input">--}}
{{--                                        <label class="custom-control-label" for="TabbyInstallment"> تابي </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        {{--<div class="installment-payment-tamara d-none">
                            <div class="card">
                                <div class="book-offer__info mb-3">
                                    <div class="tamara-product-widget" data-lang="ar" data-price="500" data-currency="SAR" data-country-code="SA" data-color-type="default" data-show-border="false" data-payment-type="installment" data-disable-installment="false" data-disable-paylater="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="installment-payment-tabby d-none">
                            <div class="card">
                                <div class="book-offer__info mb-3">
                                    <div id="tabbyCard">
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="checkterms" class="col-lg-3 col-form-label"></label>
                            <div class="col-lg-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="checkbox" id="checkterms" name="check_terms" value="check terms" class="custom-control-input" required>
                                    <label class="custom-control-label" for="checkterms"> <a href="" target="_blank" style="color: black;padding: 0px; margin-left: 226px;"> أوافق على الشروط واﻷحكام </a></label>
                                </div>
                            </div>
                        </div>


                        <div class="row d-flex align-items-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-brand-primary btn-form Booking_offer_ads" data-aos="fade-up">
                                    إحجز العرض الآن
                                    <svg class="btn-icon">
                                        <use href="{{asset('assets/images/icons/icons.svg?v=33#book')}}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>


            <div class="col-lg-5 order-1 order-lg-2">
                <div class="book-offer__info">
                    <div class="book-offer__image">
                        <picture>
                            <source srcset="{{asset($offer->getImg())}}" type="image/webp"><img src="{{asset($offer->getImg())}}" draggable="false" loading="lazy" data-aos="zoom-out" alt="offer">
                        </picture>
                    </div>
                    <div class="offer-list__info text-center">
                        <div class="offer-list__title">
                            <h3 class="h6">
                                {{$offer->name}}
                            </h3>
                            <div id="discountGroup" class="discountGroup d-none">
<span class="h5 color">
{{$offer->price}} <small>ريال سعودي</small>
</span>
                            </div>
                            <div id="NotdiscountGroup" class="NotdiscountGroup">
<span class="h5 color">
{{$offer->price}}  <small>ريال سعودي</small>
</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{--@include('components.partners')--}}
@endsection
