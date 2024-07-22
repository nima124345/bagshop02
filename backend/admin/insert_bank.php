<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>ข้อมูลธนาคาร</h3>
                    <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    
                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_type">ประเภทธนาคาร<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="bank_type" name="bank_type" value="<?= $bank_type; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="" selected>-- เลือกประเภทธนาคาร --</option>
                                    <option value="Savings Account">บัญชีออมทรัพย์</option>
                                    <option value="fixed deposit account">บัญชีเงินฝากประจำ</option>
                                    <option value="current account">บัญชีเงินฝากกระแสรายวัน</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_name">ชื่อ-สกุล*<span class="required"></span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="bank_name" name="bank_name" required="required" placeholder="นาย/นาง/นางสาว" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_bankname">ชื่อธนาคาร*<span class="required">*</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="bank_bankname" name="bank_bankname" required="required" class="form-control col-md-7 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_accountno">เลขบัญชี<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="bank_accountno" name="bank_accountno" placeholder="xxx-x-xxxxx-x" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_status">สถานะธนาคาร*<span class="required">*</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="bank_status" name="bank_status"  required="required" class="form-control col-md-7 col-xs-12">
                                    <option value=""selected>--กรุณาเลือกสถานะธนาคาร--</option>
                                    <option value="checking">กำลังตรวจสอบ</option>
                                    <option value="checked">ตรวจสอบเรียบร้อย</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_id">รหัสผู้ดูแลระบบ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="admin_id" name="admin_id" class="form-control col-md-7 col-xs-12">
                                    <option value="">--เลือก--</option>
                                    <?php
                                    $sql = " select * from tb_admin";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['admin_id']; ?>"><?= $row['admin_fullname']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
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
                        $bank_type = $_POST['bank_type'];
                        $bank_name = $_POST['bank_name'];
                        $bank_bankname = $_POST['bank_bankname'];
                        $bank_accountno = $_POST['bank_accountno'];
                        $bank_status = $_POST['bank_status'];
                        $admin_id = $_POST['admin_id'];


                        $sql = " insert into tb_bank(bank_type, bank_name, bank_bankname,bank_accountno,bank_status, admin_id)";
                        $sql.= " values ('$bank_type','$bank_name','$bank_bankname','$bank_accountno','$bank_status','$admin_id')";
                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_bank.php');
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
