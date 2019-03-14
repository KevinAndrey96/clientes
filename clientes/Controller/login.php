<?php
require_once "../../admin/controlador/conexion.php";
//define('__ROOT__', dirname(dirname(__FILE__))); 
//require_once(__ROOT__.'/config.php'); 
session_start();

  $User=$_POST["User"];
  $Contrasena=sha1($_POST["Contrasena"]);
   /*
if(isset($_SESSION['LogueadoCliente']))
{
  header('Location: ../proto-alliance.php');
  echo "<script>window.location='../proto-alliance.php';</script>";
}*/
if(!empty($_POST))
{
  if($_POST["User"]!="")
  {

    $consulta="SELECT * from Clientes where Email='$User' and Contrasena='$Contrasena'";
    $resultado=mysql_query($consulta);
    $cont=0;
    while ($row=mysql_fetch_array($resultado))
    {
      $cont++;
    }
    if($cont==1)
    {
      $_SESSION["LogueadoCliente"]="Si";
      $_SESSION["Usuario"]=$User;


      echo "<script>window.location='../proto-alliance.php';</script>";
      header('Location: ../proto-alliance.php');
    }
    else
    {
      echo "<script>window.alert('clave incorrecta por favor verifique e-mail y/o clave');</script>";
      echo "<script>window.location='../index.php';</script>";

    }

  }
  else
  {

    echo "<script>window.location='../index.php';</script>";
  }
}
?>

