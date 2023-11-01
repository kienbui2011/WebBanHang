<?php
include "header.php";
include "slider.php";
include "class/user_class.php";
?>

<!-- sửa -->
<?php
$user = new user;

$user_id = $_GET['id_user_acccount'];
$get_user = $user->get_user($user_id);
if ($get_user) {
    $resultA = $get_user->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedData = array(
        'fullname' => $_POST['fullname'],
        'user_name' => $_POST['user_name'],
        'pass_word' => $_POST['pass_word'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'add_ress' => $_POST['add_ress'],
    );

    $update_user = $user->update_user($user_id, $updatedData);

    if ($update_user) {
        // User update was successful, you can redirect or display a success message here.
    } else {
        // User update failed, handle errors or display an error message.
    }
    
}

?>
<?php
// $user = new user;
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // var_dump($_POST );
//     // echo '<pre>';
//     // echo print_r($_POST);
//     // echo '</pre>';
//     $insert_user = $user->insert_user();
// }
?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Sửa Nhân Viên</h1>
        <form action="" method="POST">
            <input name="fullname" value="<?php echo $resultA['fullname']; ?>" required type="text" placeholder="Nhập họ tên" class="red-placeholder">
            <input name="user_name" value="<?php echo $resultA['user_name']; ?>" required type="text" placeholder="Nhập tài khoản" class="red-placeholder">
            <input name="pass_word" value="<?php echo $resultA['pass_word']; ?>" required type="password" placeholder="Nhập mật khẩu" class="red-placeholder">
            <input name="email" value="<?php echo $resultA['email']; ?>" required type="text" placeholder="Nhập email" class="red-placeholder">
            <input name="phone" value="<?php echo $resultA['phone']; ?>" required type="text" placeholder="Nhập số điện thoại" class="red-placeholder">
            <input name="add_ress" value="<?php echo $resultA['add_ress']; ?>" required type="text" placeholder="Nhập địa chỉ" class="red-placeholder">
            <br>
            <button type="submit">Sửa</button>
        </form>
    </div>
</div>
</section>
</body>

</html>