<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="TeamKitty">
    <!--title-->
        <title>ScheduleS| Caredex</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!--plugins-->
        <link href="assets/plugins/data-tables/DataTables-1.10.18/css/dataTables.bootstrap.css" rel="stylesheet"/>
        <link href="assets/plugins/data-tables/datatables.css" rel="stylesheet" />
        <link href="assets/plugins/data-tables/Responsive-2.2.2/css/responsive.bootstrap.css" />
        <link href="assets/plugins/mdb-free_4.7.5/css/addons/datatables.css" />
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
    
    
    
 <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Schedule</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
            <span><h5 class="modal-title w-50 font-weight-bold">Select Nurse</h5></span>
        <select id="nurse" class="form-control">
          <option></option>
                                       <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM `account`  WHERE userID != 'Admin123'";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>    
                                 
                                        <option value="<?php echo $row["userID"]; ?>"><?php echo $row["f_name"] . " " . $row["l_name"]; ?></option>
                                      
                                  
                                       <?php
                                            }
}
                                        ?>
                                        </select>
        </div>
           <div class="md-form mb-4">       
              <span><h5 class="modal-title w-50 font-weight-bold">Select Patient</h5></span>
        <select id="patient" class="form-control">
           <option></option>
                                       <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM patient";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>    
                                 
                                        <option value="<?php echo $row["p_ID"]; ?>"><?php echo $row["f_name"] . " " . $row["l_name"]; ?></option>
                                      
                                  
                                       <?php
                                            }
}
                                        ?>
                                        </select>
        </div>
           <div class="md-form mb-4">
          <i class="fas fa-clock prefix grey-text"></i>
         <input type="time" name="time" id="time1">
        </div>
           <div class="md-form mb-4">
          <i class="fas fa-calendar prefix grey-text"></i>
        <input type="date" name="date" id="date1">
        </div>
           <div class="md-form mb-4">
       
          <input type="text" id="meds" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Medication</label>
        </div>
           <div class="md-form mb-4">
        
          <input type="text" id="Endorsement" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Endorsement</label>
        </div>
       

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" onclick="add_sched()">SET Schedule</button>
      </div>
    </div>
  </div>
</div>

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
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class=" nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-injured"></i> Patient
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="admin_add_patient.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="admin_view_patient.php"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                         <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-injured"></i> Nurse
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="add_nurse.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="admin_nurse.php"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown pr-3 active no-arrow">
                            <a class="nav-link white-text dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-clock"></i> Schedule
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

<!--Main Layout-->
<main class="grey lighten-3" style="min-height:80vh">
    <!--breadcrumb-->
    <div class="row"><!--first row-->
        <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12 col-xl-12"><!--first col of 1st row-->
            <h4 class="pl-5 page-title">Schedule </h4>
        </div><!--first col of 1st row-->
    </div><!--first row-->
    <!--breadcrumb-->
    <div class="card  mx-5 mb-5"><!--card-->
        <div class="card-body">
                <div class="table-responsive">
                        <table id="view_all_patient_table" class="table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                     <th class="th-sm">Nurse Name</th>
                                    <th class="th-sm">Patient ID</th>
                                    <th class="th-sm">Patient Name</th>
                                    <th class="th-sm">Location</th>         
                                      <th class="th-sm">Time</th>
                                    <th class="th-sm">Date</th>
                                    <th class="th-sm">Medication</th>
                                        <th class="th-sm">Endorsement</th>
                                        <th class="th-sm">Status</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                                    <tbody>
                                        <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM `sched` ORDER BY `sched`.`date_time` DESC ";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>    
                                            <tr>
                                                   
                                                    <td class="wo-button"><a class="view-agent font-weight-bold " style="cursor:default"><?php echo $row["nurse_name"];?></a></td>
                                                <td class="wo-button"><?php echo $row["patient_id"]; ?></td>
                                                     <td class="wo-button"><a class="view-agent font-weight-bold " style="cursor:default"><?php echo $row["p_name"];?></a></td>
                                                  
                                                  <td class="wo-button"><?php echo "Ward: ".$row["ward_num"]." Room: ".$row["room_num"]." Bed: ".$row["bed_num"];?></td>
                                                    <td class="wo-button">
                                                    <?php 
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"h:i A");
                                                        ?></td>
                                                    <td class="wo-button"><?php
                                                    
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"Y-m-d");
                                                    
                                                        ?></td>
                                                 <td class="wo-button"><?php echo $row["meds"];?></td>
                                                 <td class="wo-button"><?php echo $row["Endorsement"];?></td>
                                                    <td class="wo-button"><?php
                                                    
                                                    
                                                            if($row["status"]=="ok"){
                                          echo'<b style="color:green">&nbsp;&nbsp;Done&nbsp;&nbsp;</b>';
                                      }else{
                                             echo'<b style="color:red">Pending</b>';
                                      }
                                                        
                                                        ?></td>
                                                  
                                               
                                                <td class="with-button">
                                                        
                                                        
                                                        <button id='btn_delete' data-id3="<?php echo $row['id'];?>" class="material-tooltip-main red-text font-weight-bold" data-toggle="tooltip"  data-placement="right" title="Delete "> DELETE</button>
                                                        
                                                   
                                                
                                                
                                                
                                                </td>
                                            </tr>
                                        <?php
                                            }
}
                                        ?>
                                       
                                            
            
            </tr>
                                    </tbody>
                        </table><!--table-->
                        </div><!--table div-->
        </div><!--card body-->
     <span class="table-add">           
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Add Another Medicine</a>
</div></span>
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
    <!--Plugins-->
        <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script> 
        <script src="assets/plugins/data-tables/datatables.js"></script>
        <script src="assets/plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
        <script src="assets/plugins/data-tables/KeyTable-2.5.0/js/dataTables.keyTable.js"></script>   
        <script src="assets/plugins/data-tables/tablepress-datatables-sorting-plugins/jquery.datatables.sorting-plugins.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/Responsive-2.2.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/addons/datatables.js"></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--internal scripts-->
    <script>
            $('#view_all_patient_table').DataTable({
                keys: true,
                "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');
    </script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
  <script src="assets/scripts/jqueryjs/jquery.min.js"></script>
</html>

<script>
    
    
 function add_sched(){

            var nurse=$("#nurse").val();
            var patient=$("#patient").val();
            var time1=$("#time1").val();
            var date1=$("#date1").val();
            var Endorsement=$("#Endorsement").val();
            var meds=$("#meds").val();
           var date_time=date1+" "+time1;
   
	   if(time1=="" || date1=="" || Endorsement=="" || meds=="" ){
			 alert("Please Fill Up The Form Completely");
			 return false;
		 }
       
   
		$.ajax({
			url:"save_sched.php",
			method:"POST",
			data:{nurse:nurse,patient:patient,Endorsement:Endorsement,meds:meds,date_time:date_time},
			dataType:"text",
			success: function (data){
		
						alert(data);
 window.location = "admin_mng_schedule.php";
			
			
				
            }
			
		});
         
		
	}
    
  	$(document).on('click', '#btn_delete', function()
	{
      
    var p_id=$(this).data("id3");
       if(confirm("Are you sure you want to Delete this Schedule?"))
		 { 
    
             
		$.ajax({
			url:"delete_data_sched.php",
			method:"POST",
			data:{ p_id:p_id},
			dataType:"text",
			success: function (data){
           
          alert("Schedule Deleted successfully!");      
		window.location = "admin_mng_schedule.php";
			
				}
				
			
			
		});
             
             
         }
   	});
</script>
