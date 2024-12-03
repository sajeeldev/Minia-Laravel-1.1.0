@extends('Layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Avatars</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Avatars</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Avatar group stacked bottom to top</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 space-y-5 lg:space-y-0 items-center">
                                <div class="col-span-12 lg:col-span-2 xl:col-span-2">
                                    <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 xl:col-span-2">
                                    <div class="flex -space-x-1">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 xl:col-span-2">
                                    <div class="flex -space-x-1">
                                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4 xl:col-span-2">
                                    <div class="flex -space-x-1">
                                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Circular avatars</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-16 items-center">
                                <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Rounded avatars</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-16 items-center">
                                <img class="inline-block h-6 w-6 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                <img class="inline-block h-8 w-8 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                <img class="inline-block h-10 w-10 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                <img class="inline-block h-14 w-14 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                <img class="inline-block h-20 w-20 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Avatars with notification</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-16 items-center">
                                <div class="relative">
                                    <img class="inline-block h-14 w-14 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-1.jpg" alt="">
                                    <div class="rounded-full h-3 w-3 bg-sky-500 absolute inline-flex ring ring-white -right-1 -top-1"></div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-2.jpg" alt="">
                                    <div class="rounded-full h-3 w-3 bg-sky-500 absolute inline-flex ring ring-white right-0 top-0"></div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block h-14 w-14 rounded ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-3.jpg" alt="">
                                    <div class="rounded-full h-3 w-3 bg-sky-500 absolute inline-flex ring ring-white -right-1 -bottom-1"></div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white dark:ring-zinc-500" src="assets/images/users/avatar-4.jpg" alt="">
                                    <div class="rounded-full h-3 w-3 bg-sky-500 absolute inline-flex ring ring-white right-0 bottom-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Circular avatars with placeholder icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-16 items-center">
                                <div class="relative">
                                    <div class="bg-gray-100 h-6 w-6 rounded-full text-center"><i class="mdi mdi-account text-16"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 h-8 w-8 rounded-full text-center"><i class="mdi mdi-account text-19 leading-relaxed"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 h-10 w-10 rounded-full text-center"><i class="mdi mdi-account text-22 leading-[1.8]"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 h-14 w-14 rounded-full text-center"><i class="mdi mdi-account text-3xl leading-[1.8]"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 h-20 w-20 rounded-full text-center"><i class="mdi mdi-account text-5xl leading-[1.6]"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Circular avatars with placeholder icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap gap-16 items-center">
                                <div class="relative">
                                    <div class="bg-gray-100 text-gray-700 h-8 w-8 rounded-full text-center font-medium leading-[2.2]">TW</div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 text-gray-700 h-10 w-10 rounded-full text-center font-medium leading-[2.9]">TW</div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 text-gray-700 h-14 w-14 rounded-full text-center text-xl font-medium leading-[2.8]">TW</div>
                                </div>
                                <div class="relative">
                                    <div class="bg-gray-100 text-gray-700 h-20 w-20 rounded-full text-center text-3xl font-medium leading-[2.7]">TW</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Media Object</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-start space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="assets/images/users/avatar-5.jpg" alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Basic</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="assets/images/users/avatar-6.jpg" alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Aligned to center</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex items-end space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="assets/images/users/avatar-7.jpg" alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Aligned to bottom</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex space-x-4">
                                    <img class="w-auto h-20 rounded rtl:ml-3" src="assets/images/users/avatar-8.jpg" alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Stretched to fit</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex space-x-4">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Media on right</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                    <img class="w-auto h-14 rounded rtl:ml-3" src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Nested</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-start space-x-4">
                                    <img class="w-auto h-16 rounded rtl:ml-3" src="assets/images/users/avatar-5.jpg" alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-17 text-gray-700 dark:text-gray-100">Basic</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                        
                                        <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                        
                                        <div class="flex items-center space-x-4">
                                            <img class="w-10 h-10 rounded rtl:ml-3" src="assets/images/users/avatar-7.jpg" alt="">
                                            <div class="font-medium dark:text-white">
                                                <div class="text-17 text-gray-700 dark:text-gray-100">Item 1</div>
                                                <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                            </div>
                                        </div>

                                        <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                        
                                        <div class="flex items-center space-x-4">
                                            <img class="w-10 h-10 rounded rtl:ml-3" src="assets/images/users/avatar-8.jpg" alt="">
                                            <div class="font-medium dark:text-white">
                                                <div class="text-17 text-gray-700 dark:text-gray-100">Item 2</div>
                                                <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                            </div>
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
@endsection