<?php
include "header.php";
include "slider.php";
include "class/user_class.php";
?>

<?php
$user = new user;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST );
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '</pre>';
    $insert_user = $user->insert_user();
}
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm Nhân Viên</h1>
        <form action="" method="POST">
            <input name="fullname" required type="text" placeholder="Nhập họ tên" class="red-placeholder">
            <input name="user_name" required type="text" placeholder="Nhập tài khoản" class="red-placeholder">
            <input name="pass_word" required type="password" placeholder="Nhập mật khẩu" class="red-placeholder">
            <input name="email" required type="text" placeholder="Nhập email" class="red-placeholder">
            <input name="phone" required type="text" placeholder="Nhập số điện thoại" class="red-placeholder">
            <input name="add_ress" required type="text" placeholder="Nhập địa chỉ" class="red-placeholder">
            <br>
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>