
<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {

            width: 300px;
            padding: 20px;
            border-radius: 5px;
        }

        .login-container label{
            color: #8e8d8d;
            font-size: 13px;
           
        }

        .form-group {
            margin: 10px 0;
        }

        input[type="email"],
        input[type="password"]
         {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="checkbox"] {
            border: 1px solid #ccc;
            border-radius: 3px;

        }

        input[type="submit"] {
            background-color: #f8854b;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            width: 108%;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #273A7A;
        }

        .Layer_1 img {
            margin-right: 100px;
            margin-bottom: 30px;
            width: 70px;
            height: 70px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            /* Đổ bóng */
            float: right;
            /* Đẩy lề bên phải */
            border-radius: 70px;

        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="Layer_1"> <img src="../client/img/IMG_6220.JPG" alt=""> </div>
        <form action="login_class.php" method="POST">
            <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password"  name="pass_word" placeholder="Mật khẩu" required>
            </div>
            <input type="checkbox">
            <label class="custom-control-label" for="customCheck">Remember Me</label>
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
</body>

</html>
<?php
// session_start();
// if (isset($_SESSION['user_id'])) {
//     // Nếu đã đăng nhập, họ đã không được phép quay lại trang đăng nhập.
//     header("Location: admin.php");
//     exit;
// }
// // Nội dung của trang đăng nhập



