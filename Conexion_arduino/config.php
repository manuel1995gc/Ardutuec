<?php

     $link = mysql_connect('localhost', 'root', '');

    if (!$link) {
    	die('No pudo conectarse: ' . mysql_error());
    }

    

    $bandera = mysql_select_db('arduino1');

    if (!$bandera) {
    	die('No se puede seleccionar DB: ' . mysql_error());
    }
?>