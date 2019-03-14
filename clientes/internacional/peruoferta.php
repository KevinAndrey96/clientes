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
    <title>Peru en Oferta</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/peruoferta.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">PERU EN OFERTA 2018</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Lima - Cusco - Machu Picchu</p>
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
                        <li>- Traslados Aeropuerto - Hotel - Aeropuerto.</li>
                        <li>- Desayuno diario en los hoteles.</li>
                        <li>- Visita de la ciudad de LIMA colonial</li>
                        <li>- Visita de la ciudad de CUSCO con entradas a las ruinas en Cusco.</li>
                        <li>- Tiquete en Categoría Expedition a Machu Picchu.</li>
                        <li>- Almuerzo en Machu Picchu sin bebidas.</li>
                        <li>- Guías profesionales.</li>
                        <li>- Visitas mencionadas en las diferentes ciudades.</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="http://www.taypikala.com/website/photos/hotel_4_1.jpg">
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
                                          <td>TURISTA</td>
                                          <td>U$ 698</td>
                                          <td>U$ 738</td>
                                          <td>U$ 988</td>

                                      </tr>
                                      <tr>
                                          <td>TURISTA SUP.</td>
                                          <td>U$ 758</td>
                                          <td>U$ 790</td>
                                          <td>U$ 1.098</td>

                                      </tr>
                                      <tr>
                                          <td>PRIMERA</td>
                                          <td>U$ 820</td>
                                          <td>U$ 848</td>
                                          <td>U$ 1.110</td>

                                      </tr>
                                      <thead>
                                          <tr>
                                              <th class="info">Hoteles</th>
                                          </tr>
                                      </thead>
                                      <tr>
                                          <td>CIUDAD</td>
                                          <td>TURISTA</td>
                                          <td>TURISTA SUP</td>
                                          <td>PRIMERA</td>

                                      </tr>
                                      <tr>
                                          <td>LIMA</td>
                                          <td>TAMBO</td>
                                          <td>ALLPA</td>
                                          <td>NOBILITY</td>

                                      </tr>
                                      <tr>
                                          <td>CUSCO  </td>
                                          <td>SAN FRANCISCO</td>
                                          <td>SAN AGUSTIN DOR</td>
                                          <td>ECO INN</td>

                                      </tr>
                                      <tr>
                                          <td>AGUAS</td>
                                          <td>INTI PUKO</td>
                                          <td>TAYPIKALA</td>
                                          <td>EL MAPI</td>

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
                  <p class="hotel" style="font-size:21px;">Día 1: LIMA <br>
                    Llegada, recepción en el aeropuerto y traslado al hotel seleccionado. La entrega de la habitación será después de las 16:00 horas. Alojamiento en estándar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: LIMA <br>
                  DESAYUNO. En la mañana se inicia con la visita panorámica de la ciudad de Lima Colonial con sus encantos virreinales entre los que cuenta la Plaza Mayor, Catedral, el Palacio de Gobierno, el Convento San Francisco, barrios tradicionales, la Alameda de los Descalzos, Paseo de Aguas. Continuando conocerá la Huaca Huallamarca, que data de la época Preinca construida de adobes en forma piramidal. Luego visitaremos el barrio de Miraflores, con intenso movimiento comercial, y activa vida nocturna. Tarde libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: LIMA - CUSCO <br>
                    DESAYUNO. Traslado a el aeropuerto para tomar el vuelo (No incluye tiquete), se sugiere un vuelo con llegada antes de las 11:00 horas a Cusco; recepción en el aeropuerto y traslado al hotel seleccionado. Después de aclimatarse a la altura y sobre las 13:00 horas iniciamos la excursión de medio día donde se visita la catedral, el “Qorikancha” o Templo del Sol y las cuatro ruinas aledañas a la ciudad del Cusco: La Fortaleza de Sacsayhuaman: Situada a 2Km. de la ciudad, monumental complejo considerado conjuntamente con la ciudad del Cusco como la primera entre las nuevas siete Maravillas del Mundo. Obra ciclópea planificada y construida por el hombre andino. Q´enqo: Situada a 3 Km. de la ciudad, Centro ceremonial y de culto. Puca Pucara: Situada a 6 Km. de la ciudad. Fue un centro administrativo y militar que por su posición estratégica cumplía funciones de puesto de control en los caminos del Inca. Tambomachay: Situada a 7 Km. de la ciudad y a 3.700 m.s.n.m. conocida como los baños del Inca. Incluye las entradas. Alojamiento en estándar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: CUSCO - AGUAS CALIENTES - MACHU PICCHU - AGUAS CALIENTES<br>
                    DESAYUNO. Excursión al complejo Arqueológico de Machu Picchu situado en la zona subtropical de Cusco o ceja de selva a una altura de 2.350 msnm. Traslado a la estación de tren (Tiquete en Expedition incluido); para salir con destino a la estación de Aguas Calientes, desde allí nos asistirán para tomar el autobús que nos sube hasta la puerta de ingreso a Machu Picchu desde donde daremos inicio a la visita guiada. Conocerá la majestuosa ciudadela, recorrerá las plazas, templos, andenes, recintos ceremoniales y su Palacio Real, además apreciara el famoso Inti Watana ò reloj solar y una inigualable sucesión de fuentes de agua natural labradas en la roca. ALMUERZO BUFFET incluido. El resto de la tarde será libre. Alojamiento en Aguas Calientes</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: AGUAS CALIENTES - CUSCO <br>
                    DESAYUNO. Mañana libre durante la cual si lo desea pagando un cargo segundo ingreso (no incluido) podrá visitar nuevamente la ciudadela ó darse un baño en las termales del lugar a los cuales les otorgan propiedades curativas. Por la tarde regreso en tren a Cusco. Traslado al hotel. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: CUSCO <br>
                    DESAYUNO. Traslado al aeropuerto.
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