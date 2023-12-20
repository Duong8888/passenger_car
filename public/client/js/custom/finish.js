$(document).ready(function () {
    $(document).on("click", "#cancel-ticket", function () {
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

    $(document).on('click', '#cancled', function () {
        let url = $(this).data("action");
        let id_ticket = $(this).data("id");
        var reason = $('input[name=options]:checked').val();
        if ($('input[name=options]:checked').length === 1) {
            $.ajax({
                url: url,
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id_ticket,
                    reason: reason
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
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
        }else{
            swal("Lỗi", "Vui lòng chọn lý do !", "error");
        }

    })
})