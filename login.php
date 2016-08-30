<?php  
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/login.js"></script>
	<title>Document</title>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="loginv.php" role="login">
          <img src="img/arduino/photo(2).jpg" class="img-responsive img-circle" alt="" />
          <input type="email" name="correo" id="correo" placeholder="Correo Universitario" required class="form-control input-lg" value="" />
          
          <input type="password" class="form-control input-lg" id="contra" name="contra" placeholder="Contraseña" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Iniciar</button>
          <a class="btn btn-success loading" href="index.html" >Regresar</a>
          
        </form>
        
       
      </section>  
      </div>
      
  </div>
  

  
</div>
	
</body>
</html>