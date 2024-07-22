<?php include('header.php'); ?>

<style>
	#customers {
	font-family: Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
	}

	#customers td, #customers th {
	border: 1px solid #ddd;
	padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: center;
	background-color: #04AA6D;
	color: white;

	
	}
</style>

<div class="contact">
	<div class="container">
		 <div class="contact-form">
			<h1>คำสั่งซื้อ</h1><br>
			<center><div class="w3-content w3-section" style="max-width:1400px">
				<img class="mySlides" src="../../upload/payment.png" style="width:80%">
			</div></center>

			<table id="customers">
				<tr>
					<th>เลขที่คำสั่งซื้อ</th>
					<th>ราคารวม</th>
					<th>วันที่สั่งซื้อ</th>
				</tr>
				
					<?php
						$user_id = $_SESSION['member_id'];
						$status = 0;
						$sql = "SELECT * FROM `tb_order` where user_id = '$user_id' and order_status = '$status'";
						$re = $cls_con->select_base($sql);
						while ($row = mysqli_fetch_array($re)) { 
					?>
					<tr style="text-align: center;">
						<td><?= $row['order_no']; ?></td>
						<td><?= $row['order_total']; ?></td>
						<td><?= $row['order_datetime']; ?></td>
					</tr>
					<?php 
						}
					?>
			</table>

			<!-- <table class="table">
				<thead bgcolor="#CCCCCC">
					<th style="text-align:center">เลขที่คำสั่งซื้อ</th>
					<th style="text-align:center">ราคารวม</th>
					<th style="text-align:center">วันที่สั่งซื้อ</th>
				</thead>

				<tbody bgcolor="#EAEAEA" style="text-align:center">
					<?php
						$user_id = $_SESSION['member_id'];
						$status = 0;
						$sql = "SELECT * FROM `tb_order` where user_id = '$user_id' and order_status = '$status'";
						$re = $cls_con->select_base($sql);

						while ($row = mysqli_fetch_array($re)) { 
					?>
					<td><?= $row['order_no']; ?></td>
					<td><?= $row['order_total']; ?></td>
					<td><?= $row['order_datetime']; ?></td>
					<?php 
						}
					?>
				</tbody>
			</table> -->
			<br>
			<h5 style="text-align:center"><b>กรุณานำเลขที่คำสั่งซื้อไปกรอกในฟอร์มยืนยันการชำระเงิน (PAYMENT)</b></h5>
			<div class="clearfix"> </div>
		</div>	
	</div>
</div>
<?php include('footer.php');?>

