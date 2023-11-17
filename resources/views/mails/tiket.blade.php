<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
</head>
<body style="font-family: Arial, sans-serif;">

<div>
    <p>Xin chào {{ $data->username }},</p>
    <p>Chúng tôi xin gửi Quý khách hàng hóa đơn điện tử.</p>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Điểm đón</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Điểm trả</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Số lượng vé</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Hình thức thanh toán</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->departure }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->arrival }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->quantity }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->payment_method }}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" style="border: 1px solid #ddd; padding: 10px;">Tổng Cộng:</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{number_format($data->total_price, 0, '.', '.')}} VND</td>
        </tr>
        </tfoot>
    </table>

    <p style="margin-top: 20px;">Cảm ơn bạn đã mua hàng!</p>

    <p>Trân trọng,<br><br>
        <img style="height:40px;" src="https://i.imgur.com/ntDje2g.png" alt="logo">
    </p>

</div>

</body>
</html>