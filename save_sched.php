<?php
include ('connectDB.php');

            $nurse=$_POST['nurse'];
            $patient=$_POST['patient'];
            $date_time=$_POST['date_time'];
            $meds=$_POST['meds'];
            $Endorsement=$_POST['Endorsement'];
            $nurse_name;
            $p_name;
            $ward;
            $room;
            $bed;



$sql = "SELECT * FROM account WHERE userID = '$nurse'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
       $nurse_name=$row["f_name"] . " " . $row["l_name"];
	

    }
}




$sql2 = "SELECT * FROM patient WHERE p_ID = '$patient'";
$result2 = $con->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
  
      $p_name=$row2["f_name"] . " " . $row2["l_name"];
            $ward=$row2["ward_num"];
            $room=$row2["room_num"];
            $bed=$row2["bed_num"];

    }
}



 
$sql3 = "INSERT INTO `sched`(`nurse_id`, `nurse_name`, `patient_id`, `p_name`, `ward_num`, `room_num`, `bed_num`, `date_time` ,`meds`, `Endorsement`, `status`) VALUES ('$nurse','$nurse_name','$patient','$p_name','$ward','$room','$bed','$date_time','$meds','$Endorsement','pending')";
   
   if (mysqli_query($con, $sql3)) {
      echo "Data Added successfully";
   } else {
      echo "Error updating record: " . mysqli_error($con);
   }
   
mysqli_close($con);

?>