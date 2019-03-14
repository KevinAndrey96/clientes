<?php
require_once "admin/controlador/conexion.php";
$U=$_POST["User"];
$C=sha1($_POST["Contrasena"]);
$consulta="SELECT * from Clientes where Email='$U' and Contrasena='$C'";
$resultado=mysql_query($consulta);
$cont=0;
while ($row=mysql_fetch_array($resultado)) {
	$cont++;
}
echo "$cont";

?>