<?php
include ('connectDB.php');
$p_id2=$_POST['p_id2'];
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
 
$sql = "UPDATE `patient` SET `p_ID`='$p_id',`f_name`='$p_firstname',`m_name`='$p_middlename',`l_name`='$p_lastname',`age`='$p_age',`sex`='$p_sex',`c_stat`='$p_civilstatus',`address`='$p_address',`nationality`='$p_nationality',`ward_num`='$p_wardno',`room_num`='$p_rommno',`bed_num`='$p_bedno',`doctor`='$p_doctor',`diagnosis`='$p_diagnosis',`diet`='$p_diet',`allergies`='$p_allergies',`S_E`='$p_endorsement',`ad_DT`='$date_Time' WHERE `p_ID`='$p_id2'";
   



   if (mysqli_query($con, $sql)) {
      echo "Data Updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($con);
   }
   
mysqli_close($con);

?>