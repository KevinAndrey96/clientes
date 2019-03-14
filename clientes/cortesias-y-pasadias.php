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
    <div class="row hidden-xs hidden-sm" style="background-image:url(assets/img/cortesia1.png);padding-top:15%;min-height:800px;background-size:100%;background-repeat:no-repeat;">
        <div class="col-lg-6 col-md-6 col-sm-6"><img src="assets/img/capa 21.png" class="container" style="width:200px;display:block;">
            <h1 class="text-center">Tradición, cultura y diversión en familia. </h1></div>
        <div class="col-lg-6 col-md-6" style="padding-left:40px;padding-right:40px;">
            <h1 class="text-center">PARQUE LOS ARRIEROS</h1>
            <p class="text-justify hotel" style="font-size:18px;color:#ffffff;">El Hotel Parque los Arrieros&nbsp; está ubicado en Quimbaya Quindío, La reserva del bono aplica únicamente en temporada baja , debe realizarse con mínimo 20 días de antelación a la fecha del viaje,&nbsp; aplica desde una noche en adelante,
                el valor de la tasa de activación por persona&nbsp; es de $45.000 pesos la noche por persona adulta o niño, incluye desayuno y cena, el acceso&nbsp; a las instalaciones del hotel, aplica mínimo para dos persona la tarifa mencionada. </p>
        </div>
        <div class="col-md-12">
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-xs hidden-sm" style="background-image:url(assets/img/cortesia2.png);padding-top:15%;min-height:800px;background-size:100%;background-repeat:no-repeat;">
        <div class="col-lg-6 col-md-6 col-sm-6"><img src="assets/img/ilustracion 1.png" class="container" style="width:200px;display:block;">
            <h1 class="text-center">Tradición, cultura y diversión en familia. </h1></div>
        <div class="col-lg-6 col-md-6" style="padding-left:40px;padding-right:40px;">
            <h1 class="text-center">FINCA LA ESPERANZA</h1>
            <p class="text-justify hotel" style="font-size:18px;color:#ffffff;">Finca la&nbsp; Esperanza se encuentra ubicado en Salinas De Cumaral en el departamento Meta. Esta encantadora finca es un lugar increíble para disfrutar en familia o por que no pasar buenos momentos entre amigos, para alojarse tendrá todo
                el espacio y la privacidad que necesita para descansar en las hermosas tierras del llano colombiano.Este bono tiene una tasa de activación de $ 45.000 por persona, incluye desayuno tipo americano y cena. Adquiere un 10% de descuento en
                el alquiler de caballos. </p>
        </div>
        <div class="col-md-12">
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-xs hidden-sm" style="background-image:url(assets/img/cortesia3.png);padding-top:15%;min-height:800px;background-size:100%;background-repeat:no-repeat;">
        <div class="col-lg-6 col-md-6 col-sm-6"><img src="assets/img/llano.png" class="container" style="width:200px;display:block;">
            <h1 class="text-center">Una estadía inolvidable. </h1></div>
        <div class="col-lg-6 col-md-6 container" style="padding-left:40px;padding-right:40px;">
            <h1 class="text-center">HOTEL DEL LLANO</h1>
            <p class="text-justify hotel" style="font-size:18px;color:#ffffff;">El Hotel del Llano, esta situado estratégicamente junto a las vías más importantes y rápidas de la ciudad de Villavicencio. Tiene fácil acceso al Aeropuerto de la Ciudad, Al Terminal De Transporte Terrestre, Centros Comerciales Y Al Centro Cultural De La Ciudad.</p>
            <p class="text-justify hotel" style="font-size:18px;color:#ffffff;">El Hotel del Llano, Dispone de 116 Habitaciones amplias, todas Con Internet Wi-fi Gratis, Esta Rodeado De Hermosos Jardines, Con Spa, Piscina Semi Olímpica Para Adultos, piscina para niños, parque infantil, sauna, turco, gimnasio y 2 modernos restaurantes, El Hotel del Llano certificado en la norma ambiental NTSTS 002 y Categorizado en 4 Estrellas con la norma NTSH 006 a través del certificador internacional SGS.</p>
            <p class="text-justify hotel" style="font-size:18px;color:#ffffff;">Este bono tiene una tasa de activación de $ 140.000 por pareja, incluye desayuno Incluye desayuno, impuestos, usos de las instalaciones y parqueadero.</p>

        </div>
        <div class="col-md-12">
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/cortesia1.png);margin-top:10PX;padding-top:5%;">
        <div class="col-lg-6 col-md-6"><img class="img-responsive container" src="assets/img/capa 21.png" style="width:120px;display:block;">
            <p class="text-justify hotel container" style="font-size:16px;color:#ffffff;"> El Hotel Parque los Arrieros&nbsp; está ubicado en Quimbaya Quindío, La reserva del bono aplica únicamente en temporada baja , debe realizarse con mínimo 20 días de antelación a la fecha del viaje,&nbsp; aplica desde una noche en adelante,
                el valor de la tasa de activación por persona&nbsp; es de $45.000 pesos la noche por persona adulta o niño, incluye desayuno y cena, el&nbsp;</p>
            <div style="margin-top:20px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="https://protointernational.typeform.com/to/kvZwwD">INGRESAR </a></div>
        </div>
    </div>
    <div class="row" style="padding-top:30px;margin-left:5%;margin-right:5%;">
        <div class="col-md-12 hidden-xs hidden-sm">
            <p class="text-center hotel text-center" style="/*font-size:21px;*/">Para realizar tu reservación comunícate al 756 8277 – 350 7813211 de Lunes a Viernes de 09:00 am. a 04:00 pm. </p>
        </div>
        <div class="col-md-12 hidden-md hidden-lg">
            <p class="text-center hotel text-center" style="font-size:20px;">Para realizar tu reservación comunícate al 756 8277 – 350 7813211 de Lunes a Viernes de 09:00 am. a 04:00 pm. </p>
        </div>
    </div>
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/cortesia2.png);margin-top:30PX;padding-top:5%;">
        <div class="col-lg-6 col-md-6"><img class="img-responsive container" src="assets/img/ilustracion 1.png" style="width:120px;display:block;">
            <p class="text-justify hotel container" style="font-size:16px;color:#ffffff;">Finca la&nbsp; Esperanza se encuentra ubicado en Salinas De Cumaral en el departamento Meta. Esta encantadora finca es un lugar increíble para disfrutar en familia o por que no pasar buenos momentos entre amigos, para alojarse tendrá todo
                el espacio y la privacidad que necesita para descansar en las hermosas tierras del llano colombiano.Este bono tiene una tasa de activación de $ 45.000 por persona, incluye desayuno tipo americano y cena. Adquiere un 10% de descuento en
                el alquiler de caballos. </p>
            <div style="margin-top:20px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="https://protointernational.typeform.com/to/kvZwwD">INGRESAR </a></div>
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
    <div class="row hidden-md hidden-lg smscreen2" style="background-image:url(assets/img/cortesia3.png);margin-top:10PX;padding-top:5%;">
        <div class="col-lg-6 col-md-6"><img class="img-responsive container" src="assets/img/capa 142.png" style="width:200px;display:block;">
            <p class="text-justify hotel container" style="font-size:18px;color:#ffffff;">Desayuno - impuestos - seguro hotelero.Aplica entre semana y fines de semana sin festivos. Exceptuando temporada alta: fines de semana con festivo incluido, semana santa, semana de receso estudiantil en octubre.Se debe reservar con 48 horas
                de anticipación. </p>
            <div style="margin-top:20px;"><a class="btn btn-link btn-block btn-sm boton1" role="button" href="https://protointernational.typeform.com/to/kvZwwD">INGRESAR </a></div>
        </div>
    </div>
    <div class="row hidden">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img class="img-responsive" src="assets/img/logoproto.svg" style="width:100px;margin:auto;"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p style="color:#ffffff;font-size:10px;"><strong>Contáctenos</strong>7568277 reservas@protointernational.co </p>
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
