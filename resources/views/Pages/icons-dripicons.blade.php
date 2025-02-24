@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Drip Icon</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Drip Icon</a>
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
                        <div class="grid grid-cols-12 gap-5 icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-alarm group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-alarm
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-align-center group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-align-center
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-align-justify group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-align-justify
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-align-left group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-align-left
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-align-right group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-align-right
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-anchor group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-anchor
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-archive group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-archive
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-down group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-down
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-left group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-left
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-right group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-right
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-thin-down group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-thin-down
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-thin-left group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-thin-left
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-thin-right group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-thin-right
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-thin-up group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-thin-up
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-arrow-up group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-arrow-up
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class=" dripicons-article group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-article
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-backspace group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-backspace
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-basket group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-basket
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-basketball group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-basketball
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-battery-empty group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-battery-empty
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-battery-full group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-battery-full
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-battery-low group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-battery-low
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-battery-medium group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-battery-medium
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-bell group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-bell
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-blog group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-blog
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-bluetooth group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-bluetooth
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-bold group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-bold
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-bookmark group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-bookmark
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-bookmarks group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-bookmarks
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-box group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-box
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-briefcase group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-briefcase
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-brightness-low group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-brightness-low
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-brightness-max group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-brightness-max
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-brightness-medium group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-brightness-medium
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-broadcast group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-broadcast
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-browser group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-browser
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-browser-upload group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-browser-upload
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-brush group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-brush
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-calendar group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-calendar
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-camcorder group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-camcorder
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-camera group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-camera
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-card group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-card
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cart group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cart
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-checklist group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-checklist
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-checkmark group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-checkmark
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-chevron-down group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-chevron-down
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-chevron-left group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-chevron-left
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-chevron-right group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-chevron-right
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-chevron-up group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-chevron-up
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-clipboard group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-clipboard
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-clock group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-clock
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-clockwise group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-clockwise
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cloud group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cloud
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cloud-download group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cloud-download
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cloud-upload group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cloud-upload
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-code group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-code
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-contract group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-contract
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-contract-2 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-contract-2
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-conversation group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-conversation
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-copy group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-copy
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-crop group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-crop
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cross group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cross
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-crosshair group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-crosshair
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-cutlery group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-cutlery
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-device-desktop group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-device-desktop
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-device-mobile group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-device-mobile
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-device-tablet group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-device-tablet
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-direction group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-direction
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-disc group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-disc
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-document group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-document
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-document-delete group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-document-delete
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-document-edit group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-document-edit
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-document-new group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-document-new
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-document-remove group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-document-remove
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-dot group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-dot
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-dots-2 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-dots-2
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-dots-3 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-dots-3
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-download group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-download
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-duplicate group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-duplicate
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-enter group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-enter
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-exit group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-exit
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-expand group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-expand
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-expand-2 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-expand-2
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-experiment group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-experiment
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-export group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-export
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-feed group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-feed
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-flag group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-flag
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-flashlight group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-flashlight
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-folder group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-folder
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-folder-open group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-folder-open
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-forward group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-forward
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-gaming group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-gaming
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-gear group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-gear
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-graduation group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-graduation
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-graph-bar group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-graph-bar
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-graph-line group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-graph-line
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-graph-pie group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-graph-pie
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-headset group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-headset
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-heart group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-heart
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-help group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-help
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-home group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-home
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-hourglass group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-hourglass
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-inbox group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-inbox
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-information group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-information
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-italic group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-italic
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-jewel group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-jewel
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-lifting group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-lifting
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-lightbulb group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-lightbulb
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-link group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-link
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-link-broken group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-link-broken
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-list group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-list
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-loading group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-loading
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-location group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-location
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-lock group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-lock
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-lock-open group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-lock-open
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-mail group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-mail
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-map group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-map
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-loop group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-loop
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-next group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-next
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-pause group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-pause
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-play group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-play
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-previous group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-previous
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-record group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-record
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-shuffle group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-shuffle
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-media-stop group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-media-stop
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-medical group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-medical
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-menu group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-menu
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-message group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-message
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-meter group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-meter
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-microphone group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-microphone
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-minus group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-minus
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-monitor group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-monitor
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-move group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-move
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-music group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-music
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-network-1 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-network-1
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-network-2 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-network-2
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-network-3 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-network-3
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-network-4 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-network-4
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-network-5 group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-network-5
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-pamphlet group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-pamphlet
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-paperclip group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-paperclip
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-pencil group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-pencil
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-phone group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-phone
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-photo group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-photo
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-photo-group group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-photo-group
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-pill group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-pill
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-pin group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-pin
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-plus group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-plus
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-power group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-power
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-preview group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-preview
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-print group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-print
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-pulse group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-pulse
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-question group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-question
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-reply group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-reply
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-reply-all group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-reply-all
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-return group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-return
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-retweet group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-retweet
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-rocket group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-rocket
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-scale group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-scale
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-search group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-search
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-shopping-bag group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-shopping-bag
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-skip group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-skip
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-stack group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-stack
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-star group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-star
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-stopwatch group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-stopwatch
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-store group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-store
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-suitcase group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-suitcase
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-swap group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-swap
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-tag group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-tag
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-tag-delete group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-tag-delete
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-tags group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-tags
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-thumbs-down group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-thumbs-down
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-thumbs-up group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-thumbs-up
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-ticket group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-ticket
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-time-reverse group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-time-reverse
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-to-do group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-to-do
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-toggles group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-toggles
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-trash group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-trash
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-trophy group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-trophy
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-upload group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-upload
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-user group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-user
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-user-group group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-user-group
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-user-id group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-user-id
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-vibrate group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-vibrate
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-view-apps group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-view-apps
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-view-list group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-view-list
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-view-list-large group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-view-list-large
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-view-thumb group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-view-thumb
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-volume-full group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-volume-full
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-volume-low group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-volume-low
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-volume-medium group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-volume-medium
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-volume-off group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-volume-off
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-wallet group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-wallet
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-warning group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-warning
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-web group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-web
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-weight group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-weight
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-wifi group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-wifi
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-wrong group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-wrong
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-zoom-in group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-zoom-in
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 group dark:text-zinc-100">
                                <i class="dripicons-zoom-out group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> dripicons-zoom-out
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