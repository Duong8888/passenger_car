@extends('admin.layouts.master')
@section('title', 'Chi tiết đăng kí nhà xe')
@section('content')
    <div class="container mx-auto mt-8">
        <div class=" p-8 rounded shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Hợp Đồng Thuê Xe</h2>

            <!-- Thông tin người thuê xe -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-2">Thông Tin Người Thuê Xe</h3>
                <p><strong>Họ và Tên:</strong> John Doe</p>
                <p><strong>Địa chỉ:</strong> 123 Main Street, City</p>
                <p><strong>Email:</strong> john@example.com</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Thông tin về xe thuê -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-2">Thông Tin Về Xe Thuê</h3>
                <p><strong>Loại Xe:</strong> Sedan</p>
                <p><strong>Biển Số Xe:</strong> ABC123</p>
                <p><strong>Ngày Bắt Đầu Thuê:</strong> 01/01/2023</p>
                <p><strong>Ngày Kết Thúc Thuê:</strong> 10/01/2023</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>

            <!-- Chi tiết hợp đồng -->
            <div>
                <h3 class="text-lg font-semibold mb-2">Chi Tiết Hợp Đồng</h3>
                <p><strong>Tổng Chi Phí:</strong> $500</p>
                <p><strong>Phương Thức Thanh Toán:</strong> Thẻ Tín Dụng</p>
                <!-- Thêm các thông tin khác cần thiết -->
            </div>
<div class="container mx-auto mt-8" style="background: #fff; padding: 10px;">
    <div class=" p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Hợp Đồng đăng kí nhà xe</h2>

        <!-- Thông tin người thuê xe -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Thông tin người đăng kí</h3>
            <p><strong>Họ và Tên:</strong> <?= $user->user_name;?></p>
            <p><strong>Địa chỉ:</strong> <?= $user->province;?></p>
            <p><strong>Email:</strong> <?= $user->email;?></p>
            <p><strong>Số chứng minh nhân dân:</strong> <?= $user->card_number;?></p>
            <p><strong>Mã số thuế:</strong> <?= $user->rental_code;?></p>
            <div class="img">
                <label for="">Hình ảnh giấy tờ xác minh</label><br>
                <div>
                    <?php if(isset($user->images)): ?>
                    <div>
                        <?php foreach (json_decode($user->images) as $key => $value):?>
                        <img style="border: 1px solid gray; padding: 5px;" src="<?= $value->image; ?>" width="150px">
                    <?php endforeach;?>
                    </div>
                <?php endif;?>
                </div>
                
            </div>
            <!-- Thêm các thông tin khác cần thiết -->
        </div>

        <!-- Thông tin về xe thuê -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Thông Tin về xe</h3>
            <p><strong>Loại Xe:</strong> <?= $user->passengerCar_name;?></p>
        </div>
        
    </div>
    <button  id="<?= $user->id;?>" type="submit" class="send-email btn btn-primary">Xác nhận đơn đăng kí</button>
</div>

<script type="text/javascript">
    $('.send-email').on('click',function(){
        $value = $(this).attr("id");
        Swal.fire({
            title: "Thông báo",
            text: "Bạn có chắc chắn muốn xác nhận!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Đúng!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        url: '{{ URL::to('admin/contact/sendmail') }}',
                        data: {
                            "id": $value
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Thông báo",
                                text: "Xác nhận thành công.",
                                icon: "success"
                            });
                            window.location.href = "/admin/contact/index"
                        }
                    });
                }
            });

        })
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

@endsection
