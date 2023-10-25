@extends('client.layout.master')

@section('content')
    <!-- danh sách xe -->
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
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
                                <a href="company-details.html">
                                    <img style=" width: 55%;"
                                         src="https://i.imgur.com/Gk2QdBM.jpg" alt="anh0001"
                                         class="mx-auto img-fluid rounded-3"></a>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-3">
                            <div class="mb-2 mb-md-0">
                                <h5 class="mb-1 fs-18">
                                    <a href="job-details.html"
                                       id="license_plate"
                                       class="text-gray-900 dark:text-gray-50">Tên
                                        nhà xe</a>
                                </h5>
                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Ghế ngồi
                                    45 chỗ</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-3">
                            <div class="mb-2 lg:flex">
                                <div class="flex-shrink-0">
                                    <i style="font-size: 11px;padding-left: 2px"
                                       class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                </div>
                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span style="font-weight: bold;"> 00:00 -- 03:00</span>
                                </p>
                            </div>
                            <div class="mb-2 lg:flex">
                                <div class="flex-shrink-0">
                                    <i style="font-size: 11px;padding-left: 2px"
                                       class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                </div>
                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span style="font-weight: bold;"> 19:01 -- 23:59</span>
                                </p>
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-span-12 lg:col-span-2">
                            <div>
                                <div class="mb-2 lg:flex" style="margin-left: -35px">
                                    <div class="flex-shrink-0">
                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                    </div>
                                    <p class="mb-0 text-gray-500 dark:text-gray-300" style="font-weight: bold;"><span
                                            style="font-weight: bold;">Hà Nội</span>
                                        --&gt; Nghệ An</p>
                                </div>
                                <p style=" font-weight: bold;" class="mb-2 text-gray-500 dark:text-gray-300"><span
                                        style="color: #1890ff;">200,000đ</span>
                                </p>

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
                                        id="license_plate"
                                        class="text-gray-900 dark:text-gray-50">Biển số xe :</span> B001
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">

                        </div>
                        <!--end col-->
                        <div class="col-span-3 lg:col-span-2">
                            <div class="text-start text-md-end dark:text-gray-50">
                                <form action="http://127.0.0.1:8000/passengerCar-detail" method="POST">
                                    <input type="hidden" name="_token" value="SadUIkXEvaei9BduGEZeXFlXaAwuxyOlk54uZr3c"
                                           autocomplete="off"> <input type="text" hidden="" name="passenger_id"
                                                                      value="1">
                                    <input type="text" hidden="" name="image_id" value="">
                                    <input type="text" hidden="" name="route_id" value="1">
                                    <button fdprocessedid="3icpir"><i class="mdi mdi-chevron-double-right"></i>Đặt vé
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
        </div>
    </section>

    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            console.log("ready!");
            $.ajax({
                url: "/map",
                data: {
                    ticketId: '{{$ticketId}}'
                },
                success: function (result) {
                    drawCarProcess(result);
                }
            });

            function drawCarProcess(data) {
                if(data && data.length > 0){
                    let ticketDetail = data[0]
                    $('#license_plate').val(ticketDetail['license_plate']);
                    $('#departure_time').val(ticketDetail['departure_time']);
                    $('#arrival_time').val(ticketDetail['arrival_time']);
                    $('#phone').val(ticketDetail['phone']);

                }
            }
        });
    </script>
@endsection
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
