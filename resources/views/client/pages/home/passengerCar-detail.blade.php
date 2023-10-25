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
                <img src="assets/images/about/shape.png" alt=""
                    class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="assets/images/about/shape-dark.png" alt=""
                    class="absolute hidden bg-cover -bottom-0 dark:block">
            </section>


            <!-- Thông tin chi tiết xe -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">

                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <div class="text-center">
                                        <img src="{{ asset($passengerCars->albums[0]->path) }}" alt="anh"
                                            style="min-width: 100%;height: 200px;">
                                        <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">Tên Nhà xe</h6>
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
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{ $passengerCars->user->name }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số điện
                                                    thoại</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{ $passengerCars->user->phone }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Tuyến
                                                    đường</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{ $routes[0]->route->departure }} -
                                                        {{ $routes[0]->route->arrival }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Khởi
                                                    hành</label>
                                                <div>
                                                    @foreach ($passengerCars->workingTime as $workingTime)
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                            {{ \Carbon\Carbon::parse($workingTime->departure_time)->format('H:i') }}h
                                                            -
                                                            {{ \Carbon\Carbon::parse($workingTime->arrival_time)->format('H:i') }}h
                                                        </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Biển số
                                                    xe</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{ $passengerCars->license_plate }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số ghế
                                                    ngồi</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{ $passengerCars->capacity }}</p>
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
                                                    <p class="mb-0 " style="color: rgb(0, 96, 196);font-weight: bold;">
                                                        {{ number_format($passengerCars->price, 0, ',', ',') }}đ</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-8 Ticket">
                                        <a href="javascript:void(0)"
                                            class="btn w-full bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i
                                                class="uil uil-phone"></i>Liên hệ với chúng tôi</a>
                                        <a href="javascript:void(0)"
                                            class="btn w-full mt-3 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5 hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/30 group-data-[theme-color=sky]:hover:ring-sky-500/30 group-data-[theme-color=red]:hover:ring-red-500/30 group-data-[theme-color=green]:hover:ring-green-500/30 group-data-[theme-color=pink]:hover:ring-pink-500/30 group-data-[theme-color=blue]:hover:ring-blue-500/30"><i
                                                class="uil uil-import"></i>Đặt xe</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-8">
                            {{-- Ảnh nhiều của xe --}}
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-12 lg:col-start-12">
                                    <div class="swiper testimonialSlider">
                                        <div class=" swiper-wrapper">
                                            @foreach ($passengerCars->albums as $album)
                                                <div class="swiper-slide">
                                                    <div class="text-center">
                                                        <div class="">
                                                            <img src="{{ asset($album->path) }}" alt="anh"
                                                                style="min-width: 100%;height: 250px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    </ul>

                                </div>
                                <div
                                    class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab col-span-12 lg:col-span-12 lg:col-start-12">
                                    <div class="px-6 py-0 border-b border-gray-100/50 dark:border-neutral-600">

                                        <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                            <li class="active" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active"
                                                    data-tw-toggle="tab" type="button" data-tw-target="mota-tab">
                                                    Mô tả
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                                    data-tw-toggle="tab" type="button" data-tw-target="dichvu-tab">
                                                    Dịch vụ
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                                    data-tw-toggle="tab" type="button" data-tw-target="diemdung-tab">
                                                    Điểm đón trả
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                                    data-tw-toggle="tab" type="button" data-tw-target="danhgia-tab">
                                                    Đánh giá
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="p-6 tab-content">

                                        {{-- Mô tả --}}
                                        <div class="block w-full tab-pane" id="mota-tab" style="min-height: 463px">

                                            <div class="p-6  rounded border-gray-100/50 dark:border-neutral-600">
                                                <div>
                                                    <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">Mô tả về chúng
                                                        tôi
                                                    </h6>
                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                        {{ $passengerCars->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Đánh giá --}}
                                        <div class="hidden w-full tab-pane" id="dichvu-tab" style="min-height: 463px">
                                            <div class="p-6  rounded border-gray-100/50 dark:border-neutral-600">
                                                <div>
                                                    <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">Dịch vụ của
                                                        chúng
                                                        tôi
                                                    </h6>
                                                    <div>
                                                        @foreach ($passengerCars->services as $service)
                                                            <div class="sm:flex">
                                                                <div class="grow ltr:ml-3 rtl:mr-3">
                                                                    <div>
                                                                        <h6 class="text-gray-900 dark:text-gray-50">
                                                                            {{ $service->service_name }}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- Điểm dừng --}}
                                        <div class="hidden w-full tab-pane" id="diemdung-tab" style="min-height: 463px">
                                            <div class="mb-10">
                                                <p
                                                    style="color: red; font-size: 14px;margin-top: 10px;display: block;clear: both;">
                                                    Lưu ý: Giờ xuất phát của xe có thể đã thay đổi mà nhà xe chưa kịp cập
                                                    nhật,
                                                    vì vậy để chắc chắn cho chuyến đi bạn nên gọi điện để khẳng định lại giờ
                                                    xuất phát</p>
                                            </div>
                                            <div class="grid grid-cols-12 gap-y-5 lg:gap-5" style="padding: 5px">
                                                <div style="background-color: #f8f0f0;" class="col-span-12 lg:col-span-6">
                                                    <h3
                                                        style="padding: 20px;font-size: 15px;color:rgb(9, 9, 9)k;font-weight: bold">
                                                        Điểm đón</h3>
                                                    @foreach ($passengerCars->route->stops as $stop)
                                                        <div class="sm:flex">
                                                            <div class="grow ltr:ml-3 rtl:mr-3">
                                                                @if ($stop->stop_type == 0)
                                                                    <div
                                                                        style="display: flex;align-content: center;align-items: center;padding: 3px 0;margin-left: 30px">
                                                                        <i class="fa-solid fa-square"
                                                                            style="margin-right: 15px"></i>
                                                                        <h6 style="text-align: center; padding: 3px 0;"
                                                                            class="text-gray-900 dark:text-gray-50">
                                                                            {{ $stop->stop_name }}</h6>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div style="background-color: #f8f0f0;" class="col-span-12 lg:col-span-6">
                                                    <h3
                                                        style="padding: 20px;font-size: 15px;color:rgb(9, 9, 9)k;font-weight: bold">
                                                        Điểm dừng</h3>
                                                    @foreach ($passengerCars->route->stops as $stop)
                                                        <div class="sm:flex">
                                                            <div class="grow ltr:ml-3 rtl:mr-3">
                                                                @if ($stop->stop_type == 1)
                                                                    <div
                                                                        style="display: flex;align-content: center;align-items: center;padding: 0 0 10px 0;margin-left: 30px">
                                                                        <i class="fa-solid fa-square"
                                                                            style="margin-right: 15px"></i>
                                                                        <h6 style="text-align: center; padding: 3px 0;"
                                                                            class="text-gray-900 dark:text-gray-50">
                                                                            {{ $stop->stop_name }}</h6>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Đánh giá --}}
                                        <div class="hidden w-full tab-pane" id="danhgia-tab" style="min-height: 463px">
                                            <div>
                                                @foreach ($comments as $cmt)
                                                    @foreach ($users as $data)
                                                        @if ($data->id == $cmt->user_id)
                                                            <div class="sm:flex"
                                                                style="border-bottom: 1px solid rgb(224, 224, 224);padding: 10px">
                                                                <div class="shrink-0">
                                                                    <img class="w-10 h-10 p-1 border-2 rounded-full border-gray-100/50"
                                                                        src="assets/images/user/img-04.jpg"
                                                                        alt="img">
                                                                </div>
                                                                <div class="grow ltr:ml-3 rtl:mr-3">
                                                                    <div>
                                                                        <p
                                                                            class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">
                                                                            {{ \Carbon\Carbon::parse($cmt->created_at)->format('d/m/Y') }}
                                                                        </p>
                                                                        <h6 class="text-gray-900 dark:text-gray-50">
                                                                            {{ $data->name }}</h6>
                                                                        <div class="text-yellow-500 text-17">
                                                                            @for ($i = 0; $i < $cmt->star; $i++)
                                                                                <i class="mdi mdi-star"></i>
                                                                            @endfor
                                                                        </div>
                                                                        <p
                                                                            class="mt-3 italic text-gray-500 dark:text-gray-300">
                                                                            {{ $cmt->content }}</p>
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- Thông tin chi tiết xe -->

            {{-- Xe tương tự --}}
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
                            @if (!($passengerCars->id == $route->id))
                                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                    <div
                                        class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                        <div class="relative overflow-hidden">
                                            <img style="min-width: 100%;height: 300px;"
                                                src="{{ asset($route->albums[0]->path) }}" alt="car"
                                                class="rounded">
                                            <div
                                                class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block">
                                            </div>
                                            <div
                                                class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                                <p class="mb-0 "><i class="fa-solid fa-map-location-dot"></i> <a
                                                        href="javascript:void(0)"
                                                        class="text-light user">{{ $route->route->departure }} ->
                                                        {{ $route->route->arrival }}</a></p>
                                                {{-- <p class="mb-0 text-light date"></i> {{$route->route->arrival}}</p> --}}
                                                <p class="mb-0 text-light date"><i
                                                        class="fa-solid fa-money-check-dollar"></i>
                                                    {{ number_format($routes[0]->route->price, 0, ',', ',') }}đ</p>
                                            </div>
                                            <div
                                                class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                                <ul class="mb-0 list-unstyled">
                                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                                            class="text-white"><i class="mdi mdi-heart-outline me-1"></i>
                                                            999</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                                            class="text-white"><i
                                                                class="mdi mdi-comment-outline me-1"></i> 99</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <a href="" class="primary-link">
                                                <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Tên nhà xe</h5>
                                            </a>
                                            <p class="mb-6 text-gray-500 dark:text-gray-300"
                                                style="min-height: 50px;max-height: 50px">
                                                {{ Str::limit($route->description, 100, '...') }}</p>
                                            <!--end col-->
                                            <div class="col-span-3 lg:col-span-2">
                                                <div class="text-start text-md-end dark:text-gray-50">
                                                    <form action="{{ URL::to('passengerCar-detail') }}" method="POST">
                                                        @csrf
                                                        <input type="text" hidden name='passenger_id'
                                                            value="{{ $route->id }}">
                                                        <input type="text" hidden name='image_id'
                                                            value="{{ $route->album_id }}">
                                                        <input type="text" hidden name='route_id'
                                                            value="{{ $route->route_id }}">
                                                        <button class="text-blue-500"
                                                            style="font-size: 16px;font-weight: bold;coler:rgb(68, 155, 254)"><i
                                                                class="mdi mdi-chevron-double-right"></i>Đặt vé
                                                            ngay</button>
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


            <div id="popup"
                class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden w-80 h-96">
                <div class="bg-white p-6 rounded relative">
                    <!-- Nút "x" -->
                    <button onclick="hidePopup()"
                        class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-700 exit">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
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
                                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Điểm đón
                                        trả</a>
                                </li>
                                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Nhập thông
                                        tin</a>
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
                                            <input type="text" min="1" value="0" name="countTicket"
                                                class="w-24 text-center qty-input">
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
                                                    <input type="radio" id="departure" name="departure"
                                                        class="form-radio h-5 w-5 text-blue-600"
                                                        value="{{ $data->stop_name }}">
                                                    <label for="departure"
                                                        class="ml-2 mb-3">{{ $data->stop_name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="flex flex-col" style="overflow-y: auto; max-height: 200px;">
                                        Điểm đón:
                                        @foreach ($stops as $data)
                                            @if ($data->stop_type == 1)
                                                <div class="mb-5">
                                                    <input type="radio" id="arrival" name="arrival1"
                                                        class="form-radio h-5 w-5 text-blue-600"
                                                        value="{{ $data->stop_name }}">
                                                    <label for="arrival"
                                                        class="ml-2 mb-3">{{ $data->stop_name }}</label>
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
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="name" id="name" type="text"
                                                placeholder="Nhập họ và tên của bạn">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Số
                                                điện
                                                thoại</label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="phone" id="phone" type="text"
                                                value="{{ Auth::user()->phone }}"
                                                placeholder="Nhập Số điện thoại của bạn" readonly>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email
                                                để nhận thông tin vé</label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="email" id="email" type="text"
                                                value="{{ Auth::user()->email }}"
                                                placeholder="Nhập địa chỉ email của bạn" readonly>
                                        </div>
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded submit"
                                            data-action="{{ route('client.ticket.update-ticket') }}"
                                            data-id="{{ $passengerCars->id }}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script type="module" src="{{ asset('client/js/custom/passengeCar-detail.js') }}"></script>
@endsection
