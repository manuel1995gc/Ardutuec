	<?php 
 //echo "Registro insertado!";
	$link = mysql_connect('localhost','root','');
				
					if (!$link) {
					
					die('No puedo conectarse:'.mysql_error());
				}
	mysql_select_db('arduino1',$link);

	$usuario = $_POST["correo"];
	$contra = $_POST["contra"];


	//echo $usuario;
	//echo $contra;
	
	$query1=sprintf("SELECT COUNT(Correo)
							from login
								where Correo='".$usuario."'  
									AND Contrasena= '".$contra."'
									and Rol=1");

$query2=sprintf("SELECT COUNT(Correo) 
							from login
								where Correo='".$usuario."'  
									AND Contrasena= '".$contra."' 
									and Rol=2");

/*$query3=sprintf("SELECT COUNT(N_usuario) 
							from login
								where N_usuario='".$usuario."'  
									AND Contrasena= '".$contra."' 
									and Rol=2");
*/


echo $query1;


$result1 = mysql_query($query1);
$row1 = mysql_fetch_array($result1);



$result2 = mysql_query($query2);
$row2 = mysql_fetch_array($result2);

	if ($row1[0] == 1) {
		session_start();
		$_SESSION["correo"]=$usuario;
		header ("location:principal1.php");	
	}
	elseif  ($row2[0] >= 1) {
		session_start();
		$_SESSION["correo"]=$usuario;
		header ("location: principal2.php");	
	}else{
		header("location:login.php");	
	}
		


?>