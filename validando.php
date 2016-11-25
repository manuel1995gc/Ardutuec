<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registration.css">
  </head>
  <body> 

    <script type="text/javascript">
        function checkRFID() {
          var request = new XMLHttpRequest();
          var host = "http://localhost/";
          var app = "/Ardutuec/Conexion_arduino/";
          var url = host + app + "checkInsertRFID.php";
          request.open("GET", url);

          request.send();
          request.onreadystatechange = function(){
            if (request.readyState == 4) {
              var json = JSON.parse(request.response);
              console.log(json);
              if(json[0]=="1"){
             // alert("se detecto un RFID");
             window.location.href="http://localhost/Ardutuec/registration.php";
              }
              else if (json[0]=="0") {
               // alert("No se detecto un RFID");
              }
            }
          };
        }
        setInterval(function() {checkRFID();},1000);
    </script>
    
    
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
          </div>

          <div class="inner cover">
            <h1 class="cover-heading e1">Esperando Escaneo  de Targeta RFID........</h1>
            
          </div>

        </div>

      </div>

    </div>
    <!-- Submitted to Feature  March 2, 2014  11:20pm -->
   
   <!-- <div class="container espera">
        <div class="row">
        <div class="container">
            <div class="t1">
            <h1>
                Esperando Escaneo  de Targeta RFID....... 
            </h1>
             </div>   
            </div>
        </div>
    </div>-->

  </body>
</html>
