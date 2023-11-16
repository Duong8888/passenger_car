<!DOCTYPE html>
<html>
<head>
    <style>
        /* Basic styling for the email */
        body {
            font-family: Arial, sans-serif;
        }

        .info {
         display: flex;
         flex-direction: column;
         margin-top: 20px;
      }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            background-color: #f8f8f8;
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
        h3 {
            color: #333;
        }

        /* Style the flex container */
        .flex-container {
            display: flex;
            flex-direction: column;
        }

        /* Style the data display */
        .data {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h3>CAR FINDER PRO</h3>
    <div class="flex-container">
        <div class="data">
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
    </div>
</div>

</body>
</html>

