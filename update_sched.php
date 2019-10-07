<?php
include ('connectDB.php');
$temp=$_POST['temp'];
$bpm=$_POST['bpm'];
$p_id=$_POST['p_id'];
date_default_timezone_set("Asia/Manila");	
  $date_time=date("Y-m-d H:i:s");

 
$sql = "UPDATE sched SET temp='$temp', bpm='$bpm', reading_TD='$date_time' ,status='ok'  WHERE id='$p_id'";
   
   if (mysqli_query($con, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   
mysqli_close($con);

?>