<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php

$brand = new brand;
$show_brand = $brand->show_brand();

$isSearch = false; // Biến để kiểm tra đã thực hiện tìm kiếm hay chưa

if (isset($_GET['Search'])) {
    $tukhoa = $_GET['timkiem']; // từ khóa nhập vào ô input
    $sql_timkiem = "SELECT * FROM tbl_brand
                    INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
                    WHERE brand_name LIKE '%" . $tukhoa . "%'";
    $query_timkiem = mysqli_query($conn, $sql_timkiem);
    $isSearch = true; // Đã thực hiện tìm kiếm
} else {
    $tukhoa = '';
    $sql_danhsachbandau = "SELECT * FROM tbl_brand 
                           INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id LIMIT 10";
    $query_danhsachbandau = mysqli_query($conn, $sql_danhsachbandau);
}

?>

<style>
    .admin-content-right-cartegory-list form input:first-child {
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

    .admin-content-right-cartegory-list button {
        color: white;
        height: 30px;
        width: 100px;
        margin-top: 10px;
        cursor: pointer;
        background-color: coral;
        transform: all 0, 3 ease;
        border: 1px solid rgb(253, 76, 12);
    }

    .admin-content-right-cartegory-list button a {
        color: white;
    }

    .additional {
        display: flex;
    }

    .additional button {
        color: white;
        height: 30px;
        width: 100px;
        background-color: coral;
        border: 1px solid rgb(253, 76, 12);
        margin-left: 55%;
        margin-top: 20px;
    }

    .additional button:hover {
        background-color: rgb(253, 76, 12);

    }
</style>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory-list">
        <h1>Danh mục sản phẩm</h1>




        <div class="additional">
            <form action="brandlist.php" method="GET" name="search">
                <input type="text" name="timkiem" />
                <input type="submit" name="Search" value="Tìm kiếm" />
            </form>
            <button><a href="brandadd.php">Thêm</a></button>
        </div>

        <?php if ($isSearch) : ?>
            <button><a href="brandlist.php">Thoát</a></button>
        <?php endif; ?>



        <table>
            <tr class="boild">
                <th><b>STT</b></th>
                <th><b>ID</b></th>
                <th><b>Danh mục</b></th>
                <th><b>Loại Sản Phẩm</b></th>
                <th><b>Tuỳ Biến</b></th>
            </tr>
            <?php
            if ($isSearch) {
                $i = 0;
                while ($result = mysqli_fetch_assoc($query_timkiem)) {
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
            } else {
                $i = 0;
                $sql_danhsachbandau = "SELECT * FROM tbl_brand 
                                       INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
                                       ORDER BY brand_id DESC"; // Sắp xếp theo ngày tạo mới nhất và giới hạn kết quả lấy ra 10 bản ghi
                $query_danhsachbandau = mysqli_query($conn, $sql_danhsachbandau);
            
                while ($result = mysqli_fetch_assoc($query_danhsachbandau)) {
                    $i++;
                    $row_class = ($i % 2 == 0) ? 'even' : 'odd';
                ?>
                    <tr class="<?php echo $row_class; ?>">
                        <th><?php echo $i; ?></th>
                        <th><?php echo $result['brand_id']; ?></th>
                        <th><?php echo $result['cartegory_name']; ?></th>
                        <th><?php echo $result['brand_name']; ?></th>

                        <th><a href="brandedit.php?brand_id=<?php echo $result['brand_id']; ?>&cartegory_id=<?php echo $result['cartegory_id']; ?>">Sửa</a>
                            &nbsp; |&nbsp;
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