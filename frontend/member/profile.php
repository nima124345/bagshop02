<?php session_start(); ?>

<?php include('../../class_conn.php'); ?>
<?php $cls_conn = new class_conn; ?>




<head>
    <title>PROFILE</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="template/css/style.css">
    <link rel="stylesheet" type="text/css" href="template/css/responsive.css">
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>

    <div class="contact">

        <div class="container">
            <center>
                <h1>
                    <font color='#FF6600' </font>ข้อมูลผู้ใช้งาน
                </h1>
            </center>
            <br>
            <p>
                <center><img src="../../images/profile.webp" </center>
            </p>
            <div class="contact-form">

                <!-- FIXED Top Navbar -->
                <div class="top-navbar">
                    <div class="top-navbar-left">
                        <a href="#" id="menu-left" data-activates="slide-out-left">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                    <div class="site-title">

                    </div>
                </div>
                <!-- End FIXED Top Navbar -->


                <!-- CONTENT CONTAINER -->
                <div class="content-container">

                    <!-- Product navigation -->
                    <div class="product-list-navigation animated fadeInRight">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <center>
                                            <h2>
                                                <font color='#FF6600' </font>แก้ไขข้อมูลผู้ใช้งาน
                                            </h2>
                                        </center>

                                        <!--<ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>-->
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <?php
                                        if (isset($_SESSION['member_id'])) {
                                            $id = $_SESSION['member_id'];
                                            $sql = " select *  from tb_member";
                                            $sql .= " where";
                                            $sql .= " member_id=$id";
                                            $result = $cls_conn->select_base($sql);
                                            while ($row = mysqli_fetch_array($result)) {

                                                $member_id = $row['member_id'];

                                                $member_fullname = $row['member_fullname'];
                                                $member_address = $row['member_address'];
                                                $member_tumbol = $row['member_tumbol'];
                                                $member_amphur = $row['member_amphur'];
                                                $member_province = $row['member_province'];
                                                $member_postcode = $row['member_postcode'];
                                                $member_tel = $row['member_tel'];
                                                $member_email = $row['member_email'];
                                                $member_username = $row['member_username'];
                                                $member_password = $row['member_password'];
                                                $member_status = $row['member_status'];
                                                $member_datetime = $row['member_datetime'];
                                            }
                                        }
                                        ?>


                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                                            <input type="hidden" name="member_id" value="<?= $member_id; ?>" />


                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_fullname">ชื่อสมาชิก<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_fullname" name="member_fullname" value="<?= $member_fullname; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                        

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_address">ที่อยู่<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_address" name="member_address" value="<?= $member_address; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_tumbol">ตำบล<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_tumbol" name="member_tumbol" value="<?= $member_tumbol; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_amphur">อำเภอ<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_amphur" name="member_amphur" value="<?= $member_amphur; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_province">จังหวัด<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_province" name="member_province" value="<?= $member_province; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_postcode">รหัสไปรษณีย์<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_postcode" name="member_postcode" value="<?= $member_postcode; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_tel">เบอร์โทรศัพท์<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" id="member_tel" name="member_tel" value="<?= $member_tel; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <script>
                                                    function number() {
                                                        if (isNaN(member_tel.value)) {
                                                            alert("Please Insert Numbers Only");
                                                            return false;
                                                        }
                                                    }
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_email">อีเมล<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" id="member_email" name="member_email" value="<?= $member_email; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_username">username<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_username" name="member_username" value="<?= $member_username; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <script>
                                                    function checkText() {
                                                        var text = document.getElementById('member_username').value;
                                                        if (text.search(/[^a-zA-Z0-9\_@]/) !== -1) {
                                                            alert('Can Only Be Specified A-Z,a-z,0-9 and _ @');
                                                            document.getElementById('member_username').value = "";
                                                            return false;
                                                        }
                                                    }
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_password">รหัสผ่าน<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="member_password" name="member_password" value="<?= $member_password; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <script>
                                                    function checkPass() {
                                                        var text = document.getElementById('member_password').value;
                                                        if (text.search(/[^a-zA-Z0-9\_@]/) !== -1) {
                                                            alert('Can Only Be Specified A-Z,a-z,0-9 and _ @');
                                                            document.getElementById('member_password').value = "";
                                                            return false;
                                                        }
                                                    }
                                                </script>
                                            </div>

                                        

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_datetime">วันเกิด<span class="required">:</span> </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="datetime-local" id="member_datetime" name="member_datetime" value="<?= $member_datetime; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" name="submit" class="btn btn-success">แก้ไข</button>

                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            $member_fullname = $_POST['member_fullname'];
                                            $member_address = $_POST['member_address'];
                                            $member_tumbol = $_POST['member_tumbol'];
                                            $member_amphur = $_POST['member_amphur'];
                                            $member_province = $_POST['member_province'];
                                            $member_postcode = $_POST['member_postcode'];
                                            $member_tel = $_POST['member_tel'];
                                            $member_email = $_POST['member_email'];
                                            $member_username = $_POST['member_username'];
                                            $member_password = $_POST['member_password'];
                                            $member_status = $_POST['member_status'];
                                            $member_datetime = $_POST['member_datetime'];


                                            $sql = " update tb_member";
                                            $sql .= " set";
                                            $sql .= " member_fullname='$member_fullname'";
                                            $sql .= " ,member_address='$member_address'";
                                            $sql .= " ,member_tumbol='$member_tumbol'";
                                            $sql .= " ,member_amphur='$member_amphur'";
                                            $sql .= " ,member_province='$member_province'";
                                            $sql .= " ,member_postcode='$member_postcode'";
                                            $sql .= " ,member_tel='$member_tel'";
                                            $sql .= " ,member_email='$member_email'";
                                            $sql .= " ,member_username='$member_username'";
                                            $sql .= " ,member_password='$member_password'";
                                            $sql .= " ,member_status='$member_status'";
                                            $sql .= " ,member_datetime='$member_datetime'";
                                            $sql .= " where";
                                            $sql .= " member_id=$member_id";

                                            if ($cls_conn->write_base($sql) == true) {
                                                echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
                                                echo $cls_conn->goto_page(1, 'profile.php');
                                            } else {
                                                echo $cls_conn->show_message('แก้ไขข้อมูลไม่สำเร็จ');
                                                echo $sql;
                                            }
                                        }

                                        ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT CONTAINER -->


                <!-- FOOTER -->
                <!-- End FOOTER -->

                <!-- Back to top Link -->


            </div>
            <!-- END MAIN PAGE -->

        </div><!-- #main -->

        <script type="text/javascript" src="template/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="template/js/materialize.min.js"></script>
        <script type="text/javascript" src="template/js/slick.min.js"></script>
        <script type="text/javascript" src="template/js/jquery.slicknav.js"></script>
        <script type="text/javascript" src="template/js/jquery.swipebox.js"></script>
        <script type="text/javascript" src="template/js/custom.js"></script>

</body>

</html>