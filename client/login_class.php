<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Web_demo";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("sql không kết nối: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html>

<head>
    <title> NTKQ &#8211; fashion</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <header id="site-header" class="site-header  site-header__border">
        <div class="razzi-promotion">
            <p id="tenTV">Nhung - Trang - Kiên - Quyên</p>
        </div>

        <div class="header-main header-contents hidden-xs hidden-sm has-center menu-center">
            <div class="razzi-header-container container">
                <div class="header-left-items">
                    <div class="site-branding">
                        <a href="index.php" class="logo logo-text">
                            <span class="logo-dark">NTKQ-fashionista</span>

                        </a>
                        <p class="site-title">
                            <a href="index.php" rel="home">NTKQ fashion</a>
                        </p>
                        <p class="site-description">váy đầm công sở</p>
                    </div>
                </div>
                <div class="header-center-items header-items  has-menu has-logo">
                    <nav id="primary-menu" class="main-navigation primary-navigation">
                        <ul id="menu-keva" class="nav-menu click-icon">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1685 current_page_item menu-item-11951 active">
                                <a href="index.php">TRANG CHỦ</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11953">
                                <a href="../client/cartegory/cartegory_DamBody.php">CỬA HÀNG</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11952">
                                <a href="blogs.html">TIN TỨC</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right-items header-items  has-logo">
                    <div class="header-account">
                        <a class="account-icon" href="login.php" data-toggle="modal" data-target="account-modal">
                            <span class="razzi-svg-icon ">
                                <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="header-cart">
                        <a href="cart.php" data-toggle="modal" data-target="cart-modal">
                            <span class="razzi-svg-icon icon-cart">
                                <svg aria-hidden="true" role="img" focusable="false" width="29" height="29" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"></path>
                                    <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <span class="counter cart-counter hidden"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-contents hidden-xs hidden-sm has-center no-sides">
            <div class="razzi-header-container container">
                <div class="header-center-items header-items  has-logo">
                    <div class="header-department ">
                        <span class="department-icon">
                            <span class="razzi-svg-icon">
                                <svg id="show-menu-button" aria-hidden="true" role="img" focusable="false" width="29" height="" viewBox="0 0 24 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 0H0V2.10674H24V0Z" />
                                    <path d="M24 7.88215H0V9.98889H24V7.88215Z" />
                                    <path d="M24 15.8925H0V18H24V15.8925Z" />
                                </svg>
                            </span>
                            <span class="department-text">TÌM KIẾM</span>
                        </span>
                        <div class="department-content" id="department-content">
                            <!-- Your menu items go here -->
                            <ul>
                                <li class="category-left-li"><a href="./cartegory/cartegory_DamBody.php"><u>KIỂU
                                            ĐẦM</u></a>
                                    <ul>
                                        <li><a href="./cartegory/cartegory_DamBody.php">Váy đầm</a></li>
                                        <li><a href="./cartegory/cartegory_VayDamMuaHe.php">Váy đầm mùa hè</a></li>
                                    </ul>
                                </li>
                                <li class="category-left-li"><a href="./cartegory/cartegory_AoSoMi.php"><u>QUẦN
                                            ÁO</u></a>
                                    <ul>
                                        <li><a href="./cartegory/cartegory_AoSoMi.php">Áo Sơ Mi</a></li>
                                        <li><a href="./cartegory/cartegory_QuanJean.php">Quần Jean</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <style>
                            .department-content ul {
                                background-color: rgba(255, 255, 255, 0.7);

                                padding: 15px;
                                list-style-type: none;
                                backdrop-filter: blur(5px);

                            }

                            /* Style the list items (li) */
                            .department-content ul li {
                                margin: 5px 0;
                            }

                            .department-content ul li a {
                                text-decoration: none;
                                color: #414040;

                            }

                            .department-content ul li a u {
                                text-decoration: none;
                                /* Remove underline from links */
                                color: #414040;
                                /* Set link color */
                                font-weight: bold;

                            }

                            .department-content ul li:hover {
                                background-color: #F2C3C3
                            }

                            .department-content ul li a:hover {
                                color: rgb(252, 86, 86);
                                font-weight: bold;
                            }
                        </style>

                        <script>
                            const showMenuButton = document.getElementById("show-menu-button");
                            const departmentContent = document.getElementById("department-content");


                            departmentContent.style.display = "none";
                            showMenuButton.addEventListener("click", function() {

                                if (departmentContent.style.display === "none") {
                                    departmentContent.style.display = "block";
                                } else {
                                    departmentContent.style.display = "none";
                                }
                            });
                        </script>

                    </div>
                    <!-- .header-department -->
                    <div class="header-search ra-search-form search-type-form-cat search-form-type form-type-form-cat">
                        <form method="get" class="form-search" action="#">
                            <div class="search-fields">
                                <input type="text" name="s" class="search-field" value="" placeholder="Điền tên hoặc mã sản phẩm" autocomplete="off">

                                <span class="razzi-loading"></span>
                            </div>
                            <button class="search-submit" type="submit">
                                <span class="razzi-svg-icon ">
                                    <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </span>
                            </button>
                        </form>
                        <div class="search-results woocommerce"></div>
                    </div>
                    <div class="numberphone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none">
                            <path d="M21 17.697C21 18.021 20.9279 18.354 20.7747 18.678C20.6214 19.002 20.4231 19.308 20.1617 19.596C19.7201 20.082 19.2334 20.433 18.6835 20.658C18.1427 20.883 17.5568 21 16.9259 21C16.0065 21 15.024 20.784 13.9875 20.343C12.9509 19.902 11.9144 19.308 10.8868 18.561C9.85028 17.805 8.8678 16.968 7.9304 16.041C7.002 15.105 6.16375 14.124 5.41562 13.098C4.67651 12.072 4.08162 11.046 3.64897 10.029C3.21632 9.003 3 8.022 3 7.086C3 6.474 3.10816 5.889 3.32449 5.349C3.54081 4.8 3.88333 4.296 4.36104 3.846C4.93791 3.279 5.56885 3 6.23585 3C6.48823 3 6.74061 3.054 6.96595 3.162C7.2003 3.27 7.40761 3.432 7.56986 3.666L9.66099 6.609C9.82324 6.834 9.94041 7.041 10.0215 7.239C10.1027 7.428 10.1477 7.617 10.1477 7.788C10.1477 8.004 10.0846 8.22 9.95844 8.427C9.84126 8.634 9.67001 8.85 9.45368 9.066L8.76865 9.777C8.6695 9.876 8.62444 9.993 8.62444 10.137C8.62444 10.209 8.63345 10.272 8.65148 10.344C8.67852 10.416 8.70556 10.47 8.72359 10.524C8.88583 10.821 9.16525 11.208 9.56184 11.676C9.96745 12.144 10.4001 12.621 10.8688 13.098C11.3555 13.575 11.8242 14.016 12.302 14.421C12.7707 14.817 13.1582 15.087 13.4647 15.249C13.5098 15.267 13.5638 15.294 13.6269 15.321C13.699 15.348 13.7712 15.357 13.8523 15.357C14.0055 15.357 14.1227 15.303 14.2218 15.204L14.9069 14.529C15.1322 14.304 15.3485 14.133 15.5558 14.025C15.7631 13.899 15.9705 13.836 16.1958 13.836C16.3671 13.836 16.5473 13.872 16.7456 13.953C16.9439 14.034 17.1512 14.151 17.3766 14.304L20.36 16.419C20.5944 16.581 20.7566 16.77 20.8558 16.995C20.9459 17.22 21 17.445 21 17.697Z" stroke="#1B1B1B" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>
                        <p>Hỗ trợ khách hàng<br> 0365402637</p>
                    </div>
                    <div class="local">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none">
                            <path d="M12.0001 21.6C12.0001 21.6 19.5131 14.9218 19.5131 9.91307C19.5131 5.76373 16.1494 2.40002 12.0001 2.40002C7.85076 2.40002 4.48706 5.76373 4.48706 9.91307C4.48706 14.9218 12.0001 21.6 12.0001 21.6Z" stroke="black" stroke-width="1.8" />
                            <path d="M14.4004 9.60018C14.4004 10.9257 13.3259 12.0002 12.0004 12.0002C10.6749 12.0002 9.60041 10.9257 9.60041 9.60018C9.60041 8.27469 10.6749 7.20018 12.0004 7.20018C13.3259 7.20018 14.4004 8.27469 14.4004 9.60018Z" stroke="black" stroke-width="1.7" />
                        </svg>
                        <p> Ở một nơi<br> nào đó</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dien thoai -->
        <div class="header-mobile  header-contents logo-default hidden-md hidden-lg">
            <div class="mobile-menu">
                <a href="#" class="mobile-menu-toggle hamburger-menu" data-toggle="modal" data-target="mobile-menu-modal">
                    <span class="razzi-svg-icon ">
                        <svg aria-hidden="true" role="img" focusable="false" width="24" height="18" viewBox="0 0 24 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 0H0V2.10674H24V0Z" />
                            <path d="M24 7.88215H0V9.98889H24V7.88215Z" />
                            <path d="M24 15.8925H0V18H24V15.8925Z" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="site-branding">
                <a href="#" class="logo logo-text">
                    <span class="logo-dark">NTKQ</span>
                </a>
                <p class="site-title">
                    <a href="#" rel="home">Kaven fashion</a>
                </p>
                <p class="site-description">váy đầm công sở</p>
            </div>
            <div class="mobile-header-icons">
                <div class="mobile-search">
                    <a href="#" class="search-icon" data-toggle="modal" data-target="search-modal">
                        <span class="razzi-svg-icon ">
                            <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="header-cart">
                    <a href="" data-toggle="modal" data-target="cart-modal">
                        <span class="razzi-svg-icon icon-cart">
                            <svg aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"></path>
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <span class="counter cart-counter hidden">0</span>
                    </a>
                </div>
                <div class="header-account">
                    <a class="account-icon" href="login.php" data-toggle="modal" data-target="account-modal">
                        <span class="razzi-svg-icon ">
                            <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </header>
    <!----------------------------------- login ------------------------------------>



    <boder>
        <?php
      

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['pass_word'];

            $queryClient = "SELECT * FROM tbl_client_account WHERE email = '$email' AND pass_word = '$password'";
            $resultClient = mysqli_query($conn, $queryClient);

            if ($resultClient && mysqli_num_rows($resultClient) == 1) {
                $_SESSION['user_role'] = 'client';
               
                exit;
            } else {
                $error_message = "Người dùng với email và mật khẩu này không tồn tại.";
            }
        }
        // Rest of your PHP code here
        ?>


        <div class="site-content">
            <div class="login">
                <h2>Đăng nhập</h2>
                <form method="POST">
                    <p class="box-login">
                        <input type="email" name="email" required placeholder="Email Address *" style="width: 100%;"><br><br>
                    </p>
                    <p class="box-login">
                        <input type="password" name="pass_word" required placeholder="Password *" style="width: 100%;"><br><br>
                    </p>
                    <?php if (isset($error_message)) { ?>
                        <div style="color: red; font-weight: bold; font-size: 14px;"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <p>
                        <label class="checkBox">
                            <a href="recovery.html"><u>Quên mật khẩu</u></a>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <a href="register.php"><u>Đăng ký</u></a>
                        </label>
                    </p>
                    <input type="submit" value="Đăng nhập">
                </form>
            </div>
        </div>
    </boder>


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