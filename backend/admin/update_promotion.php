<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลโปรโมชัน</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />


                         <?php
                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];

                            $sqlu=" select * from tb_promotion";
                            $sqlu.=" where";
                            $sqlu.=" promo_id='$id'";
                            $resultu=$cls_conn->select_base($sqlu);
                            while($rowu=mysqli_fetch_array($resultu))
                            {
                                $promo_id=$rowu['promo_id'];
                                $promo_name=$rowu['promo_name'];
                                $promo_detail=$rowu['promo_detail'];
                                $promo_pic=$rowu['promo_pic'];
                                $promo_code=$rowu['promo_code'];
                                $promo_discount=$rowu['promo_discount'];
                                $promo_startdate=$rowu['promo_startdate'];
                                $promo_enddate=$rowu['promo_enddate'];
                                $admin_id=$rowu['admin_id'];

             
                            }
                        }

                        ?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data"> 
                          <input type="hidden" name="promo_id" value="<?=$promo_id;?>"/>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_name">ชื่อโปรโมชัน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="promo_name" name="promo_name" value="<?=$promo_name;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_detail">รายละเอียด<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="promo_detail" name="promo_detail" value="<?=$promo_detail;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_pic">รูปภาพ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="promo_pic" name="promo_pic"  value="<?=$promo_pic;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_code">รหัสส่วนลด<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="promo_code" name="promo_code" value="<?=$promo_code;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_discount">ส่วนลด<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="promo_discount" name="promo_discount" value="<?=$promo_discount;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_startdate">วันที่เริ่ม<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="promo_startdate" name="promo_startdate" value="<?=$promo_startdate;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_enddate">วันที่สิ้นสุด<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="promo_enddate" name="promo_enddate" value="<?=$promo_enddate;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promo_status">สถานะโปรโมชั่น<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="promo_status" name="promo_status" value="<?=$promo_status;?>"  required="required" class="form-control col-md-7 col-xs-12">
                                <option value="0">หมดเขต</option>       
                                <option value="1">ใช้งาน</option>                               
                                </select>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_id">รหัสผู้ดูแลระบบ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="admin_id" name="admin_id" value="<?=$admin_id;?>:"  required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                        if(isset($_POST['submit']))
                        {
                            $promo_id=$_POST['promo_id'];
                            $promo_name=$_POST['promo_name'];
                            $promo_detail=$_POST['promo_detail'];
                            //$promo_pic=$_POST['promo_pic'];

                            $promo_code=$_POST['promo_code'];
                            $promo_discount=$_POST['promo_discount'];
                            $promo_startdate=$_POST['promo_startdate'];
                            $promo_enddate=$_POST['promo_enddate'];
                            $promo_status=$_POST['promo_status'];
                            $admin_id=$_POST['admin_id'];

                            $sql=" update tb_promotion";
                            $sql.=" set";
                            $sql.=" promo_name='$promo_name'";
                            $sql.=" ,promo_detail='$promo_detail'";
                            $promo_pic="";
                                if($_FILES["promo_pic"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['promo_pic']['name'],-4);
                                        $promo_pic=$datetime.'n1'.$file_name;
                                        move_uploaded_file($_FILES["promo_pic"]["tmp_name"],"../../upload/".$promo_pic); 
                                         $sql.=" ,promo_pic='$promo_pic'";
                                  }
                            $sql.=" ,promo_code='$promo_code'";
                            $sql.=" ,promo_discount='$promo_discount'";
                            $sql.=" ,promo_startdate='$promo_startdate'";      
                            $sql.=" ,promo_enddate='$promo_enddate'";
                            $sql.=" ,promo_status='$promo_status'";
                            $sql.="  where";
                            $sql.="  promo_id='$promo_id'";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_promotion.php');
                            }
                            else
                            {
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
<?php include('footer.php');?>