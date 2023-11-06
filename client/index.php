<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="icon" type="image/png" href="./img/logo-NTKQ.png">
    <title> NTKQ &#8211; fashion</title>
    <link rel="stylesheet" href="style.css">
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
                    <nav id="primary-menu" class="main-navigation ">
                        <ul id="menu-keva" class="nav-menu click-icon">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1685 current_page_item menu-item-11951 active">
                                <a href="index.php">TRANG CHỦ</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11953">
                                <a href="../client/cartegory/cartegory_DamBody.php">CỬA HÀNG</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11953">
                                <a href="blogs.php">TIN TỨC</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right-items header-items">
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
                                        <li><a href="./cartegory/cartegory_AoSoMi.php">Áo Xinh</a></li>
                                        <li><a href="./cartegory/cartegory_QuanJean.php">Quần Xinh</a></li>
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
        <div class="header-mobile header-contents logo-default hidden-md hidden-lg row">
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
                <a href="index.php" class="logo logo-text">
                    <span class="logo-dark">NTKQ</span>
                </a>
                <p class="site-title">
                    <a href="index.php" rel="home">Kaven fashion</a>
                </p>
                <p class="site-description">váy đầm công sở</p>
            </div>
            <div class="mobile-header-icons row">
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
                    <a href="cart.php" data-toggle="modal" data-target="cart-modal">
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

    <boder>
        <div class="slideshowcontainer">
            <div class="mySlides">
                <img src="img/banner 1.JPG" alt="Image 1">
            </div>

            <div class="mySlides">
                <img src="img/banner 2.JPG" alt="Image 2">
            </div>

            <div class="mySlides">
                <img src="img/banner 3.png" alt="Image 3">
            </div>
        </div>
        <script>
            let slideIndex = 0; // Bắt đầu từ hình ảnh đầu tiên
            showSlides();

            function showSlides() {
                let i;
                const slides = document.getElementsByClassName("mySlides");

                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;

                if (slideIndex > slides.length) {
                    slideIndex = 1; // Quay lại hình ảnh đầu tiên sau khi đã hiển thị tất cả
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 3000); // Tự động gọi lại hàm sau 2 giây
            }
        </script>
        <div class="productt-contener">
            <p>DANH MỤC SẢN PHẨM</p>
            <ul class="productt-list">


                <a href="./cartegory/cartegory_DamBody.php">
                    <li class="productt-item">
                        <img src="img/imgDMSP.png" alt="Sản phẩm 1">
                        <a href="./cartegory/cartegory_DamBody.php">Đầm Body</a>
                    </li>
                </a>

                <a href="./cartegory/cartegory_DamBody.php">
                    <li class="productt-item">
                        <img src="img/imgDMSP2.png" alt="Sản phẩm 1">
                        <a href="./cartegory/cartegory_VayDamMuaHe.php">Váy Đầm</a>
                    </li>
                </a>
                <a href="./cartegory/cartegory_DamBody.php">
                    <li class="productt-item">
                        <img src="img/imgDMSP3.png" alt="Sản phẩm 1">
                        <a href="./cartegory/cartegory_AoSoMi.php">Áo Xinh</a>
                    </li>
                </a>
                <a href="./cartegory/cartegory_DamBody.php">
                    <li class="productt-item">
                        <img src="img/imgDMSP$.png" alt="Sản phẩm 1">
                        <a href="./cartegory/cartegory_QuanJean.php">Quần Xinh</a>
                    </li>
                </a>
            </ul>

        </div>
        <img class="imgnen" src="img/imgNen.png">







        <style>


        </style>


        <?php
        // Thực hiện kết nối đến cơ sở dữ liệu
        $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
        if (!$con) {
            die('Lỗi kết nối: ' . mysqli_connect_error());
        }

        // Thực hiện truy vấn SQL
        $sql = "SELECT * FROM `tbl_product` WHERE `brand_id` = 2 LIMIT 7";

        $result = mysqli_query($con, $sql);

        // Kiểm tra và xử lý kết quả

        if ($result) {
            echo '<div class="productt-contener2">';
            echo '<p>SẢN PHẨM MỚI</p>';
            echo '<div class="autoplay">';


            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product">';
                echo '<a href="./cartegory/cartegory_DamBody.php">';
                $image_path = $row['product_img'];

                // Kiểm tra nếu tệp hình ảnh tồn tại
                $image_url = '/NTKQ/admin/uploadss/' . $image_path;
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $image_url)) {
                    echo '<img src="' . $image_url . '" alt="Product Image">';
                } else {
                    echo '<img src="/path_to_default_image.jpg" alt="Default Image">';
                }

                echo '<h1>' . $row['product_name'] . '</h1>';
                echo '<h6><del>' . number_format($row['product_price'], 0, ',', '.') . '<sup>đ</sup></del></h6>';
                echo '<h2>' . number_format($row['product_price_new'], 0, ',', '.') . '<sup>đ</sup></h2>';
                echo '</a>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        } else {
            echo 'Không có dữ liệu.';
        }
        ?>

        <script>
            $(document).ready(function() {
                $('.autoplay').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button class="slick-prev "><span class="arrow">  &#171; </span></button>',
                    nextArrow: '<button class="slick-next "><span class="arrow">  &#187; </span></button>'
                });
            });
        </script>

        <img class="imgnen2" src="img/imgNen.png">




        <div class="introduce row">

            <div class="introduce-content-left row">
                <svg xmlns="http://www.w3.org/2000/svg" width="1109" height="1344" viewBox="0 0 1109 1344" fill="none">
                    <path d="M135.333 1.13359C133.467 1.40026 127.6 2.33359 122.267 3.13359C94.6667 7.13359 65.7334 22.2003 44.0001 43.8003C19.8667 67.8003 5.06673 99.8003 2.00006 134.867C1.06673 145.267 0.666728 326.734 0.933395 690.334L1.33339 1230.33L4.9334 1243.4C18.0001 1290.6 54.1334 1325.93 104 1339.93L117.333 1343.67H596.667H1076L1082.53 1340.47C1091.33 1336.07 1098.8 1328.33 1103.2 1319.13C1107.87 1309 1108.13 1291.13 1103.6 1281.27C1098.8 1270.73 1093.33 1264.87 1083.6 1260.07L1074.8 1255.67L1044.4 1255.27L1014 1254.87V1208.33V1161.8L1045.07 1161.4C1076 1161 1076 1161 1083.07 1157.27C1092.4 1152.33 1100.13 1144.33 1104.53 1135.13L1108 1127.67L1108.4 586.334C1108.53 232.067 1108.27 42.6003 1107.33 37.8003C1103.87 19.1336 1090.13 5.26692 1071.47 1.66692C1064.8 0.466922 143.867 -0.0664112 135.333 1.13359ZM194 581.934V1072.73L172.4 1071.93C139.733 1070.73 104.8 1073.53 92.4001 1078.33C90.1334 1079.27 90.0001 1056.47 90.0001 612.867C90.0001 314.067 90.5334 143.4 91.3334 138.334C94.6667 117.8 110.8 99.0003 130.4 93.0003C134.267 91.6669 144.933 91.1336 165.067 91.1336L194 91.0003V581.934ZM823.733 208.334C831.6 212.334 840 221.134 843.733 229.4C846 234.467 846.667 238.2 846.667 248.334C846.667 259.267 846.133 262.067 843.2 268.334C838.4 278.6 832.533 284.867 823.6 289.267L816 293L654.667 293.4C542.267 293.667 491.2 293.267 486.4 292.334C473.333 289.534 460.4 277.4 456.4 263.934C455.467 260.867 454.667 253.534 454.667 247.667C454.667 238.2 455.2 235.934 459.067 228.067C464.133 217.667 471.333 210.867 481.2 207C487.867 204.467 492 204.467 652.667 204.734L817.333 205L823.733 208.334ZM822.933 388.2C831.067 391.8 839.733 400.6 843.733 409.4C846 414.467 846.667 418.2 846.667 428.334C846.667 440.067 846.267 441.8 842.267 449.934C837.333 459.934 830.133 466.867 820.533 470.6C815.067 472.867 804.267 473 650.667 473H486.667L479.6 469.8C470.533 465.667 460.4 454.734 457.067 445.4C453.6 435.267 453.867 419 457.6 410.734C463.333 398.067 472 389.934 483.6 386.334C488.267 384.867 518.267 384.6 652.667 384.734L816 385L822.933 388.2ZM663.333 625.534C742 639.267 804.133 699.134 820.667 777C824.267 794.067 825.6 824.734 823.467 841C820.267 864.734 811.6 891.8 800.667 911.667C771.2 965.134 714.8 1003.67 655.333 1011C625.067 1014.6 575.6 1009.53 574.267 1002.47C572.667 994.2 579.733 983.4 591.067 976.734C596.8 973.267 597.067 973.267 609.333 974.867C627.333 977 639.467 976.734 656.4 973.667C688.4 967.934 715.467 954.334 738.4 932.467C789.333 884.067 802.8 809.667 772 747.667C744.4 692.2 691.067 659 629.2 659C578.933 659 532 682.734 501.333 723.667C484.267 746.467 471.333 782.867 471.333 808.467V817.667H501.733C532.4 817.667 535.333 818.067 535.333 822.6C535.333 825.4 455.2 911 452.533 911C451.067 911 434 893.534 410.4 868.2C378.933 834.334 370.667 824.734 370.667 821.934V818.334L402.133 817.934L433.6 817.667L434.533 805.267C438.133 757.534 456.533 715.934 488.533 682.6C521.867 648.067 562.267 628.734 614 622.467C623.333 621.4 648.267 622.867 663.333 625.534ZM632.8 705.667C633.6 705.667 635.067 707.8 636.133 710.334C637.6 714.067 638 724.067 638 763.267V811.667L676.267 833.667C697.2 845.8 715.2 856.467 716.267 857.534C717.333 858.6 718 861.267 717.733 864.2C717.467 867.934 716.533 869.4 713.467 870.867C710.133 872.334 709.067 872.334 705.467 870.6C701.867 869 628.667 826.867 621.733 822.467C619.467 821.134 619.333 817 619.333 766.6C619.333 730.6 619.867 711.267 620.8 709.534C622.4 706.467 627.067 704.2 629.733 705.134C630.8 705.4 632.133 705.667 632.8 705.667ZM575.333 910.467C585.333 913.4 593.2 919.267 597.6 926.734C600.8 932.067 601.333 934.467 601.333 943.134C601.333 952.067 600.8 953.934 597.333 959.8C594.533 964.2 590.133 968.467 584 972.734C571.067 981.667 569.6 983.267 568.667 990.6L568 997L556.533 997.4L545.067 997.8L544.267 993.667C543.067 988.2 545.6 977.267 548.8 973.134C550.267 971.267 555.867 966.734 561.333 963C574.933 953.534 578.267 945.8 572.667 936.734C568.133 929.134 554.667 927.534 546.8 933.8C544.933 935.267 542.667 938.867 541.867 941.8L540.267 947H528.4C516.933 947 516.667 946.867 516.667 943.934C516.667 933.8 523.6 921.534 532.8 915.4C543.333 908.467 561.6 906.334 575.333 910.467ZM563.2 1015.13C574.533 1019.13 573.733 1037 562 1040.47C554.533 1042.73 546.8 1040.33 544 1035C537.2 1021.93 548.533 1010.07 563.2 1015.13ZM924.667 1208.33V1255H528.8C138.267 1255 132.8 1255 124.4 1252.33C109.6 1247.8 98.4001 1238.47 93.0667 1226.07C91.6001 1222.6 90.8001 1217.13 90.8001 1208.33C90.8001 1197.53 91.2001 1194.73 93.8667 1189.67C101.333 1175.67 110.8 1168.07 125.867 1164.07C134.133 1161.93 161.467 1161.8 529.733 1161.8L924.667 1161.67V1208.33Z" fill="white" />
                </svg>
                <h2>Về chúng tôi<br>
                    <a href="#" class="button">XEM NGAY</a>


                </h2>

            </div>


            <div class="introduce-content-right">

                <b>Tên cửa hàng:</b> NTKQ-fashionista <br>

                <b> Mô tả tổng quan: </b><br>
                NTKQ-fashionista là một cửa hàng thời trang độc đáo và phong cách, nơi bạn có thể tìm thấy những bộ
                trang phục đầm và phụ kiện thời trang hàng đầu từ khắp nơi trên thế giới. Với phong cách đa dạng và sự tập
                trung vào việc cung cấp cho khách hàng những sản phẩm chất lượng về đầm thời trang, NTKQ-fashionista đã trở
                thành điểm đến hàng đầu cho những người yêu thời trang.<br>

                <b> Sản phẩm chính:</b><br>
                Cửa hàng chú trọng vào việc cung cấp một loạt các sản phẩm thời trang nữ:<br>

                <i>Bao gồm:</i> Đầm, váy, áo sơ mi, quần áo hàng ngày và trang phục dự tiệc với các mẫu thiết kế thời
                thượng và đa dạng.<br>
                <b> Giá trị đặc biệt:</b><br>
                <i>Chất lượng ưu việt:</i> <br>
                NTKQ-fashionista cam kết chỉ bán sản phẩm chất lượng, được làm từ các chất liệu tốt nhất để đảm bảo sự
                thoải mái và bền đẹp. Vậy nên, NTKQ-fashionista không chỉ làm vừa lòng khách hàng bởi sản phẩm chất
                lượng, NTKQ-fashionista còn khá nhanh nhạy với xu hướng tiếp cận khách hàng trẻ thông qua mạng xã hội.
                Mọi xu hướng mới, sản phẩm mới đều được cập nhật hàng tuần trên các trang mạng xã hội (Facebook,
                Instagram, Tiktok, Shopee…) để phục vụ khách hàng một cách nhanh nhất.<br>
                <i> Phong cách đa dạng: </i><br>
                Cửa hàng cung cấp nhiều phong cách khác nhau, từ thời trang phố đến thiết kế dự tiệc, đáp ứng nhu cầu đa
                dạng của khách hàng.<br>
                <b> Tư vấn thời trang:</b> <br> NTKQ-fashionista có đội ngũ nhân viên tận tâm và am hiểu về thời trang,
                sẵn sàng tư
                vấn và hỗ trợ khách hàng trong việc lựa chọn trang phục và phụ kiện phù hợp.<br>
                <b>Địa chỉ:</b><br>
                NTKQ-fashionista có cửa hàng trực tuyến và cửa hàng vật lý tại địa chỉ sau:<br>

                <i> Cửa hàng trực tuyến: </i> NTKQ-fashionista<br>
                <i> Cửa hàng vật lý: </i>Ở một nơi nào đó<br>
                <b> Liên hệ:</b><br>

                Điện thoại: (+84) 365-402-637<br>
                Email: <br>
                <b> Giờ mở cửa:</b><br>

                Thứ 2 - Thứ 6: 9:00 AM - 8:00 PM<br>
                Thứ 7 - Chủ Nhật: 10:00 AM - 6:00 PM<br>
                <b> NTKQ-fashionista </b> mong muốn mang đến cho bạn trải nghiệm mua sắm thời trang tuyệt vời và đáp ứng
                mọi nhu
                cầu thời trang của bạn. Hãy ghé thăm cửa hàng để khám phá thế giới thời trang đa dạng và độc đáo của
                chúng tôi!<br>
                Một chặng đường dài có các bạn, đồng nghiệp, khách hàng... Mong rằng, trong mỗi hành trình phía trước,
                bạn vẫn luôn đồng hành cùng NTKQ-fashionista. <br>
                <u>-Trân trọng-</u> <br>

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
    <a href="#page" id="gotop">
        <span class="razzi-svg-icon ">
            <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="0" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </span>
    </a>




</body>

</html>