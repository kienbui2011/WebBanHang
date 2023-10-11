<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>

<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
// var_dump($_POST , $_FILES);
// echo '<pre>';
// echo print_r($_FILES);
// echo '</pre>';
    $insert_product = $product->insert_product();
}
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm" class="red-placeholder">

            <select name="cartegory_id" id=" ">
                <option>--Chọn danh mục--</option>
                <?php
                $show_cartegory = $product->show_cartegory();
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch_assoc()) {
                ?>

                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>

            <select name="brand_id" id="">
                <option>--Chọn loại sản phẩm--</option>
                <?php
                $show_brand = $product->show_brand();
                if ($show_brand) {
                    while ($result = $show_brand->fetch_assoc()) {
                ?>

                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>

            <input name="product_price" required type="text" placeholder="Giá sản phẩm" class="red-placeholder">

            <input name="product_price_new" required type="text" placeholder="Giảm khuyến mãi" class="red-placeholder">

            <textarea required name="product_desc" id="" cols="30" rows="5" placeholder="Giới thiệu sản phẩm" class="red-placeholder"></textarea>
            <textarea required name="product_details" id="" cols="30" rows="5" placeholder="Chi tiết sản phẩm" class="red-placeholder"></textarea>

            <div class="row">
                <input required multiple type="file" name="product_img" class="red-placeholder">
                <label for="avatar">Ảnh sản phẩm</label><br />
            </div>

            <div class="row">
                <input required multiple type="file" name="product_img_desc" class="red-placeholder">
                <label for="avatar">Ảnh mô tả</label><br />
            </div>
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>