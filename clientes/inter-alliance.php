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
<!-- inicio plan -->

    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/planesint/internacional.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">PLANES INTERNACIONALES</h2>
            </div>
        </div>
    </div>
    <div style="margin-top:30px;">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h3 class="titulos2 text-center" style="font-weight:600;">Seleccione un destino para iniciar su viaje</h3>
              </div>
            </div>
        </div>
    </div>
    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/rusia.png">
                    <p class="hotel text-center" style="font-size:21px;">RUSIA Y CAPITALES IMPERIALES</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/rusia.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/megatravel.png">
                    <p class="hotel text-center" style="font-size:21px;">MEGA EUROPA</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/megaeuropa.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/india.jpg">
                    <p class="hotel text-center" style="font-size:21px;">INDIA DORADA</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/indiadorada.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>
    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/china.jpg">
                    <p class="hotel text-center" style="font-size:21px;">CHINA FANTASTICA</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/chinafantastica.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/paris.jpg">
                    <p class="hotel text-center" style="font-size:21px;">PARIS Y PAISES BAJOS</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/parisypaisesbajos.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/pride.jpg">
                    <p class="hotel text-center" style="font-size:21px;">PRIDE WEEK TORONTO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/prideweektoronto.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/canada.jpg">
                    <p class="hotel text-center" style="font-size:21px;">CANADA CLASICO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/canadaclasico.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/circuitoplata.jpg">
                    <p class="hotel text-center" style="font-size:21px;">CIRCUITO DE PLATA CON NEW YORK</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/circuitoplata.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/oestelegendario.jpg">
                    <p class="hotel text-center" style="font-size:21px;">OESTE LEGENDARIO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/oestelegendario.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/4parques.jpg">
                    <p class="hotel text-center" style="font-size:21px;">ORLANDO - 4 PARQUES</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/4parques.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/perubasico.jpg">
                    <p class="hotel text-center" style="font-size:21px;">PERU BASICO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/perubasico.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/peruoferta.jpg">
                    <p class="hotel text-center" style="font-size:21px;">PERÚ EN OFERTA</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/peruoferta.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/condor.jpg">
                    <p class="hotel text-center" style="font-size:21px;">CONDOR PERUANO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/condorperuano.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/buenosaires.jpg">
                    <p class="hotel text-center" style="font-size:21px;">BUENOS AIRES - BASICO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/buenosaires.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/iguazu.jpg">
                    <p class="hotel text-center" style="font-size:21px;">TANGO Y CATARATAS</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/tangoycataratas.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/bariloche.jpg">
                    <p class="hotel text-center" style="font-size:21px;">TANGO Y LAGOS</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/tangoylagos.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/triangulo.jpg">
                    <p class="hotel text-center" style="font-size:21px;">TRIANGULO ARGENTINO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/triangulo.php" >Ver Destino</a>
                </div>
                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/santiago.jpg">
                    <p class="hotel text-center" style="font-size:21px;">CIRCUITO ANDINO</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/circuitoandino.php" >Ver Destino</a>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top:30px;margin-bottom:30px">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="img-responsive container" src="internacional/images/suramerica.jpg">
                    <p class="hotel text-center" style="font-size:21px;">SURAMERICA FÁCIL Y ECONOMICA</p>
                    <a class="btn btn-link btn-block btn-sm boton2" role="button" href="internacional/suramerica.php" >Ver Destino</a>
                </div>
            </div>
        </div>
    </div>



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
