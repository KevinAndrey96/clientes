<?php
require_once "../controlador/conexion.php";

$id = $_POST['id'];
$Documento = $_POST['Documento'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Email = $_POST['Email'];
if($_POST['oper']=='edit')
{
     $consulta  = "UPDATE Administradores SET
    Documento = '$Documento',
    Nombres = '$Nombres',
    Apellidos = '$Apellidos',
    Email = '$Email'
    WHERE IdAdministrador = '$id' ";
    $resultado1 = @mysql_query($consulta) ;
    
}
if($_POST['oper']=='add')
{
    $consult1  = "INSERT INTO Administradores (Documento,Nombres,Apellidos,Contrasena,Email) VALUES ('".$Documento."','".$Nombres."','".$Apellidos."','".sha1($Documento)."','".$Email."')";
    $resultado1 = @mysql_query($consult1) ;
    
}
if($_POST['oper']=='del')
{
    $consult2  = "DELETE FROM Administradores where IdAdministrador='$id'";
    $resultado2 = @mysql_query($consult2) ;
    
}
?>