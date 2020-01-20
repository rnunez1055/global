<?php
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "db_gestion_izaje";

    /*$usuario = "globalsu_usuizaj";
    $password = "IRs{xgk+MKQY";
    $servidor = "localhost";
    $basededatos = "globalsu_dbizaje";*/

    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

   $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	//mysqli_close( $conexion );
   
?>