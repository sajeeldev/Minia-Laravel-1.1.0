@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">General</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">General</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
            <!-- start grid -->

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Badges</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Default</h6>
                                    <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium bg-violet-500 text-white text-11 px-1.5 py-[1.5px] rounded">Primary</span>
                                        <span class="badge font-medium bg-green-600 text-white text-11 px-1.5 py-[1.5px] rounded">Success</span>
                                        <span class="badge font-medium bg-blue-400 text-white text-11 px-1.5 py-[1.5px] rounded">Info</span>
                                        <span class="badge font-medium bg-yellow-400 text-white text-11 px-1.5 py-[1.5px] rounded">Warning</span>
                                        <span class="badge font-medium bg-red-400 text-white text-11 px-1.5 py-[1.5px] rounded">Danger</span>
                                        <span class="badge font-medium bg-gray-900 text-white text-11 px-1.5 py-[1.5px] rounded">Dark</span>
                                    </div>    
                                </div>

                                <div class="mt-5">
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Soft Badge</h6>
                                    <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium bg-violet-50 text-violet-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-violet-500/20">Primary</span>
                                        <span class="badge font-medium bg-green-50 text-green-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-green-500/20">Success</span>
                                        <span class="badge font-medium bg-blue-50 text-blue-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-blue-500/20">Info</span>
                                        <span class="badge font-medium bg-yellow-50 text-yellow-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-yellow-500/20">Warning</span>
                                        <span class="badge font-medium bg-red-50 text-red-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-red-500/20">Danger</span>
                                        <span class="badge font-medium bg-gray-200 text-gray-900 text-11 px-1.5 py-[1.5px] rounded dark:bg-gray-500/20">Dark</span>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rounded ( Pill ) Badges</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Default</h6>
                                    <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium rounded-full bg-violet-500 text-white text-11 px-1.5 py-[1.5px] ">Primary</span>
                                        <span class="badge font-medium rounded-full bg-green-600 text-white text-11 px-1.5 py-[1.5px] ">Success</span>
                                        <span class="badge font-medium rounded-full bg-blue-400 text-white text-11 px-1.5 py-[1.5px] ">Info</span>
                                        <span class="badge font-medium rounded-full bg-yellow-400 text-white text-11 px-1.5 py-[1.5px] ">Warning</span>
                                        <span class="badge font-medium rounded-full bg-red-400 text-white text-11 px-1.5 py-[1.5px] ">Danger</span>
                                        <span class="badge font-medium rounded-full bg-gray-900 text-white text-11 px-1.5 py-[1.5px] ">Dark</span>
                                    </div>    
                                </div>

                                <div class="mt-5">
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Soft Badge</h6>
                                    <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium rounded-full bg-violet-50 text-violet-500 text-11 px-1.5 py-[1.5px] dark:bg-violet-500/20">Primary</span>
                                        <span class="badge font-medium rounded-full bg-green-50 text-green-500 text-11 px-1.5 py-[1.5px] dark:bg-green-500/20">Success</span>
                                        <span class="badge font-medium rounded-full bg-blue-50 text-blue-500 text-11 px-1.5 py-[1.5px] dark:bg-blue-500/20">Info</span>
                                        <span class="badge font-medium rounded-full bg-yellow-50 text-yellow-500 text-11 px-1.5 py-[1.5px] dark:bg-yellow-500/20">Warning</span>
                                        <span class="badge font-medium rounded-full bg-red-50 text-red-500 text-11 px-1.5 py-[1.5px] dark:bg-red-500/20">Danger</span>
                                        <span class="badge font-medium rounded-full bg-gray-200 text-gray-900 text-11 px-1.5 py-[1.5px] dark:bg-gray-500/20">Dark</span>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Badge with dot</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Default</h6>
                                     <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium bg-violet-50 text-violet-500 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-violet-500 inline-block mr-1"></span> Primary</span>
                                        <span class="badge font-medium bg-green-50 text-green-500 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-green-500 inline-block mr-1"></span> Success</span>
                                        <span class="badge font-medium bg-blue-50 text-sky-500 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-sky-500 inline-block mr-1"></span> Info</span>
                                        <span class="badge font-medium bg-yellow-50 text-yellow-500 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-yellow-500 inline-block mr-1"></span> Warning</span>
                                        <span class="badge font-medium bg-red-50 text-red-500 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-red-500 inline-block mr-1"></span> Danger</span>
                                        <span class="badge font-medium bg-gray-50 text-gray-900 text-xs px-2 py-1 rounded"><span class="p-1 rounded-full bg-gray-800 inline-block mr-1"></span> Dark</span>
                                    </div>     
                                </div>

                                <div class="mt-5">
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Rounded Badge</h6>
                                    <div class=" flex flex-wrap gap-2">
                                        <span class="badge font-medium rounded-full bg-violet-50 text-violet-500 text-xs px-2 py-1"><span class="p-1 rounded-full bg-violet-500 inline-block mr-1"></span> Primary</span>
                                        <span class="badge font-medium rounded-full bg-green-50 text-green-500 text-xs px-2 py-1"><span class="p-1 rounded-full bg-green-500 inline-block mr-1"></span> Success</span>
                                        <span class="badge font-medium rounded-full bg-blue-50 text-sky-500 text-xs px-2 py-1"><span class="p-1 rounded-full bg-sky-500 inline-block mr-1"></span> Info</span>
                                        <span class="badge font-medium rounded-full bg-yellow-50 text-yellow-500 text-xs px-2 py-1"><span class="p-1 rounded-full bg-yellow-500 inline-block mr-1"></span> Warning</span>
                                        <span class="badge font-medium rounded-full bg-red-50 text-red-500 text-xs px-2 py-1"><span class="p-1 rounded-full bg-red-500 inline-block mr-1"></span> Danger</span>
                                        <span class="badge font-medium rounded-full bg-gray-50 text-gray-900 text-xs px-2 py-1"><span class="p-1 rounded-full bg-gray-800 inline-block mr-1"></span> Dark</span>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rounded badges with size</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Badges with dot</h6>
                                    <div class="space-x-2">
                                        <span class="inline-block font-medium bg-violet-500 text-white text-11 px-1.5 py-0.5 rounded ltr:ml-0 rtl:ml-2"><span class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span> Small</span>
                                        <span class="inline-block font-medium rounded bg-violet-500 text-white text-xs px-2 py-1"><span class="p-1 rounded-full bg-white h-1 w-1 inline-block"></span> Large</span>
                                        <span class="inline-block font-medium bg-green-500 text-white text-11 px-1.5 py-0.5 rounded"><span class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span> Small</span>
                                        <span class="inline-block font-medium rounded bg-green-500 text-white text-xs px-2 py-1"><span class="p-1 rounded-full bg-white h-1 w-1 inline-block"></span> Large</span>
                                        <span class="inline-block font-medium bg-yellow-500 text-white text-11 px-1.5 py-0.5 rounded-full"><span class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span> Small</span>
                                        <span class="inline-block font-medium rounded-full bg-yellow-500 text-white text-xs px-2 py-1"><span class="p-1 rounded-full bg-white h-1 w-1 inline-block"></span> Large</span>
                                        <span class="inline-block font-medium bg-red-500 text-white text-11 px-1.5 py-0.5 rounded-full"><span class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span> Small</span>
                                        <span class="inline-block font-medium rounded-full bg-red-500 text-white text-xs px-2 py-1"><span class="p-1 rounded-full bg-white h-1 w-1 inline-block"></span> Large</span>
                                    </div>    
                                </div>

                                <div class="mt-5">
                                    <h6 class="text-14 mb-2 text-gray-700 dark:text-gray-100">Badge with remove button</h6>
                                    <div class="space-x-2">
                                        <span class="inline-block font-medium bg-violet-500 text-white text-11 px-1.5 py-0.5 rounded ltr:ml-0 rtl:ml-2">Small <a href=""><i class="mdi mdi-close align-middle"></i></a></span>
                                        <span class="inline-block font-medium rounded bg-violet-500 text-white text-xs px-2 py-1"> Large <a href=""><i class="mdi mdi-close align-middle text-13"></i></a></span>
                                        <span class="inline-block font-medium bg-green-500 text-white text-11 px-1.5 py-0.5 rounded"> Small <a href=""><i class="mdi mdi-close align-middle"></i></a></span>
                                        <span class="inline-block font-medium rounded bg-green-500 text-white text-xs px-2 py-1"> Large <a href=""><i class="mdi mdi-close align-middle text-13"></i></a></span>
                                        <span class="inline-block font-medium bg-yellow-500 text-white text-11 px-1.5 py-0.5 rounded-full"> Small <a href=""><i class="mdi mdi-close align-middle"></i></a></span>
                                        <span class="inline-block font-medium rounded-full bg-yellow-500 text-white text-xs px-2 py-1"> Large <a href=""><i class="mdi mdi-close align-middle text-13"></i></a></span>
                                        <span class="inline-block font-medium bg-red-500 text-white text-11 px-1.5 py-0.5 rounded-full"> Small <a href=""><i class="mdi mdi-close align-middle"></i></a></span>
                                        <span class="inline-block font-medium rounded-full bg-red-500 text-white text-xs px-2 py-1"> Large <a href=""><i class="mdi mdi-close align-middle text-13"></i></a></span>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Badges in Buttons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <button class="btn bg-violet-500 text-white border-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/20">Notifications <span class="px-1 bg-green-500 text-xs rounded ml-1">4</span></button>
                                    <button class="btn bg-green-500 text-white border-green-500 hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-100 dark:focus:ring-green-500/20">Messages <span class="px-1 bg-red-400 text-xs rounded ml-1 ">2</span></button>
                                    <button class="btn border border-gray-400 text-gray-500 hover:bg-gray-500 hover:text-white focus:bg-gray-500 focus:text-white focus:ring focus:ring-gray-100 dark:focus:ring-gray-500/20">Draft <span class="px-1 bg-green-500 text-xs text-white rounded ml-1">2</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Badges Position Examples</h6>
                            </div>
                            <div class="card-body">
                               <div class="flex flex-wrap gap-4">
                                        <button class="btn bg-violet-500 text-white border-violet-500 relative focus:bg-violet-600 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/20">Mails 
                                            <span class="px-1 bg-green-500 text-xs rounded-full ml-1 absolute -top-2 -right-3">+99</span>
                                        </button>
                                        <button class="btn bg-gray-50 text-gray-700 dark:text-gray-100 border-gray-50 relative hover:bg-gray-50/50 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-transparent dark:focus:ring-0">Alerts  
                                            <span class="px-1 bg-red-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring ring-white -top-1 -right-1"></span>
                                        </button>
                                        <button class="inline-block bg-violet-500 text-white border-violet-500 relative h-8 w-8 rounded hover:bg-violet-600 focus:bg-violet-600  focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/20"><i class="bx bxs-envelope text-15 leading-[2.2]"></i>  
                                            <span class="px-1 bg-red-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring-2 ring-white -top-1 -right-1"></span>
                                        </button> 
                                        <button class="inline-block bg-gray-50 border border-gray-50 text-gray-700 dark:text-gray-100 relative h-8 w-8 rounded-full hover:bg-gray-50/50 text-center transition-all duration-200 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-zinc-700 dark:focus:ring-gray-500/20"><i class="bx bxs-bell leading-[2.2]"></i></button>
                                        <button class="inline-block bg-gray-50 border border-gray-50 text-gray-700 dark:text-gray-100 relative h-8 w-8 rounded-full hover:bg-gray-50/50 transition-all duration-200 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-zinc-700 dark:focus:ring-gray-500/20"><i class="bx bx-menu leading-[2.2]"></i>
                                        <span class="px-1 bg-green-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring-2 ring-white -top-1 -right-0"></span></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Pagination - Default Example</h6>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation example border">
                                    <ul class="flex list-style-none">
                                        <li class=" border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                            <a class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600 hover:bg-gray-50/50" 
                                            href="#">Previous</a></li>
                                        <li class=" border border-violet-500 bg-violet-100"><a
                                            class="page-link relative block py-2 px-4 bg-transparent outline-none transition-all duration-300 text-violet-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-900 dark:hover:text-gray-100 dark:hover:bg-zinc-600"
                                            href="#">1</a></li>
                                        <li class=" border border-l-0 rtl:border-l dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">2</a></li>
                                        <li class=" border border-l-0 border-r-0 rtl:border-l dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">3</a></li>
                                        <li class=" border border-r-0 dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">...</a></li>
                                        <li class=" border border-r-0 dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">8</a></li>
                                        <li class=" border border-r-0 dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">9</a></li>
                                        <li class=" border border-r-0 rtl:border-l-0 dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">10</a></li>
                                        <li class=" border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                            class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                            href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Pagination with icons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-3">
                                    <nav aria-label="Page navigation example border">
                                        <ul class="flex list-style-none">
                                            <li class=" border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="page-link pointer-events-none relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-300 hover:text-violet-500 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600 hover:bg-gray-50/50" 
                                                href="#"><i class="mdi mdi-chevron-double-left"></i></a></li>
                                            <li class=" border dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 bg-transparent outline-none transition-all duration-300 text-violet-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-violet-500 dark:hover:bg-zinc-600"
                                                href="#">1</a></li>
                                            <li class=" border border-l-0 border-r-0 dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">2</a></li>
                                            <li class=" border border-l-0 ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">3</a></li>
                                            <li class=" border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#"><i class="mdi mdi-chevron-double-right"></i></a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example border">
                                        <ul class="flex list-style-none">
                                            <li class=" border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="page-link pointer-events-none relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-300 hover:text-violet-500 focus:shadow-none hover:bg-gray-50/50 dark:text-zinc-100 dark:hover:bg-zinc-600" 
                                                href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                            <li class=" border dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">1</a></li>
                                            <li class=" border border-l-0 bg-violet-500 border-violet-500 dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-white hover:bg-violet-600 ring ring-violet-200 dark:ring-violet-500/30"
                                                href="#">2</a></li>
                                            <li class=" border border-l-0 ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">3</a></li>
                                            <li class=" border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                class="page-link relative block py-2 px-4 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Centered page numbers</h6>
                            </div>
                            <div class="card-body">
                                <div class="border-t w-full border-gray-50 flex place-content-between dark:border-zinc-600">
                                    <div class="mt-3">
                                        <a class="page-link relative border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 align-middle hover:text-violet-500 dark:text-zinc-100" 
                                            href="#"><i class="mdi mdi-arrow-left mr-2 align-middle "></i> Previous</a>
                                    </div>
                                    <div >
                                        <nav>
                                            <ul class="flex list-style-none text-gray-400">
                                                <li class=" border-t-2 border-transparent hover:border-gray-200 transition-all duration-300 pt-3 dark:hover:border-zinc-500"><a
                                                    class="page-link relative block px-4"
                                                    href="#">1</a></li>
                                                <li class=" border-t-2 border-violet-500 text-violet-500 pt-3"><a
                                                    class="page-link relative block px-4"
                                                    href="#">2</a></li>
                                                <li class=" border-t-2 border-transparent hover:border-gray-200 transition-all duration-300 pt-3 dark:hover:border-zinc-500"><a
                                                    class="page-link relative block px-4"
                                                    href="#">...</a></li>
                                                <li class=" border-t-2 border-transparent hover:border-gray-200 transition-all duration-300 pt-3 dark:hover:border-zinc-500"><a
                                                    class="page-link relative block px-4"
                                                    href="#">7</a></li>
                                                <li class=" border-t-2 border-transparent hover:border-gray-200 transition-all duration-300 pt-3 dark:hover:border-zinc-500"><a
                                                    class="page-link relative block px-4"
                                                    href="#">8</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3">
                                        <a class="page-link relative border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 align-middle hover:text-violet-500 dark:text-zinc-100" 
                                            href="#"> Next <i class="mdi mdi-arrow-right ml-2 align-middle "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Simple card footer</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-3 items-center place-content-between">
                                   <div class="text-gray-500 font-medium dark:text-zinc-100">
                                        <p>Showing <strong class="text-gray-600 dark:text-zinc-50">1</strong> to <strong class="text-gray-600 dark:text-zinc-50">10</strong> of <strong class="text-gray-600 dark:text-zinc-50">20</strong> result</p>
                                   </div>
                                   <div class="flex flex-wrap gap-3">
                                        <button class="btn text-gray-500 border-gray-100 hover:bg-gray-50/50 hover:text-gray-700 dark:text-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Previous</button>
                                        <button class="btn text-gray-500 border-gray-100 hover:bg-gray-50/50 hover:text-gray-700 dark:text-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Next</button>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Sizing</h6>
                            </div>
                            <div class="card-body">
                                <nav class="block">
                                    <ul class="flex list-style-none">
                                        <li class=" disabled"><a
                                            class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-500 pointer-events-none focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                            class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">1</a></li>
                                        <li class=" active"><a
                                            class="page-link text-xl py-3 px-6 relative block border-0 bg-violet-500 outline-none transition-all duration-300 rounded-md text-white hover:text-white hover:bg-violet-600 shadow-md focus:shadow-md"
                                            href="#">2</a></li>
                                        <li class=""><a
                                            class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">3</a></li>
                                        <li class=""><a
                                            class="page-link text-xl py-3 px-6 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded-md text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">Next</a></li>
                                    </ul>
                                    <ul class="flex list-style-none mt-5">
                                        <li class=" disabled"><a
                                            class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                            class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">1</a></li>
                                        <li class=" active"><a
                                            class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-violet-500 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-violet-600 shadow-md focus:shadow-md"
                                            href="#">2</a></li>
                                        <li class=""><a
                                            class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">3</a></li>
                                        <li class=""><a
                                            class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Shape</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <ul class="flex list-style-none">
                                        <li class=" disabled"><a
                                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">1</a></li>
                                        <li class=" active"><a
                                            class="page-link relative block py-1.5 px-3 border-0 bg-violet-500 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-violet-600 shadow-md focus:shadow-md"
                                            href="#">2</a></li>
                                        <li class=""><a
                                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">3</a></li>
                                        <li class=""><a
                                            class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                            href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Border Spinner</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-violet-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-gray-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-green-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-sky-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-yellow-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-red-400 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-gray-700 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Ping</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-8">
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-violet-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-gray-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-green-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-sky-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-yellow-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-red-500/75"></span>
                                    </span>
                                    <span class="h-5 w-5 relative">
                                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-gray-800/75 dark:bg-zinc-700"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Pulse</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-violet-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-gray-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-green-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-sky-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-yellow-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-red-500 h-8 w-8"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="rounded-full bg-gray-800 h-8 w-8 dark:bg-zinc-700"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Bounce</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-4">
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-violet-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-gray-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-green-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-sky-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-yellow-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-red-500"></div>
                                    <div class="animate-bounce h-8 w-8 rounded-full bg-gray-800 dark:bg-zinc-700"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Animation example</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <button type="button" class="btn border-violet-500 bg-violet-500 text-white relative py-2.5">
                                       <span class="spinner-border animate-spin inline-block w-5 h-5 border-[2px] border-l-transparent border-white rounded-full ltr:mr-2 rtl:ml-2 align-middle">
                                            <span class="hidden">Loading...</span>
                                       </span>
                                       Processing...
                                    </button>
                                    <div class="relative">
                                        <button type="button" class="btn bg-gray-50 border-gray-50 dark:bg-zinc-700 dark:text-zinc-100 dark:border-zinc-600">Transition</button>
                                        <div class="absolute top-0 right-0">
                                            <span class="flex h-2.5 w-2.5 relative">
                                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-50"></span>
                                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-sky-500"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div >
                                        <div class="animate-pulse border border-gray-800 bg-gray-800 shadow rounded-full h-10 w-10 text-center dark:bg-zinc-600">
                                            <i class="mdi mdi-alert-outline text-lg text-white leading-[2.2]"></i>
                                        </div>
                                    </div>
                                    <div >
                                        <div class="animate-bounce w-10 h-10 bg-red-500 text-center rounded-full">
                                            <i class="mdi mdi-arrow-down text-xl text-white leading-loose"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <!--            
            <div class="popover border fade show w-80 rounded-md absolute p-4 bg-white" role="tooltip" id="popover869150" data-popper-placement="top">
                <div class="popover-arrow border-8 border-r-transparent border-b-transparent absolute -top-2 left-[48%] rotate-45"></div>
                <div class="popover-body">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
            </div> -->
        
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
