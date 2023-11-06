<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect('localhost', 'root', '', 'Web_demo');
    if (!$con) {
        die('Lỗi kết nối: ' . mysqli_connect_error());
    }

    $full_name = mysqli_real_escape_string($con, $_POST["full_name"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $add_ress = mysqli_real_escape_string($con, $_POST["add_ress"]);
    $note = mysqli_real_escape_string($con, $_POST["note"]);

    $current_time = date('Y-m-d H:i:s');

    $client_id = 123; // Replace 123 with the actual client ID.
    $cart_code = rand(0,9999); 
    
    // Calculate the total price
    $totalPriceQuery = "SELECT SUM(price * quantity) AS total FROM tbl_order_details";
    $totalPriceResult = mysqli_query($con, $totalPriceQuery);
    $totalPriceRow = mysqli_fetch_assoc($totalPriceResult);
    $totalPrice = $totalPriceRow['total'];

    // Insert the order into tbl_order
    $insertOrderQuery = "INSERT INTO tbl_order (client_id, cart_code, full_name, phone, email, add_ress, note, total, time_added) 
            VALUES ('$client_id', '$cart_code', '$full_name', '$phone', '$email', '$add_ress', '$note', '$totalPrice', '$current_time')
            ";
    mysqli_query($con, $insertOrderQuery);

    // Get the newly inserted order_id
    $order_id = mysqli_insert_id($con);


    $updateQuantityQuery = "UPDATE tbl_product AS p
            INNER JOIN tbl_order_details AS od ON p.product_id = od.product_id
            SET p.quantity = p.quantity - od.quantity";

    // Execute the SQL query
    mysqli_query($con, $updateQuantityQuery);

    header('Location: payment.php');

    mysqli_close($con);
}
?>