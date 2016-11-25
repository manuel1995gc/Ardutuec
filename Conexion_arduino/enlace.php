  <?php
    // Importamos la configuración
    require("config.php");
    // Leemos los valores que nos llegan por GET
    $valor = mysql_real_escape_string( $_GET['valor']);
    // Esta es la instrucción para insertar los valores
    $query = "INSERT INTO tempi (ID) VALUES('".$valor."');";
    // Ejecutamos la instrucción
    mysql_query( $query);
    mysql_close();
?>