@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Form Mask</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Form Mask</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Basic pills Wizard</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                     <div>
                                        <div>
                                            <label for="regexp-mask" class="font-medium text-gray-700 dark:text-gray-100">RegExp (Russian postal code)</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="regexp-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">/^[1-6]\d{0,5}$/</div>
                                        </div>

                                        <div class="mt-4">
                                            <label for="phone-mask" class="font-medium text-gray-700 dark:text-gray-100">Pattern (Phone)</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="phone-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">+{7}(000)000-00-00</div>
                                        </div>
                                        <div class="mt-4">
                                            <label for="number-mask" class="font-medium text-gray-700 dark:text-gray-100">Number</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="number-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">in range [-10000, 10000]</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div>
                                        <div>
                                            <label for="date-mask" class="font-medium text-gray-700 dark:text-gray-100">Date</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="date-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">'dd.mm.yyyy' in range [01.01.1990, 01.01.2020]</div>
                                        </div>

                                        <div class="mt-4">
                                            <label class="font-medium text-gray-700 dark:text-gray-100">On-the-fly select</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="dynamic-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">phone or email</div>
                                        </div>
                                        <div class="mt-4">
                                            <label class="font-medium text-gray-700 dark:text-gray-100">Mask in mask</label>
                                            <input type="text" class="block w-full border-gray-100 rounded mt-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="currency-mask">
                                            <div class="text-gray-500 dark:text-zinc-100/60 mt-1">currency input</div>
                                        </div>
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