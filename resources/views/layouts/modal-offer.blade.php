<div class="modal fade" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body" id="notificationModalLabel">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="notification__media">
                            <video src="/web/assets2/videos/reviews.mp4" preload="metadata" controls></video></div>
                    </div>


                    <div class="col-lg-6 d-flex align-items-center"><div class="notification__text">
<span class="h6 color">
الطبيبة/ دعاء حامد تتحدث عن
</span>
                            <h2 class="h3">
                                أهمية جلسات شد الوجه والرقبة بتقنية الهايفو
                            </h2>
                            <p>
                                تم إنشاء أداتنا الأبجدية لخدمة مصممي المواقع، ومدراء المواقع ومسوقين المحتوى. إذا كنت تحتاج إلى نص ينوب عن محتوى
                                لم
                                يتم إنشائه بعد، يمكنك استخدام هذه الأداة. بهذه الطريقة، يصبح بإمكان مصممي الرسومات ومطوري المواقع، الخ التركيز على
                                العناصر الرئيسية الأخرى
                            </p>

                            <div class="notification__actions">
                                <a href="https://ramclinics.net/book-an-appointment" class="btn btn-brand-primary">
                                    إحجز الآن
                                    <svg class="btn-icon">
                                        <use href="{{asset('/assets2/images/icons/icons.svg#book')}}"></use>
                                    </svg>
                                </a>
                                <a href="https://ramclinics.net/list/doctors" class="btn btn-brand-primary-5">الملف الشخصي</a>
                            </div>

                        </div></div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="submit" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header">
                <h4 class="modal-title" id="searchModalLabel">
                    البحث
                </h4>
            </div>
            <div class="modal-body">
                <form method="GET" action="https://ramclinics.net/search/results">
                    <div class="form-row">
                        <div class="form-group col-lg-9">
                            <label for="searchInput" class="sr-only">البحث</label>
                            <input autofocus type="search" name="keyword" class="form-control" id="searchInput" value placeholder="هل تبحث عن طبيب أو خدمة أو أي شئ؟">
                        </div>
                        <div class="form-group col-lg-3">
                            <button type="submit" class="btn btn-brand-primary btn-block">إبحث الآن</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

