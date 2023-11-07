<?php
include "database.php";
?>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class orderlist
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_orderlist($cartCode = null)
    {
        $query = " SELECT * FROM tbl_order_details_pro 
                    INNER JOIN tbl_product ON tbl_order_details_pro.product_id = tbl_product.product_id";
        

        if ($cartCode !== null) {
            // Modify the query to filter by cart_code if it's provided
            $query .= " WHERE cart_code = '$cartCode'";
        }
        $result = $this->db->select($query);
        return $result;
    }

    public function delete_orderlist($orderlist_user_idr)
    {
        $query = "DELETE FROM tbl_orderlist WHERE orderlist_user_id= '$orderlist_user_idr'";
        $result = $this->db->delete($query);

        header('Location: orderlistlist.php');

        return $result;
    }
}
?>