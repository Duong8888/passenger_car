import {Uppy, Dashboard} from "https://releases.transloadit.com/uppy/v3.17.0/uppy.min.mjs"

$(document).ready(function () {
    const base = window.location.origin
    const modal = $('#con-close-modal');
    const modalBtn = $('#modal-btn');
    const tabelMain = $('.tbody');
    const uppy = new Uppy()
    let title = $('.modal-title');
    let idUpdate = 0;
    uppy.use(Dashboard, {
        inline: true,
        target: "#uppy",
        height: 200,
        proudlyDisplayPoweredByUppy: false,
        showSelectedFiles: true,
        disableStatusBar: true,
        hideProgressAfterFinish: false,
    });

    const baseUrl = 'car';
    let btnSubmit = $('#btn-main');
    const formMain = $('#form-main');

    $(document).on("click", ".btn-delete-time", function () {
        var item = $('.add-item').length;
        if (item > 1) {
            $(this).closest(".add-item").remove();
        }
    });

    $(document).on("click", ".btn-add-time", function () {
        var newItem = $(".add-item:first").clone();
        $(".show-item").append(newItem);
    });


    btnSubmit.click(function () {
        if ($(this).attr('data-action') === 'add') {
            add();
        } else {
            update();
        }
    });

    function add() {
        var formData = new FormData($('#form-main')[0])
        // Lấy nội dung từ Quill Editor
        var content = $(".ql-editor").html();
        formData.append('description', content);
        uppy.getFiles().forEach((file, index) => {
            formData.append('path[' + index + ']', file.data);
        });

        $.ajax({
            url: baseUrl + '/store',
            type: "POST",
            data: formData,
            processData: false, // Set false để ngăn jQuery xử lý dữ liệu FormData
            contentType: false, // Set false để không thiết lập Header 'Content-Type'
            success: function (data) {
                console.log(data)
                toogleModal();
                loadData();
            },
            error: function (xhr, status, error) {
                console.error("Error sending data:", error);
            }
        });
    }

    modalBtn.on('click', function () {
        btnSubmit.attr('data-action', 'add');
        btnSubmit.text('Thêm mới');
        title.text('Thêm mới xe');
    });

    function toogleModal() {
        uppy.cancelAll();
        formMain.attr('action', baseUrl + '/' + 'store');
        modalBtn.trigger("click");
    }

    function loadData() {
        $.ajax({
            url: baseUrl,
            method: "GET",
            success: function (data) {
                console.log(data)
                tabelMain.html('');
                $.each(data.data.data, function (index, item) {
                    $.each(data.routes, function (index2, item2) {
                        if (item2.id === item.route_id) {
                            var departure = item2.departure + ' - ';
                            var arrival = item2.arrival;
                            tabelMain.append(`
                        <tr>
                            <td>${item.license_plate}</td>
                            <td>${item.capacity}</td>
                            <td>${item.price}</td>
                            <td>${departure}${arrival}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Action <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item  btn-update" id="${item.id}" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-action="{{route('car.delete',[$value->id])}}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `);
                        }
                    });
                    if (item.route_id === null) {
                        var departure = 'Chưa hoạt động.';
                        var arrival = '.';

                        tabelMain.append(`
                        <tr>
                            <td>${item.license_plate}</td>
                            <td>${item.capacity}</td>
                            <td>${item.price}</td>
                            <td>${departure}${arrival}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Action <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item  btn-update" id="${item.id}" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-action="{{route('car.delete',[$value->id])}}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `);
                    }
                })
                showUpdate();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    // udate xe
    let licensePlate = $('input[name="license_plate"]');
    let price = $('input[name="price"]');
    let capacity = $('input[name="capacity"]');
    let description = $('.ql-editor');
    let time = $('.show-item');
    let services = $('.service');

    function showUpdate() {
        $(document).on('click', '.btn-update', function (e) {
            let id = e.target.id;
            $.ajax({
                url: baseUrl + '/edit/' + id,
                method: 'POST',
                success: function (response) {
                    console.log(response)
                    idUpdate = id;
                    loadUpdate(id, response);
                    showImage(response[0].albums);
                },
                error: function (error) {
                    console.log(error)
                }
            });
            toogleModal();
        });
    }

    showUpdate();

    function update() {
        var formData = new FormData($('#form-main')[0])
        // Lấy nội dung từ Quill Editor
        var content = $(".ql-editor").html();
        formData.append('description', content);
        uppy.getFiles().forEach((file, index) => {
            formData.append('path[' + index + ']', file.data);
        });

        $.ajax({
            url: baseUrl + '/update/'+idUpdate,
            type: "POST",
            data: formData,
            processData: false, // Set false để ngăn jQuery xử lý dữ liệu FormData
            contentType: false, // Set false để không thiết lập Header 'Content-Type'
            success: function (data) {
                console.log(data)
                toogleModal();
                loadData();
            },
            error: function (xhr, status, error) {
                console.error("Error sending data:", error);
            }
        });
    }


    function loadUpdate(id, response) {
        formMain.attr('action', baseUrl + '/' + 'update/' + id);
        btnSubmit.attr('data-action', 'update');
        btnSubmit.text('Lưu thay đổi');
        title.text('Cập nhật xe');

        licensePlate.val(response[0].license_plate);
        price.val(response[0].price);
        capacity.val(response[0].capacity);
        description.html(response[0].description);
        services.each(function (index, item) {
            $(item).attr("checked", false);
        });
        for (var i = 0; i < response[0].services.length; i++) {
            services.each(function (index, item) {
                if ($(item).val() == response[0].services[i].id) {
                    $(item).attr("checked", true);
                }
            });
        }

        // time

        time.html('');
        for (var j = 0; j < response[0].working_time.length; j++) {
            time.append(
                `
                <div class="row add-item mb-2">
                    <div class="col-md-5">
                        <input class="form-control" name="departure[]" id=""
                               type="time" name="time" value="${response[0].working_time[j].departure_time}">
                    </div>
                    <div class="col-md-5">
                        <input class="form-control" name="arrival[]" id=""
                               type="time" name="time" value="${response[0].working_time[j].arrival_time}">
                    </div>
                    <div class="col-md-2 d-flex justify-content-between">
                        <button type="button"
                                class="btn-delete-time btn d-flex justify-content-center align-items-center btn-danger waves-effect waves-light">
                            <i class="fe-trash-2"></i></button>

                        <button type="button"
                                class="btn-add-time btn btn-success d-flex justify-content-center align-items-center waves-effect waves-light mx-2">
                            <i class="fe-plus-circle"></i></button>
                    </div>
                </div>
                `
            );
        }


    }


    function showImage(data) {
        for (var i = 0; i < data.length; i++) {
            const path = base + '/' + data[i].path
            const pathParts = data[i].path.split('/');
            const fileName = pathParts[pathParts.length - 1];
            fetch(path)
                .then(response => response.blob())
                .then(blob => {
                    const fakeFile = {
                        source: 'local',
                        name: fileName,
                        type: 'image/jpeg',
                        data: blob,
                    };

                    uppy.addFile(fakeFile);
                })
                .catch(error => {
                    console.error('Lỗi khi tải hình ảnh: ' + image.path);
                });
        }
    }

});


