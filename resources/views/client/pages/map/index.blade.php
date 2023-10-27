@extends('client.layout.master')

@section('content')
    <!-- danh sách xe -->
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div
                class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
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
                        <div class="col-span-12 lg:col-span-2">
                            <div class="mb-2 mb-md-0">
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    <span>
                                        Mã vé:
                                        <span id="ticketId"></span>
                                    </span>
                                </p>
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    <span>Ghế ngồi 45 chỗ</span>
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-3">
                            <div>
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    <span>
                                        Giờ Đón:
                                    <span id="departureTime"></span>
                                </span>
                                </p>
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    <span>
                                        Giờ Trả:
                                    <span id="arrivalTime"></span>
                                </span>
                                </p>
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-span-12 lg:col-span-5">
                            <div>
                                <p class="mb-0 text-gray-500 dark:text-gray-300" >
                                    <span>Điểm Đón: </span>
                                    <span id="departure"></span>
                                </p>
                                <p class="mb-0 text-gray-500 dark:text-gray-300" >
                                    <span>Điểm Trả: </span>
                                    <span id="arrival"></span>
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
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    <span
                                        class="text-gray-900 dark:text-gray-50">Biển số xe :</span>
                                    <span id="licensePlate"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
            <div
                class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                <div class="p-4">
                    <div class="grid items-center grid-cols-12">
                        <div class="col-span-12 lg:col-span-3">
                            <div class="mb-2 mb-md-0">
                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                    Khách hàng :
                                    <span id="username"></span>
                                </p>
                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Liên hệ :
                                    <span id="phone"></span>
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-3">
                            <div class="mb-2 mb-md-0">
                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                    Giờ đặt :
                                    <span id="createdAt"></span>
                                </p>

                                <p class="mb-2 text-gray-500 dark:text-gray-300">
                                    Giá Vé:
                                    <span
                                        id="price"
                                        style="color: #1890ff;"></span>
                                </p>
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-span-12 lg:col-span-4">
                            <div>
                                <p class="mb-0 text-gray-500 dark:text-gray-300">
                                    Trạng Thái:
                                    <span
                                        id="paymentMethod"
                                        style="color: #1890ff;"></span>
                                </p>
                                <p class="mb-2 text-gray-500 dark:text-gray-300">Tổng Tiền :
                                    <span id="totalPrice" style="color: #1890ff;"></span>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <div class="p-3 bg-gray-50 ">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-4">
                            <div>
                                <p class="mb-0">
                                    <span class="">Bản Đồ</span>
                                </p>
                            </div>
                            <div id="map_canvas" style="width:100vw; height:50vh"></div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW0AbPAlmKNN8x1cc89jQXkhNHlRQnZ_M"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            console.log("ready!");
            let startLatLng = [35.712408, 139.776188]; // Ga Ueno
            let targetLatLng = [35.710552, 139.777074]; // LIG
            let goalMarkerImg = 'https://test.l-svr.net/blog/images/marker-on-dummy.png';
            let map;

            $.ajax({
                url: "/map",
                data: {
                    ticketId: '{{$ticketId}}'
                },
                success: function (result) {
                    drawCarProcess(result.data);
                }
            });

            function drawCarProcess(data) {
                if (data && data.length) {
                    let ticketDetail = data[0]
                    $('#licensePlate').text(ticketDetail['license_plate']);
                    $('#departureTime').text(ticketDetail['departure_time']);
                    $('#arrivalTime').text(ticketDetail['arrival_time']);
                    $('#departure').text(ticketDetail['departure']);
                    $('#arrival').text(ticketDetail['arrival']);
                    $('#price').text(ticketDetail['price']);
                    $('#username').text(ticketDetail['username']);
                    $('#phone').text(ticketDetail['phone']);
                    $('#createdAt').text(ticketDetail['created_at']);
                    $('#totalPrice').text(ticketDetail['total_price']);
                    $('#paymentMethod').text(ticketDetail['payment_method']);
                    $('#ticketId').text(ticketDetail['id']);
                    codeAddress(ticketDetail['departure'], ticketDetail['arrival']);
                }
            }

            function initialize() {
                let options = {
                    zoom: 16,
                    center: new google.maps.LatLng(startLatLng[0], startLatLng[1]),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('map_canvas'), options);
                let rendererOptions = {
                    map: map, // Bản đồ đích
                    draggable: true, //Cho phép kéo map
                    preserveViewport: true
                };
                let directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
                let directionsService = new google.maps.DirectionsService();
                directionsDisplay.setMap(map);
                let request = {
                    origin: new google.maps.LatLng(startLatLng[0], startLatLng[1]), //Điểm Start
                    destination: new google.maps.LatLng(targetLatLng[0], targetLatLng[1]), // Điểm Đích
                    travelMode: google.maps.DirectionsTravelMode.WALKING, // Phương tiện giao thông
                };
                directionsService.route(request, function (response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        new google.maps.DirectionsRenderer({
                            map: map,
                            directions: response,
                            suppressMarkers: true // Xóa marker default
                        });
                        let leg = response.routes[0].legs[0];
                        makeMarker(leg.end_location, markers.goalMarker, map);
                        setTimeout(function () {
                            map.setZoom(16); // Thay đổi tỉ lệ zoom
                        });
                    }
                });
            }

            function makeMarker(position, icon, map) {
                let marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    icon: icon
                });
            }

            let markers = {
                goalMarker: new google.maps.MarkerImage(
                    goalMarkerImg, //  Đường dẫn của img
                    new google.maps.Size(24, 33), // width,height của marker
                    new google.maps.Point(0, 0),
                    new google.maps.Point(12, 33),
                    new google.maps.Size(24, 33))
            };

            function codeAddress(departure, arrival) {

                let geocoder = new google.maps.Geocoder();
                geocoder.geocode({'address': departure}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        startLatLng = [results[0].geometry.location.lat(), results[0].geometry.location.lng()]
                        geocoder.geocode({'address': arrival}, function (resultss, statuss) {
                            if (statuss == google.maps.GeocoderStatus.OK) {
                                targetLatLng = [resultss[0].geometry.location.lat(), resultss[0].geometry.location.lng()]
                                initialize();
                            } else {
                                alert("Geocode was not successful for the following reason: " + status);
                            }
                        });
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
            }
        });
    </script>
@endsection
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
