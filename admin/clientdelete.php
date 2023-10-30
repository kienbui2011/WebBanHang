<?php
include "class/client_class.php";

if(isset($_GET['client_id'])) {
    $client_id = $_GET['client_id'];
    
    $client = new client;
    $delete_client = $client->delete_client($client_id);
} else {
    echo "Invalid request.";
}
?>
