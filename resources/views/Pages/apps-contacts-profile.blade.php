@extends('Layouts.layout')
@section('content')
        <div class="main-content">
            <div class="page-content dark:bg-zinc-700">
                <div class="container-fluid px-[0.625rem]">
                    <div class="grid grid-cols-1 mb-5">
                        <div class="flex items-center justify-between">
                            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Profile</h4>
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
                                            <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Profile</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    
                    <div class=" grid grid-cols-12 gap-4">
                       <div class="col-span-12 lg:col-span-9">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body ">
                                    <div class="grid grid-cols-12 ">
                                        <div class="col-span-9">
                                            <div class="flex flex-wrap items-center">
                                                <div class="h-20 w-20 ltr:mr-1 rtl:ml-1">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-full">
                                                </div>
                                                <div>
                                                    <h5 class="text-16 mb-1 text-gray-700 dark:text-gray-100">Phyllis Gatlin</h5>
                                                    <p class="text-gray-500 dark:text-zinc-100 text-13">Full Stack Developer</p>

                                                    <div class="flex flex-wrap items-start gap-2 text-13 mt-3">
                                                        <div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>Development</div>
                                                        <div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>phyllisgatlin@minia.com</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <div class="flex flex-wrap justify-end">
                                                <button type="button" class="btn bg-gray-50/50 border-transparent dark:bg-zinc-700 dark:text-gray-100"><i class="me-1"></i> Message</button>
                                                <div class="dropstart text-end relative">
                                                    <a class="btn border-transparent px-6 py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
                                                        <li><a
                                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50"
                                                            href="#">Action</a>
                                                        </li>
                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                            bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50" href="#">Another action</a >
                                                        </li>
                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                            text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <ul class="flex border-t border-gray-50 mt-5 pt-5 dark:border-zinc-600" id="pills-tab" role="tablist">
                                        <li>
                                            <a class="py-5 px-3 active text-violet-500 border-violet-300 border-b-2 dark:border-violet-500 font-medium " data-bs-toggle="tab" href="#overview" role="tab" aria-selected="true">Overview</a>
                                        </li>
                                        <li>
                                            <a class="py-5 px-3 font-medium text-gray-700 dark:text-gray-100" data-bs-toggle="tab" href="#about" role="tab" aria-selected="false" tabindex="-1">About</a>
                                        </li>
                                        <li>
                                            <a class="py-5 px-3 font-medium text-gray-700 dark:text-gray-100" data-bs-toggle="tab" href="#post" role="tab" aria-selected="false" tabindex="-1">Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-50 dark:border-zinc-600">
                                    <h5 class="text-15 text-gray-700 dark:text-gray-100">About</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="pb-3">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2">
                                                    <div>
                                                        <h5 class="text-15 text-gray-700 dark:text-gray-100">Bio :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-span-10">
                                                    <div class="text-gray-500 dark:text-zinc-100">
                                                        <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                        <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-2">
                                                    <div>
                                                        <h5 class="text-15 text-gray-700 dark:text-gray-100">Experience :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-span-10">
                                                    <div class="text-gray-500 dark:text-zinc-100">
                                                        <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                        <ul class="list-unstyled mb-0 text-gray-500 dark:text-zinc-100 mt-4">
                                                            <li class="py-1"><i class="mdi mdi-circle-medium ltr:mr-1 rtl:ml-1 text-green-500 align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium ltr:mr-1 rtl:ml-1 text-green-500 align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium ltr:mr-1 rtl:ml-1 text-green-500 align-middle"></i>Integer ante a consectetuer eget</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium ltr:mr-1 rtl:ml-1 text-green-500 align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-50 dark:border-zinc-600">
                                    <div class="flex">
                                        <div class="grow">
                                            <h5 class="text-15 text-gray-700 dark:text-gray-100">Post</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#post" class="text-violet-500 font-medium">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   <div>
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="card p-1 dark:border-zinc-600">
                                                    <div class="p-4">
                                                        <div class="flex items-start">
                                                            <div class="flex-grow">
                                                                <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Beautiful Day with Friends</a></h5>
                                                                <p class="text-13 text-gray-500 dark:text-zinc-100 mt-2 mb-0">10 Apr, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropstart text-end relative">
                                                                    <button class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </button>
                                                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-600 dark:border-transparent dark:text-white" aria-labelledby="dropdownMenu1">
                                                                        <li><a
                                                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                                            href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                            bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Another action</a >
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                            text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Something else here</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img src="assets/images/small/img-3.jpg" alt="" class="border p-1 border-gray-50 rounded dark:border-zinc-600">
                                                    </div>
                                                    <div class="p-4">
                                                        <ul class="inline-flex mb-4">
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Project
                                                                </a>
                                                            </li>
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-comment-dots align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 12 Comments
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p class="text-gray-500 dark:text-zinc-100 mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                        <div>
                                                            <a href="" class="text-violet-500">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="card p-1 dark:border-zinc-600">
                                                    <div class="p-4">
                                                        <div class="flex items-start">
                                                            <div class="flex-grow">
                                                                <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Drawing a sketch</a></h5>
                                                                <p class="text-13 text-gray-500 dark:text-zinc-100 mt-2 mb-0">24 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropstart text-end relative">
                                                                    <button class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-600 dark:border-transparent dark:text-white " aria-labelledby="dropdownMenu1">
                                                                        <li><a
                                                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                                            href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                            bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Another action</a >
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                            text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Something else here</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img src="assets/images/small/img-1.jpg" alt="" class="border p-1 border-gray-50 rounded dark:border-zinc-600">
                                                    </div>
                                                    <div class="p-4">
                                                        <ul class="inline-flex mb-4">
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Development
                                                                </a>
                                                            </li>
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-comment-dots align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p class="text-gray-500 dark:text-zinc-100 mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus quos</p>
                                                        <div>
                                                            <a href="" class="text-violet-500">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-4">
                                                <div class="card p-1 dark:border-zinc-600">
                                                    <div class="p-4">
                                                        <div class="flex items-start">
                                                            <div class="flex-grow">
                                                                <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Project discussion with team</a></h5>
                                                                <p class="text-13 text-gray-500 dark:text-zinc-100 mt-2 mb-0">20 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropstart text-end relative">
                                                                    <button class="btn border-transparent py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </button>
                                                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-600 dark:border-transparent dark:text-white" aria-labelledby="dropdownMenu1">
                                                                        <li><a
                                                                            class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                                            href="#">Action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                            bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Another action</a >
                                                                        </li>
                                                                        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                            text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50" href="#">Something else here</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img src="assets/images/small/img-5.jpg" alt="" class="border p-1 border-gray-50 rounded dark:border-zinc-600">
                                                    </div>
                                                    <div class="p-4">
                                                        <ul class="inline-flex mb-4">
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Project
                                                                </a>
                                                            </li>
                                                            <li class="ltr:mr-3 rtl:ml-3">
                                                                <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                    <i class="bx bx-comment-dots align-middle text-gray-500 dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p class="text-gray-500 dark:text-zinc-100 mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus quos</p>
                                                        <div>
                                                            <a href="" class="text-violet-500">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-span-12 lg:col-span-3">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-3">Skills</h5>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">Photoshop</a>
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">illustrator</a>
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">HTML</a>
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">Javascript</a>
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">Php</a>
                                        <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50/50 hover:bg-violet-50 duration-300 dark:bg-violet-500/20">Python</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-4">Portfolio</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#" class="py-2 d-block text-gray-500 dark:text-zinc-100 "><i class="mdi mdi-web text-violet-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                        </li>
                                        <li class="mt-4">
                                            <a href="#" class="py-2 d-block text-gray-500 dark:text-zinc-100"><i class="mdi mdi-note-text-outline text-violet-500 ltr:mr-1 rtl:ml-1"></i> Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <h5 class="text-15 text-gray-700 dark:text-gray-100 mb-4">Similar Profiles</h5>
                                    <div class="list-group">
                                            <a href="#">
                                                <div class="flex items-center p-4 border-b border-gray-50 dark:border-zinc-600">
                                                    <div class="avatar-sm flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="h-8 w-8 rounded-full border p-1 border-gray-100 dark:border-zinc-600">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div>
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">James Nix</h5>
                                                            <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0">Full Stack Developer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="flex items-center p-4 border-b border-gray-50 dark:border-zinc-600">
                                                    <div class="avatar-sm flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="h-8 w-8 rounded-full border p-1 border-gray-100 dark:border-zinc-600">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div>
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">Darlene Smith</h5>
                                                            <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0">UI/UX Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="flex items-center p-4">
                                                    <div class="avatar-sm flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <div class="bg-gray-50/50 h-8 w-8 text-22 rounded-full text-center text-gray-100">
                                                            <i class="bx bxs-user-circle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div>
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">William Swift</h5>
                                                            <p class="text-13 text-gray-500 dark:text-zinc-100 mb-0">Backend Developer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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