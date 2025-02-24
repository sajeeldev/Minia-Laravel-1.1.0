@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Dropdown</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Dropdown</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Simple Dropdown</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6">
                                <!-- Dropdown button -->
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle shadow-md shadow-gray-100 dark:shadow-zinc-600 border bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropdown button <i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                <!-- Dropdown button --> 
                                </div>
                                <div class="col-span-6">
                                <!-- Dropdown button -->
                                    <div class="dropdown relative inline-block">
                                        <a href="#" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                        " id="dropdownButton2" data-bs-toggle="dropdown">Dropdown Link<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></a>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownButton2">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                <!-- Dropdown button --> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Variant</h6>
                        </div>
                        <div class="card-body">
                        <!-- Dropdown button -->
                            <div class="flex flex-wrap gap-2">
                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 border-violet-500 text-white font-medium leading-tight hover:bg-violet-600 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600
                                    " id="dropdownMenuButton1" data-bs-toggle="dropdown">Primary <i class="mdi mdi-chevron-down "></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                        <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 dark:focus:ring-gray-500/30 focus:bg-gray-600
                                    " id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i class="mdi mdi-chevron-down "></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                         <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-green-100 dark:shadow-zinc-600 bg-green-500 border-green-500 text-white font-medium leading-tight hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30
                                    " id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i class="mdi mdi-chevron-down"></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                         <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 border-sky-500 text-white font-medium leading-tight hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30
                                    " id="dropdownMenuButton3" data-bs-toggle="dropdown">Info <i class="mdi mdi-chevron-down "></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                         <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-yellow-100 dark:shadow-zinc-600 bg-yellow-400 border-yellow-400 text-white font-medium leading-tight hover:bg-yellow-600 focus:ring-2 focus:ring-yellow-100 focus:bg-yellow-600 dark:focus:ring-yellow-500/30
                                    " id="dropdownMenuButton3" data-bs-toggle="dropdown">Warning  <i class="mdi mdi-chevron-down "></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                         <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown relative">
                                    <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-red-100 dark:shadow-zinc-600 bg-red-400 border-red-400 text-white font-medium leading-tight hover:bg-red-600 focus:ring focus:ring-red-200 focus:bg-red-600 dark:focus:ring-red-500/30
                                    " id="dropdownMenuButton3" data-bs-toggle="dropdown">Warning  <i class="mdi mdi-chevron-down "></i></button>
                                
                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                         <li><a
                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                            href="#">Action</a>
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                            bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                        </li>
                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                            text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <!-- Dropdown button --> 
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Split Button Dropdowns</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center shadow-md shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 p-0 align-middle border-transparent text-white hover:bg-violet-600 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600"><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center bg-gray-500 shadow-md shadow-gray-100 dark:shadow-zinc-600 p-0 align-middle border-transparent text-white hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600"><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>      

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center bg-green-500 shadow-md shadow-green-100 dark:shadow-zinc-600 p-0 align-middle border-transparent text-white hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30 "><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center bg-sky-500 shadow-md shadow-sky-100 dark:shadow-zinc-600 p-0 align-middle border-transparent text-white hover:bg-sky-600  focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30 "><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center border-transparent shadow-md shadow-yellow-100 dark:shadow-zinc-600 bg-yellow-500 p-0 align-middle text-white hover:bg-yellow-600 focus:ring focus:ring-yellow-200 focus:bg-yellow-600 dark:focus:ring-yellow-500/30 "><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex items-center bg-red-500 shadow-md shadow-red-100 dark:shadow-zinc-600 border-transparent p-0 align-middle text-white hover:bg-red-600 focus:ring focus:ring-red-200 focus:bg-red-600 dark:focus:ring-red-500/30 "><span class="px-3">Primary</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Sizing</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2 rounded dropdown-toggle shadow-md shadow-violet-100 dark:shadow-zinc-600 border text-lg bg-violet-500 border-violet-500 text-white font-medium leading-tight hover:bg-violet-500 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/30 
                                        " id="dropdownM1" data-bs-toggle="dropdown">Large button<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2 text-xl"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownM1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown button --> 

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex text-lg rounded shadow-md shadow-gray-100 dark:shadow-zinc-600 items-center bg-gray-500 p-0 align-middle text-white font-medium hover:bg-gray-500 focus:ring focus:ring-gray-100 dark:border-transparent dark:focus:ring-gray-500/30 "><span class="px-3">Large button</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3.5 align-middle dropdown-toggle focus-visible:border-3 focus-visible:border-gray-500/10" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn rounded py-2 dropdown-toggle border shadow-md shadow-sky-100 dark:shadow-zinc-600 text-xs bg-sky-500 border-sky-500 text-white font-medium leading-tight hover:bg-sky-500 focus:ring focus:ring-sky-100 dark:focus:ring-sky-500/30 
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Large button<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn flex text-xs rounded items-center shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 p-0 align-middle text-white font-medium focus:ring focus:ring-gray-100 dark:border-transparent dark:focus:ring-gray-500/30 "><span class="px-3">Large button</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-2 align-middle dropdown-toggle focus-visible:border-3 focus-visible:border-gray-500/10" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-2
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With dividers</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropdown button <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Active Menu</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Option <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Duplicate</a >
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Archive</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Move</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Share</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Add to favorites</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Menu Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 border-violet-500 text-white font-medium leading-tight hover:bg-violet-500 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Header <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <div class="dropdown-header px-4 py-1">
                                                <h6 class="text-13 text-gray-500 text-truncate mn-0 dark:text-gray-100">Welcome Jessie!</h6>
                                            </div>
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <hr class="dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                     <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-green-100 dark:shadow-zinc-600 bg-green-500 border-green-500 text-white font-medium leading-tight hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30 
                                        focus:outline-none transition duration-150 ease-in-out" id="dropdownMenuButton3" data-bs-toggle="dropdown">Text <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <div class=" dropdown-menu w-60 absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden m-0 bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                            <div class="p-3 text-gray-600 dark:text-zinc-100">
                                                <p> Some example text that's free-flowing within the dropdown menu.</p>
                                                <p class="mt-2">And this is more example text.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border bg-gray-50 shadow-md shadow-gray-100 dark:shadow-zinc-600 border-gray-50 text-gray-600 font-medium leading-tight hover:bg-gray-50/50 focus:ring focus:ring-gray-50/50 focus:bg-gray-100 dark:focus:ring-gray-500/30 
                                        focus:outline-none transition duration-150 ease-in-out " id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <div class=" dropdown-menu w-64 absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden m-0 bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton3">
                                            <form class="p-4" autocomplete="off">
                                                <div class="mb-2">
                                                    <label class="form-label text-14 dark:text-gray-100" for="exampleDropdownFormEmail">Email address</label>
                                                    <input type="email" class="form-control w-full rounded mt-2 border-gray-300 dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder:text-zinc-100" id="exampleDropdownFormEmail" placeholder="email@example.com">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label text-14 dark:text-gray-100" for="exampleDropdownFormPassword">Password</label>
                                                    <input type="password" class="form-control w-full rounded mt-2 border-gray-300 dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder:text-zinc-100" id="exampleDropdownFormEmail" placeholder="Password">
                                                </div>
                                                <div class="mb-2">
                                                    <div class="form-check flex items-center">
                                                        <input type="checkbox" class="form-check-input rounded dark:text-zinc-100 dark:bg-zinc-800 dark:checked:bg-violet-500 focus:ring-0 focus:ring-offset-0" id="rememberdropdownCheck">
                                                        <label class="form-check-label ml-2 text-sm " for="rememberdropdownCheck">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn bg-violet-500 text-white shadow-lg shadow-violet-200 dark:shadow-zinc-600 dark:border-zinc-600" type="submit">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Menu Alignment</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Right-aligned menu example <i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 left-auto right-0 py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Left-aligned but right aligned when large screen<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 right-0 left-auto lg:left-0 lg:right-auto  py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Right-aligned but left aligned when large screen<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 lg:right-0 lg:left-auto  py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With icons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown"><i class='bx bx-hive align-middle text-lg ltr:mr-2 rtl:ml-2'></i>Option With icons <i class="mdi mdi-chevron-down "></i></button>
                                    
                                        <ul class=" dropdown-menu w-44 absolute bg-white z-50 float-left py-2 list-none text-left mt-1
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#"><i class='bx bxs-edit ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Edit</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap
                                                bg-transparent text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-duplicate ltr:mr-2 rtl:ml-2 align-middle text-lg'></i> Duplicate</a >
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent
                                                text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-box ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Archive</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent
                                                text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-right-arrow-circle ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Move</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent
                                                text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-user-plus ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Share</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent
                                                text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-heart ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Add to favorites</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-1 px-4 font-medium block w-full whitespace-nowrap bg-transparent
                                                text-gray-500 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#"><i class='bx bxs-trash ltr:mr-2 rtl:ml-2 align-middle text-lg'></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Auto Close Behavior</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown">Default dropdown <i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-full absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Menu item</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Menu item</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown" data-tw-auto-close="outside">Clickable outside<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-full absolute bg-white z-50 float-right py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="javascript:void(0)">Menu item</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="javascript:void(0)">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown relative">
                                        <button type="button" class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                        " id="dropdownMenuButton1" data-bs-toggle="dropdown" data-tw-auto-close="inside">Clickable inside<i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-full absolute bg-white z-50 float-right py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                        <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="javascript:void(0)">Menu item</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="javascript:void(0)">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Dropup Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3">
                                     <div class="dropup relative">
                                        <button type="button" class="btn py-3 dropdown-toggle borde shadow-md shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 border-sky-500 text-white font-medium leading-tight hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30
                                       " id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropup  <i class="mdi mdi-chevron-up ml-1"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropup relative">
                                        <button type="button" class="btn border-transparent flex items-center shadow-md shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 p-0 align-middle text-white hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30"><span class="px-3">Dropup</span>
                                            <i class="bx bx-chevron-up bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Dropstart Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-3">
                                    <div class="dropstart relative">
                                        <button type="button" class="btn py-3 dropdown-toggle borde shadow-md shadow-sky-100 bg-sky-500 border-sky-500 dark:shadow-zinc-600 text-white font-medium leading-tight hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30
                                        focus:outline-none transition duration-150 ease-in-out" id="dropdownMenuButton1" data-bs-toggle="dropdown"><i class="mdi mdi-chevron-left mr-1"></i> Dropstart</button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropstart relative">
                                        <button type="button" class="btn border-transparent flex items-center shadow-md shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 p-0 align-middle text-white focus:ring focus:ring-gray-50 dark:focus:ring-sky-500/30">
                                            <i class="bx bx-chevron-left bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                            <span class="px-3">Dropstart</span>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Dropend Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3">
                                     <div class="dropend relative">
                                        <button type="button" class="btn py-3 dropdown-toggle borde shadow-md shadow-sky-100 bg-sky-500 border-sky-500 dark:shadow-zinc-600 text-white font-medium leading-tight hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30
                                        focus:outline-none transition duration-150 ease-in-out" id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropend   <i class="mdi mdi-chevron-right ml-1"></i></button>
                                    
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenuButton1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropend relative">
                                        <button type="button" class="btn flex items-center border-transparent bg-sky-500 shadow-md shadow-sky-100 dark:shadow-zinc-600 p-0 align-middle text-white focus:ring focus:ring-gray-50 dark:focus:ring-sky-500/40 "><span class="px-3">Dropend </span>
                                            <i class="bx bx-chevron-right bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle dropdown-toggle focus-visible:border-3 focus-visible:border-sky-500/10" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                            <li><a
                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                            </li>
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
@endsection