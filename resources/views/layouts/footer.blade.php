
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-xl-1">
                <div class="footer__logo" data-aos="fade-up">
                    <picture>
                        <source srcset="{{asset('assets/images/logo.png?v=32')}}" type="image/webp" />
                        <img src="{{asset('assets/images/logo.png?v=32')}}" draggable="false" loading="lazy" alt="logo" width="70" height="50" />
                    </picture>
                </div>
            </div>


            <div class="col-xl-7">
                <div class="footer__list-container">
                    <div class="footer__list" data-aos="fade-up">
                        <ul class="list-unstyled">
                            <li><a href="{{route('website.home')}}">{{trans('website.nav.main')}}</a></li>
                            <li><a href="{{route('website.page.about_us')}}">{{trans('website.nav.about')}}</a></li>
                            <li><a href="{{route('website.doctor')}}">{{trans('website.nav.doctors')}}</a></li>
                            <li><a href="{{route('website.blog.index')}}">{{trans('website.nav.blogs')}}</a></li>
                            <li><a href="{{route('website.applicant.index')}}">{{trans('website.nav.jobs')}}</a></li>
                        </ul>
                    </div>
                    <div class="footer__list" data-aos="fade-up">
                        <h6>{{trans('website.nav.services')}}:</h6>
                        <ul class="list-unstyled">
                            @foreach(\App\Models\ServiceCategory::limit(6)->get() as $category)
                                <li>
                                    <a href="{{route('website.service.index',$category->id)}}">
                                        {{app()->getLocale() == 'ar' ? $category->name_ar : $category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>


            <div class="col-xl-4">
                <div class="footer__social" data-aos="fade-up">
                    <div class=" w-100">
                        <ul class="">
                            <li class="">
                                <a href="https://goo.gl/maps/PfW6EhFua12C5aCN7" title="address">
                                   Ibn Khaldoun St. Amman - Jordan</i>
                                </a>
                            </li>
                            <li class="">
                                <a href="mailto:info@neocenter.jo" title="email">
                                    <i class="fa fa-email">info@neocenter.jo</i>
                                </a>
                            </li>
                            <li class="">
                                <a href="https://wa.me/ +962 7 9191 5560" title="whatsapp">
                                     +962 7 9191 5560
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="top-bar__block social aos-init aos-animate col-xl-5" data-aos="fade-down">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/neocenter.jo/" title="Facebook">
                                <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=32#facebook')}}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/neocenter.jo/" title="Instagram">
                                <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=32#instagram')}}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/neo-center/" title="LinkedIn">
                                <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=32#linkedin')}}"></use>
                                </svg>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>



        </div>
    </div>

    <div class="footer__copyrights text-center" style="background-color:#222c61">
        <small>
            &copy; 2023. جميع الحقوق محفوظة لـ عيادات نيو.
        </small>
    </div>

</footer>
