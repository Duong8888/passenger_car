@extends('client.layout.master')

@section('content')

    <!-- Tìm kiếm -->
    @include('client.pages.home.search')
    <!-- End tìm kiếm -->

    <!-- danh sách xe -->
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="mb-5 text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Tuyến đường phổ biến</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300"></p>
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
                                                        <a href="company-details.html"><img style=" width: 55%;"
                                                                                            src="{{ asset($car->albums[0]->path) }}"
                                                                                            alt="anh0001"
                                                                                            class="mx-auto img-fluid rounded-3"></a>
                                                        {{-- Ảnh: <img src="{{ $car->albums->first()->path }}" alt="Ảnh xe"> --}}
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                  class="text-gray-900 dark:text-gray-50">Tên
                                                                nhà xe</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Ghế ngồi
                                                            45 chỗ</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    @foreach ($car->workingTime as $workingTime)
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i style="font-size: 11px;padding-left: 2px"
                                                                class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    style="font-weight: bold;"> {{ \Carbon\Carbon::parse($workingTime->departure_time)->format('H:i') }} -- {{ \Carbon\Carbon::parse($workingTime->arrival_time)->format('H:i') }}</span></p>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    {{-- <div>
                                                        <div class="mb-2 lg:flex" style="margin-left: -35px">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300" style="font-weight: bold;"><span
                                                                    style="font-weight: bold;">{{ $car->route->departure }}</span>
                                                            --> {{ $car->route->arrival }}</p>
                                                        </div>
                                                        <p style=" font-weight: bold;"
                                                           class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                style="color: #1890ff;">{{ number_format( $car->route->price, 0, ',', ',') }}đ</span>
                                                        </p>
                                                    </div> --}}
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span
                                                            class="badge  text-green-500 text-13 px-2 py-0.5 font-medium rounded">Còn 5 chổ trống</span>
                                                        <form action="{{ URL::to('passengerCar-detail') }}"
                                                              method="POST">
                                                            @csrf
                                                            <input type="text" hidden name='passenger_id'
                                                                   value="{{$car->id}}">
                                                            <input type="text" hidden name='image_id'
                                                                   value="{{$car->album_id}}">
                                                            <input type="text" hidden name='route_id'
                                                                   value="{{$car->route_id}}">
                                                            <button><span
                                                                    class="badge text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Thông tin chi tiết >></span>
                                                            </button>
                                                        </form>
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
                                                                class="text-gray-900 dark:text-gray-50">Biển số xe :</span> {{$car->license_plate}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                class="text-gray-900 dark:text-gray-50">Mô tả ngắn :</span>
                                                            {{ Str::limit($car->description, 10, '...') }}</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <form action="{{ URL::to('passengerCar-detail') }}"
                                                              method="POST">
                                                            @csrf
                                                            <input type="text" hidden name='passenger_id'
                                                                   value="{{$car->id}}">
                                                            <input type="text" hidden name='image_id'
                                                                   value="{{$car->album_id}}">
                                                            <input type="text" hidden name='route_id'
                                                                   value="{{$car->route_id}}">
                                                            <button><i class="mdi mdi-chevron-double-right"></i>Đặt vé
                                                                ngay
                                                            </button>
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
                        <a href="job-categories.html"
                           class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">Xem
                            thêm<i class="uil uil-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end danh sách xe -->

    <section class="py-20 dark:bg-neutral-800">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Nhà xe</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300"></p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                {{-- @foreach ($user as )
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                @endforeach --}}
                {{-- <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="mt-4">
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
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
                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
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
                </div> --}}
            </div>
            <div class="grid grid-cols-1">
                <div class="mt-5 text-center">
                    <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Browse All Categories <i class="uil uil-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>

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
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
