$(document).ready(function () {
    $(document).on("click", ".Ticket", function () {
        showPopup();
    })
    $(document).on("click", ".exit", function () {
        hidePopup();
    })
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("hidden");
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("hidden");
    }

    window.onload = function () {
        hidePopup();
    };


    var CountTicket = $(".qty-input").val();
    var totalTicket = '';
    var TicketPrice;
    TicketPrice = $('.price').text();
    $('.increment-btn').click(function () {
        CountTicket++;
        let y;
        y = CountTicket * TicketPrice;
        $(".qty-input").val(CountTicket);
        function formatCurrency(amount) {
            return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        }

        let formattedMoney = formatCurrency(y);
        totalTicket = `
            <div>Ghế: ${CountTicket} </div>
            <div>Tổng cộng: ${formattedMoney}</div>

        `

        $('.show-total').html(totalTicket);

    })

    $('.decrement-btn').click(function () {
        if (CountTicket > 0) {
            CountTicket--;
        }
        let y;
        y = CountTicket * TicketPrice;
        $(".qty-input").val(CountTicket);
        function formatCurrency(amount) {
            return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        }

        var formattedMoney = formatCurrency(y);
        totalTicket = `
            <div>Ghế: ${CountTicket} </div>
            <div>Tổng cộng: ${formattedMoney}</div> 
            
        `

        $('.show-total').html(totalTicket);
    })
    const TIME_TO_UPDATE = 1000;

    $(document).on('click', '.submit', function () {
        var user_id = $('input[name="user_id"]').val();
        var username = $('input[name="name"]').val();
        var phone = '+84' + $('input[name="phone"]').val();
        var email = $('input[name="email"]').val();
        var total_price = TicketPrice * CountTicket;
        var quantity = CountTicket;
        var departure = $('input[name="departure"]:checked').val();
        var arrival = $('input[name="arrival1"]:checked').val();

        let passenger_car_id = $(this).data("id");
        var totalArray = {
            username: username,
            user_id: user_id,
            phone: phone,
            email: email,
            total_price: total_price,
            quantity: quantity,
            passenger_car_id: passenger_car_id,
            departure: departure,
            arrival: arrival
        };
        let url = $(this).data("action");

        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: totalArray,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    window.location.href = '/payment-method';
                }
            }
        }, TIME_TO_UPDATE);
    })
    const firstTab = document.getElementById('first');
    const secondTab = document.getElementById('second');
    const thirdTab = document.getElementById('third');


    const secondBackButton = document.getElementById('second-back');
    const secondNextButton = document.getElementById('second-next');
    const thirdBackButton = document.getElementById('third-back');

    const firstNextButton = document.getElementById('first-next');
    const inputTicket = document.querySelector('input[name="countTicket"]');


    firstNextButton.addEventListener('click', function () {
        const inputValue = inputTicket.value;
        if (inputValue > 0) {
            firstTab.classList.add('hidden');
            secondTab.classList.remove('hidden');
        } else {
            swal("Lỗi", "Vui lòng chọn ít nhất 1 chỗ ngồi", "error");
        }
    });


    secondBackButton.addEventListener('click', function () {
        secondTab.classList.add('hidden');
        firstTab.classList.remove('hidden');
    });


    secondNextButton.addEventListener('click', function () {
        secondTab.classList.add('hidden');
        thirdTab.classList.remove('hidden');
    });


    thirdBackButton.addEventListener('click', function () {
        thirdTab.classList.add('hidden');
        secondTab.classList.remove('hidden');
    });
})





