<?php
include "database.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);
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

        // Đường dẫn đến thư mục lưu trữ hình ảnh
        $upload_dir = "/Applications/XAMPP/xamppfiles/htdocs/NTKQ/admin/uploadss/";

        // Đảm bảo thư mục tồn tại hoặc tạo nó nếu nó chưa tồn tại
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Các loại tệp được cho phép
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");

        // Kích thước tệp tối đa (ở đây là 10MB)
        $max_file_size = 10 * 1024 * 1024; // 10MB

        // Các trường tải lên hình ảnh
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
                $destination = $upload_dir . $file_name;
        
                if (file_exists($destination)) {
                    echo "Lỗi: Tệp $field đã tồn tại. Vui lòng đổi tên tệp và thử lại.<br>";
                } elseif (in_array($file_extension, $allowed_extensions) && $file_size <= $max_file_size) {
                    if (move_uploaded_file($file_tmp, $destination)) {
                        echo "Tệp $field tải thành công.<br>";
                    } else {
                        echo "Có lỗi xảy ra khi tải lên tệp tin $field.<br>";
                    }
                } else {
                    echo "Lỗi: Kiểu tệp tin không hợp lệ hoặc kích thước tệp tin vượt quá giới hạn.<br>";
                }
            } else {
                echo "Không có tệp tin được gửi lên hoặc có lỗi xảy ra.<br>";
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


    public function search_product($keyword) {
        $sql = "SELECT * FROM tbl_product 
                INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id
                INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id
                WHERE product_name LIKE '%" . $keyword . "%'
                ORDER BY tbl_product.product_id DESC";
        $result = $this->db->search($sql);
        return $result;
    }
    
    // public function search_product($keyword) {
    //     $sql = "SELECT * FROM tbl_product 
    //             INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
    //             INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id
    //             WHERE 
    //                 product_name LIKE '%" . $keyword . "%' 
    //                 OR category_name LIKE '%" . $keyword . "%' 
    //                 OR brand_name LIKE '%" . $keyword . "%'
    //             ORDER BY tbl_product.product_id DESC
    //             ORDER BY tbl_category.category_id DESC
    //             ORDER BY tbl_brand.brand_id DESC";
    //     $result = $this->db->search($sql);
    //     return $result;
    // }


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
?>