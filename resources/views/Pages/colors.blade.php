@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Colors</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Colors</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Background colors</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-violet-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-50</p>
                                        </div>
                                        <div class="p-2 bg-violet-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-100</p>
                                        </div>
                                        <div class="p-2 bg-violet-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-200</p>
                                        </div>
                                        <div class="p-2 bg-violet-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-300</p>
                                        </div>
                                        <div class="p-2 bg-violet-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-400</p>
                                        </div>
                                        <div class="p-2 bg-violet-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-500</p>
                                        </div>
                                        <div class="p-2 bg-violet-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-600</p>
                                        </div>
                                        <div class="p-2 bg-violet-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-700</p>
                                        </div>
                                        <div class="p-2 bg-violet-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-800</p>
                                        </div>
                                        <div class="p-2 bg-violet-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-violet-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-gray-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-50</p>
                                        </div>
                                        <div class="p-2 bg-gray-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-100</p>
                                        </div>
                                        <div class="p-2 bg-gray-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-200</p>
                                        </div>
                                        <div class="p-2 bg-gray-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-300</p>
                                        </div>
                                        <div class="p-2 bg-gray-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-400</p>
                                        </div>
                                        <div class="p-2 bg-gray-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-500</p>
                                        </div>
                                        <div class="p-2 bg-gray-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-600</p>
                                        </div>
                                        <div class="p-2 bg-gray-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-700</p>
                                        </div>
                                        <div class="p-2 bg-gray-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-800</p>
                                        </div>
                                        <div class="p-2 bg-gray-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-gray-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-green-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-50</p>
                                        </div>
                                        <div class="p-2 bg-green-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-100</p>
                                        </div>
                                        <div class="p-2 bg-green-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-200</p>
                                        </div>
                                        <div class="p-2 bg-green-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-300</p>
                                        </div>
                                        <div class="p-2 bg-green-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-400</p>
                                        </div>
                                        <div class="p-2 bg-green-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-500</p>
                                        </div>
                                        <div class="p-2 bg-green-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-600</p>
                                        </div>
                                        <div class="p-2 bg-green-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-700</p>
                                        </div>
                                        <div class="p-2 bg-green-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-800</p>
                                        </div>
                                        <div class="p-2 bg-green-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-green-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-sky-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-50</p>
                                        </div>
                                        <div class="p-2 bg-sky-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-100</p>
                                        </div>
                                        <div class="p-2 bg-sky-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-200</p>
                                        </div>
                                        <div class="p-2 bg-sky-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-300</p>
                                        </div>
                                        <div class="p-2 bg-sky-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-400</p>
                                        </div>
                                        <div class="p-2 bg-sky-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-500</p>
                                        </div>
                                        <div class="p-2 bg-sky-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-600</p>
                                        </div>
                                        <div class="p-2 bg-sky-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-700</p>
                                        </div>
                                        <div class="p-2 bg-sky-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-800</p>
                                        </div>
                                        <div class="p-2 bg-sky-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-sky-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-yellow-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-50</p>
                                        </div>
                                        <div class="p-2 bg-yellow-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-100</p>
                                        </div>
                                        <div class="p-2 bg-yellow-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-200</p>
                                        </div>
                                        <div class="p-2 bg-yellow-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-300</p>
                                        </div>
                                        <div class="p-2 bg-yellow-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-400</p>
                                        </div>
                                        <div class="p-2 bg-yellow-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-500</p>
                                        </div>
                                        <div class="p-2 bg-yellow-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-600</p>
                                        </div>
                                        <div class="p-2 bg-yellow-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-700</p>
                                        </div>
                                        <div class="p-2 bg-yellow-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-800</p>
                                        </div>
                                        <div class="p-2 bg-yellow-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-yellow-900</p>
                                        </div>

                                    </div>

                                     <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-red-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-50</p>
                                        </div>
                                        <div class="p-2 bg-red-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-100</p>
                                        </div>
                                        <div class="p-2 bg-red-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-200</p>
                                        </div>
                                        <div class="p-2 bg-red-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-300</p>
                                        </div>
                                        <div class="p-2 bg-red-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-400</p>
                                        </div>
                                        <div class="p-2 bg-red-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-500</p>
                                        </div>
                                        <div class="p-2 bg-red-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-600</p>
                                        </div>
                                        <div class="p-2 bg-red-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-700</p>
                                        </div>
                                        <div class="p-2 bg-red-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-800</p>
                                        </div>
                                        <div class="p-2 bg-red-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-red-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 bg-neutral-50 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-50</p>
                                        </div>
                                        <div class="p-2 bg-neutral-100 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-100</p>
                                        </div>
                                        <div class="p-2 bg-neutral-200 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-200</p>
                                        </div>
                                        <div class="p-2 bg-neutral-300 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-300</p>
                                        </div>
                                        <div class="p-2 bg-neutral-400 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-400</p>
                                        </div>
                                        <div class="p-2 bg-neutral-500 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-500</p>
                                        </div>
                                        <div class="p-2 bg-neutral-600 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-600</p>
                                        </div>
                                        <div class="p-2 bg-neutral-700 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-700</p>
                                        </div>
                                        <div class="p-2 bg-neutral-800 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-800</p>
                                        </div>
                                        <div class="p-2 bg-neutral-900 text-center">
                                            <p class=" text-xs text-gray-800">bg-neutral-900</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Border colors</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-violet-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-50</p>
                                        </div>
                                        <div class="p-2 border border-violet-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-100</p>
                                        </div>
                                        <div class="p-2 border border-violet-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-200</p>
                                        </div>
                                        <div class="p-2 border border-violet-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-300</p>
                                        </div>
                                        <div class="p-2 border border-violet-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-400</p>
                                        </div>
                                        <div class="p-2 border border-violet-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-500</p>
                                        </div>
                                        <div class="p-2 border border-violet-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-600</p>
                                        </div>
                                        <div class="p-2 border border-violet-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-700</p>
                                        </div>
                                        <div class="p-2 border border-violet-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-800</p>
                                        </div>
                                        <div class="p-2 border border-violet-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-gray-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-50</p>
                                        </div>
                                        <div class="p-2 border border-gray-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-100</p>
                                        </div>
                                        <div class="p-2 border border-gray-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-200</p>
                                        </div>
                                        <div class="p-2 border border-gray-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-300</p>
                                        </div>
                                        <div class="p-2 border border-gray-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-400</p>
                                        </div>
                                        <div class="p-2 border border-gray-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-500</p>
                                        </div>
                                        <div class="p-2 border border-gray-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-600</p>
                                        </div>
                                        <div class="p-2 border border-gray-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-700</p>
                                        </div>
                                        <div class="p-2 border border-gray-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-800</p>
                                        </div>
                                        <div class="p-2 border border-gray-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-green-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-50</p>
                                        </div>
                                        <div class="p-2 border border-green-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-100</p>
                                        </div>
                                        <div class="p-2 border border-green-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-200</p>
                                        </div>
                                        <div class="p-2 border border-green-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-300</p>
                                        </div>
                                        <div class="p-2 border border-green-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-400</p>
                                        </div>
                                        <div class="p-2 border border-green-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-500</p>
                                        </div>
                                        <div class="p-2 border border-green-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-600</p>
                                        </div>
                                        <div class="p-2 border border-green-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-700</p>
                                        </div>
                                        <div class="p-2 border border-green-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-800</p>
                                        </div>
                                        <div class="p-2 border border-green-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-sky-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-50</p>
                                        </div>
                                        <div class="p-2 border border-sky-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-100</p>
                                        </div>
                                        <div class="p-2 border border-sky-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-200</p>
                                        </div>
                                        <div class="p-2 border border-sky-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-300</p>
                                        </div>
                                        <div class="p-2 border border-sky-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-400</p>
                                        </div>
                                        <div class="p-2 border border-sky-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-500</p>
                                        </div>
                                        <div class="p-2 border border-sky-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-600</p>
                                        </div>
                                        <div class="p-2 border border-sky-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-700</p>
                                        </div>
                                        <div class="p-2 border border-sky-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-800</p>
                                        </div>
                                        <div class="p-2 border border-sky-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-yellow-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-50</p>
                                        </div>
                                        <div class="p-2 border border-yellow-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-100</p>
                                        </div>
                                        <div class="p-2 border border-yellow-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-200</p>
                                        </div>
                                        <div class="p-2 border border-yellow-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-300</p>
                                        </div>
                                        <div class="p-2 border border-yellow-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-400</p>
                                        </div>
                                        <div class="p-2 border border-yellow-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-500</p>
                                        </div>
                                        <div class="p-2 border border-yellow-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-600</p>
                                        </div>
                                        <div class="p-2 border border-yellow-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-700</p>
                                        </div>
                                        <div class="p-2 border border-yellow-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-800</p>
                                        </div>
                                        <div class="p-2 border border-yellow-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-900</p>
                                        </div>

                                    </div>

                                     <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-red-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-50</p>
                                        </div>
                                        <div class="p-2 border border-red-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-100</p>
                                        </div>
                                        <div class="p-2 border border-red-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-200</p>
                                        </div>
                                        <div class="p-2 border border-red-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-300</p>
                                        </div>
                                        <div class="p-2 border border-red-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-400</p>
                                        </div>
                                        <div class="p-2 border border-red-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-500</p>
                                        </div>
                                        <div class="p-2 border border-red-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-600</p>
                                        </div>
                                        <div class="p-2 border border-red-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-700</p>
                                        </div>
                                        <div class="p-2 border border-red-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-800</p>
                                        </div>
                                        <div class="p-2 border border-red-900 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 border border-neutral-50 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-50</p>
                                        </div>
                                        <div class="p-2 border border-neutral-100 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-100</p>
                                        </div>
                                        <div class="p-2 border border-neutral-200 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-200</p>
                                        </div>
                                        <div class="p-2 border border-neutral-300 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-300</p>
                                        </div>
                                        <div class="p-2 border border-neutral-400 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-400</p>
                                        </div>
                                        <div class="p-2 border border-neutral-500 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-500</p>
                                        </div>
                                        <div class="p-2 border border-neutral-600 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-600</p>
                                        </div>
                                        <div class="p-2 border border-neutral-700 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-700</p>
                                        </div>
                                        <div class="p-2 border border-neutral-800 text-center">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-800</p>
                                        </div>
                                        <div class="p-2 border border-neutral-900 text-center">
                                            <p class=" text-xs text-gray-800 dark:text-zinc-100">border-neutral-900</p>
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