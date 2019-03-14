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
    <title>Canada Clasico</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/canada.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CANADA CLASICO</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Toronto - Ottawa (Hull) - Mont Tremblant - Quebec – Montreal</p>
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
                        <li>- Alojamiento en estándar en hoteles Turista Superior y/ó Primera.</li>
                        <li>- Desayuno americano diario en los hoteles</li>
                        <li>- Propinas a maleteros en los hoteles a razón de una maleta por persona, las demás tendrán un cargo extra por cuenta de los pasajeros.</li>
                        <li>- Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús ó van con todas las comodidades.</li>
                        <li>- Guías profesionales de habla hispana ó portuguesa.Visitas mencionadas en las diferentes ciudades.</li>
                        <li>- Admisión al barco de Mil Islas, opera de Mayo a Octubre. Barco Hornblower, opera de Mayo a Octubre. </li>
                        <li>- Fuera de temporada será sustituido por los túneles escénicos.</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://media-cdn.tripadvisor.com/media/photo-s/08/c5/d8/01/chelsea-hotel-toronto.jpg">
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
                                          <td>media</td>
                                          <td>U$ 1.208</td>
                                          <td>U$ 1.298</td>
                                          <td>U$ 1.478</td>
                                          <td>U$ 2.208</td>
                                          <td>U$ 750</td>

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
                                          <td>Toronto</td>
                                          <td>Eaton Chelsea Toronto Hotel</td>


                                      </tr>
                                      <tr>
                                          <td>Hull</td>
                                          <td>Four Points Sheraton / Gatinea Ottawa</td>


                                      </tr>
                                      <tr>
                                          <td>Mont Tremblant</td>
                                          <td>Marriott Residence Inn</td>

                                      </tr>
                                      <tr>
                                          <td>Quebec City</td>
                                          <td>TRYP by Wyndham Quebec hotel Pur</td>

                                      </tr>
                                      <tr>
                                          <td>Montreal</td>
                                          <td>Le Nouvel Hotel Montreal</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Ésta es la relación de los hoteles utilizados más frecuentemente en este circuito. Reflejada tan sólo a efectos indicativos, pudiendo ser el pasajero alojado en establecimientos similares o alternativos</p>


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
                  <p class="hotel" style="font-size:21px;">Día 1: TORONTO <br>
                    Recepción en el aeropuerto y traslado en horario diurno al hotel. Favor tomar nota que el horario de entrada a las habitaciones es después de las 16:00 horas. Resto del día libre. Alojamiento en estándar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: TORONTO - NIAGARA FALLS - TORONTO <br>
                  DESAYUNO AMERICANO. En la mañana tendremos un encuentro con el guía en el lobby del hotel para desayunar y conocer al resto del grupo. Iniciamos con una visita panorámica de la ciudad: la Alcaldía, el Parlamento provincial, la Universidad de Toronto, el barrio de Yorkville y el barrio donde se encuentra el estado de Baseball y la torre CN (Torre auto portante más alta del mundo) donde pararemos y daremos tiempo para subir (admisión no incluida). Luego partimos hacia Niágara Falls, una vez allí navegaremos por el rio Niágara en el barco Hornblower que nos llevará hasta la misma caída de las cataratas. Tiempo libre para almuerzo (no incluido). Visitaremos Table Rock con su inolvidable panorámica. Más tarde continuamos el recorrido por la ruta del vino hasta llegar al bellísimo pueblo de Niágara on the Lake, antigua capital del Alto Canadá. Regreso a Toronto. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: TORONTO - MIL ISLAS - OTTAWA (HULL) <br>
                    DESAYUNO AMERICANO. Durante nuestro viaje a la capital federal de Canadá, se tomará el crucero por el archipiélago de las Mil Islas, donde nace el Rio St Lawrence. Continuamos el viaje en autobús hacia Ottawa. Al llegar iniciamos un tour panorámico de la ciudad. Por la tarde los llevaremos al barrio viejo donde tendrán tiempo libre. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: OTTAWA - MT TREMBLANT <br>
                    DESAYUNO AMERICANO. Luego salimos del hotel para realizar la visita de la ciudad pasando por el Parlamento, las mansiones del Gobernador y el Primer Ministro, el canal Rideau y la zona residencial, el cambio de guardia herencia inglesa en Canadá se realiza en los meses de Julio y Agosto solamente. Sugerimos en su tiempo libre visitar el Museo de la Civilización, el más importante de la región. Luego del almuerzo (no incluido) partimos hacia la Región de los Montes Laurentinos, donde se encuentran la mayoría de los centros de esquí del Este de Canadá y son atracción tanto en verano como en invierno. Llegada al final de la tarde y tiempo libre en Mt Tremblant. Alojamiento en estándar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: MT TREMBLANT - QUEBEC <br>
                    DESAYUNO AMERICANO. Temprano por la mañana partimos hacia Quebec. En el camino haremos un alto en una de las típicas cabañas de azúcar de la región donde podrá degustar el jarabe de arce caramelizado y conocer su proceso de producción. A la llegada a Quebec iniciamos nuestro tour panorámico. Después del almuerzo (no incluido) continuaremos la visita de la ciudad, en la que veremos los Campos de Batalla, el Cabo Diamante, el Jardín de Juana de Arco, la Grande Allee, el Parlamento de la Provincia de Quebec, la Ciudad Amurallada, la Puerta San Luis, la Plaza de Armas, el área del Chateau Frontenac, el Hotel de Ville, el Puerto Viejo y la Plaza Real. Alojamiento en estándar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: QUEBEC <br>
                    DESAYUNO AMERICANO. Día libre para actividades personales ó excursiones opcionales las cuales les serán ofrecidas por nuestro guía, pero son a su gusto si quiere ó no participar. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: QUEBEC - MONTREAL <br>
                    DESAYUNO AMERICANO. Salida hacia la ciudad de Montreal, capital cultural y de la moda de Canadá también se distingue por la vida nocturna y su gastronomía. Visitaremos la Basílica de Notre Dame, la Plaza de Armas, la Plaza Cartier, el Puerto Viejo, el Edificio del Ayuntamiento, el Puerto de Montreal, el Barrio Francés, el estadio de los Juegos Olímpicos de 1976. La milla Cuadrada de Oro, en donde vivieron las familias más ricas del país en el siglo XIX. El parque del Monte Real, el Oratorio San Jose. Resto de la tarde libre. Alojamiento en estándar
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: MONTREAL <br>
                    DESAYUNO AMERICANO. Día libre para actividades personales en esta magnífica ciudad. Sugerimos que pasee por el viejo Montreal, la zona vive con el sabor de los recuerdos de la vida franco – canadiense del siglo XVIII. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 9: MONTREAL <br>
                    DESAYUNO AMERICANO. Traslado al aeropuerto en horario diurno. **Fin de nuestros servicios**
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