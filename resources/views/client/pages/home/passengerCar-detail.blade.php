@extends('client.layout.master')
@section('content')

<div class="main-content">
    <div class="page-content">
        <section
            class="pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative">
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Chi tiết xe</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Trang chủ</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                                href="javascript:void(0)">Trang</a></li>
                                        <li class="active" aria-current="page"><i
                                                class="bx bxs-chevron-right align-middle px-2.5"></i>Chi tiết xe</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
            <img src="assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
        </section>

        <!-- Start grid -->
        <section class="py-20">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                    <div class="col-span-12 lg:col-span-4">
                        <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                            <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                <div class="text-center">
                                    <img src="{{asset($passengerCars->albums[0]->path)}}" alt="anh"
                                        style="min-width: 100%;height: 200px;">
                                    <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">Tên Nhà xe</h6>
                                    {{-- <ul class="flex justify-center gap-4">
                                        <li
                                            class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-twitter-alt"></i></a>
                                        </li>
                                        <li
                                            class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-whatsapp"></i></a>
                                        </li>
                                        <li
                                            class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="social-link"><i
                                                    class="uil uil-phone-alt"></i></a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                            <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Thông tin cơ bản
                                </h6>
                                <ul class="space-y-4">
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Tên tài
                                                xế</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Bừa đi kk</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số điện
                                                thoại</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">000000000000</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Kinh
                                                nghiệm</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">10 năm</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Biển số
                                                xe</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                    {{($passengerCars->license_plate)}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Dung
                                                tích xe</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                    {{($passengerCars->capacity)}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex">
                                            <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số ghế
                                                trống</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">5</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex"
                                            style="color: red; font-size: 14px;margin-top: 10px;display: block;clear: both;">
                                            <label
                                                class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Giá</label>
                                            <div>
                                                <p class="mb-0 " style="color: rgb(0, 96, 196);font-weight: bold;">{{
                                                    number_format( $routes[0]->route->price , 0, ',', ',') }}đ</p>
                                                <style>
                                                    h1 {
                                                        font-weight: bold
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-8">
                                    <a href="javascript:void(0)"
                                        class="btn w-full bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i
                                            class="uil uil-phone"></i>Liên hệ với chúng tôi</a>

                                    <button type="button" data-toggle="modal" value="{{ $passengerCars->id }}"
                                        class="btn w-full mt-3 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5 hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/30 group-data-[theme-color=sky]:hover:ring-sky-500/30 group-data-[theme-color=red]:hover:ring-red-500/30 group-data-[theme-color=green]:hover:ring-green-500/30 group-data-[theme-color=pink]:hover:ring-pink-500/30 group-data-[theme-color=blue]:hover:ring-blue-500/30 Ticket">

                                        <i class="uil uil-import"></i>Đặt xe</button>
                                </div>
                                <ul class="flex items-center justify-between mt-5">
                                    <li class="text-yellow-500 text-16">
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star-half-full"></i>
                                    </li>
                                    <div
                                        class="border border-gray-100/50 rounded h-8 w-8 text-center leading-[2.4] text-gray-500 hover:bg-red-500 hover:text-white transition-all duration-500 ease-out hover:border-transparent dark:border-neutral-600">
                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                    </div>
                                </ul>

                            </div>
                            {{-- <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Professional
                                    Skills</h6>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">User
                                        Interface Design</span>
                                    <span
                                        class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Web
                                        Design</span>
                                    <span
                                        class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Responsive
                                        Design</span>
                                    <span
                                        class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Mobile
                                        App Design</span>
                                    <span
                                        class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">UI
                                        Design</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Contact Details
                                </h6>
                                <ul>
                                    <li>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                <i class="uil uil-envelope-alt"></i>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Email</h6>
                                                <p class="text-gray-500 dark:text-gray-300">gabrielpalmer@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                <i class="uil uil-map-marker"></i>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Address</h6>
                                                <p class="text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                <i class="uil uil-phone"></i>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Phone</h6>
                                                <p class="text-gray-500 dark:text-gray-300">+1(452) 125-6789</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                <i class="uil uil-skype-alt"></i>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Skype</h6>
                                                <p class="text-gray-500 dark:text-gray-300">@gabrielpalmer</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-8">
                        <div class="p-6 border rounded border-gray-100/50 dark:border-neutral-600">
                            <div>
                                <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">Mô tả về chúng tôi</h6>
                                <p class="mb-2 text-gray-500 dark:text-gray-300">{{($passengerCars->description)}}</p>
                            </div>
                            <div class="pt-5">
                                <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Điểm đón / trả khách
                                </h6>
                                <div class="relative flex mt-4">
                                    <div
                                        class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500">
                                        A </div>
                                    <div
                                        class="after:contant[''] after:border after:absolute after:h-24 ltr:after:left-4 rtl:after:right-4 after:top-10 after:border-dashed group-data-[theme-color=violet]:after:border-violet-500/30 group-data-[theme-color=sky]:after:border-sky-500/30 group-data-[theme-color=red]:after:border-red-500/30 group-data-[theme-color=green]:after:border-green-500/30 group-data-[theme-color=pink]:after:border-pink-500/30 group-data-[theme-color=blue]:after:border-blue-500/30 hidden md:block">
                                    </div>
                                    <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                        <div>
                                            <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">{{
                                                $routes[0]->route->departure }}</h6>
                                            {{-- dd({{ $routes}}) --}}
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">{{
                                                \Carbon\Carbon::parse($passengerCars->workingTime[0]->departure_time)->format('H:i')
                                                }}</p>
                                            {{-- <p class="text-gray-500 dark:text-gray-300">There are many variations
                                                of passages of available, but the majority alteration in some form. As a
                                                highly skilled and successfull product development and design specialist
                                                with more than 4 Years of My experience.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="relative flex mt-8">
                                    <div
                                        class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500">
                                        B </div>
                                    <div
                                        class="after:contant[''] after:border after:absolute after:h-24 ltr:after:left-4 rtl:after:right-4 after:top-10 after:border-dashed group-data-[theme-color=violet]:after:border-violet-500/30 group-data-[theme-color=sky]:after:border-sky-500/30 group-data-[theme-color=red]:after:border-red-500/30 group-data-[theme-color=green]:after:border-green-500/30 group-data-[theme-color=pink]:after:border-pink-500/30 group-data-[theme-color=blue]:after:border-blue-500/30 hidden md:block">
                                    </div>
                                    <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                        <div>
                                            <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">...</h6>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">...</p>
                                            <p class="text-gray-500 dark:text-gray-300">...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-8">
                                    <div
                                        class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500">
                                        C </div>
                                    <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                        <div>
                                            <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">{{
                                                $routes[0]->route->arrival }}</h6>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">{{
                                                \Carbon\Carbon::parse($passengerCars->workingTime[0]->arrival_time)->format('H:i')
                                                }}</p>
                                            {{-- <p class="text-gray-500 dark:text-gray-300">There are many variations
                                                of passages of available, but the majority alteration in some form. As a
                                                highly skilled and successfull product development and design specialist
                                                with more than 4 Years of My experience.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p style="color: red; font-size: 14px;margin-top: 10px;display: block;clear: both;">Lưu
                                    ý: Giờ xuất phát của xe có thể đã thay đổi mà nhà xe chưa kịp cập nhật, vì vậy để
                                    chắc chắn cho chuyến đi bạn nên gọi điện để khẳng định lại giờ xuất phát</p>
                            </div>
                            <div class="pt-10">
                                <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Đánh giá / Bình luận
                                </h6>
                                <div class="mt-4 ">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-4">
                                            <div class="relative overflow-hidden rounded-md group/project">
                                                <img src="assets/images/blog/img-01.jpg" alt=""
                                                    class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                <div
                                                    class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0">
                                                </div>
                                                <div
                                                    class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-01.jpg"
                                                        class="text-white image-popup" data-title="The Coding Awards"
                                                        data-description="There are many variations of passages of available, but the majority alteration in some form."><i
                                                            class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="relative overflow-hidden rounded-md group/project">
                                                <img src="assets/images/blog/img-02.jpg" alt=""
                                                    class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                <div
                                                    class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0">
                                                </div>
                                                <div
                                                    class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-02.jpg"
                                                        class="text-white image-popup" data-title="Project Explained"
                                                        data-description="There are many variations of passages of available, but the majority alteration in some form."><i
                                                            class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-4">
                                            <div class="relative overflow-hidden rounded-md group/project">
                                                <img src="assets/images/blog/img-03.jpg" alt=""
                                                    class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                <div
                                                    class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0">
                                                </div>
                                                <div
                                                    class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-03.jpg"
                                                        class="text-white image-popup" data-title="Social Geek Made"
                                                        data-description="There are many variations of passages of available, but the majority alteration in some form."><i
                                                            class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                @foreach($comments as $cmt)
                                {{-- {{dd($cmt->star)}} --}}
                                @foreach($users as $data)
                                @if($data->id == $cmt->user_id)

                                <div class="sm:flex" style="border-bottom: 1px solid rgb(224, 224, 224);padding: 10px">
                                    <div class="shrink-0">
                                        <img class="w-10 h-10 p-1 border-2 rounded-full border-gray-100/50"
                                            src="assets/images/user/img-04.jpg" alt="img">
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <div>
                                            <p
                                                class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">
                                                {{ \Carbon\Carbon::parse($cmt->created_at)->format('d/m/Y') }}</p>
                                            {{-- {{ \Carbon\Carbon::parse($car)->format('H:i') }} --}}
                                            <h6 class="text-gray-900 dark:text-gray-50">{{$data->name}}</h6>
                                            <div class="text-yellow-500 text-17">
                                                @for ($i = 0; $i < $cmt->star ; $i++)
                                                    <i class="mdi mdi-star"></i>
                                                    @endfor
                                                    {{-- <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star-half-full"></i> --}}
                                            </div>
                                            <p class="mt-3 italic text-gray-500 dark:text-gray-300">{{$cmt->content}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End grid -->
        <section class="py-20 bg-gray-50 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Các xe tương tự</h3>
                        {{-- <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us
                            about your project. We'll quickly match you with the right <br> freelancers.</p> --}}
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5">
                    @foreach ($routes as $route)
                    @if(!($passengerCars->id == $route->id))
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div
                            class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                            <div class="relative overflow-hidden">
                                <img style="min-width: 100%;height: 300px;" src="{{asset($route->albums[0]->path)}}"
                                    alt="car" class="rounded">
                                <div
                                    class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block">
                                </div>
                                <div
                                    class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <p class="mb-0 "><i class="fa-solid fa-map-location-dot"></i><a
                                            href="javascript:void(0)"
                                            class="text-light user">{{$route->route->departure}} ->
                                            {{$route->route->arrival}}</a></p>
                                    {{-- <p class="mb-0 text-light date"></i> {{$route->route->arrival}}</p> --}}
                                    <p class="mb-0 text-light date"><i class="fa-solid fa-money-check-dollar"></i> {{
                                        number_format( $routes[0]->route->price , 0, ',', ',') }}đ</p>
                                </div>
                                <div
                                    class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                    class="mdi mdi-heart-outline me-1"></i> 999</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                    class="mdi mdi-comment-outline me-1"></i> 99</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-5">
                                <a href="" class="primary-link">
                                    <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Tên nhà xe</h5>
                                </a>
                                <p class="mb-6 text-gray-500 dark:text-gray-300"
                                    style="min-height: 50px;max-height: 50px"> {{ Str::limit($route->description, 100,
                                    '...') }}</p>
                                <!--end col-->
                                <div class="col-span-3 lg:col-span-2">
                                    <div class="text-start text-md-end dark:text-gray-50">
                                        <form action="{{ URL::to('passengerCar-detail') }}" method="POST">
                                            @csrf
                                            <input type="text" hidden name='passenger_id' value="{{$route->id}}">
                                            <input type="text" hidden name='image_id' value="{{$route->album_id}}">
                                            <input type="text" hidden name='route_id' value="{{$route->route_id}}">
                                            <button class="text-blue-500"
                                                style="font-size: 16px;font-weight: bold;coler:rgb(68, 155, 254)"><i
                                                    class="mdi mdi-chevron-double-right"></i>Đặt vé ngay</button>
                                            <style>
                                                . {
                                                    color: rgb(88, 50, 255);
                                                    font-weight: bold
                                                }
                                            </style>
                                        </form>

                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden w-80 h-96">
    <div class="bg-white p-6 rounded relative">
        <!-- Nút "x" -->
        <button onclick="hidePopup()" class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-700 exit">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>


        <div class="flex items-center gap-x-3">
            <div class="rounded border w-1/2 mx-auto mt-4">
                <!-- Tabs -->
                <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
                    <li
                        class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px">
                        <a id="default-tab" href="#first">Chỗ mong muốn</a>
                    </li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Điểm đón trả</a>
                    </li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Nhập thông tin</a>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div id="tab-contents" class="h-full w-full">
                    <div id="first" class="p-4 step">
                        <label for="">Số lượng khách</label>
                        <div class="flex justify-between">
                            <p>Ghế thường - <span class="price">{{ $routes[0]->route->price }}</span>đ</p>
                            <div class="flex items-center">
                                <button
                                    class="w-8 h-8 rounded-full bg-white-500 text-black flex items-center justify-center decrement-btn">
                                    <span class="text-lg font-bold">-</span>
                                </button>
                                <input type="text" min="1" value="0" name="countTicket" class="w-24 text-center qty-input">
                                <button
                                    class="w-8 h-8 rounded-full bg-white-500 text-black flex items-center justify-center increment-btn">
                                    <span class="text-lg font-bold">+</span>
                                </button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div id="second" class="flex justify-between hidden p-4 step">
                        <div class="flex flex-col" style="overflow-y: auto; max-height: 200px;">
                            Điểm đón:
                            @foreach ($stops as $data)
                                @if ($data->stop_type == 0)
                                    <div class="mb-5">
                                        <input type="radio" id="departure" name="departure" class="form-radio h-5 w-5 text-blue-600" value="{{ $data->stop_name }}">
                                        <label for="departure" class="ml-2 mb-3">{{ $data->stop_name }}</label>
                                    </div>    
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-col" style="overflow-y: auto; max-height: 200px;">
                            Điểm đón:
                            @foreach ($stops as $data)
                                @if ($data->stop_type == 1)
                                    <div class="mb-5">
                                        <input type="radio" id="arrival" name="arrival1" class="form-radio h-5 w-5 text-blue-600" value="{{ $data->stop_name }}">
                                        <label for="arrival" class="ml-2 mb-3">{{ $data->stop_name }}</label>
                                    </div>    
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="third" class="hidden p-4 step">
                        <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Họ và
                                    tên</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name"
                                    id="name" type="text" placeholder="Nhập họ và tên của bạn">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Số điện
                                    thoại</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone"
                                    id="phone" type="text" placeholder="Nhập Số điện thoại của bạn">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email
                                    để nhận thông tin vé</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email"
                                    id="email" type="text" placeholder="Nhập địa chỉ email của bạn">
                            </div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded submit" data-action="{{ route('client.ticket.update-ticket') }}" data-id="{{ $passengerCars->id  }}">
                                Tiếp tục
                            </button>
                        </div>
                    </div>
                   
                </div>
                 <div class="flex justify-between px-4 text-gray-800 font-semibold py-2 rounded-t show-total">
                    </div>
                <!-- End Tab Contents -->
            </div>
        </div>
        {{-- <div class="bg-gray-200 max-w-lg p-36 container flex justify-center mx-auto">
            <div class="flex flex-row mx-auto">
                <button id="previousButton" type="button"
                    class="bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-red-700 hover:text-white px-3">
                    <div class="flex flex-row align-middle">
                        <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p class="ml-2">Prev</p>
                    </div>
                </button>
                <button id="nextButton" type="button"
                    class="bg-gray-800 text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-red-700 hover:text-white px-3">
                    <div class="flex flex-row align-middle">
                        <span class="mr-2">Next</span>
                        <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div> --}}
    </div>


</div>
@endsection
@section('page-script')
<script type="module" src="{{ asset('client/js/custom/passengeCar-detail.js') }}">
</script>
@endsection