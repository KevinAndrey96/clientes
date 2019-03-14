<?php
require_once("parts/menualliance.php");
require_once("parts/clave.php");

session_start();
if(!isset($_SESSION['LogueadoCliente']))
{
    ?>
    <script type="text/javascript">
      window.location="index.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300">
    <link rel="stylesheet" href="assets/css/brand.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/proto.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color:#ffffff;">
    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/somos1.png);">
            <div class="division" style="margin:auto;"><img class="img-responsive" src="assets/img/logoblanco.png" style="width:500px;margin:auto;"></div>
        </div>
    </div>
    <div class="row" style="padding-top:30px;margin-left:5%;margin-right:5%;">
        <div class="col-md-12">
            <p class="text-justify hotel text-center" style="font-size:25px;">Somos un equipo de profesionales con amplia experiencia en el sector turismo, nuestro objetivo es generar felicidad a nuestros socios ya que estamos totalmente convencidos que viajar trae bienestar, realización, tranquilidad y muchas experiencias.
                Nosotros seremos los aliados de todos aquellos que deseen lo maravilloso de viajar como parte fundamental de su estilo de vida. </p>
        </div>
    </div>
    <div class="row" style="background-image:url(assets/img/ruleta.png);padding-top:200px;min-height:800px;background-size:cover;background-repeat:no-repeat;background-position:center;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center">MISIÓN </h1>
            <p class="text-justify hotel container" style="font-size:16px;color:#ffffff;">PROTO INTERNATIONAL GROUP busca ser el aliado de quienes quieran beneficios adicionales en sus viajes, o de aquellos que requieran una empresa seria, con experiencia para sacarle el máximo provecho a su viaje. Proto Premium, nació para buscar
                los beneficios más atractivos directamente con todos los mayoristas de viajes posibles, para todos los miembros de nuestro club de beneficios Proto Premium, estos beneficios representaran más y mejores viajes, y traerán calidad en sus
                vacaciones a cada uno de los miembros y su familia.&nbsp; Con la división de nuestra compañía PROTO TRAVEL, buscaremos a diario cumplir con todos los requerimientos en cuanto viajes se refiere de cualquier persona, manejando un amplio
                portafolio de servicios desde viajes corporativos pasando por viajes experiencia les, terminando en viajes de placer. </p>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="http://protointernational.co/planes-alliance.php" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <div class="row" style="padding-top:30px;margin-left:5%;margin-right:5%;">
        <div class="col-md-12 hidden-xs hidden-sm">
            <p class="text-center hotel text-center" style="/*font-size:21px;*/">Tenemos un mundo de posibilidades para que disfrutes. </p>
        </div>
        <div class="col-md-12 hidden-md hidden-lg">
            <p class="text-center hotel text-center" style="/*font-size:21px;*/">Tenemos un mundo de posibilidades para que disfrutes. </p>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/planes1.png);margin-top:20PX;">
        <div class="col-lg-6 col-md-6">
            <h1 class="text-center">PLANES</h1>
            <div style="margin-top:40px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="http://protointernational.co/planes-alliance.php">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/capa11.png);margin-top:20PX;">
        <div class="col-lg-6 col-md-6">
            <h1 class="text-center">PROMOCIÓN DEL MES </h1>
            <div style="margin-top:40px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="http://protointernational.co/promo-del-mes.php">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/descuentos.png);margin-top:20PX;">
        <div class="col-lg-6 col-md-6">
            <h1 class="text-center">DESCUENTOS </h1>
            <div style="margin-top:40px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="http://protointernational.co/descuentos.php">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/capa10.png);margin-top:20PX;">
        <div class="col-lg-6 col-md-6">
            <h1 class="text-center">CORTESÍAS Y PASADIÁS </h1>
            <div style="margin-top:40px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="http://protointernational.co/cortesias-y-pasadias.php">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class="img-responsive" src="assets/img/logoproto.svg" style="width:100px;margin:auto;"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p style="color:#ffffff;font-size:10px;"><strong>Contáctenos</strong>7568277 reservas@protointernational.co </p>
        </div>
    </div>
    <div class="row" style="background-image:url(assets/img/vision.png);padding-top:200px;min-height:800px;background-size:cover;background-repeat:no-repeat;background-position:center;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center">VISIÓN </h1>
            <p class="text-justify hotel container" style="font-size:16px;color:#ffffff;">Proto International group busca a mediano plazo convertirse en&nbsp; el principal grupo de fidelización vacacional, aumentando en un porcentaje considerable el volumen de miembros de su producto Proto Premium, de esta manera con una base
                de miembros solida buscar muchos y mas mejores beneficios.&nbsp; Deseamos aumentar en un 150% en 5 años el volumen de miembro de Proto Premium. Proto Travel. Se convertirá en mediano plazo en un portal de búsqueda de viajes interesante
                en internet. Donde contaremos con un amplio número de visitantes a diario todo esto afianzado por una campaña de marketing digital solida y un servicio al cliente 5 estrellas.z </p>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="http://protointernational.co/planes-alliance.php" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>

<?php
require_once("parts/footer.php");
?>
