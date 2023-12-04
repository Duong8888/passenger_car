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
            <h2 class="text-2xl mb-4">Hợp Đồng Thuê Xe</h2>

            <!-- Thông tin người thuê xe -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông Tin Người Thuê Xe</h3>
                <p><strong>Họ và Tên:</strong>  {{$fullName}}</p>
                <p><strong>Địa chỉ:</strong> 123 Main Street, City</p>
                <p><strong>Email:</strong>  {{$email}}</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Thông tin về xe thuê -->
            <div class="mb-6">
                <h3 class="text-lg mb-2">Thông Tin Về Xe Thuê</h3>
                <p><strong>Loại Xe:</strong> Sedan</p>
                <p><strong>Biển Số Xe:</strong> ABC123</p>
                <p><strong>Ngày Bắt Đầu Thuê:</strong> 01/01/2023</p>
                <p><strong>Ngày Kết Thúc Thuê:</strong> 10/01/2023</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Chi tiết hợp đồng -->
            <div>
                <h3 class="text-lg mb-2">Chi Tiết Hợp Đồng</h3>
                <p><strong>Tổng Chi Phí:</strong> $500</p>
                <p><strong>Phương Thức Thanh Toán:</strong> Thẻ Tín Dụng</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>
        </div>
    </div>

</body>
</html>
