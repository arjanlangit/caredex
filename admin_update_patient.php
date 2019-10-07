<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="TeamKitty">
    <!--title-->
        <title>Update Patient | Caredex</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!-- Material Design Bootstrap -->
        <link href="assets/plugins/mdb-free_4.7.5/css/mdb.css" rel="stylesheet">
    <!--logo-->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/output-1.png">
    <!--custom styles-->
            <link rel="stylesheet" href="assets/styles/custom.css" />
    <!--internal style-->
        <style>
            body {
                overflow-x: hidden !important;
            }
        </style>
</head>
<body class="grey lighten-3">

    <!--=================NAVBAR======================-->
    <!--Main Navigation-->
        <nav class="p-3 navbar navbar-expand-xl navbar-light bg-white sticky sticky-top">
            <a class="navbar-brand" href="#">
                <img class="img-fluid pt-0" src="assets/images/Caredex-2.png" width="150px;" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item pr-3">
                            <a class="nav-link waves-effect waves-light pl-5 pr-5" href="admin_dashboard.html"><i class="fas fa-th-large"> Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown  active pr-3 no-arrow">
                            <a class="text-white nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-injured"></i> Patient
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="admin_add_patient.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="admin_view_patient.php"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                        <li class="nav-item pr-3">
                                <a class="nav-link waves-effect waves-light pl-5 pr-5" href="admin_nurse.html"><i class="fa fa-user-nurse"></i> Nurse</a>
                        </li>
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-clock"></i> Schedule
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="admin_mng_schedule.php"><i class="fas fa-edit"></i> Manage</a>
                              
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item pt-2">
                                Denielle
                        </li>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="assets/images/profile-holder.jpg" class="img-fluid rounded-circle z-depth-0" style="width:30px" alt="Material Design for Bootstrap - example photo">
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                                <a class="dropdown-item waves-effect waves-light" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item waves-effect waves-light" href="#">Sign Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
<!--Main Navigation-->

    
    <?php
        include "connectDB.php";
        if(isset($_GET["id"])){
            $patient_id = $_GET["id"];
        }
        $view_individual_patient = "SELECT * FROM patient WHERE p_ID='".$patient_id."'";
        $result = mysqli_query($con, $view_individual_patient);
        $row = $result->fetch_assoc();
    ?>
<input type="hidden" id="p_id2" value="<?php echo $_GET["id"]; ?>">
<!--Main Layout-->
<main class="grey lighten-3" style="min-height:80vh">
    <!--breadcrumb-->
    <div class="row"><!--first row-->
        <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12 col-xl-12"><!--first col of 1st row-->
            <h4 class="pl-5 page-title">Patient </h4>
        </div><!--first col of 1st row-->
    </div><!--first row-->
    <!--breadcrumb-->
    <div class="card  mx-5 mb-5"><!--card-->
        <div class="card-body">
            <div>
           <div class="form-row">
                <div class="md-form col-md-6 mb-0">
                    <div class="form-row">
                        <div class="col-md-12">
                            <span class="lead">Update Patient Information</span>
                        </div>
                    </div><!--1st row of 1st column-->
                    <div class="form-row">
                      <!--patient id-->
                        <div class="md-form md-outline col-md-10 mb-0">
                             <span class="font-weight-bold">Patient ID</span>
                            <input type="text" class="form-control" id="p_id" length="25" name="p_firstname" value="<?php echo $row["p_ID"]?>" value="" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column-->

                    <!--first name-->
                        <div class="md-form md-outline col-md-10 mb-0">
                           <span class="font-weight-bold">First Name</span>
                            <input type="text" class="form-control" id="p_firstname" length="25" name="p_firstname" value="<?php echo $row["f_name"]?>" value="" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column-->

                     <!--middle name-->
                        <div class="md-form md-outline col-md-10 mb-0">
                              <span class="font-weight-bold">Middle Name</span>
                            <input type="text" class="form-control" id="p_middlename" length="25" name="p_middlename" value="<?php echo $row["m_name"]?>" value="" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 

                    <!--last name-->
                        <div class="md-form md-outline col-md-10 mb-0">
                            <span class="font-weight-bold">Last Name</span>
                            <input type="text" class="form-control" id="p_lastname" length="25" name="p_lastname" value="<?php echo $row["l_name"]?>" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 


                    <!--age-->
                        <div class="md-form md-outline col-md-10 mb-0">
                           <span class="font-weight-bold">Age</span>
                            <input type="text" class="form-control" id="p_age" length="25" name="p_age"  value="<?php echo $row["age"]?>" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 

                    <!--sex-->
                        <div class="md-form md-outline col-md-10 mb-0">
                             <span class="font-weight-bold">Sex</span>
                            <input type="text" class="form-control" id="p_sex" length="25" name="p_sex" value="<?php echo $row["sex"]?>" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 

                    <!--civil status-->
                        <div class="md-form md-outline col-md-10 mb-0">
                          <span class="font-weight-bold">Civil Status</span>
                            <input type="text" class="form-control" id="p_civilstatus" length="25" name="p_civilstatus"  value="<?php echo $row["c_stat"]?>" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 

                    <!--address-->
                       <div class="md-form md-outline col-md-10 mb-0">
                          <span class="font-weight-bold">Address</span>
                            <input type="text" class="form-control" id="p_address" length="25" name="p_address"  value="<?php echo $row["address"]?>" autocomplete="off" required>
                            <div class="valid-feedback">
                                <!--code for validation-->
                            </div>
                        </div><!--form column--> 

                </div><!--2nd row of 1st column-->

                </div><!--1st form column-->
                <div class="md-form col-md-6 mb-0">
                            <div class="form-row">
                            <!--date of admission-->
                                <div class="md-form col-md-10 mt-0 mb-0">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <span class="font-weight-bold">Date and Time of Admission:</span>
                                        </div>
                                        <div class="col-sm-7">
                                            <span class="font-weight-bold"> 
                                            <input type="time" name="time" id="time1" value="<?php
                                                    
                                                    $date=date_create($row["ad_DT"]);
                                                    echo date_format($date,"H:i");
                                                                                             ?>" >
                                            <input type="date" name="date" id="date1" value="<?php
    
                                        $date=date_create($row["ad_DT"]);
                                        echo date_format($date,"Y-m-d");
                                          
                                                
                                                ?>"></span>
                                        </div>
                                        
                                        
                                    </div>
                                </div><!--form column-->
        
                             <!--nationality-->
                                <div class="md-form md-outline col-md-10 mb-0">
                                      <span class="font-weight-bold">Nationality</span>
                                    <input type="text" class="form-control" id="p_nationality" length="25" name="p_nationality"  value="<?php echo $row["nationality"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                                </div><!--form column--> 

                           <div class="md-form md-outline col-md-10 mb-0"> 
                            <div class="form-row">
                                <div class=" mb-0 col-md-4">
                                     <!--ward number-->
                                
                                     <span class="font-weight-bold">Ward Number</span>
                                    <input type="text" class="form-control" id="p_wardno" length="25" name="p_wardno"  value="<?php echo $row["ward_num"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                               
                                </div>
                                <div class="col-md-4">
                                    <!--room number-->
                                    <span class="font-weight-bold">Room Number</span>
                                    <input type="text" class="form-control" id="p_rommno" length="25" name="p_rommno"  value="<?php echo $row["room_num"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
        
                                </div>
                                 <div class="col-md-4">
                                    <!--bed number-->
                                    <span class="font-weight-bold">Bed Number</span>
                                    <input type="text" class="form-control" id="p_bedno" length="25" name="p_bedno"  value="<?php echo $row["bed_num"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
        
                                </div>
                            </div><!--row for bed and ward-->
                           </div>
        
                           <!--doctore-->
                           <div class="md-form md-outline col-md-10 mb-0">
                                 <span class="font-weight-bold">Doctor</span>
                                <input type="text" class="form-control" id="p_doctor" length="25" name="p_doctor"  value="<?php echo $row["doctor"]?>" autocomplete="off" required>
                                <div class="valid-feedback">
                                    <!--code for validation-->
                                </div>
                            </div><!--form column--> 
                            
                            <!--diagnosis-->
                                <div class="md-form md-outline col-md-10 mb-0">
                                     <span class="font-weight-bold">Diagnosis</span>
                                    <input type="text" class="form-control" id="p_diagnosis"  name="p_diagnosis"  value="<?php echo $row["diagnosis"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                                </div><!--form column--> 
        
                            <!--diet-->
                                <div class="md-form md-outline col-md-10 mb-0">
                                  <span class="font-weight-bold">Diet</span>
                                    <input type="text" class="form-control" id="p_diet" name="p_diet"  value="<?php echo $row["diet"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                                </div><!--form column--> 
                           
                            <!--allergies-->
                                <div class="md-form md-outline col-md-10 mb-0">
                                     <span class="font-weight-bold">Allergies</span>
                                    <input type="text" class="form-control" id="p_allergies" name="p_allergies"  value="<?php echo $row["allergies"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                                </div><!--form column--> 
                                
                            <!--special endorsement-->
                                <div class="md-form md-outline col-md-10 mb-0">
                                     <span class="font-weight-bold">Special Endorsement</span>
                                    <input type="text" class="form-control" id="p_endorsement"  name="p_endorsement" value="<?php echo $row["S_E"]?>" autocomplete="off" required>
                                    <div class="valid-feedback">
                                        <!--code for validation-->
                                    </div>
                                </div><!--form column--> 
                                
                 </div><!--1st form column-->
           </div><!--main row of form-->
           <div class="form-row w-100">
                <div class="md-form md-outline col-md-12 mb-0">
                    <div class="d-flex justify-content-md-center">
                        <input class="btn btn-submit btn-gradient-submit p-2 pl-4 pr-4 mx-2 btn-bordred btn-oblong" type="submit" name="save_admin_add_patient"  onclick="update_patient()" />
                        <button type="reset" onclick="cancel1()" class="btn-reset btn btn-grey waves-effect p-2 pl-4 pr-4 btn btn-oblong btn-secondary btn-bodred waves-effect waves-light mr-5 m-l-5">
                                Cancel
                        </button>
                    </div>
                </div><!--form column-->
            </div><!--form row-->
            </div>
        </div>
    </div><!--card-->
</main>
<!--Main Layout-->
<!-- Footer -->
<footer class="page-footer font-small grey lighten-5">

        <!-- Copyright -->
        <div class="footer-copyright font-weight-normal text-center blue-grey-text  py-3">© 2019 Copyright:
          <a href="#" class="light-blue-text"> TeamKitty</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->


 

 
</body>
<!-- SCRIPTS -->
    <!-- JQuery -->
        <script type="text/javascript" src="assets/scripts/jqueryjs/jquery.js"></script>
    <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/scripts/popperjs/popper.js"></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
     <script src="assets/scripts/jqueryjs/jquery.min.js"></script>
</html>
    
    

<script>
 
 
 function update_patient(){
            var p_id2=$("#p_id2").val();
            var p_id=$("#p_id").val();
            var p_firstname=$("#p_firstname").val();
            var p_middlename=$("#p_middlename").val();
            var p_lastname=$("#p_lastname").val();
            var p_age=$("#p_age").val();
            var p_sex=$("#p_sex").val();
            var p_civilstatus=$("#p_civilstatus").val();
            var p_address=$("#p_address").val();
            var time1=$("#time1").val();
            var date1=$("#date1").val();
            var p_nationality=$("#p_nationality").val();
            var p_wardno=$("#p_wardno").val();
            var p_rommno=$("#p_rommno").val();
            var p_bedno=$("#p_bedno").val();
            var p_doctor=$("#p_doctor").val();
            var p_diagnosis=$("#p_diagnosis").val();
            var p_diet=$("#p_diet").val();
            var p_allergies=$("#p_allergies").val();
            var p_endorsement=$("#p_endorsement").val();
 




	   if(p_id=="" || p_firstname=="" || p_middlename=="" || p_lastname=="" || p_age=="" || p_sex=="" || p_civilstatus=="" || p_address=="" || time1=="" || date1=="" || p_nationality=="" || p_wardno=="" || p_rommno=="" || p_bedno=="" || p_doctor=="" || p_diagnosis==""){
			 alert("Please Fill Up The Form Completely");
			 return false;
		 }
         if(confirm("Are you sure you want to Update this Record?"))
		 { 
   
		$.ajax({
			url:"update_patient.php",
			method:"POST",
			data:{p_id2:p_id2,p_id:p_id,p_firstname:p_firstname,p_middlename:p_middlename,p_lastname:p_lastname,p_age:p_age,p_sex:p_sex,p_civilstatus:p_civilstatus,p_address:p_address,time1:time1,date1:date1,p_nationality:p_nationality,p_wardno:p_wardno,p_rommno:p_rommno,p_bedno:p_bedno,p_doctor:p_doctor,p_diagnosis:p_diagnosis,p_diet:p_diet,p_allergies:p_allergies,p_endorsement:p_endorsement},
			dataType:"text",
			success: function (data){
		
						alert(data);
 window.location = " admin_view_individual_patient.php?id="+p_id2;
			
				}
				
			
			
		});
         }
		
	}
 
    function cancel1(){
          var p_id2=$("#p_id2").val();
       if(confirm("Are you sure you want to Cancel?"))
		 { 
   
    window.location = " admin_view_individual_patient.php?id="+p_id2;
			
         }
    }
</script>