@extends('Layouts.layout')
@section('content')
        <div class="main-content">
            
            <div class="page-content min-h-screen dark:bg-zinc-700">

                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Chat</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Chat</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-1 xl:grid-cols-12 gap-2 mb-6 ">
                        <div class="col-span-12 xl:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-0">
                                <div class="p-0">
                                    <div class="flex border-b border-gray-100 dark:border-zinc-600 px-6 py-4">
                                        <div class="self-center">
                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="w-8 h-8 rounded-full">
                                        </div>
                                        <div class="flex-grow">
                                            <h6 class=" mb-1 ltr:ml-2 rtl:mr-2">
                                                <a href="#" class="text-16 align-middle dark:text-gray-100">Shawn 
                                                    <i class="mdi mdi-circle text-green-500 align-middle text-10 ml-1"></i>
                                                </a>
                                                <p class="text-gray-300 font-normal mt-1 mb-0">Available</p>
                                            </h6>
                                        </div>
                                        <div>
                                            <div class="dropstart relative flex-shrink-0">
                                                <button class="btn border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-horizontal-rounded text-2xl"></i>
                                                </button>
                                                <ul class=" dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-6 -right-5 dark:bg-zinc-700
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="search-box relative">
                                            <input type="text" class="form-control rounded-sm border border-gray-50 py-1.5 px-8 w-full placeholder:text-gray-300 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="Search...">
                                            <i class="bx bx-search search-icon absolute left-2 top-1.5 text-lg text-gray-600"></i>
                                        </div>
                                    </div>
                                    <div class="nav-tabs chart-tabpill">
                                        <div class="px-2 py-1 bg-gray-50/50 dark:bg-zinc-700">
                                            <ul class="nav text-sm font-medium text-center text-gray-700 flex ">
                                                <li class="w-full">
                                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="chat" class="inline-block w-full p-2 active" aria-current="page">Chat</a>
                                                </li>
                                                <li class="w-full">
                                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="groups" class="inline-block w-full p-2">Groups</a>
                                                </li>
                                                <li class="w-full">
                                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="contacts" class="inline-block w-full p-2">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="vertical-menu w-full tab-pane block" id="chat">
                                                <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                    <div class="px-3">
                                                        <h5 class="text-sm text-gray-700 mb-3 dark:text-gray-100">Recent</h5>
                                                    </div>
                                                    <ul class="divide-y divide-gray-50 dark:divide-zinc-600 whitespace-nowrap">
                                                        <li class="active bg-violet-50/50 px-4 py-3.5 dark:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-1">Jennie Sherlock</h5>
                                                                        <p class="mb-0 text-gray-400">Hey! there I'm available</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">02 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> S </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-500 dark:text-gray-100 mb-1">Stacie Dube</h5>
                                                                        <p class="mb-0 text-gray-700 dark:text-gray-100 font-semibold">I've finished it! See you so</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-gray-100 font-semibold">10 min</div>
                                                                    </div>
                                                                    <div class="absolute ltr:right-1.5 rtl:left-1.5 top-5">
                                                                        <span class="px-2 py-0.5 text-11 text-white font-semibold bg-red-400 rounded-full">1</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> J </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 font-semibold mb-1">James Lee</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100 font-semibold">10 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Ronald Tucker</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Dennis Stewart</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="vertical-menu w-full tab-pane hidden" id="groups">
                                                <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                    <div class="px-3">
                                                        <h5 class="text-sm text-gray-700 mb-3 dark:text-gray-100">Recent</h5>
                                                    </div>
                                                    <ul class="divide-y divide-gray-50 dark:divide-zinc-600 whitespace-nowrap">
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> S </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-500 dark:text-gray-100 mb-1">Stacie Dube</h5>
                                                                        <p class="mb-0 text-gray-700 dark:text-gray-100 font-semibold">I've finished it! See you so</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-gray-100 font-semibold">10 min</div>
                                                                    </div>
                                                                    <div class="absolute ltr:right-1.5 rtl:left-1.5 top-5">
                                                                        <span class="px-2 py-0.5 text-11 text-white font-semibold bg-red-400 rounded-full">1</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="active bg-violet-50/50 px-4 py-3.5 dark:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-1">Jennie Sherlock</h5>
                                                                        <p class="mb-0 text-gray-400">Hey! there I'm available</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">02 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Dennis Stewart</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> J </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 font-semibold mb-1">James Lee</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100 font-semibold">10 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Ronald Tucker</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="vertical-menu w-full tab-pane hidden" id="contacts">
                                                <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                    <div class="px-3">
                                                        <h5 class="text-sm text-gray-700 mb-3 dark:text-gray-100">Recent</h5>
                                                    </div>
                                                    <ul class="divide-y divide-gray-50 dark:divide-zinc-600 whitespace-nowrap">
                                                        <li class="active bg-violet-50/50 px-4 py-3.5 dark:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-1">Jennie Sherlock</h5>
                                                                        <p class="mb-0 text-gray-400">Hey! there I'm available</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">02 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> S </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-500 dark:text-gray-100 mb-1">Stacie Dube</h5>
                                                                        <p class="mb-0 text-gray-700 dark:text-gray-100 font-semibold">I've finished it! See you so</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-gray-100 font-semibold">10 min</div>
                                                                    </div>
                                                                    <div class="absolute ltr:right-1.5 rtl:left-1.5 top-5">
                                                                        <span class="px-2 py-0.5 text-11 text-white font-semibold bg-red-400 rounded-full">1</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                    <div class="text-center h-8 w-8 bg-violet-100 rounded-full">
                                                                            <span class="leading-[2.4] text-violet-500 font-medium"> J </span>
                                                                    </div>
                                                                        <span class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 font-semibold mb-1">James Lee</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100 font-semibold">10 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Ronald Tucker</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Dennis Stewart</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Katie Olson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">This theme is awesome!</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class=" px-4 py-3.5 hover:bg-violet-50/50 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                            <a href="#">
                                                                <div class="flex items-start relative">
                                                                    <div class="flex-shrink-0 self-center ltr:mr-4 rtl:ml-4 relative">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-8 w-8" alt="">
                                                                        <span class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow overflow-hidden">
                                                                        <h5 class="text-gray-700 dark:text-gray-100 text-sm mb-1">Marshall Wilson</h5>
                                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice to meet you</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ">
                                                                        <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-9">
                            <div class="card mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="p-4 px-6 border-b border-gray-100 dark:border-zinc-600">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 avatar-sm ltr:mr-3 rtl:ml-3 d-sm-block d-none">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="h-8 w-8 rounded-full">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="text-sm mb-1"><a href="#" class="dark:text-gray-100">Jennie Sherlock</a></h5>
                                            <p class="text-gray-500 dark:text-zinc-100 mb-0">Online</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="py-4 px-2 h-[570px]" data-simplebar>
                                    <li class="chat-day-title text-center relative mb-6"> 
                                        <span class="title bg-white px-8 py-1 z-40 relative text-gray-700 dark:bg-zinc-800 dark:text-gray-100">Today</span>
                                        <div class="absolute border-b w-full top-3 border-gray-50 dark:border-zinc-600"></div>
                                    </li>

                                    <li class="flex ml-5 mb-5">
                                        <div class="inline-block bg-violet-500 px-5 py-3 rounded-lg relative">
                                            <h5 class="text-13"><a href="#" class="text-white/50">Jennie Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                            <p class="mb-0 font-medium text-white mt-0.5">Good morning !</p>
                                            <span class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                        </div>
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:ml-2 rtl:mr-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="flex justify-end mr-5 mb-5">
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:mr-2 rtl:ml-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="inline-block bg-gray-50 px-5 py-3 rounded-lg relative dark:bg-zinc-700">
                                            <h5 class="text-13 "><span class="text-xs text-gray-500 mr-2 dark:text-zinc-100 ">10:00</span> <a href="#" class="text-gray-600 dark:text-zinc-100 ">Shawn</a> </h5>
                                            <p class="mb-0 font-medium text-gray-700 mt-0.5 dark:text-gray-100 ">Good morning !</p>
                                            <span class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                        </div>
                                    </li>

                                    <li class="flex ml-5 mb-3">
                                        <div class="inline-block bg-violet-500 px-5 py-3 rounded-lg relative">
                                            <h5 class="text-13"><a href="#" class="text-white/50 mr-2">Jennie Sherlock</a> <span class="text-xs text-white/50">10:04</span></h5>
                                            <p class="mb-0 font-medium text-white mt-0.5">Hello!</p>
                                            <span class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                        </div>
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:ml-2 rtl:mr-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="flex ml-5 mb-5">
                                        <div class="inline-block bg-violet-500 px-5 py-3 rounded-lg relative">
                                            <h5 class="text-13"><a href="#" class="text-white/50 mr-2">Jennie Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                            <p class="mb-0 font-medium text-white mt-0.5">What about our next meeting?</p>
                                            <span class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                        </div>
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:ml-2 rtl:mr-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="flex ml-5 mb-5">
                                        <div class="inline-block bg-violet-500 px-5 py-3 rounded-lg relative">
                                            <h5 class="text-13"><a href="#" class="text-white/50 mr-2">Jennie Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                            <p class="mb-0 font-medium text-white mt-0.5">Next meeting tomorrow 10.00AM</p>
                                            <span class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                        </div>
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:ml-2 rtl:mr-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="flex justify-end mr-5 mb-5">
                                        <div>
                                            <div class="dropdown flex-shrink-0">
                                                <button class="btn ltr:mr-2 rtl:ml-2 border-0 dropdown-toggle p-0 text-gray-400" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="bx bx-dots-vertical-rounded text-xl"></i>
                                                </button>
                                                <ul class="dropdown-menu w-36 absolute bg-white z-50 py-2 list-none text-left top-0 rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Add Contact</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="inline-block bg-gray-50 px-5 py-3 rounded-lg relative dark:bg-zinc-700">
                                            <h5 class="text-13 "><span class="text-xs text-gray-500 mr-2 dark:text-zinc-100 ">10:00</span> <a href="#" class="text-gray-600 dark:text-zinc-100 ">Shawn</a> </h5>
                                            <p class="mb-0 font-medium text-gray-700 mt-0.5 dark:text-gray-100 ">Wow that's great</p>
                                            <span class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                        </div>
                                    </li>

                                    <li class="flex ml-5 mb-5">
                                        <div class="inline-block bg-violet-500 px-5 py-3 rounded-lg relative">
                                            <h5 class="text-13"><a href="#" class="text-white/50 mr-2">Jennie Sherlock</a> <span class="text-xs text-white/50">10:09</span></h5>
                                            <p class="mb-0 font-medium text-white mt-0.5">img-1.jpg & img-2.jpg images for a New Projects</p>
                                            <span class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                        
                                            <ul class="flex mt-3 gap-4">
                                                <li>
                                                    <a class="inline-block m-1" href="">
                                                        <img src="assets/images/small/img-1.jpg" alt="" class="rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36 h-auto">
                                                    </a>                                                                  
                                                </li>

                                                <li>
                                                    <a class="inline-block m-1" href="">
                                                        <img src="assets/images/small/img-2.jpg" alt="" class="rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36 h-auto">
                                                    </a>                                                                 
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="p-3 border-t border-gray-100 dark:border-zinc-600">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-10 xl:col-span-11 ltr:pr-5 rtl:pl-5">
                                            <div class="position-relative">
                                                <input type="text" class="py-1.5 rounded border-gray-100 w-full placeholder:text-sm placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="Enter Message...">
                                            </div>
                                        </div>
                                        <div class="col-span-2 xl:col-span-1">
                                            <button type="submit" class="btn bg-violet-500 border-transparent text-white shadow-md shadow-violet-200 w-full focus:ring focus:ring-violet-200 dark:shadow-zinc-600"><span class="d-none d-sm-inline-block mr-2">Send</span> <i class="mdi mdi-send float-end ml-2"></i></button>
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