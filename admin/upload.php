<?php
session_start();
$ds = DIRECTORY_SEPARATOR;
$NANANA=$_SESSION['Documento'];
$storeFolder = 'img/avatars';
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
    $targetFile =  $targetPath.$NANANA.".jpg" ;
 if(file_exists($targetFile))
 	unlink($targetFile);
    move_uploaded_file($tempFile,$targetFile);
}
?>   