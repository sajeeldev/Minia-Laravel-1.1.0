@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Pricing</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Pricing</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-50 pb-5 dark:border-zinc-600">
                            <div class="flex items-center justify-between">
                                <h6 class="text-15 text-gray-600 dark:text-gray-100">Start your creative project right plans</h6>

                                    <div class="justify-self-center">
                                    <ul id="tabs" class="flex w-full gap-3">
                                        <li class="font-medium text-14 active relative"><a id="default-tab" href="#monthly" class=" text-violet-500 p-5">Monthly</a>
                                            <div class="after:content-[''] after:absolute after:border-b after:block after:text-sm after:font-medium after:w-full after:border-violet-500 after:-bottom-5 translate-y-0.5 after:pt-2"></div>
                                        </li>
                                        <li class="font-medium text-14 dark:text-white px-3"><a href="#yearly">Yearly </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body flex flex-wrap gap-4 items-center">
                            <div id="tab-contents">
                                <div id="monthly">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Starter</h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$29 <span class="text-gray-500 dark:text-zinc-100/60 text-base ">/ Month</span></h1>
                                                        <p class="text-gray-500 dark:text-zinc-100/60 mt-3 text-15 ">For small teams trying out Minia for an unlimited 
                                                                    period of time</p>
                                                        <div class="mt-4 pt-2 text-muted">
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="mt-5 pt-2 text-center">
                                                            <a href="" class="btn w-full order-2 border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Professional</h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$49 <span class="text-gray-500 dark:text-zinc-100/60 text-base ">/ Month</span></h1>
                                                        <p class="text-gray-500 dark:text-zinc-100/60 mt-3 text-15 ">For small teams trying out Minia for an unlimited 
                                                                    period of time</p>
                                                        <div class="mt-4 pt-2 text-muted">
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="mt-5 pt-2 text-center">
                                                            <a href="" class="btn w-full order-2 border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body bg-violet-500 overflow-hidden rounded">
                                                    <div class="p-2 relative">
                                                        <div class="w-48 text-center p-1 text-violet-500 font-medium bg-white ltr:rotate-45 rtl:-rotate-45 absolute ltr:-right-20 rtl:-left-20 top-0">
                                                            <span >Featured</span>
                                                        </div>
                                                        <h5 class="text-base text-white">Enterprise</h5>
                                                        <h1 class="mt-3 text-white ">$79 <span class="text-base ">/ Month</span></h1>
                                                        <p class="text-white/50  mt-3 text-15 ">For small teams trying out Minia for an unlimited 
                                                                    period of time</p>
                                                        <div class="mt-4 pt-2 text-muted">
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-white"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="mt-5 pt-2 text-center">
                                                            <a href="" class="btn border-transparent block bg-white w-100 hover:bg-gray-50/50 transition-all duration-300 shadow shadow-white/30 dark:bg-zinc-700 dark:text-gray-50 dark:shadow-zinc-500">Choose Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Unlimited</h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$99 <span class="text-gray-500 dark:text-zinc-100/60 text-base ">/ Month</span></h1>
                                                        <p class="text-gray-500 dark:text-zinc-100/60 mt-3 text-15 ">For small teams trying out Minia for an unlimited 
                                                                    period of time</p>
                                                        <div class="mt-4 pt-2 text-muted">
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-15 text-gray-500 dark:text-zinc-100/60"><i class="mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2 align-middle"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="mt-5 pt-2 text-center">
                                                            <a href="" class="btn w-full order-2 border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="yearly" class="hidden">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                        jsijcisdxnuija
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
                <div class="grid grid-cols-12 gap-5 mb-5">
                    <div class="col-span-12 ">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="text-15 text-gray-600 dark:text-gray-100">Project Plans</h6>
                            </div>
                            <div class="card-body">
                                <div id="tab-contents">
                                    <div id="monthly">
                                        <div class="grid grid-cols-12 gap-4 ">
                                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                                <div class="card border-0 space-y-4 ">
                                                    <div class="p-4 px-5 border border-violet-500 rounded">
                                                        <div id="v-pills-tab" role="tablist">
                                                            <a class="mb-3 active" id="v-pills-tab-one" data-bs-toggle="pill" href="#v-price-one" role="tab" aria-controls="v-price-one" aria-selected="true">
                                                                <div class="flex items-center">
                                                                    <i class="bx bx-check-circle text-2xl mb-0 ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                                    <div class="flex-1">
                                                                        <h2 class="text-gray-600 dark:text-gray-100">$29 <span class="text-muted text-15 text-gray-500 dark:text-zinc-100/60">/ Month Plans</span></h2>
                                                                        <p class=" mb-0 text-gray-500 dark:text-zinc-100/60">For small teams trying out Minia for an unlimited period of time</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="p-5 border rounded border-gray-50 dark:border-zinc-600">
                                                        <div class="" id="v-pills-tab" role="tablist">
                                                            <a class="mb-3 active" id="v-pills-tab-one" data-bs-toggle="pill" href="#v-price-one" role="tab" aria-controls="v-price-one" aria-selected="true">
                                                                <div class="flex items-center">
                                                                    <i class="bx bx-check-circle text-2xl mb-0 ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                                    <div class="flex-1">
                                                                        <h2 class="text-gray-600 dark:text-gray-100">$79  <span class="text-muted text-15 text-gray-500 dark:text-zinc-100/60">/ Month Plans</span></h2>
                                                                        <p class=" mb-0 text-gray-500 dark:text-zinc-100/60">For small teams trying out Minia for an unlimited period of time</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="p-5 border rounded border-gray-50 dark:border-zinc-600">
                                                        <div class="" id="v-pills-tab" role="tablist">
                                                            <a class="mb-3 active" id="v-pills-tab-one" data-bs-toggle="pill" href="#v-price-one" role="tab" aria-controls="v-price-one" aria-selected="true">
                                                                <div class="flex items-center">
                                                                    <i class="bx bx-check-circle text-2xl mb-0 ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                                    <div class="flex-1">
                                                                        <h2 class="text-gray-600 dark:text-gray-100">$99 <span class="text-muted text-15 text-gray-500 dark:text-zinc-100/60">/ Month Plans</span></h2>
                                                                        <p class=" mb-0 text-gray-500 dark:text-zinc-100/60">For small teams trying out Minia for an unlimited period of time</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-span-9">
                                                <table class="border-collapse border border-gray-50 w-full dark:border-zinc-600">
                                                    <tbody>
                                                        <tr class="border-b text-center border-gray-50 dark:border-zinc-600">
                                                            <td class="border-r border-gray-50 dark:border-zinc-600"></td>
                                                            <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                                <div class="py-3">
                                                                    <h6 class="text-gray-600 dark:text-gray-100">1 Month</h6>
                                                                </div>
                                                            </td>
                                                            <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                                <div class="py-3">
                                                                    <h6 class="text-gray-600 dark:text-gray-100">3 Month</h6>
                                                                </div>
                                                            </td>
                                                            <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                                <div class="py-3">
                                                                    <h6 class="text-gray-600 dark:text-gray-100">6 Month</h6>
                                                                </div>
                                                            </td>
                                                            <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                                <div class="py-3">
                                                                    <h6 class="text-gray-600 dark:text-gray-100">1 Year</h6>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Users</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">1</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">3</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">5</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">7</td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Storage</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">1 GB</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">10 GB</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">20 GB</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">40 GB</td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Domain</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-close-circle text-red-400 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">1</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">2</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">4</td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Hidden Fees</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">Yes</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">Yes</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">No</td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">No</td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Support</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-close-circle text-red-400 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-check-circle text-green-600 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-check-circle text-green-600 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-check-circle text-green-600 text-xl"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-gray-50 text-center text-gray-600 dark:text-gray-100 dark:border-zinc-600">
                                                            <th scope="row" class="border-r border-gray-50 dark:border-zinc-600">Update</th>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-close-circle text-red-400 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-close-circle text-red-400 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-check-circle text-green-600 text-xl"></i>
                                                                </div>
                                                            </td>
                                                            <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                                <div>
                                                                    <i class="mdi mdi-check-circle text-green-600 text-xl"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="yearly" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                            jsijcisdxnuija
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