$(document).ready(function () {
    var showInformation = '';

    $('#option2').click(function () {
        showInformation = `
        <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">How to payment</h4>
            <p class="mb-5">
                1. The system will send a message/email confirming your successful booking<br>
                2. Please be at the pick up location 30 minutes before departure time. Present the message/email confirming successful booking and pay the ticket to the ticket office staff/driver when boarding the bus.
            </p>`;
        $('.show-infomation1').html('');
        $('.show-infomation3').html('');
        $('.show-infomation2').html(showInformation);

        $('.offline-ticket').removeClass('hidden').show();
        $('.vnpay-ticket').addClass('hidden');
        $('.momo-ticket').addClass('hidden');
    })

    $('#option1').click(function () {
        showInformation = `
        <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">How to payment</h4>
        <p class="mb-5">
            1. Log in to the Banking Application or VNPAY Wallet<br>
            2. Scan the VNPAY-QR code to pay<br>
            3. Enter payment amount & discount code (if any), verify transaction to book tickets
        </p>
        `;
        $('.show-infomation3').html('');
        $('.show-infomation2').html('');
        $('.show-infomation1').html(showInformation);

        $('.vnpay-ticket').removeClass('hidden').show();
        $('.offline-ticket').addClass('hidden');
        $('.momo-ticket').addClass('hidden');
    })

    $('#option3').click(function () {
        showInformation = `
        <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">How to payment</h4>
        <p class="mb-5">
            1. You will be redirected to the Momo application <br>
            2. Enter new payment card information or choose to pay via Momo wallet/card linked to Momo wallet<br>
            3. Select "Pay" to proceed with ticket payment
        </p>
        `;
        $('.show-infomation1').html('');
        $('.show-infomation2').html('');
        $('.show-infomation3').html(showInformation);

        $('.momo-ticket').removeClass('hidden').show();
        $('.offline-ticket').addClass('hidden');
        $('.vnpay-ticket').addClass('hidden');
    })

    $('.finish-ticket-offline').click(function () {
        let url = $(this).data("action");

        let data = $(this).data("session");

        let payment_method = 'thanh toán tại nhà xe';
        data[0]['status'] = 0;
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

                if (response.success) {
                    window.location.href = '/home';
                }
            }
        })
    })

    $('.finish-ticket-vnpay').click(function () {
        let url = $(this).data("action");

        let data = $(this).data("session");

        let payment_method = 'vnpay';
        data[0]['status'] = 0;
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


})
