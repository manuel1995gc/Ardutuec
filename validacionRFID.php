
<?php

    include ('configuracion.php');
  $query = "SELECT COUNT(uid) FROM tempv  ";
$resultado=mysql_query($query);
   
	$row1 = mysql_fetch_array($resultado);

	if ($row1[0] >= 1) {
		$query1 = "SELECT * FROM tempv";
        $A=mysql_query($query1);
        $rfid = mysql_fetch_array($A);
        $query2 = "SELECT nombre,apellido,carrera_escuela FROM uid where ID= '".$rfid[0]."'";
        $B=mysql_query($query2);
        
        $convercion_json1=array();

        while($fila=mysql_fetch_array($B)){
            $fila_array['N'] = $fila['nombre'];
            $fila_array['A'] = $fila['apellido'];
            $fila_array['C'] = $fila['carrera_escuela'];
            array_push($convercion_json1,$fila_array);
        }
        echo json_encode($convercion_json1);
        
        $q="delete from tempv";
        mysql_query($q);
        
	}
	else{
        echo json_encode("0");
	}

    mysql_close();




?>