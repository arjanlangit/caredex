<?php
include ('connectDB.php');

$p_id=$_POST['p_id'];
$p_firstname=$_POST['p_firstname'];
$p_middlename=$_POST['p_middlename'];
$p_lastname=$_POST['p_lastname'];
$p_age=$_POST['p_age'];
$p_sex=$_POST['p_sex'];
$p_civilstatus=$_POST['p_civilstatus'];
$p_address=$_POST['p_address'];
$time1=$_POST['time1'];
$date1=$_POST['date1'];
$p_nationality=$_POST['p_nationality'];
$p_wardno=$_POST['p_wardno'];
$p_rommno=$_POST['p_rommno'];
$p_bedno=$_POST['p_bedno'];
$p_doctor=$_POST['p_doctor'];
$p_diagnosis=$_POST['p_diagnosis'];
$p_diet=$_POST['p_diet'];
$p_allergies=$_POST['p_allergies'];
$p_endorsement=$_POST['p_endorsement'];

$date_Time=$date1." ".$time1;
 
$sql = "INSERT INTO `patient`(`p_ID`, `f_name`, `m_name`, `l_name`, `age`, `sex`, `c_stat`, `address`, `nationality`, `ward_num`, `room_num`, `bed_num`, `doctor`, `diagnosis`, `diet`, `allergies`, `S_E`, `ad_DT`) VALUES ('$p_id','$p_firstname','$p_middlename','$p_lastname','$p_age','$p_sex','$p_civilstatus','$p_address','$p_nationality','$p_wardno','$p_rommno','$p_bedno','$p_doctor','$p_diagnosis','$p_diet','$p_allergies','$p_endorsement','$date_Time')";
   
   if (mysqli_query($con, $sql)) {
      echo "Data Added successfully";
   } else {
      echo "Error updating record: " . mysqli_error($con);
   }
   
mysqli_close($con);

?>