@extends('layouts.master')
@section('content')
    @push('styles')
        <style>
            ::placeholder { /* Most modern browsers support this now. */
                color:    #909;
            }
        </style>
    @endpush
    <div class="page-header">
        <div class="container">

            <div class="page-header__image">
                <picture>
                    <source srcset="{{asset('assets/images/page-header.webp?v=33')}}" type="image/webp">
                    <img src="{{asset('assets/images/page-header.webp?v=33')}}" draggable="false" alt="page image" data-aos="zoom-out">
                </picture>
            </div>


            <h1 class="h3" data-aos="fade-up" data-aos-delay="100">
                {{trans('website.survey')}}
            </h1>

        </div>
    </div>

    <section class="rate d-pad">
        <div class="container">

            <div class="section-title">
                <h2 class="title aos-init aos-animate" data-aos="fade-up">
                    {{trans('website.happy_survey')}}<br>

                </h2>
                <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                    {{trans('website.make_survey')}}
                </p>
            </div>

            <form class="form" method="post" action="{{route('website.feedback.store')}}" novalidate="novalidate">
                @csrf
                <div class="rate__container">



                    <div class="rate__form">
                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.dept')}}</label>
                            <div class="col-lg-9">
                                <nav class="services-nav">
                                    @foreach(\App\Models\ServiceCategory::all() as $category)
                                        <span onclick="updateServiceId({{$category->id}},this)" id="services-1" class="btn btn-service btn-brand-primary-5 {{$category->id == 2 ? 'active' : '' }} ">
                                    <svg class="icon">
                                    <use href="{{asset('assets/images/icons/icons.svg?v=33#medical')}}"></use>
                                    </svg>
                                    {{$category->name_ar}}
                                    </span>
                                    @endforeach

                                </nav>

                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center" data-aos="fade-up">
                            <label for="bookService" class="col-lg-3 col-form-label">الخدمة</label>
                            <div class="col-lg-9">
                                <select class="custom-select" id="bookService" name="service" required>
                                    <option value>{{trans('website.book_appointment_now.c_t_r_s_f_y')}}</option>
                                    @foreach(\App\Models\Service::where('service_category_id',2)->get() as $service)
                                        <option value="{{$service->id}}" {{ isset($doctor) ? $service->id == $doctor->service->id ? "selected":"":""}}>{{$service->name_ar}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center" id="show_doctors" data-aos="fade-up" style="display: none">
                            <label for="bookDoctor" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.doctor')}}</label>
                            <div class="col-lg-9">

                                <select class="custom-select" id="doctor_input" name="doctor_id">
                                    <option value="" >{{trans('website.chosse_doctor')}}</option>
                                </select>
                            </div>
                        </div>
                        <h3 class="h5 aos-init" data-aos="fade-up">{{trans('website.book_appointment_now.personal_data')}}</h3>

                        <div class="form-group row d-flex align-items-center aos-init" data-aos="fade-up">
                            <label for="freeProgramName" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.full_name')}}</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="freeProgramName" placeholder="{{trans('website.book_appointment_now.enter_full_name')}}" name="name" required />
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                        </div>


                        <div class="form-group row d-flex align-items-center aos-init" data-aos="fade-up">
                            <label for="freeProgramPhone" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.mobile')}}</label>
                            <div class="col-lg-9">
                                <input type="tel" class="form-control"  onchange="validateContact(this)" maxlength="10" id="freeProgramPhone" placeholder="{{trans('website.book_appointment_now.enter_mobile')}}" name="phone" required    >

                            </div>
                        </div>


                        <div class="form-group row d-flex align-items-center aos-init" data-aos="fade-up">
                            <label for="freeProgramEmail" class="col-lg-3 col-form-label">{{trans('website.book_appointment_now.email')}}</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="freeProgramEmail" placeholder="{{trans('website.book_appointment_now.enter_email')}}" name="email" required  >
                            </div>
                        </div>


                        <div class="row d-flex align-items-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-brand-primary btn-form aos-init" data-aos="fade-up">
                                    {{trans('website.survey')}}
                                </button>
                            </div>
                        </div>

                    </div>


                    <div class="rate__values">
                        <h3 class="h5 aos-init aos-animate" data-aos="fade-up">{{trans('website.rates')}}</h3>

                        <div class="rate__value aos-init aos-animate" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.easy')}}</h4>
                            <input type="hidden" name="name_rate1" value="How easy is it to book appointments?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate1CompletelySatisfied" name="rate1" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate1CompletelySatisfied">{{trans('website.okay')}}ً</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate1Satisfied" name="rate1" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate1Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate1NotSatisfied" name="rate1" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate1NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.how_long')}}</h4>
                            <input type="hidden" name="name_rate2" value="How satisfied are you with the time spent during your treatment journey inside the clinics?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate2CompletelySatisfied" name="rate2" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate2CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate2Satisfied" name="rate2" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate2Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate2NotSatisfied" name="rate2" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate2NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.how_much')}}</h4>
                            <input type="hidden" name="name_rate3" value="How satisfied are you with the price of the service?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate3CompletelySatisfied" name="rate3" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate3CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate3Satisfied" name="rate3" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate3Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate3NotSatisfied" name="rate3" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate3NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.server')}}</h4>
                            <input type="hidden" name="name_rate4" value="How satisfied are you with the provided medical service?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate4CompletelySatisfied" name="rate4" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate4CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate4Satisfied" name="rate4" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate4Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate4NotSatisfied" name="rate4" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate4NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.did')}}</h4>
                            <input type="hidden" name="name_rate5" value="Did the doctor explain the medical condition, available solutions, and cost in detail?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate5CompletelySatisfied" name="rate5" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate5CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate5Satisfied" name="rate5" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate5Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate5NotSatisfied" name="rate5" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate5NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.quality')}}</h4>
                            <input type="hidden" name="name_rate6" value="How satisfied are you with the quality of the reception service?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate6CompletelySatisfied" name="rate6" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate6CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate6Satisfied" name="rate6" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate6Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate6NotSatisfied" name="rate6" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate6NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.sterilization')}}</h4>
                            <input type="hidden" name="name_rate7" value="How satisfied are you with sterilization and general hygiene in clinics and their facilities?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate7CompletelySatisfied" name="rate7" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate7CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate7Satisfied" name="rate7" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate7Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate7NotSatisfied" name="rate7" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate7NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>


                        <div class="rate__value aos-init" data-aos="fade-up">
                            <h4 class="h6">{{trans('website.probability')}}</h4>
                            <input type="hidden" name="name_rate8" value="How likely are you to recommend others to visit Ram Clinics?">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate8CompletelySatisfied" name="rate8" value="CompletelySatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate8CompletelySatisfied">{{trans('website.okay')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate8Satisfied" name="rate8" value="Satisfied" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="rate8Satisfied">{{trans('website.ok')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="rate9NotSatisfied" name="rate8" value="NotSatisfied" class="custom-control-input">
                                <label class="custom-control-label" for="rate9NotSatisfied">{{trans('website.not_okay')}}</label>
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </section>


{{--    @include('components.partners')--}}
@endsection


@push('scripts')
    <script>
        function updateServiceId(id,th)
        {
            console.log('Updating service');


            data = {
                'id': id
            }
            $.ajax({
                url: '{{route('website.service.service.show')}}',
                method: 'GET',
                data: data,
                success: function (response) {
                    $('#bookService').empty();
                    $('.btn-service').removeClass('active');
                    $(th).addClass('active');
                    var selectElement = $('#bookService');
                    var option = $('<option></option>');
                    option.text('إختر الخدمة المناسبة لك');   // Set the text of the option
                    selectElement.append(option);  // Append the option to the <select> element
                    $.each(response, function(index, item) {
                        var option = $('<option></option>');
                        option.val(item['id']);   // Set the value of the option
                        option.text(item['name_ar']);   // Set the text of the option
                        selectElement.append(option);  // Append the option to the <select> element
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error: ' + error);
                }
            });
        }
    </script>
@endpush
