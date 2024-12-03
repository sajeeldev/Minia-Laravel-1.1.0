@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Lightbox</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Lightbox</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Single Image Lightbox</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-3">
                                    <div>
                                        <a href="assets/images/small/img-1.jpg" class="image-popup">
                                            <img src="assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div>
                                        <a href="assets/images/small/img-2.jpg" class="image-popup">
                                            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="work-thumbnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Images with Description</h6>
                                </div>
                                <div class="card-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="assets/images/small/img-4.jpg" class="image-popup">
                                                    <img src="assets/images/small/img-4.jpg" class="img-fluid" alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="assets/images/small/img-5.jpg" class="image-popup">
                                                    <img src="assets/images/small/img-5.jpg" class="img-fluid" alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="assets/images/small/img-1.jpg" class="image-popup">
                                                    <img src="assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Popup with Video or Map</h6>
                                </div>
                                <div class="card-body">
                                    <div class="flex flex-wrap gap-4">
                                        <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="btn bg-gray-50 border-transparent image-popup-video-map dark:bg-zinc-700 dark:text-gray-100" data-title="YouTube Video" data-description="YouTube Video Popup">
                                            Open YouTube Video
                                        </a>
                                        <a href="https://vimeo.com/45830194" class="btn bg-gray-50 border-transparent image-popup-video-map dark:bg-zinc-700 dark:text-gray-100" data-title="Vimeo Video" data-description="Vimeo Video Popup">
                                                Open Vimeo Video
                                        </a>
                                    </div>
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
@endsection