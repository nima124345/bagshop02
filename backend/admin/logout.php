<?php include('header.php');?>
<?php
session_destroy();
echo $cls_conn->goto_page(0,'../../frontend/alluser/login.php');

?>
<?php include('footer.php');?>