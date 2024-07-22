<?php
include("../../../class_conn.php");
$cls_con = new class_conn;
session_start();


if (isset($_POST['act']) && isset($_POST['act']) == "insert") {
    $s = $_POST['s'];
    $ems = $_POST['ems'];
    $sum_ems = $s + $ems;
    $random = substr(rand(), -2) . substr(time(), -2);
    $newRandom = str_pad($random, 5, "0", STR_PAD_LEFT);
    $order_no = $newRandom;
    $order_datetime = date("Y-m-d h:i:sa");

    $user_id = $_SESSION['member_id'];
    $status = 1;
   
        $sql = "INSERT INTO `tb_order`(`order_no`, `order_total`, `order_datetime`,`user_id`)";
        $sql .= " values ('$order_no','$sum_ems','$order_datetime','$user_id')";
        // die($sql);
        if ($cls_con->write_base($sql) == true) {
            $msg['status'] = 1;
            $msg['message'] = 'Complete';

            $sql_update = "update tb_orderdetail set orderdetail_status = '$status' where user_id = '$user_id'";
            $cls_con->write_base($sql_update);
        } else {
            $msg['status'] = 0;
            $msg['message'] = 'Incomplete';
        }
        echo json_encode($msg);
       
    }
    
    exit();

?>
