<?php
session_start();
require_once "../admin/controlador/conexion.php";
$NP1=$_POST["newpass"];
$NP2=$_POST["newpass2"];

$User = $_SESSION["UserP"];

if($NP1==$NP2)
{
	$NP=sha1($NP2);
    $consulta="UPDATE Clientes set Contrasena = '$NP' where Email='$User'";
    $resultado=mysql_query($consulta);

    echo "<script>window.alert('Su clave se ha reestablecido correctamente');</script>";
	
	$destinatario = "$User"; 
			$asunto = "Reestablecimiento de clave satisfactorio Proto International Group"; 
			$cuerpo = '
			<html> 
			<head> 
				<title>Cambio de clave</title> 
			</head> 
			<body> 
				<img src="http://protointernational.co/admin/img/logo.png">
				<h1>Proto International Group (Reestablecimiento de clave)</h1> 
				<p> 
				Se ha reestablecido tu clave satisfactoriamente.
				<br>
				<a href="http://protointernational.co/login-proto-alliance.php">Ingresar</a>
				</p> 
			</body> 
			</html> 
			'; 

			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			$headers .= "From: Proto International Group<no-reply@protointernational.co>\r\n"; 

			mail($destinatario,$asunto,$cuerpo,$headers);


	echo "<script>window.location='../logout.php';</script>";

}
else
{
	echo "<script>window.alert('La nueva clave no coincide');</script>";
	echo "<script>window.location='../cambio-de-clave-olvido.php';</script>";
}
?>