$(document).ready(function () {
    Echo.private(`private-user.${infoUser.id}`)
        .listen('NewNotification', (e) => {
            console.log('Thông báo mới cho người dùng ' + infoUser.id + ': ' + e.message);
            // Hiển thị thông báo cho người dùng cụ thể
        });
});
