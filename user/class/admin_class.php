<?php
include "database.php";
?>

<?php

class admin
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    
   public function show_admin()
{
    $query = "SELECT id_admin_account , admin_name, phone,  email
              FROM tbl_admin_account
              ORDER BY id_admin_account DESC";

    $result = $this->db->select($query);
    return $result;
}





















public function delete_admin($id_admin_acccount)
{
    $query = "DELETE FROM tbl_admin_acccount WHERE id_admin_acccount = '$id_admin_acccount'";
    $result = $this->db->delete($query);
    
    header('Location: adminlist.php');
    
    return $result;
}

public function get_admin($admin_id) {
    $query = "SELECT * FROM tbl_admin_acccount WHERE id_admin_acccount = '$admin_id'";
    $result = $this->db->select($query);
    return $result;
}



public function update_admin($admin_id, $new_data) {
    // $new_data is an associative array containing the fields to be updated and their new values
    $query = "UPDATE tbl_admin_acccount SET ";
    foreach ($new_data as $field => $value) {
        $query .= "$field = '$value', ";
    }
    $query = rtrim($query, ', '); // Remove the trailing comma
    $query .= " WHERE id_admin_acccount = '$admin_id'";
    
    $result = $this->db->update($query);
    return $result;
}

}
?>