
<section class="services d-pad">
    <div class="container">

        <div class="section-title">
            <h2 class="title" data-aos="fade-up">
                <span class="color">{{trans('website.doctors.neo_clinics')}} </span>{{trans('website.cilinics')}}
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">
                {{trans('website.lives')}}            </p>
        </div>


        <div class="services__container" data-aos="fade-up" data-aos-delay="300">
@foreach(\App\Models\ServiceCategory::where('name','Labs')->first()->services as $category)
                <a href="{{route('website.service.view',$category->id)}}" class="service d-block">
                    <div class="service__image" data-aos="zoom-out">
                        <picture>
                            <source class="lazyload" src="{{asset($category->getImg())}}" data-srcset="{{asset($category->getImg())}}" type="image/webp" />
                            <img class="lazyload" src="{{asset($category->getImg())}}" data-src="{{asset($category->getImg())}}" draggable="false" loading="lazy" alt />
                        </picture>
                    </div>
                    <div class="service__title">
                        <h3 class="h5">
                                {{$category->name_ar}}
                        </h3>
                    </div>
                </a>
@endforeach




        </div>
    </div>
</section>
