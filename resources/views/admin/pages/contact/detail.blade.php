@extends('admin.layouts.master')
@section('title', 'Chi tiết đăng kí nhà xe')
@section('content')
    <div class="container mx-auto mt-8">
        <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                class="send-email btn btn-primary"> Trở về</button>
        <div class=" p-8 rounded shadow-md">

            <div class="container mx-auto mt-8" style="background: #fff; padding: 10px;">
                <div class=" p-8 rounded shadow-md">
                    <h2 class="text-2xl font-semibold mb-4" style="    font-size: 50px;
    font-style: unset;
text-align: center;" >Hợp đồng đăng kí nhà xe</h2>

                    <!-- Thông tin người thuê xe -->
                    <div class="mb-6" style="text-align: center;">
                        <h3 class="text-lg font-semibold mb-2">Thông tin người đăng kí</h3>
                        <p><strong>Họ và Tên:</strong> <?= $user->user_name ?></p>
                        <p><strong>Địa chỉ:</strong> <?= $user->province ?></p>
                        <p><strong>Email:</strong> <?= $user->email ?></p>
                        <p><strong>Số chứng minh nhân dân:</strong> <?= $user->number_card ?></p>
                        <p><strong>Mã số thuế:</strong> <?= $user->rental_code ?></p>
                        <p><strong>Loại Xe:</strong> <?= $user->passengerCar_name ?></p>
                        <div class="img">
                            <label for="">Hình ảnh giấy tờ xác minh</label><br>
                            <div>
                                <?php if(isset($user->images)): ?>
                                <div>
                                    <?php foreach (json_decode($user->images) as $key => $value):?>
                                    <img style="border: 2px solid #1b9dec; padding: 5px;" src="<?= $value->image ?>"
                                        width="150px">
                                    <?php endforeach;?>
                                </div>
                                <?php endif;?>
                            </div>

                        </div>
                        <!-- Thêm các thông tin khác cần thiết -->
                    </div>

                </div>
                @if ($user->status == 'Đã xử lý')
                    <span style="color: green; " class="success">Đơn đăng kí đã được phê duyệt!</span><br>
                @endif
                <button <?= $user->status == 'Đang xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                    class="send-email btn btn-primary">Xác nhận đơn đăng kí</button>

                <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                        class="send-email btn btn-primary">Đơn đăng kí thành công</button>
                <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                        class="send-email btn btn-primary">Hủy đơn đăng kí</button>
            </div>
            <style>
                .blockreloading {
                    display: none !important;
                }
                .reloading {
                    display: block !important;
                }
            </style>
            <script type="text/javascript">
                $('.send-email').on('click', function() {
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
                            $('#preloader').addClass("reloading");
                            $('#preloader #status').addClass("reloading");
                            $.ajax({
                                type: 'post',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: '{{ URL::to('admin/contact/sendmail') }}',
                                data: {
                                    _token : $('meta[name="csrf-token"]').attr('content'),
                                    id: $value
                                },
                                success: function(data) {
                                    $('#preloader').removeClass("reloading");
                                    $('#preloader').removeClass("reloading");
                                    $('#preloader #status').addClass("blockreloading");
                                    $('#preloader #status').addClass("blockreloading");
                                    Swal.fire({
                                        title: "Thông báo",
                                        text: "Xác nhận thành công.",
                                        icon: "success"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "/admin/contact/index"
                                        }
                                    });
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
