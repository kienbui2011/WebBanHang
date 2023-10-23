<?php

include "header.php";
include "slider.php";
include "class/cartegory_class.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();

?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách danh mục</h1>
        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Danh mục</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>
            <?php
            if ($show_cartegory) {
                $i = 0;
                while ($result = $show_cartegory->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['cartegory_id']; ?></th>
                        <th><?php echo $result['cartegory_name']; ?></th>
                        <th><a href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">Sửa</a>&nbsp; |&nbsp;
                            <a href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">Xoá</a>
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