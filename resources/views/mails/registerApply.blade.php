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
<div id=" ">
    <div class="divTNPL" style="width:620px;padding-left:60px;padding-bottom:20px;padding-top: 20px;">
        <div>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt; font-weight:bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt; font-weight:bold; text-decoration:underline">Độc lập – Tự do – Hạnh phúc</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt">&nbsp;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt; font-weight:bold">HỢP ĐỒNG ĐĂNG KÍ NHÀ XE</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style="background-color:#ffffff;  font-size:12pt">Số: 12 – 44./HĐTX</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt">&nbsp;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style="font-size:12pt; font-style:italic">- Căn cứ Bộ Luật Dân sự </span><span style="font-size:12pt; font-style:italic">2015</span><span style="font-size:12pt; font-style:italic">;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style="font-size:12pt; font-style:italic">- Căn cứ Luật thương mại 2005;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style="font-size:12pt; font-style:italic">- Căn cứ vào nhu cầu và khả năng cung ứng của các bên dưới đây.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt; font-style:italic">Hôm nay, ngày {{$day}} tháng {{$month}} năm {{$year}}, tại văn phòng CAR FINDER PRO, chúng tôi gồm:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt; font-weight:bold">BÊN CHO THUÊ (sau đây gọi là Bên A)</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt">Ông: Giám đốc CAR FINDER PRO</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt">CMND/CCCD/Hộ chiếu số: 675675757 do công an cấp ngày 1-1-2020.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Hộ khẩu thường trú tại: Hà Nội</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">BÊN THUÊ (Sau đây gọi tắt là Bên </span><span style=" font-size:12pt; font-weight:bold">B)</span><span style=" font-size:12pt"> </span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Công ti vận tải </span><span style=" font-size:12pt; font-weight: 700;">{{$passengerCar_name}}</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Giấy chứng nhận đăn</span><span style=" font-size:12pt">g ký doanh nghiệp số: {{$rental_code}}
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Địa chỉ trụ sở chính: {{$province}}.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt">Đại diện bởi ông/bà: {{$fullName}}.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt"><span style=" font-size:12pt">CMND/CCCD/Hộ chiếu số: {{$number_card}} do công an cấp ngày 1-1-2022.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Hai bên đã thỏa thuận và thống nhất ký kết Hợp đồng thuê xe ôtô với những điều khoản cụ thể như sau:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 1. Đặc điểm và thỏa thuận thuê xe</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Bằng hợp đồng này, Bên A đồng ý cho Bên B thuê và bên B đồng ý thuê xe ô tô có đặc điểm sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Loại: Xe khách</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Số chỗ ngồi: 45 </span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">+ Không có tranh chấp về quyền sở hữu/sử dụng;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">+ Không bị ràng buộc bởi bất kỳ Hợp đồng thuê xe ô tô nào đang có hiệu lực.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Bên B cam đoan: Bên B được cấp giấy phép lái xe hạng ….. số ………….. có giá trị đến ngày …………………….. (nếu bên B với tư cách cá nhân)</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 2. Thời hạn thuê xe ô tô</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Thời hạn thuê là …… (………..) tháng kể từ ngày Hợp đồng này được ký kết</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 3. Mục đích thuê</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Bên B sử dụng tài sản thuê nêu trên vào mục đích ………………………</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 4: Giá thuê và phương thức thanh toán</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">1. Giá thuê tài sản nêu trên là: ……………….VNĐ/…………. (Bằng chữ: ……….. đồng trên một ………….) trả bằng tiền Việt Nam hiện hành.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">2. Phương thức thanh toán: Thanh toán bằng ………………… và Bên B phải thanh toán cho Bên A số tiền thuê xe ô tô nêu trên vào ngày …………………...</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">3. Việc giao và nhận số tiền nêu trên do hai bên tự thực hiện và chịu trách nhiệm trước pháp luật.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 5: Phương thức giao, trả lại tài sản thuê</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Hết thời hạn thuê nêu trên, Bên B phải giao trả chiếc xe ô tô trên cho Bên A.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 6: Nghĩa vụ và quyền của Bên A</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">1. Bên A có các nghĩa vụ sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">a) Chuyển giao tài sản cho thuê đúng thỏa thuận ghi trong Hợp đồng;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">b) Bảo đảm giá trị sử dụng của tài sản cho thuê;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">c) Bảo đảm quyền sử dụng tài sản cho Bên B;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">2. Bên A có quyền sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">a) Nhận đủ tiền thuê tài sản theo phương thức đã thỏa thuận;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">b) Nhận lại tài sản thuê khi hết hạn Hợp đồng;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">c) Đơn phương đình chỉ thực hiện Hợp đồng và yêu cầu bồi thường thiệt hại nếu Bên B có một trong các hành vi sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Không trả tiền thuê trong ……. tháng liên tiếp;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Sử dụng tài sản thuê không đúng công dụng; mục đích của tài sản;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Làm tài sản thuê mất mát, hư hỏng;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Sửa chữa, đổi hoặc cho người khác thuê lại mà không có sự đồng ý của Bên A;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 7: Nghĩa vụ và quyền của Bên B</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">1. Bên B có các nghĩa vụ sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">a) Bảo quản tài sản thuê như tài sản của chính mình, không được thay đổi tình trạng tài sản, kông được cho thuê lại tài sản nếu không có sự đồng ý của Bên A;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">b) Sử dụng tài sản thuê đúng công dụn</span><span style=" font-size:12pt">g, mục đích của tài sản;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">c) Trả đủ tiền thuê tài sản theo phương thức đã thỏa thuận;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">d) Trả lại tài sản thuê đúng thời hạn và phương thức đã thỏa thuận;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">e) Chịu toàn bộ chi phí liên quan đến chiếc xe trong quá trình thuê. Trong quá trình thuê xe mà Bên B gây ra tai nạn, hỏng hóc xe thì Bên B phải có trách nhiệm thông báo ngay cho Bên A và chịu trách nhiệm sửa chữa, phục hồi nguyên trạng xe cho Bên A.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">2. Bên B có các quyền sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">a) Nhận tài sản thuê theo đúng thỏa thuận;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">b) Được sử dụng tài sản thuê theo đúng công dụng, mục đích của tài sản;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">c) Đơn phương đình chỉ thực hiện Hợp đồng thuê tài sản và yêu cầu bồi thường thiệt hại nếu:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Bên A chậm giao tài sản theo thỏa thuận gây thiệt hại cho Bên B;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Bên A giao tài sản thuê không đúng đắc điểm, tình trạng như mô tả tại Điều 1 Hợp đồng;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 8: Cam đoan của các bên</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Bên A và Bên B chịu trách nhiệm trước pháp luật về những lời cam đoan sau đây:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">1. Bên A cam đoan:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Những thông tin về nhân thân, về chiếc xe ô tô nêu trên này là hoàn toàn đúng sự thật;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Không bỏ sót thành viên nào cùng có quyền sở hữu xe ô tô nêu trên để ký Hợp đồng này; Nếu có bất kỳ một khiếu kiện nào của thành viên cùng có quyền sở hữu xe ô tô trên bị bỏ sót thì Bên A ký tên/điểm chỉ trong Hợp đồng này xin hoàn toàn chịu trách nhiệm trước pháp luật, kể cả việc phải mang tài sản chung, riêng của mình để đảm bảo cho trách nhiệm đó;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Xe ô tô nêu trên hiện tại thuộc quyền sở hữu, sử dụng hợp pháp của Bên A, không có tranh chấp, không bị ràng buộc d</span><span style=" font-size:12pt">­</span><span style=" font-size:12pt">ưới bất cứ hình thức nào bởi các giao dịch đang tồn tại như: Cầm cố, thế chấp, bảo lãnh, mua bán, trao đổi, tặng cho, cho thuê, cho mượn, góp vốn vào doanh nghiệp hay bất kỳ một quyết định nào của cơ quan nhà n</span><span style=" font-size:12pt">­</span><span style=" font-size:12pt">ước có thẩm quyền nhằm hạn chế quyền định đoạt của Bên A;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Việc giao kết Hợp đồng này là hoàn toàn tự nguyện, dứt khoát, không bị lừa dối hoặc ép buộc;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Thực hiện đúng và đầy đủ tất cả các thỏa thuận đã ghi trong bản Hợp đồng này;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">2. Bên B cam đoan:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">a. Những thông tin pháp nhân, nhân thân đã ghi trong Hợp đồng này là đúng sự thật;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">b. Đã xem xét kỹ, biết rõ về tài sản thuê;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">c. Việc giao kết Hợp đồng này hoàn toàn tự nguyện, không bị lừa dối hoặc ép buộc;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">d. Thực hiện đúng và đầy đủ tất cả các thoả thuận đã ghi trong Hợp đồng này;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">3. Hai bên cam đoan:</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Các bên cam kết mọi giấy tờ về nhân thân và tài sản đều là giấy tờ thật, cấp đúng thẩm quyền, còn nguyên giá trị pháp lý và không bị tẩy xóa, sửa chữa. Nếu sai các bên hoàn toàn chịu trách nhiệm trước pháp luật kể cả việc mang tài sản chung, riêng để đảm bảo cho lời cam đoan trên.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Nếu có thắc mắc, khiếu nại, khiếu kiện dẫn đến Hợp đồng vô hiệu (kể cả vô hiệu một phần) thì các bên tự chịu trách nhiệm trước pháp luật.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">- Tại thời điểm ký kết, các bên hoàn toàn minh mẫn, sáng suốt, có đầy đủ năng lực hành vi dân sự, cam đoan đã biết rõ về nhân thân và thông tin về những người có tên trong Hợp đồng này.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt; font-weight:bold">Điều 9: Điều khoản cuối cùng</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">1. Nếu vì một lý do không thể khắc phục được mà một trong hai bên muốn chấm dứt hợp đồng trước thời hạn, thì phải báo cho bên kia biết trước ……. tháng.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">2. ……. (…….) tháng trước khi hợp đồng này hết hiệu lực, hai bên phải cùng trao đổi việc thanh lý hợp đồng; Nếu hai bên muốn tiếp tục thuê xe ô tô thì sẽ cùng nhau ký tiếp hợp đồng mới hoặc ký phụ lục gia hạn hợp đồng.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">3. Hợp đồng này có hiệu lực kể từ thời điểm các bên ký kết. Mọi sửa đổi bổ sung phải được cả hai bên lập thành văn bản;</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">4. Trong quá trình thực hiện Hợp đồng mà phát sinh tranh chấp, các bên cùng nhau thương lượng giải quyết trên nguyên tắc tôn trọng quyền lợi của nhau; trong trường hợp không giải quyết được, thì một trong hai bên có quyền khởi kiện để yêu cầu toà án nhân dân có thẩm quyền giải quyết theo quy định của pháp luật.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">5. Hai bên đều đã tự đọc lại toàn bộ nội dung của Hợp đồng này, đã hiểu và đồng ý với toàn bộ nội dung ghi trong Hợp đồng, không có điều gì vướng mắc. Bên A, bên B đã tự nguyện ký tên/đóng dấu/điểm chỉ vào Hợp đồng này.</span></p>
            <p style="background-color:#ffffff; font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:justify"><span style=" font-size:12pt">Hợp đồng được lập thành ……(……) bản có giá trị pháp lý như nhau, mỗi bên giữ …. bản làm bằng chứng.</span></p>
            <div style="text-align:center">
                <table cellspacing="0" cellpadding="0" style="border-collapse:collapse; margin:0 auto; width:508.5pt">
                    <tbody>
                    <tr>
                        <td style="background-color:#ffffff; padding:3pt; vertical-align:middle">
                            <p style="font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt; font-weight:bold">ĐẠI DIỆN BÊN A</span></p>
                        </td>
                        <td style="background-color:#ffffff; padding:3pt; vertical-align:middle">
                            <p style="font-size:12pt; line-height:150%; margin:6pt 0pt 0pt; text-align:center"><span style=" font-size:12pt; font-weight:bold">ĐẠI DIỆN BÊN B</span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="divDatatip">
    </div>
    <div class="dark-tooltip dark medium south addannotate" style="display: block; opacity: 0.9;
            left: 188px; top: 125px; display: none">
        <div>
            Annotate
        </div>
        <div class="tip">
        </div>
    </div>
    <div class="tempcontent" style="display: none"></div>
</div>
</body>
</html>
