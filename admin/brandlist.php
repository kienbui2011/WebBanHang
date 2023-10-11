<?php

include "header.php";
include "slider.php";
include "class/brand_class.php";

?>


<?php
$brand = new brand;
$show_brand = $brand->show_brand();

?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh loại sản phẩm</h1>
        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>ID loại</b></th>
                <th><b>Danh mục</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>
            <?php
            if ($show_brand) {
                $i = 0;
                while ($result = $show_brand->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['brand_id']; ?></th>
                        <th><?php echo $result['cartegory_name']; ?></th>
                        <th><?php echo $result['brand_name']; ?></th>
                        <th><a href="brandedit.php?brand_id=<?php echo $result['brand_id']; ?>">Sửa</a>&nbsp; |&nbsp;
                            <a href="branddelete.php?brand_id=<?php echo $result['brand_id']; ?>">Xoá</a>
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