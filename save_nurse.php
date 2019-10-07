<?php
include ('connectDB.php');

            $n_ID=$_POST['n_ID'];
            $n_firstname=$_POST['n_firstname'];
            $n_middlename=$_POST['n_middlename'];
            $n_lastname=$_POST['n_lastname'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $n_civilstatus=$_POST['n_civilstatus'];
            $n_nationality=$_POST['n_nationality'];
            $title=$_POST['title'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $street=$_POST['street'];
            $brgy=$_POST['brgy'];
            $municipality=$_POST['municipality'];
            $region=$_POST['region'];


 
$sql = "INSERT INTO `account`(`userID`, `f_name`, `m_name`, `l_name`, `user`, `pass`, `C_status`, `title`, `sex`, `nationality`, `age`, `street`, `brgy`, `city`, `region`) VALUES ('$n_ID','$n_firstname','$n_middlename','$n_lastname','$user','$pass','$n_civilstatus','$title','$sex','$n_nationality','$age','$street','$brgy','$municipality','$region')";
   
   if (mysqli_query($con, $sql)) {
      echo "Data Added successfully";
   } else {
      echo "Error updating record: " . mysqli_error($con);
   }
   
mysqli_close($con);

?>