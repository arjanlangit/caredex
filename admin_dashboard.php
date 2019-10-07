<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="TeamKitty">
    <!--title-->
        <title>Dashboard | Caredex</title>
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
        ul.dashboard-updates {
        list-style: none;
        }
        ul.dashboard-updates li::before {
            content: "\2022";
            color: #4285f4 !important;
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1em;
        }
        </style>
</head>
<body>

    <!--=================NAVBAR======================-->
    <!--Main Navigation-->
        <nav class="p-3 navbar navbar-expand-xl navbar-light bg-white sticky sticky-top">
            <a class="navbar-brand p-3" href="#">
                <img class="img-fluid" src="assets/images/Caredex-2.png" width="150px;" />
            </a>
            <div>
            <button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bell"></i>
            </button>
        </div>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item active pr-3">
                            <a class="nav-link waves-effect text-white waves-light pl-5 pr-5" href="admin_dashboard.html"><i class="fas fa-th-large"> Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light pl-5 pr-5" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-injured"></i> Patient
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
                        <li class="nav-item pt-2 fa-1x pr-4 d-block d-lg-none">
                            <i class="fas fa-bell"></i>
                        </li>
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
            <h4 class="pl-5 page-title">Dashboard</h4>
        </div><!--first col of 1st row-->
    </div><!--first row-->
    <!--breadcrumb-->

    <div class="row">
        <div class="col-12">
            <div class="card mx-5 my-2"><!--card-->
                <div class="card-body"><!--counts-->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class=" border border-light m-2" style="border-width:3px !important; border-radius: 50px">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <p class="font-weight-bold text-center m-0 text-primary">
                                            IN PATIENT COUNT
                                        </p>
                                        <p class="font-weight-bold text-center m-0">
                                        <?php
                                            include "connectDB.php";
      
        $view_individual_patient2 = "SELECT COUNT( p_ID ) AS sum FROM `patient`";
        $result = mysqli_query($con, $view_individual_patient2);
        $row2 = $result->fetch_assoc();

?>
                                      <?=$row2["sum"]?>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <p class="font-weight-bold text-center m-0 text-secondary">
                                            NURSE ON DUTY
                                        </p>
                                        <p class="font-weight-bold text-center m-0">
                                             <?php
       
        $view_individual_patient2 = "SELECT COUNT( userID ) AS sum FROM `account` WHERE userID != 'Admin123'";
        $result = mysqli_query($con, $view_individual_patient2);
        $row2 = $result->fetch_assoc();

?>
                                      <?=$row2["sum"]?>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <p class="font-weight-bold text-center m-0 text-danger">
                                            REPORT COUNT
                                        </p>
                                        <p class="font-weight-bold text-center m-0">
                                             <?php
                                            include "connectDB.php";
        
        $view_individual_patient2 = "SELECT COUNT( id ) AS sum FROM `sched` WHERE status = 'ok'";
        $result = mysqli_query($con, $view_individual_patient2);
        $row2 = $result->fetch_assoc();

?>
                                      <?=$row2["sum"]?>
                                        </p>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="border border-light m-2 p-1" style="border-width:3px !important; border-radius: 50px">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="font-weight-bold m-3 text-primary">
                                                    AVG NURSE-PATIENT RATIO
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 text-center">
                                                <i class="fas fa-user-nurse fa-10x text-primary"></i>
                                            </div>
        
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Day Shift: </div> 1:4</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Night Shift: </div> 1:8</p>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Ward 1: </div> 3</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Ward 2: </div> 4</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Ward 3: </div> 4</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p><div class="font-weight-bold d-inline text-primary">Ward 4: </div> 5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="border border-light m-2 p-1" style="border-width:3px !important; border-radius: 50px">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-1">
                                                        <i class="fas fa-bed text-primary fa-3x ml-4"></i>
                                                    </div>
                                                    <div class="col-11">
                                                        <h4 class="pl-2 text-primary font-weight-bold m-3">
                                                            BED MANAGEMENT  01/24/2019 13:49:00
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="font-weight-bold ml-5 text-primary">UPDATES</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 px-4">
                                                <div class="table-responsive">
                                                    <table class="table" >
                                                        <tbody style="display:block; height:28vh; max-height:28vh; overflow-y:scroll !important">
                                                            <tr>
                                                                <td>hello</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem alias totam minus modi quae ipsam pariatur ducimus ullam. A reiciendis repellat dolorum nulla, beatae officia eum est assumenda impedit totam?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>hello</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-12 col-md-5">
                            <div class="border border-light m-2 p-1" style="border-width:3px !important; border-radius: 50px">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="font-weight-bold m-3 text-primary ">REPORTS HISTORY</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table" >
                                                <tbody style="display:block; height:75vh; max-height:75vh; overflow-y:scroll !important">
                                                      
                                                                         <?php 
                                            include "connectDB.php";
                                            $sql = "SELECT * FROM `sched`  WHERE status='ok' ORDER BY `sched`.`date_time` DESC ";
                                           $result = $con->query($sql);

                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                while($row = $result->fetch_assoc()) { 
                                        ?>  
                                
                                                     <tr>
                             <td>Nurse <?php echo $row["nurse_name"];?> attended Patient <?php echo $row["p_name"];?> on Ward number:<?php echo $row["ward_num"];?> Room number: <?php echo $row["room_num"];?> Bed number: <?php echo $row["bed_num"];?></td>
                                                      </tr>
                                                    <?php }}?>
                                                          
                                                    
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!--cardbody for counts-->
            </div><!--card-->
        </div>
    </div>
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
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
