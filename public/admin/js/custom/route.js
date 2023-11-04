$(document).ready(function () {
    const showDeparture = $('.col-departure');
    const showArrival = $('.col-arrival');
    const btnDeparture = $('.btn-departure');
    const btnArrival = $('.btn-arrival');
    const modalBtn = $('#modal-btn');
    const btnMain = $('#btn-main');
    const  basUrl = 'route';
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


    btnMain.on('click', function () {
        $(this).attr('data-action', 'add');
    });

    $("#form-main").submit(function (e) {
        e.preventDefault();

        var selectedValues = $("#selectize-optgroup").val();

        var formData = {
            car: selectedValues,
            routeDeparture: $("#choices-single-categories").val(),
            routeArrival: $("#choices-single-location").val(),
            departure: $("input[name='departure[]']").map(function () {
                return this.value;
            }).get(),
            arrival: $("input[name='arrival[]']").map(function () {
                return this.value;
            }).get()
        };

        $.ajax({
            type: "POST",
            url: basUrl+'/store',
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
    });

    function toggleModal() {

        modalBtn.trigger("click");
    }


    function loadData() {
        $.ajax({
            type: "GET",
            url: basUrl,
            success: function (data) {
                // Xóa nội dung bảng hiện tại
                $(".show-item-table").html('');
                var row = '';
                var route = data.data;
                // Thêm dữ liệu mới vào bảng
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
                                        <a class="dropdown-item btn-update" id="${route[i].id}" href="#">Thông tin</a>
                                        <a class="dropdown-item btn-update" id="${route[i].id}" href="#">Sửa</a>
                                        <a class="dropdown-item delete" data-action="delete/${route[i].id}" href="#">Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>`);

                }


            }
        });
    }

});
