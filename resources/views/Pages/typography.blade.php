@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Typography</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Typography</a>
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
                            <div class="card-body flex flex-wrap gap-2">
                                <div class="shrink-0">
                                    <h1 class="text-6xl font-light text-gray-600 dark:text-gray-100">A</h1>
                                </div>
                                <div class="ltr:ml-4 rtl:mr-4">
                                    <p class="text-muted mb-2 text-gray-500 dark:text-zinc-100">Font Family</p>
                                    <h5 class="text-gray-600 dark:text-gray-100">" IBM Plex Sans", sans-serif</h5>
                                </div>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Headings</h6>
                            </div>
                            <div class="card-body space-y-3">
                                <h1 class="font-semibold text-gray-700 dark:text-gray-100 text-4xl">Tailwind heading <span class="text-3xl text-gray-400 dark:text-zinc-100/60">2.25rem (36px)</span></h1>
                                <h2 class="font-semibold text-gray-700 dark:text-gray-100 text-3xl">Tailwind heading <span class="text-xl text-gray-400 dark:text-zinc-100/60">1.875rem (30px)</span></h2>
                                <h3 class="font-semibold text-gray-700 dark:text-gray-100 text-2xl">Tailwind heading <span class="text-xl text-gray-400 dark:text-zinc-100/60">1.5rem (24px)</span></h3>
                                <h4 class="font-semibold text-gray-700 dark:text-gray-100 text-xl">Tailwind heading <span class="text-gray-400 dark:text-zinc-100/60">1.25rem (20px)</span></h4>
                                <h5 class="font-semibold text-gray-700 dark:text-gray-100 text-lg">Tailwind heading <span class="text-gray-400 dark:text-zinc-100/60">1.125rem (18px)</span></h5>
                                <h6 class="font-semibold text-gray-700 dark:text-gray-100 text-sm">Tailwind heading <span class="text-13 text-gray-400 dark:text-zinc-100/60">0.875rem (14px)</span></h6>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-6">
                                        <div class="flex flex-wrap items-center">
                                            <div class="shrink-0">
                                                <h1 class="text-6xl font-medium text-gray-600 dark:text-gray-100">Aa</h1>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <p class="text-muted mb-2 text-gray-500 dark:text-zinc-100">Font Weight</p>
                                                <h4 class="mb-0 text-gray-600 dark:text-gray-100">500</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="flex flex-wrap items-center">
                                            <div class="shrink-0">
                                                <h1 class="text-6xl font-semibold mb-0 text-gray-600 dark:text-gray-100">Aa</h1>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <p class="text-muted mb-2 text-gray-500 dark:text-zinc-100">Font Weight</p>
                                                <h4 class="mb-0 text-gray-600 dark:text-gray-100">600</h4>
                                            </div>
                                        </div>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Headings</h6>
                            </div>
                            <div class="card-body space-y-1">
                                <h1 class="font-normal text-gray-600 dark:text-gray-100 text-9xl">Text-9xl</h1>
                                <h2 class="font-normal text-gray-600 dark:text-gray-100 text-8xl">Text-8xl</h2>
                                <h3 class="font-normal text-gray-600 dark:text-gray-100 text-7xl">Text-7xl</h3>
                                <h4 class="font-normal text-gray-600 dark:text-gray-100 text-6xl">Text-6xl</h4>
                                <h5 class="font-normal text-gray-600 dark:text-gray-100 text-5xl">Text-5xl</h5>
                                <h6 class="font-normal text-gray-600 dark:text-gray-100 text-4xl">Text-4xl</h6>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-3xl">Text-3xl</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-2xl">Text-2xl</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-xl">Text-xl</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-lg">Text-lg</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-base">Text-base</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-sm">Text-sm</p>
                                <p class="font-normal text-gray-600 dark:text-gray-100 text-xs">Text-xs</p>
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

        
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div>
@endsection