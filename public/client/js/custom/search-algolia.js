$(document).ready(function () {
    const today = new Date().toISOString().split('T')[0];
    const inputDate = $('#datepicker');
    inputDate.attr('min', today);
    // inputDate.val(today);
    var selectDeparture = document.querySelector('#filterStopsDeparture');
    const choicesDeparture = new Choices(selectDeparture);
    var selectArrival = document.querySelector('#filterStopsArrival');
    const choicesArrival = new Choices(selectArrival);

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
                filterDeparture: filterStopsDeparture.val(),
                date: inputDate.val()
            },
            success: function (response) {
                loading.hide();
                console.log(response.dataRoute);
                dataList.html('');
                loadStops(response.filterStops)
                if (response.data.length === 0) {
                    dataList.append(`
                    <div class="text-center">
                       Tuyến đường chưa có xe hoạt động .
                    </div>
                    `);
                } else {
                    loadItem(response.data, response.dataRoute, response.filterStops);
                }
            },
            error: function (error) {
                loadStops([]);
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

    // function loadStopRoute(filterStops) {
    //
    //     filterStopsDeparture.empty();
    //     filterStopsArrival.empty();
    //
    //     let offDeparture = true;
    //     let offArrival = true;
    //
    //
    //     if (!filterStops || filterStops.length > 0) {
    //         filterStopsArrival.append('<option value="">Chọn điểm trả</option>')
    //         filterStopsDeparture.append('<option value="">Chọn điểm đón</option>')
    //         $.each(filterStops, function (index, item) {
    //             if (item.stop_type === 0) {
    //                 offDeparture = false;
    //                 let isSelect = filterStopsDepartureValue == item.id ? 'selected' : '';
    //                 filterStopsDeparture.append('<option value="' + item.id + '" ' + isSelect + ' >' + item.stop_name + '</option>');
    //             } else if (item.stop_type === 1) {
    //                 offArrival = false;
    //                 let isSelect = filterStopsArrivalValue == item.id ? 'selected' : '';
    //                 filterStopsArrival.append('<option value="' + item.id + '" ' + isSelect + ' >' + item.stop_name + '</option>');
    //             }
    //         });
    //     }
    //
    //     if (offDeparture) {
    //         filterStopsDeparture.attr('disabled', 'disabled');
    //         filterStopsDeparture.append('<option  value="">không có điểm đi</option>');
    //     } else {
    //         filterStopsDeparture.removeAttr('disabled');
    //     }
    //
    //     if (offArrival) {
    //         filterStopsArrival.attr('disabled', 'disabled');
    //         filterStopsArrival.append('<option  value="">không có điểm đến</option>');
    //     } else {
    //         filterStopsArrival.removeAttr('disabled');
    //     }
    //
    //
    // }

    function loadStops(filterStops, action = null) {
        console.log('Anh Duong');
        console.log(filterStops);
        const stopOptionsDeparture = [];
        const stopOptionsArrival = [];
        if (action != null) {
            if (action === true) {
                choicesDeparture.clearStore();
                $.each(filterStops, function (index, stop) {
                    if (stop.stop_type == 0) {
                        const optionDeparture = {
                            value: stop.id,
                            label: stop.stop_name
                        };
                        stopOptionsDeparture.push(optionDeparture);
                    }
                });
                choicesDeparture.setChoices(stopOptionsDeparture, 'value', 'label', true);
            }
            if (action === false){
                choicesArrival.clearStore();
                $.each(filterStops, function (index, stop) {
                    if (stop.stop_type == 1) {
                        const optionArrival = {
                            value: stop.id,
                            label: stop.stop_name
                        };
                        stopOptionsArrival.push(optionArrival);
                    }
                });
                choicesArrival.setChoices(stopOptionsArrival, 'value', 'label', true);
            }
        } else {
            choicesDeparture.clearStore();
            choicesArrival.clearStore();
            $.each(filterStops, function (index, stop) {
                if (stop.stop_type == 0) {
                    const optionDeparture = {
                        value: stop.id,
                        label: stop.stop_name
                    };
                    stopOptionsDeparture.push(optionDeparture);
                } else {
                    const optionArrival = {
                        value: stop.id,
                        label: stop.stop_name
                    };
                    stopOptionsArrival.push(optionArrival);
                }
            });
            choicesDeparture.setChoices(stopOptionsDeparture, 'value', 'label', true);
            choicesArrival.setChoices(stopOptionsArrival, 'value', 'label', true);
        }
    }

    function loadItem(data, dataRoute, filterStops) {
        loadStops(filterStops);
        console.log(filterStops);
        dataList.html('');
        loading.hide();
        var service = '';
        var slot = '';
        console.log(data);
        $.each(data, function (index, item) {
            $.each(item.working_time, function (indexWorking, itemWorking) {
                service = '';
                slot = item.capacity;
                console.log(slot);
                $.each(item.tickets, function (indexTicket, itemTicket) {
                    if(itemTicket.time_id == itemWorking.id && itemTicket.date == inputDate.val()){
                        slot-= itemTicket.quantity;
                        console.log(slot);
                    }
                })
                $.each(item.services, function (indexServices, itemServices) {
                    service += `<span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">${itemServices.service_name}</span>`;
                })
                dataList.append(`
                                    <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="p-6">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="px-2 mb-4 text-center mb-md-0">
                                                        <a href="company-details.html">
                                                            <img src="${item.albums[0].path}" style="border-radius: 5px" alt="ảnh xe" class="mx-auto h-full object-cover rounded-3">
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <h5 class="mb-1 fs-17"><a href="#" class="dark:text-gray-50">${item.user.name}</a>
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

                                                 <div class="col-span-12 lg:col-span-3 lg:flex lg:flex-col lg:justify-between lg:items-end ">
                                                    <div class="lg:flex lg:flex-col lg:items-end">
                                                        <p class="mb-4 font-bold group-data-[theme-color=violet]:text-violet-600 group-data-[theme-color=sky]:text-sky-600 group-data-[theme-color=red]:text-red-600 group-data-[theme-color=green]:text-green-600 group-data-[theme-color=pink]:text-pink-600 group-data-[theme-color=blue]:text-blue-600">
                                                            Giá vé: ${item.price.toLocaleString('en-US')}đ
                                                        </p>
                                                        <p>Còn ${slot} chỗ trống</p>
                                                    </div>
                                                    <a id="pasengerCarUrl" class="mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20" href="/car/${item.id}?time=${itemWorking.id}" data-bs-toggle="modal">Chi tiết <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                    `);
            });
        });

        // $('#pasengerCarUrl').attr('href','/passengerCar-detail?filterArrival=' +filterStopsArrivalValue + '&filterDeparture=' + filterStopsDepartureValue);
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
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="px-2 mb-4 text-center mb-md-0">
                                                        <a href="company-details.html">
                                                            <img src="${item.path}" style="border-radius: 5px" alt="ảnh xe" class="mx-auto h-full object-cover rounded-3">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <h5 class="mb-1 fs-17"><a href="job-details.html" class="dark:text-gray-50">${item.name}</a>
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

                                                <div class="col-span-12 lg:col-span-3 lg:flex lg:flex-col lg:justify-between lg:items-end ">
                                                    <div class="lg:flex lg:flex-col lg:items-end">
                                                        <p class="mb-4 font-bold group-data-[theme-color=violet]:text-violet-600 group-data-[theme-color=sky]:text-sky-600 group-data-[theme-color=red]:text-red-600 group-data-[theme-color=green]:text-green-600 group-data-[theme-color=pink]:text-pink-600 group-data-[theme-color=blue]:text-blue-600">
                                                            Giá vé: ${item.price.toLocaleString('en-US')}đ
                                                        </p>
                                                        <p>Còn ${item.capacity - item.total_quantity} chỗ trống</p>
                                                    </div>
                                                    <a id="pasengerCarUrl" class="mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20" href="/car/${item.id}?time=${item.working_times_id}" data-bs-toggle="modal">Chi tiết <i class="mdi mdi-chevron-double-right"></i></a>
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
        return new Promise((resolve, reject) => {
            dataList.html('');
            dataList.append(skeleton);
            $.ajax({
                url: url,
                method: "POST",
                processData: false,
                contentType: false,
                data: data,
                success: function (response) {
                    if (type) {
                        console.log(response);
                        loadItem2(response);
                        if (response.data.length === 0) {
                            loadFail('fails', 'Không có kết quả phù phợp .');
                            reject('No matching results');
                        }
                    } else {
                        loadItem(response.data, response.dataRoute);
                    }
                    resolve(response.filterStops);
                },
                error: function (error) {
                    loadFail(error, 'Không có kết quả phù phợp .');
                    reject(error);
                }
            });
        });
    }

    function handleDataStop(dataStop) {
        loadStops(dataStop);
    }

    //sắp xếp theo thứ tự tăng dần
    var formData = new FormData($('#uploadForm')[0]);
    $(document).on('change', '.sortBy', function (e) {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('date', inputDate.val());
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
        formData.append('date', inputDate.val());
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

    $(document).on('change', '.users', function (e) {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('date', inputDate.val());
        if ($(this).is(':checked')) {
            console.log($(this).val());
            var user = $(this).val()
            formData.append('users[' + user + ']', user);
            ajaxRequest('sortBy', formData, true);
        } else {
            formData.delete('users[' + $(this).val() + ']');
            ajaxRequest('sortBy', formData, true);
        }
    });


    // lọc theo khoảng giá tiền
    $inputLeft.on("input", setLeftValue);
    $inputRight.on("input", setRightValue);
    $inputLeft.add($inputRight).on("mouseup", function () {
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('date', inputDate.val());
        formData.append('price-start', $inputLeft.val());
        formData.append('price-end', $inputRight.val());
        ajaxRequest(
            'sortBy',
            formData,
            true
        );
    });

    // lọc theo điểm đón trả

    filterStopsArrival.on("change", function (event) {
        filterStopsArrivalValue = filterStopsArrival.val();
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('date', inputDate.val());
        formData.append('arrivalStop', filterStopsArrivalValue);
        if (filterStopsArrivalValue) {
            $('#arrivalFilterShow').html(`<div class="inline-block border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                                <div class="flex items-center">
                                                    <i class="uil uil-clipboard-notes">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(235, 87, 87, 1);transform: ;msFilter:;">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M13 4.069V2h-2v2.069A8.01 8.01 0 0 0 4.069 11H2v2h2.069A8.008 8.008 0 0 0 11 19.931V22h2v-2.069A8.007 8.007 0 0 0 19.931 13H22v-2h-2.069A8.008 8.008 0 0 0 13 4.069zM12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"></path>
                                                        </svg>
                                                    </i>
                                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">Điểm trả : ${$("#filterStopsArrival  option:selected").text()}</h6>
                                                    </a>
                                                </div>
                                            </div>`)
        }
        ajaxRequest(
            'sortBy',
            formData,
            true
        );
    });

    $('#arrivalFilterShow').on("click", function (event) {
        formData.delete('arrivalStop');
        filterStopsArrival.val('');
        filterStopsArrivalValue = '';
        $('#arrivalFilterShow').html('');
        ajaxRequest('sortBy', formData, true)
            .then((filterStops) => {
                loadStops(filterStops, false)
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    filterStopsDeparture.on("change", function (event) {
        filterStopsDepartureValue = filterStopsDeparture.val()
        formData.append('departure', $('select[name="departure"]').val());
        formData.append('arrival', $('select[name="arrival"]').val());
        formData.append('date', inputDate.val());
        formData.append('departureStop', filterStopsDepartureValue);
        if (filterStopsDepartureValue) {
            $('#departureFilterShow').html(`<div class="mr-4 inline-block border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                                <div class="flex items-center">
                                                    <i class="uil uil-map-marker">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(96, 165, 250, 1);transform: ;msFilter:;">
                                                            <path d="M12 5c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7-3.141-7-7-7zm0 12c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                                                            <path d="M12 9c-1.627 0-3 1.373-3 3s1.373 3 3 3 3-1.373 3-3-1.373-3-3-3z"></path>
                                                        </svg>
                                                    </i>
                                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">Điểm đón : ${$("#filterStopsDeparture  option:selected").text()}</h6>
                                                    </a>
                                                </div>
                                            </div>`)
        }
        ajaxRequest(
            'sortBy',
            formData,
            true
        );
    });

    $('#departureFilterShow').on("click", function (event) {
        formData.delete('departureStop');
        filterStopsDeparture.val('');
        filterStopsDepartureValue = '';
        $('#departureFilterShow').html('');
        ajaxRequest('sortBy', formData, true)
            .then((filterStops) => {
                loadStops(filterStops, true)
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });
});
