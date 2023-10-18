<?php

include "header.php";
include "slider.php";
include "class/admin_class.php";

?>
<?php
$admin = new admin;
$show_admin = $admin->show_admin();
?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách nhân viên</h1>
        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tài khoản</b></th>
                <th><b>Số điện thoại</b></th>
                <th><b>Email</b></th>
                <!-- <th><b>Tuỳ Biến</b></th> -->
            </tr>
            <?php
            if ($show_admin) {
                $i = 0;
                while ($result = $show_admin->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['id_admin_account']; ?></th>
                        <th><?php echo $result['admin_name']; ?></th>
                        <th><?php echo $result['phone']; ?></th>
                        <th><?php echo $result['email']; ?></th>

                        <!-- <th><a href="adminedit.php?id_admin_acccount=<?php echo $result['id_admin_acccount']; ?>">Sửa</a>&nbsp; |&nbsp;
                            <a href="admindelete.php?id_admin_acccount=<?php echo $result['id_admin_acccount']; ?>">Xoá</a>
                        </th> -->
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