
<?php

    include ('configuracion.php');
    $consulta = sprintf("INSERT INTO uid
    (ID,nombre,apellido,carrera_escuela,N_control)
    VALUES ('%s', '%s', '%s', '%s', '%s')",
    mysql_real_escape_string($_POST['ID']),
    mysql_real_escape_string($_POST['nombre']),
	mysql_real_escape_string($_POST['apellido']),	mysql_real_escape_string($_POST['carrera_escuela']),
	mysql_real_escape_string($_POST['N_control'])
    
    );



    $reult = mysql_query($consulta, $link);

    if (!$reult){
        $message = 'Consulta invalida: ' . mysql_error() . "\n";
        $message = 'Consulta: ' .$consulta;
        die ($message);
    }
    else {
        $query="delete from tempi";
        mysql_query($query);
        echo "Registro insertado!";
    }
?>