<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>แสดงข้อมูลโปรโมชัน </h2>
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
                            <th>รหัสโปรโมชัน</th>
                            <th>ชื่อโปรโมชัน</th>
                            <th>รายละเอียด</th>
                            <th>รูปภาพ</th>
                            <th>รหัสส่วนลด</th>
                            <th>ส่วนลด</th>
                            <th>วันที่เริ่ม</th>
                            <th>วันที่สิ้นสุด</th>
                            <th>สถานะโปรโมชั่น</th>
                            <th>ผู้ดูแลระบบ</th>



                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $sql = " SELECT
tb_promotion.promo_id,
tb_promotion.promo_name,
tb_promotion.promo_detail,
tb_promotion.promo_pic,
tb_promotion.promo_code,
tb_promotion.promo_discount,
tb_promotion.promo_status,
tb_promotion.promo_startdate,
tb_promotion.promo_enddate,
tb_promotion.promo_status,
tb_admin.admin_fullname

FROM
tb_promotion
INNER JOIN tb_admin ON tb_promotion.admin_id = tb_admin.admin_id";
                        $result = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td>
                                    <?= $row['promo_id']; ?>
                                </td>
                                <td>
                                    <?= $row['promo_name']; ?>
                                </td>
                                <td>
                                    <?= $row['promo_detail']; ?>
                                </td>
                                <td>
                                    <img src="../../upload/<?= $row['promo_pic']; ?>" width="150px" height="150px" />

                                </td>
                                <td>
                                    <?= $row['promo_code']; ?>
                                </td>
                                <td>
                                    <?= $row['promo_discount']; ?>
                                </td>
                                <td>
                                    <?= $row['promo_startdate']; ?>
                                </td>
                                <td>
                                    <?= $row['promo_enddate']; ?>
                                </td>
                                <td>
                                            <?php
                                            switch($row['promo_status']){
                                                case '0':
                                                    echo '<span style="color:red;">หมดเขต</span>';
                                                    break;
                                                case '1':
                                                    echo '<span style="color:green;">ใช้งาน</span>';
                                                    break;
                                            }
                                            ?>                                   
                                </td>
                                <td>
                                    <?= $row['admin_fullname']; ?>
                                </td>

                                <td>
                                    <a href="update_promotion.php?id=<?= $row['promo_id']; ?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../images/edit.png" /></a>
                                </td>
                                <td>
                                    <a href="delete_promotion.php?id=<?= $row['promo_id']; ?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../images/delete.png" /></a>
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