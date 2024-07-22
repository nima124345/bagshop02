<?php include('header.php'); ?>

<div class="product">
    <!--content-->
    <div class="product">
        <div class="container">
            <div class="col-md-3 product-price">
                <div class=" rsidebar span_1_of_left">
                    <div class="of-left">
                        <h3 class="cate">หมวดหมู่สินค้า</h3>
                    </div>

                    <ul class="menu">
                        <li class="item">
                            <a href="" onclick="window.location.href = 'product.php'">
                                ทั้งหมด
                            </a>

                            <?php
                            $sql_type = " select * from tb_type";
                            $result_type = $cls_con->select_base($sql_type);
                            while ($row_type = mysqli_fetch_array($result_type)) {
                                $type_id = $row_type['type_id'];
                            ?>

                                <a href="" onclick="window.location.href = 'product.php?type_id=<?= $row_type['type_id']; ?>'">
                                    <?= $row_type['type_name']; ?>
                                </a>

                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>

                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function() {
                        var menu_ul = $('.menu > li > ul'),
                            menu_a = $('.menu > li > a');
                        menu_ul.hide();
                        menu_a.click(function(e) {
                            e.preventDefault();
                            if (!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true, true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true, true).slideUp('normal');
                            }
                        });
                    });
                </script>

                <div class=" per1">
                    <a href="#"><img class="img-responsive" src="../template/images/pro.jpg" alt="">
                        <div class="six1">
                            <h4>DISCOUNT</h4>
                            <p>Up to</p>
                            <span>60%</span>
                        </div>
                    </a>
                </div>
            </div>

            <?php
            $id = $_GET['id'];
            $sql = " select *,type_name from tb_product as p left join tb_type  t on t.type_id = p.product_id";
            $sql .= " where p.product_id='$id'";

            $result = $cls_con->select_base($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo json_decode($row['type_name']);
                $product_id = $row['product_id'];
                $product_serial_no = $row['product_serial_no'];
                $type_id = $row['type_name'];
                $product_name = $row['product_name'];
                $product_detail = $row['product_detail'];
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

            <div class="col-md-9 product-price1">
                <div class="col-md-5 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="../../upload/<?= $product_pic; ?>">
                                <img src="../../upload/<?= $product_pic; ?>" />
                            </li>
                        </ul>
                    </div>

                    <!-- FlexSlider -->
                    <script defer src="../template/js/jquery.flexslider.js"></script>
                    <link rel="stylesheet" href="../template/css/flexslider.css" type="text/css" media="screen" />
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                </div>

                <div class="col-md-7 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                        <h4><?= $product_name; ?></h4>
                        <h3><?= $product_serial_no; ?></h3>
                        <div class="star-on">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>

                        <h5 class="item_price">฿ <?= $product_price; ?> บาท</h5>
                        <form method="post">
                            <div class="available">
                                <ul>
                                    <li>ประเภท: <?= $type_id; ?></li>
                                    <li>รายละเอียด: <?= $product_detail; ?></li>
                                    <li>น้ำหนัก: <?= $product_wieght; ?></li>
                                    <li>จำนวน:
                                        <input type="number" name="orderdetail_qty" id="orderdetail_qty" value="1" min="1" style="width:50px;text-align:center" />
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>

                            <input type="hidden" value="<?= $product_qty; ?>">
                            <input type="hidden" name="product_id" value="<?= $product_id; ?>" />
                            <input type="hidden" name="product_price" value="<?= $product_price; ?>" />
                            <button name="submit" class="btn btn-success" type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color:#FFFFFF;">ใส่ตระกร้า</button>
                        </form>
                        <?php


                        // echo $qty;

                        if (isset($_POST['submit'])) {
                            $user_id = $_SESSION['member_id'];
                            // echo $user_id;
                            $product_id = $_POST['product_id'];
                            $order_price = $_POST['product_price'];
                            $orderdetail_qty = $_POST['orderdetail_qty'];
                            $orderdetail_datetime = date("Y-m-d h:i:sa");

                            $check = "select product_qty from tb_product where product_id='$product_id'";
                            $re = $cls_con->select_base($check);
                            $row = $re->fetch_array();
                            $product_qty = $row['product_qty'];

                            $status = 0;
                            $check_select = "SELECT * FROM tb_orderdetail WHERE product_id = '$product_id' and `orderdetail_status` = '$status'";
                            $run = $cls_con->select_base($check_select);



                            if ($orderdetail_qty >= $product_qty || $product_qty === 0) {

                                echo $cls_con->show_message('จำนวนสินค้ามีไม่พอ');
                            } else if ($run->num_rows > 0) {
                                $sql_update = "update tb_orderdetail set orderdetail_qty = (orderdetail_qty + $orderdetail_qty) where product_id = '$product_id' and `orderdetail_status` = '$status';";
                                if ($cls_con->write_base($sql_update) == true) {
                                    echo $cls_con->show_message('เพิ่มสินค้าสำเร็จ');
                                    echo $cls_con->goto_page(1, 'checkout.php');
                                } else {
                                    echo $cls_con->show_message('บันทึกข้อมูลไม่สำเร็จ');
                                    echo $sql_update;
                                }

                                $user_id = $_SESSION['member_id'];
                                $sql_select = "select * from tb_orderdetail where product_id = '$product_id' and user_id = '$user_id'";
                                $rsdw = $cls_con->select_base($sql_select);
                                $row = $rsdw->fetch_array();
                                $qty = $row['orderdetail_qty'];
                                //ลดสต็อค
                                $update_stock = "UPDATE `tb_product` SET `product_qty` = (product_qty-$qty) WHERE product_id='$product_id'; ";
                                //   die($update_stock);
                                $cls_con->write_base($update_stock);
                            } else {
                                $sql = " INSERT INTO `tb_orderdetail`(`product_id`, `order_price`, `orderdetail_qty`, `orderdetail_datetime`,`user_id`)";
                                $sql .= " values ('$product_id','$order_price','$orderdetail_qty','$orderdetail_datetime','$user_id')";
                                // die($sql);
                                if ($cls_con->write_base($sql) == true) {
                                    echo $cls_con->show_message('success');
                                    echo $cls_con->goto_page(1, 'checkout.php');
                                } else {
                                    echo $cls_con->show_message('fail');
                                    echo $sql;
                                }

                                $user_id = $_SESSION['member_id'];
                                $sql_select = "select * from tb_orderdetail where product_id = '$product_id' and user_id = '$user_id'";
                                $rsdw = $cls_con->select_base($sql_select);
                                $row = $rsdw->fetch_array();
                                $qty = $row['orderdetail_qty'];
                                //ลดสต็อค
                                $update_stock = "UPDATE `tb_product` SET `product_qty` = (product_qty-$qty) WHERE product_id='$product_id'; ";
                                //   die($update_stock);
                                $cls_con->write_base($update_stock);
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<?php include('footer.php'); ?>
