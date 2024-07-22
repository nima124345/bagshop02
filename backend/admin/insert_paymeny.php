<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ข้อมูลการชำระเงิน</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_no">หมายเลขการสั่งซื้อ<span class="required">:</span> </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="order_no" name="order_no" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paymeny_pic">สลิปการชำระเงิน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="paymeny_pic" name="paymeny_pic" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paymeny_by">ชื่อผู้ชำระเงิน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="paymeny_by" name="paymeny_by" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_name">ชื่อธนาคาร*<span class="required">*</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
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

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_id">รหัสสมาชิก<span class="required">*</span> </label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="member_id" name="member_id" class="form-control col-md-7 col-xs-12">
                                    <option value="">--เลือก--</option>
                                    <?php
                                    $sql = " select * from tb_member";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['member_id']; ?>"><?= $row['member_id']; ?> : <?= $row['member_fullname']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paymeny_date">วันที่ชำระเงิน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="paymeny_date" name="paymeny_date" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recipient_name">ชื่อผู้รับ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="recipient_name" name="recipient_name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">ที่อยู่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subdistrict">ตำบล<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="subdistrict" name="subdistrict" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="district">อำเภอ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="district" name="district" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="province">จังหวัด<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="province" name="province" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="postcode">รหัสไปรษณีย์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="postcode" name="postcode" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phonenumber">เบอร์โทรศัพท์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="phonenumber" name="phonenumber" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paymeny_status">สถานะการชำระเงิน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="paymeny_status" name="paymeny_status" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="">--สถานะการชำระเงิน--</option>
                                    <option value="0">รอตรวจสอบการชำระเงิน</option>
                                    <option value="1">ชำระเงินเสร็จสิ้น</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                <button type="reset" name="reset" class="btn btn-danger">ยกเลิก</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $order_no = $_POST['order_no'];
                        if($_FILES['paymeny_pic']['name'] != ""){
                            $datetime = date("dmYHis");
                            $file_name = substr($_FILES['paymeny_pic']['name'], -4);
                            $paymeny_pic = $datetime . '_p1' . $file_name;
                            $target = "../../upload/".$paymany_pic;
                            move_uploaded_file($_FILES['paymeny_pic']['tmp_name'],$target);
                        }
                        $paymeny_by = $_POST['paymeny_by'];
                        $bank_name = $_POST['bank_name'];
                        $paymeny_price = $_POST['paymeny_price'];
                        $member_id = $_POST['member_id'];
                        $paymeny_date = $_POST['paymeny_date'];
                        $recipient_name = $_POST['recipient_name'];
                        $address = $_POST['address'];
                        $subdistrict = $_POST['subdistrict'];
                        $district = $_POST['district'];
                        $province = $_POST['province'];
                        $postcode = $_POST['postcode'];
                        $phonenumber = $_POST['phonenumber'];


                        $sql = " insert into `tb_paymeny`(`order_no`, `paymeny_pic`, `paymeny_by`, `bank_name`, `paymeny_price`, `member_id`, `paymeny_date`,`recipient_name`, `address`, `subdistrict`, `district`, `province`)";
                        $sql .= " values ('$order_no','$paymeny_pic','$paymeny_by','$bank_name','$paymeny_price','$member_id','$paymeny_date','$recipient_name','$address','$subdistrict','$district','$province','$postcode','$phonenumber')";
                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_paymeny.php');
                        } else {
                            echo $cls_conn->show_message('บันทึกข้อมูลไม่สำเร็จ');
                            echo $sql;
                        }
                    }

                    ?>



                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>