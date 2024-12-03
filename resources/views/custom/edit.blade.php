{{-- @extends('Layouts.layout') --}}
{{-- @include('Layouts.sidebar') --}}
{{-- @section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Links --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('@/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
</head>
<body data-mode="dark" data-sidebar-size="lg">
    
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-12 items-stretch">
                    <div class="col-span-12 lg:col-span-6 self-center">
                        <h1 class="text-20 text-gray-600 dark:text-gray-100">Update User</h1>
                    </div>
                </div>
            </div>
            <section class="bg-dark dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update User</h2>
                    <form method="POST" action="{{route('update',$user->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="image" type="file" accept="image/*" value="{{$user->image}}">
                                @error('image')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile
                                picture is useful to confirm your are logged into your account</div>
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type your name" value="{{$user->name}}">
                                    @error('name')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="position"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                <input type="text" name="position" id="position"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Position" value="{{$user->position}}">
                                    @error('position')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                                    
                            </div>
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email</label>
                                <input type="text" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type your email" value="{{$user->email}}">
                                    @error('email')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                            
                            <div class="w-full">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Tags</label>
                                <input type="text" name="tags" id="tags"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tags" value="{{$user->tags}}">
                                    @error('tags')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="border-solid border-2 border-sky-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Update
                        </button>
                    </form>
                </div>
            </section>

            <!-- Footer Start -->
            <footer
                class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                <div class="grid grid-cols-2">
                    <div class="grow">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Minia
                    </div>
                    <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                            class="text-violet-500 underline">Themesbrand</a></div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
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
{{-- @endsection --}}
</body>
</html>