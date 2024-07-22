<?php include('header.php'); ?>


<!--content-->

<div class=" container">
    <div class=" return">

        <form name="return.php" method="POST" action="return.php">
            <div class="col-md-6 register-top-grid">
                

                <div class="contact">

                    <!DOCTYPE html>
                    <html>
                    <style>
                        input[type=text],
                        select {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            box-sizing: border-box;
                        
                        }

                      

                        body {
    background-image: url("../../images/d5.png");
    
}
.wrapper{ 
    margin-left: 10px;
    margin-right: 10px;
    min-width: 650px;
  ;
}
                        

                        div {
                            border-radius: 5px;
                            padding: 1px;
                        }
                    </style>

                    <body>


                    <center><h3>Return Product</h3></center><br>

                    
                    <div class="mb-3">
                        
                            <label for="order_id">รหัสคำสั่งซื้อ</label>
                            <input type="text" id="order_id" name="order_id">
                        </div>

                        <div>
                            <label for="return_remark">หมายเหตุ</label>
                            <input type="text" id="return_remark" name="return_remark" placeholder="หมายเหตุ">
                        </div>

                        <div>
                            <label for="product_id">รหัสสินค้า</label>
                            <input type="text" id="product_id" name="product_id" placeholder="รหัสสินค้า ">
                        </div>

                        <div>
                            <label for="return_qty"> จำนวนสินค้าที่คืน</label>
                            <input type="text" id="return_qty" name="return_qty" placeholder=" ">
                        </div>

                        <div>
                            <label for="member_id">รหัสสมาชิก</label>
                            <input type="text" id="member_id" name="member_id" placeholder="member id">
                        </div>

                        <div>
                            <label for="return_datetime">วันที่คืนสินค้า :</label>
                            <input type="datetime-local" id="return_datetime" name="return_datetime" placeholder="Your paymeny date">

                        </div><br>


                        <div class="col-md-6 register-bottom-grid">
                            <input type="submit" name="submit" value="ยืนยันการส่งคืนสินค้า">
                        </div>
                        <div class="clearfix"> </div>
        </form>
        <?php


        if (isset($_POST['submit'])) {
            $order_id = $_POST['order_id'];
            $return_remark = $_POST['return_remark'];
            $product_id = $_POST['product_id'];
            $return_qty = $_POST['return_qty'];
            $member_id = $_SESSION['member_id'];
            $return_datetime = $_POST['return_datetime'];

            $error = 0;
            $sql_check_return_id = " select * from tb_return";
            $sql_check_return_id .= " where return_id='$return_id'";
            $numrowreturn_id = $cls_con->select_numrows($sql_check_return_id);

            if ($numrowreturn_id >= 1) {
                $error = 1;
                echo $cls_con->show_message('กรุณากรอกข้อมูลการส่งคืนสินค้าให้ครบถ้วน');
            }



            if ($error == 0) {

                $sql = " insert into tb_return(order_id,return_remark, product_id,return_qty,member_id,return_datetime)";
                $sql .= " values ('$order_id','$return_remark','$product_id','$return_qty','$member_id','$return_datetime')";
                if ($cls_con->write_base($sql)) {

                    echo $cls_con->show_message('ยืนยันการส่งคืนสินค้าเรียบร้อย');
                    echo $cls_con->goto_page(1, 'index.php');
                }
            }
        }

        ?>


                       
    </div>
</div>
<?php ?>


</form>

<div class="address-more">


</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
<br />
<?php include('footer.php'); ?>