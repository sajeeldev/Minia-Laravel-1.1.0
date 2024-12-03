@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Sizing</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Sizing</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Width</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-12 xl:col-span-6 space-y-3">
                                    <h6 class="text-gray-700 dark:text-gray-100">Fixed widths</h6>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-24">w-24</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-32">w-32</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-40">w-40</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-48">w-48</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-64">w-64</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-80">w-80</div>
                                    <div class="px-4 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md w-96">w-96</div>
                                </div>

                                <div class="col-span-12 xl:col-span-6 space-y-3">
                                    <h6 class="text-gray-700 dark:text-gray-100">Percentage widths</h6>
                                    <div class="flex gap-4">
                                        <div class="w-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/2</div>
                                        <div class="w-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/2</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="w-2/5 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-2/5</div>
                                        <div class="w-3/5 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-3/5</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="w-1/3 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/3</div>
                                        <div class="w-2/3 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-2/3</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="w-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/4</div>
                                        <div class="w-4/5 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-3/4</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="w-1/5 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/5</div>
                                        <div class="w-4/5 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-4/5</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="w-1/6 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-1/6</div>
                                        <div class="w-5/6 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-5/6</div>
                                    </div>
                                    <div class="w-full bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 px-4 py-2 rounded-md">w-full</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Height</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-6 space-y-3">
                                    <h6 class="text-gray-700 dark:text-gray-100">Fixed heights</h6>
                                    <div class="flex gap-4">
                                         <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-24">h-24</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-32">h-32</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-40">h-40</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-48">h-48</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-64">h-64</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-80">h-80</div>
                                        <div class="px-2 py-2 bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 rounded-md h-96">h-96</div>
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