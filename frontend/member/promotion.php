<?php include('header.php');?>

	
<!--content-->
<div class="blog">
<div class="container">
	<h1>โปรโมชั่น</h1>
	       <hr/>
           <?php 
                $sql=" select * from tb_promotion";
                $result=$cls_con->select_base($sql);
                while($row=mysqli_fetch_array($result))
                {
                    echo "<h4>";
                    echo "<center>";
                    echo "<strong>";
                    echo $row['promo_name'];
                    echo "</center>";
                    echo "<br/>";
                    echo "รายละเอียดโปรโมชั่น<br/></strong><br>".$row['promo_detail'];
                    echo "<br/>";
                    echo "<br>";
                    echo "<img src='../../upload/".$row['promo_pic']."' width='100%' />";
                    echo "<br>";
                    echo "<br/>";
                    echo "<strong>";
                    echo "รหัสส่วนลด : ".$row['promo_code'];
                    echo "<br/>";
                    echo "ส่วนลด : ".$row['promo_discount'];
                    echo "<br/>";
                    echo "วันที่เริ่ม : ".$row['promo_startdate'];
					echo "<br/>";
                    echo "หมดเขต : ".$row['promo_enddate'];
                    echo "</strong>";

                    echo "</h4>";
                    echo "<hr/>";
                    
                }
            ?>
            
      </div>
</div>
 <?php include('footer.php');?>
			