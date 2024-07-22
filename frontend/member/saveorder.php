<?php
	session_start();
    include('../../class_conn.php');
     
?>
<meta  charset=utf-8 >

<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php

echo '<pre>';
print_r($_SESSION);
echo '</prev>';


echo '<pre>';
print_r($_POST);
echo '</prev>';

//exit;


	$order_id = $_POST["order_id"];
	$order_no = $_POST["order_no"];
	$order_price = $_POST["order_price"];
	$order_status = $_POST["order_status"];
	$order_datetime = $_POST["order_datetime"];
	$total = $_POST["total"];

	//บันทึกการสั่งซื้อลงใน order_detail
	mysqli_query($conn, "BEGIN"); 
	$sql1	= "INSERT INTO tb_order 
    values
    ('$order_id', '$order_no', '$order_price', '$order_status', '$order_datetime','$total')";
	$query1	= mysqli_query($conn, $sql1);
	//ฟังก์ชั่น MAX() จะคืนค่าที่มากที่สุดในคอลัมน์ที่ระบุ ออกมา หรือจะพูดง่ายๆก็ว่า ใช้สำหรับหาค่าที่มากที่สุด นั่นเอง.
	$sql2 = "select max(order_id) as order_id from tb_order where order_name='$name' and o_email='$email' and o_dttm='$dttm' ";
	$query2	= mysqli_query($conn, $sql2);
	$row = mysqli_fetch_array($query2);
	$o_id = $row["order_id"];
//PHP foreach() เป็นคำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยสามารถเรียกค่าได้ทั้ง $key และ $value ของ array
	foreach($_SESSION['cart'] as $poduct_id=>$qty)
	{
		$sql3	= "select * from product where product_id=$product_id";
		$query3	= mysqli_query($conn, $sql3);
		$row3	= mysqli_fetch_array($query3);
		$total	= $row3['product_price']*$orerdetail_qty;
		
		$sql4	= "insert into tb_orderdetail values(null, '$o_id', '$p_id', '$qty', '$total')";
		$query4	= mysqli_query($conn, $sql4);
	}
	
	if($query1 && $query4){
		mysqli_query($conn, "COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
		foreach($_SESSION['cart'] as $poduct_id)
		{	
			//unset($_SESSION['cart'][$poduct_id]);
			unset($_SESSION['cart']);
		}
	}
	else{
		mysqli_query($conn, "ROLLBACK");  
		$msg = "บันทึกข้อมูลไม่สำเร็จกรุณาติดต่อเจ้าหน้าที่ค่ะ";	
	}
?>
<script type="text/javascript">
	alert("<?php echo $msg;?>");
	window.location ='product.php';
</script>

 




</body>
</html>