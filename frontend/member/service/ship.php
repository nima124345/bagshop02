<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>ค่าจัดส่ง</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

            <script type="text/javascript">
            function sum() {
                  var priceTotal = "SELECT SUM(order_price * orderdetail_qty) as total FROM tb_orderdetail WHERE user_id = '$user_id'"; 
                  var grandTotal = document.getElementById('grandTotal').value;

                              if(document.getElementById('ems1').checked){
                                    var ems1 = document.getElementById('ems1').value;
                                    var result = parseInt(priceTotal)+parseInt(ems1);
                                    document.getElementById('grandTotal').value = result;
                              }

                              if(document.getElementById('ems2').checked){
                                    var ems1 = document.getElementById('ems2').value;
                                    var result = parseInt(priceTotal)+parseInt(ems1);
                                    document.getElementById('grandTotal').value = result;
                              }

                        } //close func
            </script>
      </head>
      <body>
            <div class="container">
                  <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-9">
                              <div class="alert alert-primary" role="alert">
                                    
                              </div>
                              <h4>รายการสินค้า</h4>
                              <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                          <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">product name</th>
                                                <th scope="col">qty</th>
                                                <th scope="col">price</th>
                                                <th scope="col">total</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                                <td>1</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>2</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>3</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td>4</td>
                                                <td>my product</td>
                                                <td>1</td>
                                                <td class="text-right">500.00</td>
                                                <td class="text-right">500.00</td>
                                          </tr>
                                          <tr>
                                                <td colspan="4" class="text-center">รวม</td>
                                                <td class="text-right">2,000.00</td>
                                          </tr>
                                          
                                    </tbody>
                              </table>
                              
                              <form method="post" name="frmbooking" action="cart.php" class="form-horizontal">
                                    <div class="form-group">
                                          <div class="col-sm-2">
                                                อัตราค่าส่งบริษัท J&T 
                                                
                                          </div>
                                          <div class="col-sm-4">
                                                <input type="radio" name="send_type" id="ems1"  onchange="sum();"  value="39" required> กรุงเทพมหานครและปริมณฑล 39 บาท<br>
                                          </div>

                                          <div class="col-sm-4">
                                                <input type="radio" name="send_type" id="ems1"  onchange="sum();"  value="49" required> ต่างจังหวัด 49 บาท<br>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <div class="col-sm-2">
                                                รวม (บาท)
                                          </div>
                                          <div class="col-sm-3">
                                                <input type="text" id="grandTotal" name="grandTotal" readonly="readonly" class="form-control"  required />
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
                        </div>
                  </div>
            </div>
      </body>
</html>


<!--<?php
					///$sql_select="select * FROM tb_promotion";
					///$row= $cls_con->select_base($sql_select);
					///$re = $row->fetch_assoc($row)
					///$ems2 = $row['promo_id'];

					///$ems1 = $_POST['ems1']
					///$ems2 = $_POST['ems2']
					
					///if ($total<=$a){
						///$sum=($total-$b)+$a;
						///$sql =""; เพิ่มที่ตาราง order


					///}else{$total;
					//$sql="";
				   //} 
                           ?>-->

                           <script type="text/javascript">
                                                function sum() {
                             var priceTotal = value"<?= $re['total']; ?>"; 
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


                                         <?php
	
					$total_price = 19000;
					$discount = 0;

					if ($total_price >= 500 && $total_price < 5001) {
						$discount = 5;
					} elseif ($total_price >= 5001 && $total_price <= 15000) {
						$discount = 8;
					} elseif ($total_price >= 15000) {
						$discount = 10;
					}

					$discount_bath = ($total_price * $discount) / 100;
		

					?>

<pre>
ซื้อสินค้าครบ 0 ถึง 499 บาท ไม่ได้ส่วนลด
ซื้อสินค้าครบ 500 ถึง 5001 บาท ได้ส่วนลด 5%
ซื้อสินค้าครบ 5001 ถึง 15000 บาท ได้ส่วนลด 8%
ซื้อสินค้าครบ 15000 บาทขึ้นไป ได้ส่วนลด 10%
</pre>

					<h3>รวมราคาสินค้า = <?php echo number_format($total_price, 2); ?></h3>
					<h5>ส่วนลด = <?php echo $discount; ?>% (<?php echo $discount_bath; ?> บาท)</h5>
					<h2>ราคาหลังส่วนลด = <?php echo number_format($total_price - $discount_bath, 2); ?>บาท</h2>
           
           