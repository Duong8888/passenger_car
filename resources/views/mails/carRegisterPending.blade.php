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
        <p>Xin chào {{$fullName}},</p>
        <p>Yêu cầu của bạn đang được xử lý. Cảm bạn đã tin tưởng CAR FINDER PRO trở thành Đối tác tin cậy nhất của chúng tôi</p>
        <p>Chúng tôi gửi bản hợp đồng vui lòng xem lại các thông tin xác minh.</p>
        <p>Chúng tôi sẽ liên hệ với bạn ngay lập tức qua số điện thoại để xác minh laị thông tin</p>

    </div>
</div>
</body>
</html>
