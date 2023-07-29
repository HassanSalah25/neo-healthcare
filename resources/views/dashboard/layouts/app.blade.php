<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'NEO Center') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashboard-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashboard-assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashboard-assets/css/style.css')}}" rel="stylesheet">
    <style>
        .tab-content {
            display: none;
        }

        .active {
            display: block;
        }
        .btn_active{
            background-color: #F3F6F9;
        }
    </style>
    <script>

        function openTab(tabId,id) {
            const tabs = document.getElementsByClassName('tab-content');
                tabs[0].classList.remove('active');
                $('.btn').removeClass('btn_active')
                $(id).addClass('btn_active')
            document.getElementById(tabId).classList.add('active');
        }
    </script>
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <!-- Spinner End -->


    @include('dashboard.layouts.sidebar')


    <!-- Content Start -->
    <div class="content" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
">
        @include('dashboard.layouts.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="">
                    @yield('content')
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">NEO</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('dashboard-assets/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('dashboard-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="https://kit.fontawesome.com/e89cda84c9.js" crossorigin="anonymous"></script>
{{--<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>--}}
{{--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>--}}

<!-- Template Javascript -->

<script src="{{asset('dashboard-assets/js/main.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>

    $('textarea').each(function(index) {
        $(this).attr('id', 'textarea' + (index + 1))
        CKEDITOR.replace($(this).attr('id'));
    });
</script>
<script>
    const tabs = document.getElementsByClassName('tab-content');
    tabs[0].classList.remove('active');
    $('.btn').removeClass('btn_active')
    $('#btn_item1').addClass('btn_active')
    document.getElementById('item1').classList.add('active');
</script>
@stack('scripts')

</body>

</html>
