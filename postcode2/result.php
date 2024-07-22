<?php
    include "../../class_conn.php";
    conndb();

    $province_id = $_POST['province'];
    $amphur_id = $_POST['amphur'];
    $district_id = $_POST['district'];

    $sql_1 = "SELECT * FROM province WHERE PROVINCE_ID = '$province_id' ";
    $result_1 = mysqli_query($conn,$sql_1);
    $row_1 = mysqli_fetch_array($result_1);
    $province_name = $row_1['PROVINCE_NAME'];

    $sql_2 = "SELECT * FROM amphur WHERE AMPHUR_ID = '$amphur_id' ";
    $result_2 = mysqli_query($conn,$sql_2);
    $row_2 = mysqli_fetch_array($result_2);
    $amphur_name = $row_2['AMPHUR_NAME'];

    $sql_3 = "SELECT * FROM district WHERE DISTRICT_ID = '$district_id' ";
    $result_3 = mysqli_query($conn,$sql_3);
    $row_3 = mysqli_fetch_array($result_3);
    $district_name = $row_3['DISTRICT_NAME'];
?>
<!DOCTYPE html>
<html>
    <head>
	
	<title>ทำ Dropdown ให้เลือกจังหวัด อำเภอ ตำบล และทำหน้าจอแก้ไข ให้มีการกำหนดค่าเริ่มต้น</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<STYLE type=text/css>
	  A:link { color: #0000cc; text-decoration:none}
	  A:visited {color: #0000cc; text-decoration: none}
	  A:hover {color: red; text-decoration: none}
	 </STYLE>
	<style type="text/css">
	<!--
	small { font-family: Arial, Helvetica, sans-serif; font-size: 9pt; } 
	input, textarea,select { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	b { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	big { font-family: Arial, Helvetica, sans-serif; font-size: 14pt; } 
	strong { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; font-weight : extra-bold; } 
	font, td { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	BODY { font-size: 11pt; font-family: Arial, Helvetica, sans-serif; } 
	-->
	</style>
	
    </head>
	
	<body>
	
	<div align="center">
	
	<h2>ทำ Dropdown ให้เลือกจังหวัด อำเภอ ตำบล และทำหน้าจอแก้ไข ให้มีการกำหนดค่าเริ่มต้น</h2>
	
	<br>
	<b><font color="red">(ผลการบันทึกข้อมูล)</font></b>
	
	</div>
	
	<br>
	
	<div align="center">
	
        <p><b>จังหวัด :</b> <?php echo $province_name." (".$province_id.")"; ?></p>
        <p><b>อำเภอ :</b> <?php echo $amphur_name." (".$amphur_id.")"; ?></p>
        <p><b>ตำบล :</b> <?php echo $district_name." (".$district_id.")"; ?></p> 
		
	</div>
	
<br>

<center>
	<hr width="90%">	
<br>พัฒนาโดย : <a href="http://php-ajax-code.blogspot.com" target="_blank">http://php-ajax-code.blogspot.com</a>
<br><br>แก้ไขพัฒนาเพิ่มเติมให้สมบูรณ์แบบโดย : <a href="http://www.codetukyang.com" target="_blank">http://www.codetukyang.com</a>
	<br><br><hr width="90%">
</center>
		
    </body>
</html>
	