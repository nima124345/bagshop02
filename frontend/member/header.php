<?php session_start();?>
<?php include('../../class_conn.php'); ?>
<?php 
    $cls_con=new class_conn;
    $type=$_SESSION['type'];
    if($type!='member')
    {
        echo $cls_con->show_message('กรุณา login ก่อน ');
        echo $cls_con->goto_page(0,'../alluser/login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>BAG SHOP</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="../template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../template/js/jquery.min.js"></script>
            
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="../template/css/style.css" rel="stylesheet" type="text/css" media="all" />
            
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
            
    <!--//fonts-->
    <!-- start menu -->
    <link href="../template/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../template/js/memenu.js"></script>
    <script src="../template/js/simpleCart.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".memenu").memenu();
        });
    </script>
</head>
<body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
            <!--<div class="search">
                    <form>
                        <input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="Go">
                    </form>
                </div>-->
                
                <div class="header-left">
                    <ul>
                        <li ><a href="profile.php">สวัสดีคุณ:<?=$_SESSION['name'];?></a></li>
						<li><a href="logout.php">ออกจากระบบ</a></li>

                    </ul>

                    <div class="cart box_1">
                        <a href="checkout.php">
                            <h3><div class="total"></div>
							<img src="../template/images/cart.png" alt=""/></h3>
                        </a>      
                    </div>
                </div>
           </div>
        </div>

        <div class="container">
            <div class="head-top">
                <div class="logo">
                    <a href="index.php"><img src="../../image/bag_1.png" alt=""></a>
                </div>
                
                <div class="h_menu4">
                    <ul class="memenu skyblue">
                        <li class="active grid"><a class="color8" href="index.php"><b>HOME</b></a></li>
                        <li><a class="color6" href="new.php"><b>BLOG</b></a></li>
						<li><a class="color1" href="product.php"><b>SHOP</b></a></li>
                        <li><a class="color2" href="promotion.php"><b>PROMOTION</b></a></li>
                        <li><a class="color3" href="order.php"><b>ORDER</b></a></li>
						<li><a class="color1" href="payment.php"><b>PAYMENT</b></a></li>
                     	<li><a class="color4" href="shipping_history.php"><b>DELIVERY STATUS</b></a></li>
                        <li><a class="color6" href="contact.php"><b>CONTACT US</b></a></li>
        


				    </ul>
                </div>
                        
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>
</html>