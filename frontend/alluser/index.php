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

<style type="text/css">
	
	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
</style>
</head>
<body>

<?php require('header.php'); ?>
<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/9.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/8.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Check Booking Availability</h5>
 			<form>
 				<div class="row align-items-end">
				 <div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">เลือกห้อง</label>
 						<select class="form-select shadow-none">
  					
						 <option value="1">โซนมัลดีฟส์</option>
  						<option value="2">อเมซ่อน</option>
  						<option value="3">แฝด5้ห้อง</option>
						<option value="3">โซนปาร์ม บีช</option>
						
						</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-out</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					

 					<div class="col-lg-3 mb-lg-3 mt-3">
 						<button type="submit" class="btn text-white shadow-none custom-bg" >ค้นหาห้องว่าง</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>
 
 <!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">รีสอร์ต ยินดีตอนรับ</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/12.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">ชื่อห้องธรรมดา</h5>
			    <h6 class="mb-4">2,000 ต่อคืน </h6>
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
			    <div class="Facilities mb-4">
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
			    		กาแฟซอง    				</span>
    			</div>

    			<div class="guests mb-4">
			    	<h6 class="mb-1">จำนวนผู้เข้าพัก</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 ผู้ใหญ่
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 เด็ก
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">จองตอนนี้</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/13.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">ชื่อห้องธรรมดา</h5>
			    <h6 class="mb-4">2,000 ต่อคืน </h6>
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
			    <div class="Facilities mb-4">
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
			    		กาแฟซอง    				</span>
    			</div>

    			<div class="guests mb-4">
			    	<h6 class="mb-1">จำนวนผู้เข้าพัก</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 ผู้ใหญ่
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 เด็ก
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">จองตอนนี้</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/15.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">ชื่อห้องธรรมดา</h5>
			    <h6 class="mb-4">2,000 ต่อคืน </h6>
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
			    <div class="Facilities mb-4">
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
			    		กาแฟซอง    				</span>
    			</div>

    			<div class="guests mb-4">
			    	<h6 class="mb-1">จำนวนผู้เข้าพัก</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 ผู้ใหญ่
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 เด็ก
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">จองตอนนี้</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">รายละเอียดเพิ่มเติม</a>
    				</div>
			  </div>
			</div>
 		</div>


 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
 		</div>
 	</div>	
 </div>

 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">สิ่งอำนวยความสะดวกของเรา</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
 		</div>
 	</div>
 </div>

<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
 		<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63225.996807740055!2d80.97815907936754!3d7.934196847392783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb456e05e5a4c9%3A0x72cd1cfea9d4d0a9!2sPolonnaruwa%20Ancient%20City!5e0!3m2!1sen!2slk!4v1659525623039!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
 		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
 				<br>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
<hr>
 <?php require('footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>