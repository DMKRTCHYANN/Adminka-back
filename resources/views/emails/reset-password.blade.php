<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .black-box {
            box-sizing: border-box;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .email-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            text-align: center;
        }
        .title {
            font-size: 22px;
            color: black;
            margin-top: 10px;
        }
        .content {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .token {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
            background-color: black;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .footer {
            font-size: 14px;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="black-box">
    <div class="email-container">
        <div class="title">Password Reset</div>
        <div class="content">
            <p>Hello!</p>
            <p>You have requested to reset your account password. To continue, use the following code:</p>
            <p class="token">{{ $token }}</p>
            <p>Enter this code in the form on the website to complete the password reset.</p>
        </div>
        <div class="footer">
            <p>If you did not request a password reset, please ignore this email.</p>
        </div>
    </div>
</div>
</body>
</html>
