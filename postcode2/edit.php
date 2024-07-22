<?php
include "../../class_conn.php";
conndb();


$province_id = $_POST['province'];
$amphur_id = $_POST['amphur'];
$district_id = $_POST['district'];

?>

<!DOCTYPE html>
<html>
    <head>
	
	<title>ทำ Dropdown ให้เลือกจังหวัด อำเภอ ตำบล และทำหน้าจอแก้ไข ให้มีการกำหนดค่าเริ่มต้น</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<STYLE type=text/css>
	  A:link { color: #0000cc; text-decoration:none}
	  A:visited {color: #0000cc; text-decoration: none}
	  A:hover {color: red; text-decoration: none}
	 </STYLE>
	<style type="text/css">
	<!--
	small { font-family: Arial, Helvetica, sans-serif; font-size: 9pt; } 
	input, textarea,select { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	b { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	big { font-family: Arial, Helvetica, sans-serif; font-size: 14pt; } 
	strong { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; font-weight : extra-bold; } 
	font, td { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; } 
	BODY { font-size: 11pt; font-family: Arial, Helvetica, sans-serif; } 
	-->
	</style>
            
    <script language=Javascript>
        function Inint_AJAX() {
           try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
           try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
           try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
           alert("XMLHttpRequest not supported");
           return null;
        };

        function dochange(src,val,top_level) {
						
             var req = Inint_AJAX();
             req.onreadystatechange = function () { 
                  if (req.readyState==4) {
                       if (req.status==200) {
                            document.getElementById(src).innerHTML=req.responseText; //รับค่ากลับมา
                       } 
                  }
             };
             req.open("GET", "localtion_edit.php?data="+src+"&val="+val+"&top_level="+top_level); //สร้าง connection
             req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             req.send(null); //ส่งค่า
        }


		
		window.onload = function(){
						
			dochange('province', <?=$province_id; ?>,0);
			dochange('amphur', <?=$amphur_id; ?>,<?=$province_id; ?>);
			dochange('district', <?=$district_id; ?>,<?=$amphur_id; ?>);
		}
		
    </script>
	
	<script type="text/javascript">
	function checkform ( form )
	{

	  if (form.province.value == "0") {
		alert( "โปรดเลือก จังหวัด ด้วย" );
		form.province.focus();
		return false ;
	  }
	  
	  if (form.amphur.value == "0") {
		alert( "โปรดเลือก เขต/อำเภอ ด้วย" );
		form.amphur.focus();
		return false ;
	  }
	  
	  if (form.district.value == "0") {
		alert( "โปรดเลือก แขวง/ตำบล ด้วย" );
		form.district.focus();
		return false ;
	  }

	  return true ;
	}

	</script>

	</head>

    <body>
	
	<div align="center">
	
	<h2>ทำ Dropdown ให้เลือกจังหวัด อำเภอ ตำบล และทำหน้าจอแก้ไข ให้มีการกำหนดค่าเริ่มต้น</h2>
	
	<br>
	<b><font color="red">(หน้าจอแก้ไข จะมีการกำหนดค่าเริ่มต้นของจังหวัด อำเภอ ตำบล ด้วย)</font></b>
	
	</div>
	
	<br><br>
	
	<div align="center">
	
        <form name="form" method="post" action="result.php" onsubmit="return checkform(this);">
            <p>
                จังหวัด : 
                <span id="province">
                    <select name="province">
                        <option value="0">----- เลือกจังหวัด -----</option>
                    </select>
                </span>
            </p>
            <p>
                เขต/อำเภอ : 
                <span id="amphur">
                    <select name="amphur">
                        <option value='0'>----- เลือกเขต/อำเภอ -----</option>
                    </select>
                </span>
            </p>
            <p>
                แขวง/ตำบล : 
                <span id="district">
                    <select name="district">
                        <option value='0'>----- เลือกแขวง/ตำบล -----</option>
                    </select>
                </span>
            </p>
			<br>
            <input type="submit" name="submit_bt" value="บันทึก "> <INPUT type="reset" name="reset_bt" value="ยกเลิก">
        </form>
	</div>
	
<br>

<center>
	<hr width="90%">	
<br>พัฒนาโดย : <a href="http://php-ajax-code.blogspot.com" target="_blank">http://php-ajax-code.blogspot.com</a>
<br><br>แก้ไขพัฒนาเพิ่มเติมให้สมบูรณ์แบบโดย : <a href="http://www.codetukyang.com" target="_blank">http://www.codetukyang.com</a>
	<br><br><hr width="90%">
</center>
		
    </body>
</html>
