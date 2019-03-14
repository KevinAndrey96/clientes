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
    <title>India Dorada</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/india.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">INDIA DORADA</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Estambul - Delhi– Jaipur - Agra</p>
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
                        <li>- Tiquete aéreo Bogotá – Estambul – Delhi – Estambul - Bogotá con Turkish Airlines</li>
                        <li>- Impuestos aéreos y del programa (sujetos a cambios sin previo aviso)</li>
                        <li>- 01 noche de alojamiento en Estambul</li>
                        <li>- 02 noches de alojamiento en Delhi.</li>
                        <li>- 02 noches de alojamiento en Jaipur</li>
                        <li>- 02 noche de alojamiento en Agra</li>
                        <li>- Traslados aeropuerto hotel aeropuerto</li>
                        <li>- Régimen alimenticio:</li>
                        <li>- 07 Desayunos, 05 Almuerzos, 05 Cenas</li>
                        <li>- Visitas según itinerario.</li>
                        <li>- Guía profesional de habla hispana</li>
                        <li>- Subida a Fuerte Amber a lomos de elefantes (sujeto a disponibilidad) y bajada en Jeep.</li>
                        <li>- Las entradas a los monumentos mencionados en el programa.</li>
                        <li>- Transporte en autocar turístico.</li>
                        <li>- Tarjeta de asistencia médica.</li>
                    </ul>

                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje NO INCLUYE</h3>
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
                    </ul>
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://r1imghtlak.mmtcdn.com/8ff6b96471c911e7a5c1025f77df004f.jpg?interpolation=progressive-bicubic&downsize=700:360&output-quality=50">
                      <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="info">Precios por persona</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Categoria</td>
                                          <td>Doble/Triple</td>
                                          <td>Sencillo</td>
                                      </tr>
                                      <tr>
                                          <td>PRIMERA SUP.</td>
                                          <td>$7.359.000</td>
                                          <td>$8.459.000</td>

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
                                          <td>DELHI</td>
                                          <td>HOTEL ITC DWARKA STANDARD</td>
                                          <td>PS</td>

                                      </tr>
                                      <tr>
                                          <td>JAIPUR</td>
                                          <td>JAIPUR PARK REGIS</td>
                                          <td>PS</td>

                                      </tr>
                                      <tr>
                                          <td>AGRA</td>
                                          <td>AGRA CLARK SHIRAZ</td>
                                          <td>PS</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Ésta es la relación de los hoteles utilizados más frecuentemente en este circuito. Reflejada tan sólo a efectos indicativos, pudiendo ser el pasajero alojado en establecimientos similares o alternativos</p>
                              <p class="hotel" style="font-size:12px;">SUJETO A CAMBIO POR FLUCTUACION DEL DÓLAR.</p>
                              <p class="hotel" style="font-size:12px;">ITINERARIO SUJETO A CAMBIOS EN EL DESTINO, YA SEA POR PROBLEMAS CLIMATICOS U OPERACIONALES (SIEMPRE INCLUYENDO LOS MISMOS SERVICIOS)</p>


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
                  <p class="hotel" style="font-size:21px;">DIA 1 COLOMBIA – ESTAMBUL <br>
                    Cita en el aeropuerto internacional de la ciudad de Bogotá, para tomar el vuelo TK800 con destino a Estambul, noche a bordo.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 2 ESTAMBUL <br>
                  Llegada a Estambul, día libre para realizar actividades de índole personal. Alojamiento.  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 3 ESTAMBUL - DELHI <br>
                    Desayuno. Día libre para actividades personales. En la noche traslado al aeropuerto de Estambul para tomar el vuelo TK716 con destino a Delhi. (Vuelo sale a las 20:00).</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 4 NUEVA DELHI Miércoles<br>
                    Llegada a Delhi en vuelo internacional. Nuestro representante de habla hispana les recibirá en el aeropuerto, asistencia y traslado al hotel. Salida para visitar la Vieja Delhi, veremos el Jamma Masjid, (no se puede acceder con calzado), cuya construcción comenzó en 1644 por orden del Shah Jahan. Es la mayor de la India con una capacidad para 25.000 personas. Consta de tres puertas de gran tamaño, cuatro atalayas y dos minaretes de 40 m. de altura listados, alternando roca arenisca roja y mármol blanco. También veremos El Raj Ghat, este hermoso parque es donde se encuentra el cenotafio consistente de una plataforma de mármol negro que indica el lugar donde Mahatma Gandhi fue incinerado tras su asesinato. También fueron incinerados allí Pandit Nehru e Indira Gandhi. Continuaremos la visita recorriendo la Nueva Delhi. Los edificios gubernamentales, la Puerta de la India, un arco de triunfo construido en piedra y con una altura de 42 mt., en el que figuran los nombres de los 90.000 soldados del ejército indio que murieron durante la I Guerra Mundial. Panorámica por la zona de parlamento y la residencia del presidente. Más tarde, visitaremos El templo Sikh: El Gurdwara Bngla Sahib es un templo de la doctrina Sikh. Está construido en la zona de Connaught Place. Es el templo más importante de los sikhs en Delhi. Miles de personas de todas las religiones visitan este templo a diario.
Por último, veremos el Qutub Minar, uno de los monumentos más antiguos de la primera ciudad de Delhi, pues su construcción se inició en 1199. Este complejo se caracteriza por combinar estilos hindúes con elementos islámicos. Su alminar o minarete, es el más alto del mundo, alcanza una altura de 72.5 mt. Dispuestos en cinco estratos de diámetro decrecientes. Al pie del alminar se encuentra la Puerta Alai Darwaza, hecha de ladrillos rojos y amarillos, y que en su día fue la entrada a la mezquita. También aquí se encuentra la tumba del Sultán Iltutamish y el mausoleo de Imam Zami. Regreso al hotel y alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 5 NUEVA DELHI -JAIPUR (270 KMS, 05 HORAS)<br>
                    Desayuno en el hotel. Por  la  mañana  salida por carretera a Jaipur, llegada y Check-in en el hotel. Jaipur, la ciudad rosa que debe su sobrenombre al color de la piedra arenisca con la que se construyeron los edificios de la ciudad antigua. El diseño agradable de esta villa se debe al maharaja Jai Sigh II que inició su construcción en 1728 y quien consiguió que su arquitecto Vidyadhar Chakravarty mezclara con acierto estilos tan diversos como el hindú, el jainista, el mongol y el persa. Por la tarde visita de templo Birla y paseo a pie por la parte antigua de la ciudad. Traslado al hotel. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 6 JAIPUR – AMBER – JAIPUR (14 KMS 30 MIN)<br>
                    Desayuno en el hotel. Excusión al Fuerte Amber, la subida será a lomos de un elefante (sujeto a disponibilidad), y la bajada en jeeps. El fuerte, levantado por los reyes mongoles con el objetivo de defender la Ciudadela. Este complejo, consiste en un conjunto de edificios entre los que se encuentran un palacio y otra fortaleza en una posición más elevada. Visita al Palacio del Maharajá, residencia de la familia real de Jaipur, recinto repleto de palacios, jardines y otros edificios entre los que destaca el Chandra Mahal, tiene siete plantas de altura, y en su interior se halla el Museo del Haharaja Sawai Man Singh II en el que se pueden contemplar alfombras, objetos esmaltados, armas, pinturas con miniaturas, cañones y vestimentas de los maharajás. Seguidamente, visitaremos Jantar Mantar, el observatorio astronómico, con un reloj de sol de 30 mt. de altura y otros instrumentos astronómicos de gran interés. Este es uno de entre los cinco observatorios que existen. Junto a esta zona se ubica el conocido Palacio de los Vientos o Hawa Mahal (es una fachada con la estructura de un palacio) que se utilizaba para que las  mujeres pudieran ver las procesiones y la vida de las calles. Regreso hotel y alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 7 JAIPUR-ABHANERI-AGRA (240 KMS)<br>
                    Desayuno en el hotel. Por la mañana, salida por carretera a Agra. En ruta se hará una parada para sacar las fotos de stepwell de Abhaneri y el templo hindú que esta al lago. Abhaneri es un pueblo cerca de Jaipur, donde van a visitar Chand Baori, este baori esta excavado en forma de pirámide invertida a partir de una gran planta cendrada. De 30 metros de lado, tiene más 3500 escalones, 20 metros de profundidad y fue construido en 800 D.C por el rey Chand de la dinastía Chahaman. En este baori se juntaba agua de lluvias en la época de monzones y servía esta agua para todo el pueblo en resto del año. Salida hacia Agra, llegada y traslado al hotel. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 8 AGRA <br>
                    Desayuno en el hotel. Hoy van a visitar una de las siete maravillas del mundo. El Taj Mahal (cerrado todos los viernes del año), el monumento que ha dado fama mundial a Agra y que se ha convertido en el símbolo de la India. El Taj Mahal, es un mausoleo que el emperador Shah Jahan mandó construir en 1631 en honor de su amada esposa Mumtaz Mahal, la dama del Taj, fallecida al dar a luz a su decimocuarto hijo en 1629. La construcción, en la que participaron 20.000 personas, no finalizó hasta 1653. Constituye la muestra más representativa de la arquitectura mongol. El arquitecto principal, Isa Khan, diseñó este conjunto en un rectángulo de 508 por 304 mts. Con un jardín central flanqueado por los cuatro lados por pabellones con planta octogonal. El mausoleo, construido totalmente en mármol blanco,  se levanta sobre una base de mármol con un minarete, también blanco, en cada una de las esquinas Que alcanzan los 41 mt. De altura cada uno. El cuerpo central consta de cuatro pequeñas cúpulas que rodean a una más grande situada en medio. En la cripta de este edificio de dos pisos reposan los restos de este matrimonio. Si el conjunto arquitectónico por sí mismo ya resulta impresionante la decoración conocida como piedra dura en la que los pequeños detalles como los arabescos florales y los motivos geométricos en semirelieve con piedras preciosas entre otros, son magníficos convirtiendo esta construcción en un monumento único.
                    Además, visitaremos el Fuerte Rojo, declarado Patrimonio de la Humanidad por la UNESCO en el año 1983. La construcción, data del año 1565, y está concebida como un palacio amurallado rodeado de una profunda fosa de agua. La fortaleza, a la que se accede desde una imponente puerta llamada Amar Singh, contiene numerosos palacios y edificios señoriales construidos por emperador mongol Akbar, y utilizados en sucesivos gobiernos del Imperio Mongol como base de operaciones del poder mogol. Regreso al hotel y alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 9 AGRA-DELHI (200 KMS, 4 HRS)<br>
                    Desayuno  en el hotel. Salida hacia Delhi. Alojamiento
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 10 DELHI – ESTAMBUL – COLOMBIA martes, 13 de marzo de 2018<br>
                    A la hora indicada traslado al aeropuerto para abordar el vuelo TK717 (hora de salida 06:25 hrs. Llega a Estambul 11:25 am). Para abordar el vuelo TK800 (sale 02:00 am, 14 marzo) con destino a la ciudad de Bogotá, llegando miércoles, 14 de marzo de 2018 a las 07:45 am.
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
