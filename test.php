                               
                                      <?php
        include "connectDB.php";
        if(isset($_GET["id"])){
            $patient_id = $_GET["id"];
        }
   


$sql = "SELECT * FROM `sched` WHERE status='ok' patient_id='".$patient_id."' ORDER BY `sched`.`date_time` DESC";
$result = $con->query($sql);
echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
                                    <div class="card-title success-lighter-hover font-weight-bold">VITAL SIGNS <span class="ml-5">as of 01/30/2019</span></div>
                                </div>
                            </div><!--row 1-->
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <span class="fas fa-heartbeat fa-3x red-text"></span>
                                    <span class="font-weight-bold pl-3"><?php echo $row["bpm"];?>bpm</span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="fas fa-thermometer-three-quarters fa-3x light-blue-text"></span>
                                    <span class="font-weight-bold pl-3 orange-text"><?php echo $row["temp"];}} ?> C</span>
                                </div>
                            </div><!--row 2-->