<section
    class="relative py-64 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 group-data-[mode=dark]:bg-neutral-900 ">
    <div class="inset-0 absolute bg-[url('../images/home/img-01.html')] bg-center"></div>
    <div class="container relative mx-auto">
        <div class="grid items-center grid-cols-12 rtl:gap-10">
            <div class="col-span-12">
                <div class="mb-3 text-center ltr:mr-14 rtl:ml-14">
                    <h1 class="mb-3 text-5xl leading-tight text-white fw-semibold">Search Between More Then <br><span
                            class="text-yellow-500 fw-bold">10,000+</span>
                        Open Jobs.</h1>
                    <p class="text-white text-17">Find jobs, create trackable resumes and enrich your applications.</p>
                </div>
                <form action="{{ route('search') }}">
                    <div class="registration-form">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 xl:col-span-9">
                                <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input autocomplete="off" name="query" type="search" id="job-title"
                                        class="w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100"
                                        placeholder="Job, Company name...">
                                </div>
                            </div><!--end col-->

                            <div class="col-span-12 xl:col-span-3">
                                <div class="h-full mt-3">
                                    <button
                                        class="btn group-data-[theme-color=violet]:bg-violet-400 group-data-[theme-color=sky]:bg-sky-400 group-data-[theme-color=red]:bg-red-400 group-data-[theme-color=green]:bg-green-400 group-data-[theme-color=pink]:bg-pink-400 group-data-[theme-color=blue]:bg-blue-400 border rounded-lg border-transparent ltr:xl:rounded-l-none rtl:xl:rounded-r-none w-full py-[18px] text-white"
                                        type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                </div>
                            </div><!--end col-->

                            <!--search item-->
                            <div class="col-span-12 overflow-auto search-item">
                                <a href="">
                                    <div
                                        class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">

                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel
                                                            Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i
                                                                class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                            Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i
                                                                class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City,
                                                            Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span
                                                            class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part
                                                            Time</span>
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
                                    </div>
                                </a>
                            </div>
                            <!--end search item-->

                        </div><!--end row-->
                    </div>
                </form>
            </div>
        </div>

    </div>
    <img src="client/images/bg-shape.png" alt="" class="absolute block -bottom-5 dark:hidden">
    <img src="client/images/bg-shape-dark.png" alt="" class="absolute hidden -bottom-5 dark:block">
</section>
