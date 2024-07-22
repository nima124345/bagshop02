<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	 <style type="text/css">
input[type='radio'] {
  -webkit-appearance: none;
  width: 20px;
  height: 20px;
  border: 1px solid darkgray;
  border-radius: 50%;
  outline: none;
  box-shadow: 0 0 5px 0px gray inset;
}
input[type='radio']:hover {
  box-shadow: 0 0 5px 0px orange inset;
}
input[type='radio']:before {
  content: '';
  display: block;
  width: 60%;
  height: 60%;
  margin: 20% auto;
  border-radius: 50%;
}
input[type='radio']:checked:before {
  background: green;
}
 
</style>
</head>
<body>
<div class="container-fluid" style="background-color:#2C3E50">
<div class="row">
<div class="col-md-1"></div>
<div class="col-xs-12 col-md-11">
<?php // include('header.php'); ?>
</div>
</div>
</div>

<!--start article-->

<div class="container">
  <div class="row">
    <div class="col-md-12"> <br>

    </div>
    <div class="col-md-12"> <br />
     	  <h3 align="center"> กรุณาประเมินคะแนนความพึงพอใจต่อระบบ</h3>
          <br><h5 align="center">Please Rate Satisfaction</h5>
          <br>
          <br>
        
        <form id="formqsys" name="formqsys" method="post" action="rating.php">
    <table width="70%" border="1" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
            <tr>
              <td width="75%" rowspan="2" align="center">
              <br>
              <strong>หัวข้อการประเมิน</strong>
              </td>
              <td colspan="5" align="center"><strong>ระดับความพึงพอใจ</strong></td>
            </tr>
            <tr>
              <td width="5%" align="center"><strong>5</strong></td>
              <td width="5%" align="center"><strong>4</strong></td>
              <td width="5%" align="center"><strong>3</strong></td>
              <td width="5%" align="center"><strong>2</strong></td>
              <td width="5%" align="center"><strong>1</strong></td>
            </tr>
            <tr>
              <td height="30">&nbsp;ประเมินความพึงพอใจต่อระบบโดยรวม</td>
              <td height="30" align="center"><input type="radio" name="es_id"  value="5" required /></td>
              <td height="30" align="center"><input type="radio" name="es_id"  value="4" /></td>
              <td height="30" align="center"><input type="radio" name="es_id"  value="3" /></td>
              <td height="30" align="center"><input type="radio" name="es_id"  value="2" /></td>
              <td height="30" align="center"><input type="radio" name="es_id"  value="1" /></td>
            </tr>
           
            </table>
          </div>
          </div>
          <div class="row">
          <div class="col-md-12"></div>
          <div class="col-md-12">
          <img class="img" src="../../upload/ratings.png" style="width:100%">
          <br /><br />
          <b> ข้อเสนอแนะเพิ่มเติม </b> <br />
           <textarea name="es_complain" cols="80" rows="3" id="es_complain" class="form-control"></textarea>
                <br />

              <button type="submit" name="submit" class="btn btn-primary"  value="ส่งแบบประเมิน"> ส่งแบบประเมิน </button>

              
              <div class="clearfix"> </div>
        
        <?php
// Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM post_rating WHERE rate_id=".$rate_id." and user_id=".$user_id;



        if (isset($_POST['submit'])) {
          $user_id = $_SESSION['member_id'];
          $sql = "SELECT * FROM post_rating WHERE rate_id=".$rate_id." and user_id=" . $user_id;
            $rate_id = $_POST['rate_id'];
            $user_id = $_POST['user_id'];
            $es_id = $_POST['es_id'];
            $es_complain = $_POST['es_complain'];

            // Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM post_rating WHERE rate_id=".$rate_id." and user_id=".$user_id;

$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];

if($count == 0){
 $insertquery = "INSERT INTO post_rating(user_id,rate_id,rating) values(".$user_id.",".$rate_id.",".$es_complain.")";
 mysqli_query($con,$insertquery);
}else {
 $updatequery = "UPDATE post_rating SET rating=" . $rating . " where user_id=" . $user_id . " and rate_id=" . $rate_id;
 mysqli_query($con,$updatequery);
}

// get average
$query = "SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE rate_id=".$rate_id;
$result = mysqli_query($con,$query) or die(mysqli_connect_errno());
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);


            $error = 0;
            $sql_check_rate_id = " select * from post_rating";
            $sql_check_rate_id .= " where rate_id='$rate_id'";
            $numrowrate_id = $cls_con->select_numrows($sql_check_rate_id);

            if ($numrowrate_id >= 1) {
                $error = 1;
                echo $cls_con->show_message('กรุณาเลือกคะแนนประเมิน');
            }



            if ($error == 0) {

                $sql = " insert into post_rating(rate_id,user_id, es_id,es_complain)";
                $sql .= " values ('$rate_id','$user_id,'$es_id','$es_complain')";
                if ($cls_con->write_base($sql)) {

                    echo $cls_con->show_message('ยืนยันการส่งแบบประเมิน');
                    echo $cls_con->goto_page(1, 'index.php');
                }
            }
        }

        ?> 


                       

        
          </div>
          </div>
          
        </form>
</body>
</html>