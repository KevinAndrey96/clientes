<?php
require_once("menualliance.php");
require_once("../parts/clave.php");

session_start();
if(!isset($_SESSION['LogueadoCliente']))
{
    ?>
    <script type="text/javascript">
      window.location=" login-proto-alliance.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orlando 4 parques</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300">
    <link rel="stylesheet" href="../assets/css/brand.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="../assets/css/proto.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color:#ffffff;">
<!-- inicio plan -->

    <div class="row">
        <div class="col-md-12 fondo" style="background-image:url(images/4parques.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">ORLANDO CUATRO PARQUES</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Orlando</p>
                  <!-- <p class="hotel text-center" style="font-size:21px;">Salidas: Pregunta con tu Asesor de Viajes Proto</p> -->
              </div>
              </div>
          </div>
      </div>
    </section>
  <!-- fin ciudades -->


    <div style="margin-top:30px;">
        <div class="container">
            <div class="row">

                <!-- INCIO INCLUYE Y NO INCLUYE -->
                <div class="col-md-6">
                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje INCLUYE </h3>
                    <ul class="incluyen">
                        <li>- Traslados Aeropuerto - Hotel – Aeropuerto en Orlando en horario diurno </li>
                        <li>- 04 (Cuatro) noches en habitación estándar en el hotel elegido</li>
                        <li>- Desayuno Continental (Café y Pan) diario en el hotel</li>
                        <li>- 04 Admisiones con traslados hotel – parque – hotel para visitar un parque por día Magic Kingdom - Epcot Center - Hollywood Studios - Animal Kingdom</li>
                        <li>- Coordinadores de habla hispana</li>
                        <li>- Impuestos hoteleros</li>
                    </ul>

                    <!-- <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje NO INCLUYE</h3>
                    <ul class="incluyen">
                        <li>- Gastos personales</li>
                        <li>- Propinas obligatorias se paga en el destino:</li>
                        <li>- 40 usd por pasajero</li>
                        <li>- Ningún servicio no especificado.</li>
                        <li>- Excursiones opcionales.</li>
                        <li>- Visado India https://indianvisaonline.gov.in/evisa/tvoa.html</li>
                        <li>- Gastos extras en el hotel como llamadas telefónicas, lavandería, etc.</li>
                        <li>- Bebidas en ningún almuerzo o cena incluidos en programa o no (en el caso de las Opcionales).</li>
                        <li>- Alimentación no estipulada en los itinerarios.</li>
                        <li>- Tiquetes aéreos desde otras ciudades de Colombia.</li>
                        <li>- Seguro de cancelación, se adquiere con pasaporte y con el primer depósito, consulte con su agencia de viajes condiciones y restricciones.</li>
                    </ul> -->
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://www.clarionlbv.com/wp-content/uploads/2014/08/ClarionLBV-Home-Top-Header-2.jpg">
                      <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="info">Precios por persona</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Categoria</td>
                                          <td>Cuadruple</td>
                                          <td>Triple</td>
                                          <td>Doble</td>
                                          <td>Sencilla</td>
                                          <td>Niños 2-9 años</td>
                                      </tr>
                                      <tr>
                                          <td>Turista</td>
                                          <td>U$ 690</td>
                                          <td>U$ 718</td>
                                          <td>U$ 768</td>
                                          <td>U$ 920</td>
                                          <td>U$ 578</td>

                                      </tr>
                                      <tr>
                                          <td>Turista Sup.</td>
                                          <td>U$ 718</td>
                                          <td>U$ 748</td>
                                          <td>U$ 798</td>
                                          <td>U$ 978</td>
                                          <td>U$ 578</td>
                                      </tr>
                                      <thead>
                                          <tr>
                                              <th class="info">Hoteles</th>
                                          </tr>
                                      </thead>
                                      <tr>
                                          <td>CIUDAD</td>
                                          <td>HOTEL</td>
                                          <td>CATEGORIA</td>

                                      </tr>
                                      <tr>
                                          <td>Orlando</td>
                                          <td>Travelodge Suites o Roomba Inn</td>
                                          <td>Turista</td>

                                      </tr>
                                      <tr>
                                          <td>Orlando</td>
                                          <td>Clarion Inn Lake Buena Vista</td>
                                          <td>Turista Superior</td>

                                      </tr>


                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Ésta es la relación de los hoteles utilizados más frecuentemente en este circuito. Reflejada tan sólo a efectos indicativos, pudiendo ser el pasajero alojado en establecimientos similares o alternativos</p>
                              <p class="hotel" style="font-size:12px;">SUJETO A CAMBIO POR FLUCTUACION DEL DÓLAR.</p>


                        <!-- FIN TARIFAS -->

                  </div>

            </div>
        </div>
    </div>

    <!-- ITINERARIO -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="titulos2 text-center" style="font-weight:600;">ITINERARIOS</h3>

              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 1: ORLANDO <br>
                    Recepción en el Aeropuerto internacional de Orlando y traslado en horario diurno al hotel La entrega de la habitación será después de las 16:00 horas. Alojamiento en estándar.
                    Este día podrá visitar uno de los parques incluidos en el programa (ej Animal Kingdom) </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: ORLANDO <br>
                  DESAYUNO CONTINENTAL. Admisión a un parque incluido dentro del programa (Ej. Magic Kingdom) con traslados hotel parque hotel en horarios preestablecidos con otros turistas.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: ORLANDO<br>
                    DESAYUNO CONTINENTAL. Admisión a un parque incluido dentro del programa (Ej. Epcot Center) con traslados hotel parque hotel en horarios preestablecidos con otros turistas.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: ORLANDO <br>
                    DESAYUNO CONTINENTAL. Admisión a un parque incluido dentro del programa (Ej. Hollywood Studios) con traslados hotel parque hotel en horarios preestablecidos con otros turistas.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: ORLANDO <br>
                    DESAYUNO CONTINENTAL. Traslado en horario diurno al Aeropuerto internacional de Orlando</p>
              </div>

              </div>
          </div>
      </div>
    </section>
  <!-- FIN ITINERARIO -->

  <center style="margin-bottom:30px;">

<a class="btn btn-link btn-block btn-sm boton2" role="button" href="https://protointernational.typeform.com/to/kvZwwD" >Hacer Reserva</a>
</center>




    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/index.js"></script>
</body>

</html>

<?php
require_once("../parts/footer.php");
?>
