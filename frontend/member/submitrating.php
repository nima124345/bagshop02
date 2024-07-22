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
          <?php // include('header.php'); 
          ?>
        </div>
      </div>
    </div>

    <!--start article-->

    <div class="container">
      <div class="row">
        <div class="col-md-12"> <br>

        </div>
        <div class="col-md-12"> <br />
          <h1 align="center"> กรุณาให้คะแนนความพึงพอใจต่อระบบ</h1>
          <h3 align="center">Please Rate Satisfaction</h3>
          <br>
          <br>
          <div class="row">
            <div class="col-md-12"></div>
            <div class="col-md-12">
              <img class="img" src="../../upload/ratings.png" style="width:100%">
              <br /><br />

              <form action="submit_rating.php" method="post">
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
                    <td height="30" align="center"><input type="radio" name="rating" value="5" required /></td>
                    <td height="30" align="center"><input type="radio" name="rating" value="4" /></td>
                    <td height="30" align="center"><input type="radio" name="rating" value="3" /></td>
                    <td height="30" align="center"><input type="radio" name="rating" value="2" /></td>
                    <td height="30" align="center"><input type="radio" name="rating" value="1" /></td>

              </form>
              </tr>

              </table>
              <br>
              <center><input type="submit" value="Submit"></center>
            </div>
          </div>
          <?php
          if (isset($_POST['submit'])) {
            $rating = $_POST['rating'];

            if ($cls_conn->write_base($sql) == true) {
              echo $cls_conn->show_message('แก้ไขข้อมูลสำเร็จ');
              echo $cls_conn->goto_page(1, 'index.php');
            } else {
              echo $cls_conn->show_message('แก้ไขข้อมูลไม่สำเร็จ');
              echo $sql;
            }
          }

          ?>