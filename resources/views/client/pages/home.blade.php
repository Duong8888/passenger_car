@extends('client.layout.master')
@section('content')

    <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl"
           class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l"
           onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>

    </div>

    <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
        <div class="w-48 p-4 bg-white shadow-md">
            <div>
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                <ul class="flex gap-3 ">
                    <li>
                        <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet"
                           href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky"
                           href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red"
                           href="javascript: void(0);"></a>
                    </li>
                </ul>
                <ul class="flex gap-3 mt-4">
                    <li>
                        <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green"
                           href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"
                           href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue"
                           href="javascript: void(0);"></a>
                    </li>
                </ul>
            </div>

            <div class="mt-5">
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                <div class="flex justify-center mt-2">
                    <!-- light-dark mode button -->
                    <a href="javascript: void(0);" id="mode"
                       class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800"
                       onclick="changeMode(event)">
                        <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                        <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" onclick="toggleSwitcher()"
       class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
        <i class="text-xl mdi mdi-cog mdi-spin"></i>
    </a>


    <div class="main-content">
        <div class="page-content">
            <!-- start home -->
            @include('client.pages.search')
            <!-- end home -->

            <!-- start category -->
            <section class="py-20 dark:bg-neutral-800">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-5">
                        <div class="text-center">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Browser Jobs Categories</h3>
                            <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us
                                about your project. We'll quickly match you with the
                                right freelancers.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-layers-alt"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">IT &amp; Software</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">2024 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-airplay"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Technology</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1250 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-bag"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Government</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">802 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-user-md"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Accounting / Finance</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">577 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-hospital"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Construction / Facilities</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">285 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-telegram-alt"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Tele-communications</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">495 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-scenery"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Design & Multimedia</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1045 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-3">
                            <div class="mt-4">
                                <div
                                    class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                    <div
                                        class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                        <i class="uim uim-android-alt"></i>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="job-categories.html" class="text-gray-900">
                                            <h5 class="text-lg dark:text-gray-50">Human Resource</h5>
                                        </a>
                                        <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1516 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="mt-5 text-center">
                            <a href="job-categories.html"
                               class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Browse
                                All Categories <i class="uil uil-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end category -->

            <!-- start job list -->
            <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-5">
                        <div class="mb-5 text-center">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">New & Random Jobs</h3>
                            <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us
                                about your project. We'll quickly match you with the right <br> freelancers.</p>
                        </div>
                    </div>
                    <div class="nav-tabs chart-tabpill">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                <div
                                    class="p-1.5 bg-white dark:bg-neutral-900 shadow-lg shadow-gray-100/30 rounded-lg dark:shadow-neutral-700">
                                    <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="recent-job"
                                               class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50 active"
                                               aria-current="page">Recent Jobs</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="featured-jobs-tab"
                                               class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Featured
                                                Jobs</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="freelancer-tab"
                                               class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Freelancer</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="part-time-tab"
                                               class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Part
                                                Time</a>
                                        </li>
                                        <li class="w-full">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="full-time-tab"
                                               class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Full
                                                Time</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="block w-full tab-pane" id="recent-job">
                                <div class="pt-8 ">
                                    <div class="space-y-8">
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-01.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Web
                                                                    Developer</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge
                                                                Lane ssRichardson</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            <span
                                                                class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                1
                                                                - 2 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-02.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Business
                                                                    Associate</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                                Louisiana</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                            <span
                                                                class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                            <span
                                                                class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                0
                                                                - 1 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-03.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Digital
                                                                    Marketing Manager</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy
                                                                Technology Pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix,
                                                                Arizona</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                            <span
                                                                class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-04.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Product
                                                                    Director</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                Creative Agency</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido,
                                                                California</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            <span
                                                                class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden w-full tab-pane" id="featured-jobs-tab">
                                <div class="pt-8 ">
                                    <div class="space-y-8">
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-01.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Web
                                                                    Developer</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge
                                                                Lane Richardson</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            <span
                                                                class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                            <span
                                                                class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                0
                                                                - 1 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-02.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Business
                                                                    Associate</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                                Louisiana</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                1
                                                                - 2 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-03.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Digital
                                                                    Marketing Manager</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy
                                                                Technology Pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix,
                                                                Arizona</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-04.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Product
                                                                    Director</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                Creative Agency</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido,
                                                                California</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-300">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden w-full tab-pane" id="freelancer-tab">
                                <div class="pt-8 ">
                                    <div class="space-y-8">
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-01.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Web
                                                                    Developer</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge
                                                                Lane Richardson</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                1
                                                                - 2 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-02.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Business
                                                                    Associate</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                                Louisiana</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                2
                                                                - 3 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-03.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Digital
                                                                    Marketing Manager</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy
                                                                Technology Pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix,
                                                                Arizona</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-04.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Product
                                                                    Director</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                Creative Agency</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido,
                                                                California</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden w-full tab-pane" id="part-time-tab">
                                <div class="pt-8 ">
                                    <div class="space-y-8">
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-01.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Web
                                                                    Developer</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge
                                                                Lane Richardson</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                1
                                                                - 2 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-02.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Business
                                                                    Associate</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                                Louisiana</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                0
                                                                - 1 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-50"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-03.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Digital
                                                                    Marketing Manager</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy
                                                                Technology Pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix,
                                                                Arizona</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-04.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Product
                                                                    Director</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                Creative Agency</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido,
                                                                California</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                2 - 3 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="hidden w-full tab-pane" id="full-time-tab">
                                <div class="pt-8 ">
                                    <div class="space-y-8">
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-01.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Web
                                                                    Developer</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge
                                                                Lane Richardson</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                1
                                                                - 2 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-02.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Business
                                                                    Associate</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                                Technology pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                                Louisiana</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                0
                                                                - 1 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                languages only differ in their grammar. </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-03.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Digital
                                                                    Marketing Manager</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy
                                                                Technology Pvt.Ltd</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix,
                                                                Arizona</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                4+ years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>

                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img
                                                                    src="client/images/featured-job/img-04.png" alt=""
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                      class="text-gray-900 dark:text-gray-50">Product
                                                                    Director</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                Creative Agency</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido,
                                                                California</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span
                                                                class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Experience :</span>
                                                                2 - 3 years</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-span-12 lg:col-span-5">
                                                        <div class="text-start lg:text-end dark:text-gray-50">
                                                            <a href="#applyNow" data-bs-toggle="modal">Apply Now <i
                                                                    class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="grid grid-cols-1">
                            <div class="text-center">
                                <a href="job-categories.html"
                                   class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View
                                    More <i class="uil uil-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end job list -->

            <!-- start process -->
            <section class="py-20 dark:bg-neutral-800">
                <div class="container mx-auto">
                    <div class="nav-tabs round-pill">
                        <div class="grid items-center grid-cols-12 gap-5">
                            <div class="col-span-12 lg:col-span-6">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">How It Work</h3>
                                <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project.
                                    We'll quickly match you with the
                                    right freelancers.</p>

                                <div class="mt-5">
                                    <ul class="text-gray-700 nav">
                                        <li class="w-full mb-[22px]">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="v-pills-home-tab"
                                               class="relative inline-block w-full p-2 active group/active"
                                               aria-current="page">
                                                <div
                                                    class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                <div class="flex">
                                                    <div
                                                        class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                        <span
                                                            class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                                    </div>
                                                    <div class="grow ltr:ml-4 rtl:mr-4">
                                                        <h5 class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">
                                                            Register an account</h5>
                                                        <p class="mt-1 mb-2 text-gray-500 dark:text-gray-300">Due to its
                                                            widespread use as filler text for layouts, non-readability
                                                            is of great importance.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="w-full mb-[22px]">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="v-pills-profile"
                                               class="relative inline-block w-full p-2 group" aria-current="page">
                                                <div
                                                    class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                <div class="flex">
                                                    <div
                                                        class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                        <span
                                                            class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                                    </div>
                                                    <div class="grow ltr:ml-4 rtl:mr-4">
                                                        <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
                                                            Find your job</h5>
                                                        <p class="mt-1 mb-2 text-gray-500">There are many variations of
                                                            passages of avaibookmark-label, but the majority
                                                            alteration in some form.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="w-full mb-[22px]">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                               data-tw-target="v-pills-messages"
                                               class="relative inline-block w-full p-2 group" aria-current="page">
                                                <div class="flex">
                                                    <div
                                                        class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                        <span
                                                            class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">3</span>
                                                    </div>
                                                    <div class="grow ltr:ml-4 rtl:mr-4">
                                                        <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
                                                            Apply for job</h5>
                                                        <p class="mt-1 mb-2 text-gray-500">It is a long established fact
                                                            that a reader will be distracted by the
                                                            readable content of a page.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="tab-content">
                                    <div class="block tab-pane" id="v-pills-home-tab">
                                        <img src="client/images/process-01.png" alt="" class="max-w-full">
                                    </div>
                                    <div class="hidden tab-pane" id="v-pills-profile">
                                        <img src="client/images/process-02.png" alt="" class="max-w-full">
                                    </div>
                                    <div class="hidden tab-pane" id="v-pills-messages">
                                        <img src="client/images/process-03.png" alt="" class="max-w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end process -->

            <!-- start cta -->
            <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="nav-tabs round-pill">
                        <div class="grid items-center grid-cols-12 gap-5">
                            <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                <div class="text-center">
                                    <h2 class="mb-5 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                        Browse Our <span class="text-yellow-500 fw-bold">5,000+</span> Latest
                                        Jobs</h2>
                                    <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your
                                        project. We'll quickly match you with
                                        the right freelancers.</p>
                                    <div class="pt-2 mt-5">
                                        <a href="javascript:void(0)"
                                           class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Started
                                            Now <i class="align-middle uil uil-rocket ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end cta -->

            <!-- start testimonial -->
            <section class="py-20 dark:bg-neutral-800">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-5">
                        <div class="mb-5 text-center">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Happy Candidates</h3>
                            <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us
                                about your project. We'll quickly match you with the right <br> freelancers.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 mt-8">
                        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                            <div class="pb-5 swiper testimonialSlider">
                                <div class="mb-12 swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <img src="client/images/logo/mailchimp.svg" class="h-12 mx-auto"
                                                     alt=""/>
                                            </div>
                                            <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very
                                                well thought out and articulate communication.
                                                Clear milestones, deadlines and fast work. Patience. Infinite patience.
                                                No
                                                shortcuts. Even if the client is being careless. "</p>
                                            <h5 class="mb-0 dark:text-gray-50">Jeffrey Montgomery</h5>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Product Manager</p>
                                        </div>
                                    </div>
                                    <!--end swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <img src="client/images/logo/wordpress.svg" class="h-12 mx-auto"
                                                     alt=""/>
                                            </div>
                                            <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very
                                                well thought out and articulate communication.
                                                Clear milestones, deadlines and fast work. Patience. Infinite patience.
                                                No
                                                shortcuts. Even if the client is being careless. "</p>
                                            <h5 class="mb-0 dark:text-gray-50">Rebecca Swartz</h5>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                        </div>
                                    </div>
                                    <!--end swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <img src="client/images/logo/instagram.html" class="h-12 mx-auto"
                                                     alt=""/>
                                            </div>
                                            <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very
                                                well thought out and articulate communication.
                                                Clear milestones, deadlines and fast work. Patience. Infinite patience.
                                                No
                                                shortcuts. Even if the client is being careless. "</p>
                                            <h5 class="mb-0 dark:text-gray-50">Charles Dickens</h5>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Store Assistant</p>
                                        </div>
                                    </div>
                                    <!--end swiper-slide-->
                                </div>
                                <!--end swiper-wrapper-->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end testimonial -->

            <!-- start blog -->
            <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 gap-5">
                        <div class="mb-5 text-center">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Quick Career Tips</h3>
                            <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us
                                about your project. We'll quickly match you with the right <br> freelancers.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 md:col-span-6 lg:col-span-4">
                            <div
                                class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                <div class="relative overflow-hidden">
                                    <img src="client/images/blog/img-01.jpg" alt="" class="rounded">
                                    <div
                                        class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                    <div
                                        class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a
                                                href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                        <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July,
                                            2021</p>
                                    </div>
                                    <div
                                        class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <a href="blog-details.html" class="primary-link">
                                        <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">How apps is the IT world
                                            ?</h5>
                                    </a>
                                    <p class="mb-3 text-gray-500 dark:text-gray-300">The final text is not yet
                                        avaibookmark-label. Dummy texts have Internet tend
                                        been in use by typesetters.</p>
                                    <a href="blog-details.html"
                                       class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read
                                        more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-4">
                            <div
                                class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                <div class="relative overflow-hidden">
                                    <img src="client/images/blog/img-02.jpg" alt="" class="rounded">
                                    <div
                                        class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                    <div
                                        class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a
                                                href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                        <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July,
                                            2021</p>
                                    </div>
                                    <div
                                        class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <a href="blog-details.html" class="primary-link">
                                        <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Smartest Applications for
                                            Business ?</h5>
                                    </a>
                                    <p class="mb-3 text-gray-500 dark:text-gray-300">Due to its widespread use as filler
                                        text for layouts, non-readability is of great importance: human perception.</p>
                                    <a href="blog-details.html"
                                       class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read
                                        more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-4">
                            <div
                                class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                <div class="relative overflow-hidden">
                                    <img src="client/images/blog/img-03.jpg" alt="" class="rounded">
                                    <div
                                        class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                    <div
                                        class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a
                                                href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                        <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July,
                                            2021</p>
                                    </div>
                                    <div
                                        class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"
                                                                            class="text-white"><i
                                                        class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <a href="blog-details.html" class="primary-link">
                                        <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Design your apps in your
                                            own way ?</h5>
                                    </a>
                                    <p class="mb-3 text-gray-500 dark:text-gray-300">One disadvantage of Lorum Ipsum is
                                        that in Latin certain letters appear more frequently than others.</p>
                                    <a href="blog-details.html"
                                       class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read
                                        more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog -->

            <!-- start client -->
            <section class="py-10 dark:bg-neutral-800">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-01.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                            <div id="tooltip-default" role="tooltip"
                                 class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Tooltip content
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-02.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                        </div>
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-03.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                        </div>
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-04.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                        </div>
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-05.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                        </div>
                        <div class="col-span-12 lg:col-span-2">
                            <img src="client/images/logo/logo-06.png" alt=""
                                 class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                        </div>
                    </div>
                </div>
            </section>
            <!-- end client -->


        </div>
    </div>
@endsection
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
