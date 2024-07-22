<?php
include("../../../class_conn.php");
$cls_con = new class_conn;
session_start();

if (isset($_POST['submit'])) {
    $number = 1;
    $status = 0;
    $user_id = $_SESSION['member_id'];
    $product_id = $_POST['product_id'];
    $order_price = $_POST['product_price'];
    $orderdetail_qty =  $number;
    $orderdetail_datetime = date("Y-m-d h:i:sa");

    $check = "SELECT * FROM tb_orderdetail WHERE product_id = '$product_id' and `orderdetail_status` = '$status'";
    $run = $cls_con->select_base($check);

    $check_productqty = "select product_qty from tb_product where product_id='$product_id'";
    $re = $cls_con->select_base($check_productqty);
    $roww = $re->fetch_array();
    $product_qty = $roww['product_qty'];

    if ($orderdetail_qty >= $product_qty || $product_qty === 0) {

        echo $cls_con->show_message('out of stock');
        echo $cls_con->goto_page(1, '../product.php');

    } else if ($run->num_rows > 0) {
        $sql_update = "update tb_orderdetail set orderdetail_qty = (orderdetail_qty + $orderdetail_qty) where product_id = '$product_id' and `orderdetail_status` = '$status';";
        if ($cls_con->write_base($sql_update) == true) {
            echo $cls_con->show_message('add product');
            echo $cls_con->goto_page(1, '../product.php');
        } else {
            echo $cls_con->show_message('fail');
            echo $sql_update;
        }

        $user_id = $_SESSION['member_id'];
        $sql_select = "select * from tb_orderdetail where product_id = '$product_id' and user_id = '$user_id'";
        $rsdw = $cls_con->select_base($sql_select);
        $row = $rsdw->fetch_array();
        $qty = $row['orderdetail_qty'];
        //ลดสต็อค
        $update_stock = "UPDATE `tb_product` SET `product_qty` = (product_qty-$qty) WHERE product_id='$product_id'; ";
        //   die($update_stock);
        $cls_con->write_base($update_stock);
    } else {
        $sql = " INSERT INTO `tb_orderdetail`(`product_id`, `order_price`, `orderdetail_qty`, `orderdetail_datetime`,`user_id`)";
        $sql .= " values ('$product_id','$order_price','$orderdetail_qty','$orderdetail_datetime','$user_id')";
        // die($sql);
        if ($cls_con->write_base($sql) == true) {
            echo $cls_con->show_message('success');
            echo $cls_con->goto_page(1, '../product.php');
        } else {
            echo $cls_con->show_message('fail');
            echo $sql;
        }

        $user_id = $_SESSION['member_id'];
        $sql_select = "select * from tb_orderdetail where product_id = '$product_id' and user_id = '$user_id'";
        $rsdw = $cls_con->select_base($sql_select);
        $row = $rsdw->fetch_array();
        $qty = $row['orderdetail_qty'];
        //ลดสต็อค
        $update_stock = "UPDATE `tb_product` SET `product_qty` = (product_qty-$qty) WHERE product_id='$product_id'; ";
        //   die($update_stock);
        $cls_con->write_base($update_stock);
    }
    exit();
}

