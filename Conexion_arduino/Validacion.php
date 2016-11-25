   <?php

  // Importamos la configuración
    require("config.php");
    // Leemos los valores que nos llegan por GET
    $valor = mysql_real_escape_string( $_GET['valor']);
    // Esta es la instrucción para insertar los valores
    $query = "SELECT COUNT(ID) FROM uid where ID='".$valor."';";

    
    // Ejecutamos la instrucción
    $resultado=mysql_query($query);
   
	$row1 = mysql_fetch_array($resultado);

	if ($row1[0] >= 1) {
		echo'1';
        $query1 = "INSERT INTO tempv (uid) VALUES('".$valor."');";
        mysql_query($query1);     
	}
	else{
		echo '0';
	}

    mysql_close();



    ?>