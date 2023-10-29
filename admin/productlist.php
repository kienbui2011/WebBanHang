<?php

include "header.php";
include "slider.php";
include "class/product_class.php";

?>
<?php
$product = new product;

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $show_product = $product->search_product($search);
} else {
    $show_product = $product->show_product();
}
?>


<style>
    .search-form form input:first-child {
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

    .search-form button {
        color: rgb(63, 63, 63);
        height: 30px;
        width: 100px;
        margin-top: 10px;
        cursor: pointer;
        background-color: #FFDFDF;
        transform: all 0, 3 ease;
        border: 1px solid gray;
    }

    .admin-content-right-cartegory-list>button {
        color: white;
        height: 30px;
        width: 100px;
        margin-top: 10px;
        cursor: pointer;
        background-color: coral;
        transform: all 0, 3 ease;
        border: 1px solid rgb(253, 76, 12);
    }

    .admin-content-right-cartegory-list>button a {
        color: white;
    }

    .search-form {
        display: flex;
    }

    .search-form button {
        color: white;
        height: 30px;
        width: 100px;
        background-color: coral;
        border: 1px solid rgb(253, 76, 12);
        margin-left: 55%;
        margin-top: 20px;
    }

    .search-form button:hover {
        background-color: rgb(253, 76, 12);
    }
    .search-form button a {
        color: white;
    }
   
</style>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách sản phẩm</h1>

        <div class="search-form">
            <form method="POST" action="">
                <input type="text" name="search">
                <input type="submit" name="Search" value="Tìm kiếm" />
            </form>
            <button><a href="productadd.php">Thêm</a></button>
        </div>

        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tên Sản Phẩm</b></th>
                <th><b>Danh mục</b></th>
                <th><b>Loại Sản Phẩm</b></th>
                <th><b>Ảnh</b></th>
                <th><b>Giá bán</b></th>
                <th><b>Giá mới</b></th>
                <th><b>SL</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>
            <?php
            if ($show_product) {
                $i = 0;
                while ($result = $show_product->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
                    $image_path = $result['product_img'];

                    // Check if the image file exists
                    $image_file_path = '/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path;

            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['product_id']; ?></th>
                        <th><?php echo $result['product_name']; ?></th>
                        <th><?php echo $result['cartegory_name']; ?></th>
                        <th><?php echo $result['brand_name']; ?></th>
                        <th><?php $image_path = $result['product_img'];

                            if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                                echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image"  style=" width:30px; height:35px; display: block; margin: 0 auto; padding: 2px;">';
                            } else {
                                echo 'Image file does not exist.';
                            } ?></th>

                        <th><?php echo $result['product_price']; ?></th>
                        <th><?php echo $result['product_price_new']; ?></th>
                        <th><?php echo $result['quantity']; ?></th>
                        <th><a href="productedit.php?product_id=<?php echo $result['product_id']; ?>">Sửa</a>&nbsp; |&nbsp;
                            <a href="productdelete.php?product_id=<?php echo $result['product_id']; ?>">Xoá</a>
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