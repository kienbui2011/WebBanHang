<?php
include "header.php";
?>
<!----------------------------------- cart ------------------------------------>
<section class="cart">
    <div class="cart-top">
        <div class="cart-top-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.6482 6.00041H7L8.15059 17.2751L21.0117 15.9869C21.8149 15.9896 22.5617 15.5754 22.9847 14.8928L25.6212 9.42218C26.0463 8.71912 26.0555 7.84052 25.645 7.12878C25.2347 6.41702 24.4697 5.98476 23.6482 6.00041Z" stroke="#F58484" stroke-width="2.64706" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.883 26.5818C10.8791 27.49 10.1402 28.2236 9.23185 28.2212C8.32345 28.2185 7.58878 27.4807 7.59009 26.5722C7.59138 25.6639 8.32814 24.9282 9.23654 24.9282C9.67414 24.9291 10.0934 25.1038 10.4022 25.4139C10.711 25.7241 10.8839 26.1441 10.883 26.5818Z" stroke="#F58484" stroke-width="2.64706" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7654 26.5818C20.7615 27.49 20.0226 28.2236 19.1141 28.2212C18.2058 28.2185 17.4711 27.4807 17.4724 26.5722C17.4737 25.6639 18.2105 24.9282 19.1189 24.9282C19.5565 24.9291 19.9758 25.1038 20.2846 25.4139C20.5933 25.7241 20.7662 26.1441 20.7654 26.5818Z" stroke="#F58484" stroke-width="2.64706" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.79399 6.15942C6.97461 6.86772 7.69521 7.29549 8.40351 7.11487C9.11181 6.93425 9.53957 6.21364 9.35895 5.50534L6.79399 6.15942ZM6.97529 1.51414L8.2579 1.18707L8.25324 1.16979L6.97529 1.51414ZM6.72294 1.32355V2.64722L6.74133 2.64695L6.72294 1.32355ZM2.32353 2.54164e-05C1.59256 2.54164e-05 1 0.592591 1 1.32355C1 2.05452 1.59256 2.64708 2.32353 2.64708V2.54164e-05ZM9.28215 18.4295C10.0125 18.399 10.5799 17.7824 10.5494 17.052C10.519 16.3217 9.90231 15.7543 9.17197 15.7847L9.28215 18.4295ZM9.22706 21.1765L9.17197 22.4989C9.19032 22.4996 9.20869 22.5 9.22706 22.5V21.1765ZM20.9482 22.5C21.6792 22.5 22.2718 21.9074 22.2718 21.1765C22.2718 20.4455 21.6792 19.8529 20.9482 19.8529V22.5ZM9.35895 5.50534L8.2579 1.18707L5.69281 1.84119L6.79399 6.15942L9.35895 5.50534ZM8.25324 1.16979C8.06514 0.471696 7.42748 -0.00989049 6.70455 0.000154215L6.74133 2.64695C6.25399 2.65373 5.82416 2.32909 5.69735 1.8585L8.25324 1.16979ZM6.72294 2.54164e-05H2.32353V2.64708L6.72294 2.64722V2.54164e-05ZM9.17197 15.7847C7.37225 15.8597 5.95182 17.3405 5.95182 19.1418H8.59888C8.59888 18.7595 8.90027 18.4454 9.28215 18.4295L9.17197 15.7847ZM5.95182 19.1418C5.95182 20.943 7.37225 22.4239 9.17197 22.4989L9.28215 19.8542C8.90027 19.8381 8.59888 19.524 8.59888 19.1418H5.95182ZM9.22706 22.5H20.9482V19.8529H9.22706V22.5Z" fill="#F58484" />
            </svg>
        </div>
        <div class="cart-top-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 40 35" fill="none">
                <rect width="40" height="35" fill="white" />
                <path d="M14.8674 24.4254C15.6398 24.3441 16.1999 23.652 16.1186 22.8795C16.0372 22.1072 15.3451 21.5471 14.5727
                     21.6285L14.8674 24.4254ZM8.6188 24.945L7.93937 23.7139C7.90598 23.7322 7.87335 23.7519 7.84157 23.7731L8.6188 24.945ZM7.8013 27.6112L6.71332 28.5022C6.76063 28.56 6.81247 28.614 6.86835 28.6635L7.8013 27.6112ZM12.6294 29.8444L12.9414 28.4732C12.9036 28.4646 12.8655 28.4576 12.8271 28.4522L12.6294 29.8444ZM20.5325 30.6562L20.5596 29.2504C20.5417 29.25 20.5238 29.25 20.5058 29.2504L20.5325 30.6562ZM28.4356 29.8462L28.238 28.4541C28.1998 28.4595 28.1617 28.4664 28.124 28.4751L28.4356 29.8462ZM33.2638 27.6131L34.1968 28.6654C34.2526 28.6159 34.3044 28.5619 34.3518 28.5041L33.2638 27.6131ZM32.4463 24.9469L33.2234 23.775C33.1918 23.754 33.1593 23.7343 33.1261 23.7159L32.4463 24.9469ZM26.4928 21.6285C25.7204 21.5469 25.0282 22.1068 24.9466 22.8793C24.8651 23.6516 25.4249 24.3439 26.1973 24.4254L26.4928 21.6285ZM20.5325 22.4569L19.5644 23.4769C20.1071 23.9919 20.958 23.9919 21.5006 23.4769L20.5325 22.4569ZM14.9638 17.1713L15.932 16.1513L15.9203 16.1405L14.9638 17.1713ZM14.9638 6.59631L15.9203 7.62714L15.9217 7.62581L14.9638 6.59631ZM26.1013 6.59631L25.1433 7.62581L25.1448 7.62712L26.1013 6.59631ZM26.1013 17.1713L25.1446 16.1404L25.1332 16.1513L26.1013 17.1713ZM20.5325 14.7188L20.508 16.1249L20.5203 16.125L20.5325 14.7188ZM23.1575 12.1426L24.5638 12.1567V12.1444L23.1575 12.1426ZM14.5727 21.6285C12.2445 21.8737 9.98906 22.5827 7.93937 23.7139L9.2982 26.1763C11.0191 25.2266 12.9127 24.6313 14.8674 24.4254L14.5727 21.6285ZM7.84157 23.7731C7.08633 24.2739 6.39492 24.9491 6.12027 25.8448C5.81578 26.8378 6.11707 27.7742 6.71332 28.5022L8.88926 26.7202C8.8116 26.6256 8.80598 26.5843 8.80976 26.5997C8.81584 26.6244 8.81331 26.6559 8.80918 26.6694C8.80815 26.6726 8.8237 26.6197 8.91473 26.5159C9.00658 26.4112 9.1585 26.2746 9.39602 26.1171L7.84157 23.7731ZM6.86835 28.6635C8.43026 30.0484 10.365 30.9433 12.4317 31.2367L12.8271 28.4522C11.3067 28.2362 9.88331 27.5779 8.73424 26.559L6.86835 28.6635ZM12.3174 31.2156C15.0203 31.8306 17.7878 32.115 20.5592 32.0623L20.5058 29.2504C17.9622 29.2986 15.4221 29.0377 12.9414 28.4732L12.3174 31.2156ZM20.5055 32.0623C23.2769 32.1156 26.0444 31.8319 28.7473 31.2176L28.124 28.4751C25.6432 29.0389 23.1031 29.2991 20.5596 29.2504L20.5055 32.0623ZM28.6334 31.2386C30.7001 30.9452 32.6349 30.0502 34.1968 28.6654L32.3308 26.5609C31.1818 27.5797 29.7584 28.2381 28.238 28.4541L28.6334 31.2386ZM34.3518 28.5041C34.9481 27.7761 35.2494 26.8397 34.9449 25.8467C34.6702 24.951 33.9787 24.2758 33.2234 23.775L31.6691 26.1189C31.9066 26.2764 32.0585 26.4131 32.1504 26.5177C32.2413 26.6216 32.2569 26.6745 32.2559 26.6713C32.2518 26.6578 32.2492 26.6263 32.2554 26.6016C32.2591 26.5862 32.2535 26.6274 32.1759 26.7221L34.3518 28.5041ZM33.1261 23.7159C31.0766 22.5842 28.8211 21.8743 26.4928 21.6285L26.1973 24.4254C28.1521 24.6319 30.0457 25.2277 31.7666 26.178L33.1261 23.7159ZM21.5006 21.4369L15.932 16.1513L13.9957 18.1912L19.5644 23.4769L21.5006 21.4369ZM15.9203 16.1405C14.7361 15.0417 14.0632 13.4992 14.0632 11.8838H11.2507C11.2507 14.2816 12.2495 16.5711 14.0073 18.2021L15.9203 16.1405ZM14.0632 11.8838C14.0632 10.2684 14.7361 8.72595 15.9203 7.62714L14.0073 5.56547C12.2495 7.19646 11.2507 9.48594 11.2507 11.8838H14.0632ZM15.9217 7.62581C18.5202 5.20806 22.5449 5.20806 25.1433 7.62581L27.0592 5.56678C23.3811 2.14441 17.684 2.14441 14.0059 5.56678L15.9217 7.62581ZM25.1448 7.62712C26.3289 8.72593 27.0018 10.2684 27.0018 11.8838H29.8143C29.8143 9.48594 28.8168 7.19777 27.0592 5.56678L25.1448 7.62712ZM27.0018 11.8838C27.0018 13.4992 26.3287 15.0416 25.1446 16.1404L27.0579 18.2021C28.8155 16.5711 29.8143 14.2816 29.8143 11.8838H27.0018ZM25.1332 16.1513L19.5644 21.4369L21.5006 23.4769L27.0693 18.1912L25.1332 16.1513ZM20.5571 13.3128C19.9114 13.3015 19.3961 12.7708 19.4039 12.125L16.5916 12.0911C16.5651 14.2841 18.3152 16.0866 20.508 16.1249L20.5571 13.3128ZM19.4039 12.125C19.4117 11.4793 19.9396 10.9612 20.5854 10.9655L20.6042 8.15302C18.4111 8.13838 16.618 9.89809 16.5916 12.0911L19.4039 12.125ZM20.5854 10.9655C21.2312 10.9698 21.7521 11.4949 21.7513 12.1407L24.5638 12.1444C24.5666 9.95121 22.7973 8.16769 20.6042 8.15302L20.5854 10.9655ZM21.7514 12.1284C21.7447 12.7884 21.2048 13.3183 20.5448 13.3126L20.5203 16.125C22.7321 16.1442 24.5414 14.3684 24.5638 12.1567L21.7514 12.1284Z" fill="black" fill-opacity="0.11" />
            </svg>
        </div>
        <div class="cart-top-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 40 35" fill="none">
                <rect width="40" height="35" fill="white" />
                <path d="M6.87433 13.3041H33.1244M12.1244 20.6085H16.4994M9.50002 6H30.4995C32.4326 6 33.9996 7.86727 33.9996 10.1724L34 25.8278C34 28.133 32.433 30 30.5 30L9.50035 29.9997C7.56741 29.9997 6.00042 28.131 6.00038 25.8259L6 10.174C5.99994 7.8688 7.56697 6 9.50002 6Z" stroke="black" stroke-opacity="0.11" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>







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


    <div class="cart-content row">
        <div class="cart-content-left">
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Tên sản phẩm </th>
                    <th>Size</th>
                    <th>SL</th>
                    <th>Thành tiền</th>
                 
                </tr>
                <tr>
                    <td>
                        <img src="/NTKQ/admin/uploadss/<?php echo $row['product_img']; ?>">
                    </td>
                    <td>
                        <?php echo '<p>' . $row['product_name'] . '</p>'; ?>
                    </td>
                    <td>
                        <style>
                            .size {
                                border: 1px solid #ccc;
                                padding: 5px;
                                outline: none;
                            }
                            .size:focus {
                                border: 1px solid #999;
                            }
                        </style>
                        <select class="size" id="sizeSelect" onchange="selectSize(this)">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>

                    </td>
                    <td>
                        <input type="number" id="quantity" min="1" value="1" oninput="calculateTotal()">

                    </td>
                    <td>
                        <p><?php echo number_format($row['product_price_new'], 0, ',', '.') . "đ"; ?></p>

                    </td>
                
                </tr>
            </table>
        </div>
        <div class="cart-content-right">
            <table>
                <tr>
                    <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                </tr>
                <tr>
                    <td>TỔNG TIỀN HÀNG </td>
                    <td>
                        <p><?php echo number_format($row['product_price_new'], 0, ',', '.') . "đ"; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>TIỀN GIAO HÀNG </td>
                    <td>
                        <?php
                        $deliveryCost = 30000;
                        echo "<p id='deliveryCost' >" . number_format($deliveryCost, 0, ',', '.') . "đ</p>";
        
                        ?>
                        <div id="shipping-message" style='color: green; font-weight: bold;'></div>
                    </td>

                </tr>
                <tr>
                    <td>TẠM TÍNH</td>
                    <td>
                        <p style="color: black; font-weight: bold;" id="totalCost">
                            <?php
                            $totalCost = $row['product_price_new'] + $deliveryCost;
                            echo number_format($totalCost, 0, ',', '.') . "đ";
                            ?>
                        </p>
                    </td>
                </tr>
            </table>
            <script>
                function calculateTotal() {
                    // Lấy giá trị số lượng từ input
                    var quantity = document.getElementById("quantity").value;

                    // Lấy giá trị tổng tiền hàng từ PHP
                    var productPrice = <?php echo $row['product_price_new']; ?>;

                    // Lấy giá trị phí giao hàng từ PHP
                    var deliveryCost = <?php echo $deliveryCost; ?>;

                    // Tính toán tổng tiền dựa trên số lượng, tổng tiền hàng, và phí giao hàng
                    var totalPrice = (quantity * productPrice) + deliveryCost;

                    if (quantity * productPrice > 2000000) {
                        totalPrice -= 30000;
                        const shippingMessageElement = document.getElementById("shipping-message");
                        shippingMessageElement.textContent = "Miễn phí ship";
                    } else {
                        (quantity * productPrice < 2000000)
                        totalPrice -= 30000;
                        const shippingMessageElement = document.getElementById("shipping-message");
                        shippingMessageElement.textContent = "Phí ship: 30.000đ";
                    }
                    // Cập nhật kết quả
                    document.getElementById("totalCost").textContent = number_format(totalPrice, 0, ',', '.') + "đ";
                }

                // Hàm number_format để định dạng số
                function number_format(number, decimals, decPoint, thousandsSep) {
                    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
                    var n = !isFinite(+number) ? 0 : +number,
                        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                        sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep,
                        dec = (typeof decPoint === 'undefined') ? '.' : decPoint,
                        s = '';

                    var toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };

                    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                    if (s[0].length > 3) {
                        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                    }
                    if ((s[1] || '').length < prec) {
                        s[1] = s[1] || '';
                        s[1] += new Array(prec - s[1].length + 1).join('0');
                    }
                    return s.join(dec);
                }
            </script>
            <div class="cart-content-right-text">
                <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ </p>
            </div>
            <div class="cart-content-right-button">
                <a href="../cartegory/cartegory_DamBody.php">
                    <button>TIẾP TỤC MUA SẮM</button>
                </a>
                <a href="../delivery.php?id=<?php echo $product_id; ?>">
                    <button>THANH TOÁN</button>
                </a>
                
            </div>
        </div>
    </div>
</section>
<!-----------------------------------footer ---------------------------------->

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
            <p class="razzi-icon-box__description">Kiểm tra hàng trước khi thanh toán
            </p>
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
                            <a href="index.html ">Cảm ơn bạn đã mua hàng của NTKQ-Shop !!!</a>
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