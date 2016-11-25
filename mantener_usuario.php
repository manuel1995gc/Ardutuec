<?php
include ('configuracion.php');


session_start();

   //echo $_SESSION["correo"];
		$alta=$_SESSION["correo"];
   $query = "SELECT N_usuario FROM login WHERE correo='".$alta."'" ;
//$total = $query;
//SELECT `N_usuario` FROM `login` WHERE correo="A20130044@utem.edu.mx"


//echo $alta;
if($alta == $alta){
	$b1 = "SELECT 'N_usuario' FROM 'login' WHERE correo='".$alta."'";
	
	//echo $b1;
}
echo $alta;
?>