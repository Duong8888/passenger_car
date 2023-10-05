$(document).ready(function () {
    const channelName = `private-user.${infoUser.id}`;
    const notification = $('.main-notification');
    const countNotifications = $('.count-notification');
    const countNotificationsBtn = $('.count-btn');
    console.log(urlNotification);
    Echo.private(channelName)
        .listen('NewNotification', (e) => {
            loadNotification();
        })
        .subscribed((channel) => {
            console.log(infoUser.name);
        });

    // load notification
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function loadNotification(){
        $.ajax({
            url: urlNotification,
            method: "POST",
            data: {
                id:infoUser.id,
            },
            success:function (data) {
                console.log(data)
                notification.html('');
                if(data.count === 0){
                    countNotificationsBtn.html('');
                    notification.append(`<div class="text-center">Không có thông báo.</div>`);
                }else {
                    countNotifications.html(`Bạn có ${data.count} thông báo chưa đọc`);
                    countNotificationsBtn.html(data.count);
                    $.each(data.notification,function (index, item){
                        let createdAtDate = new Date(item.created_at);
                        let formattedDate = createdAtDate.getDate() + '/' + (+createdAtDate.getMonth() +1) +'/' + createdAtDate.getFullYear();

                        notification.append(`
                        <a href="#">
                            <div class="flex p-4 hover:bg-gray-50/30">
                                <div class="flex-grow">
                                    <h6 class="mb-1 text-sm text-gray-700">${item.user.name}</h6>
                                     <p class="mb-1 text-sm text-gray-700">${item.content}</p>
                                    <div class="text-gray-600 text-13">
                                        <p class="mb-0"><i
                                                class="mdi mdi-clock-outline"></i>
                                            <span>${formattedDate}</span></p>
                                    </div>
                                </div>
                                ${item.is_read ?'':'<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" style="fill: rgba(59, 130, 246, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2z"></path></svg>'}
                            </div>
                        </a>
                        `);
                    });
                }
            },
            error: function(error){
                console.log(error)
            }
        });
    }
    loadNotification();

});
