<?php session_start(); ?>
<?php include('header.php'); ?>

<!--content-->
<div class="container">
    <div class="account">
        <h1>เข้าสู่ระบบ</h1>
        <div class="account-pass">
            <div class="col-md-8 account-top">
                <form method="post" action="login.php">
                    <div>
                        <span>E-mail</span>
                        <input type="text" name="username">
                    </div>

                    <div>
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>

                    <div style="text-align:center">
                        <input type="submit" name="submit" value="เข้าสู่ระบบ"><br><br>
                        <a href="register.php" style="color:dimgray"><b>ยังไม่ได้ลงทะเบียนใช่ไหม ?</b></a>
                    </div>
                </form>

                <?php
                    if (isset($_POST['submit'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql_admin = " select * from tb_admin";
                        $sql_admin .= " where admin_username='$username'";
                        $sql_admin .= " and admin_password='$password'";

                        $numrow_admin = $cls_con->select_numrows($sql_admin);

                    if ($numrow_admin >= 1) {
                        $result_admin = $cls_con->select_base($sql_admin);
                        while ($row_admin = mysqli_fetch_array($result_admin)) {
                            $admin_id = $row_admin['admin_id'];
                            $admin_fullname = $row_admin['admin_fullname'];

                            $_SESSION['type'] = 'admin';
                            $_SESSION['id'] = $admin_id;
                            $_SESSION['name'] = $admin_fullname;
                        }
                        echo $cls_con->show_message('ยินดีต้อนรับผู้ดูแลระบบ');
                        echo $cls_con->goto_page(1, '../../backend/admin/index.php');
                    } else {
                        $sql_user = " select * from tb_member";
                        $sql_user .= " where member_email='$username'";
                        $sql_user .= " and member_password='$password'";
                        $numrow_user = $cls_con->select_numrows($sql_user);

                        if ($numrow_user >= 1) {
                            $result_user = $cls_con->select_base($sql_user);
                            while ($row_user = mysqli_fetch_array($result_user)) {
                                $member_id = $row_user['member_id'];
                                $member_fullname = $row_user['member_fullname'];
                            }
                            $_SESSION['type'] = 'member';
                            $_SESSION['member_id'] = $member_id;
                            $_SESSION['name'] = $member_fullname;
                            echo $cls_con->show_message("ยินดีต้อนรับคุณ:". "". $member_fullname . "เข้าสู่ระบบ");
                            echo $cls_con->goto_page(1, '../member/index.php');
                            } else {
                                echo $cls_con->show_message('ไม่พบผู้ใช้งานนี้');
                                //echo $cls_con->goto_page(1,'login.php');
                            }
                            //echo $cls_con->goto_page(1,'login.php');
                        }
                    }
                ?>d
            </div>

            <div class="col-md-4 left-account">
                <a href="../index.php"><img class="img-responsive" src="../template/images/s4.jpg" alt=""></a>
                <div class="five">
                    <span>D' Bu Di Beach Resort  Website</span>
                </div>

                <a href="register.php" class="create">สมัครสมาชิก</a>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
