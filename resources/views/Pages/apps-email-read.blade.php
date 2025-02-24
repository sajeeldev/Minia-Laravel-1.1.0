@extends('Layouts.layout')
@section('content')
        <div class="main-content">
            <div class="page-content dark:bg-zinc-700">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Read Email</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Read Email</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-12 gap-5 mb-5 ">
                        <div class="col-span-12 lg:col-span-2">
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
                        <div class="col-span-12 lg:col-span-10">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
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
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 
                                                    bg-transparent text-gray-700 " href="#">Social</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
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
                                                    text-gray-700 hover:bg-gray-50/50" href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4">
                                    <div class="flex items-center mb-4">
                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                            <img class="rounded-full h-8 w-8" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                        </div>
                                        <div class="flex-grow">
                                            <h5 class="text-sm text-gray-700 mb-0 dark:text-gray-100">Humberto D. Champion</h5>
                                            <small class="text-gray-500 dark:text-zinc-100">support@domain.com</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-16 text-gray-600 mb-2 dark:text-gray-100">This Week's Top Stories</h4>
                                        <p class="text-gray-600 dark:text-zinc-100 mb-3">Dear Lorem Ipsum,</p>
                                        <p class="text-gray-600 dark:text-zinc-100 mb-3">Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus convallis.</p>
                                        <p class="text-gray-600 dark:text-zinc-100 mb-3">Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit amet lorem.</p>
                                        <p class="text-gray-600 dark:text-zinc-100 mb-4">Sincerly,</p>
                                    </div>
                                    <hr class="pb-4 border-gray-50 dark:border-zinc-600">
                                    <div class="flex flex-wrap gap-4">
                                        <div class="card dark:border-zinc-600">
                                            <img class="h-32 " src="assets/images/small/img-3.jpg" alt="">
                                            <div class="py-2 text-center">
                                                <a download="img-3" href="assets/images/small/img-3.jpg" class="font-medium text-violet-500 dark:text-gray-100">Download</a>
                                            </div>
                                        </div>
                                        <div class="card dark:border-zinc-600">
                                            <img class="h-32" src="assets/images/small/img-4.jpg" alt="">
                                            <div class="py-2 text-center">
                                                <a download="img-4" href="assets/images/small/img-4.jpg" class="font-medium text-violet-500 dark:text-gray-100">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript: void(0);" class="btn bg-gray-500 border-transparent mt-4 text-white shadow-md shadow-gray-200 focus:ring focus:ring-gray-100 dark:shadow-zinc-600"><i class="mdi mdi-reply ltr:mr-1 rtl:ml-1"></i> Reply</a>
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