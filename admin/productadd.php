<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>

<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST , $_FILES);
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
    $insert_product = $product->insert_product();
}
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm Sản Phẩm</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="product row">
                <div class="product_row1">
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
                </div>
                <div class="product_row3">
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm" class="red-placeholder">
                    <input name="product_price_new" required type="text" placeholder="Giảm khuyến mãi" class="red-placeholder">
                    <input name="quantity" required type="text" placeholder="Số lượng" class="red-placeholder">

                </div>
            </div>

            <label class="product_label">Giới thiệu sản phẩm</label>
            <textarea required name="product_desc" id="editor1" cols="30" rows="5"></textarea>
            <br>
            <label class="product_label">Chi tiết sản phẩm</label>
            <textarea required name="product_details" id="editor2" cols="30" rows="5"></textarea>
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
                        <input required multiple type="file" name="product_img" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail1" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh sản phẩm</label><br />
                    </div>

                    <div class="row">
                        <input required multiple type="file" name="product_img_desc1" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail2" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh mô tả 1</label><br />
                    </div>
                </div>
                <div class="product_row2">
                    <div class="row">
                        <input required multiple type="file" name="product_img_desc2" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail3" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh mô tả 2</label><br />
                    </div>
                    <div class="row">
                        <input required multiple type="file" name="product_img_desc3" class="red-placeholder">
                        <img class="thumbnail" id="product_img_thumbnail4" src="" alt="Thumbnail">
                        <label for="avatar">Ảnh mô tả 3</label><br />
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <button type="submit">Thêm</button>
            <br> <br> <br> <br>
        </form>
    </div>
</div>
</section>
</body>
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
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>

</html>