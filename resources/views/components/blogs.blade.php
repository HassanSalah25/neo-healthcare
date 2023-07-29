
<section class="blog d-pad">
    <div class="container">

        <div class="title-container" data-aos="fade-up">
            <h2 class="title">
                {{trans('website.blogs.newest')}} <span class="color">{{trans('website.blogs.blogs')}}</span>
            </h2>
            <a href="{{route('website.blog.index')}}" class="btn btn-brand-link">
                {{trans('website.blogs.all_blogs')}}
                <svg class="btn-icon">
                    <use href="{{asset('assets/images/icons/icons.svg?v=32#btn-arrow')}}"></use>
                </svg>
            </a>
        </div>

        <div class="row">

            @foreach(\App\Models\Blog::limit(4)->get() as $blog)
            <div class="col-lg-6">
                <div class="blog__article" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{route('website.blog.show',$blog->id)}}" class="d-block blog__article-photo">
                        <picture>
                            <source srcset="{{asset($blog->getImg())}}" type="image/webp" />
                            <img src="{{asset($blog->getImg())}}" draggable="false" alt="{{$blog->alt_image}}" loading="lazy"/>
                        </picture>
                    </a>
                    <div class="blog__article-info">
                        <a href="{{route('website.blog.show',$blog->id)}}" class="overline">
                            مقالات عامة
                        </a>
                        <a href="{{route('website.blog.show',$blog->id)}}">
                            <h3 class="h5">{{app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title}}</h3>
                            <div style="text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:10;overflow:hidden">{!! app()->getLocale() == 'ar' ? $blog->content_ar : $blog->content_en!!}</div>

                            <span class="date small">{{$blog->created_at}}</span>
                        </a>

                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</section>
