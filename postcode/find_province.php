<?php
include('../../class_conn.php');
$cls_conn=new class_conn();
$postcode=$_REQUEST['postcode'];
$sql=" select RTRIM(PROVINCE_NAME) as PROVINCE_NAME from postcode_vw1";
$sql.=" where POSTCODE=$postcode";
$sql.=" limit 1";
 
$result=$cls_conn->select_base($sql);
while ($row = mysqli_fetch_array($result))
{
$province=$row['PROVINCE_NAME'];
}
 
 echo $province;


?>