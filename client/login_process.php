
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = $_POST['email'];
    $password = $_POST['pass_word'];

    $queryClient = "SELECT * FROM tbl_client_account WHERE email = '$email' AND pass_word = '$password'";

    $resultClient = mysqli_query($conn, $queryClient);

    if ($resultClient && mysqli_num_rows($resultClient) == 1) {
        $_SESSION['user_role'] = 'client';
        header('Location: index.php');
        exit;
    } else {
        $error_message = "Người dùng với email và mật khẩu này không tồn tại.";
    }
}


?>
