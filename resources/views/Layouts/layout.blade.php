<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Dashboard - Admin & Dashboard Template</title>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
            content="Tailwind Admin & Dashboard Template"
            name="description"
    />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Links -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link href="@/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />


</head>

<body data-mode="light" data-sidebar-size="lg">


<!-- leftbar-tab-menu -->
@include('Layouts.sidebar')
<!-- Left Sidebar End -->


   @yield('content')




<div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
        <span class="ltr:hidden">LTR</span>
        <span  class="rtl:hidden">RTL</span>
    </a>
</div>

<script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/metismenujs/metismenujs.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/pages/nav&tabs.js"></script>
<script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/pages/login.init.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/fullcalendar/index.global.min.js"></script>
<script src="assets/js/pages/calendar.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/pages/chartjs.init.js"></script>
<script src="assets/libs/leaflet/leaflet.js"></script>
<script src="assets/js/pages/leaflet-us-states.js"></script>
<script src="assets/js/pages/leaflet-map.init.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>
<script src="assets/js/pages/vector-maps.init.js"></script>
<script src="assets/js/pages/materialdesign.init.js"></script>
<script src="assets/libs/alertifyjs/build/alertify.min.js"></script>
<script src="assets/js/pages/notification.init.js"></script>
<script src="assets/libs/imask/imask.min.js"></script>
<script src="assets/js/pages/form-mask.init.js"></script>
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
<script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/js/pages/sweetalert.init.js"></script>
<script src="assets/libs/rater-js/index.js"></script>
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>
<script src="assets/js/pages/rangeslider.init.js"></script>
<script src="assets/libs/alertifyjs/build/alertify.min.js"></script>
<script src="assets/js/pages/notification.init.js"></script>
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>
<script src="assets/js/pages/rangeslider.init.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/js/pages/sweetalert.init.js"></script>
<script src="assets/libs/glightbox/js/glightbox.min.js"></script>
<script src="assets/js/pages/lightbox.init.js"></script>


</body>
</html>
