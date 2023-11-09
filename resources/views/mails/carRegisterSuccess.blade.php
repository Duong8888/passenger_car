<!DOCTYPE html>
<html>
<head>
    <style>
        /* Basic styling for the email */
        body {
            font-family: Arial, sans-serif;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            background-color: #f8f8f8;
        }

        h3 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        /* Style the main content */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        /* Style the login information */
        .login-info {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }

        /* Style the login details */
        .login-details {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h3>CAR FINDER PRO</h3>
    <div class="content">
        <p>Xin chào {{$data->fullName[0]['fullName']}},</p>
        <p>Yêu cầu của bạn đã được xử lý thành công. Cảm bạn đã tin tưởng CAR FINDER PRO trở thành Đối tác tin cay nhất của chung tôi</p>
        <p>Chúc mừng bạn đã trở thành nhà xe của chúng tôi.</p>
        <p>Bạn hãy đăng nhập vào hệ thống bằng thông tin sau:</p>
        <div class="login-info">
            <p><span class="login-details">Tài khoản:</span> {{$data->email[0]['email']}}</p>
            <p><span class="login-details">Mật khẩu:</span> {{$data->password}}</p>
        </div>
    </div>
</div>
</body>
</html>
