<?php
include "header.php";
include "slider.php";

?>
<?php
include "config.php"
?>


<?php
// SQL query for users
$queryUsers = "SELECT COUNT(id_user_acccount) as num_users FROM tbl_user_acccount";
// Execute the query for users
$resultUsers = $conn->query($queryUsers);
// Fetch results for users
$rowUsers = $resultUsers->fetch_assoc();



// SQL query to count the number of product_ids in the tbl_product table
$queryCountProducts = "SELECT COUNT(product_id) AS num_products FROM tbl_product";
// Execute the query
$resultCountProducts = $conn->query($queryCountProducts);
// Fetch the result
$rowCountProducts = $resultCountProducts->fetch_assoc();
// Close the result set
$resultCountProducts->close();




// SQL query to count the number of product_ids in the tbl_product table
$queryCountOrder = "SELECT COUNT(order_user_id) AS num_order FROM tbl_order";
// Execute the query
$queryCountOrder = $conn->query($queryCountOrder);
// Fetch the result
$rowCountOrder = $queryCountOrder->fetch_assoc();
// Close the result set
$queryCountOrder->close();





// SQL query to fetch all 'total' values from the 'tbl_order' table
$queryTotalValues = "SELECT total FROM tbl_order";
$resultTotalValues = $conn->query($queryTotalValues);
$totalSum = 0;

while ($row = $resultTotalValues->fetch_assoc()) {
    $total = $row['total'];
    if ($total < 2000000) {
        $totalSum += $total + 30000;
    } else {
        $totalSum += $total;
    }
}
$resultTotalValues->close();
?>

<style>
    .statistics-list {
        margin-top: 50px;
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        /* Căn giữa theo chiều ngang */
        align-items: center;
        /* Căn giữa theo chiều dọc */
    }

    .statistics-list a {
        border: 3px solid #F5A68B;
        padding: 10px 20px;
        margin-right: 15px;
        align-items: center;
        /* Căn ảnh và văn bản theo chiều dọc */
        background-color: #D5EAFE;

    }

    .statistics-item h2 {

        margin-top: 12px;
        color: gray;

    }

    .statistics-item h2:hover,
    svg:hover {
        color: #F97978;
    }

    .statistics-item svg {
        height: 50px;
        width: 50px;
        margin-left: 20px;
    }

    .statistics-item a:hover {
        color: #ff2612;
    }

    .statistics-list p {
        text-align: center;
        font-weight: bold;
        font-size: 40px;
        color: gray;
    }
</style>


<div class="admin-content-right">
    <div class="admin-content-right-statistics">
        <h1>Bảng Thống Kê</h1>

        <ul class="statistics-list row">

            <a href="userlist.php">
                <li class="statistics-item row">
                    <h2>Nhân Viên</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.375 3.375C13.375 4.68668 12.3117 5.75 11 5.75C9.68832 5.75 8.625 4.68668 8.625 3.375C8.625 2.06332 9.68832 1 11 1C12.3117 1 13.375 2.06332 13.375 3.375Z" stroke="black" stroke-opacity="0.40" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 11.775C15.75 13.575 13.623 15.042 11 15.042C8.377 15.042 6.25 13.579 6.25 11.775C6.25 9.97097 8.377 8.50897 11 8.50897C13.623 8.50897 15.75 9.97097 15.75 11.775Z" stroke="black" stroke-opacity="0.40" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4 5.55301C18.4101 6.13153 18.0695 6.65876 17.5379 6.88722C17.0063 7.11569 16.3893 7.00002 15.9765 6.59451C15.5638 6.18901 15.4372 5.57418 15.6562 5.03861C15.8753 4.50305 16.3964 4.1531 16.975 4.15301C17.755 4.14635 18.3928 4.77301 18.4 5.55301V5.55301Z" stroke="black" stroke-opacity="0.40" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.60007 5.55301C3.58992 6.13153 3.9306 6.65876 4.4622 6.88722C4.99381 7.11569 5.61078 7.00002 6.02353 6.59451C6.43627 6.18901 6.56284 5.57418 6.34382 5.03861C6.12481 4.50305 5.60369 4.1531 5.02507 4.15301C4.24507 4.14635 3.60722 4.77301 3.60007 5.55301Z" stroke="black" stroke-opacity="0.40" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.7169 13.362C17.3043 13.325 16.9399 13.6295 16.903 14.0421C16.866 14.4547 17.1705 14.8191 17.5831 14.856L17.7169 13.362ZM20.5 11.775L21.2455 11.8567C21.2515 11.8023 21.2515 11.7474 21.2455 11.693L20.5 11.775ZM17.5831 8.69498C17.1705 8.73194 16.866 9.09634 16.903 9.50891C16.9399 9.92147 17.3044 10.226 17.7169 10.189L17.5831 8.69498ZM4.41689 14.856C4.82945 14.8191 5.13395 14.4547 5.09701 14.0421C5.06007 13.6295 4.69567 13.325 4.28311 13.362L4.41689 14.856ZM1.5 11.775L0.754491 11.693C0.748513 11.7474 0.748503 11.8023 0.75446 11.8567L1.5 11.775ZM4.28308 10.189C4.69564 10.226 5.06005 9.92147 5.09701 9.50891C5.13397 9.09634 4.82948 8.73194 4.41692 8.69498L4.28308 10.189ZM17.5831 14.856C19.4169 15.0202 21.045 13.6869 21.2455 11.8567L19.7545 11.6933C19.6429 12.7115 18.7371 13.4533 17.7169 13.362L17.5831 14.856ZM21.2455 11.693C21.0444 9.86333 19.4165 8.53073 17.5831 8.69498L17.7169 10.189C18.7369 10.0976 19.6426 10.839 19.7545 11.8569L21.2455 11.693ZM4.28311 13.362C3.26287 13.4533 2.35709 12.7115 2.24554 11.6933L0.75446 11.8567C0.954964 13.6869 2.58306 15.0202 4.41689 14.856L4.28311 13.362ZM2.24551 11.8569C2.35742 10.839 3.26309 10.0976 4.28308 10.189L4.41692 8.69498C2.58354 8.53073 0.955639 9.86333 0.754491 11.693L2.24551 11.8569Z" fill="black" fill-opacity="0.40" />
                    </svg>

                </li>
                <p> <?php echo $rowUsers['num_users']; ?></p>
            </a>

            <a href="productlist.php">
                <li class="statistics-item row">
                    <h2>Sản Phẩm</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                        <path d="M9.45 8.082C9.45 7.72302 9.15899 7.432 8.8 7.432C8.44102 7.432 8.15 7.72302 8.15 8.082H9.45ZM8.8 15H8.15C8.15 15.2158 8.25713 15.4176 8.43593 15.5385C8.61473 15.6594 8.84187 15.6836 9.04216 15.6032L8.8 15ZM14.544 12.694L14.7862 13.2972C15.0325 13.1983 15.194 12.9595 15.194 12.694H14.544ZM15.194 7.9C15.194 7.54102 14.903 7.25 14.544 7.25C14.185 7.25 13.894 7.54102 13.894 7.9H15.194ZM9.19466 7.56553C8.90943 7.34756 8.5015 7.4021 8.28353 7.68734C8.06556 7.97257 8.1201 8.3805 8.40534 8.59847L9.19466 7.56553ZM10.848 9.647L10.4533 10.1635C10.6466 10.3111 10.9061 10.3386 11.126 10.2346L10.848 9.647ZM14.819 8.48757C15.1435 8.33406 15.2821 7.94655 15.1286 7.62204C14.9751 7.29754 14.5876 7.15892 14.263 7.31243L14.819 8.48757ZM8.55784 7.47879C8.22469 7.61254 8.06305 7.99102 8.1968 8.32416C8.33054 8.65731 8.70902 8.81895 9.04216 8.68521L8.55784 7.47879ZM14.7862 6.37921C15.1193 6.24546 15.2809 5.86698 15.1472 5.53384C15.0135 5.20069 14.635 5.03905 14.3018 5.17279L14.7862 6.37921ZM14.3019 6.37924C14.6351 6.51294 15.0135 6.35123 15.1472 6.01807C15.2809 5.68491 15.1192 5.30645 14.7861 5.17276L14.3019 6.37924ZM9.04207 2.86776C8.70891 2.73406 8.33045 2.89577 8.19676 3.22893C8.06307 3.56209 8.22477 3.94055 8.55793 4.07424L9.04207 2.86776ZM14.8625 5.21039C14.5496 5.03448 14.1533 5.14555 13.9774 5.45847C13.8015 5.7714 13.9125 6.16769 14.2255 6.34361L14.8625 5.21039ZM16.595 6.93L16.8726 7.51776C17.0924 7.41392 17.236 7.19605 17.2446 6.95305C17.2532 6.71005 17.1255 6.48255 16.9135 6.36339L16.595 6.93ZM14.2634 7.31224C13.9388 7.46554 13.7999 7.85296 13.9532 8.17757C14.1065 8.50218 14.494 8.64105 14.8186 8.48776L14.2634 7.31224ZM14.0591 5.33983C13.8182 5.606 13.8387 6.01704 14.1048 6.25793C14.371 6.49882 14.782 6.47833 15.0229 6.21217L14.0591 5.33983ZM17 3.059L17.4819 3.49517C17.6291 3.33251 17.6844 3.10657 17.6288 2.89434C17.5732 2.68211 17.4143 2.51224 17.2063 2.44261L17 3.059ZM10.848 1L11.0543 0.383607C10.8 0.298481 10.5194 0.378319 10.348 0.584617L10.848 1ZM8.29504 3.05562C8.06563 3.33174 8.1035 3.74155 8.37962 3.97096C8.65574 4.20037 9.06555 4.1625 9.29496 3.88638L8.29504 3.05562ZM2.80893 5.17276C2.47577 5.30645 2.31407 5.68491 2.44776 6.01807C2.58145 6.35123 2.95991 6.51294 3.29307 6.37924L2.80893 5.17276ZM9.03707 4.07424C9.37023 3.94055 9.53194 3.56209 9.39824 3.22893C9.26455 2.89577 8.88609 2.73406 8.55293 2.86776L9.03707 4.07424ZM3.36953 6.34261C3.68245 6.16669 3.79352 5.7704 3.61761 5.45747C3.44169 5.14455 3.0454 5.03348 2.73247 5.20939L3.36953 6.34261ZM1 6.929L0.681475 6.36239C0.469614 6.4815 0.341897 6.70884 0.350398 6.95174C0.358899 7.19463 0.502198 7.41249 0.721867 7.51649L1 6.929ZM2.77287 8.48749C3.09733 8.6411 3.48488 8.50259 3.63849 8.17813C3.7921 7.85367 3.65359 7.46612 3.32913 7.31251L2.77287 8.48749ZM3.29316 5.17279C2.96002 5.03905 2.58154 5.20069 2.44779 5.53384C2.31405 5.86698 2.47569 6.24546 2.80884 6.37921L3.29316 5.17279ZM8.55284 8.68521C8.88598 8.81895 9.26446 8.65731 9.39821 8.32416C9.53195 7.99102 9.37031 7.61254 9.03716 7.47879L8.55284 8.68521ZM2.5654 6.20808C2.80404 6.47627 3.2149 6.50023 3.48308 6.2616C3.75127 6.02296 3.77523 5.6121 3.5366 5.34392L2.5654 6.20808ZM1 3.471L0.743137 2.87391C0.551295 2.95643 0.410791 3.12611 0.365482 3.32998C0.320173 3.53385 0.375579 3.74707 0.514405 3.90308L1 3.471ZM6.744 1L7.24416 0.584856C7.06007 0.363071 6.75191 0.289005 6.48714 0.402906L6.744 1ZM8.29484 3.88614C8.52412 4.16237 8.93392 4.20043 9.21014 3.97116C9.48637 3.74188 9.52443 3.33208 9.29516 3.05586L8.29484 3.88614ZM9.445 8.083C9.445 7.72402 9.15399 7.433 8.795 7.433C8.43602 7.433 8.145 7.72402 8.145 8.083H9.445ZM8.795 15L8.55284 15.6032C8.75313 15.6836 8.98027 15.6594 9.15907 15.5385C9.33787 15.4176 9.445 15.2158 9.445 15H8.795ZM3.051 12.694H2.401C2.401 12.9595 2.56246 13.1983 2.80884 13.2972L3.051 12.694ZM3.701 7.9C3.701 7.54102 3.40999 7.25 3.051 7.25C2.69202 7.25 2.401 7.54102 2.401 7.9H3.701ZM9.1893 8.59875C9.47469 8.38098 9.52951 7.97309 9.31175 7.6877C9.09398 7.40231 8.68609 7.34749 8.4007 7.56525L9.1893 8.59875ZM6.744 9.647L6.46605 10.2346C6.68575 10.3385 6.94508 10.3112 7.1383 10.1637L6.744 9.647ZM3.32896 7.31243C3.00445 7.15892 2.61694 7.29754 2.46343 7.62204C2.30992 7.94655 2.44854 8.33406 2.77304 8.48757L3.32896 7.31243ZM8.15 8.082V15H9.45V8.082H8.15ZM9.04216 15.6032L14.7862 13.2972L14.3018 12.0908L8.55784 14.3968L9.04216 15.6032ZM15.194 12.694V7.9H13.894V12.694H15.194ZM8.40534 8.59847L10.4533 10.1635L11.2427 9.13053L9.19466 7.56553L8.40534 8.59847ZM11.126 10.2346L14.819 8.48757L14.263 7.31243L10.57 9.05943L11.126 10.2346ZM9.04216 8.68521L14.7862 6.37921L14.3018 5.17279L8.55784 7.47879L9.04216 8.68521ZM14.7861 5.17276L9.04207 2.86776L8.55793 4.07424L14.3019 6.37924L14.7861 5.17276ZM14.2255 6.34361L16.2765 7.49661L16.9135 6.36339L14.8625 5.21039L14.2255 6.34361ZM16.3174 6.34224L14.2634 7.31224L14.8186 8.48776L16.8726 7.51776L16.3174 6.34224ZM15.0229 6.21217L17.4819 3.49517L16.5181 2.62283L14.0591 5.33983L15.0229 6.21217ZM17.2063 2.44261L11.0543 0.383607L10.6417 1.61639L16.7937 3.67539L17.2063 2.44261ZM10.348 0.584617L8.29504 3.05562L9.29496 3.88638L11.348 1.41538L10.348 0.584617ZM3.29307 6.37924L9.03707 4.07424L8.55293 2.86776L2.80893 5.17276L3.29307 6.37924ZM2.73247 5.20939L0.681475 6.36239L1.31853 7.49561L3.36953 6.34261L2.73247 5.20939ZM0.721867 7.51649L2.77287 8.48749L3.32913 7.31251L1.27813 6.34151L0.721867 7.51649ZM2.80884 6.37921L8.55284 8.68521L9.03716 7.47879L3.29316 5.17279L2.80884 6.37921ZM3.5366 5.34392L1.4856 3.03892L0.514405 3.90308L2.5654 6.20808L3.5366 5.34392ZM1.25686 4.06809L7.00086 1.59709L6.48714 0.402906L0.743137 2.87391L1.25686 4.06809ZM6.24384 1.41514L8.29484 3.88614L9.29516 3.05586L7.24416 0.584856L6.24384 1.41514ZM8.145 8.083V15H9.445V8.083H8.145ZM9.03716 14.3968L3.29316 12.0908L2.80884 13.2972L8.55284 15.6032L9.03716 14.3968ZM3.701 12.694V7.9H2.401V12.694H3.701ZM8.4007 7.56525L6.3497 9.13025L7.1383 10.1637L9.1893 8.59875L8.4007 7.56525ZM7.02196 9.05943L3.32896 7.31243L2.77304 8.48757L6.46605 10.2346L7.02196 9.05943Z" fill="black" fill-opacity="0.35" />
                    </svg>
                </li>
                <p> <?php echo $rowCountProducts['num_products']; ?></p>
            </a>



            <a href="orderlist.php">
                <li class="statistics-item row">
                    <h2>Đơn Hàng</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M19.6707 7.79963L11.3568 2.99963L3.04297 7.79963V17.3996L11.3568 22.1996M19.6707 7.79963L11.3568 13.1996M19.6707 7.79963V12.5996M11.3568 22.1996V13.1996M11.3568 22.1996L13.1562 21.1607M11.3568 13.1996L3.55681 8.39963M14.9568 10.1996L7.15681 5.39963M16.1568 18.5996L17.3568 19.7996L20.9568 16.1996" stroke="black" stroke-opacity="0.38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </li>
                <p> <?php echo $rowCountOrder['num_order']; ?></p>
            </a>

            <a href="orderlist.php">
                <li class="statistics-item row">
                    <h2>Doanh Thu</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 18 18" fill="none">
                        <path d="M0.536954 4.22826C0.110732 4.48399 -0.0274769 5.03682 0.228256 5.46305C0.48399 5.88927 1.03682 6.02748 1.46305 5.77174L0.536954 4.22826ZM6 2L6.54 1.28C6.24726 1.06045 5.85073 1.03999 5.53695 1.22826L6 2ZM10 5L9.46 5.72C9.78835 5.96626 10.2417 5.95918 10.5622 5.70278L10 5ZM15.5622 1.70278C15.9504 1.39227 16.0133 0.82591 15.7028 0.437774C15.3923 0.0496387 14.8259 -0.0132905 14.4378 0.297218L15.5622 1.70278ZM13.1 15C13.1 15.4971 13.5029 15.9 14 15.9C14.4971 15.9 14.9 15.4971 14.9 15H13.1ZM14.9 7C14.9 6.50294 14.4971 6.1 14 6.1C13.5029 6.1 13.1 6.50294 13.1 7H14.9ZM5.1 15C5.1 15.4971 5.50294 15.9 6 15.9C6.49706 15.9 6.9 15.4971 6.9 15H5.1ZM6.9 7C6.9 6.50294 6.49706 6.1 6 6.1C5.50294 6.1 5.1 6.50294 5.1 7H6.9ZM9.1 15C9.1 15.4971 9.50294 15.9 10 15.9C10.4971 15.9 10.9 15.4971 10.9 15H9.1ZM10.9 10C10.9 9.50294 10.4971 9.1 10 9.1C9.50294 9.1 9.1 9.50294 9.1 10H10.9ZM1.1 15C1.1 15.4971 1.50294 15.9 2 15.9C2.49706 15.9 2.9 15.4971 2.9 15H1.1ZM2.9 10C2.9 9.50294 2.49706 9.1 2 9.1C1.50294 9.1 1.1 9.50294 1.1 10H2.9ZM1.46305 5.77174L6.46305 2.77174L5.53695 1.22826L0.536954 4.22826L1.46305 5.77174ZM5.46 2.72L9.46 5.72L10.54 4.28L6.54 1.28L5.46 2.72ZM10.5622 5.70278L15.5622 1.70278L14.4378 0.297218L9.43777 4.29722L10.5622 5.70278ZM14.9 15V7H13.1V15H14.9ZM6.9 15V7H5.1V15H6.9ZM10.9 15V10H9.1V15H10.9ZM2.9 15V10H1.1V15H2.9Z" fill="black" fill-opacity="0.39" />
                    </svg>
                </li>
                <p><?php echo number_format($totalSum, 0, '.', '.'); ?>đ</p>

            </a>
        </ul>

    </div>

</div>
</section>
</body>

</html>
