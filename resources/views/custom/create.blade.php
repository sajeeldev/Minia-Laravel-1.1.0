@extends('Layouts.layout')
@section('content')
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-12 items-stretch">
                    <div class="col-span-12 lg:col-span-6 self-center">
                        <h3 class="text-20 text-gray-600 dark:text-gray-100">Add User</h3>
                    </div>
                </div>
            </div>

            <section class="bg-dark dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new User</h2>
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="image" type="file" accept="image/*" value="{{ old('image') }}">
                                @error('image')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile
                                picture is useful to confirm your are logged into your account</div>
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type your name" >
                                    @error('name')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="position"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                <input type="text" name="position" id="position" value="{{ old('position') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Position" >
                                    @error('position')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                                    
                            </div>
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email</label>
                                <input type="text" name="email" id="email" value="{{ old('email') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type your email" >
                                    @error('email')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                            
                            <div class="w-full">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Tags</label>
                                <input type="text" name="tags" id="tags" value="{{ old('tags')}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tags" >
                                    @error('tags')
                                    <span class="text-red-600">{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="border-solid border-2 border-sky-500 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Add User
                        </button>
                    </form>
                </div>
            </section>

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
