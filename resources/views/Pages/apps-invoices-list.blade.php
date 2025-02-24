@extends('Layouts.layout')
@section('content')
        <div class="main-content">
            <div class="page-content dark:bg-zinc-700">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Invoice List</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Invoice List</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-1 ">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-9">
                                        <button type="button" class="btn bg-gray-50 border-transparent text-gray-800 dark:bg-zinc-600 dark:text-gray-100"><i class="bx bx-plus me-1"></i> Add Invoice</button>
                                    </div>
                                    <div class="col-span-12 lg:col-span-3">
                                        <div class="flex items-center mt-5 lg:mt-0 lg:justify-end">
                                            <div class="inline-flex datepicker-range">
                                                <input type="hidden" class="flatpickr-input" data-input="" aria-describedby="date1">
                                                <input class="py-1.5 border-gray-100 flatpickr-input form-control input -z-10 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" tabindex="0" type="text" readonly="readonly">
                                                <button class="btn ltr:border-l-0 rtl:border-r-0 ltr:rounded-l-none rtl:rounded-r-none bg-gray-50/50 dark:bg-zinc-500 dark:border-zinc-600 dark:text-gray-100" id="date1" data-toggle=""><i class="bx bx-calendar-event"></i></button>
                                            </div>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-gray-100 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                        href="#">Action</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                        bg-transparent text-gray-700" href="#">Another action</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                        text-gray-700 hover:bg-gray-50/50" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-5">
                                    <div class="flex flex-wrap items-center">
                                        <div>
                                            <label for="countries_multiple" class="text-gray-600 dark:text-gray-100">Show 
                                            <select id="countries" class="py-0.5 w-16 inline-block text-11 bg-white border border-gray-100 text-gray-900 rounded p-2.5 focus:ring-1 focus:ring-violet-50 dark:bg-zinc-800 dark:text-gray-100 dark:border-zinc-600">
                                                <option selected>10</option>
                                                <option value="US">20</option>
                                                <option value="CA">30</option>
                                                <option value="FR">40</option>
                                                <option value="DE">50</option>
                                            </select>
                                            entries</label>
                                        </div>
                                        <div class="ltr:ml-auto rtl:mr-auto">
                                            <label class="dark:text-gray-100">Search:
                                                <input type="search" class="py-0.5 px-1 w-40 rounded border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 relative overflow-x-auto">
                                    <table class="w-full">
                                        <thead class="border-b border-gray-50 dark:border-zinc-600 cursor-pointer">
                                            <tr class="text-gray-700">
                                                <th class="relative w-8 text-start p-4">
                                                    <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th >
                                                <th class="relative w-[120px] text-start p-4 dark:text-gray-100">Invoice ID
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-[218px] text-start p-4 dark:text-gray-100">Date
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-72 text-start p-4 dark:text-gray-100">Billing Name
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-44 text-start p-4 dark:text-gray-100">Amount
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-40 text-start p-4 dark:text-gray-100">Status
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-40 text-start p-4 dark:text-gray-100">Download Pdf
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                                <th class="relative w-[90px] text-start p-4 dark:text-gray-100">Action
                                                     <div class="hidden xl:block after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                                    <div class="hidden xl:block before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0215</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">12 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Connie Franco</td>
                                                <td class="p-4 dark:text-zinc-100">$26.30</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0214</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">11 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Paul Reynolds</td>
                                                <td class="p-4 dark:text-zinc-100">$24.20</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0213</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">10 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Ronald Patterson</td>
                                                <td class="p-4 dark:text-zinc-100">$20.20</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-yellow-50 inline-block text-yellow-500 px-1 py-0.5 rounded font-medium dark:bg-yellow-500/30">Pending</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0212</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">09 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Adella Perez</td>
                                                <td class="p-4 dark:text-zinc-100">$16.80</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0211</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">08 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Theresa Mayers</td>
                                                <td class="p-4 dark:text-zinc-100">$22.00</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0210</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">07 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Michael Wallace</td>
                                                <td class="p-4 dark:text-zinc-100">$15.60</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0209</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">06 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Oliver Gonzales</td>
                                                <td class="p-4 dark:text-zinc-100">$26.50</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-yellow-50 inline-block text-yellow-500 px-1 py-0.5 rounded font-medium dark:bg-yellow-500/30">Pending</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0208</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">05 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">David Burke</td>
                                                <td class="p-4 dark:text-zinc-100">$24.20</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0207</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">04 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Willie Verner</td>
                                                <td class="p-4 dark:text-zinc-100">$21.30</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-yellow-50 inline-block text-yellow-500 px-1 py-0.5 rounded font-medium dark:bg-yellow-500/30">Pending</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr class="border-b border-gray-50 dark:border-zinc-600 text-gray-600">
                                                <td>
                                                    <div class="p-4">
                                                        <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-4">
                                                        <a href="javascript: void(0);" class="text-black font-medium dark:text-gray-100">#MN0206</a>
                                                    </div>
                                                </td>
                                                <td class="p-4 dark:text-zinc-100">03 Oct, 2020</td>
                                                <td class="p-4 dark:text-zinc-100">Felix Perry</td>
                                                <td class="p-4 dark:text-zinc-100">$22.60</td>
                                                <td class="p-4">
                                                    <div class="text-xs bg-green-50 inline-block text-green-500 px-1 py-0.5 rounded font-medium dark:bg-green-500/30">Paid</div>
                                                </td>
                                                <td class="p-4">
                                                    <button type="button" class=" p-0 border-transparent bg-gray-50/30 rounded hover:bg-gray-50/50/80 transition-all duration-300 dark:bg-zinc-600/50 dark:text-zinc-100"><i class="bx bx-download label-icon px-2 py-1.5 bg-gray-200/20 text-black rounded-l dark:bg-zinc-600/50 dark:text-gray-100"></i><span class="px-4 text-13">Pdf</span> </button>
                                                </td>
                                                <td>
                                                    <div class="dropdown relative">
                                                        <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </a>
                                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -left-5 w-32 dark:bg-zinc-700
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                            <li><a
                                                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent text-gray-700 hover:bg-gray-50/50"
                                                                href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50
                                                                bg-transparent text-gray-700 hover:bg-gray-50/50" href="#">Print</a >
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 bg-transparent
                                                                text-gray-700 hover:bg-gray-50/50" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="flex items-center place-content-between mt-4">
                                     <div class="mt-4 mb-2">
                                        <p class="text-gray-600 dark:text-gray-100">Showing 1 to 10 of 12 entries</p>
                                    </div>
                                    <div class="flex">
                                        <nav aria-label="Page navigation example border">
                                            <ul class="flex list-style-none">
                                                <li class="border ltr:rounded-l rtl:rounded-r border-gray-100 dark:border-zinc-600" disabled>
                                                    <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 pointer-events-none dark:text-gray-300" 
                                                    href="#">Previous</a></li>
                                                <li class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-600">
                                                    <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 focus:shadow-none transition-all duration-300 dark:hover:bg-zinc-700 dark:hover:text-gray-100"
                                                    href="#">1</a></li>
                                                <li class="border border-l-0 border-r-0 dark:border-zinc-600"><a
                                                    class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:hover:bg-zinc-700 dark:hover:text-gray-100"
                                                    href="#">2</a></li>
                                                <li class="border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                    class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:hover:bg-zinc-700 dark:hover:text-gray-100"
                                                    href="#">Next</a></li>
                                            </ul>
                                        </nav>
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