<script type="text/javascript">
						 function sum() {
                  var priceTotal = <?= $row_orderdetail['total']; ?>; 
                  var grandTotal = document.getElementById('grandTotal').value;
 

							if (document.getElementById('ems1').checked) {
								var ems1 = document.getElementById('ems1').value;
								var result = parseInt(priceTotal) + parseInt(ems1);
								document.getElementById('grandTotal').value = result;
							}

							if (document.getElementById('ems2').checked) {
								var ems1 = document.getElementById('ems2').value;
								var result = parseInt(priceTotal) + parseInt(ems2);
								document.getElementById('grandTotal').value = result2;
							}

						} //close func
					</script>

					<form method="post" name="frmbooking" action="cart.php" class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-2">
								อัตราค่าส่งบริษัท J&T

							</div>
							<div class="col-sm-4">
								<input type="radio" name="send_type" id="ems1" onchange="sum();" value="39" required> กรุงเทพมหานครและปริมณฑล 39 บาท<br>
							</div>

							<div class="col-sm-4">
								<input type="radio" name="send_type2" id="ems2" onchange="sum();" value="49" required> ต่างจังหวัด 49 บาท<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2">
								รวม (บาท)
							</div>
							<div class="col-sm-3">
								<input type="text" id="grandTotal" name="grandTotal" readonly="readonly" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2">
							</div>
							<div class="col-sm-3">
								<button type="submit" class="btn btn-primary"> Confirm Order </button>
							</div>
						</div>
					</form>

