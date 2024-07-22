<?php
    header("content-type: text/html; charset=utf-8");
    header ("Expires: Wed, 21 Aug 2100 13:13:13 GMT");
    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    include "../../class_conn.php";
    conndb();

    $data = $_GET['data'];
    $val = $_GET['val'];
	$top_level = $_GET['top_level'];

         if ($data=='province') { 
		 
              echo "<select name='province' onChange=\"dochange('amphur',0, this.value);dochange('district',0,0);\">";
              echo "<option value='0'>----- เลือกจังหวัด -----</option>\n";
              $result=mysqli_query($conn,"select * from province order by PROVINCE_NAME");
              while($row = mysqli_fetch_array($result)){
				  
				   if($val == $row['PROVINCE_ID'])
				   {
					   echo "<option value='$row[PROVINCE_ID]' selected>$row[PROVINCE_NAME]</option>" ;
				   }
				   else
				   {
					   echo "<option value='$row[PROVINCE_ID]' >$row[PROVINCE_NAME]</option>" ;
				   }
				   
                   
              }
         } else if ($data=='amphur') {
			  
              echo "<select name='amphur' onChange=\"dochange('district',0,this.value)\">";
              echo "<option value='0'>----- เลือกเขต/อำเภอ -----</option>\n";                             
              $result=mysqli_query($conn,"SELECT * FROM amphur WHERE PROVINCE_ID= '$top_level' ORDER BY AMPHUR_NAME");
              while($row = mysqli_fetch_array($result)){
				  
				   if($val == $row['AMPHUR_ID'])
				   {
					   echo "<option value=\"$row[AMPHUR_ID]\" selected>$row[AMPHUR_NAME]</option> " ;
				   }
				   else
				   {
					   echo "<option value=\"$row[AMPHUR_ID]\">$row[AMPHUR_NAME]</option> " ;
				   }					   
			  }              
         } else if ($data=='district') {
			 			 
              echo "<select name='district'>\n";
              echo "<option value='0'>----- เลือกแขวง/ตำบล -----</option>\n";
              $result=mysqli_query($conn,"SELECT * FROM district WHERE AMPHUR_ID= '$top_level' ORDER BY DISTRICT_NAME");
              while($row = mysqli_fetch_array($result)){
				  
				  if($val == $row['DISTRICT_ID'])
				  {
					   echo "<option value=\"$row[DISTRICT_ID]\" selected>$row[DISTRICT_NAME]</option> \n" ;
				  }
				  else
				  {
					   echo "<option value=\"$row[DISTRICT_ID]\">$row[DISTRICT_NAME]</option> \n" ;
				  }
              }
         }
         echo "</select>\n";

        echo mysqli_error($conn);
        closedb();
?>