@extends('Layouts.layout')
@section('content')
        <div class="main-content">

            <div class="page-content dark:bg-zinc-700">

                <div class="container-fluid px-[0.625rem]">

                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Blog Details</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Blog Details</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                    <div class=" grid grid-cols-1">

                        <div class="grid grid-cols-1 xl:grid-cols-12 gap-5">

                            <div class="col-span-12 xl:col-span-8">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <h4 class="text-gray-700 text-21 dark:text-gray-100">Beautiful Day with Friends</h4>
                                        </div>
                                        <div class="mb-4">
                                            <img src="assets/images/small/img-2.jpg" alt="" class="border border-gray-100 dark:border-zinc-600 dark:bg-zinc-700 mx-auto p-1 rounded">
                                        </div>

                                        <div class="grid grid-cols-12">
                                            <div class="col-span-4">
                                                <div class="text-center">
                                                    <h6 class="mb-2 text-gray-700 dark:text-gray-100">Categories</h6>
                                                    <p class="text-gray-500 dark:text-zinc-100 text-15 mb-3">Project</p>
                                                </div>
                                            </div>
                                            <div class="col-span-4">
                                                <div class="text-center">
                                                    <h6 class="mb-2 text-gray-700 dark:text-gray-100">Date</h6>
                                                    <p class="text-gray-500 dark:text-zinc-100 text-15 mb-3">20 June, 2022</p>
                                                </div>
                                            </div>
                                             <div class="col-span-4">
                                                <div class="text-center">
                                                    <p class="text-gray-500 dark:text-zinc-100 mb-2">Post by</p>
                                                    <h5 class="text-15 mb-3 text-gray-700 dark:text-gray-100">Gilbert Smith</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4 border-gray-100 dark:border-zinc-600">

                                        <div class="mt-4">
                                            <div class="text-gray-500 dark:text-zinc-100 text-14">
                                                <p class="mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam enim ad minima veniam quis</p>

                                                <p class="mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt</p>

                                                <blockquote class="p-6 border border-gray-100 rounded mb-4 dark:border-zinc-600">
                                                    <div class="flex">
                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                            <i class="bx bxs-quote-alt-left text-2xl text-gray-900 dark:text-gray-100"></i>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium deleniti atque corrupti quos dolores et quas molestias excepturi sint quidem rerum facilis est</p>
                                                        </div>
                                                    </div>

                                                </blockquote>

                                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit</p>


                                                <div class="mt-4">
                                                    <h5 class="mb-3 text-gray-700 dark:text-gray-100">Title: </h5>

                                                    <div>
                                                        <div class="grid grid-cols-12">
                                                            <div class="col-span-4">
                                                                <div>
                                                                    <ul class="ltr:pl-5 rtl:pr-5 list-disc">
                                                                        <li class="py-1">Donec sodales sagittis</li>
                                                                        <li class="py-1">Sed consequat leo eget</li>
                                                                        <li class="py-1">Aliquam lorem ante</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-span-4">
                                                                <div>
                                                                    <ul class="ltr:pl-5 rtl:pr-5 list-disc">
                                                                        <li class="py-1">Aenean ligula eget</li>
                                                                        <li class="py-1">Cum sociis natoque</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="my-5 border-gray-50 dark:border-zinc-600">

                                            <div class="mt-8">
                                                <h5 class="text-15 text-gray-700 dark:text-gray-100"><i class="bx bx-message-dots align-middle mr-1"></i> Comments :</h5>
                                                <div class="mt-4">
                                                    <div class="flex py-5">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <div>
                                                                <i class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">Delores Williams <small class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">1 hr Ago</small></h5>
                                                            <p class="text-gray-500 dark:text-zinc-100 mb-5">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual</p>
                                                            <div>
                                                                <a href="javascript: void(0);" class="text-green-500"><i class="mdi mdi-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex py-5 border-t border-gray-50 dark:border-zinc-600">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="h-4 w-4 rounded-full">
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow">
                                                            <h5 class="text-sm mb-1 dark:text-gray-100">Clarence Smith <small class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">2 hrs Ago</small></h5>
                                                            <p class="text-gray-500 dark:text-zinc-100">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                            <div class="py-4">
                                                                <a href="javascript: void(0);" class="text-green-500"><i class="mdi mdi-reply"></i> Reply</a>
                                                            </div>

                                                            <div class="flex pt-3">
                                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                                    <div>
                                                                        <i class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                                    </div>
                                                                </div>

                                                                <div class="flex-grow">
                                                                    <h5 class="text-sm mb-1 dark:text-gray-100">Silvia Martinez <small class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">2 hrs Ago</small></h5>
                                                                    <p class="text-gray-500 dark:text-zinc-100">To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                                                    <div class="pt-4">
                                                                        <a href="javascript: void(0);" class="text-green-500"><i class="mdi mdi-reply"></i> Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex py-5 border-t border-gray-50 dark:border-zinc-600">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <div>
                                                                <i class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow">
                                                            <h5 class="text-sm mb-1 dark:text-gray-100">Keith McCoy <small class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">12 Aug</small></h5>
                                                            <p class="text-gray-500 dark:text-zinc-100">Donec posuere vulputate arcu. phasellus accumsan cursus velit</p>
                                                            <div class="pt-4">
                                                                <a href="javascript: void(0);" class="text-green-500"><i class="mdi mdi-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="border-gray-50 dark:border-zinc-600">

                                            <div class="mt-8">
                                                <h5 class="font-size-16 mb-3 dark:text-gray-100">Leave a Reply:</h5>

                                                <form>
                                                    <div class="grid grid-cols-12 gap-5">
                                                        <div class="col-span-6">
                                                            <div class="mb-5 block">
                                                                <label class="font-medium text-gray-700 dark:text-gray-100">Name</label>
                                                                <input type="text" class="w-full mt-2 border-gray-50 rounded placeholder:text-sm placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600" id="commentname-input" placeholder="Enter name">
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div class="mb-5 block">
                                                                <label class="font-medium text-gray-700 dark:text-gray-100">Email</label>
                                                                <input type="email" class="w-full mt-2 border-gray-50 rounded placeholder:text-sm placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600" id="commentemail-input" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="font-medium text-gray-700 dark:text-gray-100">Message</label>
                                                        <textarea class="w-full mt-2 border-gray-50 rounded placeholder:text-sm placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600" id="commentmessage-input" placeholder="Your message..." rows="3"></textarea>
                                                    </div>

                                                    <div class="text-end">
                                                        <button type="submit" class="btn w-28 bg-violet-500 border-transparent text-white shadow-md shadow-violet-200 focus:ring focus:ring-violet-100 dark:shadow-zinc-600">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 xl:col-span-4">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                    <div class="card-body">
                                        <div class="search-box">
                                            <h5 class="mb-3 text-gray-700 dark:text-gray-100">Search</h5>
                                            <div class="relative px-2">
                                                <input type="text" class="w-full border-transparent bg-gray-50/50 rounded pl-10 placeholder:text-13 text-gray-700 placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-gray-300" placeholder="Search...">
                                                <i class="mdi mdi-magnify search-icon absolute left-5 top-2 text-lg text-gray-600 dark:text-zinc-100"></i>
                                            </div>
                                        </div>
                                        <div class="mt-12">
                                            <h5 class="mb-4 text-gray-700 dark:text-gray-100">Categories</h5>
                                            <ul class="list-unstyled font-medium px-2">
                                                <li><a href="#" class="text-gray-900 pb-4 block border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Design<span class="bg-violet-50/50 text-violet-500  rounded ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-1  dark:bg-violet-500/30">02</span></a></li>
                                                <li><a href="#" class="text-gray-900 py-4 block border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Development <span class="bg-violet-50/50 text-violet-500  rounded ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left ms-1 text-xs py-0.5 px-1  dark:bg-violet-500/30">04</span></a></li>
                                                <li><a href="#" class="text-gray-900 py-4 block border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Business<span class="bg-violet-50/50 text-violet-500  rounded ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-1  dark:bg-violet-500/30">12</span></a></li>
                                                <li><a href="#" class="text-gray-900 py-4 block border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Project<span class="bg-violet-50/50 text-violet-500  rounded ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-1  dark:bg-violet-500/30">08</span></a></li>
                                                <li><a href="#" class="text-gray-900 pt-4 pb-0 block dark:text-gray-100 dark:border-zinc-600">Travel<span class="bg-violet-50/50 text-violet-500  rounded ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-1  dark:bg-violet-500/30">10</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="mt-8">
                                            <h5 class="text-gray-700 dark:text-gray-100">Upcoming Post</h5>
                                            <div class="list-group">
                                                <a href="#" class="pt-0 px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-7.jpg" alt="" class="w-16 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Beautiful Day with Friends</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">20 August, 2022 <span class="">/ 05:00 AM</span></p>
                                                        </div>
                                                        <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="border-gray-50 dark:border-zinc-600">
                                                <a href="#" class="px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-2.jpg" alt="" class="w-16 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Drawing a sketch</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">20 August, 2022 <span class="">/ 05:05 AM</span></p>
                                                        </div>
                                                        <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="border-gray-50 dark:border-zinc-600">
                                                <a href="#" class="px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-6.jpg" alt="" class="w-16 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Project discussion with team</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">20 August, 2022 <span class="">/ 05:10 PM</span></p>
                                                        </div>
                                                        <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="border-gray-50 dark:border-zinc-600">
                                                <a href="#" class="px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-1.jpg" alt="" class="w-16 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Coffee with friends</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">20 August, 2022 <span class="">/ 05:30 PM</span></p>
                                                        </div>
                                                        <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-8">
                                            <h5 class="text-gray-700 dark:text-gray-100">Popular Post</h5>
                                            <div class="list-group list-group-flush">
                                                <a href="javascript: void(0);" class="list-group-item text-muted pb-3 pt-0 px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-3.jpg" alt="" class="w-20 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Beautiful Day with Friends</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">10 Apr, 2022</p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-4.jpg" alt="" class="w-20 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Drawing a sketch</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">24 May, 2022</p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 ltr:mr-4 rtl:ml-4">
                                                            <img src="assets/images/small/img-1.jpg" alt="" class="w-20 h-auto rounded">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h5 class="text-13 text-gray-700 dark:text-gray-100">Coffee with friends</h5>
                                                            <p class="mb-0 mt-1 text-gray-500 dark:text-zinc-100">15 June, 2022</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-8">
                                            <h5 class="mb-4 text-gray-700 dark:text-gray-100">Tag Clouds</h5>
                                            <div class="flex flex-wrap gap-2 px-2">
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Design</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Development</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Wordpress</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">HTML</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Project</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Business</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Travel</span></a>
                                                <a href="#" class="text-13"><span class="bg-violet-50/50 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Photography</span></a>
                                            </div>
                                        </div>
                                        <div class="mt-8"> 
                                            <h5 class="mb-4 text-gray-700 dark:text-gray-100">Instagram Post</h5>
                                            <div class="flex flex-wrap gap-2">
                                                <img src="assets/images/small/img-3.jpg" alt="" class="h-20 w-20 rounded">
                                                <img src="assets/images/small/img-1.jpg" alt="" class="h-20 w-20 rounded">
                                                <img src="assets/images/small/img-2.jpg" alt="" class="h-20 w-20 rounded">
                                                <img src="assets/images/small/img-4.jpg" alt="" class="h-20 w-20 rounded">
                                                <img src="assets/images/small/img-5.jpg" alt="" class="h-20 w-20 rounded">
                                                <img src="assets/images/small/img-6.jpg" alt="" class="h-20 w-20 rounded">
                                            </div>
                                        </div>
                                        <div class="mt-8">
                                            <h5 class="mb-3 text-gray-700 dark:text-gray-100">Email Newsletter</h5>
                                            <div class="">
                                                <div class="inline-flex w-full mb-0 py-0">
                                                    <input type="text" class="w-full border-gray-100 placeholder:text-13 rounded ltr:rounded-r-none rtl:rounded-l-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-gray-300" placeholder="Enter Email">
                                                    <button class="btn py-0 bg-gray-50 px-4 border border-gray-100 ltr:border-l-0 rtl:border-r-0 ltr:rounded-l-none rtl:rounded-r-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100">
                                                        <i class="mdi mdi-send-outline"></i>
                                                    </button>
                                                </div>
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