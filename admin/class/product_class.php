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
        $product_img_desc1 = $_FILES['product_img_desc1']['name'];
        $product_img_desc2 = $_FILES['product_img_desc2']['name'];
        $product_img_desc3 = $_FILES['product_img_desc3']['name'];

        // Define the upload directory
        $upload_dir = "/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/";

        // Ensure the directory exists or create it
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        $max_file_size = 5 * 1024 * 1024; // 5MB

        // Define an array of file upload fields
        $file_upload_fields = array(
            'product_img',
            'product_img_desc1',
            'product_img_desc2',
            'product_img_desc3'
        );

        foreach ($file_upload_fields as $field) {
            if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
                $file_name = $_FILES[$field]['name'];
                $file_tmp = $_FILES[$field]['tmp_name'];
                $file_size = $_FILES[$field]['size'];
                $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                if (in_array($file_extension, $allowed_extensions) && $file_size <= $max_file_size) {
                    $new_file_name = uniqid() . "." . $file_extension;
                    $destination = $upload_dir . $new_file_name;

                    if (move_uploaded_file($file_tmp, $destination)) {
                        echo "Tệp $field tải thành công.<br>";
                    } else {
                        echo "Có lỗi xảy ra khi tải lên tệp tin $field.<br>";
                    }
                } else {
                    echo "Kiểu tệp tin không hợp lệ hoặc kích thước tệp tin vượt quá giới hạn.";
                }
            } else {
                echo "Không có tệp tin được gửi lên hoặc có lỗi xảy ra.";
            }
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
            product_img,
            product_img_desc1,
            product_img_desc2,
            product_img_desc3
            
        ) VALUES (
            '$product_name',
            '$cartegory_id',
            '$brand_id',
            '$product_price',
            '$product_price_new',
            '$quantity',
            '$product_desc',
            '$product_details',
            '$product_img',
            '$product_img_desc1',
            '$product_img_desc2',
            '$product_img_desc3'
            
        )";
        $result = $this->db->select($query);
        return $result;
    }



    public function show_product()
    {
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
    public function update_product($cartegory_id, $brand_id, $product_name, $product_id)
    {
        $query = "UPDATE tbl_product SET product_name = '$product_name' , cartegory_id = '$cartegory_id', brand_id = '$brand_id' WHERE product_id = '$product_id' ";
        $result = $this->db->update($query);
        header('Location:productlist.php');
        return $result;
    }
}

// if ($result) {
//     $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
//     $result = $this->db->select($query)->fetch_assoc();
//     $product_id = $result['product_id'];
//     $filename =  $_FILES['product_img_desc']['name'];

//     foreach ($filename as $key => $value) {
//         $query = "INSERT INTO tbl_product_img (product_id,product_img_desc) VALUES ('$product_id','$value')";
//         $result = $this->db->insert($query);
//     }
// }
?>