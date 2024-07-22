<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>เพิ่มข้อมูลห้องพัก</h2>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_serial_no">serial no.<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_serial_no" name="product_serial_no" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_id">รหัสประเภทห้องพัก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="type_id" name="type_id" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="">--เลือก--</option>
                                    <?php
                                    $sql = " select * from tb_type";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['type_id']; ?>"><?= $row['type_id']; ?>  : <?= $row['type_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">ชื่อห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_detail">รายละเอียดห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_detail" name="product_detail" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_qty">จำนวนห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="product_qty" name="product_qty" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">ราคาห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_price" name="product_price" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_pic">รูปห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="product_pic" name="product_pic" required="required" class="form-control col-md-7 col-xs-12"> 
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_status">สถานะห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="product_status" name="product_status"  required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="">--กรุณาเลือกสถานะห้อง--</option>
                                    <option value="0">preorder</option>
                                    <option value="1">on stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_date">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="product_date" name="product_date" required="required" class="form-control col-md-7 col-xs-12">
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
                                        <option value="<?= $row['admin_id']; ?>"><?= $row['admin_id']; ?> : <?= $row['admin_fullname']; ?>
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
                        $product_serial_no = $_POST['product_serial_no'];
                        $type_id = $_POST['type_id'];
                        $product_name = $_POST['product_name'];
                        $product_detail = $_POST['product_detail'];
                        $pro_colour=$_POST['pro_colour'];
                        $product_qty = $_POST['product_qty'];
                        $product_min_qty = $_POST['product_min_qty'];
                        $product_price = $_POST['product_price'];
                        $product_wieght = $_POST['product_wieght'];
                       // $product_pic=$_POST['product_pic'];
                       $product_pic="";
                       if($_FILES["product_pic"]["name"] != ""){
                              $datetime=date("dmYHis");
                              $file_name=substr($_FILES['product_pic']['name'],-4);
                              $product_pic=$datetime.'_p1'.$file_name;
                              move_uploaded_file($_FILES["product_pic"]["tmp_name"],"../../upload/".$product_pic); 
                        }    

                         // print_r($product_pic);
                        $product_status = $_POST['product_status'];
                        $product_date = $_POST['product_date'];
                        $admin_id = $_POST['admin_id'];

                        

                        $sql = " insert into tb_product(product_serial_no, type_id, product_name, product_detail,pro_colour, product_qty, product_min_qty, product_price,product_wieght, product_pic, product_status, product_date, admin_id)";
                        $sql .= " values ('$product_serial_no','$type_id','$product_name','$product_detail','$pro_colour','$product_qty','$product_min_qty','$product_price','$product_wieght','$product_pic','$product_status','$product_date','$admin_id')";

                       

                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_product.php');
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