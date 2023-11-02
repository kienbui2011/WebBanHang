<?php
include "database.php";
?>

<?php

class order
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

  

    
   public function show_order()
{
    $query = "SELECT order_user_id,full_name,phone,add_ress,note,total, time_added
              FROM tbl_order
              ORDER BY order_user_id DESC";

    $result = $this->db->select($query);
    return $result;
}


public function delete_order($order_user_idr)
{
    $query = "DELETE FROM tbl_order WHERE order_user_id= '$order_user_idr'";
    $result = $this->db->delete($query);
    
    header('Location: orderlist.php');
    
    return $result;
}

}
?>