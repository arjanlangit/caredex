<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="TeamKitty">
    <!--title-->
        <title>View Patient | Caredex</title>
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
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-injured"></i> Nurse
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="add_nurse.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="admin_nurse.php"><i class="fas fa-search"></i> View</a>
                            </div>
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
                <div class="table-responsive">
                        <table id="view_all_patient_table" class="table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                     <th class="th-sm">ID</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Ward Number</th>
                                    <th class="th-sm">Room Number</th>
                                      <th class="th-sm">Bed Number</th>
                                    <th class="th-sm">Diagnosis</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                                    <tbody>
                                        <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM patient";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>    
                                            <tr>
                                                   <td class="wo-button"><?php echo $row["p_ID"]; ?></td>
                                                    <td class="wo-button"><a class="view-agent font-weight-bold " style="cursor:default"><?php echo $row["f_name"] . " " . $row["l_name"];?></a></td>
                                                    <td class="wo-button"><?php echo $row["ward_num"];?></td>
                                                  <td class="wo-button"><?php echo $row["room_num"];?></td>
                                                    <td class="wo-button"><?php echo $row["bed_num"];?></td>
                                                    <td class="wo-button"><?php echo $row["diagnosis"];?></td>
                                                    <td class="with-button">
                                                        
                                                        
                                                        <button id='btn_delete' data-id3="<?php echo $row['p_ID'];?>" class="material-tooltip-main red-text font-weight-bold" data-toggle="tooltip" onclick="delete1()" data-placement="right" title="View Patient Information"> DELETE</button>
                                                        
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

                                                        
                                                        <a href="admin_view_individual_patient.php?id=<?php echo $row['p_ID'];?>" ><button class="material-tooltip-main blue-text font-weight-bold" data-toggle="tooltip"  data-placement="right" title="View Patient Information"> VIEW</button></a>
                                                
                                                
                                                
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
  	$(document).on('click', '#btn_delete', function()
	{
      
    var p_id=$(this).data("id3");
       if(confirm("Are you sure you want to Delete this record? ID number: "+p_id+" "))
		 { 
    
             
		$.ajax({
			url:"delete_data_patient.php",
			method:"POST",
			data:{ p_id:p_id},
			dataType:"text",
			success: function (data){
           
          alert("Patient ID number:  "+p_id+"  deleted successfully!");      
		window.location = "admin_view_patient.php";
			
				}
				
			
			
		});
             
             
         }
   	});
</script>
