<?php

$dato1 = $_GET['d1'];
$dato2 = $_GET['d2'];

echo "<br>El dato1 es:".$dato1;

echo "<br>El dato2 es:".$dato2;

$usuario = "administrador";
$contrasena = "X3p-sk3iLSIp3-*42*Dlop30*-30Ew*";
$servidor = "quique-server.database.windows.net";
$basededatos = "project1_db";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("
No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ("No se ha podido seleccionar la base de datos" );



$consulta = "INSERT INTO datos (dato1, dato2) VALUES ( ".$dato1.", ".$dato2.")";

$resultado = mysqli_query( $conexion, $consulta );
?>
