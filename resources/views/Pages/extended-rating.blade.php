@extends('Layouts.layout')
@section('content')
    <!-- Left Sidebar End -->

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Rating</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Extended
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Rating</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rater Js</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">Basic Rater</h5>
                                    <div id="basic-rater"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">Rater with Step</h5>
                                    <div id="rater-step"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">Custom Messages</h5>
                                    <div id="rater-message"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">Example with unlimited number of stars. readOnly option is set to true.</h5>
                                    <div id="rater-unlimitedstar"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">On Hover event</h5>
                                    <div id="rater-onhover" class="align-middle"></div>
                                    <span class="ratingnum badge px-1.5 py-0.5 text-sm text-gray-900 dark:text-gray-200 rounded align-middle ms-2"></span>
                                </div>
                                <div class="col-span-12 lg:col-span-6 text-center p-12">
                                    <h5 class="text-15 mb-4 text-gray-700 dark:text-gray-100">Clear/Reset rater</h5>
                                    <div id="raterreset" class="align-middle"></div>
                                    <span class="clear-rating"></span>
                                    <button id="raterreset-button" class="btn border-violet-500 px-2 py-1 text-sm text-violet-500 ml-2 hover:bg-violet-500 hover:text-white">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              
                <!-- Footer Start -->
                <footer class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href="" class="text-violet-500 underline">Themesbrand</a></div>

                    </div>
                </footer>
                <!-- end Footer -->
            </div>
        </div>
    </div>

    <!-- rating init -->
@endsection