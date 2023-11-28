<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hợp Đồng Thuê Xe</title>
    <!-- Link to the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <div class="bg-white p-8 rounded shadow-md">
        	<div style="width: 250px;padding-bottom: 20px;margin-left: 170px;"><img src="https://i.imgur.com/chCW0o6.png"/></div>
            <h2 style="text-align: center; padding-top: 10px; font-weight: 700;" class="text-2xl mb-4">Hợp Đồng Thuê Xe</h2>

            <!-- Thông tin người thuê xe -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông người đăng kí nhà xe</h3>
                <p><strong>Họ và Tên:</strong>  {{$fullName}}</p>
                <p><strong>Địa chỉ:</strong> 123 Main Street, City</p>
                <p><strong>Email:</strong>  {{$email}}</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Thông tin về xe thuê -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông tin về xe</h3>
                <p><strong>Loại Xe:</strong> Sedan</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Chi tiết hợp đồng -->
            <div>
                <h3 class="text-lg mb-2">Chi Tiết Hợp Đồng</h3>
                <p><strong>Tổng Chi Phí:</strong> $500</p>
                <p><strong>Phương Thức Thanh Toán:</strong> Thẻ Tín Dụng</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>
            <div style="
    text-align: right;
    padding: 20px;
">
            <label>Người xác nhận đơn đăng kí</label>
            <p>Duong Dev</p>
            </div>
            <footer class="footer " style="    background-color: rgb(46 53 56 / var(--tw-bg-opacity)) !important;">
    <!-- start footer -->
    <section class="py-12 bg-zinc-800">
        <div class="container mx-auto" style="
    padding: 0 20px;
">
            <div class="grid grid-cols-12 lg:gap-10">
                <div class="col-span-12 xl:col-span-12">
                    <div class="mr-12">
                        <h4 class="text-white mb-6 text-[23px]"><img src="https://i.imgur.com/chCW0o6.png" alt="" style="width='40px"></h4>
                        <p class="text-white/50">
                            Hãy tìm xe và bắt đầu hành trình của bạn ngay hôm nay, để biết mọi cuộc hành trình đều đặc biệt!
                        </p>
                        <p class="mt-3 text-white">Theo dõi chúng tôi tại</p>
                        <div class="mt-5">
                            <ul class="flex gap-3" style="margin-left: 10px">
                                <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook fa-beat" style="color: #1d62d7;"></i>
                                    </a>
                                </li>
                                <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                    <a href="#">
                                        <i class="fa-brands fa-instagram fa-beat" style="color: #cc0063;"></i>
                                    </a>
                                </li>
                                <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                    <a href="#">
                                        <i class="fa-brands fa-discord fa-beat" style="color: #614df9;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->
    <!-- strat footer alt -->
    
    <!-- end footer alt -->
</footer>
        </div>
        
    </div>

</body>
</html>
