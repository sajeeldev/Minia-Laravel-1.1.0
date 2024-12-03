@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Timeline</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Timeline</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                 <!-- start grid -->
                <div class="grid grid-cols-12 gap-5 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 ">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-gray-600 dark:text-gray-100 text-15">Bootstrap Timeline</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 xl:col-span-10 xl:col-start-2 ">
                                        <div class="reltive ">
                                            <div class="text-center">
                                                 <div class="h-20 w-20 bg-violet-500 md:mx-auto rounded-full items-center">
                                                    <p class="text-white uppercase py-[30px]">Start</p>
                                                </div>
                                            </div>
                                           
                                            <div class="relative pt-16">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="ltr:text-right rtl:text-left relative mt-9">
                                                            <i class="bx bx-briefcase-alt-2 text-violet-500 text-2xl md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 right-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="mr-10 pr-6">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event One</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">Perspitis unde omnis it voluptatem
                                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                                        quae ab illo inventore veritatis et quasi
                                                                        architecto beatae explicabo.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-11 md:col-span-6 order-2 md:order-1">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 md:mr-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 left-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event two</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">At vero eos dignissimos ducimus quos dolores chooses to enjoy pleasure that has no annoying.</p>
                                                                    <div class="flex flex-wrap md:justify-end mt-3 gap-2">
                                                                        <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid rounded w-14">
                                                                        <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid rounded w-14">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 block md:hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-6 order-1 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="bx bx-user-pin text-violet-500 text-2xl md:text-3xl ltr:mr-10 rtl:ml-10 ltr:md:ml-5 rtl:md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="ltr:text-right rtl:text-left relative mt-9">
                                                            <i class="bx bx-bar-chart-square text-violet-500 text-2xl md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2 md:mr-5"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 right-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">28</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">Des</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="mr-10 pr-6">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Three</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">Vivamus ultrices massa turna interdum eu. Pellentesque habitant morbi tristique eget justo sit amet est varius mollis et quis nisi. Suspendisse potenti. senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-11 md:col-span-6 order-2 md:order-1">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 md:mr-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 left-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Four</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">Printing and typesetting industry. been the industry'scrambled it make a type specimen book.</p>
                                                                    <button type="button" class="btn border-transparent bg-violet-500 rounded-full shadow-md shadow-violet-500/40 text-white mt-4">See
                                                                        more detail
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 block md:hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-6 order-1 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="bx bx-camera text-violet-500 text-2xl md:text-3xl mr-10 md:ml-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="ltr:text-right rtl:text-left relative mt-9">
                                                            <i class="bx bx-pie-chart-alt text-violet-500 text-2xl md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 right-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">23</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">Des</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="mr-10 pr-6">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Five</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">Excepturi, obcaecati, quisquam id
                                                                                    molestias eaque asperiores voluptatibus cupiditate error
                                                                                    assumenda delectus odit
                                                                                    similique earum voluptatem 
                                                                                    Odit, itaque, deserunt corporis vero ipsum nisi repellat ... <a href="#" class="text-violet-500">Read more</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                             <div class="relative pb-16"> 
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-11 md:col-span-6 order-2 md:order-1">
                                                        <div class="m-4 border border-gray-50 rounded-lg relative ml-8 md:mr-8 dark:border-zinc-600">
                                                            <div class="md:absolute mx-5 mt-5 md:mx-0 md:mt-0 left-5 -top-3 w-14 h-20 bg-violet-500 rounded-md text-center" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 text-white-50 leading-tight text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event End</h3>
                                                                    <p class="mb-0 mt-2 pt-1 text-gray-500 dark:text-zinc-100/80">Suspendisse tempor porttitor elit non maximus. Sed suscipit, purus in convallis condimentum, risus ex pellentesque sapien, vel tempor arcu dolor ut est. Nam ac felis id mauris fermentum nisl pharetra auctor.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-l border-b border-gray-50 rounded-sm bg-white top-7 -left-2 block md:hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-6 order-1 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="bx bx-home-alt text-violet-500 text-2xl md:text-3xl mr-10 md:ml-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="after:content-[''] absolute border-l border-violet-500 h-full top-0 left-10 md:left-[50%]"></div>
                                            </div>

                                            <div class="text-center">
                                                 <div class="h-20 w-20 bg-violet-500 md:mx-auto rounded-full items-center">
                                                    <p class="text-white uppercase py-[30px]">End</p>
                                                </div>
                                            </div>

                                            <div class="relative text-center">
                                                <div class="mt-12 border border-gray-50 rounded-lg relative inline-block dark:border-zinc-600">
                                                    <div class="p-5">
                                                        <h3 class="text-lg text-gray-600 dark:text-gray-100">Launched our company on 21 June 2021</h3>
                                                        <p class="text-gray-500 dark:text-zinc-100/80 mt-1 mb-0">Pellentesque sapien ut est.</p>
                                                    </div>
                                                    <div class="after:content-[''] absolute h-4 w-4 rotate-45 -translate-x-2 border-l border-t border-gray-50 rounded-sm bg-white -top-2 left-10 md:left-[50%] dark:bg-zinc-800 dark:border-zinc-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

        
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div> 

@endsection