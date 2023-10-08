<?php
session_start();
?>
<section class="admin-content">
    <div class="admin-content-left">

        <ul>
            <li class="clickable" ><a data-index="0">- Bảng Thống Kê</a></li>
            <li class="clickable" ><a data-index="1">- Quản Lí Khách Hàng</a></li>
            <li class="clickable" ><a data-index="2">- Quản Lí Nhân Viên</a></li>
            <li class="clickable" ><a data-index="3">- Quản Trị Viên</a></li>
            <li class="clickable" ><a data-index="4">- Quản Lí Đơn Hàng</a></li>


            <li><a href="cartegoryadd.php">- Danh Mục</a>
                <ul>
                    <li> <a href="cartegoryadd.php">&#8226;&nbsp;Thêm danh mục</a> </li>
                    <li> <a href="cartegorylist.php">&#8226;&nbsp;Danh sách danh mục</a> </li>
                </ul>

            </li>
            <li><a href="brandadd.php">- Loại Sản Phẩm</a>
                <ul>
                    <li> <a href="brandadd.php">&#8226;&nbsp;Thêm loại sản phẩm</a> </li>
                    <li> <a href="brandlist.php">&#8226;&nbsp;Danh loại sản phẩm</a> </li>
                </ul>

            </li>
            <li><a href="#">- Sản Phẩm</a>
                <ul>
                    <li> <a href="">&#8226;&nbsp;Thêm sản phẩm</a> </li>
                    <li> <a href="">&#8226;&nbsp;Danh sách sản phẩm</a> </li>
                </ul>

            </li>
            <li><a href="">- Quản Lí Trang </a>
                <ul>
                    <li> <a href="">&#8226;&nbsp;Quản lí slide </a> </li>
                    <li> <a href="">&#8226;&nbsp;Quản lí about shop </a> </li>
                </ul>

            </li>
            <li><a href="">- Quản Lí Lương</a></li>
            <li><a href="">- Đăng Xuất</a></li>
        </ul>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const clickableTh = document.querySelectorAll(".clickable");

                clickableTh.forEach(th => {
                    th.addEventListener("click", () => {
                        // Get the index of the clicked link from data-index attribute
                        const dataIndex = th.getAttribute("data-index");

                        // Change background color of the clicked link
                        clickableTh.forEach(header => {
                            header.style.backgroundColor = "";
                        });
                        th.style.backgroundColor = "#fcd9d9"; // Change to the desired color

                        // Store the clicked index in a PHP session
                        <?php
                        echo "session_start();";
                        echo "\$_SESSION['clickedLinkIndex'] = ' . dataIndex . ';";
                        ?>
                    });
                });

                // Check if there's a clicked link index in the session and set the background color
                <?php
                echo "if (isset(\$_SESSION['clickedLinkIndex'])) {";
                echo "    const clickedIndex = \$_SESSION['clickedLinkIndex'];";
                echo "    clickableTh[clickedIndex].style.backgroundColor = '#fcd9d9';";
                echo "}";
                ?>
            });
        </script>

    </div>