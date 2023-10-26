<?php
include "database.php";
?>

<?php

class user
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert_user()
    {
        $fullname = $_POST['fullname'];
        $user_name = $_POST['user_name'];
        $pass_word = $_POST['pass_word'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $add_ress = $_POST['add_ress'];

        $query = "INSERT INTO tbl_user_acccount (
            fullname,
            user_name,
            pass_word,
            email,
            phone,
            add_ress
        ) VALUES (
            '$fullname',
            '$user_name',
            '$pass_word',
            '$email',
            '$phone',
            '$add_ress'
        )";
    
        $result = $this->db->select($query);
        return $result;
    }

    
   public function show_user()
{
    $query = "SELECT id_user_acccount ,fullname, user_name,  phone, email
              FROM tbl_user_acccount
              ORDER BY id_user_acccount DESC";

    $result = $this->db->select($query);
    return $result;
}


public function delete_user($id_user_acccount)
{
    $query = "DELETE FROM tbl_user_acccount WHERE id_user_acccount = '$id_user_acccount'";
    $result = $this->db->delete($query);
    
    header('Location: userlist.php');
    
    return $result;
}
 
public function get_user($user_id) { 
    $query = "SELECT * FROM tbl_user_acccount WHERE id_user_acccount = '$user_id'";
    $result = $this->db->select($query);
    return $result;
}

public function update_user($user_id, $new_data) {
    // $new_data is an associative array containing the fields to be updated and their new values
    $query = "UPDATE tbl_user_acccount SET ";
    foreach ($new_data as $field => $value) {
        $query .= "$field = '$value', ";
    }
    $query = rtrim($query, ', '); // Remove the trailing comma
    $query .= " WHERE id_user_acccount = '$user_id'";
    
    $result = $this->db->update($query);
    header('Location:userlist.php');
        return $result;
}

}
?>