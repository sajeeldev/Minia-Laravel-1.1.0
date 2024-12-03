@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Form Wizard</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Form Wizard</a>
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

                            <div class="nav-tabs">
                                <ul class="nav w-full flex flex-wrap text-sm font-medium text-center text-gray-500 py-5 dark:text-gray-400">
                                    <li class="nav-item flex-grow relative ">
                                        <a href="#seller-details" class="nav-link active group" data-tw-toggle="tab" data-tw-target="seller-details">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                                                <i class="bx bx-list-ul text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                        <div class="after:content-[''] after:absolute after:w-[75%] after:h-[2px] after:bg-gray-50/50 ltr:after:left-[62%] rtl:after:right-[62%] after:top-[50%] sm:block hidden after:dark:bg-zinc-700"></div>
                                    </li>
                                    <li class="nav-item flex-grow relative">
                                        <a href="#company-document" class="nav-link group" data-tw-toggle="tab" data-tw-target="company-document">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                                <i class="bx bx-book-bookmark text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                        <div class="after:content-[''] after:absolute after:w-[75%] after:h-[2px] after:bg-gray-50/50 ltr:after:left-[62%] rtl:after:right-[62%] after:top-[50%] sm:block hidden after:dark:bg-zinc-700"></div>
                                    </li>
                                    <li class="nav-item flex-grow">
                                        <a href="#bank-detail" class="nav-link group" data-tw-toggle="tab" data-tw-target="bank-detail">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                                <i class="bx bxs-bank text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane block" id="seller-details">
                                        <div class="text-center mt-8">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">First name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Last name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Phone</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30"  placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Email</label>
                                                        <input type="email" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Address</label>
                                                        <textarea class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);" class="btn bg-violet-500 border-transparent text-white">Next <i
                                                        class="bx bx-chevron-right ms-1 align-middle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane hidden" id="company-document">
                                        <div class="text-center mt-8">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">First name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Last name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Phone</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30"  placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Email</label>
                                                        <input type="email" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Address</label>
                                                        <textarea class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);" class="btn bg-violet-500 border-transparent text-white">Next <i class="bx bx-chevron-right ms-1 align-middle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane hidden" id="bank-detail">
                                        <div class="text-center mt-8">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">First name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Last name</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Phone</label>
                                                        <input type="text" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30"  placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Email</label>
                                                        <input type="email" class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="mb-4">
                                                        <label class="text-gray-600 font-bold dark:text-gray-100">Address</label>
                                                        <textarea class="border-gray-100 block w-full mt-2 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30" rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);" class="btn bg-violet-500 border-transparent text-white">Next <i
                                                        class="bx bx-chevron-right ms-1 align-middle"></i></a></li>
                                        </ul>
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
    
@endsection