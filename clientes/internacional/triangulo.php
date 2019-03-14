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
    <title>Triangulo Argentino</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/triangulo.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">TRIANGULO ARGENTINO</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Buenos Aires - Bariloche - Iguazu</p>
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
                        <li>- Traslados aeropuerto - hotel - aeropuerto según itinerario</li>
                        <li>- Alojamiento en habitaciones estándar en los hoteles mencionados o similares</li>
                        <li>- 05 Noches en Buenos Aires, segun itinerario</li>
                        <li>- 02 Noches en Bariloche</li>
                        <li>- 02 Noches en Iguazu</li>
                        <li>- Desayuno diario en los hoteles</li>
                        <li>- Visitas descritas en el itinerario</li>
                        <li>- Cena y Show de Tangos en Buenos aires</li>
                        <li>- Ingreso a los Parques Naturales de Iguazú</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="http://cdn.precioyviajes.com/00/07/01/00070138_gp.jpg">
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
                                          <td>U$ 898</td>
                                          <td>U$ 938</td>
                                          <td>U$ 1.528</td>

                                      </tr>
                                      <tr>
                                          <td>Primera</td>
                                          <td>U$ 990</td>
                                          <td>U$ 1.038</td>
                                          <td>U$ 1.748</td>

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
                                          <td>BUENOS AIRES</td>
                                          <td>BRISTOL/</td>
                                          <td>TURISTA SUP</td>

                                      </tr>
                                      <tr>
                                          <td>BUENOS AIRES</td>
                                          <td>ARGENTA TOWERS</td>
                                          <td>PRIMERA</td>

                                      </tr>
                                      <tr>
                                          <td>BARILOCHE </td>
                                          <td>NAHUEL HUAPI  </td>
                                          <td>TURISTA SUP.</td>

                                      </tr>
                                      <tr>
                                          <td>BARILOCHE </td>
                                          <td>CACIQUE INACAYA</td>
                                          <td>PRIMERA</td>

                                      </tr>
                                      <tr>
                                          <td>IGUAZU</td>
                                          <td>YVY HOTEL DE SELVA</td>
                                          <td>TURISTA SUP.</td>

                                      </tr>
                                      <tr>
                                          <td>IGUAZU</td>
                                          <td>GRAND CRUCERO</td>
                                          <td>PRIMERA</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">HOTELES PREVISTOS O SIMILARES</p>
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
                  <p class="hotel" style="font-size:21px;">Día 1: BUENOS AIRES <br>
                    Llegada, recepción y traslado al hotel. Check in a las 15:00. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: BUENOS AIRES - BARILOCHE <br>
                  DESAYUNO. Traslado al aeropuerto para tomar el vuelo con destino a Bariloche; recepción y traslado al hotel. Check in a las 15:00. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: BARILOCHE <br>
                    DESAYUNO. En la mañana Circuito Chico, visitando Playa Bonita, Centro Atómico, Puerto Moreno, Erazo Campanario, Laguna El Trébol, Península Llao Llao. En la tarde visita al bello Cerro Catedral (No incluye teleférico). Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: BARILOCHE - BUENOS AIRES <br>
                    DESAYUNO. Traslado al aeropuerto para tomar el vuelo con destino a Buenos Aires. Llegada, recepción y traslado al hotel, Check in a las 15:00. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: BUENOS AIRES <br>
                    DESAYUNO. En la mañana realizaremos la visita de la ciudad; Plaza de Mayo, Avenida 9 de Julio, Catedral, Teatro Colon, Palacio Legislativo, Paseo Colon, hasta la colonia de la Boca, parques y bosques de Palermo, la Recoleta, Avenida Albear, Calle Santa Fe y Plaza San Martín. Tarde libre. En la noche Cena y Show de Tangos con traslados. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: BUENOS AIRES <br>
                    DESAYUNO. Día libre para actividades particulares. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: BUENOS AIRES - IGUAZU<br>
                    DESAYUNO. En la mañana traslado a el aeropuerto para tomar el vuelo a Iguazú; recepción en el aeropuerto del lado Argentino y traslado al hotel. En la tarde visita a lasCataratas del Lado Argentino (Incluye entrada). Llegada al Centro de visitantes en la entrada del Parque Nacional de Iguazú. Este centro presenta óptima infraestructura con todos los servicios básicos como snack, bares, un restaurante, tiendas de souvenirs, sanitarios, puesto médico y también un edificio donde grandes paneles enseñan la importancia y la biodiversidad de la selva subtropical húmeda. Para acceder a las pasarelas de donde se observan las Cataratas de Iguazú los visitantes toman un tren movido a gas, que los llevará a los paseos superior y Garganta del Diablo. La caminada se realiza por las pasarelas del paseo inferior que dura 01 hora y del paseo superior que dura 50 minutos aproximadamente. El accedo a la Isla San Martín se da por el paseo inferior y dura 1 1/2 horas. Aprox. Tarde libre. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: IGUAZU <br>
                    DESAYUNO. En la mañana visitaremos las Cataratas del lado Brasilero (Incluye entrada al parque) Llegada al Centro de visitantes, localizado a 10km de las Cataratas de Iguazú, presenta una excelente infraestructura con exposición de fotos de las Cataratas de Iguazú, paneles con mapas del parque y una gran tienda de souvenirs, puesto médico, venta de ingresos al parque, banco, etc. Después de pasar por el centro se continúa la visita por una carretera que nos lleva hasta las magníficas Cataratas. Ahí, el Walking tour por la pasarela es de aproximadamente 1 km de extensión y de nivel muy fácil. Esta caminata ofrece vistas panorámicas de las Cataratas y al final, una fantástica aproximación (Mojada) de la Garganta del Diablo y principales saltos. Tarde libre. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 9: IGUAZU - BUENOS AIRES <br>
                    DESAYUNO. En la tarde traslado al aeropuerto del lado Argentino para tomar el vuelo con destino a Buenos Aires; recepción en el aeropuerto y traslado al hotel. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 10: BUENOS AIRES <br>
                    DESAYUNO. Traslado al aeropuerto para tomar el vuelo de salida
                  </p>
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