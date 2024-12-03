@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Tabs & Accordions</h4>
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
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Tabs & Accordions</a>
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
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Default Tabs</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs border-tab">
                                    <ul class="nav w-full flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-100 dark:border-gray-700 dark:text-gray-400">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="home" class="inline-block active px-4 py-3">Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="Profile" class="inline-block px-4 py-3">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="setting" class="inline-block px-4 py-3">Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="contact" class="inline-block px-4 py-3">Contacts</a>
                                        </li>
                                    </ul>
    
                                    <div class="mt-5 tab-content">
                                        <div class="tab-pane block" id="home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tabs with underline</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs border-b-tabs">
                                    
                                    <ul class="nav w-full flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-100 dark:border-gray-700 dark:text-gray-400">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-home" class="inline-block p-4">Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-Profile" class="inline-block p-4 active ">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-setting" class="inline-block p-4">Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-contact" class="inline-block p-4">Contacts</a>
                                        </li>
                                    </ul>
    
                                    <div class="mt-5 tab-content">
                                        <div class="tab-pane hidden" id="underline-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane block" id="underline-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="underline-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="underline-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">     
                     <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tabs with underline and icons</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs border-b-tabs">
                                    <ul class="nav w-full flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-100 dark:border-gray-700 dark:text-gray-400">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-home" class="inline-block p-4 hover:border-b-2 hover:border-gray-300"><i class="mdi mdi-account-circle-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-Profile" class="inline-block p-4 active "><i class="mdi mdi-view-dashboard-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-setting" class="inline-block p-4 hover:border-b-2 hover:border-gray-300"><i class="mdi mdi-format-list-bulleted ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="underline-icon-contact" class="inline-block p-4 hover:border-b-2 hover:border-gray-300"><i class="mdi mdi-clipboard-text-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane hidden" id="underline-icon-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane block" id="underline-icon-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="underline-icon-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="underline-icon-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                     <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tabs in pills</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs tab-pill">
                                    <ul class="nav w-full flex flex-wrap text-sm font-medium text-center text-gray-500">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-pills-home" class="inline-block px-4 py-3 rounded-md active">Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-pills-Profile" class="inline-block px-4 py-3 rounded-md dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-pills-setting" class="inline-block px-4 py-3 rounded-md dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-pills-contact" class="inline-block px-4 py-3 rounded-md dark:hover:text-white">Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane block" id="tab-pills-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-pills-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-pills-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-pills-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-12 gap-5">     
                     <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Bar with icons</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs bar-tabs">
                                    <ul class="nav text-sm font-medium text-center text-gray-500 dark:divide-gray-900 rounded-lg shadow sm:flex w-full">
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="barIcon-home" class="inline-block w-full p-4 ltr:rounded-l-lg rtl:rounded-r-lg active focus:outline-none"><i class="mdi mdi-account-circle-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Profile</a>
                                        </li>
                                        <li class="w-full border-x border-gray-50">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="barIcon-Profile" class="inline-block w-full p-4 hover:text-gray-700 hover:bg-gray-50/50 focus:outline-none"><i class="mdi mdi-view-dashboard-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Dashboard</a>
                                        </li>
                                        <li class="w-full ltr:border-r rtl:border-l border-gray-50">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="barIcon-setting" class="inline-block w-full p-4 hover:text-gray-700 hover:bg-gray-50/50 focus:outline-none"><i class="mdi mdi-format-list-bulleted ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Settings</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="barIcon-contact" class="inline-block w-full p-4 ltr:rounded-r-lg rtl:rounded-l-lg hover:text-gray-700 hover:bg-gray-50/50"><i class="mdi mdi-clipboard-text-outline ltr:mr-2 rtl:ml-2 text-lg align-middle"></i>Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane block" id="barIcon-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="barIcon-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="barIcon-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="barIcon-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                     <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Bar with underline</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs bar-tabs">
                                    <ul class="nav text-sm font-medium text-center text-gray-500 dark:divide-gray-900 rounded-lg shadow sm:flex w-full overflow-hidden">
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="bar-u-home" class="inline-block w-full p-4 active">Profile</a>
                                        </li>
                                        <li class="w-full border-x border-gray-50">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="bar-u-Profile" class="inline-block w-full p-4">Dashboard</a>
                                        </li>
                                        <li class="w-full ltr:border-r rtl:border-l border-gray-50">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="bar-u-setting" class="inline-block w-full p-4">Settings</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="bar-u-contact" class="inline-block w-full p-4 ltr:rounded-r-lg rtl:rounded-l-lg">Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane block" id="bar-u-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="bar-u-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="bar-u-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="bar-u-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Enim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Full-width tabs with underline</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs border-b-tabs">
                                    <ul class="nav text-sm font-medium text-center block w-full sm:flex">
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-home" class="inline-block w-full p-4">Profile</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-Profile" class="inline-block w-full p-4 active">Dashboard</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-setting" class="inline-block w-full p-4">Settings</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-contact" class="inline-block w-full p-4">Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane hidden" id="tab-full-u-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane block" id="tab-full-u-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-full-u-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-full-u-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Enim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tabs with underline and badges</h6>
                            </div>
                            <div class="card-body flex flex-wrap">
                                <div class="nav-tabs border-b-tabs">
                                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-100 dark:border-gray-700 dark:text-gray-400">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-u-badge-home" class="inline-block h-14 p-4">
                                                Profile <span class="px-2 py-1 rounded-full bg-violet-100 text-center text-10 font-medium ml-2 text-violet-500">25</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-u-badge-Profile" class="inline-block h-14 p-4 active ">Dashboard <span class="px-2 py-1 rounded-full bg-violet-100 text-center text-10 font-medium ml-2 text-violet-500">2</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-u-badge-setting" class="inline-block h-14 p-4">Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-u-badge-contact" class="inline-block h-14 p-4">Contacts</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5">
                                        <div class="tab-pane hidden" id="tab-u-badge-home">
                                            <p class="mb-0 dark:text-gray-300">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane block" id="tab-u-badge-Profile">
                                            <p class="mb-0 dark:text-gray-300">
                                                Denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-u-badge-setting">
                                            <p class="mb-0 dark:text-gray-300">
                                                You probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                        <div class="tab-pane hidden" id="tab-u-badge-contact">
                                            <p class="mb-0 dark:text-gray-300">
                                                Enim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                voluptate nisi qui.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Accordion - Basic examples</h6>
                            </div>
                            <div class="card-body">
                                <div data-tw-accordion="collapse">
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group active flex items-center justify-between w-full p-3 font-medium text-left border border-b-0 border-gray-100 rounded-t-lg hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">What is Flowbite?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                            
                                        <div class="accordion-body block">
                                            <div class="p-5 font-light border border-b-0 border-gray-100 dark:border-zinc-600">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex items-center justify-between w-full p-3 font-medium text-left hover:bg-gray-50/50 border border-b-0 border-gray-100 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">Is there a Figma file available?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light border border-b-0 border-gray-100 dark:border-zinc-600">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                            
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex items-center justify-between w-full p-3 font-medium text-left border border-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light border border-t-0 border-gray-100 dark:border-gray-700">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                                    <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                                    <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Flush</h6>
                            </div>
                           <div class="card-body ">
                                <div data-tw-accordion="collapse">
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group active flex border-b border-gray-100 dark:border-b-zinc-600 items-center justify-between w-full p-3 font-medium text-left rounded-t-lg">
                                                <span class="text-15">What is Flowbite?</span>
                                                <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                            </button>
                                        </h2>
    
                                        <div class="accordion-body block">
                                            <div class="p-5 font-light">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex border-b border-gray-100 dark:border-b-zinc-600 items-center justify-between w-full p-3 font-medium text-left">
                                                <span class="text-15">Is there a Figma file available?</span>
                                                <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light ">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex items-center justify-between w-full p-3 font-medium text-left">
                                                <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light dark:border-gray-700">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                                <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                                <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                            </ul>
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

        
    
        <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span  class="rtl:hidden">RTL</span>
            </a>  
        </div>
@endsection