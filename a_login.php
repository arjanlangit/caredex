<?php

	 session_start();
    
    include ('connectDB.php');
	
	
    $user=$_POST['user'];
	$pass=$_POST['pass'];


$sql = "SELECT * FROM account WHERE user = '$user' AND pass = '$pass' AND userID='Admin123'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
      $_SESSION['id'] = $row['userID'];
	
echo 1;	
    }
} else {
  	echo 0;
}
?>	
