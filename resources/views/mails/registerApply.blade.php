<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hợp Đồng Thuê Xe</title>
    <!-- Link to the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: DejaVu Sans;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="bg-white p-8 rounded shadow-md">
            <div style="width: 250px;padding-bottom: 20px;margin-left: 170px;"><img
                    src="https://i.imgur.com/chCW0o6.png" /></div>
            <h2 style="text-align: center; padding-top: 10px; font-weight: 700;" class="text-2xl mb-4">Hợp Đồng Thuê Xe
            </h2>

            <!-- Thông tin người thuê xe -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông người đăng kí nhà xe</h3>
                <p><strong>Họ và Tên:</strong> {{ $name }}</p>
                <p><strong>Địa chỉ:</strong> {{$province}}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                <p><strong>Số chứng minh nhân dân:</strong> {{ $number_card }}</p>
                <p><strong>Mã số thuế:</strong> {{ $rental_code }}</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Thông tin về xe thuê -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông tin nhà xe</h3>
                <p><strong>Loại Xe:</strong>Xe khách</p>
                <p><strong>Tên nhà xe:</strong> {{$passengerCar_name}}</p>
                <p><strong>Loại Xe:</strong> Sedan</p>
                <p><strong>Ngày đăng kí:</strong> {{$created_at}}</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <div style="text-align: right;padding: 20px;">
                <label>Người xác nhận đơn đăng kí</label>
                <p><strong>Car Finder Pro</strong></p>
            </div>
        </div>

    </div>

</body>

</html>
