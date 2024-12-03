@extends('Layouts.layout')
@section('content')
        <div class="main-content"> 
            <div class="page-content dark:bg-zinc-700">
                
                <div class="container-fluid px-[0.625rem]">

                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">SweetAlert 2</h4>
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                    <li class="inline-flex items-center">
                                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                            Extended
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">SweetAlert 2</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    

                    <div class="grid grid-cols-1">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Examples</h6>
                            </div>
                            <div class="card-body relative overflow-x-auto">
                                <table class="table w-full text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="col" class="w-[50%] text-start p-3">
                                                Sweet Alert Type
                                            </th>
                                            <th scope="col" class="text-center p-3">
                                                Sweet Alert Examples
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A Basic Message
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-basic">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A Title with a Text Under
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-title">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A success message!
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-success">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A warning message, with a function attached to the "Confirm"-button...
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-warning">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                By passing a parameter, you can execute something else for "Cancel".
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-params">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A message with custom Image Header
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-image">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A message with auto close timer
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-close">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                Custom HTML description and buttons
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="custom-html-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A custom positioned dialog
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="sa-position">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                A message with custom width, padding and background
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="custom-padding-width-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-50 dark:border-zinc-600">
                                            <th scope="row" class="text-start p-3">
                                                Ajax request example
                                            </th>
                                            <td class="text-center p-3">
                                                <button type="button" class="btn text-xs bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30" id="ajax-alert">Click me</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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