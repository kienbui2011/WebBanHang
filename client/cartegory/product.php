<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết sản phẩm</title>
    <!-- Đặt các phần tử CSS và các phần tử khác ở đây -->
</head>

<body>
    <?php
    // Thực hiện kết nối đến cơ sở dữ liệu
    $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
    if (!$con) {
        die('Lỗi kết nối: ' . mysqli_connect_error());
    }

    // Kiểm tra xem có tham số ID được truyền vào không
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];

        // Thực hiện truy vấn SQL để lấy thông tin sản phẩm dựa trên product_id
        $sql = "SELECT * FROM `tbl_product` WHERE product_id = $product_id";
        $result = mysqli_query($con, $sql);



        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Hiển thị thông tin chi tiết của sản phẩm
          
            echo '<img src="/NTKQ/admin/uploadss/' . $row['product_img'] . '" alt="' . $row['product_name'] . '">';
            echo '<h1>' . $row['product_name'] . '</h1>';
            echo '<p>' . $row['product_description'] . '</p>';
            echo '<p>Giá cũ: ' . $row['product_price'] . 'đ</p>';
            echo '<p>Giá mới: ' . $row['product_price_new'] . 'đ</p>';
        } else {
            echo 'Không tìm thấy sản phẩm.';
        }
    } else {
        echo 'Thiếu thông tin sản phẩm.';
    }

    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($con);
    ?>
</body>

</html>