@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Form Validation</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Form Validation</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Validation - Normal</h6>
                            </div>
                            <div class="card-body">
                               <form>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationCustom01">First name</label>
                                                <div class="relative">
                                                    <input type="text" class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationCustom01" placeholder="First name" value="Mark" required="">
                                                    <i class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div class="text-xs text-green-500 mt-2">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationCustom02">Last name</label>
                                                <div class="relative">
                                                    <input type="text" class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationCustom02" placeholder="Last name" value="Otto" required="">
                                                    <i class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>   
                                                    <div class="text-xs text-green-500 mt-2"> Looks good! </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-4">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationCustom03">City</label>
                                                <div class="relative">
                                                    <input type="text" class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10" id="validationCustom03" placeholder="City" required="">
                                                    <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="text-xs text-red-500 mt-2"> Please provide a valid city.</div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationCustom04">State</label>
                                                <div class="relative">
                                                    <input type="text" class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10" id="validationCustom04" placeholder="State" required="">
                                                    <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                    <div class="text-xs text-red-500 mt-2"> Please provide a valid state.</div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationCustom05">Zip</label>
                                                 <div class="relative">
                                                    <input type="text" class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10" id="validationCustom05" placeholder="Zip" required="">
                                                    <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="text-xs text-red-500 mt-2"> Please provide a valid zip.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <div class="mb-3">
                                                <div class="form-check mt-3">
                                                    <input type="checkbox" class="rounded align-middle focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500" id="formrow-customCheck">
                                                    <label class="text-red-500 ltr:ml-2 rtl:mr-2" for="invalidCheck">Agree to terms and conditions</label>
                                                    <div class="text-xs text-red-500 mt-1 ml-7">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn bg-violet-500 border-transparent text-white mt-3 focus:ring focus:ring-violet-50" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Validation (Tooltips)</h6>
                            </div>
                            <div class="card-body">
                               <form>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-4">
                                            <div class="mb-3 relative">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationTooltip01">First name</label>
                                               <div class="relative">
                                                    <input type="text" class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationTooltip01" placeholder="First name" value="Mark" required="">
                                                    <i class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div class="text-xs text-white mt-2 bg-green-500/90 inline-block p-3 rounded absolute z-50">Looks good! </div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="mb-3 relative">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationTooltip02">Last name</label>
                                                <div class="relative">
                                                    <input type="text" class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationTooltip02" placeholder="Last name" value="Otto" required="">
                                                    <i class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>    
                                                <div class="text-xs text-white mt-2 bg-green-500/90 inline-block p-3 rounded absolute z-50"> Looks good! </div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="mb-3 relative">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationTooltipUsername">Username</label>
                                                <div class="inline-flex items-stretch relative w-full">
                                                    <span class="px-3 leading-[2.8] bg-gray-50 ltr:rounded-l rtl:rounded-r text-15 dark:bg-zinc-600 dark:text-gray-100" id="validationTooltipUsernamePrepend">@</span>
                                                    <input type="text" class="w-full ltr:rounded-l-none rtl:rounded-r-none border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required="">
                                                    <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="text-xs text-white mt-2 bg-red-500/90 inline-block p-3 rounded absolute left-0 -bottom-16 z-50"> Please choose a unique and valid username.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationTooltip03">City</label>
                                               <div class="relative">
                                                    <input type="text" class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationTooltip03" placeholder="City" required="">
                                                     <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                    <div class="text-xs text-white mt-2 bg-red-500/90 inline-block p-3 rounded absolute z-50">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block font-medium text-gray-700 dark:text-gray-100 mb-2" for="validationTooltip04">State</label>
                                                <div class="relaive">
                                                    <input type="text" class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10" id="validationTooltip04" placeholder="State" required="">
                                                     <i class='bx bx-error-circle absolute text-xl text-red-500 ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="text-xs text-white mt-2 bg-red-500/90 inline-block p-3 rounded absolute z-50">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn mt-8 bg-violet-500 border-transparent text-white focus:ring focus:ring-violet-50" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tailwind Validation - Normal</h6>
                            </div>
                            <div class="card-body"> 
                                <form>
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">First name</label>
                                            <input type="text" id="first_name" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="John" required>
                                        </div>
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Last name</label>
                                            <input type="text" id="last_name" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Doe" required>
                                        </div>
                                        <div>
                                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Company</label>
                                            <input type="text" id="company" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Flowbite" required>
                                        </div>  
                                        <div>
                                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Phone number</label>
                                            <input type="tel" id="phone" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                        </div>
                                        <div>
                                            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Website URL</label>
                                            <input type="url" id="website" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="flowbite.com" required>
                                        </div>
                                        <div>
                                            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Unique visitors (per month)</label>
                                            <input type="number" id="visitors" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Email address</label>
                                        <input type="email" id="email" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="john.doe@company.com" required>
                                    </div> 
                                    <div class="mb-6">
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Password</label>
                                        <input type="password" id="password" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="•••••••••" required>
                                    </div> 
                                    <div class="mb-6">
                                        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Confirm password</label>
                                        <input type="password" id="confirm_password" class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="•••••••••" required>
                                    </div> 
                                    <div class="flex items-start mb-6">
                                        <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-100 rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 dark:checked:bg-violet-500" required>
                                        </div>
                                        <label for="remember" class="ltr:ml-2 rtl:mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-violet-600 hover:underline dark:text-violet-500">terms and conditions</a>.</label>
                                    </div>
                                    <button type="submit" class="text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Submit</button>
                                </form>
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