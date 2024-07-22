<?php include('../../class_conn.php'); ?>
<?php $cls_con=new class_conn; ?>

<!DOCTYPE html>
<html>
<head>
    <title>D' Bu Di Beach Resort  Website</title>
    

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
<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font text-primary" href="index.php">D' Bu Di Beach Resort </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">ห้องพัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">ประเภทห้อง</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">สิ่งอำนวยความสะดวก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">ติดต่อเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">เกี่ยวกับ</a>
        </li>
		
		
      </ul>
      <div class="d-flex" role="search">
        <a type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" href="login.php">เข้าสู่ระบบ</a>
        <!-- <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">เข้าสู่ระบบ	</button> -->
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">สมัครสมาชิก</button>
      </div>
    </div>
  </div>
</nav>

	
</div>
</body>
</html>