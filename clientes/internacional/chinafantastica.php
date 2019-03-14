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
    <title>China Fantastica</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/china.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CHINA FANTASTICA</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Estambul - Beijing - Xi´an – Shanghái – Estambul</p>
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
                        <li>- Boleto de avión Bogotá – Estambul / Estambul - Beijing /Shanghái – Estambul – Bogotá.</li>
                        <li>- Régimen alimenticio de acuerdo a itinerario</li>
                        <li>- 01 noche de alojamiento en Estambul</li>
                        <li>- 01 noche a bordo vuelo Estambul - Beijing</li>
                        <li>- 03 noches de Alojamiento en Beijing</li>
                        <li>- 01 noches de Alojamiento en Xi´an</li>
                        <li>- 01 noche Tren nocturno (camarote compartido)</li>
                        <li>- 02 noches de Alojamiento en Shanghái</li>
                        <li>- Visitas indicadas</li>
                        <li>- Transporte en vehículos de lujo</li>
                        <li>- Guías de habla hispana</li>
                        <li>- Visado china</li>
                        <li>- Tarjeta de Asistencia Medica</li>
                    </ul>

                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje NO INCLUYE</h3>
                    <ul class="incluyen">
                        <li>- Gastos personales</li>
                        <li>- Propinas</li>
                        <li>- Ningún servicio no especificado</li>
                        <li>- Propinas de maleteros, camareros, chofer, guía, etc.</li>
                        <li>- Excursiones o régimen alimenticio marcados como opcional, “fee” personal en los monumentos.</li>
                        <li>- Gastos extras en el hotel como llamadas telefónicas, lavandería, etc.</li>
                        <li>- Vuelo opcional Beijing – Xi’an. Incluye Traslado hotel –aeropuerto – hotel.</li>
                        <li>- Pueden aplicar IMPUESTOS locales hoteleros a pagar directo en destino.</li>
                        <li>- Seguro de cancelación, se adquiere con pasaporte y con el primer depósito, consulte con su agencia de viajes condiciones y restricciones.</li>
                    </ul>
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://exp.cdn-hotels.com/hotels/3000000/2170000/2169300/2169269/22c409dc_z.jpg">
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
                                      </tr>
                                      <tr>
                                          <td>TURISTA SUPERIOR</td>
                                          <td>$ 9.859.000</td>
                                          <td>$ 9.859.000</td>
                                          <td>$ 11.499.000</td>

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
                                          <td>BEIJING</td>
                                          <td>Jen Upper East by Shangri-la // Nikko New Centuruy</td>
                                          <td>5*</td>

                                      </tr>
                                      <tr>
                                          <td>Xi’an</td>
                                          <td>Grand Noble // Titan Central Park</td>
                                          <td>5*</td>

                                      </tr>
                                      <tr>
                                          <td>Shanghai</td>
                                          <td>Pullman Shanghai Jing An Guoman Shanghai Wyndham Grand Plaza Royale Oriental</td>
                                          <td>5*</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Ésta es la relación de los hoteles utilizados más frecuentemente en este circuito. Reflejada tan sólo a efectos indicativos, pudiendo ser el pasajero alojado en establecimientos similares o alternativos</p>
                              <p class="hotel" style="font-size:12px;">SUJETO A CAMBIO POR FLUCTUACION DEL DÓLAR.</p>
                              <p class="hotel" style="font-size:12px;">SUPLEMENTO OPCIONAL DEL VUELO BJS/XIA = 180 USD.</p>
                              <p class="hotel" style="font-size:12px;">OPCIONAL ESPECTACULO DE ACROBACIA = 40 USD</p>
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
                  <p class="hotel" style="font-size:21px;">DIA 1 COLOMBIA – ESTAMBUL viernes, 16 de marzo de 2018<br>
                    Cita en el aeropuerto internacional de la ciudad de Bogotá, para tomar el vuelo TK800 con destino a Estambul, noche a bordo.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 2 ESTAMBUL sábado, 17 de marzo de 2018<br>
                    Llegada a Estambul, día libre para realizar actividades de índole personal. Alojamiento.  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 3 ESTAMBUL - BEIJING domingo, 18 de marzo de 2018<br>
                    Desayuno. Día libre para actividades personales. En la noche traslado al aeropuerto de Estambul para tomar el vuelo TK020 con destino a Beijing. (Vuelo sale a las 02:00 am del 19 marzo), tiempo de vuelo aprox 9 horas.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 4 BEIJING lunes, 19 de marzo de 2018<br>
                    Llegada a Beijing a las 16:30 hrs. aprox, por huso horario. Traslado al hotel. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 5 BEIJING (Ciudad Prohibida + Palacio de Verano) martes, 20 de marzo de 2018.<br>
                    Desayuno Buffet. Durante este día visitaremos: El Palacio Imperial, conocido como “la Ciudad Prohibida”, La Plaza Tian An Men, una de las mayores del mundo, y El Palacio de Verano que era un jardín veraniego para la casa imperial de la Dinastía Qing. Almuerzo incluido. Opción: por la noche, asistencia a un Espectáculo de Acrobacia. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 6 BEIJING (Gran Muralla + Parque Olímpico) miércoles, 21 de marzo de 2018<br>
                    Desayuno Buffet. Excursión a La Gran Muralla, espectacular y grandiosa obra arquitectónica, cuyos anales cubren más de 2.000 años. Almuerzo incluido. Por la tarde vuelta a la ciudad y hacemos una parada cerca del “Nido del Pájaro” (Estadio Nacional) y el “Cubo del Agua” (Centro Nacional de Natación) para tomar fotos (sin entrar en los estadios). Terminaremos con la cena de bienvenida degustando el delicioso Pato Laqueado de Beijing. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 7 BEIJING – XI´AN jueves, 22 de marzo de 2018<br>
                    Desayuno. Visita del Templo del Cielo, construido en 1420 con una superficie de 267 ha, donde los emperadores rezaban por las buenas cosechas. Almuerzo. Por la tarde, traslado a la estación de tren para tomar el TREN DE ALTA VELOCIDAD en la Clase Turista a Xi´an
(Opcional: Traslado al aeropuerto para tomar el VUELO DEL MISMO TRAYECTO BJS-XIA consulte suplemento), antigua capital de China con 3.000 años de existencia, única capital amurallada y punto de partida de la famosa “Ruta de la Seda”. Traslado al hotel. Alojamiento
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 8 XI´AN (Museo de Guerreros y Corceles) – SHANGHAI en Tren Nocturno viernes, 23 de marzo de 2018<br>
                    Desayuno. Visita al famoso Museo de Guerreros y Corceles de Terracota, en el que se guardan más de 6.000 figuras de tamaño natural, que representan un gran ejército de guerreros, corceles y carros de guerra que custodian la tumba del emperador Qin. Almuerzo. Por la tarde, traslado a la estación de tren para tomar el tren nocturno (en camarote cuádruple) a Shanghai. Noche a bordo.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 9 SHANGHÁI (visita ciudad) sábado, 24 de marzo de 2018<br>
                    Llegada a Shanghai, ciudad portuaria directamente subordinada al Poder Central con más de 16 millones de habitantes, es el mayor puerto, centro comercial y la metrópoli más internacional de China. Desayuno NO está incluido y habitación disponible a la hora habitual. Visitaremos el Jardín Yuyuan, el Templo de Buda de Jade y el Malecón de la Ciudad. Almuerzo. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 10 SHANGHAI domingo, 25 de marzo de 2018<br>
                    Desayuno Buffet. Día libre para actividades personales. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 11 SHANGHAI - ESTAMBUL lunes, 26 de marzo de 2018<br>
                    Desayuno. A la hora indicada traslado al aeropuerto para abordar el vuelo TK027 (hora de salida Shanghai 22:35 hrs. Llega a Estambul 05:30 am).
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 12 ESTAMBUL – COLOMBIA martes, 27 de marzo de 2018<br>
                    Desayuno. A la hora indicada traslado al aeropuerto para abordar el vuelo TK800 (sale 02:00 am, 28 marzo) con destino a la ciudad de Bogotá, llegando miércoles, 28 de marzo de 2018 a las 07:45 am.
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