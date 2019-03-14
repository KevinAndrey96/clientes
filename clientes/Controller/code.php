<?php
session_start();
require_once "../admin/controlador/conexion.php";

$Code=$_POST["codig"];
$C=$_SESSION["C"];

if($Code==$C)
{
	echo "<script>window.location='../cambio-de-clave-olvido.php';</script>";
}
else
{
	echo "<script>window.alert('Código incorrecto, por favor vuelve a intentarlo');</script>"; 
	echo "<script>window.location='../cambio-de-clave-olvido-codigo.php';</script>";
}

?>