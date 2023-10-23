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
</style>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách sản phẩm</h1>

        <div class="search-form">
            <form method="POST" action="">
                <input type="text" name="search">
                <button type="submit" >Tìm kiếm</button>
            </form>
        </div>

       
        <button id="exitButton"><a href="productlist.php">Thoát</a></button>




        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tên Sản Phẩm</b></th>
                <th><b>Danh mục</b></th>
                <th><b>Loại Sản Phẩm</b></th>
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
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['product_id']; ?></th>
                        <th><?php echo $result['product_name']; ?></th>
                        <th><?php echo $result['cartegory_name']; ?></th>
                        <th><?php echo $result['brand_name']; ?></th>
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