<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Web_demo";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("SQL không kết nối: " . mysqli_connect_error());
}

$cartegoryLinks = array(
    1 => "link_for_cartegory_1.php",
    2 => "link_for_cartegory_2.php",
    3 => "link_for_cartegory_3.php",
    // Add links for more categories as needed
);

$brandLinks = array(
   1 => 'link_for_brand1.php',
    2 => 'link_for_brand2.php',
    3 => 'link_for_brand3.php',
    4 => 'link_for_brand4.php',
    5 => 'link_for_brand5.php',
    6 => 'link_for_brand6.php',
);

echo '<ul>';

$cartegoryCounter = 1;
$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    echo '<li class="cartegory-left-li">';
    
    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    
    echo '<ul>';
    
    $brandCounter = 1; // Initialize the brand counter

    // Execute SQL query to fetch brand data based on cartegory_id
    $brandSql = "SELECT brand_name FROM tbl_brand WHERE cartegory_id = " . $cartegoryRow['cartegory_id'];
    $brandResult = mysqli_query($conn, $brandSql);
    
    if (!$brandResult) {
        die("Query execution error: " . mysqli_error($conn));
    }

    while ($brandRow = mysqli_fetch_assoc($brandResult)) {
        echo '<li>';
        
        echo '<a href="' . (isset($brandLinks[$brandCounter]) ? $brandLinks[$brandCounter] : 'default_link.php') . '" src="source_for_brand_' . $brandCounter . '">';
        echo htmlspecialchars($brandRow['brand_name']); // Sanitize the output
        echo '</a>';
        
        echo '</li>';
        $brandCounter++; // Increment the brand counter
    }

    echo '</ul>';
    echo '</li>';
    $cartegoryCounter++;
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>