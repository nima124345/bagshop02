<?php
include('../../class_conn.php');
$cls_conn=new class_conn();
$postcode=$_REQUEST['postcode'];
$sql=" select distinct DISTRICT_ID as DISTRICT_ID,   RTRIM(DISTRICT_NAME) as DISTRICT_NAME   from postcode_vw1";
$sql.=" where POSTCODE=$postcode";
$word=""; 
 
$result=$cls_conn->select_base($sql);
while ($row = mysqli_fetch_array($result))
{
	$DISTRICT_ID=$row['DISTRICT_NAME'];
	$DISTRICT_NAME=$row['DISTRICT_NAME'];
	 
	$word.= 	"<option value='$DISTRICT_ID' >$DISTRICT_NAME</option>";
	
}
 
echo $word;
?>