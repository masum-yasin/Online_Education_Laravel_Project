<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>
   @include('frontend.layouts.header')

    <!-- banner part start-->
   @yield('content')
    <!--::blog_part end::-->

    <!-- footer part start-->
   @include('frontend.layouts.footer')
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('frontend/assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('frontend/assets/')}}js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frontend/assets/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/')}}js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

</html>