<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-bs-theme="dark">

<head>

    <meta charset="utf-8">
    <title>Blog | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    @include('backend.section.link')



</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('backend.section.header')

        @include('backend.section.notification_modal')

        @include('backend.section.sidebar')

        <div class="vertical-overlay"></div>


        <div class="main-content">

            <div class="page-content">
                @yield('main-content')

                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('backend.section.footer')


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('backend.section.preloader')

    <!-- Theme Settings -->
    @include('backend.section.theme_setting')

    <!-- JAVASCRIPT -->
    @include('backend.section.script')

    @stack('scripts');


</body>

</html>
