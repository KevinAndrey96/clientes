<?php
require_once "../controlador/conexion.php";

$page = $_GET['page']; 
$limit = $_GET['rows']; 
$sidx = $_GET['sidx']; 
$sord = $_GET['sord']; 

if(!$sidx)
$sidx =1;

    
$result = mysql_query("SELECT COUNT(*) AS count FROM Administradores"); 
$row = mysql_fetch_array($result,MYSQL_ASSOC);

$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
$total_pages = ceil($count/$limit); 
} else { 
$total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$consulta = "SELECT * FROM Administradores ORDER BY $sidx $sord LIMIT $start , $limit";
$resultado = mysql_query($consulta) ;
$Var->page = $page;
$Var->total = $total_pages;
$Var->records = $count;    
$i=0;


while ($row =mysql_fetch_array($resultado))
{            
    $Var->rows[$i]['id']=$row['IdAdministrador'];
    $Var->rows[$i]['cell']=Array(null,$row['IdAdministrador'], $row['Documento'], $row['Nombres'], $row['Apellidos'], $row['Email'], $row['Contrasena']);            
    $i++;
}
echo json_encode($Var);
?>

