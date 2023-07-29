<header class="header" id="header">
    <div class="header__nav container" data-aos="fade-up" data-aos-delay="200">
        <nav class="navbar navbar-expand-xl navbar-light">

            <a class="navbar-brand" href="{{url('/')}}">
                <picture>
                    <source srcset="{{asset('assets/images/logo.png?v=32')}}" type="image/webp" />
                    <img src="{{asset('assets/images/logo.png?v=32')}}" alt="ram clinics logo" width="30" height="55" />
                </picture>
            </a>

            <div class="mobile-icons">
                <button type="button" class="btn btn-white btn-icon d-xl-none" data-toggle="modal" data-target="#searchModal">
                    <span class="sr-only"> {{trans('website.nav.search')}} </span>
                    <svg>
                        <use href="{{asset('assets/images/icons/icons.svg?v=32#search')}}"></use>
                    </svg>
                </button>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#ramNavbar" aria-controls="ramNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> {{trans('website.nav.menu')}} </span>
                </button>
            </div>


            <div class="collapse navbar-collapse" id="ramNavbar">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('website.home')}}">{{trans('website.nav.main')}} <span class="sr-only">(الحالي)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('website.page.about_us')}}">{{trans('website.nav.about')}} </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('website.nav.services')}} </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            @foreach(\App\Models\ServiceCategory::all() as $service)
                           @if($service->id == 5)
                            <a class="dropdown-item" href="{{route('website.service.view',$service->services()->first())}}">
                                {{ App::getLocale() == "ar" ? $service->name_ar : $service->name}}
                            </a>
                               @else
                            <a class="dropdown-item" href="{{route('website.service.index',$service->id)}}">
                                {{ App::getLocale() == "ar" ? $service->name_ar : $service->name}}
                            </a>
                             @endif
                            @endforeach
                            @foreach(\App\Models\Service::where('service_category_id',null)->get() as $service)
                                <a class="dropdown-item" href="{{route('website.service.view',$service->id)}}">
                                    {{ App::getLocale() == "ar" ? $service->name_ar : $service->name}}
                                </a>
                            @endforeach
                        </div>
                    </li>
                   {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            العروض </a>
                        <div class="dropdown-menu" aria-labelledby="offersDropdown">
                                <a class="dropdown-item" href="{{route('website.page.offers')}}">كل العروض</a>
                              </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('website.discount.index')}}">خصومات الشركاء</a>
                    </li>--}}

                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('website.doctor')}}">{{trans('website.nav.doctors')}}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('website.nav.blogs')}} </a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="{{route('website.blog.index')}}">{{trans('website.nav.all_blogs')}}</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('website.feedback')}}">
                            {{trans('website.nav.rate_your_visit')}}
                        </a>

                    </li>
                </ul>

                <div class="my-2 my-lg-0 d-xl-inline-block">
                    <button type="button" class="btn btn-white d-none d-xl-inline-block" data-toggle="modal" data-target="#searchModal">
                        <span class="sr-only">{{trans('website.nav.search')}}</span>
                        <svg class="btn-icon"><use href="{{asset('assets/images/icons/icons.svg?v=32#search')}}"></use></svg>
                    </button>
                    <a href="{{route('website.appointment')}}" class="btn btn-brand-primary Booking_ads">
                        {{trans('website.nav.reserve_now')}} <svg class="btn-icon"><use href="{{asset('assets/images/icons/icons.svg?v=32#book')}}"></use></svg>
                    </a>

                    <a href="\{{\Config::get('app.locale') == 'en' ? 'ar' : 'en'}}" class="lang">{{\Config::get('app.locale') == 'en' ? 'ar' : 'en'}}</a>
{{--                    @if(\Config::get('app.locale') == 'ar')--}}
{{--                    @else--}}
{{--                        <a href="{{route('website.change.language','ar')}}" class="lang">{{\Config::get('app.locale')}}</a>--}}
{{--                    @endif--}}
                </div>

            </div>


        </nav>
    </div>

</header>
