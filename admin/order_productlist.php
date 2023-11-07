<?php
include "header.php";
include "slider.php";
include "class/orderlist_class.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

$orderlist = new orderlist;
// Check if the cart_code is provided in the URL
if (isset($_GET['cart_code'])) {
    $cartCode = $_GET['cart_code'];
    $orderDetails = $orderlist->show_orderlist($cartCode);
} else {
    $orderDetails = array(); // Empty array by default
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
        <h1>Chi tiết đơn hàng</h1>
        <table>
            <tr class="bold">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tên sản phẩm</b></th>
                <th><b>Size</b></th>
                <th><b>Số Lượng</b></th>
                <th><b>Giá</b></th>
                <th><b>Cart_code</b></th>
            </tr>
            <?php
            if ($orderDetails) {
                $i = 0;
                while ($result = $orderDetails->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['product_id']; ?></th>
                        <th><?php echo $result['product_name']; ?></th>
                        <th><?php echo $result['si_ze']; ?></th>
                        <th><?php echo $result['order_quantity']; ?></th>
                        <th><?php echo number_format($result['price'], 0, '.', '.'); ?>đ</th>
                        <th><?php echo $result['cart_code']; ?></th>
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