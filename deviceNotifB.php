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
        </style>
</head>
<body>

    <!--=================NAVBAR======================-->
    <!--Main Navigation-->
        <nav class="p-3 navbar navbar-expand-xl navbar-light bg-white sticky sticky-top">
            <a class="navbar-brand" href="#">
                <img class="img-fluid pt-0" src="assets/images/Caredex-2.png" width="150px;" />
            </a>
            </nav>
<!--Main Navigation-->

<!--Main Layout-->
<main class="grey lighten-3" style="min-height:80vh">
    <!--breadcrumb-->
   <br>
    <!--breadcrumb-->
   
    <?php
   
	 session_start();
    include ('connectDB.php');
	$id=$_GET['id'];
	
 echo '<input type="hidden" id="p_id" value="'.$id.'">';
$sql = "SELECT s.meds,s.id,s.patient_id,p.f_name,p.m_name,p.l_name,s.room_num,s.bed_num,s.date_time FROM sched as s INNER JOIN patient as p ON s.patient_id=p.p_ID WHERE s.id='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        
    echo '<div  class="card mx-5 p-0 z-depth-0 border border-light rounded-lg">
    <div class="card-body p-2" >   
           <div class="row">
                <div class="col-md-8 col-sm-8 col-8">
                    <div class="row pl-3">
                        <div class="col-md-12 col-sm-12 col-12">
                       
                         <b>   <span id="notifPatientLastName" name="notifPatientLastName" class="text-uppercase">'.$row["l_name"].',</span>
                            <span id="notifPatientFirstName" name="notifPatientFirstName" class="text-uppercase">'.$row["f_name"].' '.$row["m_name"].'.</span></b>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12 mt-2">';
                        
                        
                        $date=date_create($row["date_time"]);
                        
                        
                    
                            echo '<span id="notifTime" name="notifTime" class="text-uppercase" style="font-size: 110%">'.date_format($date,"h:i A").'</span>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <span id="notifWardNo" name="notifWardNo" class="text-uppercase"><b>Room</b></span>
                        </div>
                         <div class="col-md-12 col-sm-12 col-12 mt-2">
                            <span id="notifTime" name="notifTime" class="text-uppercase" style="font-size: 110%">'.$row["room_num"].'</span>
                        </div>
                         <div class="col-md-12 col-sm-12 col-12">
                            <span id="notifWardNo" name="notifWardNo" class="text-uppercase"><b>Bed</b></span>
                        </div>
                         <div class="col-md-12 col-sm-12 col-12 mt-2">
                            <span id="notifTime" name="notifTime" class="text-uppercase" style="font-size: 110%">'.$row["bed_num"].'</span>
                        </div>
                    </div>
                </div>   
               
           </div>
        </div></div><!--card--> 
    <div class="row">
        <div class="col-md-12 p-3 pl-5 ml-5">
            <h4 class="text-uppercase text-primary">medication</h4>
             <span id="notifMedQuantity" name="notifMedQuantity">'.$row["meds"].'</span>
            
        </div>
       
               
    </div>
    ';
        }
        }
        ?>
    
   
   <div id="sensor">
       
   </div>
   
    
    <div class="row text-center">
        <div class="col-md-12">
            <a  class="text-white"><button type="button" onclick="save()" class="btn btn-secondary rounded-pill">Scan QR Code</button></a>
              <a class="text-white"><button type="button" class="btn btn-secondary rounded-pill">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
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
         <script src="assets/scripts/jqueryjs/jquery.min.js"></script>
</html>

<script>
 
function fetch_data(){

		$.ajax({
			url:"get_sensor_data.php",
			method:"POST",
			success:function(data){
				$('#sensor').html(data);
		
			}
		    
		});
	 setTimeout(fetch_data, 1500);
	}
fetch_data();


 function save(){
     
      var p_id=$("#p_id").val();
    var temp=$("#temp2").val();
     var bpm=$("#bpm2").val();
     temp=temp.slice(0,-2);
       bpm=bpm.slice(0,-4);

		$.ajax({
			url:"update_sched.php",
			method:"POST",
			data:{temp:temp,bpm:bpm,p_id:p_id},
			dataType:"text",
			success: function (data){

	
				window.location = "scanner.php";
			}
			
		});
		
	}
 
</script>
