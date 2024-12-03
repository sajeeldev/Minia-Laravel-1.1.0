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
                                    <a href="#"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">User
                                            List</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class=" grid grid-cols-1">
                    <div class="grid grid-cols-12 items-stretch">
                        <div class="col-span-12 lg:col-span-6 self-center">
                            <h5 class="text-15 text-gray-600 dark:text-gray-100">Users List <span
                                    class="text-gray-500 font-normal ml-2 dark:text-zinc-100">(834)</span></h5>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                                <div>
                                    <a href="{{ route('create.users') }}"
                                        class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i
                                            class="bx bx-plus me-1"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-5 relative overflow-x-auto">
                        <table class="w-full">
                            <thead class="border-b border-gray-50 cursor-pointer dark:border-zinc-600">

                                <tr class="text-gray-700 dark:text-gray-100">

                                    <th class="relative text-start p-4 dark:text-gray-100">Name

                                    </th>
                                    <th class="relative text-start p-4 dark:text-gray-100">Position

                                    </th>
                                    <th class="relative text-start p-4 dark:text-gray-100">Email

                                    </th>
                                    <th class="relative text-start p-4 dark:text-gray-100">Tags

                                    </th>
                                    <th class="relative w-28 text-start p-4 dark:text-gray-100">Action

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">

                                        <td class="inline-flex items-center p-4">
                                            @if ($user->image)
                                                <img src="{{ asset($user->image) }}" alt="User Image" 
                                                class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            @else
                                                <img src="{{ asset('images/image.jpg') }}" alt="Default Image"
                                                class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">
                                            @endif
                                            {{-- <img src="/images/{{ $user->image }}" alt=""
                                                class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2"> --}}
                                            <a href="#"
                                                class="text-gray-700 dark:text-gray-100">{{ $user->name }}</a>
                                        </td>
                                        <td class="p-4 dark:text-zinc-50">{{ $user->position }}</td>
                                        <td class="p-4 dark:text-zinc-50">{{ $user->email }}</td>
                                        <td class="p-4 flex flex-wrap gap-1">
                                            <div
                                                class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                                {{ $user->tags }}</div>
                                            <div
                                                class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                                {{ $user->tags }}</div>
                                        </td>
                                        <td>
                                            <div class="dropdown relative">
                                                <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle"
                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                    id="dropdownMenu123" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 -top-2 list-none text-left -left-5 w-32 dark:bg-zinc-600 dark:text-gray-100 
                                                    rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                    aria-labelledby="dropdownMenu123">
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                            href="{{ route('custom.edit', ['id' => $user->id]) }}">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                        text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50"
                                                            href="{{ route('detroy', ['id' => $user->id]) }}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
                                    <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"
                                        disabled>
                                        <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-400 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none"
                                            href="#">Previous</a>
                                    </li>
                                    <li
                                        class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none transition-all duration-300"
                                            href="#">1</a>
                                    </li>
                                    <li
                                        class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">2</a>
                                    </li>
                                    <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"
                                        disabled>
                                        <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none"
                                            href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <footer
                    class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href=""
                                class="text-violet-500 underline">Themesbrand</a></div>

                    </div>
                </footer>
                <!-- end Footer -->
            </div>
        </div>
    </div>
@endsection
