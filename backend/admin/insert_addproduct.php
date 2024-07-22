<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ข้อมูลการเพิ่มห้องพัก</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">ชื่อห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="product_id" name="product_id" class="form-control col-md-7 col-xs-12">
                                    <option value="">--เลือก--</option>
                                    <?php
                                    $sql = " select * from tb_product";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['product_id']; ?>"><?= $row['product_id']; ?> : <?= $row['product_name']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addproduct_qty">รหัสห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="addproduct_qty" name="addproduct_qty" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addproduct_status">จำนวนห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="addproduct_status" name="addproduct_status" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addproduct_datetime">วันที่การเพิ่มห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="addproduct_datetime" name="addproduct_datetime" required="required" class="form-control col-md-7 col-xs-12">
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
                        $addproduct_qty = $_POST['addproduct_qty'];
                        $addproduct_status = $_POST['addproduct_status'];
                        $addproduct_datetime = $_POST['addproduct_datetime'];


                        $sql2 = " select * from tb_product";
                        $sql2 .= " where";
                        $sql2 .= " product_id='$product_id'";
                        $rs2 = $cls_conn->select_base($sql2);
                        while ($row2 = mysqli_fetch_array($rs2)) {
                                $product_qty=$row2['product_qty'];
                        }

                        $addproduct_qty=$addproduct_qty+$product_qty;

                         //$findqty ="select * from tb_product where product_id= '$product_id'" ;
                         //$rs = $cls_conn->select_base($findqty);
                         //$rd = $rs->fetch_assoc();
                         //$qty = $rd['product_qty'];
                         // die(json_encode($qty));
              

                        $sql = " insert into tb_addproduct(`product_id`, `addproduct_qty`, `addproduct_status`, `addproduct_datetime`)";
                        $sql .= " values ('$product_id','$addproduct_qty','$addproduct_status','$addproduct_datetime')";
                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_addproduct.php');
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