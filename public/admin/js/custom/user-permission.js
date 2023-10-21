$(document).ready(function () {
    $('#role').change(function () {
        var selectedRole = $(this).val();
        var ajaxUrl = $('#ajax-url').data('url');

        $.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: {
                _token: '{{ csrf_token() }}',
                selectedRole: selectedRole
            },
        });
    });
});
