@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Progress Bars</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Components
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Progress Bars</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
              
                <!-- start grid -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Default Examples</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                     <div class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                     <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 100%;" role="progressbar"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Backgrounds</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                     <div class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-sky-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-yellow-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                     <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-red-400 rounded-full" style="width: 100%;" role="progressbar"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Labels Example</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                     <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none text-center flex justify-center items-center" style="width: 25%;" role="progressbar"><p class="text-11 text-white align-middle ">25%</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Multiple bars</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                     <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="flex">
                                            <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 15%;" role="progressbar"></div>
                                            <div class="progress-bar h-2.5 bg-green-600 " style="width: 30%;" role="progressbar"></div>
                                            <div class="progress-bar h-2.5 bg-sky-500 " style="width: 20%;" role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Height</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <h6 class="text-13 text-gray-600 dark:text-gray-100">Progress sm</h6>
                                     <div class="progress h-1.5  w-full mt-1 bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="text-13 text-gray-600 dark:text-gray-100">Progress sm</h6>
                                     <div class="progress h-2 w-full  mt-1 bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2 bg-green-600 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 40%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="text-13 text-gray-600 dark:text-gray-100">Progress sm</h6>
                                     <div class="progress h-3 w-full  mt-1 bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-3 bg-yellow-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-13 text-gray-600 dark:text-gray-100">Progress sm</h6>
                                     <div class="progress h-4 w-full  mt-1 bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-4 bg-red-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 70%;" role="progressbar"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card mb-4 dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Striped</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                     <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped" style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>
                                <div>
                                     <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped" style="width: 40%;" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Animated stripes</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                     <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped animate-strip" style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Animated Progress</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                     <div class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full" style="width: 10%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full" style="width: 20%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-sky-500 rounded-full" style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                     <div class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-yellow-400 rounded-full" style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                     <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-red-400 rounded-full" style="width: 100%;" role="progressbar"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Custom progress</h6>
                            </div>
                            <div class="card-body">
                                <div class=" relative">
                                     <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-red-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 84%;" role="progressbar"></div>
                                    </div>
                                    <div class="avatar-sm h-9 w-9 border border-red-400 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="bx bxl-html5 text-red-400 text-lg leading-loose"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-12 relative">
                                     <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 75%;" role="progressbar"></div>
                                    </div>
                                    <div class="avatar-sm h-9 w-9 border border-violet-500 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="bx bxl-css3 text-violet-500 text-lg leading-loose"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-12 mb-5 relative">
                                     <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-sky-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none" style="width: 62%;" role="progressbar"></div>
                                    </div>
                                    <div class="avatar-sm h-9 w-9 border border-sky-400 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="bx bxl-jquery text-sky-400 text-lg leading-loose"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Progress Example</h6>
                            </div>
                            <div class="card-body">
                               <div class="relative p-5">
                                    <div class="progress h-0.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-0.5 bg-violet-500 rounded-full" style="width: 50%;" role="progressbar"></div>
                                    </div>
                                    <button type="button" class="h-8 w-8 rounded-full bg-violet-500 text-white absolute top-1.5 left-0">1</button>
                                    <button type="button" class="h-8 w-8 rounded-full bg-violet-500 text-white absolute top-1.5 left-[48%]">2</button>
                                    <button type="button" class="h-8 w-8 rounded-full bg-gray-500 text-white absolute top-1.5 right-0">3</button>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end grid -->


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