@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Utilities</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Utilities</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="grid grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">All sides borders</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border border-gray-200 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-2 border-gray-200 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-4 border-gray-200 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-8 border-gray-200 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">All sides borders</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-t-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-r-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-b-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-l-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Horizontal and vertical sides borders</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-x-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="border-y-2 border-violet-500 p-12 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Changing the opacity</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-2 border-violet-500/5 p-12"></div>
                            <div class="border-2 border-violet-500/25 p-12"></div>
                            <div class="border-2 border-violet-500/50 p-12"></div>
                            <div class="border-2 border-violet-500/75 p-12"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Individual sides</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-2 border-gray-100 border-t-gray-500 dark:border-violet-500/30 dark:border-t-violet-500 p-12"></div>
                            <div class="border-2 border-gray-100 border-r-gray-500 dark:border-violet-500/30 dark:border-r-violet-500 p-12"></div>
                            <div class="border-2 border-gray-100 border-b-gray-500 dark:border-violet-500/30 dark:border-b-violet-500 p-12"></div>
                            <div class="border-2 border-gray-100 border-l-gray-500 dark:border-violet-500/30 dark:border-l-violet-500 p-12"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Horizontal and vertical sides borders</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-2 border-violet-100 border-x-violet-500 p-12 dark:border-violet-500/20 dark:border-x-violet-500"></div>
                            <div class="border-2 border-violet-100 border-y-violet-500 p-12 dark:border-violet-500/20 dark:border-y-violet-500"></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Border style</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="border-solid border-2 border-violet-500 p-12"></div>
                            <div class="border-dashed border-2 border-violet-500 p-12"></div>
                            <div class="border-dotted border-2 border-violet-500 p-12"></div>
                            <div class="border-double border-2 border-violet-500 p-12"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Outline style</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="outline outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20 p-12"></div>
                            <div class="outline-dashed outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20 p-12"></div>
                            <div class="outline-dotted outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20 p-12"></div>
                            <div class="outline-double outline-3 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20 p-12"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Outline offset</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-6">
                            <div class="outline outline-offset-0 outline-gray-100 bg-gray-50 dark:bg-gray-500/20 p-12"></div>
                            <div class="outline outline-offset-2 outline-gray-100 bg-gray-50 dark:bg-gray-500/20 p-12"></div>
                            <div class="outline outline-offset-4 outline-gray-100 bg-gray-50 dark:bg-gray-500/20 p-12"></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Adding a ring</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-8">
                            <div class=" ring-2 ring-gray-100 p-12 bg-gray-50 dark:bg-gray-500/20"></div>
                            <div class=" ring ring-gray-100 p-12 bg-gray-50 dark:bg-gray-500/20"></div>
                            <div class=" ring-4 ring-gray-100 p-12 bg-gray-50 dark:bg-gray-500/20"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100"> Ring offset width</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-8">
                            <div class="ring-offset-0 ring-2 ring-violet-50 p-12 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="ring-offset-2 ring-2 ring-violet-50 p-12 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="ring-offset-4 ring-2 ring-violet-50 p-12 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="ring-offset-8 ring-2 ring-violet-50 p-12 bg-violet-200 dark:bg-violet-500/20"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rounded corners</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-sm" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-md" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-lg" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-2xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-3xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-full" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rounding sides separately</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-4">
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-t-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-r-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-b-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-l-xl" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100"> Rounding corners separately</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-8">
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-tl-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-tr-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-br-xl" alt="">
                            </div>
                            <div class="h-20 w-20">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-bl-xl" alt="">
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
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div>
@endsection