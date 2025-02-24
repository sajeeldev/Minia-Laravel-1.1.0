
@include('Layouts.topbar')
<div class="hidden">
    <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
    <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
        <div class="flex items-center p-4 border-b border-gray-100">
            <h5 class="m-0 mr-2">Theme Customizer</h5>
            <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full" >
                <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
            </a>
        </div>
        <div class="p-4">
            <h6 class="mb-3">Layout</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="align-middle" for="layout-vertical">Vertical</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="align-middle" for="layout-horizontal">Horizontal</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

            <div class="space-y-1">
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
            <div class="space-y-1">
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Direction</h6>
            <div class="space-y-1">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                <li>
                    <a href="/" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>
                {{-- // Custom user's list CRUD start --}}
            
                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="user"></i>
                       <span data-key="t-apps"> Custom Users</span>
                    </a>
            
                    <ul>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                               <span data-key="t-apps">Users List</span>
                               {{-- <a id="user" href="{{route('custom.users')}}" >Users</a> --}}
                            </a>
                            <ul>

                                <li>
                                    <a href="{{ route('custom.users') }}" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">All Users</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('create.users') }}" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Add New</a>
                                </li>

                                {{-- <li>
                                    <a href="#" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                </li> --}}
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- // Custom user's list CRUD end --}}

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"> Apps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/calendar" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                        </li>
                        <li>
                            <a href="/chat" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Email</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="/email-inbox" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                </li>
                                <li>
                                    <a href="/email-read" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Invoices</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="/invoices-list" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice List</a>
                                </li>
                                <li>
                                    <a href="/invoices-detail" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Contacts</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="/contacts-grid" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User Grid</a>
                                </li>
                                <li>
                                    <a href="/contacts-list" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User List</a>
                                </li>
                                <li>
                                    <a href="/contacts-profile" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="flex items-center justify-between pl-14 pr-4 py-2  text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Blog</span>
                                <span class="badge px-2 py-0.5 bg-red-100 text-xs rounded-full font-medium text-red-400 text-end">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="/blog-grid" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="/blog-list" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog List</a>
                                </li>
                                <li>
                                    <a href="/blog-detail" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" aria-expanded="false"  class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="users"></i>
                        <span data-key="t-auth">Authentication</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('showlogin') }}" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('showregister') }}" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                        </li>
                        <li>
                            <a href="/recoverpw" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover Password</a>
                        </li>
                        <li>
                            <a href="/lock-screen" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock Screen</a>
                        </li>
                        <li>
                            <a href="/logout" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log Out</a>
                        </li>
                        <li>
                            <a href="/confirm-mail" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm Mail</a>
                        </li>
                        <li>
                            <a href="/email-verification" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email Verification</a>
                        </li>
                        <li>
                            <a href="/two-step-verification" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two Step Verification</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase"></i><span data-key="t-pages">Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/starter" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                        </li>
                        <li>
                            <a href="/maintenance" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Maintenance</a>
                        </li>
                        <li>
                            <a href="/coming-soon" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="/timeline" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Timeline</a>
                        </li>
                        <li>
                            <a href="/faqs" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">FAQs</a>
                        </li>
                        <li>
                            <a href="/pricing" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Pricing</a>
                        </li>
                        <li>
                            <a href="/404" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 404</a>
                        </li>
                        <li>
                            <a href="/500" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 500</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-heading px-4 py-3 text-xs font-medium text-gray-500 cursor-default" data-key="t-elements">Elements</li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"  class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-compo">Components</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/alerts" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                        </li>
                        <li>
                            <a href="/buttons" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
                        </li>
                        <li>
                            <a href="/cards" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
                        </li>
                        <li>
                            <a href="/dropdown" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
                        </li>
                        <li>
                            <a href="/flexbox&grid" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox & Grid</a>
                        </li>
                        <li>
                            <a href="/sizing" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
                        </li>
                        <li>
                            <a href="/avatars" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
                        </li>
                        <li>
                            <a href="/modals" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
                        </li>
                        <li>
                            <a href="/progress" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
                        </li>
                        <li>
                            <a href="/tabs&accordions" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs & Accordions</a>
                        </li>
                        <li>
                            <a href="/typography" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
                        </li>
                        <li>
                            <a href="/toasts" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
                        </li>
                        <li>
                            <a href="/general" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
                        </li>
                        <li>
                            <a href="/colors" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
                        </li>
                        <li>
                            <a href="/utilities" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="gift"></i>
                        <span data-key="t-extend">Extended</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/extended-lightbox" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lightbox</a>
                        </li>
                        <li>
                            <a href="/extended-rangeslider" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                        </li>
                        <li>
                            <a href="/extended-sweet-alert" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                        </li>
                        <li>
                            <a href="/extended-rating" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rating</a>
                        </li>
                        <li>
                            <a href="'/extended-notifications" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Notifications</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <span class="badge bg-red-50 text-danger ltr:float-right rtl:float-left z-50 px-1.5 rounded-full text-11 text-red-500" data-toggle="collapse">7</span>
                        <i data-feather="box"></i>
                        <span data-key="t-forms">Forms</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/form-elements.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                        </li>
                        <li>
                            <a href="/form-validation.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                        </li>
                        <li>
                            <a href="/form-advanced.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                        </li>
                        <li>
                            <a href="/form-editors.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editors</a>
                        </li>
                        <li>
                            <a href="/file-uploads.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">File Upload</a>
                        </li>
                        <li>
                            <a href="/form-wizard.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Wizard</a>
                        </li>
                        <li>
                            <a href="/form-mask.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Mask</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="sliders"></i>
                        <span data-key="t-charts">Tables</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('tablesBasic') }}" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                        </li>
                        <li>
                            <a href="{{ route('tablesDatatable') }}" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                        </li>
                        <li>
                            <a href="{{ route('tablesResponsive') }}" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Responsive</a>
                        </li>
                        <li>
                            <a href="{{ route('tablesEditable') }}" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editable </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts">Charts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/charts-apex" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                        </li>
                        <li>
                            <a href="/charts-echart" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Echarts</a>
                        </li>
                        <li>
                            <a href="/charts-chartjs" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chartjs</a>
                        </li>
                        <li>
                            <a href="/charts-knob" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Jquery Knob</a>
                        </li>
                        <li>
                            <a href="/charts-sparkline" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sparkline Chart</a>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons">Icons</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/icons-boxicons" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Boxicons</a>
                        </li>
                        <li>
                            <a href="/icons-materialdesign" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Material Design</a>
                        </li>
                        <li>
                            <a href="/icons-dripicons" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dripicons</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="map"></i>
                        <span data-key="t-maps"> Maps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/maps-google" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Google</a>
                        </li>
                        <li>
                            <a href="/maps-vector" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Vector</a>
                        </li>
                        <li>
                            <a href="/maps-leaflet" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Leaflet</a>
                        </li>
                    </ul>
                </li>

                <li class="menu__item w-full ">
                    <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="share-2"></i>
                        <span data-key="t-level">Multi Level</span>
                    </a>
                    <div>
                        <ul>
                            <li>
                                <a href="/index" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 1.1</a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="collapse" data-target=".Level1.2-menu" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-level">Level 1.2</span>
                                </a>
                                <ul class="collapse Level1.2-menu">
                                    <li>
                                        <a href="#" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </li>

            </ul>

            <div class="sidebar-alert text-center mx-5 my-12">
                <div class="card-body bg-primary rounded bg-violet-50/50 dark:bg-zinc-700/60">
                    <img src="assets/images/giftbox.png" alt="" class="block mx-auto">
                    <div class="mt-4">
                        <h5 class="text-violet-500 mb-3 font-medium">Unlimited Access</h5>
                        <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                        <a href="#!" class="btn bg-violet-500 text-white border-transparent mt-6">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>