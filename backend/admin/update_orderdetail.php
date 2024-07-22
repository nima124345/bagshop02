<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>แก้ไขข้อมูลรายละเอียดการจอง</h3>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = " select *  from tb_orderdetail";
                        $sql .= " where";
                        $sql .= " orderdetail_id=$id";
                        $result = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $orderdetail_id = $row['orderdetail_id'];
                            $product_id = $row['product_id'];
                            $order_price = $row['order_price'];
                            $orderdetail_qty = $row['orderdetail_qty'];
                            $user_id = $row['user_id'];
                            $orderdetail_datetime = $row['orderdetail_datetime'];
                            $orderdetail_status = $row['orderdetail_status'];
                        }
                    }
                    ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <input type="hidden" name="orderdetail_id" value="<?= $orderdetail_id; ?>" />


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">รหัสการจอง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="product_id" name="product_id" value="<?=$product_id;?>" required="required"  class="form-control col-md-7 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_price">ราคาห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="order_price" name="order_price" value="<?=$order_price;?>"  required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_qty">จำนวนห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="orderdetail_qty" name="orderdetail_qty" value="<?=$orderdetail_qty;?>" required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_id">รหัสสมาชิก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <select  id="member_id" name="member_id" value="<?=$member_id;?>" required="required" class="form-control col-md-7 col-xs-12"> 
                                    <?php
                                        $sqld=" select * from tb_member";
                                        $resultd=$cls_conn->select_base($sqld);
                                        while($rowd=mysqli_fetch_array($resultd))
                                        {
                                            ?>
                                        <option value="<?=$rowd['member_id'];?>"><?=$rowd['member_id'];?> : <?=$rowd['member_fullname'];?></option>
                                         <?php
                                        }
                                    ?>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_datetime">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="orderdetail_datetime" name="orderdetail_datetime" value="<?=$orderdetail_datetime;?>"  required="required"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderdetail_status">สถานะรายละเอียดการจอง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="orderdetail_status" name="orderdetail_status" value="<?= $orderdetail_status; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="">--กรุณาเลือกสถานะการจอง--</option>
                                    <option value="0">รอยืนยัน</option>
                                    <option value="1">ยืนยันเรียบร้อย</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="submit" class="btn btn-success">แก้ไข</button>
                                <button type="reset" name="reset" class="btn btn-danger">ยกเลิก</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $orderdetail_id = $_POST['orderdetail_id'];
                        $product_id = $_POST['product_id'];
                        $order_price = $_POST['order_price'];
                        $orderdetail_qty = $_POST['orderdetail_qty'];
                        $member_id = $_POST['member_id'];
                        $orderdetail_datetime = $_POST['orderdetail_datetime'];
                        $orderdetail_status = $_POST['orderdetail_status'];


                        $sql = " update tb_orderdetail";
                        $sql .= " set";
                        $sql .= " ,product_id='$product_id'";
                        $sql .= " order_price='$order_price'";
                        $sql .= " ,orderdetail_qty='$orderdetail_qty'";
                        $sql .= " ,member_id='$member_id'";
                        $sql .= " ,orderdetail_datetime='$orderdetail_datetime'";
                        $sql .= " ,orderdetail_status='$orderdetail_status'";

                        $sql .= " where";
                        $sql .= " orderdetail_id=$orderdetail_id";

                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_orderdetail.php');
                        } else {
                            echo $cls_conn->show_message('แก้ไขข้อมูลไม่สำเร็จ');
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