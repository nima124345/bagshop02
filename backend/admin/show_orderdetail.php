<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลรายละเอียดการจอง </h2>
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
                            <a href="insert_orderdetail.php">
                                <button>เพิ่มข้อมูล</button>
                            </a>
                        </div>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>รหัสการจอง</th>
                                    <th>รหัสจอง</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>วันที่</th>
                                    <th>สถานะรายละเอียดการจอง</th>
                                    <th>รหัสสมาชิก</th>
                                    
                                    
                                    
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_orderdetail ";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['orderdetail_id'];?>
                                        </td>
                                        <td>
                                            <?=$row['product_id'];?>
                                        </td>
                                        <td>
                                            <?=$row['order_price'];?>
                                        </td>
                                        <td>
                                            <?=$row['orderdetail_qty'];?>
                                        </td>
                                      
                                        <td>
                                            <?=$row['orderdetail_datetime'];?>
                                        </td>
                                        <td>
                                            <?php
                                            switch($row['orderdetail_status']){
                                                case '0':
                                                    echo '<span style="color:orange;">ลูกค้ากำลังดำเนินการ</span>';
                                                    break;
                                                case '1':
                                                    echo '<span style="color:green;">ดำเนินการเสร็จสิ้น</span>';
                                                
                                                break;
                                                    case '2':
                                                        echo '<span style="color:red;">ยกเลิกออเดอร์</span>';
                                                    
                                                    break;
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <?=$row['user_id'];?>
                                        </td>
                                        
                                        <td>
                                            <a href="update_orderdetail.php?id=<?=$row['orderdetail_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../images/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_orderdetail.php?id=<?=$row['orderdetail_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../images/delete.png" /></a>
                                        </td>
                                    </tr>
                                    <?php
                             }
                          ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php');?>