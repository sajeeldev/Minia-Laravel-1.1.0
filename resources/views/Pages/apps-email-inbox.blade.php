@extends('Layouts.layout')
@section('content')
        <div class="main-content">
            <div class="page-content dark:bg-zinc-700">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Email Inbox</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Email Inbox</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-12 gap-5 mb-5 ">
                        <div class="col-span-12 xl:col-span-2">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <button type="button" class="btn w-full bg-red-500 border-transparent text-white shadow-md shadow-red-200 mb-4 dark:shadow-zinc-600" data-bs-toggle="modal" data-bs-target="#composemodal">
                                        Compose
                                    </button>
                                    <div class="mail-list mt-4">
                                        <a href="#" class="active block px-1 py-2 text-red-500 font-medium"><i class="mdi mdi-email-outline ltr:mr-2 rtl:ml-2 text-base"></i> Inbox <span class="ms-1 ltr:float-right rtl:float-left">(18)</span></a>
                                        <a href="#" class="block px-1 py-2 text-gray-500 dark:text-zinc-100"><i class="mdi mdi-star-outline ltr:mr-2 rtl:ml-2 text-base"></i>Starred</a>
                                        <a href="#" class="block px-1 py-2 text-gray-500 dark:text-zinc-100"><i class="mdi mdi-diamond-stone ltr:mr-2 rtl:ml-2 text-base"></i>Important</a>
                                        <a href="#" class="block px-1 py-2 text-gray-500 dark:text-zinc-100"><i class="mdi mdi-file-outline ltr:mr-2 rtl:ml-2 text-base"></i>Draft</a>
                                        <a href="#" class="block px-1 py-2 text-gray-500 dark:text-zinc-100"><i class="mdi mdi-email-check-outline ltr:mr-2 rtl:ml-2 text-base"></i>Sent Mail</a>
                                        <a href="#" class="block px-1 py-2 text-gray-500 dark:text-zinc-100"><i class="mdi mdi-trash-can-outline ltr:mr-2 rtl:ml-2 text-base"></i>Trash</a>
                                    </div>

                                    <div>
                                        <h6 class="mt-5 text-gray-700 dark:text-white">Labels</h6>
                                        <div class="mail-list mt-1">
                                            <a href="#" class="block px-1 py-2 dark:text-zinc-100"><span class="mdi mdi-arrow-right-drop-circle text-sky-500 ltr:float-right rtl:float-left"></span>Theme Support</a>
                                            <a href="#" class="block px-1 py-2 dark:text-zinc-100"><span class="mdi mdi-arrow-right-drop-circle text-yellow-500 ltr:float-right rtl:float-left"></span>Freelance</a>
                                            <a href="#" class="block px-1 py-2 dark:text-zinc-100"><span class="mdi mdi-arrow-right-drop-circle text-violet-500 ltr:float-right rtl:float-left"></span>Social</a>
                                            <a href="#" class="block px-1 py-2 dark:text-zinc-100"><span class="mdi mdi-arrow-right-drop-circle text-red-500 ltr:float-right rtl:float-left"></span>Friends</a>
                                            <a href="#" class="block px-1 py-2 dark:text-zinc-100"><span class="mdi mdi-arrow-right-drop-circle text-green-500 ltr:float-right rtl:float-left"></span>Family</a>
                                        </div>
                                    </div>

                                     <div>
                                        <h6 class="mt-5 mb-5 text-gray-700 dark:text-gray-100">Chat</h6>
                                        <div class="mail-list">
                                            <a href="#" class="flex items-start mb-4">
                                                <img class="flex-shrink-0 ltr:mr-4 rtl:ml-4 rounded-full h-9 w-9" src="assets/images/users/avatar-2.jpg" alt="">
                                                <div class="flex-grow chat-user-box">
                                                    <p class="text-xs m-0 text-black font-medium dark:text-gray-100">Scott Median</p>
                                                    <p class="text-xs text-gray-500 dark:text-zinc-100 ">Hello</p>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-start mb-4">
                                                <img class="flex-shrink-0 ltr:mr-4 rtl:ml-4 rounded-full h-9 w-9" src="assets/images/users/avatar-3.jpg" alt="">
                                                <div class="flex-grow chat-user-box">
                                                    <p class="text-xs m-0 text-black font-medium dark:text-gray-100">Julian Rosa</p>
                                                    <p class="text-xs text-gray-500 dark:text-zinc-100">What about our next..</p>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-start mb-4">
                                                <img class="flex-shrink-0 ltr:mr-4 rtl:ml-4 rounded-full h-9 w-9" src="assets/images/users/avatar-4.jpg" alt="">
                                                <div class="flex-grow chat-user-box">
                                                    <p class="text-xs m-0 text-black font-medium dark:text-gray-100">David Medina</p>
                                                    <p class="text-xs text-gray-500 dark:text-zinc-100">Yeah everything is fine</p>
                                                </div>
                                            </a>  
                                            <a href="#" class="flex items-start">
                                                <img class="flex-shrink-0 ltr:mr-4 rtl:ml-4 rounded-full h-9 w-9" src="assets/images/users/avatar-5.jpg" alt="">
                                                <div class="flex-grow chat-user-box">
                                                    <p class="text-xs m-0 text-black font-medium dark:text-gray-100">Jay Baker</p>
                                                    <p class="text-xs text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                                </div>
                                            </a>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-10">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600 overflow-hidden">
                                <div class="flex flex-wrap p-4 gap-2">
                                    <div class="inline-flex" role="group">
                                        <button type="button" class="px-3 py-2 text-sm font-medium text-white bg-violet-500 border border-violet-500 ltr:rounded-l rtl:rounded-r focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                            <i class="fa fa-inbox"></i>
                                        </button>
                                        <button type="button" class="px-3 py-2 text-sm font-medium text-white bg-violet-500 border-t border-b border-violet-500 focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                            <i class="fa fa-exclamation-circle"></i>
                                        </button>
                                        <button type="button" class="px-3 py-2 text-sm font-medium text-white bg-violet-500 border border-violet-500 ltr:rounded-r rtl:rounded-l focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>

                                    <div>
                                        <div class="dropdown relative">
                                            <button type="button" class="btn bg-violet-500 border-violet-500 text-white dropdown-toggle focus:ring focus:ring-violet-50 focus:bg-violet-700 dark:focus:ring-violet-500/40" id="dropdownMenu1" data-bs-toggle="dropdown">
                                                <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left dark:bg-zinc-700
                                                rounded-lg shadow-md hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50"
                                                    href="#">Updates</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                    bg-transparent text-gray-700 dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50" href="#">Social</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                    text-gray-700 dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50" href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="dropdown relative">
                                            <button type="button" class="btn bg-violet-500 border-violet-500 text-white dropdown-toggle focus:ring focus:ring-violet-50 focus:bg-violet-700 dark:focus:ring-violet-500/40" id="dropdownMenu2" data-bs-toggle="dropdown">
                                                <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left dark:bg-zinc-700
                                                rounded-lg shadow-md hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu2">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50"
                                                    href="#">Updates</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50"
                                                    bg-transparent text-gray-700 " href="#">Social</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50"
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="dropdown relative">
                                            <button type="button" class="btn bg-violet-500 border-violet-500 text-white dropdown-toggle focus:ring focus:ring-violet-50 focus:bg-violet-700 dark:focus:ring-violet-500/40" id="dropdownMenu3" data-bs-toggle="dropdown">
                                                <span>More <i class="mdi mdi-dots-vertical ltr:ml-2 rtl:ltr:mr-2 rtl:ml-2"></i></span>
                                            </button>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left dark:bg-zinc-700
                                                rounded-lg shadow-md hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu3">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/50"
                                                    href="#">Updates</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 
                                                    bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Social</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50 
                                                    text-gray-700 hover:bg-gray-50/50 " href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <ul>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 checked:bg-violet-500 rounded-sm focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Peter, me (3)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 truncate md:text-clip">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Hello – <span>Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span></a>
                                                        </div>
                                                         <div class="col-span-2">
                                                             <div class="ml-auto text-end text-gray-700 dark:text-zinc-100">Mar 6</div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">me, Susanna (7)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-yellow-500 text-white mr-1 text-11 px-1 py-[1px] rounded">Freelance</span>
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Since you asked... and i'm inconceivably bored at the train station –</span><span>Alright thanks. I'll have to re-book that somehow, i'll... get back to you.</span> </a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 6</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Web Support Dennis</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Re: New mail settings – <span>Will you answer him asap?</span></a>
                                                        </div>
                                                         <div class="col-span-2">
                                                             <div class="ml-auto text-end text-gray-700 dark:text-zinc-100">Mar 7</div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">me, Peter (2)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-sky-500 text-white mr-1 text-11 px-1 py-[1px] rounded">Support</span>
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100"></span>Off on Thursday - <span>Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 4 mar 2014 at 5:55pm</span> </a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 6</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Medium</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-violet-500 text-white mr-1 text-11 px-1.5 py-[1px] rounded">Social</span>
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">This Week's Top Stories –</span><span>Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 6</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Death to Stock</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Montly High-Res Photos – <span>To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span></a>
                                                        </div>
                                                         <div class="col-span-2">
                                                             <div class="ml-auto text-end text-gray-700 dark:text-zinc-100">Feb 28</div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50 dark:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-black font-medium dark:text-zinc-100">Randy, me (5)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-green-500 text-white mr-1 text-11 px-1.5 py-[1px] rounded">Family</span>
                                                            <a href="#" class=" text-black font-medium dark:text-zinc-100">Last pic over my village –</span><span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-black font-medium text-end dark:text-zinc-100">5:01 am</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Andrew Zimmer</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Mochila Beta: Subscription Confirmed –</span><span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 8</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Infinity HR</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Sveriges Hetaste sommarjobb –</span><span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 8</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">me, Susanna (7)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-red-500 text-white mr-1 text-11 px-1 py-[1px] rounded">Friends</span>
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Weekend on Revibe –</span><span>Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span> </a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Erik, me (5)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Regarding our meeting –</span><span>That's great, see you on Thursday!</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Mar 8</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">me, Susanna (7)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-violet-500 text-white mr-1 text-11 px-1 py-[1px] rounded">Social</span>
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Task assigned: Clone ARP's website</span><span>You have been assigned a task by Alex@Work on the board Web.</span> </a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Tobias Berggren</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Let's go fishing! – </span><span>Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Charukaw, me (7)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Hey man – </span><span>Nah man sorry i don't. Should i get it?</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50 dark:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-black font-medium dark:text-zinc-100">me, Peter (5)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <span class="bg-sky-500 text-white mr-1 text-11 px-1.5 py-[1px] rounded">Support</span>
                                                            <a href="#" class=" text-black font-medium dark:text-zinc-100">Home again! – </span><span>That's just perfect! See you tomorrow.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-black font-medium text-end dark:text-zinc-100">Feb 21</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Stack Exchange</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">1 new items in your Stackexchange inbox</span><span>The following items were added to your Stack Exchange global inbox since you last checked it.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">Google Drive Team</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">You can now use your storage in Google Drive –</span><span>Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-50/50 px-4 py-3.5 transition-all duration-200 dark:hover:bg-zinc-600/50">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2 xl:col-span-1">
                                                    <div class="flex items-center">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                        <span class="far fa-star ltr:ml-4 rtl:mr-4 text-gray-700 dark:text-zinc-100"></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <a href="#" class="text-gray-500 dark:text-zinc-100">me, Susanna (11)</a>
                                                </div>
                                                <div class="col-span-9">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-10 overflow-hidden whitespace-nowrap">
                                                            <a href="#" class=" text-gray-500 dark:text-zinc-100">Train/Bus – </span><span>Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span></a>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="ml-auto text-gray-700 text-end dark:text-zinc-100">Feb 27</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-7">
                                    <p class="text-gray-500 dark:text-gray-200">Showing 1 - 20 of 1,524</p>
                                </div>
                                <div class="col-span-5">
                                    <div class="inline-flex ltr:float-right rtl:float-left">
                                        <button type="button" class="btn py-1 px-2 text-13 text-white bg-green-500 border-green-500 ltr:rounded-r-none rtl:rounded-l-none focus:bg-green-600 focus:ring focus:ring-green-500/30"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn py-1 px-2 text-13 text-white bg-green-500 border-green-500 ltr:rounded-l-none rtl:rounded-r-none focus:bg-green-600 focus:ring focus:ring-green-500/30"><i class="fa fa-chevron-right"></i></button>
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