<?php include('header.php'); ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-content w3-section" style="max-width:1400px">
	<img class="mySlides" src="../../slide/slide1.jpg" style="width:100%">
	<img class="mySlides" src="../../slide/slide2.jpeg" style="width:100%">
	<img class="mySlides" src="../../slide/slide3.jpeg" style="width:100%">

</div>



<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {
			myIndex = 1
		}
		x[myIndex - 1].style.display = "block";
		setTimeout(carousel, 3000); // Change image every 2 seconds
	}
</script>
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">



			<div class="content-bottom">
				<center>
					<h5>BAG SHOP</h5>
				</center>
				<ul>
					<li><a href="#"><img class="img-responsive" src="../../images/c6.jpg" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../../images/c8.jpg" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../../images/c6.jpg" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../../images/c8.jpg" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../../images/c6.jpg" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../../images/c8.jpg" alt=""></a></li>

					<div class="clearfix"> </div>
				</ul>
			</div>
		</div>
		
		<?php include('footer.php'); ?>