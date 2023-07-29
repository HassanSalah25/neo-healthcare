


<div class="modal fade" id="nearestBranch" tabindex="-1" aria-labelledby="nearestBranchLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header">
                <h4 class="modal-title" id="nearestBranchLabel">{{trans('website.')}}</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>{{trans('website.')}}</label>
                        <nav class="services-nav">
<span onclick="updateServiceId(1)" id="services-1" class="btn btn-brand-primary-5 active">
<svg class="icon">
<use href="/web/assets/images/icons/icons.svg?v=32#dental"></use>
</svg>
الأسنان
</span>
                            <span onclick="updateServiceId(2)" id="services-2" class="btn btn-brand-primary-5 ">
<svg class="icon">
<use href="/web/assets/images/icons/icons.svg?v=32#derma"></use>
</svg>
الجلدية
</span>
                            <span onclick="updateServiceId(3)" id="services-3" class="btn btn-brand-primary-5 ">
<svg class="icon">
<use href="/web/assets/images/icons/icons.svg?v=32#medical"></use>
</svg>
الطبية
</span>
                        </nav>
                    </div>
                    <input type="hidden" id="ServiceId" name="service" value="1">
                    <div class="form-group">
                        <label for="nearestBranchSelect">الفرع الأقرب إليك:</label>
                        <select class="custom-select" id="nearestBranchSelect" name="branche_id">
                            <option value>هل تريد إختيار فرع آخر؟</option>
                            <optgroup label="المملكة العربية السعودية">
                                <option value="6">الأحساء - حي البستان</option>
                                <option value="7">الأحساء - حي اليحيى</option>
                                <option value="10">المنامة - البلاد القديم</option>
                                <option value="11">الاحساء - الشركة السعودية للكهرباء</option>
                                <option value="12">الدمام - حي البحيرة</option>
                                <option value="13">الدمام - حي المركبات</option>
                                <option value="14">الدمام - حي المباركية</option>
                                <option value="16">الظهران - حي القصور</option>
                                <option value="17">الدمام - الشركة السعودية للكهرباء</option>
                                <option value="18">الدمام - حي الفيصلية</option>
                                <option value="19">الجبيل - حي الفناتير</option>
                                <option value="20">جدة - حي المروة</option>
                                <option value="21">الظهران- الدوحة</option>
                                <option value="22">الخبر - حي الحزام</option>
                                <option value="23">الخبر- الخبر الشماليه</option>
                                <option value="24">الخبر - حي العقربية</option>
                                <option value="25">القطيف - حي المجيدية</option>
                                <option value="27">الخبر - الراكة</option>
                                <option value="28">ينبع الصناعية - حي خالد</option>
                                <option value="30">رأس تنورة-الدانة</option>
                                <option value="32">حي المنار</option>
                                <option value="33">رام-الخفجي</option>
                                <option value="34">العقربية ديرما</option>
                                <option value="35">الفاخرية</option>
                                <option value="36">العزيزية</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <a onclick="return sendBook();" class="btn btn-brand-primary">
                            إحجز الآن
                            <svg class="btn-icon">
                                <use href="/web/assets/images/icons/icons.svg?v=32#book"></use>
                            </svg>
                        </a>
                        <a href="https://ramclinics.net/list/branches" class="btn btn-white">
                            عرض كل الفروع </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>











<section class="installments">
    <div class="container">
        <div class="installments__container">

            <div class="installments__text">
                <h2 class="h3" data-aos="fade-up">
                    إبتسم الآن، <span class="color">إدفع لاحقاً!</span> <br>
                    قسط خدماتك <span class="color">بسعر الكاش.</span>
                </h2>
                <div class="installments__partners" data-aos="fade-up" data-aos-delay="100">
                    <div class="installments__partner">
                        <picture>
                            <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/tasheel.webp?v=32" type="image/webp" />
                            <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/tasheel.jpg?v=32" draggable="false" loading="lazy" alt="tasheel" width="165" height="64" />
                        </picture>
                    </div>
                    <div class="installments__partner">
                        <picture>
                            <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/Tabby.svg?v=32" type="image/svg" />
                            <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/Tabby.svg?v=32" draggable="false" loading="lazy" alt="Tabby" width="165" height="64" />
                        </picture>
                    </div>
                    <div class="installments__partner">
                        <picture>
                            <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/tamara.svg?v=32" type="image/svg" />
                            <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/tamara.svg?v=32" draggable="false" loading="lazy" alt="tamara" width="165" height="64" />
                        </picture>
                    </div>
                </div>

                <div class="installments__actions" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://ramclinics.net/page/installment" class="btn btn-brand-primary">
                        قسط خدماتك الآن
                    </a>
                </div>

            </div>


            <div class="installments__image" data-aos="zoom-in">
                <picture>
                    <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/install.webp?v=32" type="image/webp" />
                    <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/install.png?v=32" draggable="false" loading="lazy" alt="install now" />
                </picture>
            </div>

        </div>
    </div>
</section>





<div class="modal fade" id="reviewVideo" tabindex="-1" aria-labelledby="reviewVideoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body" id="reviewVideoLabel">
                <video class="lazyload" src="#" data-src="/web/assets/videos/reviews.mp4" preload="metadata" controls></video>

            </div>
        </div>
    </div>
</div>



<section class="partners d-pad text-center ">
    <div class="container">
        <h2 class="title" data-aos="fade-up">
            شركاء
            <span class="color">النجاح</span>
        </h2>
        <div class="swiper partnersSlider" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/1.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/1.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/2.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/2.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/3.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/3.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/4.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/4.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/5.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/5.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner">
                        <div class="partner__image d-flex align-items-center justify-content-center">
                            <picture>
                                <source class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-srcset="/web/assets/images/partners/6.webp" type="image/webp" />
                                <img class="lazyload" src="/web/assets/images/placeholder.svg?v=32" data-src="/web/assets/images/partners/6.webp" draggable="false" loading="lazy" alt="alt" width="107" height="40" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <div class="swiper-button-next partner-next"></div>
                <div class="swiper-button-prev partner-prev"></div>
            </div>
        </div>
    </div>
</section>


<a href="#" class="offers-end text-center d-none">
    <h2 class="h6 color" id="counterEnd">باقي على انتهاء عروض رأس السنة</h2>
    <div class="counters d-flex justify-content-center" id="counters">

        <div class="counter">
            <div class="counter__number" id="jsSeconds">0</div>
            <div class="counter__title">ثانية</div>
        </div>


        <div class="counter">
            <div class="counter__number" id="jsMinutes">0</div>
            <div class="counter__title">دقيقة</div>
        </div>
        <div class="counter">
            <div class="counter__number" id="jsHours">0</div>
            <div class="counter__title">ساعة</div>
        </div>
        <div class="counter">
            <div class="counter__number" id="jsDay">0</div>
            <div class="counter__title">يوم</div>
        </div>

    </div>
</a>

