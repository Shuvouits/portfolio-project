

<!DOCTYPE html>
<html lang="english">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="themepaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Weasley - Portfolio Template">
    <meta name="description" content="Weasley - Portfolio Template">
    <!-- title -->
    <title>Weasley - Portfolio Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

      <link href="{{asset('frontend/assets/vendor/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">


    <link href="{{asset('frontend/assets/vendor/magnific/magnific-popup.css')}}" rel="stylesheet">




</head>
<!-- Body Start -->

<body class="dark-bg">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>


    @include('frontend.section.header')

    <main class="wrapper">

        @yield('main-content')



        <!-- Effect -->
        <div class="right-effects"></div>
        <div class="left-effects"></div>
        <!-- End Effect -->
    </main>

    @include('frontend.section.footer')

    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/appear/jquery.appear.js')}}"></script>

    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/one-page/scrollIt.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/mail_send.js')}}"></script>

    <script type="text/javascript" src="{{asset('frontend/assets/vendor/magnific/magnific-popup.js')}}"></script>

    <script type="text/javascript" src="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.js')}}"></script>






<script>
    $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
});

</script>

</body>


</html>









