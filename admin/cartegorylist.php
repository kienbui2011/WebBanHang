<?php

include "header.php";
include "slider.php";
include "class/cartegory_class.php";

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
            if ($show_cartegory) {$i=0;
                while ($result = $show_cartegory->fetch_assoc()) {$i++ ;
            ?>
                    <tr>
                        <th> <?php echo $i?></th>
                        <th><?php echo $result[ 'cartegory_id']?></th>
                        <th><?php echo $result[ 'cartegory_name']?></th>
                        <th><a href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id']?> ">Sửa</a> | 
                        <a href="cartegorydelete.php?cartegory_id= <?php echo $result['cartegory_id']?>">Xoá</a></th>
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