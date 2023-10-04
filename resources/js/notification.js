$(document).ready(function () {
    const channelName = `private-user.11`;
    Echo.private(channelName)
        .listen('NewNotification', (e) => {
            console.log(e.message);
        })
        .subscribed((channel) => {
            console.log(infoUser.name); // Log ra "Hello" khi tham gia kênh riêng thành công
        });



    Echo.channel(`user-online.${infoUser.id}`)
        .listen('UserOnline', (e) => {
            // Xử lý sự kiện broadcast tại đây và cập nhật trạng thái trực tuyến của người dùng.
            console.log(`${e}`);
        });
});
