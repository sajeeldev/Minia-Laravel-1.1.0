@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Toasts</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Toasts</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Default </h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                                <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow shadow-gray-50 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg">
                                       <div class="p-5 text-center"><i class='bx bxs-hot text-lg'></i></div>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">Set yourself free.</div>
                                    <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Colors</h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                                <div id="toast-success" class="flex items-center w-full max-w-xs p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-50 rounded-lg dark:bg-green-500/20 dark:text-green-200">
                                        <div class="p-5 text-center"><i class='bx bx-check text-lg'></i></div>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">Item moved successfully.</div>
                                    <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                                <div id="toast-success" class="flex items-center w-full max-w-xs p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-50 rounded-lg dark:bg-red-500/20">
                                        <div class="p-5 text-center"><i class='bx bx-x text-lg'></i></div>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">Item has been deleted.</div>
                                    <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                                <div id="toast-success" class="flex items-center w-full max-w-xs p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-50 rounded-lg dark:bg-orange-500/20">
                                        <div class="p-5 text-center"><i class='bx bx-error text-lg'></i></div>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">Item has been deleted.</div>
                                    <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Simple toast  </h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                                <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 dark:text-zinc-100/80 bg-white divide-gray-200 rounded-lg shadow  dark:divide-gray-700 space-x dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class=" text-center text-blue-500"><i class='bx bxs-send text-lg -rotate-45'></i></div>
                                    <div class="ltr:pl-4 rtl:pr-4 text-sm font-normal">Message sent successfully.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Toast message</h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                               <div id="toast-message-cta" class="w-full max-w-xs p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow shadow-gray-50 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="flex">
                                        <img class="w-8 h-8 rounded-full shadow-lg" src="assets/images/users/avatar-8.jpg" alt="Phyllis Gatlin image"/>
                                        <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">
                                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Phyllis Gatlin</span>
                                            <div class="mb-2 text-sm font-normal">Hi Neil, thanks for sharing your thoughts regarding Flowbite.</div> 
                                            <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-500/30 dark:bg-blue-500 dark:hover:bg-blue-600">Reply</a>   
                                        </div>
                                        <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Push notification</h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                                <div id="toast-notification" class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="flex items-center mb-3">
                                        <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New notification</span>
                                        <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="relative inline-block shrink-0">
                                            <img class="w-12 h-12 rounded-full" src="assets/images/users/avatar-7.jpg" alt="Phyllis Gatlin image"/>
                                            <span class="absolute bottom-0 -right-2 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full">
                                                <i class='bx bxs-message-check text-white'></i>
                                            </span>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">
                                            <div class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</div>
                                            <div class="text-sm font-normal">commmented on your photo</div> 
                                            <span class="text-xs font-medium text-blue-600 dark:text-blue-500">a few seconds ago</span>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                         <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Toast message</h6>
                            </div>
                            <div class="card-body flex flex-wrap gap-4 items-center">
                               <div id="toast-interactive" class="w-full max-w-sm p-4 text-gray-500 dark:text-zinc-100/80 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600" role="alert">
                                    <div class="flex">
                                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:text-blue-300 dark:bg-blue-900">
                                            <i class='bx bx-recycle text-lg'></i>
                                            </div>
                                        <div class="ltr:ml-3 rtl:mr-3 text-sm font-normal">
                                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Update available</span>
                                            <div class="mb-2 text-sm font-normal">A new software version is available for download.</div> 
                                            <div class="grid grid-cols-2 gap-2">
                                                <div>
                                                    <a href="#" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-500/30 dark:bg-blue-500 dark:hover:bg-blue-600">Update</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-50/50 focus:ring-2 focus:outline-none focus:ring-gray-500/30 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700">Not now</a> 
                                                </div>
                                            </div>    
                                        </div>
                                        <button type="button" class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50" data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='bx bx-x text-2xl -mt-1 text-center' data-tw-dismiss="toast"></i>
                                        </button>
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
@endsection