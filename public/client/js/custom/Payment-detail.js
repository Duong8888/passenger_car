$(document).ready(function () {
    var showInformation = '';

    $('#option2').click(function () {
        showInformation = `
        <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Cách thanh toán</h4>
            <p class="mb-5">
            1. Hệ thống sẽ gửi tin nhắn/email xác nhận việc đặt vé thành công<br>
            2. Vui lòng có mặt tại điểm đón 30 phút trước giờ khởi hành. Xuất trình tin nhắn/email xác nhận đặt vé thành công và thanh toán vé cho nhân viên phòng vé/tài xế khi lên xe.
            </p>`;
        $('.show-infomation1').html('');

        $('.show-infomation2').html(showInformation);

        $('.offline-ticket').removeClass('hidden').show();
        $('.vnpay-ticket').addClass('hidden');

    })

    $('#option1').click(function () {
        showInformation = `
        <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Cách thanh toán</h4>
        <p class="mb-5">
        1. Điều hướng sang thanh toán bằng giao diện VNPAY<br>
        2. Nhập STK, Thông tin đăng nhập<br>
        3. Nhập số tiền thanh toán & mã giảm giá (nếu có), xác thực giao dịch để đặt vé
        </p>
        `;

        $('.show-infomation2').html('');
        $('.show-infomation1').html(showInformation);

        $('.vnpay-ticket').removeClass('hidden').show();
        $('.offline-ticket').addClass('hidden');

    })

    $('.finish-ticket-offline').click(function () {
        let url = $(this).data("action");

        let data = $(this).data("session");

        let payment_method = 'thanh toán tại nhà xe';
        data[0]['status'] = 1;
        data[0]['payment_method'] = payment_method;

        let res = data[0];
            $.ajax({
                url: url,
                method: "POST",
                dataType: "JSON",
                data: res,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: "Thông báo",
                            text: "Đặt vé thành công.",
                            icon: "success"
                        });
                        window.location.href = '/end-ticket-payment';
                    }
                }
            })
    })

    $('.finish-ticket-vnpay').click(function () {
        let url = $(this).data("action");

        let data = $(this).data("session");

        let payment_method = 'vnpay';
        data[0]['status'] = 2;
        data[0]['payment_method'] = payment_method;
        let res = data[0];
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: res,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "success",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        })
    })
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("hidden");
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("hidden");
    }

    $(document).on("click", ".exit", function () {
        hidePopup();
    })
    const departureTab = document.getElementById('departure');
    const arrivalTab = document.getElementById('arrival');
    const thirdTab = document.getElementById('third');
    const secondNextButton = document.getElementById('second-next');
    const departureChange = document.getElementById('departure-change');
    const ArrivalChange = document.getElementById('arrival-change');
    secondNextButton.addEventListener('click', function () {
        showPopup();
        departureTab.classList.add('hidden');
        arrivalTab.classList.add('hidden');
        thirdTab.classList.remove('hidden');
    });

    departureChange.addEventListener('click', function () {
        showPopup();
        departureTab.classList.remove('hidden');
        arrivalTab.classList.add('hidden');
        thirdTab.classList.add('hidden');
    })

    ArrivalChange.addEventListener('click', function () {
        showPopup();
        departureTab.classList.add('hidden');
        arrivalTab.classList.remove('hidden');
        thirdTab.classList.add('hidden');
    })

    $(document).on('click', '#User-info', function () {
        const name = $('input[name="name"]').val();
        const phone = $('input[name="phone"]').val();
        const email = $('input[name="email"]').val();
        const error = [];
        if (name === '') {
            error.push('Tên Không được để trống. !');
        }
        if (phone === '') {
            error.push('Số điện thoại không được để trống.');
        }

        if (email === '') {
            error.push('Email không được để trống.');
        }
        const url = $(this).data("action");
        if (error.length === 0) {
            $.ajax({
                url: url,
                method: "POST",
                dataType: "JSON",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    $('.nameChange').html(response.name);
                    $('.phoneChange').html(response.phone);
                    $('.emailChange').html(response.email);

                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "success",
                        showConfirmButton: false,
                        timer: 1500,
                    });

                    hidePopup();

                }
            })
        } else {
            swal("Lỗi", "Vui lòng điền đủ thông tin !", "error");
        }
    })
})
