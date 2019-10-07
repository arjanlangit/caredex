<?php
include ('connectDB.php');
@$temp=$_GET['temp'];
@$bpm=$_GET['bpm'];

date_default_timezone_set("Asia/Manila");	
  $date_time=date("Y-m-d H:i:s");

 
$sql = "UPDATE sensor_data SET temp='$temp', bpm='$bpm', date_time='$date_time'  WHERE id='1'";
   
   if (mysqli_query($con, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   
mysqli_close($con);

?>