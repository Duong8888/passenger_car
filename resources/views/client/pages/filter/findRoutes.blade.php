@extends('client.layout.master')
@section('title', "Kết quả tìm kiếm")
@section('content')
    <div class="main-content">
        <div class="page-content">
            <section class="pt-20"></section>
            <!-- Start team -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 xl:gap-10 gap-y-12">

                        <!-- left -->
                        <form id="uploadForm" class="form-main col-span-12 space-y-5 lg:col-span-3">

                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span
                                                class="text-gray-900 text-15 dark:text-gray-50">Điểm đón</span>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="mt-2">
                                                <div class="col-span-12 xl:col-span-4">
{{--                                                    <select class="custom-select"--}}
{{--                                                            data-trigger name="filterStopsDeparture"--}}
{{--                                                            id="filterStopsDeparture"--}}
{{--                                                            aria-label="filterStopsDeparture">--}}
{{--                                                        @if(!empty($filterStops) || count($filterStops) != 0)--}}
{{--                                                            <option value="">Chọn điểm đón</option>--}}
{{--                                                            @foreach($filterStops as $value)--}}
{{--                                                                <option value="{{$value->id}}">{{$value->stop_name}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}
{{--                                                        @if(empty($filterStops)  || count($filterStops) == 0)--}}
{{--                                                            <option  value="">Không có điểm đón</option>--}}
{{--                                                        @endif--}}
{{--                                                    </select>--}}


                                                    <select id="filterStopsDeparture" name="filterStopsDeparture" class="w-100" name="state">
                                                        @if(!empty($filterStops) || count($filterStops) != 0)
                                                            <option value="">Chọn điểm đón</option>
                                                            @foreach($filterStops as $value)
                                                                <option value="{{$value->id}}">{{$value->stop_name}}</option>
                                                            @endforeach
                                                        @endif
                                                        @if(empty($filterStops)  || count($filterStops) == 0)
                                                            <option  value="">Không có điểm đón</option>
                                                        @endif
                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span
                                                class="text-gray-900 text-15 dark:text-gray-50" >Điểm trả</span>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="mt-2">
                                                <div class="col-span-12 xl:col-span-4">
{{--                                                    <select class="custom-select" data-trigger name="filterStopsArrival"--}}
{{--                                                            id="filterStopsArrival"--}}
{{--                                                            aria-label="filterStopsArrival">--}}
{{--                                                        @if(!empty($filterStops) || count($filterStops) != 0)--}}
{{--                                                            <option value="">Chọn điểm trả</option>--}}
{{--                                                            @foreach($filterStops as $value)--}}
{{--                                                                <option value="{{$value->id}}">{{$value->stop_name}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}
{{--                                                        @if(empty($filterStops)  || count($filterStops) == 0)--}}
{{--                                                            <option  value="">Không có điểm trả</option>--}}
{{--                                                        @endif--}}
{{--                                                    </select>--}}

                                                    <select id="filterStopsArrival" name="filterStopsArrival" class="w-100" name="state">
                                                        @if(!empty($filterStops) || count($filterStops) != 0)
                                                            <option value="">Chọn điểm trả</option>
                                                            @foreach($filterStops as $value)
                                                                <option value="{{$value->id}}">{{$value->stop_name}}</option>
                                                            @endforeach
                                                        @endif
                                                        @if(empty($filterStops)  || count($filterStops) == 0)
                                                            <option  value="">Không có điểm trả</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 active">
                                            <span class="text-gray-900 dark:text-gray-50">Sắp xếp</span>
                                        </button>
                                    </h6>

                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="mt-2">
                                                <input
                                                    class="sortBy cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="radio" name="type" value="desc" id="desc">
                                                <label for="desc"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Giá
                                                    giảm dần</label>
                                            </div>
                                            <div class="mt-2">
                                                <input
                                                    class="sortBy cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="radio" name="type" value="asc" id="asc">
                                                <label for="asc"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Giá
                                                    tăng dần</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span
                                                class="text-gray-900 text-15 dark:text-gray-50">Giờ đi</span>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="mt-2">
                                                <input
                                                    class="find-time rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="checkbox" name="early-morning" data-min="00:00" data-max="06:00" value="early-morning"
                                                    id="early-morning">
                                                <label for="early-morning"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Sáng
                                                    sớm (00:00 - 06:00)</label>
                                            </div>
                                            <div class="mt-2">
                                                <input
                                                    class="find-time rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="checkbox" name="morning" data-min="06:01" data-max="12:00" value="morning"
                                                    id="morning">
                                                <label for="morning"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Sáng
                                                    (06:01 - 12:00)</label>
                                            </div>
                                            <div class="mt-2">
                                                <input
                                                    class="find-time rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="checkbox" name="afternoon" data-min="12:01" data-max="18:00" value="afternoon"
                                                    id="afternoon">
                                                <label for="afternoon"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Chiều
                                                    (12:01 - 18:00)</label>
                                            </div>
                                            <div class="mt-2">
                                                <input
                                                    class="find-time rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                    type="checkbox" name="evening" data-min="18:01" data-max="23:59" value="evening"
                                                    id="evening">
                                                <label for="evening"
                                                       class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Tối
                                                    (18:01 - 23:59)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span
                                                class="text-gray-900 text-15 dark:text-gray-50">Giá</span>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="middle">
                                            <div class="multi-range-slider">
                                                <input type="range" id="input-left" class="range2" min="0"
                                                       max="2000000" value="0">
                                                <input type="range" id="input-right" class="range2" min="0"
                                                       max="2000000" value="2000000">

                                                <div class="slider">
                                                    <div class="track"></div>
                                                    <div class="range"></div>
                                                    <div class="thumb left"></div>
                                                    <div class="thumb right"></div>
                                                </div>
                                            </div>
                                            <div id="multi_range">
                                                <div id="range2LeftValue">0 đ</div>
                                                <div id="range2RightValue">2,000,000 đ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span class="text-gray-900 text-15 dark:text-gray-50">Nhà xe</span>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            @foreach($user as $key => $value)
                                                <div class="mt-2">
                                                    <input
                                                        class="users rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20"
                                                        type="checkbox" value="{{$value->id}}" name="user[]" id="{{$value->id}}">
                                                    <label for="{{$value->id}}"
                                                        class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">{{$value->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end left -->

                        <!-- right -->
                        <div class="col-span-12 xl:col-span-9">
                            <div class="job-list-header">
                                <form action="#">

                                    <div class="grid grid-cols-12 gap-3">
                                        <div class="col-span-12 xl:col-span-3">
                                            <div class="relative filler-job-form h-full">
                                                <input type="date" value="{{$_GET['date']}}" id="datepicker" name="date" class="h-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-span-12 xl:col-span-3">
                                            <div class="relative filler-job-form">
                                                <i class="uil uil-map-marker">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24"
                                                         style="fill: rgba(96, 165, 250, 1);transform: ;msFilter:;">
                                                        <path
                                                            d="M12 5c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7-3.141-7-7-7zm0 12c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                                                        <path
                                                            d="M12 9c-1.627 0-3 1.373-3 3s1.373 3 3 3 3-1.373 3-3-1.373-3-3-3z"></path>
                                                    </svg>
                                                </i>
                                                <select class="form-select" data-trigger name="departure"
                                                        id="choices-single-location"
                                                        aria-label="Default select example">
                                                    @foreach($stops as $value)
                                                        <option
                                                            @if(trim($_GET['departure']) == trim($value)) selected
                                                            @endif value="{{$value}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-span-12 xl:col-span-3">
                                            <div class="relative filler-job-form">
                                                <i class="uil uil-clipboard-notes">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24"
                                                         style="fill: rgba(235, 87, 87, 1);transform: ;msFilter:;">
                                                        <circle cx="12" cy="12" r="4"></circle>
                                                        <path
                                                            d="M13 4.069V2h-2v2.069A8.01 8.01 0 0 0 4.069 11H2v2h2.069A8.008 8.008 0 0 0 11 19.931V22h2v-2.069A8.007 8.007 0 0 0 19.931 13H22v-2h-2.069A8.008 8.008 0 0 0 13 4.069zM12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"></path>
                                                    </svg>
                                                </i>
                                                <select class="form-select " data-trigger name="arrival"
                                                        id="choices-single-categories"
                                                        aria-label="Default select example">

                                                    @foreach($stops as $value)
                                                        <option
                                                            @if(trim($_GET['arrival']) == trim($value)) selected
                                                            @endif  value="{{$value}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-span-12 xl:col-span-3">
                                            <div class="relative">
                                                <a href="javascript:void(0)"
                                                   class="btn-find w-full text-white border-transparent flex justify-center items-center btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                                    <svg class="mr-2 loading" xmlns="http://www.w3.org/2000/svg"
                                                         width="17" height="17" viewBox="0 0 24 24"
                                                         style="fill: rgba(255, 255, 255, 1);transform-origin: center;animation: spin 2s linear infinite;">
                                                        <path
                                                            d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8c0-4.336 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10z"></path>
                                                    </svg>
                                                    <span>Tìm kiếm</span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end grid-->
                                </form>
                            </div>
                            <div class="space-y-2 mt-4 filterOption">
                                <span class="inline-block" id="departureFilterShow"></span>
                                <span class="inline-block" id="arrivalFilterShow"></span>
                            </div>
                            <div class="space-y-8 mt-6 list-route">
                            </div>
                        </div>
                        <!-- end right -->
                    </div>
                </div>
            </section>
            <!-- End team -->

        </div>
    </div>
@endsection

@section('page-style')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client/libs/choices.js/public/assets/styles/choices.min.css')}}">
    <!-- Nouislider Css -->
    <link rel="stylesheet" href="{{asset('client/libs/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/custom/finder.css')}}">
@endsection
@section('page-script')

    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>
    <style>
        div.mt-2 input.your-custom-class-hoa {
            width: 230px; /* Điều chỉnh chiều rộng theo ý muốn */
            padding: 3px; /* Thêm khoảng cách xung quanh ô input */
            border: 1px solid #ccc; /* Đường viền màu xám */
            border-radius: 5px; /* Bo tròn góc */
            background-color: #f5f5f5; /* Màu nền xám nhạt */
            color: #333; /* Màu chữ đậm */
        }
        /* Ẩn danh sách ul */
        .custom-dropdown ul {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
        }

        select.custom-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        .filterOptionValue {
            background: rgb(224, 224, 224);
            color: rgb(71, 71, 71);
            border-radius: 2px;
            display: inline-flex;
            font-weight: normal;
        }

        .filterOptionValue span {
            padding: 8px 12px;
            display: flex;
        }

        .filterOptionValue span svg {
            margin-top: 12px;
        }


    </style>
    <!-- Nouislider Js -->
    {{--    <script src="{{asset('client/libs/nouislider/nouislider.min.js')}}"></script>--}}

    {{--    <script src="{{asset('client/js/pages/area-filter-range.init.js')}}"></script>--}}

    <script src="{{asset('client/js/pages/nav%26tabs.js')}}"></script>

    <script src="{{asset('client/js/app.js')}}"></script>

    <script type="module" src="{{asset('client/js/custom/search-algolia.js')}}"></script>

@endsection
