@extends('Layouts.layout')
@section('content')
<div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Jquery Knob</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Charts
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Jquery Knob</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body pb-0">
                        <h4 class="text-15 text-gray-700 dark:text-gray-100">Examples</h4>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-y-12">
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Disable display input</h6>
                                    <input class="knob" data-width="150" data-fgcolor="#5156be" data-displayinput="false" value="35">  
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Cursor mode</h6>
                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#2ab57d" value="29">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Display previous value</h6>
                                    <input class="knob" data-width="150" data-min="-100" data-fgcolor="#4ba6ef" data-displayprevious="true" value="44">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Angle offset</h6>
                                    <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round" data-fgcolor="#f1734f" value="35">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">5-digit values, step 1000</h6>
                                    <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-fgcolor="#ffbf53">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Angle offset and arc</h6>
                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#fd625e" value="29">
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100">Readonly</h6>
                                    <input class="knob knob-small" data-width="150" data-height="150" data-linecap=round
                                                            data-fgColor="#f06292" value="80" data-skin="tron" data-angleOffset="180"
                                                            data-readOnly=true data-thickness=".1"/>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="flex justify-center items-center flex-col">
                                    <h6 class="mb-4 text-15 text-gray-600 dark:text-gray-100"> Angle offset and arc</h6>
                                    <input class="knob knob-small" data-width="150" data-height="150"
                                                    data-displayPrevious=true data-fgColor="#8d6e63" data-skin="tron"
                                                    data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                                    data-angleArc=250 value="44"/>
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     <!-- jquery-knob plugin  -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script> 
        <!-- jquery-knob init -->
        <script src="assets/js/pages/jquery-knob.init.js"></script>  
@endsection