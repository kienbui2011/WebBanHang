<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
// $product = new product;
// $product_id = $_GET['product_id'];
// $get_product = $product->get_product($product_id);
// if ($get_product) {
//     $resultA = $get_product->fetch_assoc();
// }
// if ($get_product) {
//     $resultB = $get_product->fetch_assoc();
// }
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $cartegory_id = $_POST['cartegory_id']; // Corrected to "cartegory_id"
//     $brand_id = $_POST['brand_id']; // Corrected to "cartegory_id"
//     $product_name = $_POST['product_name'];
//     $update_product = $product->update_product($cartegory_id, $brand_id, $product_name,$product_id);
// }
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
        <h1>Sửa Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm" class="red-placeholder">

            <select name="cartegory_id" id=""> <!-- Assuming you have a "cartegory_id" -->
                <option value="#">--Chọn danh mục--</option>
                <?php
                $show_cartegory = $product->show_cartegory(); // Assuming you have a method show_cartegory for fetching categories
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch_assoc()) {
                ?>
                        <option <?php if ($result['cartegory_id'] == $resultA['cartegory_id']) echo "SELECTED" ?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <select name="brand_id" id="">
                <option value="#"> --Chọn loại sản phẩm--</option>
              
                <?php
                $show_brand = $product->show_brand();
                if ($show_brand) {
                    while ($result = $show_brand->fetch_assoc()) {
                ?>
                        <option <?php if ($result['brand_id'] == $resultB['brand_id']) echo "SELECTED" ?> value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
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

            <button type="submit">Sửa</button>
        </form>
    </div>
</div>

</section>
</body>

</html>