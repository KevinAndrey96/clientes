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
    <title>Oeste legendario</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/oestelegendario.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">2018 - OESTE LEGENDARIO</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">San Diego - Las Vegas - Gran Canyon - Oakhurst - Parque Yosemite - San Francisco - Monterrey - Carmel - Santa María - Santa Barbara</p>
                  <p class="hotel text-center" style="font-size:21px;">Salidas: Consulta con tu Asesor de Viajes Proto</p>
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
                        <li>- Hoteles entre Turista Superior y/o Primera Superior</li>
                        <li>- Desayuno americano diario en los hoteles.</li>
                        <li>- Propinas a maleteros en los hoteles a razón de una maleta por persona, las demás tendrán un cargo extra por cuenta de los pasajeros.</li>
                        <li>- Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús con todas las comodidades.</li>
                        <li>- Guías profesionales de habla hispanaVisitas mencionadas en las diferentes ciudades.Un Almuerzo en el Gran Cañon sin bebidas.</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://t-ec.bstatic.com/images/hotel/max1024x768/744/74445360.jpg">
                      <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="info">Precios por persona</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Temporada</td>
                                          <td>Cuadruple</td>
                                          <td>Triple</td>
                                          <td>Doble</td>
                                          <td>Sencilla</td>
                                          <td>Niños</td>
                                      </tr>
                                      <tr>
                                          <td>Baja</td>
                                          <td>  U$ 1.348</td>
                                          <td>  U$ 1.448</td>
                                          <td>  U$ 1.638</td>
                                          <td>  U$ 2.308</td>
                                          <td>  U$ 1.028</td>

                                      </tr>
                                      <thead>
                                          <tr>
                                              <th class="info">Hoteles</th>
                                          </tr>
                                      </thead>
                                      <tr>
                                          <td>CIUDAD</td>
                                          <td>HOTEL</td>


                                      </tr>
                                      <tr>
                                          <td>San Diego</td>
                                          <td>Bayside Inn / Best Western Plus </td>


                                      </tr>
                                      <tr>
                                          <td>Las Vegas</td>
                                          <td>New York New York </td>


                                      </tr>
                                      <tr>
                                          <td>Oakhurst </td>
                                          <td>Yosemite Southgate Hotel & Suites</td>


                                      </tr>
                                      <tr>
                                          <td>San Francisco</td>
                                          <td>Sheraton Fisherman's Wharf</td>


                                      </tr>
                                      <tr>
                                          <td>Santa María</td>
                                          <td>Santa María Inn</td>


                                      </tr>

                                  </tbody>
                              </table>

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
                  <p class="hotel" style="font-size:21px;">Día 1: (DOMINGO) - LOS ANGELES - SAN DIEGO <br>
                    resentación en el lugar y hora indicada. Salida con rumbo a San Diego, por la autopista 5 en medio de los conjuntos residenciales más avanzados del planeta. Bordeando la costa a la llegada de la bella ciudad de San Diego, se visita La Jolla, Mission Bay, Old Town, la bahía del downtown, el distrito histórico “Gaslamp Distric”, Bay Bridge, la isla de Coronado y el parque Balboa. Después del tour, hacemos el registro en el hotel. Noche libre. Alojamiento en el hotel BAYSIDE INN / BEST WESTERN PLUS o similar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: (LUNES) - SAN DIEGO - LAS VEGAS <br>
                  DESAYUNO. Salida hacia Las Vegas, haciendo una parada corta dentro de aproximadamente 3 horas en Barstow, ciudad donde llegan todos los trenes de carga que salen hacia distintos destinos en EE.UU. Se continúa cruzando el desierto Mojave para llegar a Las Vegas en 2 horas más. Registro en el hotel y descanso, luego por la noche se ofrece un tour de los casinos para conocer el esplendor de la iluminación y los espectáculos únicos de la capital mundial de la diversión. Alojamiento en el hotel NEW YORK NEW YORK o similar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: (MARTES) - LAS VEGAS - GRAN CAÑON - LAS VEGAS<br>
                    DESAYUNO. Visita a terrestre al Parque del Gran Canyon extremo oeste donde se encuentra el famoso puente de Cristal nombrado Sky Walk. Salimos en la mañana hacia el parque cruzando el Desierto de Mojave entre los estados de Nevada y Arizona, llegando a la entrada del parque en aproximadamente 2 horas y media. El parque está ubicado en las tierras de la Nación Indígena Americana Hualapai. Hacemos nuestro registro y luego nos subimos a un bus que nos llevará a visitar dos puntos de vista espectaculares: El primero el Puente de Cristal a una elevación de más de 1.400 mts sobre el Cañon. Luego se visita Guano Point, que cuenta con un mirador que se adentra en el Cañon y que ofrece una vista de casi 360°. Les ofrecemos el almuerzo incluido y luego empezaremos nuestro viaje de regreso a Las Vegas. Noche libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: (MIERCOLES) - LAS VEGAS - OAKHURST <br>
                    DESAYUNO. Salida de Las Vegas cruzando el Desierto Mojave, parada dentro de aproximadamente 2 horas en Calico. Pueblo de fantasmas donde hace más de 100 años vivió una comunidad de gente que trabajaron las minas de plata en esa región. Luego Continuamos por 2 horas más parando en la ciudad de Bakersfield para almorzar(No incluido). Después seguimos por el Valle central de California emporio de la agricultura mundial con 4 millones de hectáreas cultivadas e irrigadas por los ríos San Joaquín y Sacramento. Recorrido en medio de las mayores plantaciones de frutales para pasar por Fresno y finalmente arribar a Oakhurst, bello pueblo en las estribaciones de la Sierra Nevada. Registro en el hotel YOSEMITE SOUTHGATEWAY INN ó similar. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: (JUEVES) - OAKHURST - PARQUE YOSEMITE - SAN FRANCISCO<br>
                    DESAYUNO. Salida ascendiendo la Sierra Nevada se visita el Parque Nacional de Yosemite una de las maravillas de la naturaleza más conocidas en el mundo. Hacemos varias paradas en el parque para tomar fotos de los panoramas de este valle espectacular. En aproximadamente 3 horas paramos para tomar el almuerzo (No incluido). Luego continuamos llegando dentro de 2 horas a la bella ciudad de San Francisco. Alojamiento en el hotel SHERATON FISHERMAN´S WHARF ò similar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: (VIERNES) - SAN FRANCISCO <br>
                    DESAYUNO. Tour panorámico de la ciudad, se visita: la pequeña Italia, el Distrito Financiero. Subiendo la calle Market cual divide la ciudad en 2 partes, pasamos por la zona de compras Union Square con todas las tiendas de marca famosa mundial. Llegamos al Civic Center, zona de Gobierno y cultural de la ciudad. Luego visitamos el parque Alamo Square donde encontramos los mejores ejemplos de casa de la arquitectura Victoriana. Seguimos a la zona de Twin Peaks, punto más alto de la ciudad con vistas espectaculares. Después pasamos por el parque Golden Gate y el parque Presidio para llegar finalmente al famoso rojo puente Golden Gate. Terminamos el tour con una parada para caminar la famosa curvosa calle Lombard. Regreso al hotel. Resto del día libre Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: (SABADO) - SAN FRANCISCO - MONTERREY Y CARMEL - SANTA MARIA<br>
                    DESAYUNO. Salida hacia el sur atravesando Silicón Valley, Centro mundial de la informática. Visita de la histórica ciudad Monterrey, primera capital de California, refugio de los más ricos y famosos con sus mansiones campestres por la costa del océano pacífico y en medio de campos de golf. Conocemos las zonas de Fisherman’s Wharf, Cannery Row y Pacific Grove, para llegar a Carmel, bellísimo pueblo de artistas, parada de 2 horas para conocer y almorzar (No incluido). Luego salimos por la Autopista 101 llegando por el atardecer en Santa María. Alojamiento en el hotel SANTA MARIA INN o similar
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: (DOMINGO) - SANTA MARIA - SANTA BARBARA - LOS ANGELES<br>
                    DESAYUNO. Salida por la mañana hacia Santa Bárbara tomando la pintoresca carretera 101 por la colina de viñedos y la costa del océano pacifico. A la llegada se visita la famosa Misión de Santa Bárbara y luego pasamos por la playa donde encontraremos pintores locales mostrando sus grandes obras. Después caminamos la calle principal nombrado State Street pasando por tiendas interesantes, restaurantes y cafés, y el museo de arte de Santa Bárbara. Después salimos para Los Ángeles llegando en aproximadamente 2 horas más. * Fin de los Servicios *
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