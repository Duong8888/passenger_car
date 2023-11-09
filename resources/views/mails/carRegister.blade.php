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
            {{$data}}
        </div>
    </div>
</div>
</body>
</html>

