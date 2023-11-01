<?php
include "database.php";
?>

<?php

class client
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

  

    
   public function show_client()
{
    $query = "SELECT client_id ,client_name, email, time_added
              FROM tbl_client_account
              ORDER BY client_id DESC";

    $result = $this->db->select($query);
    return $result;
}


public function delete_client($id_client_account)
{
    $query = "DELETE FROM tbl_client_account WHERE client_id= '$id_client_account'";
    $result = $this->db->delete($query);
    
    header('Location: clientlist.php');
    
    return $result;
}

}
?>