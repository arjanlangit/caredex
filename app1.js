var app1 = new Vue({
  el: '#app1',
  data: {
    scanner: null,
    activeCameraId: null,
    cameras: [],
    scans: []
  },
  mounted: function () {
    var self = this;
    
    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
    self.scanner.addListener('scan', function (content, image) {
        
      self.scans.unshift({ content: content });
         var  SoundScan = new Audio();
          SoundScan.src = "scannerAlert.mp3";
         SoundScan.play();
        details();
      function details(){
    window.navigator.vibrate(500);
var id=content;
     
	window.location = "qrcode_confirm.php?id="+id;
          
      }
		
                 
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      self.cameras = cameras;
        
      if (cameras[1]) {

      

    scanner.start(cameras[1]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
        
  },
    
  methods: {
    formatName: function (name) {
      return name || '(unknown)';
    },
    selectCamera: function (camera) {
      this.activeCameraId = camera.id;
      this.scanner.start(camera);
    }
      
  }
    
});



