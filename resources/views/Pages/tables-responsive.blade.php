@extends('Layouts.layout')
@section('content')

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Responsive Tables</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Tables
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Responsive Tables</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Example</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped w-full text-left">
                                            <thead class="flex">
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-gray-100">
                                                    <th class="p-3">Company</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td class="p-3">597.74</td>
                                                    <td class="p-3">12:12PM</td>
                                                    <td class="p-3">14.81 (2.54%)</td>
                                                    <td class="p-3">582.93</td>
                                                    <td class="p-3">597.95</td>
                                                    <td class="p-3">597.73 x 100</td>
                                                    <td class="p-3">597.91 x 300</td>
                                                    <td class="p-3">731.10</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td class="p-3">378.94</td>
                                                    <td class="p-3">12:22PM</td>
                                                    <td class="p-3">5.74 (1.54%)</td>
                                                    <td class="p-3">373.20</td>
                                                    <td class="p-3">381.02</td>
                                                    <td class="p-3">378.92 x 300</td>
                                                    <td class="p-3">378.99 x 100</td>
                                                    <td class="p-3">505.94</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td class="p-3">191.55</td>
                                                    <td class="p-3">12:23PM</td>
                                                    <td class="p-3">3.16 (1.68%)</td>
                                                    <td class="p-3">188.39</td>
                                                    <td class="p-3">194.99</td>
                                                    <td class="p-3">191.52 x 300</td>
                                                    <td class="p-3">191.58 x 100</td>
                                                    <td class="p-3">240.32</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td class="p-3">31.15</td>
                                                    <td class="p-3">12:44PM</td>
                                                    <td class="p-3">1.41 (4.72%)</td>
                                                    <td class="p-3">29.74</td>
                                                    <td class="p-3">30.67</td>
                                                    <td class="p-3">31.14 x 6500</td>
                                                    <td class="p-3">31.15 x 3200</td>
                                                    <td class="p-3">36.11</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td class="p-3">25.50</td>
                                                    <td class="p-3">12:27PM</td>
                                                    <td class="p-3">0.66 (2.67%)</td>
                                                    <td class="p-3">24.84</td>
                                                    <td class="p-3">25.37</td>
                                                    <td class="p-3">25.50 x 71100</td>
                                                    <td class="p-3">25.51 x 17800</td>
                                                    <td class="p-3">31.50</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td class="p-3">18.65</td>
                                                    <td class="p-3">12:45PM</td>
                                                    <td class="p-3">0.97 (5.49%)</td>
                                                    <td class="p-3">17.68</td>
                                                    <td class="p-3">18.23</td>
                                                    <td class="p-3">18.65 x 10300</td>
                                                    <td class="p-3">18.66 x 24000</td>
                                                    <td class="p-3">21.12</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td class="p-3">15.81</td>
                                                    <td class="p-3">12:25PM</td>
                                                    <td class="p-3">0.11 (0.67%)</td>
                                                    <td class="p-3">15.70</td>
                                                    <td class="p-3">15.94</td>
                                                    <td class="p-3">15.79 x 6100</td>
                                                    <td class="p-3">15.80 x 17000</td>
                                                    <td class="p-3">18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td class="p-3">597.74</td>
                                                    <td class="p-3">12:12PM</td>
                                                    <td class="p-3">14.81 (2.54%)</td>
                                                    <td class="p-3">582.93</td>
                                                    <td class="p-3">597.95</td>
                                                    <td class="p-3">597.73 x 100</td>
                                                    <td class="p-3">597.91 x 300</td>
                                                    <td class="p-3">731.10</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td class="p-3">378.94</td>
                                                    <td class="p-3">12:22PM</td>
                                                    <td class="p-3">5.74 (1.54%)</td>
                                                    <td class="p-3">373.20</td>
                                                    <td class="p-3">381.02</td>
                                                    <td class="p-3">378.92 x 300</td>
                                                    <td class="p-3">378.99 x 100</td>
                                                    <td class="p-3">505.94</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td class="p-3">191.55</td>
                                                    <td class="p-3">12:23PM</td>
                                                    <td class="p-3">3.16 (1.68%)</td>
                                                    <td class="p-3">188.39</td>
                                                    <td class="p-3">194.99</td>
                                                    <td class="p-3">191.52 x 300</td>
                                                    <td class="p-3">191.58 x 100</td>
                                                    <td class="p-3">240.32</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td class="p-3">31.15</td>
                                                    <td class="p-3">12:44PM</td>
                                                    <td class="p-3">1.41 (4.72%)</td>
                                                    <td class="p-3">29.74</td>
                                                    <td class="p-3">30.67</td>
                                                    <td class="p-3">31.14 x 6500</td>
                                                    <td class="p-3">31.15 x 3200</td>
                                                    <td class="p-3">36.11</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td class="p-3">25.50</td>
                                                    <td class="p-3">12:27PM</td>
                                                    <td class="p-3">0.66 (2.67%)</td>
                                                    <td class="p-3">24.84</td>
                                                    <td class="p-3">25.37</td>
                                                    <td class="p-3">25.50 x 71100</td>
                                                    <td class="p-3">25.51 x 17800</td>
                                                    <td class="p-3">31.50</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td class="p-3">18.65</td>
                                                    <td class="p-3">12:45PM</td>
                                                    <td class="p-3">0.97 (5.49%)</td>
                                                    <td class="p-3">17.68</td>
                                                    <td class="p-3">18.23</td>
                                                    <td class="p-3">18.65 x 10300</td>
                                                    <td class="p-3">18.66 x 24000</td>
                                                    <td class="p-3">21.12</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td class="p-3">15.81</td>
                                                    <td class="p-3">12:25PM</td>
                                                    <td class="p-3">0.11 (0.67%)</td>
                                                    <td class="p-3">15.70</td>
                                                    <td class="p-3">15.94</td>
                                                    <td class="p-3">15.79 x 6100</td>
                                                    <td class="p-3">15.80 x 17000</td>
                                                    <td class="p-3">18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td class="p-3">597.74</td>
                                                    <td class="p-3">12:12PM</td>
                                                    <td class="p-3">14.81 (2.54%)</td>
                                                    <td class="p-3">582.93</td>
                                                    <td class="p-3">597.95</td>
                                                    <td class="p-3">597.73 x 100</td>
                                                    <td class="p-3">597.91 x 300</td>
                                                    <td class="p-3">731.10</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td class="p-3">378.94</td>
                                                    <td class="p-3">12:22PM</td>
                                                    <td class="p-3">5.74 (1.54%)</td>
                                                    <td class="p-3">373.20</td>
                                                    <td class="p-3">381.02</td>
                                                    <td class="p-3">378.92 x 300</td>
                                                    <td class="p-3">378.99 x 100</td>
                                                    <td class="p-3">505.94</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td class="p-3">191.55</td>
                                                    <td class="p-3">12:23PM</td>
                                                    <td class="p-3">3.16 (1.68%)</td>
                                                    <td class="p-3">188.39</td>
                                                    <td class="p-3">194.99</td>
                                                    <td class="p-3">191.52 x 300</td>
                                                    <td class="p-3">191.58 x 100</td>
                                                    <td class="p-3">240.32</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td class="p-3">31.15</td>
                                                    <td class="p-3">12:44PM</td>
                                                    <td class="p-3">1.41 (4.72%)</td>
                                                    <td class="p-3">29.74</td>
                                                    <td class="p-3">30.67</td>
                                                    <td class="p-3">31.14 x 6500</td>
                                                    <td class="p-3">31.15 x 3200</td>
                                                    <td class="p-3">36.11</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td class="p-3">25.50</td>
                                                    <td class="p-3">12:27PM</td>
                                                    <td class="p-3">0.66 (2.67%)</td>
                                                    <td class="p-3">24.84</td>
                                                    <td class="p-3">25.37</td>
                                                    <td class="p-3">25.50 x 71100</td>
                                                    <td class="p-3">25.51 x 17800</td>
                                                    <td class="p-3">31.50</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td class="p-3">18.65</td>
                                                    <td class="p-3">12:45PM</td>
                                                    <td class="p-3">0.97 (5.49%)</td>
                                                    <td class="p-3">17.68</td>
                                                    <td class="p-3">18.23</td>
                                                    <td class="p-3">18.65 x 10300</td>
                                                    <td class="p-3">18.66 x 24000</td>
                                                    <td class="p-3">21.12</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td class="p-3">15.81</td>
                                                    <td class="p-3">12:25PM</td>
                                                    <td class="p-3">0.11 (0.67%)</td>
                                                    <td class="p-3">15.70</td>
                                                    <td class="p-3">15.94</td>
                                                    <td class="p-3">15.79 x 6100</td>
                                                    <td class="p-3">15.80 x 17000</td>
                                                    <td class="p-3">18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td class="p-3">597.74</td>
                                                    <td class="p-3">12:12PM</td>
                                                    <td class="p-3">14.81 (2.54%)</td>
                                                    <td class="p-3">582.93</td>
                                                    <td class="p-3">597.95</td>
                                                    <td class="p-3">597.73 x 100</td>
                                                    <td class="p-3">597.91 x 300</td>
                                                    <td class="p-3">731.10</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td class="p-3">378.94</td>
                                                    <td class="p-3">12:22PM</td>
                                                    <td class="p-3">5.74 (1.54%)</td>
                                                    <td class="p-3">373.20</td>
                                                    <td class="p-3">381.02</td>
                                                    <td class="p-3">378.92 x 300</td>
                                                    <td class="p-3">378.99 x 100</td>
                                                    <td class="p-3">505.94</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td class="p-3">191.55</td>
                                                    <td class="p-3">12:23PM</td>
                                                    <td class="p-3">3.16 (1.68%)</td>
                                                    <td class="p-3">188.39</td>
                                                    <td class="p-3">194.99</td>
                                                    <td class="p-3">191.52 x 300</td>
                                                    <td class="p-3">191.58 x 100</td>
                                                    <td class="p-3">240.32</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td class="p-3">31.15</td>
                                                    <td class="p-3">12:44PM</td>
                                                    <td class="p-3">1.41 (4.72%)</td>
                                                    <td class="p-3">29.74</td>
                                                    <td class="p-3">30.67</td>
                                                    <td class="p-3">31.14 x 6500</td>
                                                    <td class="p-3">31.15 x 3200</td>
                                                    <td class="p-3">36.11</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td class="p-3">25.50</td>
                                                    <td class="p-3">12:27PM</td>
                                                    <td class="p-3">0.66 (2.67%)</td>
                                                    <td class="p-3">24.84</td>
                                                    <td class="p-3">25.37</td>
                                                    <td class="p-3">25.50 x 71100</td>
                                                    <td class="p-3">25.51 x 17800</td>
                                                    <td class="p-3">31.50</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td class="p-3">18.65</td>
                                                    <td class="p-3">12:45PM</td>
                                                    <td class="p-3">0.97 (5.49%)</td>
                                                    <td class="p-3">17.68</td>
                                                    <td class="p-3">18.23</td>
                                                    <td class="p-3">18.65 x 10300</td>
                                                    <td class="p-3">18.66 x 24000</td>
                                                    <td class="p-3">21.12</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td class="p-3">15.81</td>
                                                    <td class="p-3">12:25PM</td>
                                                    <td class="p-3">0.11 (0.67%)</td>
                                                    <td class="p-3">15.70</td>
                                                    <td class="p-3">15.94</td>
                                                    <td class="p-3">15.79 x 6100</td>
                                                    <td class="p-3">15.80 x 17000</td>
                                                    <td class="p-3">18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td class="p-3">597.74</td>
                                                    <td class="p-3">12:12PM</td>
                                                    <td class="p-3">14.81 (2.54%)</td>
                                                    <td class="p-3">582.93</td>
                                                    <td class="p-3">597.95</td>
                                                    <td class="p-3">597.73 x 100</td>
                                                    <td class="p-3">597.91 x 300</td>
                                                    <td class="p-3">731.10</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td class="p-3">378.94</td>
                                                    <td class="p-3">12:22PM</td>
                                                    <td class="p-3">5.74 (1.54%)</td>
                                                    <td class="p-3">373.20</td>
                                                    <td class="p-3">381.02</td>
                                                    <td class="p-3">378.92 x 300</td>
                                                    <td class="p-3">378.99 x 100</td>
                                                    <td class="p-3">505.94</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td class="p-3">191.55</td>
                                                    <td class="p-3">12:23PM</td>
                                                    <td class="p-3">3.16 (1.68%)</td>
                                                    <td class="p-3">188.39</td>
                                                    <td class="p-3">194.99</td>
                                                    <td class="p-3">191.52 x 300</td>
                                                    <td class="p-3">191.58 x 100</td>
                                                    <td class="p-3">240.32</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td class="p-3">31.15</td>
                                                    <td class="p-3">12:44PM</td>
                                                    <td class="p-3">1.41 (4.72%)</td>
                                                    <td class="p-3">29.74</td>
                                                    <td class="p-3">30.67</td>
                                                    <td class="p-3">31.14 x 6500</td>
                                                    <td class="p-3">31.15 x 3200</td>
                                                    <td class="p-3">36.11</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td class="p-3">25.50</td>
                                                    <td class="p-3">12:27PM</td>
                                                    <td class="p-3">0.66 (2.67%)</td>
                                                    <td class="p-3">24.84</td>
                                                    <td class="p-3">25.37</td>
                                                    <td class="p-3">25.50 x 71100</td>
                                                    <td class="p-3">25.51 x 17800</td>
                                                    <td class="p-3">31.50</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <th class="p-3">CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td class="p-3">18.65</td>
                                                    <td class="p-3">12:45PM</td>
                                                    <td class="p-3">0.97 (5.49%)</td>
                                                    <td class="p-3">17.68</td>
                                                    <td class="p-3">18.23</td>
                                                    <td class="p-3">18.65 x 10300</td>
                                                    <td class="p-3">18.66 x 24000</td>
                                                    <td class="p-3">21.12</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 bg-gray-50/30 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                    <th class="p-3">YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td class="p-3">15.81</td>
                                                    <td class="p-3">12:25PM</td>
                                                    <td class="p-3">0.11 (0.67%)</td>
                                                    <td class="p-3">15.70</td>
                                                    <td class="p-3">15.94</td>
                                                    <td class="p-3">15.79 x 6100</td>
                                                    <td class="p-3">15.80 x 17000</td>
                                                    <td class="p-3">18.16</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


     <!-- Responsive Table js -->
        <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/table-responsive.init.js"></script>
@endsection