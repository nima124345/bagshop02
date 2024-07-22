<?php include('header.php'); ?>
<?php
if (isset($_POST['rating'])) {
	$rating = $_POST['rating'];

	// Connect to the database
	$conn = mysqli_connect("localhost", "root", "1234", "db_bagshop01");


	// Store the rating in the database
	$query = "INSERT INTO ratings (rating) VALUES ($rating)";
	mysqli_query($conn, $query);

	// Close the database connection
	mysqli_close($conn);
}
//ฟังก์ชั่นในการลิงค์ไปหน้าอื่น
function goto_page($speed, $url)
{
	return "<meta http-equiv='refresh' content='$speed;$url' />";
}
?>

<form action="index.php" method="post">
	<table width="70%" border="1" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		<tr>
			<td width="75%" rowspan="2" align="center">
				<br>
				<strong>thank you for support us <br><img class="img" src="../../upload/h2.jpg" style="width:10%"></strong>
			</td>
        </tr>
</form>





