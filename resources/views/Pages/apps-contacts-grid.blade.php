@extends('Layouts.layout')
@section('content')
        <div class="main-content ">
            <div class="page-content dark:bg-zinc-700 min-h-screen">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">User Grid</h4>
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                    <li class="inline-flex items-center">
                                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                            Apps
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">User Grid</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-1">
                        <div class="grid grid-cols-12 items-stretch mb-4">
                            <div class="col-span-12 lg:col-span-6 self-center">
                                <h5 class="text-15 text-gray-600 dark:text-gray-100">Contact List <span class="text-gray-500 font-normal dark:text-zinc-100 ml-2">(834)</span></h5>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                 <div class=" flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                                    <div>
                                        <ul class="flex flex-wrap">
                                            <li class="nav-item ">
                                                <a class="nav-link py-2 px-4 text-gray-600 text-16 dark:text-gray-100" href="apps-contacts-list.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List"><i class="bx bx-list-ul"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active py-2 px-4 bg-violet-500 rounded text-white text-16" href="apps-contacts-grid.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#" class="btn bg-gray-50 border-gray-50 dark:bg-zinc-800 dark:text-gray-100 dark:border-zinc-600"><i class="bx bx-plus me-1"></i> Add New</a>
                                    </div>
                                    <div>
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left ltr:-right-10 rtl:-left-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-800 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
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
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Phyllis Gatlin</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">James Nix</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Darlene Smith</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1234" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left ltr:-right-10 rtl:-left-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1234">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <div class="h-20 w-20 bg-gray-50/30 rounded-full p-1 mx-auto text-center">
                                                <i class="bx bxs-user-circle text-6xl leading-tight text-gray-50"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">William Swift</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Backend Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <div class="h-20 w-20 bg-gray-50/30 rounded-full p-1 mx-auto text-center">
                                                <i class="bx bxs-user-circle text-6xl leading-tight text-gray-50"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Kevin West</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Tommy Hayes</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Backend Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Diana Owens</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                    <div class="card-body">
                                        <div class="dropstart text-end relative">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left ltr:-right-10 rtl:-left-10 top-6 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700 dark:border-zinc-600" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="h-20 rounded-full mx-auto ring-1 ring-gray-100 p-1">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-16 text-gray-700 mb-1"><a href="#" class="dark:text-gray-100">Paul Sanchez</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-2">Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex rounded-md w-full" role="group">
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 rounded-r-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                            Profile
                                        </button>
                                        <button type="button" class="btn px-4 py-2 text-sm w-full border rounded border-gray-50 border-l-0 rounded-l-none hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                             Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="flex items-center place-content-between mt-4 mb-16">
                            <div class="mt-4 mb-2">
                                <p class="text-gray-600 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>
                            </div>
                            <div class="flex mt-2.5">
                                <nav aria-label="Page navigation example border">
                                     <ul class="flex list-style-none">
                                        <li class="border ltr:rounded-l rtl:rounded-r border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                            <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none" 
                                            href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                        <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">1</a></li>
                                        <li class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-500 dark:bg-zinc-800">
                                            <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none transition-all duration-300"
                                            href="#">2</a></li>
                                        <li class="border border-l-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">3</a></li>
                                        <li class="border ltr:border-l-0 rtl:border-r border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">4</a></li>
                                        <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">5</a></li>
                                        <li class="border ltr:rounded-r rtl:rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                            
                                    </ul>
                                </nav>
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