@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Materialdesign Icon</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Icons
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Materialdesign Icon</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">New Icons</h6>
                    </div>
                    <div class="card-body pt-0">
                         <div>
                           <div class="row icon-demo-content" id="newIcons"></div>
                        </div>

                    </div>
                </div>

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">All Icons</h6>
                    </div>
                    <div class="card-body pt-0">
                         <div>
                           <div class="row icon-demo-content" id="icons"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-18px mdi-account"></i> mdi-18px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-24px mdi-account"></i> mdi-24px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-36px mdi-account"></i> mdi-36px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-48px mdi-account"></i> mdi-48px
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="card">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rotate</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-45 mdi-account"></i> mdi-rotate-45
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-90 mdi-account"></i> mdi-rotate-90
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-135 mdi-account"></i> mdi-rotate-135
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-180 mdi-account"></i> mdi-rotate-180
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-225 mdi-account"></i> mdi-rotate-225
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-270 mdi-account"></i> mdi-rotate-270
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-315 mdi-account"></i> mdi-rotate-315
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="card">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Spin</h6>
                    </div>
                    <div class="card-body">
                        <div class="row icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-spin mdi-loading"></i> mdi-spin
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-spin mdi-star"></i> mdi-spin
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

</body>

</html>