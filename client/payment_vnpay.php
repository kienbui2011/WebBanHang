<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
$vnp_TmnCode = "CZ8R9XAZ"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "PHOXQPOYAMMWFZPMRICTSVLKKGRPRIQQ"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/NTKQ/client/thanks_you.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";

// Kết nối đatabase
$con = mysqli_connect('localhost', 'root', '', 'Web_demo');
if (!$con) {
    die('Lỗi kết nối: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_order_details ";
$sql_order_details = "SELECT cart_code FROM tbl_order WHERE order_user_id = (SELECT MAX(order_user_id) FROM tbl_order)";
$result = mysqli_query($con, $sql);

$totalPrice1 = 0; 
$totalPrice2 = 0;
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $totalPrice1 += $row['price'] * $row['quantity'];
        $totalPrice2 += $row['price'] * $row['quantity'];
    }
}
$totalPrice2 += 30000;
if ($totalPrice2 > 2000000) {
   
    $totalPrice2 -= 30000;
   
} else {
}

$result_order = mysqli_query($con, $sql_order_details);
if ($result_order && mysqli_num_rows($result_order) > 0) {
    $row_order = mysqli_fetch_assoc($result_order);
    $code_order = $row_order['cart_code'];
} else {
    $code_order = "No Order Found";
}

// ---------------------INSERT INTO-------------------------

$sql_insert = "INSERT INTO tbl_order_details_pro (cart_code, order_id, product_id, si_ze, time_added, price, order_quantity) 
              SELECT '$code_order', order_id, product_id, si_ze, time_added, price, quantity
              FROM tbl_order_details";

$sql_delete = "DELETE FROM tbl_order_details";

// Execute the INSERT statement
if (mysqli_query($con, $sql_insert)) {
    echo "Data inserted into tbl_order_details_pro successfully";

    // Execute the DELETE statement to remove the data from tbl_order_details
    if (mysqli_query($con, $sql_delete)) {
        echo "Data deleted from tbl_order_details successfully";
    } else {
        echo "Error deleting data from tbl_order_details: " . mysqli_error($con);
    }
} else {
    echo "Error inserting data: " . mysqli_error($con);
}
// Close the database connection
mysqli_close($con);



$vnp_TxnRef = $code_order; 
$vnp_OrderInfo = 'Thanh toán hoá đơn'; 
$vnp_OrderType = 'billpayment';
$vnp_Amount = $totalPrice2  * 100; 
$vnp_Locale = 'vn';
$vnp_BankCode = 'NCB'; 
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode, // Your VNPAY terminal code
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl, 
    "vnp_TxnRef" => $vnp_TxnRef,
  
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";

foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}

$returnData = array(
    'code' => '00', 
    'message' => 'Thanh toán thành công', 
    'data' => $vnp_Url,
);
if (isset($_POST['redirect'])) {
    header('Location: ' . $vnp_Url);
    die();
} else {
    echo json_encode($returnData);
}

?>
