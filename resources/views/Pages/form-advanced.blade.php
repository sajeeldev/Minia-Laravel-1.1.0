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
                

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Css Switch</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-6">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Example switch</h5>
                                    <div class="flex flex-wrap gap-2">
                                        <input type="checkbox" id="switch1" switch="none" checked />
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                                        <input type="checkbox" id="switch2" switch="default" checked />
                                        <label for="switch2" data-on-label="" data-off-label=""></label>

                                        <input type="checkbox" id="switch3" switch="bool" checked />
                                        <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch6" switch="primary" checked />
                                        <label for="switch6" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch4" switch="success" checked />
                                        <label for="switch4" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch7" switch="info" checked />
                                        <label for="switch7" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch5" switch="warning" checked />
                                        <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch8" switch="danger" checked />
                                        <label for="switch8" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch9" switch="dark" checked />
                                        <label for="switch9" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Square switch</h5>

                                    <div class="flex flex-wrap gap-2">
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch1" switch="none" checked />
                                            <label for="square-switch1" data-on-label="On"
                                                data-off-label="Off"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch2" switch="info" checked />
                                            <label for="square-switch2" data-on-label="Yes"
                                                data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch3" switch="bool" checked />
                                            <label for="square-switch3" data-on-label="Yes"
                                                data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch4" switch="warning" checked />
                                            <label for="square-switch4" data-on-label="Yes"
                                                data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch5" switch="danger" checked />
                                            <label for="square-switch5" data-on-label="Yes"
                                                data-off-label="No"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Choices</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Single select input Example</h5>
                                    <div>
                                        <div class="mb-2">
                                            <label for="choices-single-default" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Default</label>
                                        </div>
                                        <select class="border-gray-100" data-trigger name="choices-single-default"
                                            id="choices-single-default"
                                            placeholder="This is a search placeholder">
                                            <option value="">This is a placeholder</option>
                                            <option value="Choice 1">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Single select input Example</h5>
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Option
                                            groups</label>
                                        </div>
                                        <select class="" data-trigger name="choices-single-groups"
                                            id="choices-single-groups">
                                            <option value="">Choose a city</option>
                                            <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                            </optgroup>
                                            <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                            </optgroup>
                                            <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                            </optgroup>
                                            <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                            </optgroup>
                                            <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                            </optgroup>
                                            <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Single select input Example</h5>
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-no-search" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Options added
                                            via config with no search</label>
                                        </div>
                                        <select class="" name="choices-single-no-search"
                                            id="choices-single-no-search">
                                            <option value="0">Zero</option>
                                        </select>
                                    </div>
                                </div>

                                 <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-no-sorting" class="form-label text-13 font-medium text-gray-500 dark:text-zinc-100">Options added
                                                via config with no search</label>

                                        </div>
                                        <select class="" name="choices-single-no-sorting"
                                            id="choices-single-no-sorting">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Malaga">Malaga</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Montreal">Montreal</option>
                                            <option value="New York">New York</option>
                                            <option value="Michigan">Michigan</option>
                                        </select>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="mt-8">
                                <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Multiple select input</h5>
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-multiple-default" class="form-label text-13 font-medium text-gray-500 dark:text-zinc-100">Default</label>
                                            </div>
                                            <select class="choice_place" data-trigger
                                                name="choices-multiple-default" id="choices-multiple-default"
                                                placeholder="This is a placeholder" multiple>
                                                <option value="Choice 1" selected>Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                                <option value="Choice 4" disabled>Choice 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">With remove button</label>
                                            </div>
                                            <select class="" name="choices-multiple-remove-button"
                                                id="choices-multiple-remove-button"
                                                placeholder="This is a placeholder" multiple>
                                                <option value="Choice 1" selected>Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                                <option value="Choice 4">Choice 4</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-no-search" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Option groups</label>
                                            </div>
                                            <select class="" name="choices-multiple-groups"
                                                id="choices-multiple-groups" placeholder="This is a placeholder"
                                                multiple>
                                                <option value="">Choose a city</option>
                                                <optgroup label="UK">
                                                    <option value="London">London</option>
                                                    <option value="Manchester">Manchester</option>
                                                    <option value="Liverpool">Liverpool</option>
                                                </optgroup>
                                                <optgroup label="FR">
                                                    <option value="Paris">Paris</option>
                                                    <option value="Lyon">Lyon</option>
                                                    <option value="Marseille">Marseille</option>
                                                </optgroup>
                                                <optgroup label="DE" disabled>
                                                    <option value="Hamburg">Hamburg</option>
                                                    <option value="Munich">Munich</option>
                                                    <option value="Berlin">Berlin</option>
                                                </optgroup>
                                                <optgroup label="US">
                                                    <option value="New York">New York</option>
                                                    <option value="Washington" disabled>Washington</option>
                                                    <option value="Michigan">Michigan</option>
                                                </optgroup>
                                                <optgroup label="SP">
                                                    <option value="Madrid">Madrid</option>
                                                    <option value="Barcelona">Barcelona</option>
                                                    <option value="Malaga">Malaga</option>
                                                </optgroup>
                                                <optgroup label="CA">
                                                    <option value="Montreal">Montreal</option>
                                                    <option value="Toronto">Toronto</option>
                                                    <option value="Vancouver">Vancouver</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Text inputs</h5>
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-multiple-default" class="form-label text-13 font-medium text-gray-500 dark:text-zinc-100">Limited to 5 values with remove button</label>
                                            </div>
                                            <input class="" id="choices-text-remove-button" type="text" value="Task-1,Task-2" placeholder="Enter something" />
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Unique values only, no pasting</label>
                                            </div>
                                            <input class="" id="choices-text-unique-values" type="text"
                                                            value="Project-A, Project-B" placeholder="This is a placeholder"
                                                            class="custom class" />
                                        </div>
                                    </div>

                                    <div class="col-span-12">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Disabled</label>
                                            </div>
                                            <input class="" id="choices-text-disabled" type="text"
                                                    value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk"
                                                    placeholder="This is a placeholder" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Colorpicker</h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Classic Demo</h5>
                                        <div class="classic-colorpicker"></div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Monolith Demo</h5>
                                        <div class="monolith-colorpicker"></div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Monolith Demo</h5>
                                        <div class="nano-colorpicker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Datepicker</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Basic</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-basic">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">DateTime</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-datetime">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Human-friendly Dates</h5>
                                        <input type="text" class="w-full border-gray-100 rounded flatpickr-input form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-humanfd">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">MinDate and MaxDate</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-minmax">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Disabling dates</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-disable">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Selecting multiple dates</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-multiple">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Range</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-range">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Timepicker</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-timepicker">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100 mb-3">Inline Date Picker Demo</h5>
                                        <input type="text" class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100" id="datepicker-inline">
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