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

        $user_name = $_POST['user_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $user_price = $_POST['user_price'];
        $user_price_new = $_POST['user_price_new'];
        $quantity = $_POST['quantity'];
        $user_desc = $_POST['user_desc'];
        $user_details = $_POST['user_details'];
        $user_img = $_FILES['user_img']['name'];
       
        $upload_dir = "uploadss/"; // Thư mục đích để lưu tệp tin
        $uploaded_file = $upload_dir . $_FILES['user_img']['name'];

        if (move_uploaded_file($_FILES['user_img']['tmp_name'], $uploaded_file)) {
            echo "Tệp tin đã được tải lên thành công.";
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp tin.";
        }


        $query = "INSERT INTO tbl_user (
            user_name,
            cartegory_id,
            brand_id,
            user_price,
            user_price_new,
            quantity,
            user_desc,
            user_details,
            user_img
            
        ) VALUES (
            '$user_name',
            '$cartegory_id',
            '$brand_id',
            '$user_price',
            '$user_price_new',
            '$quantity',
            '$user_desc',
            '$user_details',
            '$user_img'
            
        )";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_user(){
        $query = "SELECT tbl_user.*, tbl_cartegory.cartegory_name, tbl_brand.brand_name
                  FROM tbl_user
                  INNER JOIN tbl_cartegory ON tbl_user.cartegory_id = tbl_cartegory.cartegory_id
                  INNER JOIN tbl_brand ON tbl_user.brand_id = tbl_brand.brand_id
                  ORDER BY tbl_user.user_id DESC";
    
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_user($user_id)
    {
        $query = "DELETE FROM tbl_user WHERE user_id = '$user_id' ";
        $result = $this->db->delete($query);
        header('Location:userlist.php');
        return $result;
    }
    



    public function get_user($user_id)
    {
        $query = "SELECT * FROM tbl_user WHERE user_id = '$user_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_user($cartegory_id , $brand_id , $user_name, $user_id)
    {
        $query = "UPDATE tbl_user SET user_name = '$user_name' , cartegory_id = '$cartegory_id', brand_id = '$brand_id' WHERE user_id = '$user_id' ";
        $result = $this->db->update($query);
        header('Location:userlist.php');
        return $result;
    }
   
}
?>