<?php 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","Web_demo");
?>
<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Web_demo";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("sql không kết nối: " . mysqli_connect_error());
}

?>
