<?php include('header.php');?>

<!--content-->
<div class="contact">
	<div class="container">
		<div class="contact-form">
			<h1>ตรวจสอบการจัดส่งสินค้า</h1><br><br><br>
			<table class="table">
				<thead bgcolor="#CCCCCC">
					<th style="text-align:center">รหัสคำสั่งซื้อ</th>
					<th style="text-align:center">รหัสสมาชิก</th>
					<th style="text-align:center">เลขพัสดุ</th>
					<th style="text-align:center">ที่อยู่</th>
					<th style="text-align:center">ตำบล</th>
					<th style="text-align:center">อำเภอ</th>
					<th style="text-align:center">จังหวัด</th>
					<th style="text-align:center">รหัสไปรษณีย์</th>
					<th style="text-align:center">วันที่จัดส่ง</th>
				</thead>
				<tbody bgcolor="#EAEAEA" style="text-align:center">
				<?php
					$member_id = $_SESSION['member_id'];
                    $sql=" select 
						tb_shipping.shipping_id,
						tb_order.order_id,
						tb_shipping.shipping_trackingno,
						tb_shipping.ship_address,
						tb_shipping.ship_tumbol,
						tb_shipping.ship_amphur,
						tb_shipping.ship_province,
						tb_shipping.ship_postcode,
						tb_shipping.shipping_by,
						tb_shipping.shipping_cost,
						tb_member.member_id,
						tb_shipping.shipping_status,
						tb_shipping.shipping_datetime
						From
						tb_shipping
						INNER JOIN tb_member ON tb_shipping.member_id = tb_member.member_id
						INNER JOIN tb_order ON tb_shipping.order_id = tb_order.order_id WHERE tb_shipping.member_id = '$member_id'";

                        $result=$cls_con->select_base($sql);
                        while($row=mysqli_fetch_array($result))
                    { 
                ?>
					<td><?=$row['order_id'];?></td>
					<td><?=$row['member_id'];?></td>
					<td><?=$row['shipping_trackingno'];?></td>
					<td><?=$row['ship_address'];?></td>
					<td><?=$row['ship_tumbol'];?></td>
					<td><?=$row['ship_amphur'];?></td>
					<td><?=$row['ship_province'];?></td>
					<td><?=$row['ship_postcode'];?></td>
					<td><?=$row['shipping_datetime'];?></td>
				<?php
					}
				?>
				</tbody>
			</table>
			<iframe src="https://jtexpress.thaiware.com/" frameborder="0" allowtransparency="yes" scrolling="no" style="width:100%; height:800px; position:relative; left:-20px;top:100px;margin:50;padding:0;"></iframe>	 
			
				<div class="clearfix"> </div>
		</div>	
	</div>
</div>
<br>

<?php include('footer.php');?>