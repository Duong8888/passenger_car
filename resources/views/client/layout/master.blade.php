<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
<head>
    <meta charset="utf-8" />
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('client.layout.partials.style')
    {{-- @yield('page-style') --}}
</head>

<body class="bg-white dark:bg-neutral-800">

@include('client.layout.partials.header')


<div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
        <span class="ltr:hidden">LTR</span>
        <span  class="rtl:hidden">RTL</span>
    </a>

</div>

<div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
    <div class="w-48 p-4 bg-white shadow-md" >
        <div>
            <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
            <ul class="flex gap-3 ">
                <li>
                    <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                </li>
            </ul>
            <ul class="flex gap-3 mt-4">
                <li>
                    <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"  href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                </li>
            </ul>
        </div>

        <div class="mt-5">
            <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
            <div class="flex justify-center mt-2">
                <!-- light-dark mode button -->
                <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                    <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                    <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- light-dark mode button -->
<a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
    <i class="text-xl mdi mdi-cog mdi-spin"></i>
</a>


<div class="main-content">
    <div class="page-content">

        <!--  YIELD sẽ thay đổi tùy vào page yield('content')-->
            @yield('content')
        <!--  End YIELD-->  

        <!-- start home -->
        {{-- @include('client.layout.partials.search') --}}
        <!-- end home -->
        
        {{-- <!-- danh sách xe -->
        @include('client.layout.partials.danhsachxe')
        <!-- end danh sách xe -->

        <!-- danh mục nhà xe -->
        @include('client.layout.partials.dmnhaxe')
        <!-- end danh mục nhà xe -->

        <!-- start process -->
        <section class="py-20 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="nav-tabs round-pill">
                    <div class="grid items-center grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-6">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">How It Work</h3>
                            <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                                right freelancers.</p>

                            <div class="mt-5">
                                <ul class="text-gray-700 nav">
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-home-tab" class="relative inline-block w-full p-2 active group/active" aria-current="page">
                                            <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">Register an account</h5>
                                                    <p class="mt-1 mb-2 text-gray-500 dark:text-gray-300">Due to its widespread use as filler text for layouts, non-readability
                                                        is of great importance.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-profile" class="relative inline-block w-full p-2 group" aria-current="page">
                                            <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Find your job</h5>
                                                    <p class="mt-1 mb-2 text-gray-500">There are many variations of passages of avaibookmark-label, but the majority
                                                        alteration in some form.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-messages" class="relative inline-block w-full p-2 group" aria-current="page">
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">3</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Apply for job</h5>
                                                    <p class="mt-1 mb-2 text-gray-500">It is a long established fact that a reader will be distracted by the
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
                                <h2 class="mb-5 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Browse Our <span class="text-yellow-500 fw-bold">5,000+</span> Latest
                                    Jobs</h2>
                                <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with
                                    the right freelancers.</p>
                                <div class="pt-2 mt-5">
                                    <a href="javascript:void(0)" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Started Now <i class="align-middle uil uil-rocket ms-1"></i></a>
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
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-8">
                    <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                        <div class="pb-5 swiper testimonialSlider">
                            <div class="mb-12 swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/mailchimp.svg" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0 dark:text-gray-50">Jeffrey Montgomery</h5>
                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Product Manager</p>
                                    </div>
                                </div>
                                <!--end swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/wordpress.svg" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0 dark:text-gray-50">Rebecca Swartz</h5>
                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                    </div>
                                </div>
                                <!--end swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/instagram.html" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
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

        <!-- danh sách tin tức -->
        @include('client.layout.partials.danhsachtintuc')
        <!--  end danh sách tin tức-->

        <!-- start client -->
        <section class="py-10 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-01.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                        <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Tooltip content
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-02.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-03.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-04.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-05.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-06.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                </div>
            </div>
        </section>
        <!-- end client --> --}}


    </div>
</div>



<!-- Footer Start -->
@include('client.layout.partials.footer')
<!-- end Footer -->
@include('client.layout.partials.script')
@yield('page-script')
</body>

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
</html>
