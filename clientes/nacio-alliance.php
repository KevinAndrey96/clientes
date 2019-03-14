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
  <!-- imagen plan -->
    <div class="row">

<!-- inicio plan -->

  <!-- imagen plan -->
   <div class="container">
    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/planesn/cartagena.jpg);/*padding-top:150px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CARTAGENA</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- hoteles -->
    <div style="margin-top:30px;">
        <div class="container">
            <div class="row">
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/cartagena1.png">
                  <p class="hotel text-center" style="font-size:21px;"> CARTAGENA PREMIUM/COSTA DE SOL (PLAN 3 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.099.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 999.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 969.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 849.000 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/cartagena2.png">
                  <p class="hotel text-center" style="font-size:21px;"> PLATA CLUB (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.249.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 1.118.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 1.031.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 951.000 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/cartagena3.png">
                  <p class="hotel text-center" style="font-size:21px;"> BAHIA (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.249.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 1.118.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 1.118.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 951.000 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/cartagena4.png">
                  <p class="hotel text-center" style="font-size:21px;"> DORADO (FULL ESTILO)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.359.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 1.269.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 1.239.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 1.079.000 COP </p>
              </div>
            </div>
        </div>
    </div>

    <!-- descripción -->
    <div class="row" style="padding-top:30px;">
        <div class="col-md-12">
            <p class="hotel text-center" style="font-size:21px;">Condiciones del paquete: </p>
            <ul class="list-unstyled text-center incluyen" style="font-size:21px;">
                <li>Tiquete aéreo desde Cali, Bogotá, Medellín a Cartagena</li>
                <li>Traslado aeropuerto - hotel - aeropuerto.&nbsp; </li>
                <li>Alojamiento del 8 al 11 de Octubre plam PAM en hotel elegido</li>
                <li>Tour a Baru Terrestre con almuerzo incluido</li>
                <li>Asistencia médica.</li>
                <li>Impuestos aéreos y hoteleros.(245.000)</li>
            </ul>
        </div>
    </div>

<!-- fin plan -->

<!-- inicio plan -->

  <!-- imagen plan -->
    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/planesn/sanandres.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">SAN ANDRÉS</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- hoteles -->
    <div style="margin-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres1.png">
                    <p class="hotel text-center" style="font-size:21px;">Hotel Verde Mar </p>
                    <p class="hotel text-center" style="font-size:21px;">$1.150.000 COP </p>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres2.png">
                    <p class="hotel text-center" style="font-size:21px;">Hotel Lord Pierre</p>
                    <p class="hotel text-center" style="font-size:21px;">$1.340.000 COP</p>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres3.png">
                    <p class="hotel text-center" style="font-size:21px;">Sol caribe campo</p>
                    <p class="hotel text-center" style="font-size:21px;">1.370.000 COP</p>
                </div>
            </div>
        </div>
    </div>

    <!-- descripción -->
    <div class="row" style="padding-top:30px;">
        <div class="col-md-12">
            <p class="hotel text-center" style="font-size:21px;">Condiciones del paquete: </p>
            <ul class="list-unstyled text-center incluyen" style="font-size:21px;">
                <li>Tiquete aéreo con Viva Colombia</li>
                <li>Cargos, suplementos e impuestos ($260.000).</li>
                <li>Alojamiento 4 noches en el hotel seleccionado.&nbsp; </li>
                <li>Alimentación desayuno, almuerzo y cena, Snack de 4 a 5pm y bebidas de 11am a 11pm.</li>
                <li>Traslados aeropuerto - hotel - aeropuerto</li>
                <li>Combo de tours</li>
                <li>Asistencia médica</li>
                <li>Equipaje de 20Kg ida y regreso</li>
                <li>Checkin en aeropuerto</li>
            </ul>
        </div>
    </div>

    <div class="row" style="padding-top:30px;">
        <div class="col-md-12">
            <p class="hotel text-center" style="font-size:21px;">NO INCLUYE: </p>
            <ul class="list-unstyled text-center incluyen" style="font-size:21px;">
                <li>Seguro hotelero pagadero por el pax en el hotel</li>
                <li>Tarjeta de entrada a la isla</li>
                <li>Gastos no especificados en el plan.</li>
            </ul>
        </div>
    </div>

<!-- fin plan -->

<!-- inicio plan -->

  <!-- imagen plan -->
    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/planesn/santamarta.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">SANTA MARTA</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- hoteles -->
    <div style="margin-top:30px;">
        <div class="container">
            <div class="row">
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/santamarta1.png">
                  <p class="hotel text-center" style="font-size:21px;"> HOTEL TAYBO (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 899.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 799.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 769.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 654.000 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/santamarta2.png">
                  <p class="hotel text-center" style="font-size:21px;"> HOTEL PALMARENA (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 999.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 826.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 796.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 702.100 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/santamarta3.png">
                  <p class="hotel text-center" style="font-size:21px;"> HOTEL EDMAR (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 999.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 826.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 796.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 702.100 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/santamarta4.png">
                  <p class="hotel text-center" style="font-size:21px;"> HOTEL SANSIRAKA (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.048.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 899.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 899.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 769.000 COP </p>
              </div>
              <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/santamarta5.png">
                  <p class="hotel text-center" style="font-size:21px;"> HOTEL RODADERO (PLAN 2 COMIDAS)</p>
                  <p class="hotel text-center" style="font-size:21px;"> Sencilla: 1.098.000 COP</p>
                  <p class="hotel text-center" style="font-size:21px;"> Doble: 939.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> Multiple: 939.000 COP </p>
                  <p class="hotel text-center" style="font-size:21px;"> NIños 2-9: 799.000 COP </p>
              </div>
            </div>
        </div>
    </div>

    <!-- descripción -->
    <div class="row" style="padding-top:30px;">
        <div class="col-md-12">
            <p class="hotel text-center" style="font-size:21px;">Condiciones del paquete: </p>
            <ul class="list-unstyled text-center incluyen" style="font-size:21px;">
              <li>Tiquete aéreo desde Cali, Bogotá, Medellín a Santa Marta</li>
              <li>Traslado aeropuerto - hotel - aeropuerto.&nbsp; </li>
              <li>Alojamiento del 8 al 11 de Octubre plam PAM en hotel elegido</li>
              <li>Tour a Playa Blanca Terrestre con almuerzo incluido</li>
              <li>Asistencia médica.</li>
              <li>Impuestos aéreos y hoteleros.(245.000)</li>
            </ul>
        </div>
    </div>

<!-- fin plan -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
    
    <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5zug2qJ9W2h8gkSJtRX2dYKamM94IjH3";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>

</html>

<?php
require_once("parts/footer.php");
?>
