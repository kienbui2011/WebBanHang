<?php
include "database.php";
?>

<?php

class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_cartegory()
    {
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_brand()
    {
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC ";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_product()
    {

        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $quantity = $_POST['quantity'];
        $product_desc = $_POST['product_desc'];
        $product_details = $_POST['product_details'];
        $product_img = $_FILES['product_img']['name'];
       
        $upload_dir = "uploadss/"; // Thư mục đích để lưu tệp tin
        $uploaded_file = $upload_dir . $_FILES['product_img']['name'];

        if (move_uploaded_file($_FILES['product_img']['tmp_name'], $uploaded_file)) {
            echo "Tệp tin đã được tải lên thành công.";
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp tin.";
        }


        $query = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            brand_id,
            product_price,
            product_price_new,
            quantity,
            product_desc,
            product_details,
            product_img
            
        ) VALUES (
            '$product_name',
            '$cartegory_id',
            '$brand_id',
            '$product_price',
            '$product_price_new',
            '$quantity',
            '$product_desc',
            '$product_details',
            '$product_img'
            
        )";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_product(){
        $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name, tbl_brand.brand_name
                  FROM tbl_product
                  INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id
                  INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id
                  ORDER BY tbl_product.product_id DESC";
    
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_product($product_id)
    {
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->delete($query);
        header('Location:productlist.php');
        return $result;
    }
    



    public function get_product($product_id)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_product($cartegory_id , $brand_id , $product_name, $product_id)
    {
        $query = "UPDATE tbl_product SET product_name = '$product_name' , cartegory_id = '$cartegory_id', brand_id = '$brand_id' WHERE product_id = '$product_id' ";
        $result = $this->db->update($query);
        header('Location:productlist.php');
        return $result;
    }
   
}
?>