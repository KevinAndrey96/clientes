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
    <title>Circuito Andino</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/santiago.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CIRCUITO ANDINO</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;"> Santiago de chile - Puerto Varas - Bariloche -  Buenos Aires</p>
                  <!-- <p class="hotel text-center" style="font-size:21px;">Salidas: Consulta con tu Asesor de Viajes Proto</p> -->
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
                        <li>- Traslados aeropuerto- hotel- aeropuerto</li>
                        <li>- 03 Noches de Alojamiento en Santiago De Chile, desayuno diario en el hotel</li>
                        <li>- 02 Noches de Alojamiento en Bariloche, desayuno diario en el hotel</li>
                        <li>- 03 Noches de Alojamiento en Buenos Aires, desayuno diario en el hotel</li>
                        <li>- Visita de la ciudad, medio día, en Tour Regular en Santiago de Chile, Bariloche y Buenos Aires</li>
                        <li>- Cruce Andino incluye tiquetes</li>
                        <li>- Cena y Show de Tangos, con traslados en Buenos Aires</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://www.eurotel.cl/img/04.jpg">
                      <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="info">Precios por persona</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Categoria</td>
                                          <td>Triple</td>
                                          <td>Doble</td>
                                          <td>Sencillo</td>
                                      </tr>
                                      <tr>
                                          <td>Turista Sup.</td>
                                          <td>U$ 1.208</td>
                                          <td>U$ 1.278</td>
                                          <td>U$ 1.998</td>

                                      </tr>
                                      <tr>
                                          <td>Primera</td>
                                          <td>U$ 1.358</td>
                                          <td>U$ 1.388</td>
                                          <td>U$ 2.230</td>

                                      </tr>

                                      <thead>
                                          <tr>
                                              <th class="info">Hoteles</th>
                                          </tr>
                                      </thead>
                                      <tr>
                                          <td>CIUDAD</td>
                                          <td>TURISTA SUP.</td>
                                          <td>PRIMERA</td>

                                      </tr>
                                      <tr>
                                          <td>SANTIAGO DE CHILE</td>
                                          <td>EUROTEL PROVIDENCIA</td>
                                          <td>ATTON BOSQUE</td>

                                      </tr>
                                      <tr>
                                          <td>PUERTO VARAS</td>
                                          <td>PARK INN</td>
                                          <td>CABAÑA DEL LAGO</td>

                                      </tr>
                                      <tr>
                                          <td>BARILOCHE</td>
                                          <td>NAHUEL HUAPI</td>
                                          <td>CACIQUE INACAYAL</td>

                                      </tr>
                                      <tr>
                                          <td>BUENOS AIRES</td>
                                          <td>BRISTOL</td>
                                          <td>ARGENTA TOWERS</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Lista de hoteles previstos o similares</p>
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
                  <p class="hotel" style="font-size:21px;">Día 1: SANTIAGO DE CHILE <br>
                    Llegada, recepción en el Aeropuerto y traslado al hotel. Entrega de la habitación después de las 15:00 horas. Alojamiento en habitación estándar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: SANTIAGO DE CHILE<br>
                  DESAYUNO. En la mañana Visita de la ciudad: Club Hípico, parque Cousiño, Universidad de Santiago, Iglesia de San Francisco Cerro Santa Lucía, Cerro San Cristóbal, Palacio Presidencial, etc. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: SANTIAGO DE CHILE - VALPARAISO - VIÑA DEL MAR - SANTIAGO DE CHILE<br>
                  DESAYUNO. Salida por la carretera Panamericana hacia Valparaíso, donde con una breve parada conoceremos la ciudad y puerto más importante de Chile. A continuación seguiremos a Viña del Mar, se hará un recorrido visitando los sitios de mayor interés. Regreso a Santiago. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: SANTIAGO DE CHILE - PUERTO MONT - PUERTO VARAS<br>
                  DESAYUNO. Traslado al aeropuerto para tomar el vuelo con destino a Puerto Montt;  llegada, recepción y traslado al hotel en Puerto Varas. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: PUERTO VARAS - CRUCE ANDINO - BARILOCHE<br>
                  DESAYUNO. En la mañana salida desde la Terminal del cruce para iniciar el Cruce Andino (Tiquete incluido), embarcaremos e iniciaremos nuestro viaje a través del lago Esmeralda a todos los Santos hasta llegar a Peulla. Continuación en autobús hacia Puerto Blest, punto limítrofe entre Chile y Argentina allí haremos los trámites legales de entrada a la República Argentina, continuamos a Bariloche bordeando el lago Nahuel Huapi llegando en horas de la tarde a Puerto Pañuelo, donde tomaremos el autobús que nos llevará a Bariloche. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: BARILOCHE<br>
                  DESAYUNO. En la mañana Circuito Chico, visitando Playa Bonita, Centro Atómico, Puerto Moreno, Erazo Campanario, Laguna El Trébol, Península Llao Llao. En la tarde visita al bello Cerro Catedral (No incluye teleférico). Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: BARILOCHE - BUENOS AIRES <br>
                  DESAYUNO. Traslado al aeropuerto para tomar el vuelo con destino a Buenos Aires. Llegada, recepción y traslado al hotel. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: BUENOS AIRES <br>
                  DESAYUNO. En la mañana realizaremos la visita de la ciudad; Plaza de Mayo, Avenida 9 de Julio, Catedral, Teatro Colon, Palacio Legislativo, Paseo Colon, hasta la colonia de la Boca, parques y bosques de Palermo, la Recoleta, Avenida Albear, Calle Santa Fe y Plaza San Martín. Tarde libre. En la noche Cena y Show de Tangos con traslados.Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 9: BUENOS AIRES <br>
                  DESAYUNO. Día libre para actividades particulares. Recibirá cuponera de descuentos para compras en centros comerciales. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 10: BUENOS AIRES <br>
                  DESAYUNO. Traslado al aeropuerto para tomar el vuelo de salida</p>
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