<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ข้อมูลรายละเอียดการจอง</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">รหัสการจอง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="product_id" name="product_id" class="form-control col-md-7 col-xs-12">
                                    <option value="">--เลือก--</option>
                                    <?php
                                    $sql = " select * from tb_product";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['product_id']; ?>"><?= $row['product_id']; ?>  : <?= $row['product_name']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_qty">จำนวน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="orderdetail_qty" name="orderdetail_qty" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_datetime">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="orderdetail_datetime" name="orderdetail_datetime" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_status">สถานะรายละเอียดการจอง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="orderdetail_status" name="orderdetail_status" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_status">สถานะรายละเอียดการจอง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="orderdetail_status" name="orderdetail_status" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="">--กรุณาเลือกสถานะการจอง--</option>
                                    <option value="0">รอยืนยัน</option>
                                    <option value="1">ยืนยันเรียบร้อย</option>
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
                                        <option value="<?= $row['member_id']; ?>"><?= $row['member_id']; ?>  : <?= $row['member_fullname']; ?>
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

                        $product_id = $_POST['product_id'];                       
                        $order_price = $_POST['order_price'];                   
                        $orderdetail_qty = $_POST['orderdetail_qty'];
                        $orderdetail_datetime = $_POST['orderdetail_datetime'];
                        $orderdetail_status = $_POST['orderdetail_status'];
                        $member_id = $_POST['member_id'];

                        $sql = " insert into tb_orderdetail(`product_id`, `order_price`, `orderdetail_qty`, `orderdetail_datetime`, `orderdetail_status`, `member_id`)";
                        $sql .= " values ('$product_id','$order_price','$orderdetail_qty','$orderdetail_datetime','$orderdetail_status','$member_id')";
                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_orderdetail.php');
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