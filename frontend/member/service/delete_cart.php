<?php
include("../../../class_conn.php");
$cls_con = new class_conn;
session_start();

        if(isset($_POST['submit']))
        {
            $orderdetail_id = $_POST['orderdetail_id'];
            $orderdetail_status = 2;
            $product_id = $_POST['product_id'];

          
            $sql = "UPDATE `tb_orderdetail` SET `orderdetail_status`='$orderdetail_status' WHERE `orderdetail_id` = '$orderdetail_id'";

            if ($cls_con->write_base($sql) == true) {
                echo $cls_con->show_message('cancel order');
                echo $cls_con->goto_page(1, '../checkout.php');
        
                //เพิ่มสต็อค
                $user_id = $_SESSION['member_id'];
                $sql_select = "select * from tb_orderdetail where product_id = '$product_id' and user_id = '$user_id'";
                $rsdw = $cls_con->select_base($sql_select);
                $row = $rsdw->fetch_array();
                $qty = $row['orderdetail_qty'];
                //ลดสต็อค
                $update_stock = "UPDATE `tb_product` SET `product_qty` = (product_qty+$qty) WHERE product_id='$product_id'; ";
                //   die($update_stock);
                $cls_con->write_base($update_stock);
            } else {
                echo $cls_con->show_message('fail');
                echo $sql;
            }
            
        }
?>


