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
        <link href="assets/plugins/data-tables/Responsive-2.2.2/css/responsive.bootstrap.css" rel="stylesheet" />
        <link href="assets/plugins/mdb-free_4.7.5/css/addons/datatables.css" rel="stylesheet" />
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

    <?php
        include "connectDB.php";
        if(isset($_GET["id"])){
            $patient_id = $_GET["id"];
        }
        $view_individual_patient = "SELECT * FROM patient WHERE p_ID='".$patient_id."'";
        $result = mysqli_query($con, $view_individual_patient);
        $row = $result->fetch_assoc();
    ?>

    <div class="card  mx-5 mb-5"><!--card-->
        <div class="card-body">
           <div class="row">
               <div class="col-md-7">
                   <div class="ml-0 pl-0 page-title">
                       <!--control number and name of patient-->
                       <?php echo "P-" . $row["p_ID"]; ?> <span class="text-uppercase"><?php echo $row["l_name"] . ", " . $row["f_name"] . " " . $row["m_name"]; ?> </span>
                   </div>
               </div><!--first main column-->
               <div class="float-right">
                   <div class="">
                        <span class="ml-2 d-block font-weight-bold">WARD NUMBER: <?php echo $row["ward_num"]?></span>
                       <span class="ml-2 d-block font-weight-bold">ROOM NUMBER: <?php echo $row["room_num"]?></span>
                       <span class="ml-2 font-weight-bold">BED NUMBER: <?php echo $row["bed_num"]?></span>
                   </div>
               </div>
           </div><!--main row-->
           <div class="row"><!--2nd main row-->
                <div class="col-lg-6"><!--1st 2nd col-->
                        <div class="detail-title grey-text mt-3">Patient Profile</div>
                        <hr class="mt-0 shadow grey lighten-3" style="padding:1px;">
                
                <div class="row">
                    <div class="col-md-12 pl-5">
                         <!--for label and data proper indention-->
                        <!--date of admission-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Date of Admission: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=    $row["ad_DT"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--age-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Age: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["age"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--sex-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Sex: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["sex"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--nationality-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Nationality: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["nationality"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->
                    
                        <!--for label and data proper indention-->
                        <!--civil status-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Civil Status: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["c_stat"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--address-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Address: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["address"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention--> 
                    </div><!--col-->
                </div><!--1st row of 1st col-->


                <!--Patient Information-->
                        <div class="detail-title grey-text mt-3">Patient Information</div>
                        <hr class="mt-0 shadow grey lighten-3" style="padding:1px;">

                <div class="row">
                    <div class="col-md-12 pl-5">
                       <!--for label and data proper indention-->
                        <!--doctor-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Doctor: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["doctor"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--diagnosis-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Diagnosis: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["diagnosis"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--diet-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Diet: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["diet"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        <!--for label and data proper indention-->
                        <!--allergies-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Allergies: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["allergies"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                         <!--for label and data proper indention-->
                        <!--special endorsement-->
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="font-weight-bold">Special Endorsement: </span>
                            </div>
                            <div class="col-sm-8">
                                <span class="grey-text font-weight-bold"><?=$row["S_E"]?></span>
                            </div>
                        </div>
                        <!--for label and data proper indention-->

                        
                        
                    </div><!--col-->
                
                </div><!--1st row of 1st col-->
                <div class="col-sm-12">
                   <a href="admin_update_patient.php?id=<?php echo $row['p_ID'];?>" > <button type="reset" class="float-right btn-update btn btn-blue waves-effect p-2 pl-4 pr-4 btn btn-oblong btn-secondary btn-bodred waves-effect waves-light mr-5 m-l-5">
                            <span class="fas fa-edit"></span> Update
                       </button></a>
                </div>
                </div><!--1st 2nd col-->


                <div class="col-lg-6"><!--1st 2nd col-->
                    <div class="card mt-4 btn-oblong shadow-none border rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    
                                      <?php
        include "connectDB.php";
        if(isset($_GET["id"])){
            $patient_id = $_GET["id"];
        }
        $view_individual_patient2 = "SELECT * FROM `sched` WHERE status='ok' && patient_id='".$patient_id."' ORDER BY `sched`.`date_time` DESC";
        $result = mysqli_query($con, $view_individual_patient2);
        $row2 = $result->fetch_assoc();
    ?>
                                    <div class="card-title success-lighter-hover font-weight-bold">VITAL SIGNS <span class="ml-5">as of <?php
                                        
                                                   
                                                    $date=date_create($row2["date_time"]);
                                                    echo date_format($date,"Y-m-d");
                                                    echo " ";
                                                     $date=date_create($row2["date_time"]);
                                                     echo date_format($date,"h:i A");
                                                    
                                                    
                                                      
                                        
                                        ?></span></div>
                                </div>
                            </div><!--row 1-->
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <span class="fas fa-heartbeat fa-3x red-text"></span>
                                    <span class="font-weight-bold pl-3"><?=$row2["bpm"]?> bpm</span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="fas fa-thermometer-three-quarters fa-3x light-blue-text"></span>
                                    <span class="font-weight-bold pl-3 orange-text"><?=$row2["temp"]?> C</span>
                                </div>
                            </div><!--row 2-->
                            <hr class="mt-0 shadow grey lighten-3 mt-4" style="padding:1px;">
                            <div class="row">
                                <div class="col-sm-12">
                                        <div class="card-title light-blue-text font-weight-bold">UPCOMING MEDICATION</div>
                                </div>
                            </div><!--row 3-->
                            <div class="row">
                                <div class="col-sm-12">
                                        <div class="table-responsive">
                                                <table id="view_medication_of_patient_table" class="table table-hover table-bordered table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th class="th-sm">Date</th>
                                                            <th class="th-sm">Time</th>
                                                            <th class="th-sm">Medication</th>
                                                            <th class="th-sm">Care of</th>
                                                        </tr>
                                                    </thead>
                                                            <tbody>
                                                                  
                                                                         <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM `sched`  WHERE status='pending' && patient_id='".$patient_id."' ORDER BY `sched`.`date_time` DESC ";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>     <tr>   <td class="wo-button">
                                                    <?php 
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"h:i A");
                                                        ?></td>
                                                    <td class="wo-button"><?php
                                                    
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"Y-m-d");
                                                    
                                                        ?></td>
                                                                    <td class="wo-button"><?php echo $row["meds"];?></td>
                                                                          <td class="wo-button"><?php echo $row["nurse_name"];?></td>
                                            
                                             </tr>
                                            <?php
                                                }
                                           }
                                                                        ?>
                                                                   
                                                            </tbody>
                                                </table><!--table-->
                                                </div><!--table div-->
                                </div><!--col 4-->
                            </div><!--row 4 with table-->
                        </div>
                    </div>
                </div><!--1st 2nd col-->

           </div><!--2nd main row-->
           <div class="row">
               <div class="col-md-12">
                    <h5><div class="detail-title grey-text mt-3 ">History of Medication</div></h5>
               </div>
           </div>
           <!--LAST ROW-->
           <div class="row">
                <div class="col-md-12">
                    <div class="card my-2 shadow-none border rounded-0">
                        <div class="card-body">
                            <div class="table-responsive px-3">
                                <table id="view_medication_history_table" class="table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Date</th>
                                            <th class="th-sm">Time</th>
                                             <th class="th-sm">BPM</th>
                                            <th class="th-sm">Temperature</th>
                                            <th class="th-sm">Medication</th>
                                            <th class="th-sm">Care of</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                   
                                                                         <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM `sched`  WHERE status='ok' && patient_id='".$patient_id."' ORDER BY `sched`.`date_time` DESC ";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>     <tr>   <td class="wo-button">
                                                    <?php 
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"h:i A");
                                                        ?></td>
                                                    <td class="wo-button"><?php
                                                    
                                                    $date=date_create($row["date_time"]);
                                                    echo date_format($date,"Y-m-d");
                                                    
                                                        ?></td>
                                                <td class="wo-button"><?php echo $row["bpm"];?> bpm</td>
                                                                          <td class="wo-button"><?php echo $row["temp"];?> C</td>
                                                                    <td class="wo-button"><?php echo $row["meds"];?></td>
                                                                          <td class="wo-button"><?php echo $row["nurse_name"];?></td>
                                            
                                             </tr>
                                            <?php
                                                }
                                           }?>
                                            </tbody>
                                </table><!--table-->
                            </div><!--table div-->  
                        </div><!--card body-->
                    </div><!--card-->         
                </div><!--col-->
           </div><!--row-->
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
                $('#view_medication_of_patient_table').DataTable({
                    keys: true,
                    "pagingType": "simple_numbers"
                });
                $('#view_medication_history_table').DataTable({
                    keys: true,
                    "pagingType": "simple_numbers"
                });
                $('.dataTables_length').addClass('bs-select');
        </script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
