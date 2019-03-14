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
    <title>MEGA EUROPA ABRIL Y MAYO 2018</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/megatravel.png);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">MEGA EUROPA</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Madrid – San Sebastián – Lourdes – Blois – Orleans – Paris – Zúrich – Lucerna – Venecia – Padua – Florencia – Asís – Roma – Pisa – Niza –montpellier- Barcelona – Zaragoza – Madrid</p>
                  <p class="hotel text-center" style="font-size:21px;"> SALIDAS: Consulta con tu Asesor de viajes proto </p>
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
                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje INCLUYE</h3>
                    <ul class="incluyen">
                        <li>- Tiquete aéreo en la ruta Bogotá - Madrid - Bogotá vía Iberia.</li>
                        <li>-  Impuestos del tiquete aéreo y del programa.</li>
                        <li>- Traslados de llegada y salida.</li>
                        <li>- 15 noches de alojamiento en categoría indicada (Madrid 3 Noches, Lourdes 1 noche, Orleans 1 noche, parís 2 noches, Zúrich 1 noche, Venecia 1 noche, Florencia 1 noche, roma 3 noches, Niza 1 noche, Barcelona 1 noche)</li>
                        <li>- Régimen alimenticio según itinerario (15 Desayunos)</li>
                        <li>- Impuestos hoteleros.</li>
                        <li>- Tasas Municipales en París, Venecia, Florencia y Roma.</li>
                        <li>- Tarjeta de Asistencia Médica.</li>
                        <li>- Visitas según itinerario.</li>
                        <li>- Guía profesional de habla hispana</li>
                        <li>- Transporte en autocar turístico.</li>
                    </ul>

                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje NO incluye </h3>
                    <ul class="incluyen">
                        <li>- Gastos personales</li>
                        <li>- Propinas</li>
                        <li>- Servicios no descritos en el programa.</li>
                        <li>- Excursiones opcionales.</li>
                        <li>- Suplementos por Early Check In – Late Check Out, de acuerdo al hotel e itinerarios aéreos.</li>
                        <li>- Alimentación no estipulada en el itinerario terrestre.</li>
                        <li>- Tiquetes aéreos desde otras ciudades de Colombia.</li>
                        <li>- Extras de ningún tipo en los hoteles.</li>
                        <li>- Excesos de equipaje</li>
                    </ul>
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="http://media.expedia.com/hotels/12000000/11570000/11566000/11565988/39522387_w.jpg">
                      <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="info">Precios por persona</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Categoria</td>
                                          <td>Doble</td>
                                          <td>Triple</td>
                                          <td>Sencillo</td>
                                          <td>MENOR (04 a 07 años)</td>
                                      </tr>
                                      <tr>
                                          <td>Turista</td>
                                          <td>$6.859.000</td>
                                          <td>$6.859.000</td>
                                          <td>$9.189.000</td>
                                          <td>$6.119.000</td>

                                      </tr>
                                      <thead>
                                          <tr>
                                              <th class="info">Precios por persona</th>
                                          </tr>
                                      </thead>
                                      <tr>
                                          <td>CIUDAD</td>
                                          <td>HOTEL</td>
                                          <td>CATEGORIA</td>
                                          <td>NOCHES</td>

                                      </tr>
                                      <tr>
                                          <td>Madrid</td>
                                          <td>Florida Norte</td>
                                          <td>P</td>
                                          <td>2</td>

                                      </tr>
                                      <tr>
                                        <td>Burdeos</td>
                                        <td>BB Centre Begles</td>
                                        <td>T</td>
                                        <td>1</td>

                                      </tr>
                                      <tr>
                                        <td>Paris</td>
                                        <td>B B Paris porte de Choisy</td>
                                        <td>T</td>
                                        <td>3</td>

                                      </tr>
                                      <tr>
                                        <td>Frankfurt</td>
                                        <td>B6B Frankfurt Nord</td>
                                        <td>T</td>
                                        <td>1</td>

                                      </tr>
                                      <tr>
                                        <td>Zurich</td>
                                        <td>Movenpick Zurich</td>
                                        <td>P</td>
                                        <td>1</td>

                                      </tr>
                                      <tr>
                                        <td>Innsbruck</td>
                                        <td>Alpin Park</td>
                                        <td>P</td>
                                        <td>1</td>

                                      </tr>
                                      <tr>
                                        <td>Venecia</td>
                                        <td>Apogia Sirio</td>
                                        <td>P</td>
                                        <td>1</td>
                                      </tr>
                                      <tr>
                                        <td>Florencia</td>
                                        <td>BB Firenze Novoli</td>
                                        <td>T</td>
                                        <td>1</td>
                                      </tr>
                                      <tr>
                                        <td>Roma</td>
                                        <td>Ih Roma Z3</td>
                                        <td>P</td>
                                        <td>3</td>
                                      </tr>
                                      <tr>
                                        <td>Niza</td>
                                        <td>Ibis Nice Centre</td>
                                        <td>1</td>
                                        <td>1</td>
                                      </tr>
                                      <tr>
                                        <td>Barcelona</td>
                                        <td>Ibis Barcelona Meridiana</td>
                                        <td>T</td>
                                        <td>1</td>
                                      </tr>
                                      <tr>
                                        <td>Madrid</td>
                                        <td>Novotel Puente de la Paz</td>
                                        <td>P</td>
                                        <td>1</td>
                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Precios cotizados en pesos colombianos por persona. Tarifa sujeta a cambio por fluctuación del euro dólar.</p>
                              <p class="hotel" style="font-size:12px;">Menores entre los 04 y hasta 7 años, compartiendo habitación con 02 adultos. (solicitamos copia pasaporte menor)</p>

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
                  <p class="hotel" style="font-size:21px;">DIA 01 COLOMBIA – MADRID <br>Presentarse en el aeropuerto internacional El Dorado de Bogotá con 3hrs de antelación a la salida del vuelo con destino a la ciudad de Madrid. Noche a bordo</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 02 MADRID<br>
                    Llegada al Aeropuerto de Madrid. Recepción y traslado al hotel. Tarde libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 03 MADRID<br>
                    Desayuno. Visita panorámica de la ciudad con guía local, recorriendo la Plaza de España, Fuente de Cibeles, Plaza de Oriente, Puerta de Alcalá, Ciudad Universitaria, etc... Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 04 MADRID – SAN SEBASTIAN – LOURDES <br>
                    Desayuno. Salida hacia San Sebastián, una de las ciudades más bonitas de España. Tiempo para pasear en su parte antigua. Continuación hacia la región de los pirineos franceses.
                    Tiempo libre para asistir a la impresionante procesión de las Antorchas (HAY DIAS QUE NO SE CELEBRA) y visitar la Santa Gruta donde según la tradición se apareció la Virgen a Bernadette (SI EL HORARIO DE LLEGADA LO PERMITE). Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 05 LOURDES – BLOIS – ORLÉANS <br>
                    Desayuno. Salida a través de bellos paisajes de la campiña francesa hacia Blois, histórica ciudad situada en la ribera del Loira y uno de los enclaves más representativos de la región, con su importante Castillo Real. Continuación Tiempo para conocer Orléans. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 06 ORLÉANS – PARÍS <br>
                    Desayuno. Continuación a París. Llegada y visita panorámica de la ciudad de La Luz, recorriendo la Avenida de los Campos Elíseos, Arco del Triunfo, Torre Eiffel, Isla de la Ciudad, breve tiempo para visitar la Medalla Milagrosa. Tarde libre para actividades personales. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 07 PARÍS <br>
                    Desayuno. Día libre para efectuar excursiones opcionales y continuar descubriendo esta fascinante ciudad. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 08 PARÍS – ZÚRICH<br>
                    Desayuno. Viaje hacia Suiza. Llegada a Zúrich, tiempo para pasear en esta hermosa ciudad Suiza, opcionalmente pueden realizar la visita guiada donde visitaremos la Bahnhofstrasse la colina Lindenhof, el viejo barrio de mineros y pescadores “Schippe”, y el puente más antiguo de Zúrich “Rathaus-Brücke” donde se encuentra el Ayuntamiento a orilla de su lago, etc. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 09 ZÚRICH – LUCERNA – VENECIA <br>
                    Desayuno. Salida hacia Lucerna, situada a orillas del lago de los Cuatro Cantones y ha conservado en sus edificaciones, plazas y callejuelas el encanto medieval. Opcionalmente puede realizar excursión al Monte Titlis: Subirán el teleférico a lo alto de las montañas nevadas de los Alpes Suizos. Apreciando los hermosos paisajes y podrán disfrutar de la nieve, experiencia única y de las diferentes atracciones que allí se encuentran. A la hora indicada salida hacia Venecia. Uno de las ciudades más bellas del mundo. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 10 VENECIA – PADUA – FLORENCIA <br>
                    Desayuno. Mañana dedicada a la visita de Venecia, ciudad de las 118 islas. Traslado en vaporeto hacia Plaza San Marcos. Visita a pie, recorriendo la Plaza, Palacio Ducal, Puente de los Suspiros, etc. Tiempo libre para recorrer por su cuenta las laberínticas calles y canales, y admirar los contrastes entre los bellos Palacios situados en el Gran Canal y las pequeñas iglesias. Opcionalmente le sugerimos completar su tiempo con un paseo en góndola, sin duda una auténtica experiencia veneciana. A la hora indicada salida hacia Padua, ciudad conocida por el Santo, tiempo para visitar su catedral. Continuación hacia Florencia. Llegada y Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 11 FLORENCIA – ASÍS – ROMA <br>
                    Desayuno. Panorámica de la ciudad, cuna del renacimiento y de la lengua italiana. Pasearemos por esta ciudad rebosante de Arte, Historia y Cultura, admirando la Catedral de Santa Maria dei Fiori con su bello Campanille el Baptisterio decorado con las famosas puertas del paraíso, por donde pasaron personajes tan conocidos como Miguel Ángel o Dante Alighieri. A la hora indicada salida hacia Asís, donde visitaremos la ciudad y la Basílica de San Francisco para proseguir hasta Roma “Ciudad Eterna”. Llegada y Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 12 ROMA <br>
                    Desayuno. Día libre durante este día se podrá realizar opcionalmente una de las visitas más interesantes de Italia: Capri – Nápoles – Pompeya, una excursión de día completo para conocer: Nápoles la ciudad más típica italiana, Capri una pintoresca isla del Mediterráneo y Pompeya, espléndida y mitológica ciudad romana. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 13 ROMA - AUDIENCIA PAPAL<br>
                    Desayuno. Salida hacia Ciudad del Vaticano, para asistir AUDIENCIA PAPAL. (SIEMPRE QUE EL PAPA SE ENCUENTRE). Continuamos hacia la visita panorámica de la Ciudad Imperial, recorriendo los Foros Romanos, Coliseo, Arco de Constantino, Plaza de Venecia y Plaza de San Pedro en la Ciudad-Estado de El Vaticano. Resto del día libre para poder realizar excursión opcional a los famosos Museos Vaticanos y la obra cumbre de Miguel Ángel, la Capilla Sixtina. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 14 ROMA – PISA – NIZA <br>
                    Desayuno. Salida hacia Pisa. Parada en la Plaza de los Milagros para contemplar el bello conjunto monumental que forman: la Catedral, Baptisterio y la famosa Torre Inclinada. Continuación a Niza, capital de la Costa Azul.
                    Se sugiere disfrutar del ambiente de esa ciudad cosmopolita o participar en una excursión opcional a Mónaco, Montecarlo y su famoso casino. Alojamiento.

                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 15 NIZA – MONTPELLIER – BARCELONA <br>
                    Desayuno. Breve recorrido panorámico de la ciudad para continuar hacia la ciudad de Montpellier tiempo libre para el almuerzo (no incluido) y continuación hacia la frontera española a través de la Provenza y sus magníficas autopistas. Llegada a Barcelona. Sugerimos disfrutar las múltiples posibilidades nocturnas que la ciudad ofrece Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 16 BARCELONA – ZARAGOZA – MADRID <br>
                    Desayuno. Por la mañana visita panorámica de la ciudad con guía local, incluyendo sus lugares más típicos y pintorescos. Salida hacia Zaragoza. Tiempo libre para poder visitar la Basílica de la Virgen del Pilar, patrona de la Hispanidad y recorrer su caso antiguo. Por la tarde, continuación a Madrid. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 17 MADRID – COLOMBIA <br>
                    Desayuno. A la hora indicada traslado al aeropuerto para tomar el vuelo destino la Ciudad de Bogotá.
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
