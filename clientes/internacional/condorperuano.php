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
    <title>Condor Peruano 2018</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/condor.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CONDOR PERUANO 2018</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Lima - Arequipa - Cañon del Colca - Puno - Lago Titicaca - Cusco - Machu Picchu</p>
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
                        <li>- Visita de la ciudad de AREQUIPA</li>
                        <li>- Visita al Cañon del Colca, incluye boleto turistico</li>
                        <li>- Visita a las Islas Uros y Taquiles</li>
                        <li>- Almuerzo en la Isla Taquiles</li>
                        <li>- Tiquete de bus Puno - Cusco - Almuerzo incluido en Sicuani</li>
                        <li>- Tiquete de tren en Categoría Expedition a Machu Picchu.</li>
                        <li>- Almuerzo en Machu Picchu sin bebidas.</li>
                        <li>- Guías profesionales.</li>
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
                                        <td>Turista</td>
                                        <td>U$ 1.128</td>
                                        <td>U$ 1.178</td>
                                        <td>U$ 1.610</td>

                                    </tr>
                                    <tr>
                                        <td>Turista sup.</td>
                                        <td>U$ 1.208</td>
                                        <td>U$ 1.268</td>
                                        <td>U$ 1.768</td>

                                    </tr>
                                    <tr>
                                        <td>Primera</td>
                                        <td>U$ 1.368</td>
                                        <td>U$ 1.398</td>
                                        <td>U$ 1.960</td>

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
                                          <td>AREQUIPA</td>
                                          <td>SAN AGUSTIN</td>
                                          <td>INKANTO</td>
                                          <td>EL CABILDO</td>

                                      </tr>
                                      <tr>
                                          <td>CHIVAY</td>
                                          <td>CASA ANDINA </td>
                                          <td>EL REFUGIO</td>
                                          <td>ARAWANA</td>

                                      </tr>
                                      <tr>
                                          <td>PUNO</td>
                                          <td>HACIENDA </td>
                                          <td>ECO INN</td>
                                          <td>SONESTA POSADA</td>

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
                    DESAYUNO. En la mañana iniciaremos con la visita de Lima Colonial, recorrido por el centro Histórico de la ciudad que destaca la arquitectura y el trazo urbano del periodo colonial del Peru, en sus añejas calles con mansiones coloniales de balcones de estilo morisco. Se recorre el Paseo de la Republica, Plaza San Martin y la Plaza Mayor, con sus distintivas edificaciones; Palacio de Gobierno, el Palacio Arzobispal, La Basílica Catedral y el Palacio Municipal, ingresando al monumental Convento de San Francisco, que constituye la mayor muestra del arte religioso Colonial en América. Pasamos luego a la ciudad contemporánea para visitar zonas residenciales más tradicionales de la capital: Miraflores y Larco Mar, centro turístico distintivo de Lima actual y punto privilegiado para aprecia una espectacular vista del Océano Pacifico. Duración 3 horas. Tarde libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: LIMA - AREQUIPA <br>
                  DESAYUNO. Traslado al aeropuerto para tomar el vuelo con destino de Arequipa; recepción en el aeropuerto y traslado al hotel seleccionado. Posteriormente realizaremos la visita de la ciudad, recorriendo por la segunda ciudad más grande de Peru la cual conserva sus antiguos tesoros arquitectónicos contando también con barrios modernos como la zona residencial de Selva Alegre. Conocerá la amplia Plaza de Armas, La Catedral, la cúpula policromada de La Compañía de Jesús con sus claustros con arquería de sillar esculpido, el distrito de Yanahuara, la Plaza e Iglesia de San Francisco, la quebrada de Chilina y el célebre Monasterio de Santa Catalina. Alojamiento en estándar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: AREQUIPA - CAÑON DEL COLCA - CHIVAY <br>
                    DESAYUNO. Salida temprano en la mañana via Yura, pasando por las faldas de Cahchani, Pampar de Arrieros, Reserva Nacional Pmapa Cañahuas donde vive la esbelta vicuña, Vizcachani, Pampas de Toccra con su gran variedad de aves; luego bordearemos el crater Chuerra para llegar a la Patapampa a 4.800 msnvm y gran mirador de Los Andes desde donde se pueden observar los volcanes que rodean la ciudad. Descenso al pueblo de Chivay. En la tarde visita los saludables termales de La Calera. Incluye boleto turístico para ingresar en el Cañón del Colca, el cual es obligatorio. Por la tarde podrán por su cuenta (no incluidos) darse un baño en los Termales de La Calera. Alojamiento en Chivay en el hotel seleccionado.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: CHIVAY - PUNO <br>
                    DESAYUNO. Salida muy temprano hacia Cruz del Condor (Kilometro 41), lugar desde donde se observa uno de los parajes más espectaculares del cañon, si tiene suerte podrán ver cóndores en sobrevuelo; posteriormente retorno a Chivay visitando Pncholo, Maca, Achola, Yanque y Choquetico. Tiempo libre para almorzar (No incluido) y salida hacia Puno tomando el desvió de Patahuasi, se observan en el trayecto paisajes alpinos, como bosques con piedras, lagunas inmensas con muchas aves, asi será el camino hasta Santa Lucia y la ciudad de Juliaca y después de 6 horas de recorrido llegaremos al hotel en Puno. Alojamiento en estándar en el hotel seleccionado.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: PUNO - LAGO TITIKAKA <br>
                    DESAYUNO. Visita en lancha a la Isla de los Uros, donde los pobladores del lago continúan viviendo como sus antepasados, manteniendo sus costumbres e idiosincrasia, pero sobre todo su sistema de vida comunal. Las Islas están ubicadas en el ámbito de la Reserva Nacional del Titicaca. Los Uros son descendientes de uno de los pueblos más antiguos de América. Se dedican principalmente a la caza y pesca.Incluye almuerzo. Por la tarde visitará la Isla de Taquile la cual se encuentra aproximadamente a 03 horas desde el embarcadero de Puno. La Isla de Taquile es de gran interés paisajístico y cultural. Sus habitantes se dedican a la agricultura y han desarrollado una original forma de “turismo comunal“, porque el visitante comparte sus alimentos, vivienda, costumbres y tradiciones. Son famosos por su tejido y artesanía. Los lugareños siguen viviendo de acuerdo a las antiguas tradiciones y leyes de sus antepasados. Posteriormente regreso a la ciudad de Puno. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: PUNO - CUSCO <br>
                    DESAYUNO. A hora oportuna traslado a la estación de bus (Tiquete en linea regularincluido), Salida muy temprano con dirección a la ciudad de Cusco. Este viaje ofrece paradas en lugares interesantes como (Ingresos no incluidos a elección de los pasajeros): Pukara: Es el más importante y antiguo centro ceremonial del Altiplano. Proviene de la cultura Tiawanaco, caracterizada por una serie de plataformas similares a la pirámide Kalasaya que terminan en un plano centro ceremonial. Hay también esculturas, senderos de piedra y la tumba de un persona que demuestra una valiente civilización. Aquí se descubrieron los orígenes de la cultura andina en el Altiplano. La Raya: La reserva de cría de camélidos de donde se podrán tomar fotos al impresionante paisaje del Altiplano. Sicuani: Pueblo donde se brinda el almuerzo incluido. Continuacion a Raqchi: El templo del Dios Wiracocha, a 121 km. de Cusco. Este templo Inca es monumental: 100 metros de longitud, 26 metros de ancho y 14 metros de alto. Dividido en 2 naves, cada uno de ellos aún conserva la base de 11 columnas gigantes. La base de las paredes consiste en el trabajo de piedra del Imperio Incaico con secciones de adobe. Adyacente al templo se pueden ver varios almacenes usados para propósitos militares como religiosos. Andahuaylillas: conocida como la Capilla Sixtina Andina debido a sus frescos magníficos. La iglesia es uno de los ejemplos de la arquitectura barroca mestiza típica de la escuela cusqueña que predominó en el siglo 17. Se maravillará con el techo cubierto de paneles tallados con pan de oro. Al final de la tarde llegaremos a Cusco al hotel seleccionado. Alojamiento en estándar.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: CUSCO - AGUAS CALIENTES - MACHU PICHU <br>
                    DESAYUNO. Excursión al complejo Arqueológico de Machu Picchu situado en la zona subtropical de Cusco o ceja de selva a una altura de 2.350 msnm. Traslado a la estación de tren (Tiquete en Expedition incluido) para salir con destino a la estación de Aguas Calientes, desde allí nos asistirán para tomar el autobús que nos sube hasta la puerta de ingreso a Machu Picchu desde donde daremos inicio a la visita guiada. Conocerá la majestuosa ciudadela, recorrerá las plazas, templos, andenes, recintos ceremoniales y su Palacio Real, además apreciará el famoso Inti Watana ó Reloj solar y una inigualable sucesión de fuentes de agua natural labradas en la roca. ALMUERZO BUFFET incluido. Alojamiento en el hotel seleccionado de Aguas Calientes
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 9: AGUAS CALIENTES - CUSCO <br>
                    DESAYUNO. Mañana libre; si lo desea podrá madrugar para ver el amanecer ó ingresar nuevamente a la ciudadela (Segundo ingreso no incluido). Por la tarde regreso en tren a Cusco. Alojamiento en estándar en el hotel.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 10: CUSCO <br>
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