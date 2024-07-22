<?PHP session_start()?>
<?php include('header.php'); ?>

<div class="product">
    <div class="container">
        <div class="col-md-3 product-price">
            <div class=" rsidebar span_1_of_left">
                <div class="of-left">
                    <h3 class="cate">หมวดหมู่สินค้า</h3>
                </div>

                <ul class="menu">
                    <li class="item">
                        <a href="" onclick="window.location.href ='product.php'">
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
                <a href="promotion.php"><img class="img-responsive" src="../../images/bag_1.jpg" alt="">
                    <div class="six1"></div>
                </a>
            </div>
        </div>

        <div class="col-md-9 product1">
            <?php
            $sql_product = " select * from tb_product";
            if (isset($_GET['type_id'])) {
                $type_id = $_GET['type_id'];
                $sql_product .= " where type_id='$type_id'";
            }
            $result_product = $cls_con->select_base($sql_product);
            while ($row_product = mysqli_fetch_array($result_product)) {
            ?>

            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at">
                    <a href="single.php?id=<?= $row_product['product_id']; ?>"><img class="img-responsive" src="../../upload/<?= $row_product['product_pic'];?>" alt=""> 
                        <div class="pro-grid">
                            <span class="buy-in"?>ดูรายละเอียดสินค้า</span>
                        </div>
                    </a>
                </div>

                <p class="tun"><?= $row_product['product_name']; ?></p>
                <form method="post" action="service/cart.php">
                    <button type="submit" name="submit" class="item_add" >
                        <input class="btn btn-warning btn-lg" value="฿ <?= $row_product['product_price']; ?>">
                    </button>

                    <input type="hidden" name="product_id" value="<?= $row_product['product_id']; ?>" />
                    <input type="hidden" name="product_price" value="<?= $row_product['product_price']; ?>" />
                </form>
                <br>
            </div>
            
            <?php
                }
            ?>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<?php include('footer.php'); ?>