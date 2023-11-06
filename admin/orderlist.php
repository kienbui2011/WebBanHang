<?php
include "header.php";
include "slider.php";
include "class/order_class.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
$order = new order;
$show_order = $order->show_order();

$isSearch = false; // Biến để kiểm tra đã thực hiện tìm kiếm hay chưa
if (isset($_GET['Search'])) {
    $tukhoa = $_GET['timkiem']; // từ khóa nhập vào ô input
    $sql_timkiem = "SELECT * FROM tbl_order WHERE full_name LIKE '%" . $tukhoa . "%' ";
    $query_timkiem = mysqli_query($conn, $sql_timkiem);
    $isSearch = true; // Đã thực hiện tìm kiếm
} else {
    $tukhoa = '';
    $sql_danhsachbandau = "SELECT * FROM tbl_order";
    $query_danhsachbandau = mysqli_query($conn, $sql_danhsachbandau);
}
?>



<style>
    .admin-content-right-cartegory-list form input:first-child {
        height: 30px;
        width: 250px;
        margin-top: 20px;
        border: 1px solid gray;

    }

    .admin-content-right-cartegory-list form input:last-child {
        height: 30px;
        width: 100px;
        margin-top: 20px;
        border: 1px solid gray;
        background-color: #FFDFDF;
        color: rgb(63, 63, 63);
    }

    .admin-content-right-cartegory-list button {
        color: white;
        height: 30px;
        width: 100px;
        margin-top: 10px;
        cursor: pointer;
        background-color: coral;
        transform: all 0, 3 ease;
        border: 1px solid rgb(253, 76, 12);
    }

    .admin-content-right-cartegory-list button a {
        color: white;
    }

    .additional {
        display: flex;
    }

    .additional button {
        color: white;
        height: 30px;
        width: 100px;
        background-color: coral;
        border: 1px solid rgb(253, 76, 12);
        margin-left: 55%;
        margin-top: 20px;
    }

    .additional button:hover {
        background-color: rgb(253, 76, 12);

    }
</style>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách khách hàng</h1>

        <div class="additional">
            <form action="orderlist.php" method="GET" name="search">
                <input type="text" name="timkiem" />
                <input type="submit" name="Search" value="Tìm kiếm" />
            </form>
        </div>
        <?php if ($isSearch) : ?>
            <button><a href="orderlist.php">Thoát</a></button>
        <?php endif; ?>


        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tên khách hàng</b></th>
                <th><b>Điện thoại</b></th>
                <th><b>Đia chỉ</b></th>
                <th><b>Ghi chú</b></th>
                <th><b>Tổng tiền</b></th>
                <th><b>Ngày tạo</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>

            <?php
            if ($isSearch) {
                $i = 0;
                while ($result = mysqli_fetch_assoc($query_timkiem)) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['order_user_id']; ?></th>
                        <th><?php echo $result['full_name']; ?></th>
                        <th><?php echo $result['phone']; ?></th>
                        <th><?php echo $result['add_ress']; ?></th>
                        <th><?php echo $result['note']; ?></th>
                        <th><?php echo number_format($result['total'], 0, '.', '.'); ?>đ</th>

                        <th><?php echo $result['time_added']; ?></th>
                        <th>
                            <a href="oder_productlist.php?order_user_id=<?php echo $result['order_user_id']; ?>">Chi Tiết</a>&nbsp; |&nbsp;
                            <a href="orderdelete.php?order_user_id=<?php echo $result['order_user_id']; ?>">Xoá</a>
                        </th>
                    </tr>
                <?php
                }
            } else {
                $i = 0;
                while ($result = mysqli_fetch_assoc($query_danhsachbandau)) {
                    $i++;
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
                ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['order_user_id']; ?></th>
                        <th><?php echo $result['full_name']; ?></th>
                        <th><?php echo $result['phone']; ?></th>
                        <th><?php echo $result['add_ress']; ?></th>
                        <th><?php echo $result['note']; ?></th>
                        <th><?php echo number_format($result['total'], 0, '.', '.'); ?>đ</th>

                        <th><?php echo $result['time_added']; ?></th>
                        <th>
                            <a href="oder_productlist.php?order_user_id=<?php echo $result['order_user_id']; ?>">Chi Tiết</a>&nbsp; |&nbsp;
                            <a href="orderdelete.php?order_user_id=<?php echo $result['order_user_id']; ?>">Xoá</a>
                        </th>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>


</section>
</body>

</html>