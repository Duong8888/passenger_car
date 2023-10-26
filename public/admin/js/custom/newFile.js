$(document).ready(function () {
    $('input[type="checkbox"]').change(function () {
        var roleId = $(this).data('role-id');
        var permissionName = $(this).data('permission-name');
        var checked = $(this).is(':checked');

        $.ajax({
            type: 'POST',
            url: '{{ route(', rolePermission, ') }}': ,
            data: {
                role_id: roleId,
                permission_name: permissionName,
                checked: checked,
                _token: '{{ csrf_token() }}'
            },
        });
    });
});
