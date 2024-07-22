<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>แก้ไขข้อมูลห้อง</h3>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>

                    <?php
                $id = $_GET['id'];
                $sql= " select *,type_name from tb_product as p left join tb_type  t on t.type_id = p.product_id";
                $sql.=" where p.product_id='$id'";
                
                $result = $cls_conn->select_base($sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo json_decode($row['type_name']);
                    $product_id = $row['product_id'];
                    $product_serial_no = $row['product_serial_no'];
                    $type_id = $row['type_id'];
                    $product_name = $row['product_name'];
                    $product_detail = $row['product_detail'];
                    $pro_colour=$row['pro_colour'];
                    $product_qty = $row['product_qty'];
                    $product_min_qty = $row['product_min_qty'];
                    $product_price = $row['product_price'];
                    $product_wieght = $row['product_wieght'];
                    $product_pic = $row['product_pic'];
                    $product_status = $row['product_status'];
                    $product_date = $row['product_date'];
                    $admin_id = $row['admin_id'];   
            ?> 
            
            <?php 
                } 
            ?>

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="product_id" value="<?=$product_id;?>"/> 
                    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_serial_no">serial no.<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_serial_no" name="product_serial_no" value="<?=$product_serial_no;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">ชื่อห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_name" name="product_name" value="<?=$product_name;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_id">รหัสประเภทห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="type_id" name="type_id" value="<?=$type_id;?>" required="required" class="form-control col-md-7 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_detail">รายละเอียดห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_detail" name="product_detail" value="<?=$product_detail;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_colour">สี<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="pro_colour" name="pro_colour" value="<?=$pro_colour;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_qty">จำนวนห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="product_qty" name="product_qty" value="<?=$product_qty;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_price">ราคาห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="product_price" name="product_price" value="<?=$product_price;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_pic">รูปห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="product_pic" name="product_pic" value="<?=$product_pic;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                       
  
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_status">สถานะห้อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="product_status" name="product_status" value="<?=$product_status;?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <option value="0">preorder</option>
                                    <option value="1">on stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_date">วันที่<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="product_date" name="product_date" value="<?=$product_date;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_id">รหัสผู้ดูแลระบบ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <select  id="admin_id" name="admin_id" value="<?=$type_id;?>" required="required" class="form-control col-md-7 col-xs-12"> 
                                    <?php
                                        $sqld=" select * from tb_admin";
                                        $resultd=$cls_conn->select_base($sqld);
                                        while($rowd=mysqli_fetch_array($resultd))
                                        {
                                            ?>
                                        <option value="<?=$rowd['admin_id'];?>"><?=$rowd['admin_id'];?> : <?=$rowd['admin_fullname'];?></option>
                                         <?php
                                        }
                                    ?>
                                </select> </div>
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

                        $product_id = $_POST['product_id'];
                        $product_serial_no = $_POST['product_serial_no'];
                        $type_id = $_POST['type_id'];
                        $product_name = $_POST['product_name'];
                        $product_detail = $_POST['product_detail'];
                        $pro_colour=$_POST['pro_colour'];
                        $product_qty = $_POST['product_qty'];
                        $product_min_qty = $_POST['product_min_qty'];
                        $product_price = $_POST['product_price'];
                        $product_wieght = $_POST['product_wieght'];
                        // $product_pic = $_FILES[''];
                        $product_status = $_POST['product_status'];
                        $product_date = $_POST['product_date'];
                        $admin_id = $_POST['admin_id'];

                        $sql = " update tb_product";
                        $sql.= " set";
                        $sql.= "  product_serial_no='$product_serial_no'";
                        $sql.= " ,type_id='$type_id'";
                        $sql.= " ,product_name='$product_name'";
                        $sql.= " ,product_detail='$product_detail'";
                        $sql.=" ,pro_colour='$pro_colour'";
                        $sql.= " ,product_qty='$product_qty'";
                        $sql.= " ,product_min_qty='$product_min_qty'";
                        $sql.= " ,product_price='$product_price'";
                        $sql.= " ,product_wieght='$product_wieght'";
                        $product_pic="";
                        if($_FILES["product_pic"]["name"] != ""){
                               $datetime=date("dmYHis");
                               $file_name=substr($_FILES['product_pic']['name'],-4);
                               $product_pic=$datetime.'_p1'.$file_name;
                               move_uploaded_file($_FILES["product_pic"]["tmp_name"],"../../upload/".$product_pic);
                               $sql.=" ,product_pic='$product_pic'"; 
                         }  
                         
                        //print_r($product_pic);
                        
                        $sql.= " ,product_status='$product_status'";
                        $sql.= " ,product_date='$product_date'";
                        $sql.= " ,admin_id='$admin_id'";
                        $sql.= " where";
                        $sql.= " product_id=$product_id";
                        


                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_product.php');
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