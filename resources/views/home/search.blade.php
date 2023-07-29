@extends('layouts.master')
@section('content')


    <section class="search d-pad m-5">
        <div class="container">
            @if($services == null)
            <div id="no_results " class="d-flex flex-column align-items-center" >
                <h3 class="mb-3">{{trans('website.search_not_found')}}</h3>
                <h6 class="text-center">{{trans('website.try_again')}}</h6>
            </div>
            @else

            @if($blogs->count() > 0)
            <div id="list_articles">
                <div class="section-title">
                    <small class="color"> <span class="articles_search_count"> </span> {{trans('website.search_result')}} </small>
                    <h2 class="title" data-aos="fade-up">
                        {{trans('website.search_result')}} </h2>
                </div>

                <div class="search__container" id="articles_section">
                    <div class="spinner" id="spinner_articles_section">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>

                <div class="row">
                @foreach ($blogs as $blog)
                    <a href="{{route('website.blog.show',$blog->id)}}" class="search__result aos-init aos-animate m-3" data-aos="fade-up">
                        <div class="search__result-image">
                            <picture>
                                <source srcset="{{$blog->getImg()}}" type="image/webp">
                                <img src="{{$blog->getImg()}}" draggable="false" loading="lazy" alt="blog">
                            </picture>
                        </div>
                        <div class="search__result-text">
                            <span class="color small">{{trans('website.blogs.blogs')}}</span>
                            <h3 class="h6">{{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}</h3>
                            <p></p>
                        </div>
                    </a>
                @endforeach
                </div>
                <div class="text-center mt-5 mb-5">
                    <button class="btn btn-brand-primary d-none" id="btn_more_articles" data-link="{{route('website.blog.index')}}">{{trans('website.doctors.more')}}</button>
                </div>
            </div>
            @endif
            @if($doctors->count() > 0)
            <div id="list_doctors">
                <div class="section-title">
                    <small class="color"> <span class="doctors_search_count"> </span> {{trans('website.search_doctor_result')}} </small>
                    <h2 class="title" data-aos="fade-up">
                        {{trans('website.search_doctor_result')}} </h2>
                </div>

                <div class="search__container" id="doctors_section">
                    <div class="spinner" id="spinner_doctors_section">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            <div class="row">
                @foreach ($doctors as $doctor)
                    <a href="{{route('website.doctor.show',$doctor->id)}}" class="search__result aos-init aos-animate m-3" data-aos="fade-up">
                        <div class="search__result-image">
                            <picture>
                                <source srcset="{{$doctor->getImg()}}" type="image/webp">
                                <img src="{{$doctor->getImg()}}" draggable="false" loading="lazy" alt="blog">
                            </picture>
                        </div>
                        <div class="search__result-text">
                            <span class="color small">{{trans('website.nav.doctors')}}</span>
                            <h3 class="h6">{{app()->getLocale() == 'ar' ? $doctor->first_name_ar : $doctor->first_name}}</h3>
                            <p></p>
                        </div>
                    </a>
                @endforeach
            </div>
                <div class="text-center mt-5 mb-5">
                    <button class="btn btn-brand-primary d-none" id="btn_more_doctors" data-link="{{route('website.doctor')}}">{{trans('website.doctors.more')}}</button>
                </div>
            </div>
                @endif
                @if($services->count() > 0)
            <div id="list_specificities">
                <div class="section-title">
                    <small class="color"> <span class="specificities_search_count"> </span>{{trans('website.search_service_result')}}</small>
                    <h2 class="title" data-aos="fade-up">
                        {{trans('website.search_service_result')}} </h2>
                </div>

                <div class="search__container" id="specificities_section">
                    <div class="spinner" id="spinner_specificities_section">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>

                <div class="row">
                @foreach ($services as $service)
                    <a href="{{route('website.service.view',$service->id)}}" class="search__result aos-init aos-animate m-3" data-aos="fade-up">
{{--                        <div class="search__result-image">--}}
{{--                            <picture>--}}
{{--                                <source srcset="{{$service->getImg()}}" type="image/webp">--}}
{{--                                <img src="{{$service->getImg()}}" draggable="false" loading="lazy" alt="blog">--}}
{{--                            </picture>--}}
{{--                        </div>--}}
                        <div class="search__result-text">
                            <span class="color small">{{trans('website.nav.services')}}</span>
                            <h3 class="h6">{{app()->getLocale() == 'ar' ? $service->name_ar : $service->name}}</h3>
                            <p></p>
                        </div>
                    </a>
                @endforeach
                </div>
                <div class="text-center mt-5 mb-5">
                    <button class="btn btn-brand-primary d-none" id="btn_more_specificities" data-link="{{route('website.service.index')}}">{{trans('website.doctors.more')}}</button>
                </div>
            </div>
                @endif
            @endif
        </div>
    </section>

@endsection


{{--@push('scripts')--}}

{{--    <script>--}}
{{--        $(window).on('load', function(){--}}
{{--            $('#spinner_articles_section').addClass('d-none')--}}

{{--            let article = getArticles($('#btn_more_articles').data('link'))--}}

{{--            $('#spinner_doctors_section').addClass('d-none')--}}

{{--            let doctors = getDoctors($('#btn_more_doctors').data('link'))--}}

{{--            $('#spinner_specificities_section').addClass('d-none')--}}

{{--            let specificities = getSpecificities($('#btn_more_specificities').data('link'))--}}

{{--            if(article &&  doctors && specificities){--}}

{{--                $('#no_results').removeAttr("style");--}}
{{--            }--}}
{{--        });--}}

{{--        $(document).on('click', '#btn_more_articles', function(){--}}

{{--            getArticles($('#btn_more_articles').data('link'))--}}
{{--        });--}}

{{--        var APP_URL = {{url()}};--}}

{{--        function getArticles(url) {--}}

{{--            var data_value = false;--}}

{{--            $.ajax({--}}
{{--                url: url.replace(/^http:/, 'https:'),--}}
{{--                //url: url,--}}
{{--                type: 'GET',--}}
{{--                async: false,--}}
{{--                data: {--}}
{{--                    'keyword': {{$keyword}}--}}
{{--                },--}}
{{--                success: function(response) {--}}

{{--                    if( response.total == 0 )--}}
{{--                        $('#list_articles').addClass('d-none')--}}

{{--                    $('.articles_search_count').text(response.total)--}}

{{--                    if( response.next_page_url != null ){--}}
{{--                        $('#btn_more_articles').removeClass('d-none')--}}
{{--                    }else{--}}
{{--                        $('#btn_more_articles').addClass('d-none')--}}
{{--                    }--}}

{{--                    data_value = ( response.data.length === 0 );--}}

{{--                    $('#btn_more_articles').data('link', response.next_page_url);--}}

{{--                        $.each(response.data, function( index, value ) {--}}
{{--                            ReturnUrl = value.slug;--}}
{{--                        let $element =--}}
{{--                            '<a href="' + APP_URL + '/' + ReturnUrl + '" class="search__result" data-aos="fade-up"> \n'+--}}
{{--                            '<div class="search__result-image"> \n'+--}}
{{--                            '<picture> \n'+--}}
{{--                            '<source srcset="'+ value.image +'" type="image/webp"> \n'+--}}
{{--                            '<img src="'+ value.image +'" draggable="false" loading="lazy" alt="blog"> \n'+--}}
{{--                            '</picture> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '<div class="search__result-text"> \n'+--}}
{{--                            '<span class="color small">المقالات</span> \n'+--}}
{{--                            '<h3 class="h6">'+ value.name +'</h3> \n'+--}}
{{--                            '<p>'+ value.content.substring(0, 250).replace(/(<([^>]+)>)/gi, "") +'</p> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '</a>';--}}

{{--                        $('#articles_section').append($element);--}}
{{--                    });--}}
{{--                },--}}
{{--                error : function(request,error)--}}
{{--                {--}}
{{--                    alert("Request: "+JSON.stringify(request));--}}
{{--                }--}}
{{--            });--}}

{{--            return data_value;--}}
{{--        }--}}

{{--        $(document).on('click', '#btn_more_doctors', function(){--}}

{{--            getDoctors($('#btn_more_doctors').data('link'))--}}
{{--        });--}}

{{--        function getDoctors(url) {--}}

{{--            var doctors_value = false;--}}

{{--            $.ajax({--}}
{{--                url: url.replace(/^http:/, 'https:'),--}}
{{--                //url: url,--}}
{{--                type: 'GET',--}}
{{--                async: false,--}}
{{--                data: {--}}
{{--                    'lang': 'ar',--}}
{{--                    'keyword': 'د'--}}
{{--                },--}}
{{--                success: function(response) {--}}

{{--                    if( response.total == 0 )--}}
{{--                        $('#list_doctors').addClass('d-none')--}}

{{--                    $('.doctors_search_count').text(response.total)--}}

{{--                    if( response.next_page_url != null ){--}}
{{--                        $('#btn_more_doctors').removeClass('d-none')--}}
{{--                    }else{--}}
{{--                        $('#btn_more_doctors').addClass('d-none')--}}
{{--                    }--}}

{{--                    $('#btn_more_doctors').data('link', response.next_page_url);--}}

{{--                    doctors_value = ( response.data.length === 0 );--}}

{{--                    $.each(response.data, function( index, value ) {--}}

{{--                        ReturnUrl = route('web.doctors.details', {'slug' : value.slug  }) ;--}}

{{--                        let $element =--}}
{{--                            '<a href="'+ ReturnUrl +'" class="search__result" data-aos="fade-up"> \n'+--}}
{{--                            '<div class="search__result-image"> \n'+--}}
{{--                            '<picture> \n'+--}}
{{--                            '<source srcset="'+ value.image +'" type="image/webp"> \n'+--}}
{{--                            '<img src="'+ value.image +'" draggable="false" loading="lazy" alt="doctor"> \n'+--}}
{{--                            '</picture> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '<div class="search__result-text"> \n'+--}}
{{--                            '<span class="color small">الأطباء</span> \n'+--}}
{{--                            '<h3 class="h6">'+ value.name +'</h3> \n'+--}}
{{--                            '<p>'+ value.description.substring(0, 250).replace(/(<([^>]+)>)/gi, "") +'</p> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '</a>';--}}

{{--                        $('#doctors_section').append($element);--}}
{{--                    });--}}
{{--                },--}}
{{--                error : function(request,error)--}}
{{--                {--}}
{{--                    alert("Request: "+JSON.stringify(request));--}}
{{--                }--}}
{{--            });--}}

{{--            return doctors_value;--}}
{{--        }--}}

{{--        $(document).on('click', '#btn_more_specificities', function(){--}}

{{--            getSpecificities($('#btn_more_specificities').data('link'))--}}
{{--        });--}}

{{--        function getSpecificities(url) {--}}

{{--            var data_value = false;--}}

{{--            $.ajax({--}}
{{--                url: url.replace(/^http:/, 'https:'),--}}
{{--                //url: url,--}}
{{--                type: 'GET',--}}
{{--                async: false,--}}
{{--                data: {--}}
{{--                    'lang': 'ar',--}}
{{--                    'keyword': 'د'--}}
{{--                },--}}
{{--                success: function(response) {--}}

{{--                    if( response.total == 0 )--}}
{{--                        $('#list_specificities').addClass('d-none')--}}

{{--                    $('.specificities_search_count').text(response.total)--}}

{{--                    if( response.next_page_url != null ){--}}
{{--                        $('#btn_more_specificities').removeClass('d-none')--}}
{{--                    }else{--}}
{{--                        $('#btn_more_specificities').addClass('d-none')--}}
{{--                    }--}}

{{--                    $('#btn_more_specificities').data('link', response.next_page_url);--}}

{{--                    data_value = ( response.data.length === 0 );--}}

{{--                    $.each(response.data, function( index, value ) {--}}

{{--                        let $element =--}}
{{--                            '<a href="#!" class="search__result" data-aos="fade-up"> \n'+--}}
{{--                            '<div class="search__result-image"> \n'+--}}
{{--                            '<picture> \n'+--}}
{{--                            '<source srcset="'+ value.image +'" type="image/webp"> \n'+--}}
{{--                            '<img src="'+ value.image +'" draggable="false" loading="lazy" alt="service"> \n'+--}}
{{--                            '</picture> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '<div class="search__result-text"> \n'+--}}
{{--                            '<span class="color small">الخدمات</span> \n'+--}}
{{--                            '<h3 class="h6">'+ value.name +'</h3> \n'+--}}
{{--                            '<p>'+ value.description.substring(0, 250).replace(/(<([^>]+)>)/gi, "") +'</p> \n'+--}}
{{--                            '</div> \n'+--}}
{{--                            '</a>';--}}

{{--                        $('#specificities_section').append($element);--}}
{{--                    });--}}
{{--                },--}}
{{--                error : function(request,error)--}}
{{--                {--}}
{{--                    alert("Request: "+JSON.stringify(request));--}}
{{--                }--}}
{{--            });--}}

{{--            return data_value;--}}
{{--        }--}}
{{--    </script>--}}
{{--@endpush--}}

