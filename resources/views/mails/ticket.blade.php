<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>

    <style>
        .car {
            display: inline-block;
            border: 1px solid #cccc;
            border-radius: 4px;
        }

        .row {
            display: flex;
        }

        .item {
            border: 1px solid #cccc;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .icon {
            width: 20px;
            height: 20px;
            margin: 15px;
            background-color: #cccc;
            border-radius: 50%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .icon::after{
            content: "";
            position: absolute;
            width: 80%;
            height: 80%;
            background-color: #ffff;
            border-radius: 50%;
        }

        .chair {
            width: 30px;
            height: 30px;
            margin: 10px;
            background-color: #cccc;
        }
        .active {
            background-color: green;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif;">

<div>
    <p>Xin chào {{ $data->username }},</p>
    <p>Chúng tôi xin gửi Quý khách hàng hóa đơn điện tử.</p>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Mã vé</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Điểm đón</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Điểm trả</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Số lượng vé</th>
            <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Hình thức thanh toán</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->id }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->departure }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->arrival }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->quantity }}</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $data->payment_method }}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" style="border: 1px solid #ddd; padding: 10px;">Tổng Cộng:</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{number_format($data->total_price, 0, '.',
                        '.')}} VND</td>
        </tr>
        </tfoot>
    </table>

    <p>Vị trí ngồi của bạn</p>
    <div class="car">
        @foreach($car as $value)
            <div class="row">
                @php
                    $arrayData = json_decode($value->seat, true);
                    $arraySeat = json_decode($data->seat_id, true);
                @endphp
                @foreach($arrayData as $value2)
                    @php
                        $active = '';
                    @endphp
                    @foreach($arraySeat as $value3)
                        @if($value2 == $value3)
                            @php
                                $active = 'active';
                            @endphp
                        @endif
                    @endforeach
                    <div class="item"><span class="{{$active}} @if($value2 == 'icon') icon @elseif($value2 != '') chair @endif"></span></div>
                @endforeach
            </div>
        @endforeach
    </div>

    <p style="margin-top: 20px;">Cảm ơn bạn đã mua hàng!</p>

    <p>Trân trọng,<br><br>
        <img style="height:40px;" src="https://i.imgur.com/ntDje2g.png" alt="logo">
    </p>

</div>

</body>

</html>
