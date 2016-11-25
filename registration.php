<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Document</title>
	
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/registration.css">


<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/insertar_credencial.js"></script>
<script type="text/javascript" src="js/recepcion_datos.js"></script>
<script type="text/javascript" src="js/espera.js"></script>
</head>
<body>
			
		
		<!--<div class="container login-form">
		<div class="row">
		<div class="span3">
   
       <div class="titulo_r">SISTEMA DE REGISTRO DE CREDENCIALES</div>
    
    <div class="col-md-6 ">
     <label class="t2">UID</label>
    <br>
    <input type="text" id="rfid"  class="form-control input-lg cj">
    <br>
    <label class="t2">NOMBRE</label>
    <br>
    <input type="text" id="nombre"  class="form-control input-lg cj" placeholder="Nombre">
    <br>
    <label class="t2">APELLIDO</label>
    <br>
    <input type="text" id="apellido"  class="form-control input-lg cj" placeholder="Apellido">
    <br>
    <label class="t2">ESCUELA</label>
    <br>
    <input type="text" id="carrera"  class="form-control input-lg cj" placeholder="Escuela">
    <br>
    <label class="t2">NUMERO DE CONTROL</label>
    <br>
    <input type="text" id="ncontrol"  class="form-control input-lg cj" placeholder="Numero de control" maxlength="10">
    <br>
    <br>
    <input type="submit" id="btn_guardar1" value="Guardar" class="btn btn-primary ">
    <div class="clearfix">
    
    <br>
    <form action="validando.php">
        <input type="submit" id="btn_regresar" value="regresar" class="btn btn-primary ">
        </form>
</div>

    </div>
    </div>
    </div>
	</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->	<div class="container p1">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 well well-sm p2">
            <h1 id="p3"> Registro de Credenciales</h1>
            
             <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="rfid" placeholder="UID" type="text" required
                        required autofocus />
                </div>
							</div>
            
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="nombre" placeholder="Nombre" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="apellido" placeholder="Apellido" type="text"  />
                </div>
            </div>
            
         <strong>Selecciona una Carrera:</strong>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <select class="form-control" id="carrera">
                        <option value="">SELECCIONA UNA CARRERA</option>
                        <option value="TIC'S-UTEM">TIC'S-UTEM</option>
                        <option value="Gastronomia">GASTRONOMIA</option>
                        <option value="ENERGIAS RENOVABLES">ENERGIAS RENOVABLES-UTEM</option>
                        <option value="MANTENIMINETO">MANTENIMINETO-UTEM</option>
                    </select>
                </div>
             
            </div>
            <input class="form-control" id="ncontrol" placeholder="Numero de Control" type="text" />
            
          
            <button class="btn btn-lg btn-success btn-block" type="submit" id="btn_guardar1">
                Guardar</button>
                <br>
                <a class="btn btn-info loading" href="validando.php" >Nuevo Registro</a>
                <a class="btn btn-danger loading" href="principal1.php" >Salir</a>
        
        </div>
    </div>
</div>
	
	
	
	
</body>
</html>