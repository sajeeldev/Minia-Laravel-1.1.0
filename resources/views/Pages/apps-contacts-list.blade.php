@extends('Layouts.layout')
@section('content')
    <div class="main-content">
            <div class="page-content dark:bg-zinc-700">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">User List</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">User List</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-1">
                        <div class="grid grid-cols-12 items-stretch">
                            <div class="col-span-12 lg:col-span-6 self-center">
                                <h5 class="text-15 text-gray-600 dark:text-gray-100">Contact List <span class="text-gray-500 font-normal ml-2 dark:text-zinc-100">(834)</span></h5>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                                    <div>
                                        <ul class="flex flex-wrap ">
                                            <li class="nav-item ">
                                                <a class="nav-link py-2 px-4 text-gray-600 text-16 dark:text-gray-100" href="apps-contacts-list.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List"><i class="bx bx-list-ul"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active py-2 px-4 bg-violet-500 rounded text-white text-16" href="apps-contacts-grid.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#" class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i class="bx bx-plus me-1"></i> Add New</a>
                                    </div>
                                    <div>
                                        <div class="dropstart text-end relative ">
                                            <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle dark:text-gray-100" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 top-5 list-none text-left ltr:-right-10 rtl:-left-10 w-40
                                                rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-800" aria-labelledby="dropdownMenu1">
                                                <li><a
                                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100"
                                                    href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                    bg-transparent text-gray-700  hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100" href="#">Another action</a >
                                                </li>
                                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                    text-gray-700  hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <div class="flex flex-wrap items-center">
                                <div>
                                    <label for="countries_multiple" class="text-gray-600 dark:text-gray-100">Show 
                                    <select id="countries" class="py-0.5 w-16 inline-block text-11 bg-white border border-gray-100 text-gray-900 rounded p-2.5 focus:ring-1 focus:ring-violet-50 dark:focus:ring-zinc-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100">
                                        <option selected>10</option>
                                        <option value="US">20</option>
                                        <option value="CA">30</option>
                                        <option value="FR">40</option>
                                        <option value="DE">50</option>
                                    </select>
                                    entries</label>
                                </div>
                                <div class="ltr:md:ml-auto rtl:md:mr-auto mt-4 md:mt-0">
                                    <label class="dar
                                    text-gray-100">Search:
                                        <input type="search" class="py-0.5 px-1 w-40 rounded border-gray-100 ml-2 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 relative overflow-x-auto">
                            <table class="w-full">
                                <thead class="border-b border-gray-50 cursor-pointer dark:border-zinc-600">
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="relative text-start p-4 dark:text-gray-100">
                                            <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th >
                                        <th class="relative text-start p-4 dark:text-gray-100">Name
                                                <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th>
                                        <th class="relative text-start p-4 dark:text-gray-100">Position
                                                <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th>
                                        <th class="relative text-start p-4 dark:text-gray-100">Email
                                                <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th>
                                        <th class="relative text-start p-4 dark:text-gray-100">Tags
                                                <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th>
                                        <th class="relative w-28 text-start p-4 dark:text-gray-100">Action
                                            <div class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1"></div>
                                            <div class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100">Phyllis Gatlin</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">UI/UX Designer</td>
                                        <td class="p-4 dark:text-zinc-50">phyllisgatlin@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Photoshop</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">illustrator</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100">James Nix</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Frontend Developer</td>
                                        <td class="p-4 dark:text-zinc-50">jamesnix@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Html</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Css</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">2 + more</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100">Darlene Smith</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Backend Developer</td>
                                        <td class="p-4 dark:text-zinc-50">darlenesmith@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Php</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Java</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Python</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <div class="h-8 w-8 rounded-full bg-gray-50/30 text-center ltr:mr-2 rtl:ml-2">
                                                <i class="bx bxs-user-circle text-2xl text-gray-100 leading-snug"></i>
                                            </div>
                                            <a href="#" class="text-gray-700 dark:text-gray-100">William Swift</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Full Stack Developer</td>
                                        <td class="p-4 dark:text-zinc-50">williamswift@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Ruby</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Php</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">2 + more</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <div class="h-8 w-8 rounded-full bg-gray-50/30 text-center ltr:mr-2 rtl:ml-2">
                                                <i class="bx bxs-user-circle text-2xl text-gray-100 leading-snug"></i>
                                            </div>
                                            <a href="#" class="text-gray-700 dark:text-gray-100">Kevin West</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Frontend Developer</td>
                                        <td class="p-4 dark:text-zinc-50">kevinwest@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Html</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Css</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">2 + more</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100"> Tommy Hayes</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">UI/UX Designer</td>
                                        <td class="p-4 dark:text-zinc-50">tommyhayes@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Photoshop</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">illustrator</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100"> Diana Owens</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Graphic Designer</td>
                                        <td class="p-4 dark:text-zinc-50">dianaowens@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Photoshop</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">illustrator</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100"> Paul Sanchez</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Angular Developer</td>
                                        <td class="p-4 dark:text-zinc-50">paulsanchez@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Php</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Javascript</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100"> Peter Dryer</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Web Designer</td>
                                        <td class="p-4 dark:text-zinc-50">peterdryer@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Html</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Css</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">2 + more</div>
                                        </td>
                                        <td>
                                            <div class="dropup relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class="dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left w-32
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                        <td>
                                            <div class="p-4">
                                                <input type="checkbox" value="" class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                            </div>
                                        </td>
                                        <td class="inline-flex items-center p-4">
                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            <a href="#" class="text-gray-700 dark:text-gray-100">Gerald Moyer</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">Backend Developer</td>
                                        <td class="p-4 dark:text-zinc-50">geraldmoyer@minia.com</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Php</div>
                                            <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">Javascript</div>
                                        </td>
                                        <td>
                                            <div class="dropup relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class="dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left w-32
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu123">
                                                    <li><a
                                                        class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                        href="#">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                        bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Print</a >
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex items-center place-content-between mt-4 mb-16">
                            <div class="mt-4 mb-2">
                                <p class="text-gray-600 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>
                            </div>
                            <div class="flex mt-2.5">
                                <nav aria-label="Page navigation example border">
                                     <ul class="flex list-style-none">
                                        <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                            <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-400 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none" 
                                            href="#">Previous</a></li>
                                            <li class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-500 dark:bg-zinc-800">
                                                <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none transition-all duration-300"
                                                href="#">1</a></li>
                                        <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">2</a></li>
                                             <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                            <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none" 
                                            href="#">Next</a></li>
                                    </ul>
                                </nav>
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