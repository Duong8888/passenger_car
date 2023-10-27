$(document).ready(function () {
    const $inputLeft = $("#input-left");
    const $inputRight = $("#input-right");
    const $thumbLeft = $(".slider > .thumb.left");
    const $thumbRight = $(".slider > .thumb.right");
    const $range = $(".slider > .range");

    const departure = $('select[name="departure"]');
    const arrival = $('select[name="arrival"]');
    const baseUrl = 'search';
    const dataList = $('.list-route');

    const filterStopsArrival = $('#filterStopsArrival');
    const filterStopsDeparture = $('#filterStopsDeparture');

    let filterStopsArrivalValue = ''
    let filterStopsDepartureValue = '';

    filterStopsArrival.on("change", function (event) {
        filterStopsArrivalValue = filterStopsArrival.val()
        search()
    });


    filterStopsDeparture.on("change", function (event) {
        filterStopsDepartureValue = filterStopsDeparture.val()
        search()
    });

    let skeleton = `
    <div role="status" class="w-full p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
        <div class="flex items-center justify-between">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>

        <span class="sr-only">Loading...</span>
    </div>
    `;
    let loading = $('.loading');
    let btn = $('.btn-find');
    loading.hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    btn.on('click', function () {
        loading.show();
        arrival.val();
        departure.val();
        filterStopsArrival.val('');
        filterStopsDeparture.val('');
        search();
    });
    console.log(arrival.val());


    $('.btn-find').click();

    function search() {
        dataList.html('');
        dataList.append(skeleton);
        $.ajax({
            url: baseUrl,
            method: 'GET',
            data: {
                departure: departure.val(),
                arrival: arrival.val(),
                filterArrival: filterStopsArrival.val(),
                filterDeparture: filterStopsDeparture.val()
            },
            success: function (response) {
                loading.hide();
                console.log(response.dataRoute);
                dataList.html('');
                loadStopRoute(response.filterStops)
                if (response.data.length === 0) {
                    dataList.append(`
                    <div class="text-center">
                       Tuyến đường chưa có xe hoạt động .
                    </div>
                    `);
                } else {
                    loadItem(response.data, response.dataRoute);
                }
            },
            error: function (error) {
                loadFail(error, 'Tuyến đường chưa có xe hoạt động .');
            }
        })

    }

    function loadFail(error, message) {
        loading.hide();
        dataList.html('');
        dataList.append(`
                    <div class="text-center">
                       ${message}
                    </div>
                    `);
        console.log(error)
    }

    function loadStopRoute(filterStops){

        filterStopsDeparture.empty();
        filterStopsArrival.empty();

        let offDeparture = true;
        let offArrival = true;


        if (!filterStops || filterStops.length > 0) {
            filterStopsArrival.append('<option value="">Chọn điểm trả</option>')
            filterStopsDeparture.append('<option value="">Chọn điểm đón</option>')
            $.each(filterStops, function (index, item) {
                if (item.stop_type === 0) {
                    offDeparture = false;
                    let isSelect  = filterStopsDepartureValue == item.id ? 'selected' : '';
                    filterStopsDeparture.append('<option value="' + item.id + '" ' + isSelect + ' >' + item.stop_name + '</option>');
                } else if (item.stop_type === 1) {
                    offArrival = false;
                    let isSelect  = filterStopsArrivalValue == item.id ? 'selected' : '';
                    filterStopsArrival.append('<option value="' + item.id + '" ' + isSelect + ' >' + item.stop_name + '</option>');
                }
            });
        }

        if (offDeparture) {
            filterStopsDeparture.attr('disabled', 'disabled');
            filterStopsDeparture.append('<option  value="">không có điểm đi</option>');
        } else {
            filterStopsDeparture.removeAttr('disabled');
        }

        if (offArrival) {
            filterStopsArrival.attr('disabled', 'disabled');
            filterStopsArrival.append('<option  value="">không có điểm đến</option>');
        } else {
            filterStopsArrival.removeAttr('disabled');
        }


    }

    function loadItem(data, dataRoute) {
        dataList.html('');
        loading.hide();
        var service = '';
        $.each(data, function (index, item) {
            $.each(item.working_time, function (indexWorking, itemWorking) {
                service = '';
                $.each(item.services, function (indexServices, itemServices) {
                    service += `<span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">${itemServices.service_name}</span>`;
                })
                dataList.append(`
                                    <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="p-6">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-1">
                                                    <div class="px-2 mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-10">
                                                    <h5 class="mb-1 fs-17"><a href="job-details.html" class="dark:text-gray-50">Dương Đẹp Trai 102</a>
                                                        <small class="font-normal text-gray-500 dark:text-gray-300"></small>
                                                    </h5>
                                                    <ul class="mb-0 lg:gap-3 gap-y-3">
                                                        <li>
                                                            <p class="mb-0 mt-4 text-sm text-gray-500 dark:text-gray-300">${dataRoute.departure} (${(itemWorking.departure_time).slice(0, -3)}) - ${dataRoute.arrival} (${(itemWorking.arrival_time).slice(0, -3)})</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Gế ngồi ${item.capacity}</p>
                                                        </li>
                                                    </ul>
                                                     <div class="mt-4">
                                                            <div class="service flex flex-wrap gap-1.5">
                                                                ${service}
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                        <li><i class="uil uil-tag"></i> Giá Vé :</li>
                                                        <li>${item.price.toLocaleString('en-US')}đ</li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                    <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Chi tiết <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                    `);
            });
        });

    }

    function loadItem2(response) {
        dataList.html('');
        loading.hide();
        var serviceHtml = '';
        $.each(response.data, function (index, item) {
            serviceHtml = '';
            $.each(response.passengerCarsService, function (indexpassengerCarsService, itempassengerCarsService) {
                $.each(response.service, function (indexServices, itemServices) {
                    if (itemServices.id === itempassengerCarsService.service_id && item.id === itempassengerCarsService.passenger_car_id) {
                        serviceHtml += `<span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">${itemServices.service_name}</span>`;
                    }
                });
            })
            dataList.append(`
                                    <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="p-6">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-1">
                                                    <div class="px-2 mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-10">
                                                    <h5 class="mb-1 fs-17"><a href="job-details.html" class="dark:text-gray-50">Dương Đẹp Trai 102</a>
                                                        <small class="font-normal text-gray-500 dark:text-gray-300"></small>
                                                    </h5>
                                                    <ul class="mb-0 lg:gap-3 gap-y-3">
                                                        <li>
                                                            <p class="mb-0 mt-4 text-sm text-gray-500 dark:text-gray-300">${item.departure} (${(item.departure_time).slice(0, -3)}) - ${item.arrival} (${(item.arrival_time).slice(0, -3)})</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Gế ngồi ${item.capacity}</p>
                                                        </li>
                                                    </ul>
                                                     <div class="mt-4">
                                                            <div class="service flex flex-wrap gap-1.5">
                                                                ${serviceHtml}
                                                            </div>
                                                     </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                        <li><i class="uil uil-tag"></i> Giá Vé :</li>
                                                        <li>${item.price.toLocaleString('en-US')}đ</li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                    <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Chi tiết <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                    `);
        });
    }

    function setLeftValue() {
        const min = parseInt($inputLeft.attr("min"));
        const max = parseInt($inputLeft.attr("max"));

        const value = Math.min(parseInt($inputLeft.val()), parseInt($inputRight.val()) - 1);

        const percent = ((value - min) / (max - min)) * 100;
        $thumbLeft.css("left", percent + "%");
        $range.css("left", percent + "%");

        rangeLeftSlider(value);
    }

    function setRightValue() {
        const min = parseInt($inputRight.attr("min"));
        const max = parseInt($inputRight.attr("max"));
        const value = Math.max(parseInt($inputRight.val()), parseInt($inputLeft.val()) + 1);

        const percent = ((value - min) / (max - min)) * 100;
        $thumbRight.css("right", 100 - percent + "%");
        $range.css("right", 100 - percent + "%");

        rangeRightSlider(value);
    }

    function rangeLeftSlider(value) {
        $("#range2LeftValue").html(value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " đ");
    }

    function rangeRightSlider(value) {
        $("#range2RightValue").html(value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " đ");
    }


    // ajax request
    function ajaxRequest(url, data, type = false) {
        dataList.html('');
        dataList.append(skeleton);
        $.ajax({
            url: url,
            method: "POST",
            processData: false, // Set false để ngăn jQuery xử lý dữ liệu FormData
            contentType: false, // Set false để không thiết lập Header 'Content-Type'
            data: data,
            success: function (response) {
                if (type) {
                    console.log(response)
                    loadItem2(response)
                    if (response.data.length === 0) {
                        loadFail('fails', 'Không có kết quả phù phợp .');
                    }
                } else {
                    loadItem(response.data, response.dataRoute);
                }
                console.log(response);
            },
            error: function (error) {
                loadFail(error, 'Không có kết quả phù phợp .');
            }
        });
    }

    //sắp xếp theo thứ tự tăng dần
    var formData = new FormData($('#uploadForm')[0]);
    $(document).on('change', '.sortBy', function (e) {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('type', $(this).val());
        ajaxRequest(
            'sortBy',
            formData,
            true
        );
    });

    // lọc theo giờ
    $(document).on('change', '.find-time', function (e) {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        if ($(this).is(':checked')) {
            var min = $(this).data('min');
            var max = $(this).data('max');
            formData.append('min[' + e.target.id + ']', min);
            formData.append('max[' + e.target.id + ']', max);
            ajaxRequest('sortBy', formData, true);
        } else {
            formData.delete('min[' + e.target.id + ']');
            formData.delete('max[' + e.target.id + ']');
            ajaxRequest('sortBy', formData, true);
        }
    });


    // loch theo khoảng giá tiền
    $inputLeft.on("input", setLeftValue);
    $inputRight.on("input", setRightValue);
    $inputLeft.add($inputRight).on("mouseup", function () {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('price-start', $inputLeft.val());
        formData.append('price-end', $inputRight.val());
        ajaxRequest(
            'sortBy',
            formData,
            true
        );
    });


});
