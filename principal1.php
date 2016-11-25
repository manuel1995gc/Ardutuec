<?php  
session_start();  
  
if(!$_SESSION['correo'])  
{  
    header("Location: login.php"); 
}  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/principal1.css">
	<link rel="stylesheet" href="css/validacion.css">


	<title>Document</title>
<script type="text/javascript" src="js/principal1.js"></script>
<script type="text/javascript"  src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/direccion_c.js"></script>
<script type="text/javascript" src="js/data_tables.js"></script>
<script type="text/javascript" src="js/reporte_registros.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>


</head>
<body>
    <div class="container-fluid" id="cont1">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           
            <h3><img src="iconos/PNG/48px/0265-notification.png" img-cicle alt="">¿Que accion desea realizar?
              <h4 id="usuario"></h4>
               <a href="login.php" class="btn btn-danger loading" id="b1">Cerrar Sesion</a>
            </h3> 
          
        </div>
        <div class="modal-body">
          <div class="quiz" id="quiz" data-toggle="buttons">
          
           <label class="element-animation1 btn btn-lg btn-primary btn-block">
           
           <span class="btn-label">
           
           <i class="glyphicon glyphicon-chevron-right"></i>
           </span> 
           <input type="radio" name="q_answer" value="1" id="c1"> <img src="iconos/PNG/48px/0064-credit-card.png" alt="">Validar   
           </label>
          
           <label class="element-animation2 btn btn-lg btn-primary btn-block"><a href="validando.php">
           
           <span class="btn-label" >
           
           
           <i class="glyphicon glyphicon-chevron-right"></i>
          
           </span> 
           
						  <input type="radio" name="q_answer" value="2"><img src="iconos/PNG/48px/0069-address-book.png" alt=""></a>
            Registrar
           </label>
           
           
           <label class="element-animation3 btn btn-lg btn-primary btn-block" >
           <span class="btn-label">
           <i class="glyphicon glyphicon-chevron-right"></i></span> 
           <input type="radio" name="q_answer" value="3"><img src="" alt="" id="c3"><img src="iconos/PNG/48px/0118-user-check.png" alt=""> Revisar Entradas
           </label>
           
           
           <label class="element-animation4 btn btn-lg btn-primary btn-block" >
           <span class="btn-label">
           <i class="glyphicon glyphicon-chevron-right"></i>
           </span>
            <input type="radio" name="q_answer" value="4" id="c4"><img src="iconos/PNG/48px/0078-history.png" alt=""> Revisar Salidas
            </label>
            
            
            <label class="element-animation4 btn btn-lg btn-primary btn-block" id="c5">
           <span class="btn-label">
           <i class="glyphicon glyphicon-chevron-right"></i>
           </span>
            <input type="radio" name="q_answer" value="4" id="c6"> <img src="iconos/PNG/48px/0100-drive.png" alt="" > Registros de Personal
            </label>
            
       </div>
  		 </div>
   <div class=" modal-footer text-muted">
</div>
</div>
</div>
</div>
<!--////////////////////////////////////VALIDACION DE TARGETA////////////////////////////////////////////////////////////////////-->
										<div class="validaciones hidden" id="validacion">
										<div class="container-fluid">
										<div class="modal-dialog">
										<div class="modal-content">
										
										

      
      
				<div class="site-wrapper">

				<div class="site-wrapper-inner">

				<div class="cover-container">

				<div class="masthead clearfix">
				</div>
				
				
				<script type="text/javascript">
var B=true;
function checkRFID() {
var request = new XMLHttpRequest();
var host = "http://localhost/";
var app = "Ardutuec/";
var url = host + app + "validacionRFID.php";
request.open("GET", url);

request.send();
request.onreadystatechange = function(){
if (request.readyState == 4) {
var json = JSON.parse(request.response);
console.log(json);
var con=document.getElementById('confirmacion');
if(json[0]=="0"){
document.getElementById('cambios').style.backgroundColor='#B71C1C';
con.innerHTML="No se encuentra el usuario o no se a detectado una tarjeta";

setTimeout(function(){
con.innerHTML="Esperando Escaneo  de Targeta RFID....... ";
}, 2000);

}else{
document.getElementById('cambios').style.backgroundColor='#1B5E20';
con.innerHTML="Bienvenido: <br>"+json[0].N+" "+json[0].A+"<br>Carrera:<br>     "+json[0].C;
setTimeout(function(){
con.innerHTML="Esperando Escaneo  de Targeta RFID....... ";
}, 8000);

}

}
};
}
setInterval(function() {checkRFID();},3000);
</script>

				<div class="inner cover" id="cambios">
				<h1 class="cover-heading" id="confirmacion"> Esperando Escaneo  de Targeta RFID.......</h1>

				</div>

				</div>

				</div>

				</div>
    
		
	
		
									</div>
									</div>
									</div>
									</div>
<!--///////////////////////////////////////////REGISTRAR////////////////////////////////////////////////////////////////////-->

	<!--<div class=" registrar hidden" id="registrar">
	  <div class="container-fluid" id="cont1">
    <div class="modal-dialog">
      <div class="modal-content">
      <script type="text/javascript">
        function checkRFID() {
          var request = new XMLHttpRequest();
          var host = "http://localhost/";
          var app = "Ardutuec/Conexion_arduino/";
          var url = host + app + "checkInsertRFID.php";
          request.open("GET", url);

          request.send();
          request.onreadystatechange = function(){
            if (request.readyState == 4) {
              var json = JSON.parse(request.response);
              console.log(json);
              if(json[0]=="1"){
             // alert("se detecto un RFID");
             window.location.href="http://localhost/Ardutec/registration.php";
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
            <h1 class="cover-heading">Esperando Escaneo  de Targeta RFID........</h1>
            
          </div>

        </div>

      </div>

    </div>
      
      
      
      
      
      
      
      
      
      
      
      
			</div>
			</div>
		</div>
	</div>
	






<!--///////////////////////////////////////////REGISTROS////////////////////////////////////////////////////////////////////-->

	<div class=" ver_registros hidden" id="ver_registros">
	  <div class="container-fluid" id="cont2">
    <div class="modal-dialog"  >
      <div class="modal-content" id="p6">
      <br>
	<div class="row ">
        <div class="col-md-7">
            <form action="#" method="get">
                <div class="input-group ">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Buscar" required>
                    
                    <span class="input-group-btn">
                       
                        <button type="submit" class="btn btn-default"><img src="iconos/PNG/16px/0134-binoculars.png" alt=""></button>
                    </span>
                 
                </div>
            </form>
        </div>
        <br>
          <br>
            <br>
		<div class="col-md-12">
    	 <table class="table table-list-search" id="tabla">
                    <thead id="p7" >
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Carrera</th>
                            <th>Numero de control</th>
                        </tr>
                    </thead>
                    <tbody id="lista_registros">
                    
                    </tbody>
                </table>   
		</div>
	</div>
</div>
	</div>
		</div>
	</div>


     
</body>
</html>
