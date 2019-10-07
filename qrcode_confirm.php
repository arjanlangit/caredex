<?php

	 session_start();
    
    include ('connectDB.php');
	
	
    $id=$_GET['id'];

$count=0;
 echo '<input type="hidden" id="p_id" value="'.$id.'">';
$sql = "SELECT * FROM sched WHERE patient_id = '$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$count=1;
if($count==1){
  
echo '<script>
      alert("Patient ID number '.$id.' confirm!");
    	window.location = "deviceNotif.php";
</script>';
    
}

    }
} else {
 
echo'<script>
    
    alert("Invalid QR Code '.$id.'");
    	window.location = "scanner.php";
</script>';

}
?>	
