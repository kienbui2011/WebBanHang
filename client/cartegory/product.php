<?php
include "header.php";
?>
<!----------------------------------- product ----------------------->


<section class="product">
    <div class="product-top ">
        <p>Trang chủ &nbsp; &nbsp;&nbsp;<span> <sup> &#10230;</sup></span> &nbsp; &nbsp;&nbsp;Cửa hàng &nbsp;
            &nbsp;&nbsp;<span> <sup> &#10230;</sup></span> &nbsp; &nbsp;&nbsp; Sản phẩm </p>
    </div>
    <div class="container2">
        <div class="product-content row ">




            <?php
            // Thực hiện kết nối đến cơ sở dữ liệu
            $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
            if (!$con) {
                die('Lỗi kết nối: ' . mysqli_connect_error());
            }

            // Kiểm tra xem có tham số ID được truyền vào không
            if (isset($_GET['id'])) {
                $product_id = $_GET['id'];

                // Thực hiện truy vấn SQL để lấy thông tin sản phẩm dựa trên product_id
                $sql = "SELECT * FROM `tbl_product` WHERE product_id = $product_id";
                $result = mysqli_query($con, $sql);


                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // Hiển thị thông tin chi tiết của sản phẩm

                } else {
                    echo 'Không tìm thấy sản phẩm.';
                }
            } else {
                echo 'Thiếu thông tin sản phẩm.';
            }

            // Đóng kết nối cơ sở dữ liệu
            mysqli_close($con);
            ?>

            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img']; ?>" alt="">
                </div>

                <div class="product-content-left-small-img">
                    <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img_desc1']; ?>">
                    <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img_desc2']; ?>">
                    <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img_desc3']; ?>">
                    <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img']; ?>">
                </div>
            </div>

            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <?php echo '<h1>' . $row['product_name'] . '</h1>'; ?>
                    <p>MSP: <?php echo $row['product_id']; ?></p>


                </div>

                <div class="product-content-right-product-price">
                    <style>
                        .product-content-right-product-price p b {
                            font-weight: bold;
                        }
                    </style>

                    <p><b>Giá cũ: </b><?php echo number_format($row['product_price'], 0, ',', '.') . "đ"; ?></p>
                    <p><b>Giá mới: </b><?php echo number_format($row['product_price_new'], 0, ',', '.') . "đ"; ?></p>
                </div>

                <!-- <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sắc</span> : Vàng nhạt

                        <div class="product-content-right-product-color-img">
                            <img src="img/imgColor.1.png" alt="">
                        </div> 
                    </div> -->
                <style>
                    .size-option {
                        display: inline-block;
                        padding-top: 1px;
                        padding-bottom: 1px;
                        padding-left: 7px;
                        padding-right: 7px;
                        cursor: pointer;
                        border: 1px solid #ccc;
                        margin-right: 5px;

                    }

                    .size-option.active {
                        background-color: lightgray;
                    }
                </style>
                <div class="product-content-right-product-size">
                    <p style="font-weight: bold;">Size:</p>
                    <div class="size">
                        <div class="size-option" onclick="selectSize('S')">S</div>
                        <div class="size-option" onclick="selectSize('M')">M</div>
                        <div class="size-option" onclick="selectSize('L')">L</div>
                        <div class="size-option" onclick="selectSize('XL')">XL</div>
                        <div class="size-option" onclick="selectSize('XXL')">XXL</div>
                    </div>
                    <p style="color:rgb(240, 95, 95);">Vui lòng chọn size hoặc gửi số đo ở trang thông tin.</p>
                </div>


                <script>
                    var sizeOptions = document.querySelectorAll('.size-option');
                    sizeOptions.forEach(function(option) {
                        option.addEventListener('click', function() {
                            sizeOptions.forEach(function(opt) {
                                opt.classList.remove('active');
                            });
                            this.classList.add('active');
                        });
                    });
                </script>

                <div class="quantity row">
                    <p style="font-weight: bold; margin-top: -5px;">
                        <?php
                        if ($row['quantity'] > 0) {
                            echo "Còn hàng:  "  . $row['quantity'];
                        } else {
                            echo '<span style="color: red;">Hết hàng</span>';
                        }
                        ?>
                    </p>
                </div>


                <div class="product-content-right-product-button">
                    <!-- <a href="cart.php?id= <?php // echo $product_id; 
                                                ?>"> -->
                    <style>
                        .custom-input {
                            width: 100px;
                            height: 30px;
                        }
                    </style>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                        <input type="hidden" id="selected_size" name="zi" value="">
                        <label for="quantity" style="font-weight: bold; font-size: 17px;">Số lượng:&ensp;</label>
                        <input type="number" min="1" value="1" name="quantity" class="custom-input">

                        <style>
                            .muahang p {
                                margin-top: -2px;
                                transition: transform 1s;
                            }

                            .muahang p:hover {
                                font-size: 18px;
                                font-weight: bold;
                                color: rgb(47, 223, 47);
                                transform: scale(1.1);

                            }
                            .giohang p {
                               
                                font-weight: normal;
                                transition: transform 1s;
                            }
                            .giohang p:hover {
                                font-size: 15px;
                                font-weight: bold;
                                transform: scale(1.1);
                              
                            }
                        </style>
                        <button class="muahang" id="addToCartButton" type="submit" name="add_to_cart">
                            <p>MUA HÀNG</p>
                        </button>
                        <button class="giohang" id="addToCartButton" type="submit" name="add_to_cart">
                            <p>THÊM GIỎ HÀNG</p>
                        </button>
                    </form>

                    <script>
                        function selectSize(size) {
                            document.getElementById('selected_size').value = size;
                        }
                    </script>
                    <?php

                    // Thực hiện kết nối đến cơ sở dữ liệu
                    $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                    if (!$con) {
                        die('Lỗi kết nối: ' . mysqli_connect_error());
                    }

                    if (isset($_GET['id'])) {
                        $product_id = $_GET['id'];

                        // if (isset($_POST['add_to_cart'])) {
                        //     $selected_size = $_POST['zi'];

                        //     // Get the current timestamp
                        //     $current_time = date("Y-m-d H:i:s");

                        //     // Query to get the product price from tbl_product
                        //     $price_query = "SELECT product_price_new FROM tbl_product WHERE product_id = '$product_id'";
                        //     $price_result = mysqli_query($con, $price_query);

                        //     if ($price_row = mysqli_fetch_assoc($price_result)) {
                        //         $product_price = $price_row['product_price_new'];

                        //         // SQL query to insert data into the tbl_order_details table with product price and timestamp
                        //         $sql = "INSERT INTO tbl_order_details (product_id, si_ze, time_added, price) VALUES ('$product_id', '$selected_size', '$current_time', '$product_price')";

                        //         if (mysqli_query($con, $sql)) {
                        //             echo '<p id="success-msg" style="color: green; font-weight: bold;">Đã thêm vào giỏ hàng.</p>';
                        //             echo '<script>
                        //                 setTimeout(function() {
                        //                     document.getElementById("success-msg").style.display = "none";
                        //                 }, 2000);
                        //             </script>';
                        //         } else {
                        //             echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        //         }
                        //     } else {
                        //         echo "Error: Product price not found.";
                        //     }
                        // }


                        if (isset($_POST['add_to_cart'])) {
                            $selected_size = $_POST['zi'];
                            $quantity = $_POST['quantity']; // Get the quantity from the form

                            // Get the current timestamp
                            $current_time = date("Y-m-d H:i:s");

                            // Query to get the product price from tbl_product
                            $price_query = "SELECT product_price_new FROM tbl_product WHERE product_id = '$product_id'";
                            $price_result = mysqli_query($con, $price_query);

                            if ($price_row = mysqli_fetch_assoc($price_result)) {
                                $product_price = $price_row['product_price_new'];

                                // SQL query to insert data into the tbl_order_details table with product price, timestamp, and quantity
                                $sql = "INSERT INTO tbl_order_details (product_id, si_ze, time_added, price, quantity) 
                                            VALUES ('$product_id', '$selected_size', '$current_time', '$product_price', '$quantity')";

                                if (mysqli_query($con, $sql)) {
                                    echo '<p id="success-msg" style="color: green; font-weight: bold;">Đã thêm vào giỏ hàng.</p>';
                                    echo '<script>
                                            setTimeout(function() {
                                                document.getElementById("success-msg").style.display = "none";
                                            }, 2000);
                                        </script>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                }
                            } else {
                                echo "Error: Product price not found.";
                            }
                        }
                    }


                    ?>
                </div>

                <br>

                <div class="product-content-right-product-icon row">
                    <div class="product-content-right-product-icon-item row">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 25" fill="none">
                                <path d="M12.871 6.92557C14.0709 7.12666 15.1608 7.69338 16.031 8.56175C16.9011 9.43011 17.4644 10.5179 17.6705 11.7153M13.0542 2.99963C15.1883 3.36069 17.1347 4.37074 18.6826 5.91094C20.2306 7.45572 21.2381 9.39811 21.5999 11.5279M19.9329 20.0013C19.9329 20.0013 18.7742 21.1393 18.4903 21.4729C18.0277 21.9665 17.4827 22.1996 16.7683 22.1996C16.6996 22.1996 16.6263 22.1996 16.5576 22.1951C15.1974 22.1082 13.9335 21.5781 12.9855 21.1256C10.3933 19.8733 8.11724 18.0955 6.22582 15.8423C4.66415 13.9639 3.61997 12.2271 2.92844 10.3624C2.50253 9.22443 2.34682 8.33779 2.41551 7.50142C2.46131 6.96669 2.6674 6.52336 3.04751 6.14403L4.60919 4.58554C4.83359 4.3753 5.07174 4.26104 5.3053 4.26104C5.59382 4.26104 5.82739 4.43472 5.97394 4.58097C5.97852 4.58554 5.9831 4.59011 5.98768 4.59468C6.26704 4.85519 6.53266 5.12484 6.81202 5.41277C6.95399 5.55902 7.10054 5.70527 7.24709 5.85609L8.49735 7.1038C8.9828 7.58825 8.9828 8.03615 8.49735 8.5206C8.36454 8.65314 8.23631 8.78568 8.1035 8.91365C7.7188 9.3067 8.021 9.00512 7.62257 9.3616C7.61341 9.37074 7.60425 9.37531 7.59967 9.38445C7.20582 9.7775 7.27909 10.1614 7.36153 10.4219C7.36611 10.4356 7.37069 10.4493 7.37527 10.4631C7.70042 11.2492 8.15839 11.9895 8.85451 12.8716L8.85909 12.8762C10.1231 14.4301 11.4558 15.6412 12.9259 16.569C13.1136 16.6879 13.306 16.7838 13.4892 16.8752C13.654 16.9575 13.8097 17.0352 13.9426 17.1175C13.9609 17.1266 13.9792 17.1403 13.9975 17.1495C14.1532 17.2272 14.2998 17.2637 14.4509 17.2637C14.831 17.2637 15.0692 17.0261 15.147 16.9484L16.0447 16.0525C16.2004 15.8971 16.4477 15.7097 16.7362 15.7097C17.0202 15.7097 17.2537 15.888 17.3957 16.0434C17.4003 16.048 17.4003 16.0479 17.4049 16.0525L19.9283 18.5708C20.4 19.037 19.9329 20.0013 19.9329 20.0013Z" stroke="black" stroke-width="1,8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Hotline</p>
                    </div>
                    <div class="product-content-right-product-icon-item row">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 25" fill="none">
                                <path d="M7.1999 7.79963H15.5999M7.1999 12.5996H11.9999M11.6869 17.1909L6.67816 22.1996V17.1909H4.7999C3.47442 17.1909 2.3999 16.1164 2.3999 14.7909V5.39963C2.3999 4.07415 3.47442 2.99963 4.7999 2.99963H19.1999C20.5254 2.99963 21.5999 4.07415 21.5999 5.39963V14.7909C21.5999 16.1164 20.5254 17.1909 19.1999 17.1909H11.6869Z" stroke="black" stroke-width="1,8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Chat</p>
                    </div>
                    <div class="product-content-right-product-icon-item row">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 25 25" fill="none">
                                <path d="M4.125 6.72461L12 11.7871L20.4375 6.72461M5.25 18.904C4.00736 18.904 3 17.8966 3 16.654V7.84961C3 6.60697 4.00736 5.59961 5.25 5.59961H18.75C19.9926 5.59961 21 6.60697 21 7.84961V16.654C21 17.8966 19.9926 18.904 18.75 18.904H5.25Z" stroke="black" stroke-width="1,8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Mail</p>
                    </div>

                </div>
                <div class="product-content-right-product-QR">
                    <img src="../img/IMG_QR.jpg" alt="">

                </div>
                <div class="product-content-right-info">
                    <div class="info">
                        <div class="container0">
                            <table>
                                <tr>
                                    <th class="clickable" data-toggle="gioithieu">GIỚI THIỆU</th>
                                    <th class="clickable" data-toggle="chitiet">CHI TIẾT SẢN PHẨM</th>
                                    <th class="clickable" data-toggle="baoquan">BẢO QUẢN</th>
                                </tr>
                            </table>

                            <div id="gioithieu" class="hidden" style="display: inline;">
                                <div class="content3">
                                    <table style="width:300px;">
                                        <tr>
                                            <p>- Kiểu dáng: Với thiết kế đuôi cá mềm mại, nhấn nhá eo buộc nơ rũ điệu đà </p>
                                            <p>- Chất liệu: Habutai siêu nhẹ, mềm mại, nhẹ bay, co giãn nhẹ. </p>

                                        </tr>
                                        <tr>
                                            <b> Thông tin mẫu:</b>
                                            <td> <b>Chiều cao:</b></td>
                                            <td> 167 cm </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b> Cân nặng:</b> </td>
                                            <td>50 kg</td>
                                        </tr>

                                        <tr>
                                            <td><b> Số đo 3 vòng:</b> </td>
                                            <td>83-65-93 cm</td>
                                        </tr>
                                        <tr>
                                            <td><b> Mẫu mặc:</b> </td>
                                            <td>size M</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div id="chitiet" class="hidden">
                                <div class="content3">
                                    <table style="width:300px;">
                                        <tr>
                                            <td> <b>Dòng sản phẩm: </b></td>
                                            <td> Ladies </td>

                                        </tr>
                                        <tr>
                                            <td><b>Nhóm sản phẩm:</b> </td>
                                            <td>Không tay</td>
                                        </tr>
                                        <tr>
                                            <td><b> Kiểu dáng:</b> </td>
                                            <td>Đầm xoè</td>
                                        </tr>
                                        <tr>
                                            <td><b> Độ dài:</b> </td>
                                            <td>Ngang gối</td>
                                        </tr>

                                        <tr>
                                            <td><b> Họa tiết:</b> </td>
                                            <td>Hoa</td>
                                        </tr>

                                        <tr>
                                            <td><b>Chất liệu:</b> </td>
                                            <td>Vải cotton</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div id="baoquan" class="hidden">
                                <div class="content3">
                                    * Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt
                                    đối
                                    không giặt ướt. <br><br>
                                    * Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai giãn.<br><br>
                                    * Vải voan, lụa, chiffon nên giặt bằng tay.<br><br>
                                    * Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br><br>
                                    * Vải thô, tuytsi, kaki có phối màu tương phản hay trang trí voan, lụa, đá cườm thì cần giặt
                                    tay.<br><br>
                                    * Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans. Nếu giặt thì nên lộn trái sản
                                    phẩm
                                    khi giặt, đóng khuy, kéo khóa, không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản
                                    phẩm
                                    khác.<br><br>
                                    * Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân biệt màu và loại vải để tránh
                                    trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng
                                    pha
                                    loãng.<br><br>
                                    * Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức trung bình và nên phân
                                    các
                                    loại sản phẩm cùng màu và cùng loại vải khi giặt.<br><br>
                                    * Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu, nên làm khô
                                    quần
                                    áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.<br><br>
                                    * Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây
                                    phơi
                                    để tránh tình trạng rạn vải.<br><br>
                                    * Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, mát và
                                    không
                                    bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại
                                    vải.<br><br>

                                </div>
                            </div>
                        </div>

                        <script>
                            const clickableTh = document.querySelectorAll(".clickable");

                            clickableTh.forEach(th => {
                                th.addEventListener("click", () => {
                                    const targetId = th.getAttribute("data-toggle");
                                    const targetDiv = document.getElementById(targetId);

                                    if (targetDiv) {
                                        // Hide all content divs
                                        document.querySelectorAll(".hidden").forEach(div => {
                                            div.style.display = "none";
                                        });

                                        // Show the target content div
                                        targetDiv.style.display = "block";


                                        // Change background color of the clicked header
                                        clickableTh.forEach(header => {
                                            header.style.backgroundColor = "";
                                        });
                                        th.style.backgroundColor = " #fcd9d9"; // Change to the desired color
                                    }
                                });
                            });
                        </script>
                    </div>

                </div>

            </div>
        </div>





        <div class="productt-contener">
            <p>SẢN PHẨM LIÊN QUAN</p>
            <div class="product-right-content row ">

                <?php
                // Thực hiện kết nối đến cơ sở dữ liệu
                $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
                if (!$con) {
                    die('Lỗi kết nối: ' . mysqli_connect_error());
                }

                // Thực hiện truy vấn SQL
                $sql = "SELECT * FROM `tbl_product` LIMIT 5";

                $result = mysqli_query($con, $sql);

                // Kiểm tra và xử lý kết quả
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="product-right-content row">';
                        echo '<div class="product-content-item">';
                        $image_path = $row['product_img'];

                        // Check if the image file exists
                        if (file_exists('/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/' . $image_path)) {
                            echo '<img src="/NTKQ/admin/uploadss/' . $image_path . '" alt="Product Image">';
                        } else {
                            echo 'Image file does not exist.';
                        }

                        // Check if the image file exists

                        echo '<h2>' . $row['product_name'] . '</h2>';
                        echo '<h3><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h3>';
                        echo '<h1>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></h1>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo 'Không có dữ liệu.';
                }

                // Đóng kết nối cơ sở dữ liệu
                mysqli_close($con);
                ?>

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