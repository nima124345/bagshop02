<?php
include('../../class_conn.php');
$cls_conn=new class_conn();
$postcode=$_REQUEST['postcode'];
$sql=" select distinct RTRIM(AMPHUR_NAME) as AMPHUR_NAME,  AMPHUR_ID as AMPHUR_ID   from postcode_vw1";
$sql.=" where POSTCODE=$postcode";
$word=""; 
 
$result=$cls_conn->select_base($sql);
while ($row = mysqli_fetch_array($result))
{
	$AMPHUR_ID=$row['AMPHUR_NAME'];
	$AMPHUR_NAME=$row['AMPHUR_NAME'];
	 
	$word.= 	"<option value='$AMPHUR_ID' >$AMPHUR_NAME</option>";
	
}
//$word.=  	" </select>";
echo $word;
?>