<?php include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=text],select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
</style>
</head>
<body>
    <!--content-->
    <div class="container">
        <div class="payment">
            <form name="payment.php" method="POST" action="payment.php">
                <div class="col-md-12">
                    <div class="contact">
                        <h1 style="text-align:center"><b>ยืนยันการชำระเงิน</b></h1><br>
                        <div>
                            <label for="member_id">รหัสสมาชิก</label>
                            <input type="text" id="member_id" name="member_id" placeholder="member_id">
                        </div>

                        <div class="mb-3">
                            <label for="order_id">เลขที่คำสั่งซื้อ</label>
                            <input type="text" id="order_id" name="order_id" placeholder="order_id">
                        </div><br>

                        <div class="form-group">
                            <div class="">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">สลิปการชำระเงิน</label>
                                <input type="file" class="form-control" name="paymany_pic" id="paymany_pic" style="width: 425px;" required>
                            </div>
                            <div class="">
                                <center><img src="../../upload/" alt="" width="100px" id="img" style="margin-top:10px;"></center>
                                <script>
                                    paymany_pic.onchange = evt => {
                                        const [file] = paymany_pic.files
                                        if (file) {
                                            img.src = URL.createObjectURL(file)
                                        }
                                    }
                                </script>
                            </div>
                        </div><br>

                        <div>
                            <label for="paymeny_by">ชื่อ</label>
                            <input type="text" id="paymeny_by" name="paymeny_by" placeholder="name">
                        </div>

                        <div>
                        <label for="bank_name">ชื่อธนาคาร </label>
                                <select id="bank_name" name="bank_name" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value=""selected>--กรุณาเลือกชื่อธนาคาร--</option>
                                    <option value="SCB">ไทยพาณิชย์</option>
                                    <option value="Kbank">กสิกร</option>
                                    <option value="KTB">กรุงไทย</option>
                                    <option value="BBL">กรุงเทพ</option>
                                    <option value="BAY">กรุงศรีอยุธยา</option>
                                    <option value="ttb">ทีเอ็มบีธนชาต</option>
                                    <option value="UOB">ยูโอบี</option>
                                    <option value="GSB">ออมสิน</option>
                                    <option value="CIMB">ซีไอเอ็มบี</option>
                                    <option value="CITIBANK">ซิตี้แบงค์</option>
                                    <option value="">อื่นๆ</option>


                                </select>
                            </div>
                     
                        
                        <div>
                            <label for="Postcode">จำนวนเงิน</label>
                            <input type="text" id="paymeny_price" name="paymeny_price" placeholder="price">
                        </div><br>

                        <div>
                            <label for="paymeny_date">วันที่ชำระเงิน</label><br>
                            <input type="datetime-local" id="paymeny_date" name="paymeny_date">
                        </div><br><br><br>


                        <h4><b>ข้อมูลการจัดส่งสินค้า</b></h4><br>
                        <div>
                            <label for="recipient_name">ชื่อผู้รับ</label>
                            <input type="text" id="recipient_name" name="recipient_name" placeholder="recipient_name">
                        </div><br>

                        <div>
                            <label for="address">ที่อยู่</label>
                            <input type="text" id="address" name="address" placeholder="address">
                        </div><br>

                        <div>
                            <label for="subdistrict">ตำบล</label>
                            <input type="text" id="subdistrict" name="subdistrict" placeholder="subdistrict">
                        </div><br>

                        <div>
                            <label for="district">อำเภอ</label>
                            <input type="text" id="district" name="district" placeholder="district">
                        </div<br>

                        <div>
                            <label for="province">จังหวัด</label>
                            <input type="text" id="province" name="province" placeholder="province">
                        </div><br>

                        <div>
                            <label for="postcode">รหัสไปรษณีย์</label>
                            <input type="text" id="postcode" name="postcode" placeholder="postcode">
                        </div><br>

                        <div>
                            <label for="phonenumber">เบอร์โทรศัพท์</label>
                            <input type="text" id="phonenumber" name="phonenumber" placeholder="phonenumber">
                        </div><br><br>

                        <div class="col-md-12" style="text-align:center">
                            <input type="submit" class="btn btn-success" name="submit" value="ยืนยันการชำระเงิน">
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </form>

            <?php
                if (isset($_POST['submit'])) {
                    $order_id = $_POST['order_id'];
                    //$paymeny_pic = $_FILES[''];
                    if ($_FILES["paymeny_pic"]["name"] != "") {
                        $datetime = date("dmYHis");
                        $file_name = substr($_FILES['paymeny_pic']['name'], -4);
                        $paymeny_pic = $datetime . '_p1' . $file_name;
                        move_uploaded_file($_FILES["paymeny_pic"]["tmp_name"], "../../upload/");
                    }
                     // print_r($paymeny_pic);
                    $paymeny_by = $_POST['paymeny_by'];
                    $bank_name = $_POST['bank_name'];
                    $paymeny_price = $_POST['paymeny_price'];
                    $member_id = $_POST['member_id'];
                    $paymeny_date = $_POST['paymeny_date'];
                    $recipient_name = $_POST['recipient_name'];
                    $address = $_POST['address'];
                    $subdistrict = $_POST['subdistrict'];
                    $district = $_POST['subdistrict'];
                    $province = $_POST['province'];
                    $postcode = $_POST['postcode'];
                    $phonenumber = $_POST['phonenumber'];
                    $error = 0;
                    $sql_check_order_id = " select * from tb_order";
                    $sql_check_order_id .= " where order_id='$order_id'";
                    $numroworder_id = $cls_con->select_numrows($sql_check_order_id);

                    if ($numroworder_id >= 1) {
                        $error = 1;
                        echo $cls_con->show_message('');
                    }

                    if ($error == 0) {
                        $sql = " insert into tb_paymeny(order_id,paymeny_pic, paymeny_by,bank_name,paymeny_price,member_id, paymeny_date, recipient_name, address, subdistrict, district, province, postcode, phonenumber)";
                        $sql .= " values ('$order_id','$paymeny_pic','$paymeny_by','$bank_name','bank_name$paymeny_price','$member_id','$paymeny_date','$recipient_name','$address','$subdistrict','$district','$province','$postcode','$phonenumber')";
                        if ($cls_con->write_base($sql)) {
                            echo $cls_con->show_message('ยืนยันการชำระเงินเรียบร้อย');
                            echo $cls_con->goto_page(1, 'index.php');
                        }
                    }
                }
            ?>

            <div class="address-more"></div>
    
            <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <br>
    <?php include('footer.php'); ?>
</body>
</html>
