<?php include('header.php'); 

$user_id = $_SESSION['member_id'];
$sql = "SELECT * FROM post_rating WHERE postid=".$postid." and user_id=" . $user_id;
$postid = $_POST['postid'];
$rating = $_POST['rating'];

// Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM post_rating WHERE postid=".$postid." and user_id=".$user_id;

$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];

if($count == 0){
 $insertquery = "INSERT INTO post_rating(user_id,postid,rating) values(".$user_id.",".$postid.",".$rating.")";
 mysqli_query($con,$insertquery);
}else {
 $updatequery = "UPDATE post_rating SET rating=" . $rating . " where user_id=" . $user_id . " and postid=" . $postid;
 mysqli_query($con,$updatequery);
}

// get average
$query = "SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE postid=".$postid;
$result = mysqli_query($con,$query) or die(mysqli_connect_errno());
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);

