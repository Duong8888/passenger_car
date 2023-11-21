$(document).ready(function () {
   
    $(document).on('click', '#cancel-ticket', function(){
        let url = $(this).data("action");
        console.log("hello");
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