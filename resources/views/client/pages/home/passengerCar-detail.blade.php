@extends('client.layout.master')
@section('title', "Chi tiết thông tin xe")
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
                                                    class="bx bxs-chevron-right align-middle px-2.5"></i>Chi tiết xe
                                            </li>
                                        </ol>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <!-- Thông tin chi tiết xe -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">

                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <div class="text-center">
                                        <img src="{{asset($albums[0]->path)}}" alt="anh"
                                             style="min-width: 100%;height: 200px; object-fit: cover">
                                        <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{ $user[0]->name }}</h6>
                                    </div>
                                </div>
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Thông tin cơ
                                        bản
                                    </h6>
                                    <ul class="space-y-4">
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số
                                                    điện
                                                    thoại</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{$passengerCars[0]->license_plate}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Tuyến
                                                    đường</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{$routes->departure}} -
                                                        {{$routes->arrival}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Khởi
                                                    hành</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{date("H:i", strtotime($workingTime[0]->departure_time))}}h
                                                        -
                                                        {{date("H:i", strtotime($workingTime[0]->arrival_time))}}h
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Biển
                                                    số
                                                    xe</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        {{$passengerCars[0]->license_plate}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Tổng
                                                    số ghế</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        @if($passengerCars[0]->vehicle_id != 0)
                                                            {{$passengerCars[0]->vehicle->type_name}}
                                                        @else
                                                            {{$passengerCars[0]->capacity}} chỗ
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Số
                                                    ghế
                                                    trống</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                        @php
                                                            $countSlot = $passengerCars[0]->capacity;
                                                        @endphp
                                                        @foreach($passengerCars[0]->tickets as $key => $value)
                                                            @if($value->time_id == $_GET['time'] && $value->date == $_GET['date'])
                                                                @php
                                                                    $countSlot -= $value->quantity;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                        {{$countSlot}}
                                                    </p>
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
                                                        {{ number_format( $passengerCars[0]->price, 0, ',', ',') }}đ</p>
                                                    <style>
                                                        h1 {
                                                            font-weight: bold
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-8 Ticket">
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
                                        <div class="swiper-wrapper">
                                            @foreach ($albums as $album)
                                                <div class="swiper-slide">
                                                    <div class="text-center">
                                                        <div class="">
                                                            <img src="{{asset($album->path)}}" alt="anh"
                                                                 style="min-width: 100%;height: 250px; object-fit: cover">
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
                                                <button
                                                    class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active"
                                                    data-tw-toggle="tab" type="button" data-tw-target="mota-tab">
                                                    Mô tả
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                                        data-tw-toggle="tab" type="button"
                                                        data-tw-target="diemdung-tab">
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
                                        <div class="block w-full tab-pane" id="mota-tab">

                                            <div class="p-6 rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="mb-2 text-gray-500 dark:text-gray-300">
                                                    <div class="mb-4">
                                                        @if(count($services) > 0)
                                                            <h6 class="mb-2">Dịch vụ</h6>
                                                            @foreach($services as $service)
                                                                <span
                                                                    class="px-2 py-0.5 mt-1 font-medium text-sky-500 rounded bg-sky-500/20 text-13">{{$service->service_name}}</span>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    {!! $passengerCars[0]->description !!}
                                                </div>

                                            </div>
                                        </div>


                                        {{-- Điểm dừng --}}
                                        <div class="hidden w-full tab-pane" id="diemdung-tab">
                                            <div class="mb-10">
                                                <p
                                                    style="color: red; font-size: 14px;margin-top: 10px;display: block;clear: both;">
                                                    Lưu ý: Giờ xuất phát của xe có thể đã thay đổi mà nhà xe chưa kịp
                                                    cập
                                                    nhật,
                                                    vì vậy để chắc chắn cho chuyến đi bạn nên gọi điện để khẳng định lại
                                                    giờ
                                                    xuất phát</p>
                                            </div>
                                            <div class="grid grid-cols-12 gap-y-5 lg:gap-5" style="padding: 5px">
                                                <div class="col-span-12 lg:col-span-6" style="padding: 5px">
                                                    <div class="p-6 p-6 rounded bg-gray-50 dark:bg-neutral-700">
                                                        <h6 class="text-gray-500 dark:text-gray-300 mb-6">Điểm đón</h6>
                                                        <ul class="space-y-4">
                                                            @foreach($stops as $key => $stop)
                                                                @if($stop->stop_type == 0)
                                                                    <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                        <span
                                                                            class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-left rtl:float-right mr-2">{{$key+1}}</span>
                                                                        <div
                                                                            class="text-gray-900 dark:text-white">{{$stop->stop_name}}</div>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6" style="padding: 5px">
                                                    <div class="p-6 rounded bg-gray-50 dark:bg-neutral-700">
                                                        <h6 class="text-gray-500 dark:text-gray-300 mb-6">Điểm trả</h6>
                                                        <ul class="space-y-4">
                                                            @foreach($stops as $key => $stop)
                                                                @if($stop->stop_type == 1)
                                                                    <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                        <span
                                                                            class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-left rtl:float-right mr-2">{{$key+1}}</span>
                                                                        <p class="text-gray-900 dark:text-white">{{$stop->stop_name}}</p>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Đánh giá --}}
                                        <div class="hidden w-full tab-pane" id="danhgia-tab">
                                            <div>
                                                @if(count($comments) == 0)
                                                    <p class="text-gray-900 text-center dark:text-gray-50">
                                                        Chưa có đánh giá
                                                    </p>
                                                @else
                                                    @foreach ($comments as $cmt)
                                                        <div class="sm:flex"
                                                             style="border-bottom: 1px solid rgb(224, 224, 224);padding: 10px">
                                                            <div class="shrink-0">
                                                                <img
                                                                    class="w-10 h-10 p-1 border-2 rounded-full border-gray-100/50"
                                                                    src="{{asset('client/images/user/img-04.jpg')}}"
                                                                    alt="img">
                                                            </div>
                                                            <div class="grow ltr:ml-3 rtl:mr-3">
                                                                <div>
                                                                    <p
                                                                        class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">
                                                                        {{ \Carbon\Carbon::parse($cmt->created_at)->format('d/m/Y') }}
                                                                    </p>
                                                                    <h6 class="text-gray-900 dark:text-gray-50">
                                                                        {{ $cmt->user->name }}
                                                                    </h6>
                                                                    <div class="text-yellow-500 text-17">
                                                                        @for ($i = 0; $i < $cmt->star; $i++)
                                                                            <i class="mdi mdi-star"></i>
                                                                        @endfor
                                                                    </div>
                                                                    <p
                                                                        class="mt-3 italic text-gray-500 dark:text-gray-300">
                                                                        {{ $cmt->content }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                @php
                                                    $userId = Auth::id();
                                                    $userOne = App\Models\User::find($userId);
                                                        if ($userOne) {
                                                            $tickets = App\Models\Ticket::where('phone', $userOne->phone)->get();
                                                            if ($tickets->isNotEmpty()) {
                                                                $passenger_cars = [];
                                                                $cars = [];
                                                                foreach ($tickets as $ticket) {
                                                                    $passenger_car = App\Models\PassengerCar::find($ticket->passenger_car_id);
                                                                    if ($passenger_car) {
                                                                        $passenger_cars[] = $passenger_car;
                                                                    }
                                                                }
                                                                foreach ($passenger_cars as $passenger_car) {
                                                                    $car = App\Models\User::find($passenger_car->user_id);
                                                                    if($car){
                                                                        $cars[] = $car;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                @endphp
                                                @if (isset($cars) && count($cars) > 0)
                                                    @php $formOneHit = false; @endphp
                                                    @foreach ($cars as $car)
                                                        @if ($car->name == $user[0]->name && !$formOneHit)
                                                            @php $formOneHit = true; @endphp
                                                            <div class="mt-8">
                                                                <form action="{{route('passengerCar.detail.comment')}}"
                                                                      method="POST" enctype="multipart/form-data"
                                                                      class="mt-8 contact-form">
                                                                    @csrf
                                                                    <input type="hidden"
                                                                           value="{{request()->route('id')}}"
                                                                           name="passengerCarId">
                                                                    <div class="col-span-12">
                                                                        <div class="relative mb-3">
                                                                            <div class="sm:flex" style="padding: 10px">
                                                                                <div class="shrink-0">
                                                                                    <img
                                                                                        class="w-10 h-10 p-1 border-2 rounded-full border-gray-100/50"
                                                                                        src="{{asset('client/images/user/img-04.jpg')}}"
                                                                                        alt="img">
                                                                                </div>
                                                                                <div class="grow ltr:ml-3 rtl:mr-3">
                                                                                    <div>
                                                                                        <h6 class="text-gray-900 dark:text-gray-50">
                                                                                            {{ Auth::user()->name }}
                                                                                        </h6>
                                                                                        <div
                                                                                            class="text-yellow-500 text-17">
                                                                                            <i class="mdi mdi-star"></i>
                                                                                            <i class="mdi mdi-star"></i>
                                                                                            <i class="mdi mdi-star"></i>
                                                                                            <i class="mdi mdi-star"></i>
                                                                                            <i class="mdi mdi-star"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <textarea name="comments" id="comments"
                                                                                      rows="4"
                                                                                      class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300"
                                                                                      placeholder="Hãy đánh giá 5 sao cho chúng tôi"></textarea>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-end">
                                                                    <button name="submit" type="submit" id="submit"
                                                                            class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-1">
                                                                        Gửi đi <i class="uil uil-message ms-1"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            </form>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif
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
                    @foreach ($passengerCars as $route)
                        @if ($route != null && $route->id == $routes->id)
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
                                            <p class="mb-0 text-light date"></i> {{$route->route->arrival}}</p>
                                            <p class="mb-0 text-light date"><i
                                                    class="fa-solid fa-money-check-dollar"></i>
                                                {{ number_format($route->price, 0, ',', ',') }}đ</p>
                                        </div>
                                        <div
                                            class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <ul class="mb-0 list-unstyled">
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                                class="text-white"><i
                                                            class="mdi mdi-heart-outline me-1"></i>
                                                        999</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                                class="text-white"><i
                                                            class="mdi mdi-comment-outline me-1"></i> 99</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <a href="" class="primary-link">
                                            <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">{{$route->user->name}}</h5>
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
                                                            style="font-size: 16px;font-weight: bold;coler:rgb(68, 155, 254)">
                                                        <i
                                                            class="mdi mdi-chevron-double-right"></i>Đặt vé
                                                        ngay
                                                    </button>
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


        <div id="popup"
             class="fixed justify-center flex items-center inset-0 bg-gray-500 bg-opacity-50 hidden w-80 h-96 z-50">
            <div class="bg-white w-[75%] rounded h-2/5 m-auto p-4 overflow-auto">
                <div class="flex justify-between items-center p-4">
                    <p>Mua vé xe</p>
                    <button class="top-0 right-0 text-gray-500 hover:text-gray-700 exit">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <div
                    class="rounded dark:border-neutral-600 nav-tabs bottom-border-tab col-span-12 lg:col-span-12 lg:col-start-12">
                    <div class="py-0 pt-2 border-b border-gray-100/50 dark:border-neutral-600">

                        <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                            <li class="first-li flex items-center" role="presentation">
                                <button disabled
                                        class="m-0 firstItem flex items-center inline-block w-full py-4 px-[18px] dark:text-gray-50 active"
                                        data-tw-toggle="tab" type="button">
                                    <span class="first">Chỗ mong muốn</span>
                                </button>
                            </li>
                            <li class="second-li nav-item flex items-center" role="presentation">
                                <button disabled
                                        class="m-0 secondItem flex items-center w-full py-4 px-[18px] dark:text-gray-50"
                                        data-tw-toggle="tab" type="button">
                                    <span class="second">Điểm đón trả</span>
                                </button>
                            </li>
                            <li class="third-li nav-item flex items-center" role="presentation">
                                <button disabled
                                        class="m-0 thirdItem inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                        data-tw-toggle="tab" type="button">
                                    <span class="third">Thông tin</span>
                                </button>
                            </li>

                        </ul>
                    </div>

                    <div class="tab-content">

                        <div id="first" class="block w-full tab-pane p-4">
                            <span hidden class="price-slot">{{$passengerCars[0]->price}}</span>
                            <input type="date" id="date" name="date"
                                   class="px-2 py-1 border-none outline-none"
                                   hidden
                                   value="{{$_GET['date']}}">

                            @if($passengerCars[0]->vehicle_id == 0)
                                <p class="my-4">Số lượng khách</p>
                                <div class="flex justify-between mb-8 items-center">
                                    <p>Ghế thường - <span class="">
                                                                {{ $passengerCars[0]->price }}
                                                            </span>đ</p>
                                    <input type="hidden" value="{{$passengerCars[0]->price}}" class="price">
                                    <div class="flex items-center">
                                        <button
                                            class="w-8 h-8 w-8 h-8 border border-black rounded-full bg-white-500 text-black flex items-center justify-center decrement-btn">
                                            <span class="text-lg font-bold">-</span>
                                        </button>
                                        <input type="text" min="1" value="0" name="countTicket"
                                               class="w-12 border-0 rounded text-center qty-input">
                                        <button
                                            class="w-8 h-8 border border-black rounded-full bg-white-500 text-black flex items-center justify-center increment-btn">
                                            <span class="text-lg font-bold">+</span>
                                        </button>
                                    </div>

                                </div>

                            @else
                                <input type="hidden" value="{{$passengerCars[0]->price}}" class="price">
                                <input type="hidden" min="1" value="0" name="countTicket"
                                       class="w-12 border-0 rounded text-center qty-input">
                                <div class="justify-between mb-8 items-center w-full">
                                    <div class="flex items-center flex-col lg:flex-row">
                                        <div class="flex flex-col w-full lg:w-1/2 justify-center items-center">
                                            <div>
                                                <p class="font-bold">Chú thích</p>
                                                <p class="flex items-center my-4"><span
                                                        class="material-symbols-outlined"
                                                        style="font-size: 40px;color: red;margin-right: 5px">weekend</span>Gế
                                                    không bán</p>
                                                <p class="flex items-center my-4"><span
                                                        class="material-symbols-outlined"
                                                        style="font-size: 40px;color: green;margin-right: 5px">weekend</span>Gế
                                                    không đang chọn</p>
                                                <p class="flex items-center my-4"><span
                                                        class="material-symbols-outlined"
                                                        style="font-size: 40px;color: #74788d;margin-right: 5px">weekend</span>Gế
                                                    thường <span
                                                        style="display: block;color: #0a58ca;font-weight: bold;margin-left: 5px"> {{ number_format($passengerCars[0]->price) }} đ</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex-col w-full lg:w-1/2" style="user-select: none;">
                                            <!-- Bảng ghế -->
                                            <div style="max-height: 30vh;overflow: auto">
                                                @foreach($layout as $key => $value)
                                                    @php
                                                        $array = json_decode($value->seat, true);
                                                        $span = [];
                                                    @endphp
                                                    <div class="flex justify-center items-center">
                                                        @foreach($array as $keyItem => $item)
                                                            @foreach($checkSlot as $slot)
                                                                @php
                                                                    if($item == $slot->seat_id){
                                                                        $span[] = $item;
                                                                    }
                                                                @endphp
                                                            @endforeach
                                                            <label for="{{$item}}"
                                                                   class="choices-slot cursor-pointer w-12 border border-gray-400 h-12 flex justify-center items-center lg:w-12"
                                                                   style="width: 10px;height: 10px">{!! $item=="icon"?'<span class="material-symbols-outlined" style="font-size: 40px;color: #74788d">search_hands_free</span>':($item!=""?(in_array($item,$span)?'<span class="material-symbols-outlined" style="font-size: 40px;color: red">weekend</span>':'<span class="material-symbols-outlined" style="font-size: 40px;color: #74788d">weekend</span>'):'') !!}</label>
                                                            @if($item != "" && $item != "icon")
                                                                <input style="display: none;" class="slot"
                                                                       type="checkbox"
                                                                       name="slot[]" id="{{$item}}"
                                                                       value="{{$item}}">
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="show-total text-sm my-4"></div>

                            <div class="flex justify-end">
                                <button
                                    class="flex text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 py-2 px-4 rounded float-right"
                                    id="first-next">Tiếp tục
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24"
                                         style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>


                        <div id="second" class="hidden w-full tab-pane">
                            <div class="flex justify-between">
                                <div class="flex flex-col w-[50%] p-4"
                                     style="overflow-y: auto; max-height: 200px; max-width: 50%;">
                                    Điểm đón:
                                    @php
                                        $firstDeparture = true;
                                    @endphp
                                    @foreach ($stops as $data)
                                        @if ($data->stop_type == 0)
                                            <div class="mb-5">
                                                <input type="radio" id="departure{{$data->id}}"
                                                       name="departure"
                                                       class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                                       value="{{$data->stop_name}}" {{ $firstDeparture ? 'checked' : '' }}>
                                                <label for="departure{{$data->id}}"
                                                       class="ml-2 mb-3"
                                                       id="{{$data->id}}">{{$data->stop_name}}</label>
                                            </div>
                                            @php
                                                $firstDeparture = false;
                                            @endphp
                                        @endif
                                    @endforeach

                                    <div class="mb-5">
                                        <input type="radio" id="new" name="departure"
                                               class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                               value="other">
                                        <label for="new" class="ml-2 mb-3" id="{{$data->id}}">Khác</label>
                                        <input type="text" name="other" id="otherInput"
                                               style="display: none;">
                                    </div>

                                </div>

                                <div class="flex flex-col w-[50%] p-4"
                                     style="overflow-y: auto; max-height: 200px; max-width: 50%;">
                                    Điểm trả:

                                    @php
                                        $firstArrival = true;
                                    @endphp
                                    @foreach ($stops as $data)
                                        @if ($data->stop_type == 1)
                                            <div class="mb-5">
                                                <input type="radio" id="arrival{{$data->id}}" name="arrival"
                                                       class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                                       value="{{$data->stop_name}}" {{ $firstArrival ? 'checked' : '' }}>
                                                <label for="arrival{{$data->id}}"
                                                       class="ml-2 mb-3"
                                                       id="{{$data->id}}">{{$data->stop_name}}</label>
                                            </div>
                                            @php
                                                $firstArrival = false;
                                            @endphp
                                        @endif
                                    @endforeach

                                    <div class="mb-5">
                                        <input type="radio" id="new1" name="arrival"
                                               class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                               value="other1">
                                        <label for="new1" class="ml-2 mb-3" id="{{$data->id}}">Khác</label>
                                        <input type="text" name="other1" id="otherInput1"
                                               style="display: none;">
                                    </div>

                                </div>
                            </div>


                            <div class="show-total text-sm my-4"></div>

                            <div class="flex justify-between">
                                <button id="second-back"
                                        class="text-black border border-black bg-white py-2 px-4 rounded">
                                    Quay lại
                                </button>
                                <button id="second-next"
                                        class="flex text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 py-2 px-4 rounded float-right">
                                    Tiếp tục
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24"
                                         style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div id="third" class="hidden w-full tab-pane p-4">
                            <div class="max-w-md mx-auto bg-white rounded p-8 ">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Họ
                                        và
                                        tên</label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="name" id="name" type="text"
                                        value="{{ isset(Auth::user()->name) ?  Auth::user()->name : ''  }}"
                                        placeholder="Nhập họ và tên của bạn">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Số
                                        điện
                                        thoại</label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="phone" id="phone" type="text"
                                        onblur="validatePhoneNumber(this)"
                                        value="{{ isset(Auth::user()->phone) ? Auth::user()->phone : '' }}"
                                        placeholder="Nhập Số điện thoại của bạn">

                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email
                                        để nhận thông tin vé</label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="email" id="email" type="text"
                                        value="{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}"
                                        placeholder="Nhập địa chỉ email của bạn">

                                </div>
                            </div>

                            <div class="show-total text-sm my-4"></div>

                            <div class="flex justify-between">
                                <button id="third-back"
                                        class="text-black border border-black bg-white py-2 px-4 rounded">
                                    Quay lại
                                </button>
                                <button
                                    class="flex submit text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 py-2 px-4 rounded float-right"
                                    data-action="{{ route('client.ticket.update-ticket') }}"
                                    data-id="
                                                                {{ $passengerCars[0]->id }}
                                                                ">
                                    Tiếp tục
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24"
                                         style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <input name="departureTimeInput" type="hidden" value="{{date("H:i", strtotime($workingTime[0]->departure_time))}}h">
    <input name="arrivalTimeInput" type="hidden" value="{{date("H:i", strtotime($workingTime[0]->arrival_time))}}h">
    <input type="hidden" value="{{ $routes->departure }}" name="route-departure">
    <input type="hidden" value="{{ $routes->arrival }}" name="route-arrival">
    <input type="hidden" value="{{ $user[0]->id }}" name="passenger-user">
    <input type="hidden" value="{{ $time_id }}" name="time_id">
@endsection
@section('page-script')
    <script type="module" src="{{ asset('client/js/custom/passengeCar-detail.js') }}"></script>
@endsection
