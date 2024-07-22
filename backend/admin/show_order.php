<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลการจอง </h2>
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
                         
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>รหัสการจอง</th>
                                    <th>หมายเลขการจอง</th>
                                    <th>ราคารวม</th>
                                    <th>วันที่จอง</th>
                                    <th>รหัสผู้ใช้งาน</th>
                                   


                                    <th>ยืนยัน</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_order";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['order_id'];?>
                                        </td>
                                        <td>
                                            <?=$row['order_no'];?>
                                        </td>
                                        <td>
                                            <?=$row['order_total'];?>
                                        </td>
                                       
                                        <td>
                                            <?=$row['order_datetime'];?>
                                        </td>
                                        <td>
                                            <?=$row['user_id'];?>
                                        </td>
                                     
                                        
                                        <td>
                                            <a href="update_order.php?id=<?=$row['order_id'];?>" onclick="return confirm('ยืนยันหมายเลขการสั่งซื้อ?')"><img src="../../images/check.png " width="25px" /></a>
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