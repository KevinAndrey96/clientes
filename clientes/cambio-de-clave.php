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

<body style="background-color:black;">
    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(assets/img/homelogin.png);padding-top:10%;">
            <div class="division container">
                <h1 class="text-center"><strong>Cambio de clave</strong> </h1><a href="#" class="vinculos" style="text-align:center;display:block;margin-top:15px;color:#ffffff;">¿Olvido su contraseña? </a>
                <form action="Controller/cambiodeclave.php" method="POST" id="cambioclave">
                    <input type="password" name="passactual"><a href="#" class="vinculos" style="text-align:center;display:block;margin-top:15px;color:#ffffff;">Contraseña actual </a>
                    <input type="password" name="passnuevo"><a href="#" class="vinculos" style="text-align:center;display:block;margin-top:15px;color:#ffffff;">Nueva contraseña </a>
                    <input type="password" name="passnuevo2"><a href="#" class="vinculos" style="text-align:center;display:block;margin-top:15px;color:#ffffff;">Confirmar contraseña </a></div>
                    <div onclick="document.getElementById('cambioclave').submit();" style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="#" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">GUARDAR </a></div>
            </div>

        </form>
    </div>
    <div style="margin-top:30px;"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>

<?php
require_once("parts/footer.php");
?>
