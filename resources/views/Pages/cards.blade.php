@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Cards</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Cards</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img class="rounded" src="assets/images/small/img-1.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="text-13 text-gray-500 dark:text-zinc-100">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    <div class="mt-6">
                                        <a href="" class="btn border-transparent bg-violet-500 text-white py-2.5 shadow-md shadow-violet-200 dark:shadow-zinc-600">Button</a>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img class="rounded" src="assets/images/small/img-2.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="card-text text-gray-600 dark:text-zinc-100">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                </div>
                                <div class="flex justify-center">
                                    <ul class="bg-white rounded-none w-full text-gray-900 dark:bg-zinc-800">
                                        <li class="px-6 py-3 border-t border-gray-50 w-full text-gray-600 dark:border-zinc-600 dark:text-zinc-100">Cras justo odio</li>
                                        <li class="px-6 py-3 border-t border-b border-gray-50 w-full text-gray-600 dark:border-zinc-600 dark:text-zinc-100">Dapibus ac facilisis in</li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <a href="javascript: void(0);" class="card-link text-violet-500">Card link</a>
                                    <a href="javascript: void(0);" class="card-link ml-5 text-violet-500">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img class="rounded" src="assets/images/small/img-1.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="text-13 text-gray-500 dark:text-zinc-100">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="card-subtitle text-14 font-semibold text-gray-500">Support card subtitle</p>
                                </div>
                                <img class="rounded" src="assets/images/small/img-1.jpg" alt="">
                                <div class="card-body">
                                    <p class="text-13 text-gray-500 dark:text-zinc-100">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    
                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="card-link text-violet-500">Card link</a>
                                        <a href="javascript: void(0);" class="card-link ml-5 text-violet-500">Another link</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 lg:col-span-6">
                           <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Special title treatment</h6>
                                    <p class="card-text text-gray-600 dark:text-zinc-100">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="btn border-transparent bg-violet-500 block text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Go somewhere</a>
                                    </div>    
                                </div>
                           </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                           <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Special title treatment</h6>
                                    <p class="card-text text-gray-600 dark:text-zinc-100">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="btn border-transparent bg-violet-500 block text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Go somewhere</a>
                                    </div>    
                                </div>
                           </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                           <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-header border-b border-gray-50 p-5 dark:border-zinc-600">
                                    <h5 class="uppercase text-gray-600 dark:text-gray-100">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Special title treatment</h6>
                                    <p class="card-text text-gray-600 dark:text-zinc-100">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <div class="mt-6">
                                        <a href="javascript: void(0);" class="btn bg-violet-500 border-transparent text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Go somewhere</a>
                                    </div>    
                                </div>
                           </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                           <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-header border-b border-gray-50 p-5 dark:border-zinc-600">
                                    <p class="text-gray-600 text-sm dark:text-gray-100">Quote</p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-gray-600 dark:text-zinc-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer mt-3 text-xs text-gray-500 dark:text-zinc-100">
                                        — &nbsp; Someone famous in <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </div>
                           </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                           <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-header border-b p-5 border-gray-50 dark:border-zinc-600">
                                    <h6 class="uppercase text-gray-600 font-normal dark:text-gray-100">Featured</h6>
                                </div>
                                <div class="card-body border-b border-gray-50 dark:border-zinc-600">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Special title treatment</h6>
                                    <p class="card-text text-gray-600 dark:text-zinc-100">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <div class="mt-6">
                                        <a href="javascript: void(0);" class="btn border-transparent bg-violet-500 text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Go somewhere</a>
                                    </div>    
                                </div>
                                <div class="card-footer p-5">
                                    <p class="text-gray-500 dark:text-zinc-100">2 days ago</p>
                                </div>
                           </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img class="rounded" src="assets/images/small/img-5.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="text-13 text-gray-500 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="text-xs text-gray-500 mt-5 dark:text-zinc-100">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                    <p class="text-13 text-gray-500 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="text-xs text-gray-500 mt-5 dark:text-zinc-100">Last updated 3 mins ago</p>
                                </div>
                                <img class="rounded rounded-t-none" src="assets/images/small/img-5.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card relative dark:bg-zinc-800 dark:border-zinc-600">
                                <img class="rounded rounded-t-none" src="assets/images/small/img-6.jpg" alt="">
                                <div class="bg-overlay absolute inset-0 p-5">
                                    <h6 class="card-title text-white dark:text-gray-100">Card title</h6>
                                    <p class="text-white mt-2 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="text-white mt-4 text-xs dark:text-zinc-100">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="grid grid-cols-12 items-center">
                                    <div class="col-span-4">
                                        <img src="assets/images/small/img-2.jpg" alt="" class="rounded rounded-r-none">
                                    </div>
                                    <div class="col-span-8">
                                        <div class="card-body">
                                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                            <p class="card-text mt-2 text-gray-600 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                            <div class="mt-4">
                                                <p class="text-gray-500 text-xs dark:text-zinc-100">Last updated 3 mins ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="grid grid-cols-12 items-center">
                                    <div class="col-span-8">
                                        <div class="card-body">
                                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                            <p class="card-text mt-2 text-gray-600 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                            <div class="mt-4">
                                                <p class="text-gray-500 text-xs dark:text-zinc-100">Last updated 3 mins ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <img src="assets/images/small/img-3.jpg" alt="" class="rounded rounded-l-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-violet-500 border-violet-500">
                                <h5 class="mb-3 text-white text-17">Primary Card</h5>
                                <p class="text-white/60">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-green-600 border-green-600">
                                <h5 class="mb-3 text-white text-17">Success Card</h5>
                                <p class="text-white/60">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-sky-500 border-sky-500">
                                <h5 class="mb-3 text-white text-17">Info Card</h5>
                                <p class="text-white/60">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-yellow-500 border-yellow-500">
                                <h5 class="mb-3 text-white text-17"><i class="mdi mdi-alert-outline mr-3"></i> Warning Card </h5>
                                <p class="text-white/60">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-red-400 border-red-400">
                                <h5 class="mb-3 text-white text-17"><i class="mdi mdi-block-helper mr-3"></i>Danger Card</h5>
                                <p class="text-white/60">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card p-5 rounded bg-zinc-800 border-zinc-800">
                                <h5 class="mb-3 text-white text-17"><i class="mdi mdi-alert-circle-outline mr-3"></i> Dark Card</h5>
                                <p class="text-white/90">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-violet-500 dark:bg-zinc-800">
                                <div class="p-5 border-b border-violet-500">
                                    <h5 class="text-violet-500 text-17"> Primary outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-red-400 dark:bg-zinc-800">
                                <div class="p-5 border-b border-red-400">
                                    <h5 class="text-red-400 text-17">Danger outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-green-500 dark:bg-zinc-800">
                                <div class="p-5 border-b border-green-500">
                                    <h5 class="text-green-500 text-17">Success outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-yellow-500 dark:bg-zinc-800">
                                <div class="p-5 border-b border-yellow-500">
                                    <h5 class="text-yellow-500 text-17">Warning outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-sky-500 dark:bg-zinc-800">
                                <div class="p-5 border-b border-sky-500">
                                    <h5 class="text-sky-500 text-17">Info outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4">
                            <div class="card border-gray-500 dark:bg-zinc-800">
                                <div class="p-5 border-b border-gray-500">
                                    <h5 class="text-gray-500 text-17">Secondary outline Card</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">card title</h6>
                                    <p class="text-gray-700 mt-2 dark:text-zinc-100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end grid -->

                <div class="card-group">
                    <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12">
                            <h4 class="mt-2 mb-5 text-gray-700">Card Groups</h4>
                        </div>
                    </div>
                    <!-- end grid -->

                    <!-- start grid -->
                    <div class="grid grid-cols-1 xl:grid-cols-3">
                        <div class="card mb-5 xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-4.jpg" alt="" >
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This is a longer card with supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card xl:border-l-0 mb-5 xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-5.jpg" alt="" >
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="card xl:border-l-0 mb-5 xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-6.jpg" alt="" >
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end grid -->
                </div>

                 <div class="card-group mb-5">
                    <!-- start grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
                        <div class="col-span-12">
                            <h4 class="mt-2 mb-5 text-gray-700 dark:text-gray-100">Cards Masonry</h4>
                        </div>
                    </div>
                    <!-- end grid -->

                    <!-- start grid -->
                    <div class="columns-1 xl:columns-3 gap-5">

                        <!-- 1 -->
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-3.jpg" alt="" >
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title that wraps to a new line</h6>
                                <p class="card-text text-gray-700 dark:text-zinc-100">This is a longer card with supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="card mt-5 dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="border-l-4 rounded border-gray-100 dark:border-gray-700">
                                    <div class="py-2.5 px-5">
                                        <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <p class="card-text">
                                            <small class="text-gray-500 dark:text-gray-100"> — &nbsp; Someone famous in Source Title</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="card mt-5 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-5.jpg" alt="" >
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="card p-4 border-opacity-50 rounded bg-violet-500 border-violet-500 mt-5 text-center ">
                            <p class="text-white dark:text-zinc-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere.</p>
                            <p class="card-text mt-3">
                                <small class="text-gray-100"> — &nbsp; Someone famous in Source Title</small>
                            </p>
                        </div>

                        <div class="card p-4 border-opacity-50 rounded border mt-5 mb-5 xl:mb-10 dark:bg-zinc-800 dark:border-zinc-600">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                            <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This is a longer card with supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                            <p class="card-text">
                                <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                            </p>        
                        </div>

                        <!-- 3 -->
                        <div class="card mt-5 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="assets/images/small/img-7.jpg" alt="" >
                        </div>

                        <!-- 6 -->
                        <div class="card mt-5 dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                               <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This is a longer card with supporting text below as
                                        a natural lead-in to additional content. This content is a little
                                        bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>        
                            </div>
                        </div>

                        <div class="card mt-5 dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Card title</h6>
                                <p class="card-text mb-4 text-gray-700 dark:text-zinc-100">This is a longer card with supporting text below as
                                        a natural lead-in to additional content. This content is a little
                                        bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>        
                            </div>
                        </div>

                        
                    </div>

  
                    <!-- end grid -->
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