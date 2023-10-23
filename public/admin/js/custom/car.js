import {Uppy, Dashboard} from "https://releases.transloadit.com/uppy/v3.17.0/uppy.min.mjs"
// import Uppy from "@uppy/core";
// import Dashboard from "@uppy/dashboard";
$(document).ready(function () {

    const modal = $('#con-close-modal');
    const overlay = $('.modal-backdrop');
    const modalBtn = $('#modal-btn');
    const tabelMain = $('.tbody');
    const uppy = new Uppy()
    uppy.use(Dashboard, {
        inline: true,
        target: "#uppy", // Chọn một phần tử HTML để thêm giao diện Dashboard
        height: 200, // Điều chỉnh chiều cao của giao diện
        proudlyDisplayPoweredByUppy: false, // Ẩn thông báo "Powered by Uppy"
        showSelectedFiles: true, // Hiển thị danh sách các tệp đã chọn
        disableStatusBar: true, // Tắt thanh trạng thái
        hideProgressAfterFinish: false, // Giữ thanh tiến trình sau khi tải lên xong
    });

    const baseUrl = 'car';
    const btnSubmit = $('#btn-main');
    const formMain = $('#form-main');

    $(document).on("click", ".btn-delete-time", function () {
        var item = $('.add-item').length;
        if (item > 1) {
            $(this).closest(".add-item").remove();
        }
    });

    $(document).on("click", ".btn-add-time", function () {
        var newItem = $(".add-item:first").clone(); // Clone phần tử đầu tiên có lớp "add-item"
        $(".show-item").append(newItem); // Thêm phần tử clone vào cuối phần tử chứa
    });


    btnSubmit.click(function () {
        var formData = new FormData($('#form-main')[0])
        // Lấy nội dung từ Quill Editor
        var content = $(".ql-editor").html();
        formData.append('description', content);
        uppy.getFiles().forEach((file, index) => {
            formData.append('path[' + index + ']', file.data);
        });

        // Gửi dữ liệu đến máy chủ bằng AJAX
        $.ajax({
            url: baseUrl + '/store', // Điểm cuối trên máy chủ của bạn
            type: "POST",
            data: formData,
            processData: false, // Set false để ngăn jQuery xử lý dữ liệu FormData
            contentType: false, // Set false để không thiết lập Header 'Content-Type'
            success: function (data) {
                console.log(data)
                hideModal();
                loadData();
            },
            error: function (xhr, status, error) {
                console.error("Error sending data:", error);
            }
        });
    });

    function hideModal() {
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
                                        <a class="dropdown-item" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-action="{{route('car.delete',[$value->id])}}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `);
                        }
                    });
                    if(item.route_id === null){
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
                                        <a class="dropdown-item" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-action="{{route('car.delete',[$value->id])}}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `);
                    }
                })
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

});


