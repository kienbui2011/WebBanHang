<!DOCTYPE html>
<html>

<head>
<title> NTKQ &#8211; fashion</title>
<link rel="icon" type="image/png" href="./img/logo-NTKQ.png">
    <link rel="stylesheet" href="style.css">
    <style>
        .anhmanhinh {
            margin-top: 0;
            padding-bottom: 0;
            object-fit: cover; /* Maintain aspect ratio and cover the entire viewport */
        }
        
           .site-content {
            margin-top: -210px;
            
            overflow: hidden; /* To prevent scrollbars */

           }
        
    </style>
</head>


<body>
    <header>
        <a href="index.php">
        <img class="anhmanhinh" src="img/Ảnh màn hình.png" alt="">
        </a>
    </header>
    <!----------------------------------- login ------------------------------------>
    <boder>
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

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['pass_word'];


            $queryAdmin = "SELECT * FROM tbl_admin_account WHERE email = '$email' AND pass_word = '$password'";
            $queryUser = "SELECT * FROM tbl_user_acccount WHERE email = '$email' AND pass_word = '$password'";
            $queryClient = "SELECT * FROM tbl_client_account WHERE email = '$email' AND pass_word = '$password'";

            $resultAdmin = mysqli_query($conn, $queryAdmin);
            $resultUser = mysqli_query($conn, $queryUser);
            $resultClient = mysqli_query($conn, $queryClient);

            if ($resultAdmin && mysqli_num_rows($resultAdmin) == 1) {

                $_SESSION['user_role'] = 'admin';
                header('Location: ../admin/cartegoryadd.php');
                exit;
            } elseif ($resultUser && mysqli_num_rows($resultUser) == 1) {

                $_SESSION['user_role'] = 'user';
                header('Location: ../user/cartegoryadd.php');
                exit;
            } elseif ($resultClient && mysqli_num_rows($resultClient) == 1) {

                $_SESSION['user_role'] = 'user';
                header('Location: index.php');
                exit;
            } else {
                $error_message = "Người dùng với email và mật khẩu này không tồn tại.";
            }
        }


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