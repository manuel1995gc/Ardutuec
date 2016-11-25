<?php
include ('configuracion.php');

    $query = "SELECT * from uid ";


   



$resultado=mysql_query($query,$link);
$convercion_json=array();

while($fila=mysql_fetch_array($resultado)){
	$fila_array['ID'] = $fila['ID'];
	$fila_array['nombre'] = $fila['nombre'];
	$fila_array['apellido'] = $fila['apellido'];
	$fila_array['carrera_escuela'] = $fila['carrera_escuela'];
	$fila_array['N_control'] = $fila['N_control'];
	array_push($convercion_json,$fila_array);
}
echo json_encode($convercion_json);
?>