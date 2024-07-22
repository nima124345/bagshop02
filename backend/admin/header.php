<?php session_start(); ?>
<?php include('../../class_conn.php'); ?>
<?php $cls_conn = new class_conn; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D' Bu Di Beach Resort </title>
    <link rel="icon" type="image/x-icon" href="../image/Logo.png">

    <!-- Bootstrap -->
    <link href="../template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="../template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../template/build/css/custom.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ec837941fe.js" crossorigin="anonymous"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;"> <a href="index.php" class="site_title"><i class="fa fa-laptop"></i> <span>Admin</span></a> </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic"> <img src="../../images/profile.webp" class="img-circle profile_img"> </div>
                        <!-- เปลี่ยน ภาพ/โลโก้ แก้ไข picture.jpg -->
                        <!-- แก้ไขภาพ เอาคำสั่งนี้ออก alt="..." class="img-circle profile_img" -->
                        <div class="profile_info"> <span>Welcome</span>                             
                            <h2>ADMIN</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>เมนู</h3>
                            <ul class="nav side-menu">

                            <li><a><i class="fa fa-user"></i>ผู้ดูแลระบบ<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
</svg>เพิ่มข้อมูลผู้ดูแล</a></li>
                                        <li><a href="show_admin.php"><i class="fa fa-list"></i>แสดงข้อมูลผู้ดูแล</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-users"></i>ข้อมูลสมาชิก<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_member.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลสมาชิก</a></li>
                                        <li><a href="show_member.php"><i class="fa fa-list"></i>แสดงข้อมูลสมาชิก</a></li>

                                    </ul>
                                </li>

                                <li><a><i class="fa fa-bed"></i>การจัดการประเภทห้อง<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_type.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลประเภทห้อง</a></li>
                                        <li><a href="show_type.php"><i class="fa fa-list"></i>แสดงข้อมูลประเภทห้อง</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-book"></i>การจัดการค่าบริการ<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_product.php"><i class="fa fa-desktop"></i>เพิ่มข้อมูลค่าบริการ</a></li>
                                        <li><a href="show_product.php"><i class="fa fa-list"></i>แสดงข้อมูลค่าบริการ</a></li>
                                    </ul>
                                </li>

                                <!-- <li><a><i class="fa fa-tag"></i>การจัดการโปรโมชั่น<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_promotion.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลโปรโมชั่น</a></li>
                                        <li><a href="show_promotion.php"><i class="fa fa-list"></i>แสดงข้อมูลโปรโมชั่น</a></li>
                                    </ul>
                                </li> -->

                                 <li><a><i class="fa fa-book"></i>การจัดการข้อมูลห้อง<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="insert_addproduct.php"><i class="fa fa-desktop"></i>เพิ่มข้อมูลห้องพัก</a></li>
                                        <li><a href="show_addproduct.php"><i class="fa fa-list"></i>แสดงข้อมูลการเพิ่มห้องพัก</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-book"></i>การจัดการข้อมูลการจอง<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="show_order.php"><i class="fa fa-list"></i>แสดงข้อมูลการจอง</a></li>
                                    </ul>
                                </li> 

                                <li><a><i class="fa fa-list"></i>รายละเอียดการจอง<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="show_orderdetail.php"><i class="fa fa-list"></i>แสดงรายละเอียดการจอง</a></li>
                                    </ul>
                                </li> 

                               
                                
                                <li><a><i class="fa fa-building-columns"></i>ข้อมูลธนาคาร<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_bank.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลธนาคาร</a></li>
                                        <li><a href="show_bank.php"><i class="fa fa-plus-square"></i>แสดงข้อมูลธนาคาร</a></li>
                                    </ul>
                                </li> 


                                <!-- <li><a href="show_paymeny.php"><i class="fa fa-building-columns"></i>แสดงข้อมูลการชำระเงิน</a></li> 
                                <li><a href="show_order.php"><i class="fa fa-file-text"></i>ข้อมูลการจอง</a></li> 
                                <li><a href="show_orderdetail.php"><i class="fa fa-list"></i>รายละเอียดการจอง</a></li> 
                                
                                
                            
                                 <li><a><i class="fa fa-bed"></i>การจัดการห้องพัก<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_shipping.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลห้องพัก</a></li>
                                        <li><a href="show_shipping.php"><i class="fa fa-list"></i>แสดงข้อมูลห้องพัก</a></li>
                                    </ul>
                                </li> 

                                  <li><a><i class="fa fa-rotate-left"></i>การจัดการตารางห้องพัก<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="insert_return.php"><i class="fa fa-plus-square"></i>เพิ่มข้อมูลตารางห้องพัก</a></li>
                                        <li><a href="show_return.php"><i class="fa fa-list"></i>แสดงข้อมูลตารางห้องพีก</a></li>
                                    </ul>
                                </li>   
                               
                              <li><a href="report_sales.php"><i class="fa fa-file"></i>รายงานยอดการจอง</a></li>
                                <li><a href="show_rating.php"><i class="fa fa-file"></i>คะแนนความพึงพอใจการใช้งานระบบ</a></li> -->
                                
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i>ออกจากระบบ</a></li> 


                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="../template/production/images/user.jpg" alt="">Admin <span class=" fa fa-angle-down"></span> </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="../admin/show_admin.php">แก้ไขข้อมูลผู้ดูแลระบบ</a></li>
                                    <li><a href="../admin/show_product.php"></i>แก้ไขข้อมูลการจอง</a></li>
                                    

                                    <!-- <li><a href="../admin/show_product.php"><i class="fa fa-sign-out pull-right"></i>แก้ไขข้อมูลสินค้า</a></li> -->
                                    <!-- http://localhost/bagshop01/backend/admin/show_product.php -->

                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>ออกจากระบบ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->