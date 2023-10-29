<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
$product = new product;
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Retrieve product information
    $get_product = $product->get_product($product_id);

    if ($get_product) {
        $product_data = $get_product->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $cartegory_id = $_POST['cartegory_id']; // Corrected variable name
    $brand_id = $_POST['brand_id'];
    $product_price = $_POST['product_price'];
    $product_price_new = $_POST['product_price_new'];
    $quantity = $_POST['quantity'];
    $product_desc = $_POST['product_desc'];
    $product_details = $_POST['product_details'];
    $product_img = $_FILES['product_img']['name'];
    $product_img_desc1 = $_FILES['product_img_desc1']['name'];
    $product_img_desc2 = $_FILES['product_img_desc2']['name'];
    $product_img_desc3 = $_FILES['product_img_desc3']['name'];

    // Perform product update
    $update_product = $product->update_product($product_id, $cartegory_id, $brand_id, $product_name, $product_price, $product_price_new, $quantity, $product_desc, $product_details, $product_img, $product_img_desc1, $product_img_desc2, $product_img_desc3);
}
?>

<?php
// $product = new product;
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     var_dump($_POST , $_FILES);
//     echo '<pre>';
//     echo print_r($_FILES);
//     echo '</pre>';
//     $insert_product = $product->insert_product();
// }
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Chỉnh Sửa Sản Phẩm</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Input fields for product information -->
            <input name="product_name" value="<?php echo $product_data['product_name']; ?>" required type="text" placeholder="Nhập tên sản phẩm" class="red-placeholder">
            <select name="cartegory_id">
                <option>--Chọn danh mục--</option>
                <?php
                $categories = $product->show_cartegory();
                while ($cartegory = $categories->fetch_assoc()) {
                    $selected = ($cartegory['cartegory_id'] == $product_data['cartegory_id']) ? 'selected' : '';
                    echo "<option value='{$cartegory['cartegory_id']}' $selected>{$cartegory['cartegory_name']}</option>";
                }
                ?>
            </select>
            <select name="brand_id">
                <option>--Chọn loại sản phẩm--</option>
                <?php
                $brands = $product->show_brand();
                while ($brand = $brands->fetch_assoc()) {
                    $selected = ($brand['brand_id'] == $product_data['brand_id']) ? 'selected' : '';
                    echo "<option value='{$brand['brand_id']}' $selected>{$brand['brand_name']}</option>";
                }
                ?>
            </select>
            <input name="product_price" value="<?php echo $product_data['product_price']; ?>" required type="text" placeholder="Giá sản phẩm" class="red-placeholder">
            <input name="product_price_new" value="<?php echo $product_data['product_price_new']; ?>" required type="text" placeholder="Giảm khuyến mãi" class="red-placeholder">
            <input name="quantity" value="<?php echo $product_data['quantity']; ?>" required type="text" placeholder="Số lượng" class="red-placeholder">


            <label class="product_label">Giới thiệu sản phẩm</label>
            <textarea name="product_desc" required id="editor1" cols="30" rows="5"><?php echo $product_data['product_desc']; ?></textarea>
            <br>
            <label class="product_label">Chi tiết sản phẩm</label>
            <textarea required name="product_details" id="editor2" cols="30" rows="5"><?php echo $product_data['product_details']; ?></textarea>
            <br>

            <div class="product row">
                <style>
                    .thumbnail {
                        width: 40px;
                        height: 40px;
                        margin-top: 13px;
                        display: none;
                        margin-left: 10px;
                    }
                </style>
                <div class="product_row1">
                    <div class="row">
                        <input value="<?php echo $product_data['product_img']; ?>" multiple type="file" name="product_img" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail1" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh sản phẩm</label>
                        <br />
                    </div>

                    <div class="row">
                        <input value="<?php echo $product_data['product_img_desc1']; ?>" multiple type="file" name="product_img_desc1" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail2" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh mô tả 1</label>

                        <br />
                    </div>
                </div>
                <div class="product_row2">
                    <div class="row">
                        <input value="<?php echo $product_data['product_img_desc2']; ?>" multiple type="file" name="product_img_desc2" class="red-placeholder">
                        <label for="avatar">Ảnh mô tả 2</label>
                        <img class="thumbnail" id="product_img_thumbnail3" src="" alt="Thumbnail">
                        <br />
                    </div>
                    <div class="row">
                        <input value="<?php echo $product_data['product_img_desc3']; ?>" multiple type="file" name="product_img_desc3" class="red-placeholder">
                        <label for="avatar">Ảnh mô tả 3</label>
                        <img class="thumbnail" id="product_img_thumbnail4" src="" alt="Thumbnail">
                        <br />
                    </div>
                </div>
                <script>
                    // Add an event listener to each file input to update the associated thumbnail with the selected file
                    document.querySelector('input[name="product_img"]').addEventListener("change", function() {
                        updateThumbnail(this, document.getElementById("product_img_thumbnail1"));
                    });

                    document.querySelector('input[name="product_img_desc1"]').addEventListener("change", function() {
                        updateThumbnail(this, document.getElementById("product_img_thumbnail2"));
                    });

                    document.querySelector('input[name="product_img_desc2"]').addEventListener("change", function() {
                        updateThumbnail(this, document.getElementById("product_img_thumbnail3"));
                    });

                    document.querySelector('input[name="product_img_desc3"]').addEventListener("change", function() {
                        updateThumbnail(this, document.getElementById("product_img_thumbnail4"));
                    });

                    function updateThumbnail(input, thumbnail) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                thumbnail.src = e.target.result;
                                thumbnail.style.display = "block"; // Show the thumbnail
                            };
                            reader.readAsDataURL(input.files[0]);
                        } else {
                            thumbnail.style.display = "none"; // Hide the thumbnail if no file is selected
                        }
                    }
                </script>

            </div>
            <button type="submit">Sửa</button>
        </form>
    </div>
</div>
</section>
</body>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor instance.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>

</html>