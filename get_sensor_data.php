<?php




 include ('connectDB.php');

 
$sql = "SELECT * FROM `sensor_data`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
echo '<div class="row">
        <div class="col-md-12 p-3 pl-5 ml-5">
            <h4 class="text-uppercase text-primary">temperature <i class="fas fa-thermometer-three-quarters"></i></h4>
            <div class="text-center d-inline">
                <div class="row">
                    <div class="col-md-8">
                        <input id="temp2" type="text" readonly value="'.$row["temp"].' C" class="rounded-pill form-control white" />
                    </div>
                    <div class="col-md-4 pl-0 ml-0">
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- heart rate -->
    <div class="row">
        <div class="col-md-12 p-3 pl-5 ml-5">
            <h4 class="text-uppercase text-primary">heart rate <i class="fas fa-heartbeat text-danger"></i></h4>
            <div class="text-center d-inline">
                <div class="row">
                    <div class="col-md-8">
                        <input id="bpm2" type="text" readonly value="'.$row["bpm"].' BPM" class="rounded-pill form-control white" />
                    </div>
                    <div class="col-md-4 pl-0 ml-0">
                       
                    </div>
                </div>
                
            </div>
        </div>
        </div>';
    
}
    
    
}
?>