<?php include('header.php');?>
<?php
session_destroy();
echo $cls_con->goto_page(0,'../alluser/login.php');

?>
<?php include('footer.php');?>
			