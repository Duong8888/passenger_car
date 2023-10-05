@extends('client.layout.master')

@section('content')

    <!-- Tìm kiếm -->
    @include('client.layout.partials.search')
     <!-- End tìm kiếm -->

     <!-- danh sách xe -->
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
                                {{--  --}}
                                <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                    <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                        <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <div class="grid items-center grid-cols-12">
                                            <div class="col-span-12 lg:col-span-2">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img style=" width: 55%;" src="{{ asset($car->albums[0]->path) }}" alt="anh0001" class="mx-auto img-fluid rounded-3"></a>
                                                    {{-- Ảnh: <img src="{{ $car->albums->first()->path }}" alt="Ảnh xe"> --}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-3">
                                                <div class="mb-2 mb-md-0">
                                                    <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Tên nhà xe</a>
                                                    </h5>
                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Tên tài xế</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-3">
                                                <div class="mb-2 lg:flex">
                                                    <div class="flex-shrink-0">
                                                        <i style="font-size: 11px;padding-left: 2px" class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                                        {{-- <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i> --}}
                                                    </div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span style="font-weight: bold;"> {{ \Carbon\Carbon::parse($car->workingTime[0]->departure_time)->format('H:i') }}</span> -- {{ $car->route->departure }}</p>
                                                    {{-- Điểm đón: {{ $car->route->departure }} --}}
                                                </div>
                                                <div class="mb-2 lg:flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                    </div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span style="font-weight: bold;">{{ \Carbon\Carbon::parse($car->workingTime[0]->arrival_time)->format('H:i') }}</span> -- {{ $car->route->arrival }}</p>
                                                    {{-- Điểm trả: {{ $car->route->arrival }} --}}
                                                </div>

                                            </div>

                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-2">
                                                <div>
                                                    <p style=" font-weight: bold;" class="mb-2 text-gray-500 dark:text-gray-300"><span style="color: #1890ff;">{{ number_format( $car->route->price, 0, ',', ',') }}đ</span></p>
                                                     {{-- Giá: {{ $car->route->price }} <br> --}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-2">
                                                <div class="flex flex-wrap gap-1.5">
                                                    <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">A</span>
                                                    <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">B</span>
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
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Biển số xe :</span> {{$car->license_plate}}</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-6">
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Mô tả ngắn :</span>
                                                        {{ Str::limit($car->description, 10, '...') }}</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-3 lg:col-span-2">
                                                <div class="text-start text-md-end dark:text-gray-50">
                                                    <form action="{{ URL::to('passengerCar-detail') }}" method="POST">
                                                        @csrf
                                                        <input type="text" hidden name='passenger_id' value="{{$car->id}}">
                                                        <input type="text" hidden name='image_id' value="{{$car->album_id}}">
                                                        <input type="text" hidden name='route_id' value="{{$car->route_id}}">
                                                        <button><i class="mdi mdi-chevron-double-right"></i>Đặt vé ngay</button>
                                                    </form>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>

                                @endforeach

                                    {{-- <p>
                                        Ảnh: <img src="{{ $car->albums[0]->path }}" alt="Ảnh xe">
                                        Giá: {{ $car->route->price }} <br>
                                        Điểm đón: {{ $car->route->departure }}
                                        Điểm trả: {{ $car->route->arrival }}
                                        note:{{$car->description}}
                                        bienso: {{$car->license_plate}}
                                        thoi gian đi: {{ \Carbon\Carbon::parse($car->workingTime[0]->departure_time)->format('H:i') }}
                                        thoi gian đến: {{ \Carbon\Carbon::parse($car->workingTime[0]->arrival_time)->format('H:i') }}
                                        {{dd($car->workingTime[0])}}
                                    </p> --}}

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="mt-8">
                <div class="grid grid-cols-1">
                    <div class="text-center">
                        <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">Xem thêm<i class="uil uil-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>








     <!-- end danh sách xe -->

     <!-- danh mục nhà xe -->
     @include('client.layout.partials.dmnhaxe')
     <!-- end danh mục nhà xe -->

     {{--  <!-- start process -->
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
     <!-- end cta --> --}}

     {{-- <!-- start testimonial -->
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
     <!-- end testimonial --> --}}

     <!-- danh sách tin tức -->
     @include('client.layout.partials.danhsachtintuc')
     <!--  end danh sách tin tức-->

     {{-- <!-- start client -->
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

@endsection
