@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Alerts</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Alerts</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Default Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div>
                                    <div class="relative px-5 py-3 border-2 bg-violet-50 text-violet-700 border-violet-100 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-gray-50 text-gray-700 border-gray-100 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-green-50 text-green-700 border-green-100 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-red-50 text-red-700 border-red-100 rounded">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="relative px-5 py-3 border-2 bg-yellow-50 text-yellow-700 border-yellow-100 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-sky-50 text-sky-700 border-sky-100 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-gray-50 text-gray-400 border-gray-50 rounded mb-3">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                    <div class="relative px-5 py-3 border-2 bg-neutral-300 text-neutral-800 border-neutral-400 rounded">
                                        <p>A simple primary alert—check it out!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Border Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div class="space-y-4">
                                    <div class="relative flex items-center px-5 py-2 border-2 text-violet-500 border-violet-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-violet-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="relative flex items-center px-5 py-2 border-2 text-gray-500 dark:text-zinc-100 border-gray-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="relative flex items-center px-5 py-2 border-2 text-green-500 border-green-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-green-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                     <div class="relative flex items-center px-5 py-2 border-2 text-red-500 border-red-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                                <div  class="space-y-4">
                                    <div class="relative flex items-center px-5 py-2 border-2 text-yellow-500 border-yellow-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-yellow-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="relative flex items-center px-5 py-2 border-2 text-sky-500 border-sky-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-sky-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="relative flex items-center px-5 py-2 border-2 text-gray-500 dark:text-zinc-100 border-gray-50 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="relative flex items-center px-5 py-2 border-2 text-neutral-500 dark:text-zinc-100 border-neutral-200 rounded alert-dismissible">
                                        <p>A simple primary alert—check it out!</p>
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-neutral-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With description</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex px-5 py-3 border-2 bg-violet-50 text-violet-700 border-violet-100 rounded">
                                    <i class="bx bx-smile text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Primary Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                                <div class="flex px-5 py-3 border-2 bg-green-50 text-green-700 border-green-100 rounded">
                                    <i class="bx bx-loader  text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Success Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                                <div class="flex px-5 py-3 border-2 bg-red-50 text-red-700 border-red-100 rounded">
                                    <i class="bx bx-block text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Danger Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                                <div class="flex px-5 py-3 border-2 bg-yellow-50 text-yellow-700 border-yellow-100 rounded">
                                    <i class="bx bx-error text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Warning Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                                <div class="flex px-5 py-3 border-2 bg-sky-50 text-sky-700 border-sky-100 rounded">
                                    <i class="bx bx-hourglass text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Info Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                                <div class="flex px-5 py-3 border-2 bg-gray-50 text-gray-700 border-gray-100 rounded">
                                    <i class="bx bx-check-double text-xl ltr:mr-2 rtl:ml-2"></i>   
                                    <div>
                                        <h6 class="text-15">Light Alert</h6>
                                        <p class="mt-2">More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With List Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-5">
                                <div class="flex p-4 text-sm text-violet-700 bg-violet-50 rounded " role="alert">
                                    <i class="bx bx-smile text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 warnings with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Could not load content for this code..</li>
                                            <li>Failed to load resource..</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-green-700 bg-green-50 rounded " role="alert">
                                    <i class="bx bx-loader text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 warnings with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Could not load content for this code..</li>
                                            <li>Failed to load resource..</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-red-700 bg-red-50 rounded " role="alert">
                                    <i class="bx bx-block text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 errors with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Your password must be at least 8 characters</li>
                                            <li>Your password must include at least one pro wrestlling finishing move</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-yellow-700 bg-yellow-50 rounded" role="alert">
                                    <i class="bx bx-error text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 warnings with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Could not load content for this code..</li>
                                            <li>Failed to load resource..</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-sky-700 bg-sky-50 rounded " role="alert">
                                    <i class="bx bx-hourglass text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 warnings with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Could not load content for this code..</li>
                                            <li>Failed to load resource..</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-gray-700 bg-gray-50 rounded " role="alert">
                                    <i class="bx bx-check-double text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">There were 2 warnings with your submission</span>
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                            <li>Could not load content for this code..</li>
                                            <li>Failed to load resource..</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With actions</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-5">
                                <div class="flex p-4 text-sm text-violet-700 bg-violet-50 rounded " role="alert">
                                    <i class="bx bx-smile text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>

                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-violet-500 hover:bg-violet-500 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-green-700 bg-green-50 rounded " role="alert">
                                    <i class="bx bx-loader text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-green-700 hover:bg-green-700 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-red-700 bg-red-50 rounded " role="alert">
                                    <i class="bx bx-block text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-red-700 hover:bg-red-700 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-yellow-700 bg-yellow-50 rounded" role="alert">
                                    <i class="bx bx-error text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-yellow-700 hover:bg-yellow-700 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-sky-700 bg-sky-50 rounded" role="alert">
                                    <i class="bx bx-hourglass text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-sky-700 hover:bg-sky-700 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex p-4 text-sm text-gray-700 bg-gray-50 rounded " role="alert">
                                    <i class="bx bx-check-double text-xl ltr:mr-3 rtl:ml-3 -mt-1"></i>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-semibold">Order Completed</span>
                                        <p class="mt-1">More info about this info warning goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <div class="flex mt-4 gap-3">
                                            <button type="button" class="btn border-gray-700 hover:bg-gray-700 hover:text-white font-semibold">
                                            View Status
                                            </button>
                                            <button type="button" class="btn border-transparent font-semibold hover:border hover:border-gray-400 text-gray-400">
                                            Dismiss
                                            </button>
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
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With link on right</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div class="space-y-4">
                                    <div class="px-5 py-2 flex items-center bg-violet-50 rounded alert-dismissible">
                                        <p class="text-violet-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-violet-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-gray-50 rounded alert-dismissible">
                                        <p class="text-gray-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-green-50 rounded alert-dismissible">
                                        <p class="text-green-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-green-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-red-50 rounded alert-dismissible">
                                        <p class="text-red-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-red-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="px-5 py-2 flex items-center bg-yellow-50 rounded alert-dismissible">
                                        <p class="text-yellow-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-yellow-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-sky-50 rounded alert-dismissible">
                                        <p class="text-sky-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-sky-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-gray-50/50 rounded alert-dismissible">
                                        <p class="text-gray-600"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-600 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                    <div class="px-5 py-2 flex items-center bg-neutral-300 rounded alert-dismissible">
                                        <p class="text-neutral-700"><i class='bx bx-check-circle text-xl align-middle ltr:mr-2 rtl:ml-2'></i><span class="align-middle">A new software update is available.</span> </p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-neutral-700 align-middle mt-1 font-semibold">Details<i class="bx bx-right-arrow-alt align-middle text-lg ml-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With dismiss button</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div class="space-y-4">
                                    <div class="px-5 py-[9px] flex items-center bg-violet-50 border border-violet-100 rounded alert-dismissible">
                                        <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-violet-700 text-lg"></i>
                                        <p class="text-violet-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-violet-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-gray-100 border border-gray-200 rounded alert-dismissible">
                                        <i class="mdi mdi-arrow-all ltr:mr-2 rtl:ml-2 align-middle text-gray-700 text-lg"></i>
                                        <p class="text-gray-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-green-50 border border-green-100 rounded alert-dismissible">
                                        <i class="mdi mdi-baby-face-outline ltr:mr-2 rtl:ml-2 align-middle text-green-700 text-lg"></i>
                                        <p class="text-green-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-green-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-red-50 border border-red-100 rounded alert-dismissible">
                                        <i class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                        <p class="text-red-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="px-5 py-[9px] flex items-center bg-yellow-50 border border-yellow-100 rounded alert-dismissible">
                                        <i class="mdi mdi-alert-outline ltr:mr-2 rtl:ml-2 align-middle text-yellow-700 text-lg"></i>
                                        <p class="text-yellow-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-yellow-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-sky-50 border border-sky-100 rounded alert-dismissible">
                                        <i class="mdi mdi-alert-circle-outline ltr:mr-2 rtl:ml-2 align-middle text-sky-700 text-lg"></i>
                                        <p class="text-sky-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-sky-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-gray-50/50 dark:bg-zinc-600 dark:border-zinc-600 border border-gray-50 rounded alert-dismissible">
                                        <i class="mdi mdi-skull-outline ltr:mr-2 rtl:ml-2 align-middle text-gray-400 text-lg"></i>
                                        <p class="text-gray-400">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-[9px] flex items-center bg-neutral-200 border border-neutral-300 rounded alert-dismissible">
                                        <i class="mdi mdi-check-circle-outline ltr:mr-2 rtl:ml-2 align-middle text-neutral-700 text-lg"></i>
                                        <p class="text-neutral-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-neutral-700 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">With accent border</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                                <div class="space-y-4">
                                    <div class="px-5 py-2.5 flex items-center bg-violet-50 border-l-4 border-violet-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-violet-700 text-lg"></i>
                                        <p class="text-violet-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-violet-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-gray-100 border-l-4 border-gray-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-arrow-all ltr:mr-2 rtl:ml-2 align-middle text-gray-700 text-lg"></i>
                                        <p class="text-gray-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-green-50 border-l-4 border-green-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-baby-face-outline ltr:mr-2 rtl:ml-2 align-middle text-green-700 text-lg"></i>
                                        <p class="text-green-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-green-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-red-50 border-l-4 border-red-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-block-helper ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                        <p class="text-red-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="px-5 py-2.5 flex items-center bg-yellow-50 border-l-4 border-yellow-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-alert-outline ltr:mr-2 rtl:ml-2 align-middle text-yellow-700 text-lg"></i>
                                        <p class="text-yellow-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-yellow-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-sky-50 border-l-4 border-sky-500 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-alert-circle-outline ltr:mr-2 rtl:ml-2 align-middle text-sky-700 text-lg"></i>
                                        <p class="text-sky-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-sky-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-gray-50/50 dark:bg-zinc-700 dark:border-zinc-500 border-l-4 border-gray-300 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-skull-outline ltr:mr-2 rtl:ml-2 align-middle text-gray-400 text-lg"></i>
                                        <p class="text-gray-400">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-gray-400 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="px-5 py-2.5 flex items-center bg-neutral-200 border-l-4 border-neutral-400 rounded rounded-l-none alert-dismissible">
                                        <i class="mdi mdi-check-circle-outline ltr:mr-2 rtl:ml-2 align-middle text-neutral-700 text-lg"></i>
                                        <p class="text-neutral-700">A simple success alert—check it out!</p> 
                                        <button class="alert-close ltr:ml-auto rtl:mr-auto text-neutral-700 text-lg"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Label Icon Arrow Alerts</h6>
                                </div>
                                <div class="card-body">
                                    <div class="space-y-4">
                                        <div class="flex items-center bg-green-50 rounded alert-dismissible">
                                            <div class="h-12 w-12 ltr:rounded-l rtl:rounded-r bg-green-400 text-center relative">
                                                <div class="after:content-[''] after:border-[6px] after:border-transparent ltr:after:border-l-green-400 rtl:after:border-r-green-400 after:absolute ltr:after:-right-3 rtl:after:-left-3 after:top-[1.15rem]"></div>
                                                <i class="mdi mdi-check-all align-middle text-white leading-[3.5]"></i>
                                            </div>
                                                <p class="text-green-700 ltr:ml-4 rtl:mr-4">A simple success alert—check it out!</p> 
                                                <button class="alert-close ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg ltr:pr-5 rtl:pl-5"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="flex items-center bg-red-50 rounded alert-dismissible">
                                            <div class="h-12 w-12 ltr:rounded-l rtl:rounded-r bg-red-400 text-center relative">
                                                <div class="after:content-[''] after:border-[6px] after:border-transparent ltr:after:border-l-red-400 rtl:after:border-r-red-400 after:absolute ltr:after:-right-3 rtl:after:-left-3 after:top-[1.15rem]"></div>
                                                <i class="mdi mdi-block-helper align-middle text-white leading-[3.5]"></i>
                                            </div>
                                                <p class="text-red-700 ltr:ml-4 rtl:mr-4">A simple success alert—check it out!</p> 
                                                <button class="alert-close ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg ltr:pr-5 rtl:pl-5"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="flex items-center bg-yellow-50 rounded alert-dismissible">
                                            <div class="h-12 w-12 ltr:rounded-l rtl:rounded-r bg-yellow-400 text-center relative">
                                                <div class="after:content-[''] after:border-[6px] after:border-transparent ltr:after:border-l-yellow-400 rtl:after:border-r-yellow-400 after:absolute ltr:after:-right-3 rtl:after:-left-3 after:top-[1.15rem]"></div>
                                                <i class="mdi mdi-alert-outline align-middle text-white leading-[3.5]"></i>
                                            </div>
                                                <p class="text-yellow-700 ltr:ml-4 rtl:mr-4">A simple success alert—check it out!</p> 
                                                <button class="alert-close ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg ltr:pr-5 rtl:pl-5"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="flex items-center bg-sky-50 rounded alert-dismissible">
                                            <div class="h-12 w-12 ltr:rounded-l rtl:rounded-r bg-sky-400 text-center relative">
                                                <div class="after:content-[''] after:border-[6px] after:border-transparent ltr:after:border-l-sky-400 rtl:after:border-r-sky-400 after:absolute ltr:after:-right-3 rtl:after:-left-3 after:top-[1.15rem]"></div>
                                                <i class="mdi mdi-alert-circle-outline align-middle text-white leading-[3.5]"></i>
                                            </div>
                                                <p class="text-sky-700 ltr:ml-4 rtl:mr-4">A simple success alert—check it out!</p> 
                                                <button class="alert-close ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg ltr:pr-5 rtl:pl-5"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body pb-0">
                                    <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Top Border Alerts</h6>
                                </div>
                                <div class="card-body">
                                    <div class="space-y-4">
                                        <div class="px-5 py-2 flex items-center bg-violet-50 border-t-4 border-violet-500 rounded rounded-t-none alert-dismissible">
                                            <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-violet-700 text-lg"></i>
                                            <p class="text-violet-700">A simple success alert—check it out!</p> 
                                            <button class="alert-close ltr:ml-auto rtl:mr-auto text-violet-400 text-lg"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="px-5 py-2 flex items-center bg-red-50 border-t-4 border-red-500 rounded rounded-t-none alert-dismissible">
                                            <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-red-700 text-lg"></i>
                                            <p class="text-red-700">A simple success alert—check it out!</p> 
                                            <button class="alert-close ltr:ml-auto rtl:mr-auto text-red-400 text-lg"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="px-5 py-2 flex items-center bg-yellow-50 border-t-4 border-yellow-500 rounded rounded-t-none alert-dismissible">
                                            <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-yellow-700 text-lg"></i>
                                            <p class="text-yellow-700">A simple success alert—check it out!</p> 
                                            <button class="alert-close ltr:ml-auto rtl:mr-auto text-yellow-400 text-lg"><i class="mdi mdi-close"></i></button>
                                        </div>
                                        <div class="px-5 py-2 flex items-center bg-sky-50 border-t-4 border-sky-500 rounded rounded-t-none alert-dismissible">
                                            <i class="mdi mdi-check-all ltr:mr-2 rtl:ml-2 align-middle text-sky-700 text-lg"></i>
                                            <p class="text-sky-700">A simple success alert—check it out!</p> 
                                            <button class="alert-close ltr:ml-auto rtl:mr-auto text-sky-400 text-lg"><i class="mdi mdi-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Alert Examples</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-5">
                                    <div class="px-6 py-3 text-center relative bg-green-100 border-2 border-green-200 rounded alert-dismissible" role="alert">
                                        <button class="alert-close absolute ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg top-2 right-3"><i class="mdi mdi-close"></i></button>
                                        <div class="mt-2 mb-4">
                                            <i class="mdi mdi-check-all text-6xl text-green-500"></i>
                                        </div>
                                        <h5 class="text-green-500">Success</h5>
                                        <p class="text-green-800 mt-1 mb-4">A simple success alert</p>
                                    </div>

                                    <div class="px-6 py-3 text-center relative bg-red-100 border-2 border-red-200 rounded alert-dismissible" role="alert">
                                        <button class="alert-close absolute ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg top-2 right-3"><i class="mdi mdi-close"></i></button>
                                        <div class="mt-2 mb-4">
                                            <i class="mdi mdi-block-helper text-6xl text-red-500"></i>
                                        </div>
                                        <h5 class="text-red-500">Success</h5>
                                        <p class="text-red-800 mt-1 mb-4">A simple success alert</p>
                                    </div>

                                    <div class="px-6 py-3 text-center relative bg-yellow-100 border-2 border-yellow-200 rounded alert-dismissible" role="alert">
                                        <button class="alert-close absolute ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg top-2 right-3"><i class="mdi mdi-close"></i></button>
                                        <div class="mt-2 mb-4">
                                            <i class="mdi mdi-alert-outline text-6xl text-yellow-500"></i>
                                        </div>
                                        <h5 class="text-yellow-500">Success</h5>
                                        <p class="text-yellow-800 mt-1 mb-4">A simple success alert</p>
                                    </div>

                                    <div class="px-6 py-3 text-center relative bg-sky-100 border-2 border-sky-200 rounded alert-dismissible" role="alert">
                                        <button class="alert-close absolute ltr:ml-auto rtl:mr-auto text-zinc-500 text-lg top-2 right-3"><i class="mdi mdi-close"></i></button>
                                        <div class="mt-2 mb-4">
                                            <i class="mdi mdi-alert-circle-outline text-6xl text-sky-500"></i>
                                        </div>
                                        <h5 class="text-sky-500">Success</h5>
                                        <p class="text-sky-800 mt-1 mb-4">A simple success alert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Footer Start -->
               @include('Layouts.footer')
                <!-- end Footer -->
            </div>
        </div>
    </div>
@endsection