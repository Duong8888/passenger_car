<section class="py-20 bg-gray-50 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Danh sách các xe sẽ chạy mới nhé ^^</h3>
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Code qq gì đéo chạy vậy đm cay thế nhờ ...</p>
                    </div>
                </div>
                <div class="nav-tabs chart-tabpill">
                    <!-- <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                            <div class="p-1.5 bg-white dark:bg-neutral-900 shadow-lg shadow-gray-100/30 rounded-lg dark:shadow-neutral-700">
                                <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="recent-job" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50 active" aria-current="page">Recent Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="featured-jobs-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Featured Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="freelancer-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Freelancer</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="part-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Part Time</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="full-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Full Time</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-content">
                        <div class="block w-full tab-pane" id="recent-job">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <!--  -->
                                    @foreach ($passengerCars as $car)
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane ssRichardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
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
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--  -->
                                 
                                    <!--  -->
                                        <p>
                                            Ảnh: <img src="{{ $car->albums->first()->path }}" alt="Ảnh xe">
                                            Giá: {{ $car->route->price }} <br>
                                            Điểm đón: {{ $car->route->departure }}
                                            Điểm trả: {{ $car->route->arrival }}
                                        </p>
                                    <!--  -->

                                    
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- <div class="mt-8">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>