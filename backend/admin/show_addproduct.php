<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>แสดงข้อมูลการเพิ่มห้องพัก </h2>
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
                    <a href="insert_addproduct.php">
                        <button>เพิ่มข้อมูล</button>
                    </a>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>รหัสเพิ่มห้อง</th>
                            <th>รหัสห้อง</th>
                            <th>จำนวนห้องเพิ่ม</th>
                            <th>สถานะการเพิ่มห้อง</th>
                            <th>วันที่เพิ่มห้อง</th>


                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $sql = " select * from tb_addproduct";
                        $result = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td>
                                    <?= $row['addproduct_id']; ?>
                                </td>
                                <td>
                                    <?= $row['product_id']; ?>
                                </td>
                                <td>
                                    <?= $row['addproduct_qty']; ?>
                                </td>
                                <td>
                                    <?= $row['addproduct_status']; ?>
                                </td>
                                <td>
                                    <?= $row['addproduct_datetime']; ?>
                                </td>

                                <td>
                                    <a href="update_addproduct.php?id=<?= $row['addproduct_id']; ?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../images/edit.png" /></a>
                                </td>
                                <td>
                                    <a href="delete_addproduct.php?id=<?= $row['addproduct_id']; ?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../images/delete.png" /></a>
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


<?php include('footer.php'); ?>