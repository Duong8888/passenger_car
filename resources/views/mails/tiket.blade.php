<!DOCTYPE html>
<html>

<head>
   <title>Car Finder Pro</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f2f2f2;
         padding: 20px;
      }

      h3 {
         color: #333333;
      }

      .container {
         display: flex;
         flex-direction: column;
         align-items: center;
         background-color: #ffffff;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .info {
         display: flex;
         flex-direction: column;
         margin-top: 20px;
      }

      .info-item {
         margin-bottom: 10px;
      }

      .info-label {
         font-weight: bold;
      }

      .footer {
         margin-top: 20px;
         text-align: center;
         color: #999999;
      }
   </style>
</head>

<body>

   <div class="container">
      <h3>Thông báo đơn đặt vé xe:</h3>

      <div class="info">
         <div class="info-item">
            <span class="info-label">Người đặt:</span> {{$data->username}}
         </div>
         <div class="info-item">
            <span class="info-label">Điểm đón:</span> {{$data->departure}}
         </div>
         <div class="info-item">
            <span class="info-label">Điểm trả:</span> {{$data->arrival}}
         </div>
         <div class="info-item">
            <span class="info-label">Số lượng vé:</span> {{$data->quantity}}
         </div>
         <div class="info-item">
            <span class="info-label">Tổng tiền:</span> {{$data->total_price}} vnđ
         </div>
         <div class="info-item">
            <span class="info-label">Hình thức thanh toán:</span> {{$data->payment_method}}
         </div>
      </div>

      <strong class="footer">Thanks & Regards.</strong>
   </div>

</body>

</html>
