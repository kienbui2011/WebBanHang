<?php
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
</section>
</body>

</html>
<?php
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
//     header("Location: login.php");
//     exit;
// }
// // Nội dung của trang admin

