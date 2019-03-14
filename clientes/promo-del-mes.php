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

<body style="background-color:ffffff;">

    <!-- imagen plan -->
      <div class="row">
          <div class="col-md-12 fondo" style="background-image:url(assets/img/planesn/sanandrespromo.png);/*padding-top:300px;*/">
              <div class="division" style="margin:auto;">
                  <h2 class="text-center ciudad">SEMANA SANTA 2019 SAN ANDRÉS</h2></div>
              <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
          </div>
      </div>
      <!-- hoteles -->
      <div style="margin-top:30px;">
          <div class="container">
              <div class="row">
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres1.png">
                    <p class="hotel text-center" style="font-size:21px;"> Las Américas Plan: Full</p>
                    <p class="hotel text-center" style="font-size:21px;"> TRIPLE: COP 1.932.000 </p>
                    <p class="hotel text-center" style="font-size:21px;"> CUADRUPLE: COP 1.932.000</p>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres2.png">
                    <p class="hotel text-center" style="font-size:21px;"> El Dorado Plan: Full</p>
                    <p class="hotel text-center" style="font-size:21px;"> TRIPLE: COP 2.095.000 </p>
                    <p class="hotel text-center" style="font-size:21px;"> CUADRUPLE: COP 2.095.000 </p>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres3.png">
                    <p class="hotel text-center" style="font-size:21px;"> Lord Pierre Plan: Full</p>
                    <p class="hotel text-center" style="font-size:21px;"> TRIPLE: COP 2.220.000</p>
                    <p class="hotel text-center" style="font-size:21px;"> CUADRUPLE: COP 2.220.000</p>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="assets/img/hoteles/sanandres1.png">
                    <p class="hotel text-center" style="font-size:21px;"> Arena Blanca Plan: Full</p>
                    <p class="hotel text-center" style="font-size:21px;"> TRIPLE: COP 2.445.000</p>
                    <p class="hotel text-center" style="font-size:21px;"> CUADRUPLE: COP 2.445.000</p>
                </div>
              </div>
          </div>
      </div>

      <!-- descripción -->
      <div class="row" style="padding-top:30px;">
          <div class="col-md-12">
              <p class="hotel text-center" style="font-size:21px;">Condiciones del paquete: </p>
              <ul class="list-unstyled text-center incluyen" style="font-size:21px;">
                <li>Tiquetes aéreos.</li>
                <li>Traslados de llegada y salida.</li>
                <li>Alojamiento en ele hotel seleccionado</li>
                <li>Snacks.</li>
                <li>Tours.</li>
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
