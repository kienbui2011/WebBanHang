<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$con = mysqli_connect('localhost', 'root', '', 'Web_demo'); // Change 'your_database_name' to the actual database name
if (!$con) {
    die('Lỗi kết nối: ' . mysqli_connect_error());
}

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Perform the delete operation
    $sql = "DELETE FROM tbl_order_details WHERE order_id = '$order_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Product with ID $order_id has been deleted successfully.";
    } else {
        echo "Error deleting the product with ID $order_id: " . mysqli_error($con);
    }

    // Redirect to another page (e.g., cart.php) after displaying the message
    header('Location: cart.php');
} else {
    echo "No product ID to delete provided.";
}

// Close the database connection
mysqli_close($con);
?>
