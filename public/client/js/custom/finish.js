$(document).ready(function () {
    function formatCurrency(amount) {
        return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    }
    var totalPrice = $('input[name="totalPrice"]').val();
    
    var show = '';
    let showTotalPrice = formatCurrency(totalPrice);
    show = `<p>${showTotalPrice}</p>`;
    $('.showTotalPrice').html(show);

    $(document).on('click', '.cancel-ticket', function(){
        let url = $(this).data("action");
        let id_ticket = $(this).data("id");
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: {
               id : id_ticket
            },
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
                window.location.href = '/';
            }
        })
    })
})