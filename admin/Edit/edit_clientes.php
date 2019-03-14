<?php
require_once "../controlador/conexion.php";

$id = $_POST['id'];
$Telefono = $_POST['Telefono'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Email = $_POST['Email'];
if($_POST['oper']=='edit')
{
     $consulta  = "UPDATE Clientes SET
    Nombres = '$Nombres',
    Apellidos = '$Apellidos',
    Telefono = '$Telefono',
    Email = '$Email'
    WHERE IdCliente = '$id' ";
    $resultado1 = @mysql_query($consulta) ;
    
}
if($_POST['oper']=='add')
{
    $Con=substr($Nombres, 0, 3);
    $Con.="mshyja";
    $Con = strtolower ( $Con );
    $consult1  = "INSERT INTO Clientes (Telefono,Nombres,Apellidos,Contrasena,Email) VALUES ('".$Telefono."','".$Nombres."','".$Apellidos."','".sha1($Con)."','".$Email."')";
    $resultado1 = @mysql_query($consult1) ;
    
}
if($_POST['oper']=='del')
{
    $consult2  = "DELETE FROM Clientes where IdCliente='$id'";
    $resultado2 = @mysql_query($consult2) ;
    
}
?>