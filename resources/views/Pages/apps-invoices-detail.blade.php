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

                    
                    <div class=" grid grid-cols-1">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="flex items-center mb-3">
                                    <div class="flex-grow">
                                        <div class="mb-4 inline-flex items-center">
                                            <img src="assets/images/logo-sm.svg" class="h-6" alt=""><span class="ltr:ml-2 rtl:mr-2 text-lg font-medium text-gray-700 dark:text-gray-100">Minia</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="mb-4">
                                            <h4 class="float-end text-16 text-gray-600 dark:text-gray-100">Invoice # 12345</h4>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-1 text-gray-700 dark:text-zinc-100">1874 County Line Road City, FL 33566</p>
                                    <p class="mb-1 text-gray-700 dark:text-zinc-100"><i class="mdi mdi-email align-middle ltr:mr-1 rtl:ml-1"></i> abc@123.com</p>
                                    <p class="mb-1 text-gray-700 dark:text-zinc-100"><i class="mdi mdi-phone align-middle ltr:mr-1 rtl:ml-1"></i> 012-345-6789</p>
                                    <hr class="my-5 border-gray-100 dark:border-zinc-600">
                                </div>

                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 md:col-span-6">
                                        <h5 class="text-15 text-gray-700 mb-3 dark:text-gray-100">Billed To:</h5>
                                        <h5 class="text-base text-gray-700 mb-2 dark:text-zinc-100">Richard Saul</h5>
                                        <p class="mb-1 text-gray-600 dark:text-zinc-100">1208 Sherwood Circle Lafayette, LA 70506</p>
                                        <p class="mb-1 text-gray-600 dark:text-zinc-100">RichardSaul@rhyta.com</p>
                                        <p class="text-gray-600 dark:text-zinc-100">337-256-9134</p>
                                    </div>
                                    <div class="col-span-12 md:col-span-6">
                                        <h5 class="text-15 mb-2 text-gray-700 dark:text-gray-100">Order Date:</h5>
                                        <p class="text-gray-600 dark:text-zinc-100">February 16, 2020</p>
                                        <div class="my-4">
                                            <h5 class="text-15 text-gray-700 mb-1 dark:text-gray-100">Payment Method:</h5>
                                            <p class="mb-1 text-gray-600 dark:text-zinc-100">Visa ending **** 4242</p>
                                            <p class="text-gray-600 dark:text-zinc-100">richards@email.com</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-2 mt-3">
                                    <h5 class="text-15 text-gray-700 dark:text-gray-100">Order summary</h5>
                                    <div class="card mt-3 dark:border-zinc-600">
                                        <div class="p-6">
                                            <table class="w-full">
                                                <thead class="border-b border-gray-50 dark:border-zinc-600 ">
                                                    <th class="p-3 w-28 text-start text-gray-700 dark:text-gray-100">No.</th>
                                                    <th class="text-start p-3 text-gray-700 dark:text-gray-100">Item</th>
                                                    <th class="text-end p-3 w-32 text-gray-700 dark:text-gray-100">Price</th>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b border-gray-50 dark:border-zinc-600 "> 
                                                        <th scope="row" class="text-start p-3 text-gray-700 dark:text-gray-100">01</th>
                                                        <td class="p-3">
                                                            <h5 class="text-15 mb-1 text-gray-700 dark:text-gray-100">Minia</h5>
                                                            <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0">Bootstrap 5 Admin Dashboard </p>
                                                        </td>
                                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">$499.00</td>
                                                    </tr>
                                                    <tr class="border-b border-gray-50 dark:border-zinc-600 "> 
                                                        <th scope="row" class="text-start p-3 text-gray-700 dark:text-gray-100">02</th>
                                                        <td class="p-3">
                                                            <h5 class="text-15 mb-1 text-gray-700 dark:text-gray-100">Skote</h5>
                                                            <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0">Bootstrap 5 Admin Dashboard </p>
                                                        </td>
                                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">$499.00</td>
                                                    </tr>
                                                    <tr class="border-b border-gray-50 dark:border-zinc-600 ">
                                                        <th scope="row" colspan="2" class="text-end p-3 text-gray-700 dark:text-gray-100">Sub Total</th>
                                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">$998.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="2" class="text-end p-3 text-gray-700 dark:text-gray-100">Tax</th>
                                                        <td class="text-end p-3 text-gray-500 dark:text-zinc-100">$12.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="2" class="text-end p-3 text-gray-700 dark:text-gray-100">Total</th>
                                                        <td class="p-3 text-gray-700 dark:text-gray-100 text-end"><h4 class="m-0">$1010.00</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="float-right pb-5 space-x-2">
                                        <a href="" class="btn bg-green-500 border-transparent text-white shadow-md shadow-green-200 dark:shadow-zinc-600"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn bg-violet-500 border-violet-500 text-white w-28 shadow-md shadow-violet-100 dark:shadow-zinc-600">Send</a>
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