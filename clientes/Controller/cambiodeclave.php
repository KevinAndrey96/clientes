<?php
session_start();
require_once "../../admin/controlador/conexion.php";

$U=$_SESSION["Usuario"];

$CA = sha1($_POST["passactual"]);
$CN1 = sha1($_POST["passnuevo"]);
$CN2 = sha1($_POST["passnuevo2"]);

if($CN1 != $CN2)
{
	echo "<script>window.alert('Las contraseñas nuevas no coinciden');</script>";
	echo "<script>window.location='../cambio-de-clave.php';</script>";
}
else
{
		$consulta="SELECT * from Clientes where Email='$U'";
		$resultado=mysql_query($consulta);
		$cont=0;
		while ($row=mysql_fetch_array($resultado)) 
		{
			$cont++;
		}
		if($cont==1)
		{

			$consulta2="SELECT * from Clientes where Email='$U' and Contrasena='$CA'";
			$resultado2=mysql_query($consulta2);
			$cont2=0;
			while ($row2=mysql_fetch_array($resultado2)) 
			{
				$cont2++;
			}

			if($cont2==1)
			{
				$consulta3="UPDATE Clientes SET Contrasena = '$CN1' where Email='$U'";
				$resultado3=mysql_query($consulta3);
				$destinatario = "$Ema"; 

			$asunto = "Cambio de clave satisfactorio Proto International Group"; 
			$cuerpo = '
			<html> 
			<head> 
				<title>Cambio de clave</title> 
			</head> 
			<body> 
				<img src="http://protointernational.co/admin/img/logo.png">
				<h1>Proto International Group (Cambio de clave)</h1> 
				<p> 
				Se ha cambiado tu clave satisfactoriamente.
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

				echo "<script>window.alert('Se ha cambiado tu clave satisfactoriamente');</script>";
				echo "<script>window.location='../proto-alliance.php';</script>";
			}
			else
			{
				echo "<script>window.alert('La clave actual es incorrecta');</script>";
				echo "<script>window.location='../cambio-de-clave.php';</script>";
			}



		}
		else
		{
			echo "<script>window.alert('Ha ocurrido un error, por favor intentelo de nuevo');</script>";
			echo "<script>window.location='../index.html';</script>";
		}

}

?>