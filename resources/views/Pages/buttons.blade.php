@extends('Layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Buttons</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Buttons</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Default Buttons</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button" class="btn text-white bg-gray-500 border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button" class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button" class="btn text-white bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button" class="btn text-white bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button" class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button" class="btn text-white bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button" class="btn text-violet-500 border-0 group"> <span class="group-hover:border-b transition-all duration-100 ease-in-out group-hover:border-violet-500">Link</span></button>
                            <button type="button" class="btn text-black bg-gray-100 border-gray-100 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Outline Buttons</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn text-violet-500 hover:text-white border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:text-white focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button" class="btn text-gray-500 hover:text-white border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:text-white focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button" class="btn text-green-500 hover:text-white border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:text-white focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button" class="btn text-sky-500 hover:text-white border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:text-white focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button" class="btn text-yellow-500 hover:text-white border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:text-white focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button" class="btn text-red-500 hover:text-white border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:text-white focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button" class="btn text-neutral-500 hover:text-white border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:text-white focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button" class="btn text-black border-gray-100 hover:bg-gray-50/50 hover:border-gray-100 focus:bg-gray-100 focus:border-gray-100 focus:ring focus:ring-gray-500/10 active:bg-gray-100 active:border-gray-100 dark:text-gray-100 dark:hover:text-white dark:hover:border-zinc-100 dark:focus:text-gray-700">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Rounded Buttons</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn rounded-full text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button" class="btn rounded-full text-white bg-gray-500 border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button" class="btn rounded-full text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button" class="btn rounded-full text-white bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button" class="btn rounded-full text-white bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button" class="btn rounded-full text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button" class="btn rounded-full text-white bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button" class="btn rounded-full text-violet-500 border-0 group"> <span class="group-hover:border-b transition-all duration-100 ease-in-out group-hover:border-violet-500">Link</span></button>
                            <button type="button" class="btn rounded-full text-black bg-gray-100 border-gray-100 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Soft Buttons</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600 dark:focus:ring-violet-500/10 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                            <button type="button" class="btn text-gray-500 bg-gray-50 border-gray-50 hover:text-white hover:bg-gray-600 hover:border-gray-600 focus:text-white focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600 dark:bg-gray-500/20 dark:focus:ring-gray-500/10 dark:border-transparent">Secondary</button>
                            <button type="button" class="btn text-green-500 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600 dark:focus:ring-green-500/10 dark:bg-green-500/20 dark:border-transparent">Success</button>
                            <button type="button" class="btn text-sky-500 bg-sky-50 border-sky-50 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600 dark:focus:ring-sky-500/10 dark:bg-sky-500/20 dark:border-transparent">Info</button>
                            <button type="button" class="btn text-yellow-500 bg-yellow-50 hover:text-white border-yellow-50 hover:bg-yellow-600 focus:text-white hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600 dark:focus:ring-yellow-500/10 dark:bg-yellow-500/20 dark:border-transparent">Warning</button>
                            <button type="button" class="btn text-red-500 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600 dark:focus:ring-red-500/10 dark:bg-red-500/20 dark:border-transparent">Danger</button>
                            <button type="button" class="btn text-neutral-800 bg-neutral-50 hover:text-white border-neutral-50 hover:bg-neutral-900 focus:text-white hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900 dark:focus:ring-neutral-500/10 dark:bg-neutral-500/20 dark:border-transparent">Dark</button>
                            <button type="button" class="btn text-violet-500 border-0 group"> <span class="group-hover:border-b transition-all duration-100 ease-in-out group-hover:border-violet-500">Link</span></button>
                            <button type="button" class="btn text-gray-800 bg-gray-50 border-gray-50 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Buttons with Label</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn border-0 bg-violet-500 p-0 align-middle text-white focus:ring-2 focus:ring-violet-500/30 hover:bg-violet-600"><i class="bx bx-smile bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Primary</span></button>
                            <button type="button" class="btn border-0 bg-green-500 p-0 align-middle text-white focus:ring-2 focus:ring-green-500/30 hover:bg-green-600"><i class="bx bx-check-double bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Success</span></button>
                            <button type="button" class="btn border-0 bg-yellow-500 p-0 align-middle text-white focus:ring-2 focus:ring-yellow-500/30 hover:bg-yellow-600"><i class="bx bx-error bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Warning</span></button>
                            <button type="button" class="btn border-0 bg-red-500 p-0 align-middle text-white focus:ring-2 focus:ring-red-500/30 hover:bg-red-600"><i class="bx bx-block bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Danger</span></button>
                            <button type="button" class="btn border-0 bg-neutral-700 p-0 align-middle text-white focus:ring-2 focus:ring-neutral-500/30 hover:bg-neutral-800"><i class="bx bx-loader bg-white bg-opacity-20 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Dark</span></button>
                            <button type="button" class="btn border-0 bg-gray-50 p-0 align-middle text-black focus:ring-2 focus:ring-neutral-500/30 hover:bg-neutral-800"><i class="bx bx-hourglass bg-black bg-opacity-10 w-10 h-full text-16 py-3 align-middle rounded-l"></i><span class="px-3 leading-[2.8]">Light</span></button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Button with leading icon</h6>
                        </div>
                        <div class="card-body flex flex-wrap gap-3">
                            <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600"><i class="bx bx-smile text-16 align-middle ltr:mr-1 rtl:ml-1 "></i><span class="align-middle">Primary</span></button>
                            <button type="button" class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i class="bx bx-check-double text-16 align-middle ltr:mr-1 rtl:ml-1 "></i><span class="align-middle">Success</span></button>
                            <button type="button" class="btn text-white bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600"><i class="bx bx-error text-16 align-middle ltr:mr-1 rtl:ml-1 "></i><span class="align-middle">Warning</span></button>
                            <button type="button" class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600"><i class="bx bx-block text-16 align-middle ltr:mr-1 rtl:ml-1"></i><span class="align-middle">Danger</span></button>
                            <button type="button" class="btn text-white bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900"><i class="bx bx-loader text-16 align-middle ltr:mr-1 rtl:ml-1 animate-spin"></i><span class="align-middle">Dark</span></button>
                            <button type="button" class="btn text-black bg-gray-50 border-gray-50 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300"><i class="bx bx-hourglass text-16 align-middle ltr:mr-1 rtl:ml-1 animate-spin"></i><span class="align-middle">Light</span></button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Soft Icon Buttons</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-3">
                                    <button type="button" class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/10 active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent"><i class="bx bx-smile text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-green-500 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/10 active:bg-green-600 active:border-green-600 dark:bg-green-500/20 dark:border-transparent"><i class="bx bx-check-double text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-yellow-500 bg-yellow-50 border-yellow-50 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/10 active:bg-yellow-600 active:border-yellow-600 dark:bg-yellow-500/20 dark:border-transparent"><i class="bx bx-error text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-red-500 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:text-white focus:border-red-600 focus:ring focus:ring-red-500/10 active:bg-red-600 active:border-red-600 dark:bg-red-500/20 dark:border-transparent"><i class="bx bx-block text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-neutral-800 bg-neutral-100 border-neutral-100 hover:text-white hover:bg-neutral-900 hover:border-neutral-900 focus:text-white focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/10 active:bg-neutral-900 active:border-neutral-900 dark:bg-neutral-500/20 dark:border-transparent dark:text-gray-100"><i class="bx bx-loader text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-black bg-gray-50 border-gray-50 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/10 active:bg-gray-300 active:border-gray-300 dark:bg-gray-500/20 dark:border-transparent"><i class="bx bx-hourglass text-16 align-middle"></i></button>
                                </div>
                            </div>

                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Icon Buttons</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-3">
                                    <button type="button" class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600"><i class="bx bx-smile text-16 align-middle "></i></button>
                                    <button type="button" class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i class="bx bx-check-double text-16 align-middle "></i></button>
                                    <button type="button" class="btn text-white bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600"><i class="bx bx-error text-16 align-middle "></i></button>
                                    <button type="button" class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600"><i class="bx bx-block text-16 align-middle"></i></button>
                                    <button type="button" class="btn text-white bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900"><i class="bx bx-loader text-16 align-middle animate-spin"></i></button>
                                    <button type="button" class="btn text-black bg-gray-50 border-gray-50 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300"><i class="bx bx-hourglass text-16 align-middle animate-spin"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Icon Buttons with Text</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-3">
                                    <button type="button" class="btn border-0 bg-violet-500 text-white px-5"><i class="mdi mdi-download block text-lg"></i><span class="">Download</span></button>
                                    <button type="button" class="btn border-0 bg-gray-50 text-black px-5"><i class="mdi mdi-upload block text-lg"></i><span class="">Upload</span></button>
                                    <button type="button" class="btn border-0 bg-green-600 text-white px-5"><i class="mdi mdi-pencil block text-lg"></i><span class="">Edit</span></button>
                                    <button type="button" class="btn border-0 bg-red-400 text-white px-5"><i class="mdi mdi-trash-can block text-lg"></i><span class="">Delete</span></button>
                                </div>
                            </div>
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Block Buttons</h6>
                                </div>
                                <div class="card-body flex flex-wrap items-center gap-3">
                                    <button class="btn bg-violet-500 block w-full text-white py-3 border-transparent focus:ring focus:ring-violet-500/30 dark:border-zinc-600" type="submit">Block level button</button>
                                    <button class="btn bg-gray-300 block w-full text-white py-1 border-transparent focus:ring focus:ring-gray-500/30 dark:border-zinc-600" type="submit">Block level button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Soft Buttons Sizes</h6>
                                </div>
                                <div class="card-body flex flex-wrap items-center gap-3">
                                    <button type="button" class="btn py-1 px-3 text-[11.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-1.5 px-4 text-13 text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-2 px-5 text-15 text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-2.5 px-6 text-[15.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                </div>
                            </div>

                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Soft Buttons Sizes With Color</h6>
                                </div>
                                <div class="card-body flex flex-wrap items-center gap-3">
                                    <button type="button" class="btn py-1 px-3 text-[11.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:text-white active:bg-violet-600 active:border-violet-600 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-1.5 px-4 text-13 text-green-500 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:text-white active:bg-green-600 active:border-green-600 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn text-yellow-500 bg-yellow-50 border-yellow-50 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:text-white active:bg-yellow-600 active:border-yellow-600 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-2 px-5 text-15 text-red-500 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:text-white active:bg-red-600 active:border-red-600 dark:border-transparent">Primary</button>
                                    <button type="button" class="btn py-2.5 px-6 text-[15.5px] text-gray-500 bg-gray-50 border-gray-50 hover:text-white hover:bg-gray-600 hover:border-gray-600 focus:text-white focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:text-white active:bg-gray-600 active:border-gray-600 dark:border-transparent">Primary</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-3">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Basic Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex">
                                        <button type="button" class="btn ltr:rounded-r-none rtl:rounded-l-none px-4 py-2.5 text-sm font-medium text-violet-500 bg-white border border-violet-500 rounded-l hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Left
                                        </button>
                                        <button type="button" class="btn border-l-0 border-r-0 rounded-l-none rounded-r-none px-4 py-2.5 text-sm font-medium text-violet-500 bg-white border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Middle
                                        </button>
                                        <button type="button" class="btn px-4 py-2.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-violet-500 bg-white border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:text-white dark:bg-zinc-700 focus:bg-violet-500 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Icon Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium ltr:rounded-r-none rtl:rounded-l-none text-violet-500 bg-transparent border border-violet-500 rounded-l hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='bx bxs-user-circle text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Left
                                        </button>
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-r-none rounded-l-none border-l-0 border-r-0 text-violet-500 bg-transparent border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='bx bx-check-double text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Middle
                                        </button>
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium ltr:rounded-l-none rtl:rounded-r-none text-violet-500 bg-transparent border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='bx bx-time-five text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Active Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium ltr:rounded-r-none rtl:rounded-l-none bg-violet-500 text-white border border-violet-500 rounded-l hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='bx bxs-user-circle text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Left
                                        </button>
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-r-none rounded-l-none border-l-0 border-r-0 text-violet-500 bg-transparent border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='bx bx-check-double text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Middle
                                        </button>
                                        <button type="button" class="btn inline-flex items-center px-4 py-2 text-sm font-medium ltr:rounded-l-none  rtl:rounded-r-none text-violet-500 bg-transparent border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='bx bx-time-five text-lg ltr:mr-2 rtl:ml-2'></i>
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">Icon only</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-4">
                                    <div class="inline-flex">
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-violet-500 bg-white border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:z-10 focus:ring-2 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='bx bx-chevron-left text-2xl'></i>
                                        </button>
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-violet-500 bg-white border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-violet-500 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='bx bx-chevron-right text-2xl'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-green-500 bg-white border-t border-b border-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:z-10 focus:ring-2 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='bx bx-left-arrow-alt text-2xl'></i>
                                        </button>
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-green-500 bg-white border border-green-500 rounded-r hover:bg-green-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-green-500 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='bx bx-right-arrow-alt text-2xl'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-yellow-500 bg-white border-t border-b border-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:z-10 focus:ring-2 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='bx bx-chevrons-left text-2xl'></i>
                                        </button>
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-yellow-500 bg-white border border-yellow-500 rounded-r hover:bg-yellow-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-yellow-500 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='bx bx-chevrons-right text-2xl'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-red-500 bg-white border-t border-b border-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:z-10 focus:ring-2 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='bx bx-left-arrow-circle text-2xl'></i>
                                        </button>
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-red-500 bg-white border border-red-500 rounded-r hover:bg-red-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-red-500 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='bx bx-right-arrow-circle text-2xl'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-gray-500 bg-white border-t border-b border-gray-500 hover:bg-gray-500 hover:text-white focus:bg-gray-500 focus:z-10 focus:ring-2 focus:ring-gray-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-gray-500 dark:focus:text-white">
                                            <i class='bx bxs-left-arrow-alt text-2xl'></i>
                                        </button>
                                        <button type="button" class="btn px-2 py-1 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-gray-500 bg-white border border-gray-500 rounded-r hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-gray-500 focus:ring-gray-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-gray-500 dark:focus:text-white">
                                            <i class='bx bxs-right-arrow-alt text-2xl'></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                             <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">With stat</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-4">
                                    <div class="inline-flex">
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-violet-500 bg-white border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:z-10 focus:ring-2 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-violet-500 dark:hover:text-white dark:hover:bg-violet-500 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='bx bxs-bookmark text-xl align-middle'></i><span class="align-middle ltr:ml-2 rtl:mr-2">Bookmark</span>
                                        </button>
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-violet-500 bg-white border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-violet-500 focus:ring-violet-50focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-violet-500 dark:hover:text-white dark:hover:bg-violet-500 dark:focus:ring-violet-500 dark:focus:text-white">
                                            12K
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-green-500 bg-white border-t border-b border-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:z-10 focus:ring-2 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='bx bxs-user-circle text-xl align-middle'></i><span class="align-middle ltr:ml-2 rtl:mr-2">Account</span>
                                        </button>
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-green-500 bg-white border border-green-500 rounded-r hover:bg-green-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-green-500 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500 dark:focus:text-white">
                                            2.5M
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-yellow-500 bg-white border-t border-b border-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:z-10 focus:ring-2 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-500 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='bx bx-check-double text-xl align-middle'></i><span class="align-middle ltr:ml-2 rtl:mr-2">Check</span>
                                        </button>
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-yellow-500 bg-white border border-yellow-500 rounded-r hover:bg-yellow-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-yellow-500 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-500 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            20K
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-red-500 bg-white border-t border-b border-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:z-10 focus:ring-2 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='bx bx bxs-party text-xl align-middle'></i><span class="align-middle ltr:ml-2 rtl:mr-2">Party</span>
                                        </button>
                                        <button type="button" class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-red-500 bg-white border border-red-500 rounded-r hover:bg-red-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-red-500 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-500 dark:focus:text-white">
                                            65K
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">With dropdown</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-4">
                                   <div class="dropdown relative">
                                    <button type="button" class="btn border-violet-500 flex items-center p-0 align-middle text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white"><span class="px-3">Save changes</span>
                                        <i class="bx bx-chevron-down ltr:border-l rtl:border-r border-violet-500 bg-white/20 w-10 h-full text-16 py-3 align-middle dropdown-toggle focus:border-3 focus:border-violet-500/10 dark:text-white dark:hover:bg-white/30 dark:focus:bg-white/30" id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                    </button>
                                    <ul class=" dropdown-menu absolute bg-white z-50 float-left py-2 list-none text-left dark:bg-zinc-700
                                        rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu1">
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

                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-600 dark:text-gray-100">With checkbox and dropdown</h6>
                                </div>
                                <div class="card-body flex flex-wrap gap-4">
                                   <div class="dropdown relative">
                                        <div class="inline-flex">
                                            <button class="btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none border-violet-500">
                                                <input type="checkbox" class="checked:bg-violet-500 ring-0 rounded ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500" />
                                            </button>
                                            <button type="button" class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-violet-500 flex items-center align-middle text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500  dropdown-toggle focus:text-white" id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>
                                    
                                        <ul class=" dropdown-menu absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button class="btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none border-green-500">
                                                <input type="checkbox" class="checked:bg-green-500 ring-0 rounded ring-offset-0 dark:bg-zinc-700 dark:checked:bg-green-500" />
                                            </button>
                                            <button type="button" class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-green-500 flex items-center align-middle text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500  dropdown-toggle focus:text-white" id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>
                                    
                                        <ul class=" dropdown-menu absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button class="btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none border-yellow-500">
                                                <input type="checkbox" class="checked:bg-yellow-500 ring-0 rounded ring-offset-0 dark:bg-zinc-700 dark:checked:bg-yellow-500" />
                                            </button>
                                            <button type="button" class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-yellow-500 flex items-center align-middle text-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500  dropdown-toggle focus:text-white" id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>
                                    
                                        <ul class=" dropdown-menu absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button class="btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none border-red-500">
                                                <input type="checkbox" class="checked:bg-red-500 ring-0 rounded ring-offset-0 dark:bg-zinc-700 dark:checked:bg-red-500" />
                                            </button>
                                            <button type="button" class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-red-500 flex items-center align-middle text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500  dropdown-toggle focus:text-white" id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>
                                    
                                        <ul class=" dropdown-menu absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu2">
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