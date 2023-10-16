<?php

include "header.php";
include "slider.php";
include "class/user_class.php";

?>
<?php
$user = new user;
$show_user = $user->show_user();

?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh sách nhân viên</h1>
        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Tên nhân viên</b></th>
                <th><b>Tài khoản</b></th>
                <th><b>Số điện thoại</b></th>
                <th><b>Email</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>
            <?php
            if ($show_user) {
                $i = 0;
                while ($result = $show_user->fetch_assoc()) {
                    $i++;
                    // Determine the CSS class for row color based on even or odd
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
            ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['id_user_acccount']; ?></th>
                        <th><?php echo $result['fullname']; ?></th>
                        <th><?php echo $result['user_name']; ?></th>
                        <th><?php echo $result['phone']; ?></th>
                        <th><?php echo $result['email']; ?></th>

                        <th><a href="useredit.php?id_user_acccount=<?php echo $result['id_user_acccount']; ?>">Sửa</a>&nbsp; |&nbsp;
                            <a href="userdelete.php?id_user_acccount=<?php echo $result['id_user_acccount']; ?>">Xoá</a>
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