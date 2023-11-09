$(document).ready(function () {
    const icon = `<svg class="mr-2 icon-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #5f6273;transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path></svg>`;

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
            <span>Tổng cộng: <span style="color: rgb(0, 96, 196);font-weight: bold;">${formattedMoney}</span></span>
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
            <span>Tổng cộng: <span style="color: rgb(0, 96, 196);font-weight: bold;">${formattedMoney}</span></span>
        `

        $('.show-total').html(totalTicket);
    })
    const TIME_TO_UPDATE = 1000;

    $(document).on('click', '.submit', function () {
        var username = $('input[name="name"]').val();
        var phone = $('input[name="phone"]').val();
        var email = $('input[name="email"]').val();
        var route_departure = $('input[name="route-departure"]').val();
        var route_arrival = $('input[name="route-arrival"]').val();
        var total_price = TicketPrice * CountTicket;
        var quantity = CountTicket;
        var time_departure = $('input[name="departureTimeInput"]').val();
        var time_arrival = $('input[name="arrivalTimeInput"]').val();
        var departure = $('input[name="departure"]:checked').val();
        var arrival = $('input[name="arrival1"]:checked').val();
        var date =  $('input[name="date"]').val();
        const error = [];
        if(username === ''){
            error.push('Tên Không được để trống. !');
        }
        if (phone === '') {
            error.push('Số điện thoại không được để trống.');
        }
          
        if (email === '') {
            error.push('Email không được để trống.');
        }
     
        if(error.length === 0){
             let passenger_car_id = $(this).data("id");
            var totalArray = {
                username: username,
                phone: phone,
                email: email,
                total_price: total_price,
                quantity: quantity,
                passenger_car_id: passenger_car_id,
                departure: departure,
                arrival: arrival,
                time_departure : time_departure,
                time_arrival: time_arrival,
                route_departure: route_departure,
                route_arrival: route_arrival,
                date: date,
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
        }else{
            swal("Lỗi", "Vui lòng điền đủ thông tin !", "error");
        }
       
    })
    const firstTab = document.getElementById('first');
    const secondTab = document.getElementById('second');
    const thirdTab = document.getElementById('third');


    const firstTabBtn = $('.first');
    const secondTabBtn = $('.second');
    const thirdTabBtn = $('.third');


    const secondBackButton = document.getElementById('second-back');
    const secondNextButton = document.getElementById('second-next');
    const thirdBackButton = document.getElementById('third-back');

    const firstNextButton = document.getElementById('first-next');
    const inputTicket = document.querySelector('input[name="countTicket"]');
        firstNextButton.addEventListener('click', function() {
            const inputDate = document.getElementById('date').value;
            const inputValue = inputTicket.value;
        if(inputValue > 0 && inputDate != ''){
            firstTab.classList.add('hidden');
            secondTab.classList.remove('hidden');
            firstTabBtn.before(icon);
            $('.first-li>button').removeClass('active');
            $('.second-li>button').addClass('active');
            $('.firstItem>.icon-item').attr('data-item','first')
        } else{

            swal("Lỗi", "Vui lòng chọn ít nhất 1 chỗ ngồi và chọn ngày đi !", "error");
        }
    });


    secondBackButton.addEventListener('click', function () {
        secondTab.classList.add('hidden');
        firstTab.classList.remove('hidden');
        $('.first-li>button').addClass('active');
        $('.second-li>button').removeClass('active');
        $('.icon-item[data-item="first"]').hide();
    });


    secondNextButton.addEventListener('click', function () {
            secondTab.classList.add('hidden');
            thirdTab.classList.remove('hidden');
            secondTabBtn.before(icon);
            $('.second-li>button').removeClass('active');
            $('.third-li>button').addClass('active');
            $('.secondItem>.icon-item').attr('data-item','second')
        
    });


    thirdBackButton.addEventListener('click', function () {
        thirdTab.classList.add('hidden');
        secondTab.classList.remove('hidden');
        $('.second-li>button').addClass('active');
        $('.third-li>button').removeClass('active');
        $('.icon-item[data-item="second"]').hide();
    });
})





