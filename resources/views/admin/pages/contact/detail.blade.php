@extends('admin.layouts.master')
@section('title', 'Chi tiết đăng kí nhà xe')
@section('content')

    <body class="bg-gray-100">
        <div class="container mx-auto p-8">
            <a href="{{ url('/admin/contact/index') }}">Quay lại</a>
            <div class="head-container">
                <div class="mt-2 mb-2">
                    <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit" class="success-contact btn btn-primary">Xác thực đơn đăng kí</button>
                    <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                        class="send-email btn btn-secondary">Gửi hợp đồng</button>
                    <button <?= $user->status == 'Đã xử lý' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit"
                        class="send-apply btn btn-success">Đơn đăng kí thành công</button>
                    <button <?= $user->status == 'Đã hủy' ? 'disabled' : '' ?> id="<?= $user->id ?>" type="submit" class="cancel-contact btn btn-danger">Hủy đơn đăng
                        kí</button>

                    <h4>Trạng thái: <?= $user->status; ?></h4>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow-md">
                <div>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center">
                        <span style=" font-size:12pt; font-weight:bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center">
                        <span style=" font-size:12pt; font-weight:bold; text-decoration:underline">Độc lập – Tự do – Hạnh
                            phúc</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center">
                        <span style=" font-size:12pt">&nbsp;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center">
                        <span style=" font-size:12pt; font-weight:bold">HỢP ĐỒNG ĐĂNG KÍ NHÀ XE</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center">
                        <span style="background-color:#ffffff;  font-size:12pt">Số: 12 – 44./HĐTX</span>
                    </p>
                </div>
                <div class="">
                    <div class="mb-4">
                        <h2 class="text-2xl font-bold mb-2">Thông tin CAR FINDER PRO</h2>
                        <p>Tên Công Ty: CAR FINDER PRO</p>
                        <p>Địa Chỉ: Văn phòng công ty</p>
                        <p>Số Điện Thoại: 0938288334</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-2xl font-bold mb-2">Thông tin khách hàng đăng kí</h2>
                        <p><strong>Họ và Tên: </strong> <?= $user->user_name ?></p>
                        <p><strong>Địa Chỉ: </strong> <?= $user->province ?></p>
                        <p><strong>Số Điện Thoại: </strong> <?= $user->phone ?></p>
                        <p><strong>Email:</strong> <?= $user->email ?></p>
                        <p><strong>Số chứng minh nhân dân:</strong> <?= $user->number_card ?></p>
                        <p><strong>Mã số thuế:</strong> <?= $user->rental_code ?></p>
                        <p><strong>Hình ảnh chứng thực:</strong> </p>
                        @if($user->images)
                            @foreach(json_decode($user->images) as $image)
                                <img src="{{ $image->image }}" alt="Chứng thực">
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="mb-4">
                    <h2 class="text-2xl font-bold mb-2">Chi tiết thông tin Xe</h2>
                    <p><strong>Loại Xe:</strong> <?= $user->passengerCar_name ?></p>
                </div>

                <div class="mb-4">
                    <h2 class="text-2xl font-bold mb-2">Điều Khoản</h2>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt; font-weight:bold">Điều 6: Nghĩa vụ và quyền của Bên A</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">1. Bên A có các nghĩa vụ sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">a) Chuyển giao tài sản cho thuê đúng thỏa thuận ghi trong Hợp
                            đồng;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">b) Bảo đảm giá trị sử dụng của tài sản cho thuê;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">c) Bảo đảm quyền sử dụng tài sản cho Bên B;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">2. Bên A có quyền sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">a) Nhận đủ tiền thuê tài sản theo phương thức đã thỏa thuận;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">b) Nhận lại tài sản thuê khi hết hạn Hợp đồng;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">c) Đơn phương đình chỉ thực hiện Hợp đồng và yêu cầu bồi thường thiệt
                            hại nếu Bên B có một trong các hành vi sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Không trả tiền thuê trong ……. tháng liên tiếp;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Sử dụng tài sản thuê không đúng công dụng; mục đích của tài
                            sản;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Làm tài sản thuê mất mát, hư hỏng;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Sửa chữa, đổi hoặc cho người khác thuê lại mà không có sự đồng ý của
                            Bên A;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt; font-weight:bold">Điều 7: Nghĩa vụ và quyền của Bên B</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">1. Bên B có các nghĩa vụ sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">a) Bảo quản tài sản thuê như tài sản của chính mình, không được thay
                            đổi tình trạng tài sản, kông được cho thuê lại tài sản nếu không có sự đồng ý của Bên A;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">b) Sử dụng tài sản thuê đúng công dụn</span><span
                            style=" font-size:12pt">g, mục đích của tài sản;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">c) Trả đủ tiền thuê tài sản theo phương thức đã thỏa thuận;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">d) Trả lại tài sản thuê đúng thời hạn và phương thức đã thỏa
                            thuận;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">e) Chịu toàn bộ chi phí liên quan đến chiếc xe trong quá trình thuê.
                            Trong quá trình thuê xe mà Bên B gây ra tai nạn, hỏng hóc xe thì Bên B phải có trách nhiệm thông
                            báo ngay cho Bên A và chịu trách nhiệm sửa chữa, phục hồi nguyên trạng xe cho Bên A.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">2. Bên B có các quyền sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">a) Nhận tài sản thuê theo đúng thỏa thuận;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">b) Được sử dụng tài sản thuê theo đúng công dụng, mục đích của tài
                            sản;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">c) Đơn phương đình chỉ thực hiện Hợp đồng thuê tài sản và yêu cầu bồi
                            thường thiệt hại nếu:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Bên A chậm giao tài sản theo thỏa thuận gây thiệt hại cho Bên
                            B;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Bên A giao tài sản thuê không đúng đắc điểm, tình trạng như mô tả
                            tại Điều 1 Hợp đồng;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt; font-weight:bold">Điều 8: Cam đoan của các bên</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">Bên A và Bên B chịu trách nhiệm trước pháp luật về những lời cam đoan
                            sau đây:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">1. Bên A cam đoan:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Những thông tin về nhân thân, về chiếc xe ô tô nêu trên này là hoàn
                            toàn đúng sự thật;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Không bỏ sót thành viên nào cùng có quyền sở hữu xe ô tô nêu trên để
                            ký Hợp đồng này; Nếu có bất kỳ một khiếu kiện nào của thành viên cùng có quyền sở hữu xe ô tô
                            trên bị bỏ sót thì Bên A ký tên/điểm chỉ trong Hợp đồng này xin hoàn toàn chịu trách nhiệm trước
                            pháp luật, kể cả việc phải mang tài sản chung, riêng của mình để đảm bảo cho trách nhiệm
                            đó;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Xe ô tô nêu trên hiện tại thuộc quyền sở hữu, sử dụng hợp pháp của
                            Bên A, không có tranh chấp, không bị ràng buộc d</span><span
                            style=" font-size:12pt">­</span><span style=" font-size:12pt">ưới bất cứ hình thức nào bởi các
                            giao dịch đang tồn tại như: Cầm cố, thế chấp, bảo lãnh, mua bán, trao đổi, tặng cho, cho thuê,
                            cho mượn, góp vốn vào doanh nghiệp hay bất kỳ một quyết định nào của cơ quan nhà n</span><span
                            style=" font-size:12pt">­</span><span style=" font-size:12pt">ước có thẩm quyền nhằm hạn chế
                            quyền định đoạt của Bên A;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Việc giao kết Hợp đồng này là hoàn toàn tự nguyện, dứt khoát, không
                            bị lừa dối hoặc ép buộc;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Thực hiện đúng và đầy đủ tất cả các thỏa thuận đã ghi trong bản Hợp
                            đồng này;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">2. Bên B cam đoan:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">a. Những thông tin pháp nhân, nhân thân đã ghi trong Hợp đồng này là
                            đúng sự thật;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">b. Đã xem xét kỹ, biết rõ về tài sản thuê;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">c. Việc giao kết Hợp đồng này hoàn toàn tự nguyện, không bị lừa dối
                            hoặc ép buộc;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">d. Thực hiện đúng và đầy đủ tất cả các thoả thuận đã ghi trong Hợp
                            đồng này;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">3. Hai bên cam đoan:</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Các bên cam kết mọi giấy tờ về nhân thân và tài sản đều là giấy tờ
                            thật, cấp đúng thẩm quyền, còn nguyên giá trị pháp lý và không bị tẩy xóa, sửa chữa. Nếu sai các
                            bên hoàn toàn chịu trách nhiệm trước pháp luật kể cả việc mang tài sản chung, riêng để đảm bảo
                            cho lời cam đoan trên.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Nếu có thắc mắc, khiếu nại, khiếu kiện dẫn đến Hợp đồng vô hiệu (kể
                            cả vô hiệu một phần) thì các bên tự chịu trách nhiệm trước pháp luật.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">- Tại thời điểm ký kết, các bên hoàn toàn minh mẫn, sáng suốt, có đầy
                            đủ năng lực hành vi dân sự, cam đoan đã biết rõ về nhân thân và thông tin về những người có tên
                            trong Hợp đồng này.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt; font-weight:bold">Điều 9: Điều khoản cuối cùng</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">1. Nếu vì một lý do không thể khắc phục được mà một trong hai bên
                            muốn chấm dứt hợp đồng trước thời hạn, thì phải báo cho bên kia biết trước ……. tháng.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">2. ……. (…….) tháng trước khi hợp đồng này hết hiệu lực, hai bên phải
                            cùng trao đổi việc thanh lý hợp đồng; Nếu hai bên muốn tiếp tục thuê xe ô tô thì sẽ cùng nhau ký
                            tiếp hợp đồng mới hoặc ký phụ lục gia hạn hợp đồng.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">3. Hợp đồng này có hiệu lực kể từ thời điểm các bên ký kết. Mọi sửa
                            đổi bổ sung phải được cả hai bên lập thành văn bản;</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">4. Trong quá trình thực hiện Hợp đồng mà phát sinh tranh chấp, các
                            bên cùng nhau thương lượng giải quyết trên nguyên tắc tôn trọng quyền lợi của nhau; trong trường
                            hợp không giải quyết được, thì một trong hai bên có quyền khởi kiện để yêu cầu toà án nhân dân
                            có thẩm quyền giải quyết theo quy định của pháp luật.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">5. Hai bên đều đã tự đọc lại toàn bộ nội dung của Hợp đồng này, đã
                            hiểu và đồng ý với toàn bộ nội dung ghi trong Hợp đồng, không có điều gì vướng mắc. Bên A, bên B
                            đã tự nguyện ký tên/đóng dấu/điểm chỉ vào Hợp đồng này.</span>
                    </p>
                    <p
                        style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify">
                        <span style=" font-size:12pt">Hợp đồng được lập thành ……(……) bản có giá trị pháp lý như nhau, mỗi
                            bên giữ …. bản làm bằng chứng.</span>
                    </p>
                </div>

                <div class="mt-8">
                    <p class="mb-4">Bằng cách ký dưới đây, cả hai bên đã đồng ý với các điều khoản và điều kiện của hợp
                        đồng này.</p>
                    <div class="flex items-center"
                        style="
                    display: flex;
                    justify-content: space-around;
                    text-align: center;
                ">
                        <div class="w-1/2">
                            <p style="font-weight: bold;font-size: 20px; border-bottom: 1px solid;"
                                class="border-b-2 border-gray-500">Công ty</p>
                            <p class="mt-4">CAR FINDER PRO</p>
                        </div>
                        <div class="w-1/2">
                            <p style="font-weight: bold;font-size: 20px; border-bottom: 1px solid;"
                                class="border-b-2 border-gray-500">Khách hàng</p>
                            <p class="mt-4"><?= $user->user_name ?></p>
                        </div>
                    </div>
                </div>
            </div>
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
                        url = '{{ URL::to('admin/contact/sendmail') }}';
                        data = {
                            id: $value,
                            text: "Xác nhận thành công"
                        };
                        sendAjax(url, data);
                    }
                });

            })

            $('.cancel-contact').on('click', function() {
                $value = $(this).attr("id");
                Swal.fire({
                    title: "Vui lòng điền lý do hủy đơn đăng kí!",
                    input: "textarea",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý",
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        url = '{{ URL::to('admin/contact/cancel-request') }}';
                        data = {
                            id: $value,
                            content: result.value,
                            text: 'Gửi email hủy đơn đăng kí thành công!'
                        }
                        sendAjax(url, data)
                    }
                });
            });
            $('.success-contact').on('click', function() {
                $value = $(this).attr("id");
                Swal.fire({
                    title: "Vui lòng điền kết quả xác thực đơn đăng kí xe!",
                    input: "textarea",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý",
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        url = '{{ URL::to('admin/contact/success-request') }}';
                        data = {
                            id: $value,
                            content: result.value,
                            text: 'Gửi email xác thực đơn đăng kí xe thành công!'
                        }
                        sendAjax(url, data)
                    }
                });
            });
            $('.send-apply').on('click', function() {
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
                        url = '{{ URL::to('admin/contact/update') }}';
                        data = {
                            id: $value,
                            text: 'Xác nhận thành công!'
                        }
                        sendAjax(url, data)
                    }
                });

            })

            function sendAjax(pathUrl, dataSend) {
                $('#preloader').addClass("reloading");
                $('#preloader #status').addClass("reloading");
                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: pathUrl,
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        value: dataSend
                    },
                    success: function(data) {
                        $('#preloader').removeClass("reloading");
                        $('#preloader').removeClass("reloading");
                        $('#preloader #status').addClass("blockreloading");
                        $('#preloader #status').addClass("blockreloading");
                        Swal.fire({
                            title: "Thông báo",
                            text: dataSend['text'],
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/admin/contact/index"
                            }
                        });
                    }
                });
            }
        </script>
    </body>

@endsection
