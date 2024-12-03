@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">FAQs</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">FAQs</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                 
                <div class="grid grid-cols-12 gap-5 mb-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body mb-6">
                                <div class="grid grid-cols-1 lg:grid-cols-12">
                                    <div class="col-span-12 lg:col-span-4 lg:col-start-5">
                                        <div class="text-center">
                                            <h5 class="text-gray-700 dark:text-gray-100">Can't find what you are looking for?</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60 mt-2">If several languages coalesce, the grammar of the resulting language
                                                        is more simple and regular than that of the individual</p>
                                            <div class="mt-4">
                                                <button type="button" class="btn border-transparent bg-violet-500 mt-2 mr-2 shadow-md text-white shadow-violet-200 focus:ring focus:ring-violet-50 dark:shadow-zinc-600">Email
                                                    Us</button>
                                                <button type="button" class="btn border-transparent bg-green-500 shadow-md text-white shadow-green-100 mt-2 waves-effect waves-light focus:ring focus:ring-green-100 dark:shadow-zinc-600">Send us a
                                                    tweet</button>
                                            </div>
                                        </div>
                                        <form class="app-search d-none d-lg-block my-10">
                                            <div class="flex relative">
                                                <input type="text" class="form-control w-full rounded bg-gray-500/10 border border-transparent pr-16 dark:border-zinc-600 dark:bg-zinc-700" placeholder="Search...">
                                                <button class=" bg-violet-500 px-3 py-1.5 top-1 text-white rounded-md absolute right-1 shadow-md shadow-violet-500/50" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">01.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">What is Lorem Ipsum?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">New common language will be more simple and regular than the existing European languages. It will be as simple as occidental.</p>
                                        </div>
                                    </div>

                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">02.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">Where does it come from?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators.</p>
                                        </div>
                                        
                                    </div>

                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">03.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">Where can I get some?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                                        </div>
                                    </div>

                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">04.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">Why do we use it?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                        </div>
                                    </div>

                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">05.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">Where can I get some?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.   </p>
                                        </div>
                                    </div>

                                    <div class="border border-gray-50 rounded-md overflow-hidden dark:border-zinc-600">
                                        <div class="relative">
                                            <i class="bx bx-help-circle text-7xl text-violet-50/50 absolute ltr:-right-3 rtl:-left-3 -top-4 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500">06.</h5>
                                            <h5 class="mt-3 text-gray-700 dark:text-gray-100">What is Lorem Ipsum?</h5>
                                            <p class="text-muted mt-3 mb-0 text-gray-500 dark:text-zinc-100/60">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental</p>
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