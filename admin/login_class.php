<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Web_demo";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("sql không kết nối: " . mysqli_connect_error());
}

?>


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

        .login-container label {
            color: #8e8d8d;
            font-size: 13px;

        }

        .form-group {
            margin: 10px 0;
        }

        input[type="email"],
        input[type="password"] {
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
<?php
require_once('config.php'); // Include the database connection

 
// if (isset($_SESSION['user_role'])) {
//     // Thực hiện hành động tương ứng
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass_word'];


    $queryAdmin = "SELECT * FROM tbl_admin_account WHERE email = '$email' AND pass_word = '$password'";
    $queryUser = "SELECT * FROM tbl_user_acccount WHERE email = '$email' AND pass_word = '$password'";

    $resultAdmin = mysqli_query($conn, $queryAdmin);
    $resultUser = mysqli_query($conn, $queryUser);

    // session_start();
   
    

    if ($resultAdmin && mysqli_num_rows($resultAdmin) == 1) {

        $_SESSION['user_role'] = 'admin';
        header('Location: cartegoryadd.php');
        exit;
    } elseif ($resultUser && mysqli_num_rows($resultUser) == 1) {

        $_SESSION['user_role'] = 'user';
        header('Location: ../user/cartegoryadd.php');
        exit;
    } else {
        $error_message = "Người dùng với email và mật khẩu này không tồn tại.";
    }
}


?>

<body>
    <div class="login-container">
        <div class="Layer_1"> <img src="../client/img/IMG_6220.JPG" alt=""> </div>


        <form action="login_class.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="pass_word" placeholder="Mật khẩu" required>
            </div>

            <?php if (isset($error_message)) { ?>
                <div style="color: red; font-size: 14px;"><?php echo $error_message; ?></div>
            <?php } ?>


            <input type="checkbox">
            <label class="custom-control-label" for="customCheck">Remember Me</label>
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
</body>

</html>