<?php

session_start();
if(isset($_SESSION['LogueadoCliente']))
{
    ?>
    <script type="text/javascript">
      window.location="proto-alliance.php";
    </script>
    <?php
}


function generateRandomString($length) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
} 
session_start();
require_once "../../admin/controlador/conexion.php";
$Ema=$_POST["correoe"];
$_SESSION["UserP"]=$Ema;

if(isset($_SESSION['LogueadoCliente']))
{
	header('Location: ../proto-alliance.php');
	echo "<script>window.location='../proto-alliance.php';</script>";
}
if(!empty($_POST))
{
	if($_POST["correoe"]!="")
	{
		$consulta="SELECT * from Clientes where Email='$Ema'";
		$resultado=mysql_query($consulta);
		$cont=0;
		while ($row=mysql_fetch_array($resultado)) 
		{
			$cont++;
			$Nombres=$row["Nombres"];
		}
			//$Con=sha1generateRandomString(10);
		$Con=substr($Nombres, 0, 3);
	    $Con.="mshyja";
	    $Con = sha1(strtolower ( $Con ));

		$Q="UPDATE Clientes set Contrasena = '$Con' where Email= '$Ema'";
		$R=mysql_query($Q);
		if($cont==1)
		{

			$Code = rand ( 1000000 , 9999999 );

			$destinatario = "$Ema"; 
			$asunto = "Reestablecimiento de clave "; 
			$cuerpo = '
			<html> 
			<head> 
				<title>Reestablecimiento de clave</title> 
			</head> 
			<body> 
				<img src="http://mshyja.co/admin/img/logo.png">
				<h1>(Reestablecimiento de clave)</h1> 
				<p> 
				Tu nueva contraseña de cliente es '.$Con.'
				</p> 
			</body> 
			</html> 
			'; 

			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			$headers .= "From: <no-reply@mshyja.co>\r\n"; 

			mail($destinatario,$asunto,$cuerpo,$headers);

			$_SESSION["C"]=$Code;

			echo "<script>window.location='../index.php';</script>";

		}
		else
		{
			echo "<script>window.alert('El usuario registrado con este correo no registra en nuestra base de datos');</script>";
			echo "<script>window.location='../index.php';</script>";

		}

	}
	else
	{
		echo "<script>window.location='../index.php';</script>";	
	}
}
?>