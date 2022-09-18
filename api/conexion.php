<?php 
    session_start();

    $conexion = mysqli_connect("localhost", "root", "") or die ("Problemas en la conexion");
    mysqli_select_db($conexion, "snippets") or die ("Problemas en la seleccion de la base de datos");
    mysqli_set_charset($conexion, 'utf8');
?>