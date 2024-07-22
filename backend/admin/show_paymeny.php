<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลการชำระเงิน </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        <div align="right">
                            <a href="insert_paymeny.php">
                                <button>เพิ่มข้อมูล</button>
                            </a>
                        </div>

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>รหัสการชำระเงิน</th>
                                    <th>รหัสคำสั่งซื้อ</th>
                                    <th>สลิปการชำระเงิน</th>
                                    <th>ชื่อผู้ชำระเงิน</th>
                                    <th>ชื่อธนาคาร</th>
                                    <th>ราคาที่ชำระ</th>
                                    <th>รหัสสมาชิก</th>
                                    <th>วันที่ชำระเงิน</th>
                                    <th>ชื่อผู้รับ</th>
                                    <th>ที่อยู่</th>
                                    <th>ตำบล</th>
                                    <th>อำเภอ</th>
                                    <th>จังหวัด</th>
                                    <th>รหัสไปรษณีย์</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>สถานะการชำระเงิน</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                                $sql=" select * from tb_paymeny";
                                $result=$cls_conn->select_base($sql);
                                while($row=mysqli_fetch_array($result))
                                {
                            ?>
                                    <tr>
                                        <td>
                                            <?=$row['paymeny_id'];?>
                                        </td>
                                        <td>
                                            <?=$row['order_no'];?>
                                        </td>
                                        <td>
                                            <img src="../../upload/<?= $row['paymeny_pic'];?>" style="width:50px;height:50px;border-radius: 50%;">
                                        </td>
                                    
                                        <td>
                                            <?=$row['paymeny_by'];?>
                                        </td>
                                        <td>
                                            <?=$row['bank_name'];?>
                                        </td>
                                        <td>
                                            <?=$row['paymeny_price'];?>
                                        </td>
                                        <td>
                                            <?=$row['member_id'];?>
                                        </td>
                                        <td>
                                            <?=$row['paymeny_date'];?>
                                        </td>
                                        <td>
                                            <?=$row['recipient_name'];?>
                                        </td>
                                        <td>
                                            <?=$row['address'];?>
                                        </td>
                                        <td>
                                            <?=$row['subdistrict'];?>
                                        </td>
                                        <td>
                                            <?=$row['district'];?>
                                        </td>
                                        <td>
                                            <?=$row['province'];?>
                                        </td>
                                        <td>
                                            <?=$row['postcode'];?>
                                        </td>
                                        <td>
                                            <?=$row['phonenumber'];?>
                                        </td>
                                        <td>
                                            <?php
                                            switch($row['paymeny_status']){
                                                case '0':
                                                    echo '<span style="color:red;">รอตรวจสอบการชำระเงิน</span>';
                                                    break;
                                                case '1':
                                                    echo '<span style="color:green;">ชำระเงินเสร็จสิ้น</span>';
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="update_paymeny.php?id=<?=$row['paymeny_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../images/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_paymeny.php?id=<?=$row['paymeny_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../images/delete.png" /></a>
                                        </td>
                                    </tr>

                                    <?php
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>