<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "header.php";
include "slider.php";
include "class/cartegory_class.php";

?>


<?php
$cartegory = new cartegory;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory_add">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
            <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục"></input>
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>


<?php
?>

<?php
// Kiểm tra trạng thái đăng nhập
// if (isset($_SESSION['user_role'])) 
//    {
//     // If the 'user_id' is not set, the user is not logged in, so you can keep the existing code to redirect to the login page.
//     header("Location: login.php");
//     exit;
// }

// Nội dung của trang admin
// Đặt mã PHP của bạn ở đây, chỉ được truy cập nếu đã đăng nhập
?>