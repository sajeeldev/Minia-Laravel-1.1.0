@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 h-screen">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Table Edit</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Tables
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Table Edit</a>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 dark:border-zinc-600">Table Edit</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits w-full text-left">
                                        <thead>
                                            <tr class="border-b border-gray-50 text-gray-700 dark:text-gray-100 dark:border-zinc-600">
                                                <th class="p-3">ID</th>
                                                <th class="p-3">Name</th>
                                                <th class="p-3">Age</th>
                                                <th class="p-3">Gender</th>
                                                <th class="p-3">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600">
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="1">
                                                <td class="p-3 dark:text-zinc-100" data-field="id" style="width: 80px">1</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">David McHenry</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">24</td>
                                                <td class="pl-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100" style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="2">
                                                <td class="p-3 dark:text-zinc-100" data-field="id">2</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">Frank Kirk</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">22</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="3">
                                                <td  class="p-3 dark:text-zinc-100" data-field="id">3</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="name">Rafael Morales</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="age">26</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td  class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="4">
                                                <td  class="p-3 dark:text-zinc-100" data-field="id">4</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="name">Mark Ellison</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="age">32</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td  class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="5">
                                                <td  class="p-3 dark:text-zinc-100" data-field="id">5</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="name">Minnie Walter</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="age">27</td>
                                                <td  class="p-3 dark:text-zinc-100" data-field="gender">Female</td>
                                                <td  class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
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
    

     <!-- Table Editable plugin -->
         <script src="assets/libs/table-edits/build/table-edits.min.js"></script>

        <script src="assets/js/pages/table-editable.int.js"></script>
@endsection