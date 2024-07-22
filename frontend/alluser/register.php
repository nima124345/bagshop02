<?php include('header.php'); ?>

<!--content-->
<div class=" container">
    <div class=" register">
        <h1>สมัครสมาชิก</h1>
        <form name="register.php" method="POST" action="register.php">
            <div class="col-md-6 register-top-grid">
                <h3>ข้อมูลการสมัครสมาชิก</h3>
            <!--<div>
                    <div class="available">
                        <ul>
                            <li >
                                <select name="member_prefix">
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                            </li>   
                        </ul>       
                    </div> 
                </div>-->

                <div class="mb-3">
                    <label for="form-label">ชื่อ-สกุล</label>
                    <input type="text" id="member_fullname" name="member_fullname">
                </div>

                <div>
                    <label for="form-label">username</label><br>
                    <input type="text" id="member_username" name="member_username">
                </div><br>

                <div>
                    <label for="form-label">ที่อยู่</label>
                    <input type="text" id="member_address" name="member_address">
                </div>

                <div>
                    <label for="form-label">ตำบล</label>
                    <input type="text" id="member_tumbol" name="member_tumbol">
                </div>

                <div>
                    <label for="form-label">อำเภอ</label>
                    <input type="text" id="member_amphur" name="member_amphur">
                </div>

                <div class="available">
                    <label for="country">จังหวัด</label><br>
                    <select id="member_province" name="member_province">
                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่ </option>
                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                        <option value="ชัยนาท">ชัยนาท </option>
                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                        <option value="ชุมพร">ชุมพร </option>
                        <option value="ชลบุรี">ชลบุรี </option>
                        <option value="เชียงใหม่">เชียงใหม่ </option>
                        <option value="เชียงราย">เชียงราย </option>
                        <option value="ตรัง">ตรัง </option>
                        <option value="ตราด">ตราด </option>
                        <option value="ตาก">ตาก </option>
                        <option value="นครนายก">นครนายก </option>
                        <option value="นครปฐม">นครปฐม </option>
                        <option value="นครพนม">นครพนม </option>
                        <option value="นครราชสีมา">นครราชสีมา </option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                        <option value="นครสวรรค์">นครสวรรค์ </option>
                        <option value="นราธิวาส">นราธิวาส </option>
                        <option value="น่าน">น่าน </option>
                        <option value="นนทบุรี">นนทบุรี </option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                        <option value="ปทุมธานี">ปทุมธานี </option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                        <option value="ปัตตานี">ปัตตานี </option>
                        <option value="พะเยา">พะเยา </option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                        <option value="พังงา">พังงา </option>
                        <option value="พิจิตร">พิจิตร </option>
                        <option value="พิษณุโลก">พิษณุโลก </option>
                        <option value="เพชรบุรี">เพชรบุรี </option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                        <option value="แพร่">แพร่ </option>
                        <option value="พัทลุง">พัทลุง </option>
                        <option value="ภูเก็ต">ภูเก็ต </option>
                        <option value="มหาสารคาม">มหาสารคาม </option>
                        <option value="มุกดาหาร">มุกดาหาร </option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                        <option value="ยโสธร">ยโสธร </option>
                        <option value="ยะลา">ยะลา </option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                        <option value="ระนอง">ระนอง </option>
                        <option value="ระยอง">ระยอง </option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี </option>
                        <option value="ลำปาง">ลำปาง </option>
                        <option value="ลำพูน">ลำพูน </option>
                        <option value="เลย">เลย </option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา </option>
                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                        <option value="สระแก้ว">สระแก้ว </option>
                        <option value="สระบุรี">สระบุรี </option>
                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                        <option value="สุโขทัย">สุโขทัย </option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                        <option value="สุรินทร์">สุรินทร์ </option>
                        <option value="สตูล">สตูล </option>
                        <option value="หนองคาย">หนองคาย </option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                        <option value="อุดรธานี">อุดรธานี </option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                        <option value="อุทัยธานี">อุทัยธานี </option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อ่างทอง">อ่างทอง </option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </div>

                <div>
                    <label for="postcode">รหัสไปรษณีย์</label>
                    <input type="text" name="member_postcode">
                </div>
                    
                <div>
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="text" name="member_tel">
                </div>

                <div>
                    <label for="form-label">วันเกิด</label><br>
                    <input type="datetime-local" id="datetime-local" name="datetime-local">
                </div>

                <script>
                    function showprovince(str) {
                        if (str.length == 0) {
                            document.getElementById("province_id").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("province_id").value = xmlhttp.responseText;
                                    var province = xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET", "../../postcode/find_province.php?postcode=" + str, true);
                            xmlhttp.send();
                            showamphur(str);
                        }
                    }

                    function showamphur(str) {
                        if (str.length == 0) {
                            document.getElementById("amphur_id").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("amphur_id").innerHTML = xmlhttp.responseText;
                                    var amphur = xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET", "../../postcode/find_amphur.php?postcode=" + str, true);
                            xmlhttp.send();
                            showtumbol(str);
                        }
                    }

                    function showtumbol(str) {
                        if (str.length == 0) {
                            document.getElementById("district_id").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("district_id").innerHTML = xmlhttp.responseText;
                                    var tumbol = xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET", "../../postcode/find_tumbol.php?postcode=" + str, true);
                            xmlhttp.send();
                        }
                    }
                </script>
            </div>

            <div class="col-md-6 register-bottom-grid">
                <h3>ข้อมูลการเข้าสู่ระบบ</h3>
                <div class="register-top-grid">
                    <span>E-mail</span>
                    <input type="text" name="member_email">
                </div>

                <div class="register-bottom-grid">
                    <span>Password</span>
                    <input type="password" name="member_password">
                </div>

                <div style="text-align:center">
                    <input type="submit"  name="submit" value="สมัครสมาชิก">
                </div>
            </div>

            <div class="clearfix"> </div>
        </form>
        
        <?php
            if (isset($_POST['submit'])) {
                $member_fullname = $_POST['member_fullname'];
                $member_address = $_POST['member_address'];
                $member_tumbol = $_POST['member_tumbol'];
                $member_amphur = $_POST['member_amphur'];
                $member_province = $_POST['member_province'];
                $member_postcode = $_POST['member_postcode'];
                $member_tel = $_POST['member_tel'];
                $member_email = $_POST['member_email'];
                $member_username = $_POST['member_username'];
                $member_password = $_POST['member_password'];
                $member_status = $_POST['member_status'];
                $member_datetime = $_POST['member_datetime'];

                $error = 0;
                $sql_check_email = " select * from tb_member";
                $sql_check_email .= " where member_email='$member_email'";
                $numrowemail = $cls_con->select_numrows($sql_check_email);

                if ($numrowemail >= 1) {
                    $error = 1;
                    echo $cls_con->show_message('มีผู้ใช้งานนี้แล้ว');
                }

                if ($error == 0) {
                    $sql = " insert into tb_member(member_fullname,member_address, member_tumbol,member_amphur,member_province,member_postcode, member_tel, member_email, member_username,member_password, member_status, member_datetime)";
                    $sql .= " values ('$member_fullname','$member_address','$member_tumbol','$member_amphur','$member_province','$member_postcode','$member_tel','$member_email','$member_username','$member_password','$member_status','$member_datetime')";
                    
                    if ($cls_con->write_base($sql)) {
                        echo $cls_con->show_message('สมัครสมาชิกเรียบร้อย');
                        echo $cls_con->goto_page(1, '../member/index.php');
                    }
                }
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>