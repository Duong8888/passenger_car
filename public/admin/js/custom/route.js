$(document).ready(function () {
    const showDeparture = $('.col-departure');
    const showArrival = $('.col-arrival');
    const btnDeparture = $('.btn-departure');
    const btnArrival = $('.btn-arrival');
    const modalBtn = $('#modal-btn');
    const btnMain = $('#btn-main');
    let formAction = 'add';
    const basUrl = 'route';
    let myChoices;
    let selectStatesInputEl;
    let routeDeparture;
    let routeArrival;
    let myChoicesDeparture;
    let myChoicesArrival

    function initializeChoices() {
        selectStatesInputEl = document.querySelector('#states');
        routeDeparture = document.querySelector('#route-departure');
        routeArrival = document.querySelector('#route-arrival');

        myChoices = new Choices(selectStatesInputEl, {
            placeholder: 'Select car...'
        });
        myChoicesDeparture = new Choices(routeDeparture);
        myChoicesArrival = new Choices(routeArrival);
    }

    initializeChoices();
    const inputDeparture = `<div class="mb-3 d-flex">
                                <input type="text" name="departure[]" class="form-control"
                                       id="example-number"
                                       placeholder="Đại học công nghệp ...">
                                <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                            </div>`;
    const inputArrival = `<div class="mb-3 d-flex">
                               <input type="text" name="arrival[]" class="form-control"
                                         id="example-number"
                                         placeholder="Hà Đông ...">
                                  <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                           </div>`;

    btnDeparture.on('click', function () {
        showDeparture.append(inputDeparture);
    });
    btnArrival.on('click', function () {
        showArrival.append(inputArrival);
    });

    $(document).on("click", ".close", function () {
        if ($(this).parent().siblings().length > 0) {
            $(this).parent().remove();
        }
    });


    modalBtn.on('click', function () {
        formAction = 'add';
        myChoices.clearStore();
        $("#form-main").attr('data-action', 'add');
        $.ajax({
            url: basUrl,
            method: 'GET',
            success: function (data) {
                console.log(data.carData);
                if ($("#form-main").data('action') === 'add') {
                    // myChoices.clearStore();
                    const carOptions = [];
                    $.each(data.carData, function (index, car) {
                        const option = {
                            value: car.id,
                            label: car.license_plate + ' | ' + car.capacity + ' chỗ'
                        };
                        carOptions.push(option);
                    });
                    myChoices.setChoices(carOptions, 'value', 'label', true);
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    });

    $("#form-main").submit(function (e) {
        e.preventDefault();
        console.log(formAction);
        if (formAction === 'add') {
            add();
        }

        if (formAction === 'update') {
            update();
        }

    });


    function add() {
        var selectedValues = $("#states").val();

        var formData = {
            car: selectedValues,
            routeDeparture: $("#route-departure").val(),
            routeArrival: $("#route-arrival").val(),
            departure: $("input[name='departure[]']").map(function () {
                return this.value;
            }).get(),
            arrival: $("input[name='arrival[]']").map(function () {
                return this.value;
            }).get()
        };

        $.ajax({
            type: "POST",
            url: basUrl + '/store',
            data: formData,
            success: function (response) {
                console.log(response);
                loadData();
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Thêm mới thành công",
                    showConfirmButton: false,
                    timer: 1500,
                });
                toggleModal();
            }
        });
    }


    function toggleModal() {
        modalBtn.trigger("click");
    }


    function loadData() {
        $.ajax({
            type: "GET",
            url: basUrl,
            success: function (data) {
                $(".show-item-table").html('');
                var row = '';
                var route = data.data.data;
                console.log(route);
                for (var i = 0; i < route.length; i++) {
                    $(".show-item-table").append(`
                        <tr>
                            <td>${route[i].departure}</td>
                            <td>${route[i].arrival}</td>
                            <td style="display: flex;">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Thông tin</a>
                                        <a class="dropdown-item btn-update" data-id="${route[i].id}" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-id="${route[i].id}" data-action="delete/${route[i].id}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>`);
                }

            }
        });
    }

    var idUpdate = '';

    function showUpdate() {
        $(document).on('click', '.btn-update', function () {
            idUpdate = $(this).data('id');
            $.ajax({
                url: basUrl + '/edit/' + $(this).data('id'),
                method: 'GET',
                success: function (data) {
                    console.log(data);
                    console.log(data.route.departure);
                    toggleModal();
                    formAction = 'update';
                    $("#form-main").attr('data-action', 'update');
                    const carOptions = [];
                    const selectedCarValues = [];
                    $.each(data.cars, function (index, car) {
                        const option = {
                            value: car.id,
                            label: car.license_plate + ' | ' + car.capacity + ' chỗ'
                        };
                        carOptions.push(option);
                        selectedCarValues.push(car.id);
                    });
                    $.each(data.carNull, function (index, car) {
                        console.log(car)
                        const option = {
                            value: car.id,
                            label: car.license_plate + ' | ' + car.capacity + ' chỗ'
                        };
                        carOptions.push(option);
                    });
                    myChoices.setChoices(carOptions, 'value', 'label', true);
                    myChoices.setChoiceByValue(selectedCarValues);
                    myChoicesDeparture.setChoiceByValue(data.route.departure);
                    myChoicesArrival.setChoiceByValue(data.route.arrival);

                    var arrivalItem = $('.col-arrival');
                    var departureItem = $('.col-departure');
                    departureItem.html('');
                    arrivalItem.html('');
                    $.each(data.stops, function (index, stop) {
                        if (stop.stop_type === 0) {
                            departureItem.append(`
                                <div class="mb-3 d-flex">
                                    <input type="text" name="departure[]" class="form-control"
                                           id="example-number"
                                           placeholder="Hà Đông ..."
                                           value="${stop.stop_name}"
                                           >
                                    <button type="button"
                                            class="close btn btn-danger waves-effect waves-light"><i
                                            class="mdi mdi-close"></i></button>
                                </div>
                            `);
                        } else {
                            arrivalItem.append(`
                                <div class="mb-3 d-flex">
                                    <input type="text" name="arrival[]" class="form-control"
                                           id="example-number"
                                           placeholder="Hà Đông ..."
                                           value="${stop.stop_name}"
                                           >
                                    <button type="button"
                                            class="close btn btn-danger waves-effect waves-light"><i
                                            class="mdi mdi-close"></i></button>
                                </div>
                            `);
                        }
                    });

                    deleteRoute();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        });
    }

    showUpdate();


    function update() {
        var selectedCars = $("#states").val();
        // Lấy giá trị của các trường khác từ form
        var routeDeparture = $("#route-departure").val();
        var routeArrival = $("#route-arrival").val();
        var departureLocations = $("input[name='departure[]']").map(function () {
            return $(this).val();
        }).get();
        var arrivalLocations = $("input[name='arrival[]']").map(function () {
            return $(this).val();
        }).get();

        // Tạo đối tượng dữ liệu để gửi lên server
        var data = {
            car: selectedCars,
            route_departure: routeDeparture,
            route_arrival: routeArrival,
            departure: departureLocations,
            arrival: arrivalLocations
        };

        // Gửi yêu cầu cập nhật dữ liệu lên server
        $.ajax({
            method: "PUT",
            url: basUrl + '/' + 'update/' + idUpdate, // Thay thế bằng URL cập nhật thực tế
            data: data,
            success: function (response) {
                console.log(response);
                toggleModal();
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: response,
                    showConfirmButton: false,
                    timer: 1500,
                });
                loadData();
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            }
        });

    }


    function deleteRoute() {
        console.log($(this).data('id'));
        $(document).on('click', '.delete', function () {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "DELETE",
                        url: basUrl + '/' + 'destroy/' + $(this).data('id'),
                        data: data,
                        success: function (response) {
                            console.log(response);
                            Swal.fire({
                                position: "top-center",
                                icon: "success",
                                title: response,
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            loadData();
                        },
                        error: function (xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                }
            });
        });
    }

    deleteRoute();


});
