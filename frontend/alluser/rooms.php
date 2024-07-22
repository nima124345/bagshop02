<!DOCTYPE html>
<html>
<head>
	<title>D' Bu Di Beach Resort  Website</title>
	<!-- CSS only -->
<?php require('links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('header.php'); ?>
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ห้องพักของเรา</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">

     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">ตัวกรอง</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">ตรวจสอบความพร้อม</h5>
        <label class="form-label">Check-in</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label">Check-out</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">สิ่งอำนวยความสะดวก</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f1">กาน้ำร้อน</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">เตาย่าง</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">น้ำแข็ง</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">น้ำดืม</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">กาแฟซอง</label>
        </div>
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">ผู้ใหญ่</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">ผู้ใหญ่</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div>
          <label class="form-label">เด็ก</label>
          <input type="number" class="form-control shadow-none">
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/20.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ชื่อห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">สิ่งอำนวยความสะดวก</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              โทรทัศน์
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              กาน้ำร้อน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              กาแฟซอง
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">จำนวนผู้เข้าพัก</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 ผู้ใหญ่
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 เด็ก
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/21.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div>  
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/21.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/16.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/17.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/19.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/23.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/24.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
          </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">ราคา1,200฿</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">จองตอนนี้</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/21.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">ห้องธรรมดา</h5>
      <div class="features mb-4">
            <h6 class="mb-1">คุณสมบัติ</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 เตียงนอน
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ห้องน้ำ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 ระเบียง
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 โทรทัศน์
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div> 
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">Ꝛ2000 per night </h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/22.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room Heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">Ꝛ2000 per night </h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
</div>


  </div>
</div>



<?php require('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>