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
    1 => "cartegory_DamBody.php",
);

$brandLinks = array(
    1 => 'cartegory_DamBody.php',
    2 => 'cartegory_VayDamMuaHe.php',
    3 => 'link_for_brand3.php',
    4 => 'link_for_brand4.php',
    5 => 'link_for_brand5.php',
    6 => 'link_for_brand6.php',
);

echo '<ul>';

$cartegoryCounter = 1; // Start from 1

$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    echo '<ul>';

    $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

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

    // Exit the loop after processing the first category
    break;
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>
<!-- -------------------22222222 ------------>
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
    1 => "cartegory_AoSoMi.php",
  
);

$brandLinks = array(
    1 => 'cartegory_AoSoMi.php',
    2 => 'cartegory_QuanJean.php',
    3 => 'link_for_brand3.php',
    4 => 'link_for_brand4.php',
    5 => 'link_for_brand5.php',
    6 => 'link_for_brand6.php',
);

echo '<ul>';

$cartegoryCounter = 1; // Start from 1
$skipFirstCategory = true; // Flag to skip the first category

$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    if ($skipFirstCategory) {
        $skipFirstCategory = false;
        continue; // Skip the first category
    }

    echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    echo '<ul>';

    $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

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

    // Exit the loop after processing the second category
    break;
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>

<!-- -------------------33333333333 ------------>
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
    1 => "link_for_cartegory_3.php",
   
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

$cartegoryCounter = 1; // Start from 1
$skipCategories = 2; // Skip the first two categories

$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    if ($skipCategories > 0) {
        $skipCategories--;
        continue; // Skip the categories until $skipCategories is 0
    }

    echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    echo '<ul>';

    $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

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

    // Exit the loop after processing the third category
    if ($skipCategories == 0) {
        break;
    }
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>


<!-- ----------------4444444444444------------>
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
    1 => "link_for_cartegory_4.php",
   
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

$cartegoryCounter = 1; // Start from 1
$skipCategories = 3; // Skip the first three categories

$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    if ($skipCategories > 0) {
        $skipCategories--;
        continue; // Skip the categories until $skipCategories is 0
    }

    echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    echo '<ul>';

    $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

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

    // Exit the loop after processing the fourth category
    if ($skipCategories == 0) {
        break;
    }
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>

<!-- -------------------5555555555555555   ----------->
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
    1 => "link_for_cartegory_5.php",
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

$cartegoryCounter = 1; // Start from 1
$skipCategories = 4; // Skip the first four categories

$cartegorySql = "SELECT cartegory_id, cartegory_name FROM tbl_cartegory";
$cartegoryResult = mysqli_query($conn, $cartegorySql);

if (!$cartegoryResult) {
    die("Query execution error: " . mysqli_error($conn));
}

while ($cartegoryRow = mysqli_fetch_assoc($cartegoryResult)) {
    if ($skipCategories > 0) {
        $skipCategories--;
        continue; // Skip the categories until $skipCategories is 0
    }

    echo '<li class="cartegory-left-li">'; // Fix the opening <li> tag

    echo '<a href="' . (isset($cartegoryLinks[$cartegoryCounter]) ? $cartegoryLinks[$cartegoryCounter] : 'default_link.php') . '" src="source_for_cartegory_' . $cartegoryCounter . '">';
    echo htmlspecialchars($cartegoryRow['cartegory_name']); // Sanitize the output
    echo '</a>';
    echo '<ul>';

    $brandCounter = $cartegoryCounter; // Start the brand counter from the same value as cartegoryCounter

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

    // Exit the loop after processing the fifth category
    if ($skipCategories == 0) {
        break;
    }
}

echo '</ul>'; // Close the outer <ul>

mysqli_free_result($cartegoryResult);
mysqli_close($conn);
?>
