<?php
include "header.php";

?>
<!----------------------------------- cartegory ----------------------->


<section class="cartegory">
    <div class="container">
        <div class="category-top ">
            <p>Trang chủ &nbsp; &nbsp;&nbsp;<span> <sup> &#10230;</sup></span> &nbsp; &nbsp;&nbsp; Cửa hàng </p>
        </div>
    </div>
    <div class="container2">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Web_demo";

                    $conn = mysqli_connect($host, $username, $password, $dbname);

                    if (!$conn) {
                        die("SQL không kết nối: " . mysqli_connect_error());
                    }

                    $cartegoryLinks = array(
                        1 => "cartegory_DamBody.php",
                    );

                    $brandLinks = array(
                        1 => 'cartegory_DamBody.php',
                        2 => 'cartegory_VayDamMuaHe.php',
                        3 => 'link_for_brand3.php',
                        4 => 'link_for_brand4.php',
                        5 => 'link_for_brand5.php',
                        6 => 'link_for_brand6.php',
                    );

                    echo '<ul>';

                    $cartegoryCounter = 1; // Start from 1

                    $cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
                    $cartegoryResult = mysqli_query($conn, $cartegorySql);

                    if (!$cartegoryResult) {
                        die("Query execution error: " . mysqli_error($conn));
                    }

                    while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
                        echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

                        echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
                        echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
                        echo '</a>';
                        echo '<ul>';

                        $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

                        // Execute SQL query to fetch brand data based on cartegory_id
                        $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
                        $brandResult = mysqli_query($conn, $brandSql);

                        if (!$brandResult) {
                            die("Query execution error: " . mysqli_error($conn));
                        }

                        while ($brandRow = mysqli_fetch_assoc($brandResult)) {
                            echo '<li>';

                            echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
                            echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
                            echo '</a>';

                            echo '</li>';
                            $brandCounter++; // Increment the brand counter
                        }

                        echo '</ul>';
                        echo '</li>';
                        $cartegoryCounter++;

                        // Exit the loop after processing the first category
                        break;
                    }

                    echo '</ul>'; // Close the outer <ul>

                    mysqli_free_result($cartegoryResult);
                    mysqli_close($conn);
                    ?>
                    <!-- -------------------22222222 ------------>
                    <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Web_demo";

                    $conn = mysqli_connect($host, $username, $password, $dbname);

                    if (!$conn) {
                        die("SQL không kết nối: " . mysqli_connect_error());
                    }

                    $cartegoryLinks = array(
                        1 => "cartegory_AoSoMi.php",

                    );

                    $brandLinks = array(
                        1 => 'cartegory_AoSoMi.php',
                        2 => 'cartegory_QuanJean.php',
                        3 => 'link_for_brand3.php',
                        4 => 'link_for_brand4.php',
                        5 => 'link_for_brand5.php',
                        6 => 'link_for_brand6.php',
                    );

                    echo '<ul>';

                    $cartegoryCounter = 1; // Start from 1
                    $skipFirstCategory = true; // Flag to skip the first category

                    $cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
                    $cartegoryResult = mysqli_query($conn, $cartegorySql);

                    if (!$cartegoryResult) {
                        die("Query execution error: " . mysqli_error($conn));
                    }

                    while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
                        if ($skipFirstCategory) {
                            $skipFirstCategory = false;
                            continue; // Skip the first category
                        }

                        echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

                        echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
                        echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
                        echo '</a>';
                        echo '<ul>';

                        $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

                        // Execute SQL query to fetch brand data based on cartegory_id
                        $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
                        $brandResult = mysqli_query($conn, $brandSql);

                        if (!$brandResult) {
                            die("Query execution error: " . mysqli_error($conn));
                        }

                        while ($brandRow = mysqli_fetch_assoc($brandResult)) {
                            echo '<li>';

                            echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
                            echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
                            echo '</a>';

                            echo '</li>';
                            $brandCounter++; // Increment the brand counter
                        }

                        echo '</ul>';
                        echo '</li>';
                        $cartegoryCounter++;

                        // Exit the loop after processing the second category
                        break;
                    }

                    echo '</ul>'; // Close the outer <ul>

                    mysqli_free_result($cartegoryResult);
                    mysqli_close($conn);
                    ?>

                    <!-- -------------------33333333333 ------------>
                    <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Web_demo";

                    $conn = mysqli_connect($host, $username, $password, $dbname);

                    if (!$conn) {
                        die("SQL không kết nối: " . mysqli_connect_error());
                    }

                    $cartegoryLinks = array(
                        1 => "cartegory_backup1.php",

                    );

                    $brandLinks = array(
                        1 => 'cartegory_backup1.php',
                        2 => 'cartegory_backup2.php',
                        3 => 'cartegory_backup3.php',
                        4 => 'link_for_brand4.php',
                        5 => 'link_for_brand5.php',
                        6 => 'link_for_brand6.php',
                    );

                    echo '<ul>';

                    $cartegoryCounter = 1; // Start from 1
                    $skipCategories = 2; // Skip the first two categories

                    $cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
                    $cartegoryResult = mysqli_query($conn, $cartegorySql);

                    if (!$cartegoryResult) {
                        die("Query execution error: " . mysqli_error($conn));
                    }

                    while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
                        if ($skipCategories > 0) {
                            $skipCategories--;
                            continue; // Skip the categories until $skipCategories is 0
                        }

                        echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

                        echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
                        echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
                        echo '</a>';
                        echo '<ul>';

                        $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

                        // Execute SQL query to fetch brand data based on cartegory_id
                        $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
                        $brandResult = mysqli_query($conn, $brandSql);

                        if (!$brandResult) {
                            die("Query execution error: " . mysqli_error($conn));
                        }

                        while ($brandRow = mysqli_fetch_assoc($brandResult)) {
                            echo '<li>';

                            echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
                            echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
                            echo '</a>';

                            echo '</li>';
                            $brandCounter++; // Increment the brand counter
                        }

                        echo '</ul>';
                        echo '</li>';
                        $cartegoryCounter++;

                        // Exit the loop after processing the third category
                        if ($skipCategories == 0) {
                            break;
                        }
                    }

                    echo '</ul>'; // Close the outer <ul>

                    mysqli_free_result($cartegoryResult);
                    mysqli_close($conn);
                    ?>


                    <!-- ----------------4444444444444------------>
                    <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Web_demo";

                    $conn = mysqli_connect($host, $username, $password, $dbname);

                    if (!$conn) {
                        die("SQL không kết nối: " . mysqli_connect_error());
                    }

                    $cartegoryLinks = array(
                        1 => "cartegory_backup2.php",

                    );

                    $brandLinks = array(
                        1 => 'link_for_brand1.php',
                        2 => 'link_for_brand2.php',
                        3 => 'link_for_brand3.php',
                        4 => 'link_for_brand4.php',
                        5 => 'link_for_brand5.php',
                        6 => 'link_for_brand6.php',
                    );

                    echo '<ul>';

                    $cartegoryCounter = 1; // Start from 1
                    $skipCategories = 3; // Skip the first three categories

                    $cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
                    $cartegoryResult = mysqli_query($conn, $cartegorySql);

                    if (!$cartegoryResult) {
                        die("Query execution error: " . mysqli_error($conn));
                    }

                    while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
                        if ($skipCategories > 0) {
                            $skipCategories--;
                            continue; // Skip the categories until $skipCategories is 0
                        }

                        echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

                        echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
                        echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
                        echo '</a>';
                        echo '<ul>';

                        $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

                        // Execute SQL query to fetch brand data based on cartegory_id
                        $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
                        $brandResult = mysqli_query($conn, $brandSql);

                        if (!$brandResult) {
                            die("Query execution error: " . mysqli_error($conn));
                        }

                        while ($brandRow = mysqli_fetch_assoc($brandResult)) {
                            echo '<li>';

                            echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
                            echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
                            echo '</a>';

                            echo '</li>';
                            $brandCounter++; // Increment the brand counter
                        }

                        echo '</ul>';
                        echo '</li>';
                        $cartegoryCounter++;

                        // Exit the loop after processing the fourth category
                        if ($skipCategories == 0) {
                            break;
                        }
                    }

                    echo '</ul>'; // Close the outer <ul>

                    mysqli_free_result($cartegoryResult);
                    mysqli_close($conn);
                    ?>

                    <!-- -------------------5555555555555555   ----------->
                    <?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "Web_demo";

                    $conn = mysqli_connect($host, $username, $password, $dbname);

                    if (!$conn) {
                        die("SQL không kết nối: " . mysqli_connect_error());
                    }

                    $cartegoryLinks = array(
                        1 => "link_for_cartegory_5.php",
                    );

                    $brandLinks = array(
                        1 => 'link_for_brand1.php',
                        2 => 'link_for_brand2.php',
                        3 => 'link_for_brand3.php',
                        4 => 'link_for_brand4.php',
                        5 => 'link_for_brand5.php',
                        6 => 'link_for_brand6.php',
                    );

                    echo '<ul>';

                    $cartegoryCounter = 1; // Start from 1
                    $skipCategories = 4; // Skip the first four categories

                    $cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
                    $cartegoryResult = mysqli_query($conn, $cartegorySql);

                    if (!$cartegoryResult) {
                        die("Query execution error: " . mysqli_error($conn));
                    }

                    while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
                        if ($skipCategories > 0) {
                            $skipCategories--;
                            continue; // Skip the categories until $skipCategories is 0
                        }

                        echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

                        echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
                        echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
                        echo '</a>';
                        echo '<ul>';

                        $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

                        // Execute SQL query to fetch brand data based on cartegory_id
                        $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
                        $brandResult = mysqli_query($conn, $brandSql);

                        if (!$brandResult) {
                            die("Query execution error: " . mysqli_error($conn));
                        }

                        while ($brandRow = mysqli_fetch_assoc($brandResult)) {
                            echo '<li>';

                            echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
                            echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
                            echo '</a>';

                            echo '</li>';
                            $brandCounter++; // Increment the brand counter
                        }

                        echo '</ul>';
                        echo '</li>';
                        $cartegoryCounter++;

                        // Exit the loop after processing the fifth category
                        if ($skipCategories == 0) {
                            break;
                        }
                    }

                    echo '</ul>'; // Close the outer <ul>

                    mysqli_free_result($cartegoryResult);
                    mysqli_close($conn);
                    ?>



                </ul>


            </div>

            <div class="cartegory-right">

                <!-- <div class="cartegory-right-top-item row">
                        <h2><i>Hàng hot tháng này !!!</i></h2>
                        <div>
                            <select name="" id="">
                                <option value="">Màu sắc</option>
                                <option value="">xanh</option>
                                <option value="">đỏ</option>
                                <option value="">tím</option>
                                <option value="">vàng</option>
                                <option value="">nâu</option>
                                <option value="">đen</option>
                                <option value="">trắng</option>
                            </select>
                            <select name="" id="">
                                <option value="">Sắp xếp</option>
                                <option value="">Giá cao đến thấp </option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div>
                    </div> -->




                <div class="cartegory-right-content ">

                    <div class="cartegory-right-content-item row">
                        <?php
                        // Thực hiện kết nối đến cơ sở dữ liệu
                        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                        if (!$con) {
                            die('Lỗi kết nối: ' . mysqli_connect_error());
                        }

                        // Thực hiện truy vấn SQL
                        $sql = "SELECT * FROM `tbl_product` WHERE `brand_id` = 3 LIMIT 4";

                        $result = mysqli_query($con, $sql);

                        // Kiểm tra và xử lý kết quả
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo ' <a href="product.php?id=' . $row["product_id"] . '">';
                                $image_path = $row['product_img'];

                                // Check if the image file exists
                                if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                                    echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image">';
                                } else {
                                    echo 'Image file does not exist.';
                                }

                                // Check if the image file exists

                                echo '<h1>' . $row['product_name'] . '</h1>';
                                echo '<h3><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h3>';
                                echo '<p>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></p>';

                                echo '</a>';
                            }
                        } else {
                            echo 'Không có dữ liệu.';
                        }

                        // Đóng kết nối cơ sở dữ liệu
                        mysqli_close($con);
                        ?>
                    </div>



                    <div class="cartegory-right-content-item row">
                        <?php
                        // Thực hiện kết nối đến cơ sở dữ liệu
                        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                        if (!$con) {
                            die('Lỗi kết nối: ' . mysqli_connect_error());
                        }

                        // Thực hiện truy vấn SQL
                        $sql = "SELECT * FROM `tbl_product` WHERE `brand_id` = 3 LIMIT 4 OFFSET 4";

                        $result = mysqli_query($con, $sql);

                        // Kiểm tra và xử lý kết quả
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo ' <a href="product.php?id=' . $row["product_id"] . '">';
                                $image_path = $row['product_img'];

                                // Check if the image file exists
                                if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                                    echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image">';
                                } else {
                                    echo 'Image file does not exist.';
                                }

                                // Check if the image file exists

                                echo '<h1>' . $row['product_name'] . '</h1>';
                                echo '<h3><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h3>';
                                echo '<p>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></p>';

                                echo '</a>';
                            }
                        } else {
                            echo 'Không có dữ liệu.';
                        }

                        // Đóng kết nối cơ sở dữ liệu
                        mysqli_close($con);
                        ?>
                    </div>


                    <div class="cartegory-right-content-item row">
                        <?php
                        // Thực hiện kết nối đến cơ sở dữ liệu
                        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                        if (!$con) {
                            die('Lỗi kết nối: ' . mysqli_connect_error());
                        }

                        // Thực hiện truy vấn SQL
                        $sql = "SELECT * FROM `tbl_product` WHERE `brand_id` = 3 LIMIT 4 OFFSET 8"; // Retrieve 5 products starting from the 8th product (offset of 7)

                        $result = mysqli_query($con, $sql);

                        // Kiểm tra và xử lý kết quả
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo ' <a href="product.php?id=' . $row["product_id"] . '">';
                                $image_path = $row['product_img'];

                                // Check if the image file exists
                                if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                                    echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image">';
                                } else {
                                    echo 'Image file does not exist.';
                                }

                                // Check if the image file exists

                                echo '<h1>' . $row['product_name'] . '</h1>';
                                echo '<h3><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h3>';
                                echo '<p>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></p>';

                                echo '</a>';
                            }
                        } else {
                            echo 'Không có dữ liệu.';
                        }

                        // Đóng kết nối cơ sở dữ liệu
                        mysqli_close($con);
                        ?>
                    </div>

                    <div class="cartegory-right-content-item row">
                        <?php
                        // Thực hiện kết nối đến cơ sở dữ liệu
                        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                        if (!$con) {
                            die('Lỗi kết nối: ' . mysqli_connect_error());
                        }

                        // Thực hiện truy vấn SQL
                        $sql = "SELECT * FROM `tbl_product` WHERE `brand_id` = 3 LIMIT 4 OFFSET 12"; // Retrieve 5 products starting from the 12th product (offset of 11)

                        $result = mysqli_query($con, $sql);

                        // Kiểm tra và xử lý kết quả
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo ' <a href="product.php?id=' . $row["product_id"] . '">';
                                $image_path = $row['product_img'];

                                // Check if the image file exists
                                if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                                    echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image">';
                                } else {
                                    echo 'Image file does not exist.';
                                }

                                // Check if the image file exists
                                echo '<h1>' . $row['product_name'] . '</h1>';
                                echo '<h3><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h3>';
                                echo '<p>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></p>';

                                echo '</a>';
                            }
                        } else {
                            echo 'Không có dữ liệu.';
                        }

                        // Đóng kết nối cơ sở dữ liệu
                        mysqli_close($con);
                        ?>
                    </div>

                </div>
    

                <div class="dartegory-right-bottom row">
                    <div class="cartegory-right-bottom-items">
                        <?php
                        // Thực hiện kết nối đến cơ sở dữ liệu
                        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                        if (!$con) {
                            die('Lỗi kết nối: ' . mysqli_connect_error());
                        }

                        // Thực hiện truy vấn SQL to get the total count
                        $sql = "SELECT COUNT(*) as totalProducts FROM `tbl_product` WHERE `brand_id` = 3";
                        $result = mysqli_query($con, $sql);

                        // Kiểm tra và xử lý kết quả
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalProducts = $row['totalProducts'];
                            echo "<p>Hiển thị $totalProducts sản phẩm</p>";
                        } else {
                            echo 'Không có dữ liệu.';
                        }

                        // Đóng kết nối cơ sở dữ liệu
                        mysqli_close($con);
                        ?>
                    </div>


                    <div class="cartegory-right-bottom-items1">
                        <p><span>&#171;&nbsp;</span>1 2 3 4 2<span>&nbsp;&#187; </span>Trang cuối </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




<!-- -----------------------------------------------footer ---------------------------------->

<section class="razzi-icon">
    <div class="razzi-icon-box">
        <div class="razzi-icon-box__icon">
            <span class="razzi-img-icon elementor-animation">
                <img decoding="async" src="https://demo4.drfuri.com/media/razzi/truck3.svg" alt="FREE SHIPPING" />
            </span>
        </div>
        <div class="razzi-icon-box__content">
            <div class="razzi-icon-box__title">
                <span>FREE SHIPPING </span>
            </div>
            <p class="razzi-icon-box__description">Miễn phí vận chuyển từ 2 váy </p>
        </div>
    </div>

    <div class="razzi-icon-box">
        <div class="razzi-icon-box__icon">
            <span class="razzi-img-icon elementor-animation">
                <img decoding="async" src="https://demo4.drfuri.com/media/razzi/money.svg" alt="Free Returns" />
            </span>
        </div>
        <div class="razzi-icon-box__content">
            <div class="razzi-icon-box__title">
                <span>FREE RETURNS </span>
            </div>
            <p class="razzi-icon-box__description">Đổi trả hàng miễn phí </p>
        </div>
    </div>

    <div class="razzi-icon-box">
        <div class="razzi-icon-box__icon">
            <span class="razzi-img-icon elementor-animation">
                <img decoding="async" src="https://demo4.drfuri.com/media/razzi/box.svg" alt="Secure Shopping" />
            </span>
        </div>
        <div class="razzi-icon-box__content">
            <div class="razzi-icon-box__title">
                <span>SECURE SHOPPING </span>
            </div>
            <p class="razzi-icon-box__description">Kiểm tra hàng trước khi thanh toán </p>
        </div>
    </div>

    <div class="razzi-icon-box">
        <div class="razzi-icon-box__icon">
            <span class="razzi-img-icon elementor-animation">
                <img decoding="async" src="https://demo4.drfuri.com/media/razzi/like.svg" alt="Over 1000 Styles" />
            </span>
        </div>
        <div class="razzi-icon-box__content">
            <div class="razzi-icon-box__title">
                <span>OVER 1000 STYLES </span>
            </div>
            <p class="razzi-icon-box__description">Luôn có thiết kế dành cho bạn </p>
        </div>
    </div>
</section>

<footer id="site-footer" class="site-footer site-footer-custom">

    <div class="sphere2"></div>
    <div class="sphere1"></div>
    <div class="footer-extra has-divider">


        <div class="">
            <div class="footer-extra__inner">


                <div class="footer-branding">
                    <a href="#" class="logo logo-text">NTKQ </a>
                </div>

                <nav class="menu-footer-extra-container">

                    <ul id="footer-menu" class="footer-menu nav-menu menu">
                        <li id="menu-item-7396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7396">
                            <a href="">Cảm ơn bạn đã mua hàng của NTKQ-Shop !!!</a>
                        </li>

                    </ul>
                </nav>
                <div class="socials-menu ">

                    <ul id="socials-menu" class="menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5789">
                            <a href="https://facebook.com/">
                                <span class="razzi-svg-icon ">
                                    <svg aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 7 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27972 1.99219H6.30215V0.084375C6.12609 0.0585937 5.51942 0 4.81306 0C3.33882 0 2.32912 0.99375 2.32912 2.81953V4.5H0.702148V6.63281H2.32912V12H4.32306V6.63281H5.88427L6.13245 4.5H4.32306V3.03047C4.32306 2.41406 4.47791 1.99219 5.27972 1.99219Z" />
                                    </svg>
                                </span>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5790">
                            <a href="https://twitter.com/">
                                <span class="razzi-svg-icon ">
                                    <svg aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>
                                </span>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5791">
                            <a href="https://instagram.com">
                                <span class="razzi-svg-icon ">
                                    <svg aria-hidden="true" role="img" focusable="false" width="24" height="24" fill="currentColor" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.70482 2.89996C5.00125 2.89996 3.62714 4.26262 3.62714 5.95199C3.62714 7.64137 5.00125 9.00402 6.70482 9.00402C8.40839 9.00402 9.7825 7.64137 9.7825 5.95199C9.7825 4.26262 8.40839 2.89996 6.70482 2.89996ZM6.70482 7.93621C5.60393 7.93621 4.70393 7.04637 4.70393 5.95199C4.70393 4.85762 5.60125 3.96777 6.70482 3.96777C7.80839 3.96777 8.70571 4.85762 8.70571 5.95199C8.70571 7.04637 7.80571 7.93621 6.70482 7.93621ZM10.6263 2.77512C10.6263 3.1709 10.3048 3.48699 9.90839 3.48699C9.50929 3.48699 9.19054 3.16824 9.19054 2.77512C9.19054 2.38199 9.51196 2.06324 9.90839 2.06324C10.3048 2.06324 10.6263 2.38199 10.6263 2.77512ZM12.6646 3.49762C12.6191 2.54402 12.3995 1.69934 11.695 1.0034C10.9932 0.307461 10.1414 0.0896484 9.17982 0.0418359C8.18875 -0.0139453 5.21821 -0.0139453 4.22714 0.0418359C3.26821 0.0869922 2.41643 0.304805 1.71196 1.00074C1.0075 1.69668 0.790536 2.54137 0.742322 3.49496C0.686072 4.47777 0.686072 7.42355 0.742322 8.40637C0.787857 9.35996 1.0075 10.2046 1.71196 10.9006C2.41643 11.5965 3.26554 11.8143 4.22714 11.8621C5.21821 11.9179 8.18875 11.9179 9.17982 11.8621C10.1414 11.817 10.9932 11.5992 11.695 10.9006C12.3968 10.2046 12.6164 9.35996 12.6646 8.40637C12.7209 7.42355 12.7209 4.48043 12.6646 3.49762ZM11.3843 9.4609C11.1754 9.98152 10.7709 10.3826 10.2432 10.5925C9.45304 10.9032 7.57804 10.8315 6.70482 10.8315C5.83161 10.8315 3.95393 10.9006 3.16643 10.5925C2.64143 10.3853 2.23696 9.98418 2.02536 9.4609C1.71196 8.67731 1.78429 6.81793 1.78429 5.95199C1.78429 5.08606 1.71464 3.22402 2.02536 2.44309C2.23429 1.92246 2.63875 1.52137 3.16643 1.31152C3.95661 1.00074 5.83161 1.07246 6.70482 1.07246C7.57804 1.07246 9.45572 1.0034 10.2432 1.31152C10.7682 1.51871 11.1727 1.9198 11.3843 2.44309C11.6977 3.22668 11.6254 5.08606 11.6254 5.95199C11.6254 6.81793 11.6977 8.67996 11.3843 9.4609Z" />
                                    </svg>
                                </span>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5792">
                            <a href="https://pinterest.com">
                                <span class="razzi-svg-icon ">
                                    <svg aria-hidden="true" role="img" focusable="false" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.289,2C6.617,2,3.606,5.648,3.606,9.622c0,1.846,1.025,4.146,2.666,4.878c0.25,0.111,0.381,0.063,0.439-0.169 c0.044-0.175,0.267-1.029,0.365-1.428c0.032-0.128,0.017-0.237-0.091-0.362C6.445,11.911,6.01,10.75,6.01,9.668 c0-2.777,2.194-5.464,5.933-5.464c3.23,0,5.49,2.108,5.49,5.122c0,3.407-1.794,5.768-4.13,5.768c-1.291,0-2.257-1.021-1.948-2.277 c0.372-1.495,1.089-3.112,1.089-4.191c0-0.967-0.542-1.775-1.663-1.775c-1.319,0-2.379,1.309-2.379,3.059 c0,1.115,0.394,1.869,0.394,1.869s-1.302,5.279-1.54,6.261c-0.405,1.666,0.053,4.368,0.094,4.604 c0.021,0.126,0.167,0.169,0.25,0.063c0.129-0.165,1.699-2.419,2.142-4.051c0.158-0.59,0.817-2.995,0.817-2.995 c0.43,0.784,1.681,1.446,3.013,1.446c3.963,0,6.822-3.494,6.822-7.833C20.394,5.112,16.849,2,12.289,2">
                                        </path>
                                    </svg>
                                </span>
                                <span>Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>