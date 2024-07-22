<?php include('header.php'); ?>

<div class="container">
	<div class="check">
		<div class="col-md-12 cart-items">
			<?php
			$user_id = $_SESSION['member_id'];
			$status = 0;
			$sql = "select * from tb_orderdetail where user_id = '$user_id' AND orderdetail_status = '$status'";

			$result = $cls_con->select_base($sql);
			while ($row = mysqli_fetch_array($result)) {
			?>

				<table class="table" style="text-align:center;">
					<table class="table" style="text-align:center;">
						<tr bgcolor="#CCCCCC">
							<th style="text-align:center">รหัสสั่งซื้อ</th>
							<th style="text-align:center">รหัสสินค้า</th>
							<th style="text-align:center">ราคา</th>
							<th style="text-align:center">จำนวน</th>
							<th style="text-align:center">วันที่สั่งซื้อ</th>
							<th></th>
						</tr>
						<?php
						$user_id = $_SESSION['member_id'];
						$status = 0;
						$sql = "select * from tb_orderdetail where user_id = '$user_id' AND orderdetail_status = '$status'";

						$result = $cls_con->select_base($sql);
						while ($row = mysqli_fetch_array($result)) {
						?>
							<tr bgcolor="#EAEAEA">
								<td style="text-align:center;"><?= $row['orderdetail_id']; ?></td>
								<td style="text-align:center;"><?= $row['product_id']; ?></td>
								<td style="text-align:center;"><?= $row['order_price']; ?></td>
								<td style="text-align:center;"><?= $row['orderdetail_qty']; ?></td>
								<td style="text-align:center;"><?= $row['orderdetail_datetime']; ?></td>
								<form action="service/delete_cart.php" method="post">
									<td style="text-align:center;">
										<input type="hidden" name="orderdetail_id" value="<?= $row['orderdetail_id']; ?>">
										<input type="hidden" name="product_id" value="<?= $row['product_id']; ?>">
										<button type="submit" name="submit" class="btn btn-danger">ยกเลิกออเดอร์</button>
									</td>
								</form>
							</tr>
						<?php
						}
						?>
						<?php
						$user_id = $_SESSION['member_id'];
						$status = 0;
						$sql = "SELECT SUM(order_price * orderdetail_qty) as total FROM tb_orderdetail WHERE user_id = '$user_id' and orderdetail_status = '$status'";
						$r = $cls_con->select_base($sql);
						while ($row = mysqli_fetch_array($r)) {
						?>



							<tr bgcolor="#EAEAEA">
								<td colspan="6" style="text-align:right;"><b>ราคารวม : <?= $row['total']; ?> บาท</b></td>
								<input type="hidden" value="<?= $row['total']; ?>" id="order_sum">
							</tr>

						<?php
						}
						?>
					</table>

					<?php
					if (isset($_POST['btn_submit'])) {
						$user_id = $_SESSION['member_id'];
						$promo_code = $_POST['promo_code'];
						$sql_select = "SELECT * FROM tb_promotion WHERE promo_code LIKE '$promo_code'";
						$rsdw = $cls_con->select_base($sql_select);
						$row = $rsdw->fetch_array();
						$code = $row['promo_discount'];
						// $discount_total = $totalprice2;

						// if ($promo_status == 0) {
						// 	echo $cls_con->show_message('-');
						// 	$order_sum = $totalprice2;
						// } else {

						// 	$result_select = $cls_con->select_base($sql_select);
						// 	while ($row = mysqli_fetch_array($result_select)) {

						// 		$code = $row['promo_discount'];
						// 	}
						// 	$promo_discount2 = $promo_discount;
						// 	$discount_total = ($total_sum - $code = $row['promo_discount']);
						// 	$total = $discount_total;
						// }
					} else {
						// $promo_discount2 = '-';
						// $discount_total = '-';
						// $total = $totalprice2;
					}

					$status = 0;

					$check = "SELECT SUM(order_price * orderdetail_qty) as total FROM tb_orderdetail WHERE user_id = '$user_id' and orderdetail_status = '$status'";
					$r = $cls_con->select_base($sql);
					$row_total = $r->fetch_array();

					$total_sum = $row_total['total'];
					// $totalprice2 = $total_sum;
					// $code = 0;

					// if ($total_sum >= 500 && $total_sum < 5001) {
					// 	$discount = 5;
					// } elseif ($total_sum >= 5001 && $total_sum <= 15000) {
					// 	$discount = 8;
					// } elseif ($total_sum >= 15000) {
					// 	$discount = 10;
					// }


					?>
					<div class="total-item">
						<form name="checkout.php" method="post">
							<h4>COUPONS</h4>
							<input type="text" name="promo_code" />
							<input type="hidden" name="totalprice2" value="<?= $totalprice2; ?>" />
							<button class="order" name="btn_submit">ยืนยันคูปอง</button>
					</div>

					<h3>รวมราคาสินค้า : <?php echo number_format($total_sum, 2); ?></h3>
					<!-- <h5>ส่วนลด : <?php echo number_format($code = $row['promo_discount']); ?>บาท</h5><br> -->
					<h2>ราคาหลังส่วนลด : <?php echo number_format($s = $total_sum - $code, 2); ?>บาท</h2>
					<input type="hidden" value="<?= $s; ?>" name="s" id="s">



<!-- <pre>
ซื้อสินค้าครบ 0 ถึง 499 บาท ไม่ได้ส่วนลด
ซื้อสินค้าครบ 500 ถึง 5001 บาท ได้ส่วนลด 5%
ซื้อสินค้าครบ 5001 ถึง 15000 บาท ได้ส่วนลด 8%
ซื้อสินค้าครบ 15000 บาทขึ้นไป ได้ส่วนลด 10%
</pre> -->

		</div>



		</form>

		<form method="post" name="frmbooking" action="service/check_order.php" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-2">
					อัตราค่าส่งบริษัท J&T

				</div>
				<div class="" id="group_ems">
					<div class="col-sm-4">
						<input type="radio" name="send_type" id="ems" onchange="sum(39);" value="39" required> กรุงเทพมหานครและปริมณฑล 39 บาท<br>
					</div>

					<div class="col-sm-4">
						<input type="radio" name="send_type" id="ems" onchange="sum(49);" value="49" required> ต่างจังหวัด 49 บาท<br>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
					รวม (บาท)
				</div>
				<div class="col-sm-3">
					<input type="text" id="order_total" name="order_total" readonly="readonly" class="form-control" required />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
				</div>

			</div>
		</form>



		<div style="text-align:center">
			<td><a href="index.php" class="btn btn-danger">back</a></td>
			<form method="POST" action="" id="myform">
				<td>
					<?php
					$status = 0;
					$sql = "SELECT SUM(order_price * orderdetail_qty) as total  FROM tb_orderdetail where orderdetail_status ='$status'";
					$r = $cls_con->select_base($sql);

					while ($re = mysqli_fetch_array($r)) {
					?>
						<input type="hidden" value="<?= $re['total']; ?>" name="order_total" id="order_total">
						<button type="submit" name="submit" class="btn btn-success">Confirm Order</button>
					<?php
					}
					?>
				</td>
			</form>



		</div>

	<?php
			}
	?>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<script type="text/javascript">
	let emsl;
	$(function() {
	
		let s = $('#s').val();	
		$('form#myform').submit(function(e) {
			e.preventDefault();
			
			$.ajax({
				url: "service/check_order.php",
				method: "post",
				data: {
					act: "insert",	
					ems:emsl,	
					s:s,
				},
				success: function(data) {
					row = JSON.parse(data);
					console.log(row);
					if (row.status == 1) {
						window.location.href = "order.php";
						alert("สำเร็จ");
					}
				},
			});
		});

	});

	function sum(ems) {
		emsl = ems;
		let number = document.getElementById('s').value; 
		var result = parseInt(number) + parseInt(emsl);
		document.getElementById('order_total').value = result;
		// console.log(result);
		

	} //close func
</script>

<?php
if (isset($_POST['order_total'])) {
	// code..


	echo '<pre>;
	print_r($_POST)
	</pre>';
}
?>

<?php include('footer.php'); ?>
