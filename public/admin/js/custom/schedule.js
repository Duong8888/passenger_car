$(document).ready(function () {
    // <div className="spinner-border text-primary m-2" role="status"></div>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var urlUpdate = $('#action').data('action');
    $(document).on('click', '.btn-update', function () {
        $('#text-'+$(this).data('item')+'').html('<div style="text-align: center"><div class="spinner-border spinner-border-sm text-primary" role="status"></div></div>');
        console.log($(this).html());
        console.log(urlUpdate);
        $.ajax({
            url: urlUpdate,
            method: 'POST',
            data: {
                id: $(this).data('item'),
                status: $(this).data('value'),
            },
            success: function(data){
                var statusText = '';
                if (data.value == 0) {
                    statusText = '<span class="badge bg-purple">Chưa khởi hành</span>';
                } else if (data.value == 1) {
                    statusText = '<span class="badge bg-primary">Đang khởi hành</span>';
                } else if (data.value == 2) {
                    statusText = '<span class="badge bg-success">Đã hoàn thành chuyến</span>';
                }
                $('#text-'+data.id+'').html(statusText);
                console.log(statusText);
            },
            error: function(error){
                console.log(error)
            }
        })
    })


});
