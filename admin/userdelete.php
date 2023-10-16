<?php
include "class/user_class.php";

if(isset($_GET['id_user_acccount'])) {
    $id_user_acccount = $_GET['id_user_acccount'];
    
    $user = new user;
    $delete_user = $user->delete_user($id_user_acccount);
} else {
    echo "Invalid request.";
}
?>
