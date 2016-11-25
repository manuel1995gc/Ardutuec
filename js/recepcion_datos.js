//<script type="text/javascript">
    function getRFID() {
      var request = new XMLHttpRequest();
      var host = "http://localhost/";
      var app = "Ardutuec/Conexion_arduino/";
      var url = host + app + "getTempRFID.php";
      request.open("GET", url);

      request.send();
      request.onreadystatechange = function(){
        if (request.readyState == 4) {
          var json = JSON.parse(request.response);
          console.log(json);
          var rfid=document.getElementById('rfid');
          rfid.value=json[0].ID;
        }
      };
    }
    getRFID();
    //</script>