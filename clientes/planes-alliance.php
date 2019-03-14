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
        <div class="col-md-12 fondo2" style="background-image:url(assets/img/nacional1.jpg);">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad" style="font-size:5em;">NACIONAL </h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="nacio-alliance.php" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
        </div>
    </div>
    <div class="row" style="padding-top:30px;">
        <div class="col-md-12">
            <p class="hotel text-center" style="font-size:30px;">Tenemos un mundo de posibilidades para que disfrutes. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 fondo2" style="background-image:url(assets/img/internacional.jpg);padding-top:300px;">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad" style="font-size:5em;">INTERNACIONAL </h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="inter-alliance.php" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">INGRESAR </a></div>
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
