<?php session_start();?>
<?php include('../../class_conn.php'); ?>
<?php $cls_con=new class_conn;

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,Name,Address,Tel,Email)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."') 
  ";
  mysqli_query($con,$sql) or die(mysqli_connect_error());

  $strOrderID = mysqli_insert_id($con,$sql);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strproduct_id"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (order_id,product_id,orderdetail_qty,member_id,orderdetail_datetime,orderdetail_status)
				VALUES
				('".$strorder_id."','".$_SESSION["strproduct_id"][$i]."','".$_SESSION["strorderdetail_qty"][$i]."','".$_SESSION["strmember_id"][$i]."','".$_SESSION["strorderdetail_datetime"][$i]."','".$_SESSION["strorderdetail_status"][$i]."') 
			  ";
			  mysqli_query($con,$sql) or die(mysqli_connect_error());
	  }
  }

mysqli_close($con);

session_destroy();

header("location:finish_order.php?order_id=".$strorder_id);
?>