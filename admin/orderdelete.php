<?php
include "class/order_class.php";

if(isset($_GET['order_user_id'])) {
    $order_user_id = $_GET['order_user_id'];
    
    $order = new order;
    $delete_order = $order->delete_order($order_user_id);
} else {
    echo "Invalid request.";
}
?>
