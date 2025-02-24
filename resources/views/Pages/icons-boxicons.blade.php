@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Box Icon</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Icons
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Box Icon</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Examples</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="text-gray-700 dark:text-gray-100">Regular</h5>
                         <div class="grid grid-cols-12 gap-5 mt-6">
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-sticker h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sticker
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-shield-quarter h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield-quarter
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-upside-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upside-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-laugh h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-laugh
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-meh-blank h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh-blank
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-happy-beaming h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-beaming
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-shocked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shocked
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-sleepy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sleepy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-confused h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-confused
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-wink-smile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wink-smile
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-dizzy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dizzy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-happy-heart-eyes h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-heart-eyes
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-angry h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-angry
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-smile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-smile
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-tired h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tired
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-cool h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cool
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-happy-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-wink-tongue h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wink-tongue
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-meh-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-food-menu h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-food-menu
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-food-tag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-food-tag
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-female-sign h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-female-sign
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-male-sign h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-male-sign
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                <i class="bx bx-female h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-female
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-male h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-male
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-clinic h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-clinic
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-health h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-health
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shekel h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shekel
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-yen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-yen
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-won h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-won
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pound h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pound
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-euro h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-euro
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rupee h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rupee
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-ruble h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ruble
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-lira h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lira
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bitcoin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bitcoin
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-tone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tone
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bolt-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bolt-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cake h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cake
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-spa h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-spa
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dish h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dish
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-fridge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fridge
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-image-add h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image-add
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-image-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-space-bar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-space-bar
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-alarm-add h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm-add
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-archive-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive-out     
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-archive-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive-in
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-add-to-queue h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-add-to-queue      
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-radius h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-radius
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-check-shield h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-shield
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-label h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-label
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-file-find h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file-find
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-face h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-face
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-extension h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-extension
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-exit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-exit
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-conversation h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-conversation
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sort-z-a h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-z-a
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sort-a-z h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-a-z
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-printer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-printer
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-radio h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-customize h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-customize
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-brush-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brush-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-briefcase-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase-alt-2
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-time-five h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-time-five
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pie-chart-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart-alt-2
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-gas-pump h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-gas-pump
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mobile-vibration h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-vibration
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mobile-landscape h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-landscape
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-all h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-all
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-bottom h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-bottom 
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-top h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-top
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-border-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dialpad-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dialpad-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-filter-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-filter-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-brightness h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brightness
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-brightness-half h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brightness-half
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wifi-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wifi-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-credit-card-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-credit-card-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-band-aid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-band-aid
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hive h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hive
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-map-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map-pin
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-line-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-line-chart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-receipt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-receipt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-purchase-tag-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-purchase-tag-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-basket h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-basket
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-palette h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-palette
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-no-entry h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-no-entry
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-alt-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-alt-dots
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-check-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-log-out-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-out-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-log-in-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-in-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-doughnut-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-doughnut-chart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-building-house h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-building-house
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-accessibility h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-accessibility
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-voice h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-voice
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cuboid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cuboid
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cube-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cube-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-polygon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-polygon
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-square-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-square-rounded
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-error-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shield-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield-alt-2
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paint-roll h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paint-roll
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-droplet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-droplet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-street-view h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-street-view
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-plus-medical h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus-medical
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-search-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search-alt-2
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bowling-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bowling-ball
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dna h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dna
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cycling h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cycling
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shape-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-down-arrow-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-up-arrow-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-arrow-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-arrow-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-lock-open-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-open-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-lock-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cylinder h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cylinder
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pyramid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pyramid
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-comment-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-comment-dots
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-comment h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-comment
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-landscape h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-landscape
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-book-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-open
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-transfer-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-transfer-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-copy-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copy-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-run h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-run
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-pin
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-grid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-code-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mail-send h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mail-send
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-ghost h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ghost
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shape-triangle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-triangle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shape-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-video-recording h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-recording
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-notepad h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notepad
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bug-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bug-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mouse-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mouse-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-edit-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-edit-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chat h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chat
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-book-content h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-content
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-square-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-square-dots
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-slideshow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slideshow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wallet-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wallet-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-memory-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-memory-card
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-rounded-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-rounded-dots
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-dots
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bar-chart-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-alt-2
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-store-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-store-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-buildings h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-buildings
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-home-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-money h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-money
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-walk h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-walk
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-repeat h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-repeat
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-font-family h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-family
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-joystick-button h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick-button
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paint h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paint
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-unlink h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-unlink
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-brush h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brush
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rotate-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rotate-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-badge-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-badge-check
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-show-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-show-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-caret-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-caret-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-caret-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-up
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-caret-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-event h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-event
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-magnet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-magnet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rewind-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rewind-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-card
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-help-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-help-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-test-tube h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-test-tube
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-note h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-note
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sort-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sort-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-up
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-id-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-id-card
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-badge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-badge
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-grid-small h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-small
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-grid-vertical h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-vertical
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-grid-horizontal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-horizontal
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-move-vertical h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move-vertical
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-move-horizontal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move-horizontal
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-stats h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stats
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-equalizer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-equalizer
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-disc h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-disc
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-analyse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-analyse
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-search-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dollar-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dollar-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-football h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-football
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ball
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-transfer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-transfer
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-fingerprint h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fingerprint
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-font-color h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-color
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-highlight h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-highlight
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-file-blank h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file-blank
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-strikethrough h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-strikethrough
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-photo-album h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-photo-album
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-code-block h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-block
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-font-size h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-size
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-handicap h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-handicap
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dialpad h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dialpad
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wind h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wind
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-water h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-water
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-swim h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-swim
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-restaurant h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-restaurant
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-box h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-box
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-menu-alt-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu-alt-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-menu-alt-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu-alt-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-video-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-list-ol h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-ol
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-planet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-planet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hotel h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hotel
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-movie h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-movie
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-taxi h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-taxi
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-train h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-train
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bath h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bath
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bed h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bed
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-area h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-area
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bot h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bot
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dumbbell h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dumbbell
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-check-double h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-double
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-check-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rocket h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rocket
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-certification h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-certification
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-slider-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slider-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sad h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sad
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-meh h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-happy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cart-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cart-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-car h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-car
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-loader-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-loader-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wrench h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wrench
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-alarm-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-layout h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-layout
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dock-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dock-top h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-top
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dock-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dock-bottom h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-bottom
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dock-bottom h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-bottom
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-world h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-world
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-selection h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-selection
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paper-plane h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paper-plane
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-slider h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slider
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-loader h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chalkboard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chalkboard
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-trash-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trash-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-grid-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-command h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-command
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-window-close h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window-close
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-notification-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notification-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-plug h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plug
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-infinite h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-infinite
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-carousel h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-carousel
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hourglass h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hourglass
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-briefcase-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wallet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wallet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-station h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-station
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-collection h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-collection
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-tv h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tv
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-closet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-closet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paperclip h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paperclip
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-expand h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-expand
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pen
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-purchase-tag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-purchase-tag
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-images h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-images
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pie-chart-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-news h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-news
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-downvote h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-downvote
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-upvote h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upvote
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-globe-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-globe-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-store h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-store
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hdd h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hdd
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-skip-previous-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-previous-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-skip-next-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-next-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chip h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chip
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cast h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cast
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-body h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-body
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-phone-outgoing h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-outgoing
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-phone-incoming h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-incoming
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-collapse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-collapse
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rename h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rename
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rotate-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rotate-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-horizontal-center h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-horizontal-center
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-ruler h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ruler
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-import h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-import
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-battery h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-battery
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-server h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-server
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-task h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-task
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-folder-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-open
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-film h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-film
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-aperture h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-aperture
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-phone-call h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-call
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-up-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-undo h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-undo
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-timer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-timer
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-support h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-support
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-subdirectory-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-subdirectory-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-revision h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-revision
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-repost h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-repost
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-reply h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reply
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-reply-all h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reply-all
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-redo h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-redo
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-radar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radar
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-poll h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-poll
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-list-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-check
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-like h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-like
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-joystick-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-history h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-history
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-flag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-flag
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-first-aid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-first-aid
                            </div>    
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-export h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-export
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-down-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dislike h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dislike
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-crown h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crown
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-barcode h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-barcode
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-x
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-user-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-check
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-underline h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-underline
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-trophy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trophy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-trash h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trash
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-text h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-text
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sun h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sun
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-star h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-star
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sort h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shuffle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shuffle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shopping-bag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shopping-bag
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shield h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-shield-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-share h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-share
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-share-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-share-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-select-multiple h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-select-multiple
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-screenshot h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-screenshot
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-save h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-save
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pulse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pulse
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-power-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-power-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pin
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pencil h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pencil
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pin
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pencil h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pencil
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paste h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paste
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-paragraph h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paragraph
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-package h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-package  
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-notification h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notification
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-music h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-music
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-move h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mouse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mouse
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-microphone-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-microphone-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-log-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-out
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-log-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-in
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-link-external h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link-external
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-joystick h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-italic h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-italic
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-home-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-heading h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-heading
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hash h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hash
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-group h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-group
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-repo-forked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-repo-forked
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-pull-request h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-pull-request
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-merge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-merge
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-compare h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-compare
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-commit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-commit
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-git-branch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-branch
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-font h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-filter h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-filter
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-file h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-edit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-edit
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-diamond h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-diamond
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-detail h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-detail
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cut h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cut
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cube h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cube
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-crop h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crop
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-credit-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-credit-card
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-columns h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-columns
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cog h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cog
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-snow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-snow
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-rain h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-rain
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-lightning h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-lightning
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-light-rain h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-light-rain
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-drizzle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-drizzle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calculator h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calculator
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bold h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bold
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-award h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-award
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-anchor h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-anchor
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-album h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-album
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-adjust h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-adjust
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-x
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-table h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-table
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-duplicate h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-duplicate
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-windows h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-windows
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-window h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-window-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window-open
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-wifi h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wifi
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-voicemail h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-voicemail
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-video-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-usb h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-usb
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-upload h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upload
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-alarm h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-tennis-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tennis-ball
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-target-lock h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-target-lock
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-tag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tag
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-tab h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tab
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-spreadsheet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-spreadsheet
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sitemap h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sitemap
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sidebar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sidebar
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-send h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-send
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pie-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-phone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-navigation h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-navigation
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mobile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-mobile-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-message-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-rounded
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-map h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-map-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-lock h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-lock-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-open
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-list-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-list-ul h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-ul
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-list-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-link h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-link-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-layer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-layer
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-laptop h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-laptop
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-home h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-heart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-heart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-headphone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-headphone
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-devices h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-devices
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-globe h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-globe
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-gift h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-gift
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-envelope h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-envelope
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-download h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-download
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dots-vertical h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-vertical
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dots-vertical-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-vertical-rounded
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dots-horizontal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-horizontal
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dots-horizontal-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-horizontal-rounded
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-dollar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dollar
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-directions h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-directions
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-desktop h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-desktop
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-data h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-data
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-compass h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-compass
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-crosshair h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crosshair
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-terminal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-terminal
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-upload h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-upload
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-cloud-download h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-download
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-x
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-check
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-calendar-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-buoy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-buoy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bulb h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bulb
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bluetooth h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bluetooth
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bug h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bug
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-building h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-building
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-broadcast h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-broadcast
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-briefcase h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bookmark-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bookmark-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-book h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-book-bookmark h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-bookmark
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-block h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-block
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-basketball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-basketball
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bar-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bar-chart-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bar-chart-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-alt
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-at h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-at
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-archive h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-zoom-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-zoom-out
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-zoom-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-zoom-in
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-x-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-x-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-volume h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-volume-mute h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-mute
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-volume-low h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-low
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-volume-full h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-full
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-video h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-vertical-center h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-vertical-center
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-up-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-trending-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trending-up
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-trending-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trending-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-toggle-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-toggle-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-toggle-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-toggle-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-time h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-time
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-sync h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sync
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-stopwatch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stopwatch
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-stop h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stop
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-stop-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stop-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-skip-previous h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-previous
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-skip-next h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-next
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-show h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-show
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-search h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rss h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rss
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-top-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-top-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-indent h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-indent
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-down-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-right-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-reset h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reset
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rewind h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rewind
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-rectangle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rectangle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-radio-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-radio-circle-marked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio-circle-marked
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-question-mark h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-question-mark
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-plus-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-play h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-play
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-play-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-play-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pause h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pause
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-pause-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pause-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-moon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-moon
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-minus-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-minus-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-microphone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-microphone
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-menu h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-top-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-top-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-indent h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-indent
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-down-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-left-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-last-page h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-last-page
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-key h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-key
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-align-justify h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-justify
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-info-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-info-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-image h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-hide h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hide
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-fullscreen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fullscreen
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-folder h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-folder-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-folder-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-first-page h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-first-page
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-fast-forward h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fast-forward
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-fast-forward-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fast-forward-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-exit-fullscreen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-exit-fullscreen
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-error h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-error-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow-circle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-copyright h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copyright
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-copy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copy
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-coffee h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-coffee
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-code h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-code-curly h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-curly
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-clipboard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-clipboard
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevrons-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevrons-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevrons-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-up
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevrons-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevron-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevron-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-left
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevron-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-up
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-chevron-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-down
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-checkbox-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox-square
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-checkbox h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-checkbox-checked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox-checked
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-captions h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-captions
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-camera h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-camera
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-camera-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-camera-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bullseye h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bullseye
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bookmarks h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmarks
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bookmark h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bell h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bell-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-plus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bell-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-off
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-bell-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-minus
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-arrow-back h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-arrow-back
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-align-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-right
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-align-middle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-middle
                            </div>
                            <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                <i class="bx bx-align-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-left
                            </div>

                        </div>

                        <div class="mt-10">
                            <h5 class="text-gray-700 dark:text-gray-100">Solid Icons</h5>
                            <div class="grid grid-cols-12 gap-5 mt-6">
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wink-tongue h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wink-tongue
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-upside-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-upside-down
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-happy-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-laugh h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-laugh
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-meh-blank h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh-blank
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cool h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cool
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tired h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tired
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-happy-beaming h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-beaming
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-shocked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shocked
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-happy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-sad h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sad
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-sleepy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sleepy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-confused h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-confused
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-meh-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-meh h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-smile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-smile
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wink-smile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wink-smile
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dizzy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dizzy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-happy-heart-eyes h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-heart-eyes
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-angry h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-angry
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-business h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-business
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-camera-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-food-menu h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-food-menu
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-offer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-offer
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-clinic h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-clinic
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hand-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hand-down h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-down
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hand-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hand-up h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-up
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-baby-carriage h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-baby-carriage
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-caret-left-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-left-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-caret-right-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-right-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-caret-down-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-down-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-caret-up-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-up-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tone
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bolt-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bolt-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-city h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-city
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cake h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cake
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-spa h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-spa
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dish h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dish
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-fridge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-fridge
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-image-add h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image-add
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-alarm-add h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm-add
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-archive-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive-out
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-archive-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive-in
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-add-to-queue h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-add-to-queue
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-check-shield h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-shield
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-label h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-label
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-face h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-face
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-find h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-find
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-extension h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-extension
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-exit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-exit
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-brush-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brush-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-layout h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-layout
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-alt-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-alt-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-alt-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-alt-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-mobile-vibration h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mobile-vibration
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-fast-forward-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-fast-forward-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-rewind-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rewind-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-carousel h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-carousel
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-customize h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-customize
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-event h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-event
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-check
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-x
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-minus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calendar h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-briefcase-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase-alt-2
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bookmark-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-minus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bookmarks h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmarks
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-time-five h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-time-five
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pie-chart-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart-alt-2
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-time h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-time
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-timer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-timer
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-stopwatch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-stopwatch
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-compass h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-compass
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-check
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-x
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-grid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-grid
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-zoom-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zoom-out
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-zoom-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zoom-in
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-search h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-search
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bell-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-minus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bell-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-folder-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-minus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-mobile h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mobile
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-data h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-data
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-skip-next-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skip-next-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-skip-previous-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skip-previous-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-chalkboard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chalkboard
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-school h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-school
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-institution h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-institution
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-left-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-down-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-left-top-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-top-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-right-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-down-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-right-top-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-top-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-down-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-up-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-left-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-right-arrow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-rectangle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rectangle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-brightness h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brightness
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-brightness-half h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brightness-half
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-paint h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paint
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-credit-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-credit-card
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-credit-card-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-credit-card-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-band-aid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-band-aid
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-map-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map-pin
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-receipt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-receipt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-purchase-tag-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-purchase-tag-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-basket h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-basket
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-palette h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-palette
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plane-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-component h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-component
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-traffic-barrier h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-traffic-barrier
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-no-entry h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-no-entry
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-alt-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-alt-dots
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-check-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-square 
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-notification-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notification-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-notification h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notification
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-log-out h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-out
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-log-in h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-in
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-log-out-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-out-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-log-in-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-in-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-doughnut-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-doughnut-chart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-building-house h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-building-house
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-comment-error h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-error
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-voice h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-voice
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cuboid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cuboid
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cube-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cube-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-polygon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-polygon
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-square-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-square-rounded
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-error-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-shield-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shield-alt-2
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-paint-roll h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paint-roll
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-comment-add h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-add
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-droplet-half h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-droplet-half
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-search-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-search-alt-2
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bowling-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bowling-ball
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hourglass-bottom h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass-bottom
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hourglass-top h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass-top
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-lock-open-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-open-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-lock-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-graduation h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-graduation
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-vial h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-vial
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cylinder h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cylinder
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pyramid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pyramid
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wine h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wine
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-comment-detail h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-detail
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-comment-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-dots
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-comment h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-traffic h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-traffic
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-landscape h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-landscape
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-adjust-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-adjust-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-id-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-id-card
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-parking h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-parking
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plane-land h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-land
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plane-take-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-take-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-analyse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-analyse
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-gif h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-gif
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-jpg h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-jpg
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-png h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-png 
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-txt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-txt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-md h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-md
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-json h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-json
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-js h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-js
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-css h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-css
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-html h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-html
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-copy-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-copy-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-doc h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-doc
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-pin
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-single-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-single-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-single-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-single-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-ghost h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ghost
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-direction-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-direction-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-video-recording h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-recording
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-notepad h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notepad
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bug-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bug-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-mouse-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mouse-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-edit-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-edit-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-chat h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chat
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-book-content h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book-content
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-square-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-square-dots
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-slideshow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-slideshow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bank h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bank
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wallet-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wallet-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-memory-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-memory-card
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-devices h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-devices
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-rounded-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-rounded-dots
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-dots h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-dots
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bar-chart-alt-2 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bar-chart-alt-2
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-store-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-store-alt 
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-buildings h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-buildings
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-home-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-home-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-pdf h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-pdf
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-yin-yang h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-yin-yang
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-ship h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ship
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-factory h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-factory
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tree h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tree
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plane h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-rectangle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-rectangle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-eyedropper h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eyedroppers
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cloud-lightning h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-lightning
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cloud-rain h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-rain
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-eraser h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eraser
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-magic-wand h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-magic-wand
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hotel h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hotel
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-color-fill h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-color-fill
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-capsule h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-capsule
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-flask h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flask
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-joystick-button h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick-button
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-direction-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-direction-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-directions h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-directions
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-megaphone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-megaphone
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-keyboard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-keyboard
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-brush h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brush
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-coffee-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coffee-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-badge-check h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-badge-check
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-landmark h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-landmark
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-gas-pump h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-gas-pump
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-badge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-badge
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-right-arrow-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-down-arrow-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-up-arrow-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-left-arrow-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-ambulance h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ambulance
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-magnet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-magnet
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-card h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-card
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-help-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-help-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-note h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-note
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-badge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-badge
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-flame h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flame
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-disc h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-disc
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-minus-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-minus-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plus-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plus-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-x-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-x-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-microphone-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-image-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-skull h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skull
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dollar-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dollar-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-film h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-film
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ball
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-edit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-edit
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-blank h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-blank
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bell-ring h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-ring
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-photo-album h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-photo-album
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-key h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-key
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-video-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-box h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-box
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-planet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-planet
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-movie h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-movie
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-taxi h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-taxi
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-train h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-train
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bath h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bath
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bed h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bed
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-area h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-area
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bot h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bot
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-star-half h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-star-half
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-checkbox-checked h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-checkbox-checked
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-checkbox h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-checkbox
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-check-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-rocket h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rocket
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-certification h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-certification
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dashboard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dashboard
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-conversation h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-conversation
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-battery-low h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-low
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-folder-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-open
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-zap h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zap
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-x-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-x-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wrench h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wrench
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-widget h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-widget
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-watch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-watch
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-watch-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-watch-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-wallet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wallet
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-volume h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-volume-mute h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-mute
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-volume-low h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-low
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-volume-full h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-full
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-videos h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-videos
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-video h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-video-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-minus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-minus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-detail h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-detail
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-user-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-upvote h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-upvote
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-up-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-truck h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-truck
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-trophy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trophy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-trash h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trash
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-trash-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trash-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-torch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-torch
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-toggle-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-toggle-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-to-top h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-to-top
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-terminal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-terminal
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tennis-ball h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tennis-ball
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tag
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-tag-x h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tag-x
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-t-shirt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-t-shirt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-sun h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sun
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-store h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-store
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-star h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-star
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-spreadsheet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-spreadsheet
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-show h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-show
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-shopping-bag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shopping-bag
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-shopping-bag-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shopping-bag-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-shield h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shield
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-share h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-share
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-share-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-share-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-server h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-server
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-send h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-send
                                </div>   
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-select-multiple h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-select-multiple
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-sort-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sort-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-save h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-save
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-ruler h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ruler
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-right-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-report h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-report
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-rename h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rename
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-radio h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-radio
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-quote-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-purchase-tag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-purchase-tag
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-printer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-printer
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plus-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plus-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-plug h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plug
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-playlist h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-playlist
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pin
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pie-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pie-chart-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-phone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-phone-outgoing h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-outgoing
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-phone-incoming h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-incoming
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-phone-call h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-call
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pencil h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pencil
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-pen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pen
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-paste h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paste
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-paper-plane h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paper-plane
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-package h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-package
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-news h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-news
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-navigation h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-navigation
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-music h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-music
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-mouse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mouse
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-moon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-moon
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-minus-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-minus-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-microphone h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-microphone-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-message-rounded h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-rounded
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-map h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-map-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-lock h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-lock-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-open
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-like h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-like
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-left-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-layer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-layer
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-joystick h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-joystick-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-info-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-info-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-inbox h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-inbox
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-image h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hourglass h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hot h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hot
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-home h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-home
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hide h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hide
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-heart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-heart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-hdd h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hdd
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-group h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-group
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-grid-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-grid-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-gift h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-gift
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-flag h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flag
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-flag-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flag-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-first-aid h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-first-aid
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-filter-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-filter-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-file-image h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-image
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-error h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-error-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-envelope h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-envelope
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-eject h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eject
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-duplicate h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-duplicate
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-droplet h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-droplet
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-drink h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-drink
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-downvote h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-downvote
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-download h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-download
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-down-arrow-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dock-top h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-top
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dock-right h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-right
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dock-left h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-left
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dock-bottom h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-bottom
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-dislike h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dislike
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-discount h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-discount
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-detail h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-detail
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cube h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cube
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-crown h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-crown
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-coupon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coupon
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-copy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-copy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-contact h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-contact
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-collection h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-collection
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cog h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cog
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-coffee h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coffee
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cloud h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cloud-upload h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-upload
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cloud-download h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-download
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-chip h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chip
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-chart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-cart-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cart-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-car h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-car
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-captions h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-captions
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-calculator h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calculator
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-buoy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-buoy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bulb h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bulb
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-building h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-building
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bug h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bug
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-briefcase-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-briefcase h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bookmark-star h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-star
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-book-open h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book-open
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bookmark-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bookmark h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-book h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bolt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bolt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bell-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bell h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-battery-full h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-full
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-battery-charging h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-charging
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-battery h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-barcode h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-barcode
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-bar-chart-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bar-chart-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-award h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-award
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-folder-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-folder h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-camera-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-camera h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-archive h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-album h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-album
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-alarm-off h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm-off
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-alarm h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 sm:col-span-6 group dark:text-zinc-100">
                                    <i class="bx bxs-adjust h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-adjust
                                </div>
                                
                            </div>
                        </div>

                        <div class="mt-10">
                            <h5 class="text-gray-700 dark:text-gray-100">Logos</h5>
                            <div class="grid grid-cols-12 gap-5 mt-6">
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-redbubble h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-redbubble
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-patreon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-patreon
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-gitlab h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-gitlab
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-etsy h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-etsy
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-figma h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-figma
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-audible h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-audible
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-algolia h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-algolia
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-adobe h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-adobe
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-pinterest-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pinterest-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-imdb h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-imdb
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-jquery h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-jquery
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-facebook-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-instagram-alt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-instagram-alt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-flickr-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-flickr-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-whatsapp-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-whatsapp-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-squarespace h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-squarespace
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-medium-old h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium-old
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-mailchimp h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-mailchimp
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-wix h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wix
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-trello h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-trello
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-spotify h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-spotify
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-soundcloud h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-soundcloud
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-snapchat h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-snapchat
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-less h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-less
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-flickr h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-flickr
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-shopify h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-shopify
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-jsfiddle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-jsfiddle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-css3 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-css3
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-microsoft h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-microsoft
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-yahoo h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-yahoo
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-bootstrap h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bootstrap
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-redux h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-redux
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-mastercard h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-mastercard
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-visa h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-visa
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-baidu h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-baidu
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-chrome h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-chrome
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-dailymotion h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dailymotion
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-joomla h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-joomla
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-internet-explorer h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-internet-explorer
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-paypal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-paypal
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-edge h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-edge
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-stripe h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-stripe
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-telegram h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-telegram
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-wordpress h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wordpress
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-periscope h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-periscope
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-react h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-react
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-bing h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bing
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-vuejs h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vuejs
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-kickstarter h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-kickstarter
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-nodejs h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-nodejs
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-javascript h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-javascript
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-firefox h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-firefox
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-stack-overflow h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-stack-overflow
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-magento h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-magento
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-product-hunt h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-product-hunt
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-html5 h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-html5
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-git h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-git
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-quora h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-quora
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-yelp h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-yelp
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-airbnb h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-airbnb
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-opera h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-opera
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-invision h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-invision
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-foursquare h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-foursquare
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-sass h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-sass
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-wikipedia h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wikipedia
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-unsplash h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-unsplash
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-digg h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-digg
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-amazon h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-amazon
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-ebay h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-ebay
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-drupal h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-drupal
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-dropbox h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dropbox
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-discourse h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-discourse
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-deviantart h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-deviantart
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-digitalocean h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-digitalocean
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-creative-commons h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-creative-commons
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-codepen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-codepen
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-angular h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-angular
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-messenger h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-messenger
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-pocket h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pocket
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-vk h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vk
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-windows h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-windows
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-play-store h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-play-store
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-android h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-android
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-apple h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-apple
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-blogger h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-blogger
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-pinterest h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pinterest
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-reddit h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-reddit
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-discord h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-discord
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-twitch h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-twitch
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-slack h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-slack
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-slack-old h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-slack-old
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-skype h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-skype
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-medium-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-medium h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-linkedin-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-linkedin-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-google-plus-circle h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google-plus-circle
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-google-plus h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google-plus
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-facebook-square h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook-square
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-bitcoin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bitcoin
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-linkedin h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-linkedin
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-vimeo h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vimeo
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-dribbble h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dribbble
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-behance h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-behance
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-tumblr h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-tumblr
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">  
                                    <i class="bx bxl-whatsapp h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-whatsapp
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-youtube h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-youtube
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-twitter h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-twitter
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-instagram h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-instagram
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-google h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-github h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-github
                                </div>
                                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 group dark:text-zinc-100">
                                    <i class="bx bxl-facebook h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook
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
@endsection