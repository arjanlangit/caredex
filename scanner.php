
<?php
  session_start();
	 if(!isset($_SESSION['id'])){
    ?>
    <script>	window.location = "index.php";</script>
    <?php

     }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 #map {
        height: 490px;
        width: 100%;
       }

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #00BFFF;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.video {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}

.topnav a:hover {
  background-color: #778899;
  color: black;
}

.active {
  background-color: #000000;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width:600px) {
    .col {
        width: 100%;
    }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

* {
    box-sizing: border-box;
}

body {
  margin: 0;
}
.column {
    float: left;
    width: 100%;
    padding: 10px;
     height: 100px;
	   border: 10px solid #5cbdf9;

}

.column2 {
    float: left;
    width: 100px;
    padding: 2px;
  height: 440px;
     border: 10px solid #5cbdf9;
     transform: rotateY(180deg);
    -webkit-transform:rotateY(180deg); /* Safari and Chrome */
    -moz-transform:rotateY(180deg);

}
.column1 {

     transform: rotateY(180deg);
    -webkit-transform:rotateY(180deg); /* Safari and Chrome */
    -moz-transform:rotateY(180deg);

}
.column3 {
     transform: rotateY(180deg);
    -webkit-transform:rotateY(180deg); /* Safari and Chrome */
    -moz-transform:rotateY(180deg);

}

.row:after {
    content: "";
    display: table;
    clear: both;
}
.row2 {
    float: left;
    width: 100%;
    padding: 15px;
	 height: 589px;
 border: 10px solid #5cbdf9;
}

@media screen and (max-width:600px) {
    .column,.row2 {
        width: 100%;
    }
    .column2 {
        width: 100%;
    }

}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

</style>
</head>
<body onload="startTime()">

<div class="topnav" id="myTopnav">
    <a href="main.php">back</a>
 
</div>

<div class="row"> 

  

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <div class="column1" style="background:#778899">
 <b> <Center id="d1"><div id="data"> </div>  </Center></b>
  

  <div  id="app1"> 
       
      
  <div class="column column3"  style="background:#B0C4DE">
       <div class="sidebar">
       <section class="cameras">
      <label for="fname">Cameras:</label>
          <ul>
            <li v-if="cameras.length === 0" class="empty">No cameras found</li>
            <li v-for="camera in cameras">
              <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
              <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </span>
            </li>
          </ul>
        </section>
     
      </div>

   </div>
     
      
  <div class="preview-container">
    <video class="column2" id="preview"></video>
  </div>
  </div>
  <script type="text/javascript" src="app1.js"></script>
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 <div id="test"></div>
 
  
</div>
  
</div>

 

<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
	
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = mm + '/' + dd + '/' + yyyy;
document.getElementById("date").innerHTML = today;

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  
    return i;
}
</script>


</body>
</html>
