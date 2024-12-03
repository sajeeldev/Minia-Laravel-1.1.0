@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Flexbox & Grid</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Flexbox & Grid</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Flex Basis</h6>
                        </div>
                        <div class="card-body space-y-5">
                            <div class="flex flex-row text-center gap-3">
                                <div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">01</div>
                                <div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">02</div>
                                <div class="basis-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">03</div>
                            </div>
                            <div >
                                <h6 class="text-gray-700 dark:text-gray-100 mb-3">Breakpoints and media queries</h6>
                                <div class="flex flex-row text-center gap-3">
                                    <div class="basis-1/2 lg:basis-1/3 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">01</div>
                                    <div class="basis-1/2 lg:basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">02</div>
                                    <div class="basis-1/2 lg:basis-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">03</div>
                                    <div class="basis-1/2 lg:basis-1/1 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">03</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Flex Direction</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="flex flex-row text-center gap-3">
                                <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">01</div>
                                <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">02</div>
                                <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">03</div>
                            </div>
                            <div>
                                <h6 class="text-gray-700 dark:text-gray-100 mb-3 text-end">Row reversed</h6>
                                <div class="flex flex-row-reverse text-center gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">01</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">02</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">03</div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Column</h6>
                                    <div class="flex flex-col text-center gap-3">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">03</div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Column reversed</h6>
                                    <div class="flex flex-col-reverse text-center gap-3">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-5 py-4 rounded-md">03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Flex Wrap</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Don't wrap</h6>
                                    <div class="flex flex-row w-full flex-nowrap gap-4 overflow-x-scroll pb-4">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">04</div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Wrap normally</h6>
                                    <div class="flex flex-row w-full flex-wrap gap-4 pb-4">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">04</div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Wrap reversed</h6>
                                    <div class="flex flex-row w-full flex-wrap-reverse gap-4 pb-4">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 px-16 py-4 rounded-md">04</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Flex</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Initial flex</h6>
                                    <div class="flex text-center gap-3">
                                        <div class="flex-none w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            01
                                        </div>
                                        <div class="flex-initial w-64 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            02
                                        </div>
                                        <div class="flex-initial w-32 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            03
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Flex 1</h6>
                                    <div class="flex text-center gap-3">
                                        <div class="flex-none bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 h-14 rounded-md px-5">
                                            01
                                        </div>
                                        <div class="flex-1 w-64 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            02
                                        </div>
                                        <div class="flex-1 w-32 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            03
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Auto</h6>
                                    <div class="flex gap-3 text-center">
                                        <div class="flex-none bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 h-14 rounded-md p-5">
                                            01
                                        </div>
                                        <div class="flex-auto w-64 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            02
                                        </div>
                                        <div class="flex-auto w-32 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">
                                            03
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Order</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12">
                                    <div class="flex justify-between gap-3">
                                        <div class="order-last px-20 py-4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                        <div class="px-20 py-4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                        <div class="px-20 py-4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Grid Template</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Grid Columns</h6>
                                    <div class="grid grid-cols-4 gap-3 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">05</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">06</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">07</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">08</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">09</div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">Grid Rows</h6>
                                    <div class="grid grid-rows-4 grid-flow-col gap-3 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">05</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">06</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">07</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">08</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">09</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Gap</h6>
                        </div>
                        <div class="card-body space-y-4">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="grid gap-4 grid-cols-2 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">04</div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="grid gap-x-8 gap-y-4 grid-cols-3 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">05</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 rounded-md">06</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Justify Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex justify-start gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">02</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">03</div>
                                </div>
                                <div class="flex justify-center gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">02</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">03</div>
                                </div>
                                <div class="flex justify-end gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">02</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">03</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Justify Items</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid justify-items-start gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                </div>
                                <div class="grid justify-items-center gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                </div>
                                 <div class="grid justify-items-end gap-3">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md">01</div>
                                </div>
                                <div class="flex justify-items-stretch gap-3 mt-4">
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md w-full">01</div>
                                    <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-4 px-5 rounded-md w-full">02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Align Content</h6>
                            </div>
                            <div class="card-body space-y-5">
                                <div>
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">content-start</h6>
                                    <div class="h-56 grid grid-cols-3 gap-4 content-start bg-gray-50/30 dark:bg-zinc-700/80 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">05</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">content-center</h6>
                                    <div class="h-56 grid grid-cols-3 gap-4 content-center bg-gray-50/30 dark:bg-zinc-700/80 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">05</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">content-end</h6>
                                    <div class="h-56 grid grid-cols-3 gap-4 content-end bg-gray-50/30 dark:bg-zinc-700/80 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">05</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">content-between</h6>
                                    <div class="h-56 grid grid-cols-3 gap-4 content-between bg-gray-50/30 dark:bg-zinc-700/80 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">05</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-gray-700 dark:text-gray-100 mb-3">content-around</h6>
                                    <div class="h-56 grid grid-cols-3 gap-4 content-around bg-gray-50/30 dark:bg-zinc-700/80 text-center">
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">01</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">02</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">03</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">04</div>
                                        <div class="bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 py-3 rounded-md">05</div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Place Content</h6>
                            </div>
                                <div class="card-body space-y-5">
                                    <div>
                                        <h6 class="text-gray-700 dark:text-gray-100 mb-3">place-content-start</h6>
                                        <div class="h-56 grid grid-cols-[repeat(2,56px)] place-content-start gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">04</div>
                                        </div>
                                    </div>

                                    <div>
                                        <h6 class="text-gray-700 dark:text-gray-100 mb-3">place-content-center</h6>
                                        <div class="h-56 grid grid-cols-[repeat(2,56px)] place-content-center gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">04</div>
                                        </div>
                                    </div>

                                    <div>
                                        <h6 class="text-gray-700 dark:text-gray-100 mb-3">place-content-between</h6>
                                        <div class="h-56 grid grid-cols-[repeat(2,56px)] place-content-between gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">04</div>
                                        </div>
                                    </div>

                                    <div>
                                        <h6 class="text-gray-700 dark:text-gray-100 mb-3">place-content-around</h6>
                                        <div class="h-56 grid grid-cols-[repeat(2,56px)] place-content-around gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">04</div>
                                        </div>
                                    </div>

                                    <div>
                                        <h6 class="text-gray-700 dark:text-gray-100 mb-3">place-content-evenly</h6>
                                        <div class="h-56 grid grid-cols-[repeat(2,56px)] place-content-evenly gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">01</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">02</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">03</div>
                                            <div class="p-4 w-14 h-14 flex items-center justify-center bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 rounded-md">04</div>
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

        
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div> 

@endsection