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
    <title>planes</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/rusia.png);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">RUSIA Y CAPITALES IMPERIALES</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">Moscú – San Petersburgo – Riga – Berlín – Dresden – Praga – Bratislava – Budapest – Viena</p>
                  <p class="hotel text-center" style="font-size:21px;">Salidas: Confirma con tu Asesor de viajes Proto
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
                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">LOS PRECIOS INCLUYEN </h3>
                    <ul class="incluyen">
                        <li>- Boleto de avión Bogotá – Moscú / Viena – Bogotá volando con Turkish.</li>
                        <li>- Impuestos aéreos y del programa (sujetos a cambios sin previo aviso)</li>
                        <li>- Vuelos internos San Petersburgo – Riga – Berlín</li>
                        <li>- Tren Moscú – San Petersburgo</li>
                        <li>- 3 noches alojamiento en Moscú</li>
                        <li>- 2 noches alojamiento en San Petersburgo</li>
                        <li>- 1 noche alojamiento en Riga</li>
                        <li>- 2 noches alojamiento en Berlín</li>
                        <li>- 3 noches alojamiento en Praga</li>
                        <li>- 2 noches alojamiento en Budapest</li>
                        <li>- 2 noches alojamiento en Viena</li>
                        <li>- Régimen alimenticio según itinerario.</li>
                        <li>- Visitas según itinerario.</li>
                        <li>- Guía profesional de habla hispana</li>
                        <li>- Traslados los indicados.</li>
                        <li>- Transporte en autocar turístico.</li>
                        <li>- Tarjeta de Asistencia MedicaTarjeta de Asistencia Medica</li>
                    </ul>

                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">LOS PRECIOS NO INCLUYEN </h3>
                    <ul class="incluyen">
                        <li>- Gastos personales</li>
                        <li>- Propinas</li>
                        <li>- Ningún servicio no especificado</li>
                        <li>- Propinas.</li>
                        <li>- Excursiones opcionales.</li>
                        <li>- Pueden aplicar IMPUESTOS locales hoteleros a pagar directo en destino.</li>
                        <li>- Seguro de cancelación, se adquiere con pasaporte y con el primer depósito, consulte con su agencia de viajes condiciones y restricciones.</li>
                    </ul>
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://famvin.org/es/files/2016/03/hungria-fb.jpg">
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
                                          <td>Turista</td>
                                          <td>$ 10.700.000</td>
                                          <td>$ 10.669.000</td>
                                          <td>$ 13.159.000</td>

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

                                      </tr>
                                      <tr>
                                          <td>MOSCÚ</td>
                                          <td>AZIMUT MOSCOW OLYMPIC</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>SAN PETERSBURGO</td>
                                          <td>VEDENSKY HOTEL</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>RIGA</td>
                                          <td>DAYS INN</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>BERLÍN</td>
                                          <td>IBIS BERLIN CITY WEST</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>PRAGA</td>
                                          <td>INTERNATIONAL PRAHA</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>BUDAPEST</td>
                                          <td>HUNGARIA CITY CENTER</td>
                                          <td>T</td>

                                      </tr>
                                      <tr>
                                          <td>VIENA</td>
                                          <td>ENZIANA VIENNA</td>
                                          <td>T</td>

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
                  <p class="hotel" style="font-size:21px;">DIA 1. COLOMBIA – ESTAMBUL<br>Presentarse en el aeropuerto internacional de la ciudad de Bogotá 3hrs. antes de la salida del vuelo trasatlántico TK 800 con salida A LAS 09:50 HRS, con destino a Estambul. Noche a bordo. </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 2. ESTAMBUL (tiempo de conexión) – MOSCÚ<br>
                  Llegada al aeropuerto de Estambul a las 09:50 HRS. Tendremos una espera de 50 min aprox para tomar vuelo de TK 417 con salida a las 11:05 HRS. con destino la ciudad de Moscú. Llegada al aeropuerto de Domodedovo a las 13:50 HRS. Recepción y traslado al hotel. Alojamiento. </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 3. MOSCÚ<br>
                    Desayuno. A la hora indicada se realizará la visita panorámica de la capital rusa: la Plaza Roja una de las plazas más grandes del mundo situada al pie de las murallas del antiguo Kremlin, famosa también por el Mausoleo de Lenin y la Catedral de San Basilio. Ud. gozará la vista conocida en todo el mundo: la del Kremlin desde el paseo fluvial de Santa Sofía. 7 edificios – las torres, construidas después de La Segunda Guerra Mundial son símbolos de Moscú soviética. Un excelente panorama con la famosa Catedral de Cristo Salvador, se puede disfrutar desde el mirador de la Universidad de Moscú. También se vista el famoso metro de Moscú, considerado el más bello del mundo.
                    Por primera vez en la historia mundial todas las construcciones de un ferrocarril subterráneo fueron diseñadas como un conjunto arquitectónico único. Las estaciones del metro están adornadas con estatuas y relieves, pinturas, mosaicos, vidrieras de colores. Alojamiento. </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 4. MOSCÚ<br>
                    Desayuno. Día libre para actividades personales. Opcionalmente les recomendamos visita de Serguiev Posad que representa una colección de excelentes monumentos de la cultura rusa creados en el período del siglo XV al XVII; visita el monasterio de la Santísima Trinidad y San Sergio, conocido entre los extranjeros como el «Vaticano Ruso». Es el lugar de peregrinaciones de los creyentes ortodoxos que vienen aquí para ver las reliquias de San Sergio de Radonezh, el fundador del monasterio. Regreso a Moscú. Tarde libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 5. MOSCÚ – SAN PETERSBURGO <br>
                    Desayuno. A la hora indicado traslado a la estación de ferrocarril para tomar el tren diurno con destino a San Petersburgo. Llegada yVisita panorámica de la ciudad fundada por el Zar Pedro el Grande a las orillas del río Neva. Durante la visita recorreremos la avenida Nevsky, la calle principal de la ciudad; admiraremos las catedrales de San Isaac y de la Virgen de Kazán, la Plaza del Palacio de Invierno, el Almirantazgo, Jardín de Verano, Crucero Aurora, etc. Visitaremos la Fortaleza de San Pedro y San Pablo, la primera edificación de San Petersburgo, famosa por su impresionante Catedral, panteón de los zares rusos. Por la tarde opcionalmente tendremos posibilidad de realizar de manera opcional un paseo por los ríos y canales de San Petersburgo. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 6. SAN PETERSBURGO<br>
                    Desayuno. Día libre a su disposición para poder realizar actividades personales. Le recomendamos visitar el Ermitage uno de los más grandes museos del mundo que cuenta con más de 4 millones de obras. Entre las colecciones del museo se destacan las obras maestras de Leonardo da Vincci, Rafael, Tiziano, Rubens, Rembrandt, El Greco, N. Poussin, Gauguin, Picasso, A. Matisse, etc. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 7. SAN PETERSBURGO – RIGA (vuelo incluido)<br>
                    Desayuno. Día libre, le recomendamos realizar visita opcional a Pushkin. Le esperan un palacio precioso de estilo barroco y un parque espacioso y elegante, perfecto ejemplo de la jardinería rusa. La joya del palacio, la Sala de Ámbar, se considera la octava maravilla del mundo. Almuerzo en un restaurante local. También ofrecemos visita opcional Peterhof. Sus maravillosos parques, 176 fuentes de diferentes formas y estilos, 4 cascadas, numerosas esculturas y estatuas doradas de dioses y héroes mitológicos hacen de Peterhof una verdadera joya llamada "La Capital de las Fuentes", única en el mundo. A la hora indicada traslado al aeropuerto para tomar el vuelo de AIR BALTIC con destino la ciudad de Riga. Llegada, recepción y traslado al hotel previsto y alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 8. RIGA – BERLÍN (vuelo incluido) <br>
                    Desayuno. Visita panorámica de capital de Letonia. Antigua ciudad hanseática, situada entre el río Daugava y el canal de la ciudad. En Riga están presentes todos los estilos arquitectónicos, desde el gótico hasta el neoclásico, destacando sus edificios Art Nouveau. Visitaremos construcciones de gran belleza como el antiguo Polvorín, los edificios de los antiguos gremios, el Castillo de Riga o la “Casa de los Tres Hermanos”, la iglesia de San Jacobo, etc. Traslado al hotel. Posibilidad de realizar excursión opcional al Parque Nacional de Gauja. El parque es conocido como la Suiza letona. En las colinas circundantes se edificaron lo que en su tiempo fueron tres importantes castillos. En el museo y centro turístico de Turaida se podrá visitar el Castillo medieval, el mejor conservado de toda Letonia, el Museo de historia local de Sigulda, la tumba de Turaida, la cueva de Gutmann y el Parque Daina, parque escultórico dedicado al folklore letón. Regreso a Riga. A la hora indicada traslado al aeropuerto para tomar el vuelo de AIR BALTIC con destino la ciudad de Berlín. Llegada, recepción y traslado al hotel. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 9. BERLÍN<br>
                    Desayuno. Se realizará la visita panorámica de la ciudad para conocer los principales monumentos, calles y avenidas de esta importante ciudad hasta hace poco dividida, y símbolo de la reunificación: Puerta de Brandenburgo, Postdamplatz, Alexanderplatz, Kurfustendamm… y los restos del muro que dividía la ciudad hasta 1989. Recomendamos realizar excursión opcional a Potsdam, la ciudad se encuentra muy cerca de Berlín, rodeada de lagos, campos y bosques. Ya a fines del siglo XVII comenzaron los Hohenzollern a transformar este lugar en una representación de la ciudad ideal, como contraposición a las incomodidades de la vida en la gran ciudad. Gracias a los ímprobos trabajos de restauración de los últimos diez años, ha podido la ciudad de Potsdam recuperar su antiguo esplendor y belleza. Regreso a Berlín. Por la noche puede asistir a la visita de iluminaciones de la capital Alemana. Alojamiento.                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 10. BERLÍN – DRESDEN – PRAGA<br>
                    Desayuno. Salida hacia Dresden, la antigua capital de Sajonia, a orillas del Rio Elba que fue prácticamente destruida durante los bombardeos en la II Guerra Mundial. Tiempo libre y continuación hacia la República Checa para llegar a Praga. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 11. PRAGA<br>
                    Desayuno. Por la mañana visita panorámica de esta impresionante joya monumental, una de las ciudades más bellas de Europa. Recorreremos sus calles y monumentos más interesantes, como el Barrio del Castillo de Praga, el Teatro Nacional, la Plaza Wenceslao, la famosa Plaza de la Ciudad Vieja con su reloj astronómico, la Iglesia de Nuestra Señora de Thyn y el puente de Carlos IV, el más famoso de la ciudad. Tarde libre para seguir conociendo a fondo sus pintorescas calles, realizar compras, incluso asistir al auténtico y original Teatro Negro. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 12. PRAGA <br>
                    Desayuno. Día libre para continuar visitando la ciudad. Recomendamos asistir a excursión opcional a Karlovy Vary, la ciudad balneario más famosa de la antigua monarquía Austro-Húngara, un auténtico museo al aire libre con innumerables palacios del siglo XIX, balnearios y fuentes termales curativas. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 13. PRAGA – BRATISLAVA – BUDAPEST<br>
                    Desayuno. Salida por la autopista vía Brno hacia la frontera de la republica Checa con Slovakia, continuación hacia su Capital Bratislava. Tiempo libre para conocer la ciudad posibilidad de asistir excursiones opcionales para conocer la ciudad más afondo. A la hora indicada continuación del viaje hacia viaje hasta Budapest. En la noche tendrá la posibilidad de efectuar opcionalmente un agradable paseo fluvial por el río Danubio. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 14. BUDAPEST<br>
                    Desayuno. Visita panorámica de la ciudad que se divide en dos zonas, “Buda” donde se encuentra la ciudad vieja, y “Pest” zona moderna comercial. Comenzaremos por la colina del castillo en Buda para contemplar el Danubio y toda la extensión del Pest. Recorreremos el barrio antiguo para conocer los orígenes de la ciudad, pasando por la catedral de Matías, símbolo de la época más gloriosa de Hungría, El Bastión de los pescadores, etc. Por la noche pueden degustar la gastronomía Húngara mientras contempla los bailes folclóricos del país en un ambiente más que divertido. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 15. BUDAPEST – VIENA<br>
                    Desayuno. Salida hacia la frontera austriaca para llegar a Viena a media tarde. Visita panorámica de esta histórica ciudad que fuera capital del Imperio Austro-Húngaro, inmortalizada en bellos valses de Strauss. Recorreremos su avenida más espectacular en forma de anillo, en la que bellos palacios se suceden uno detrás del otro, destacando la Opera, el Ayuntamiento, el Palacio Real de Invierno llamado Hofburg, Iglesia Votiva. Cruzando el Danubio, llegaremos hasta la Sede de las Naciones Unidas, pasaremos por el Prater con la famosa noria, la espectacular Karls Platz con la Iglesia de San Carlos Borromeo, Musikverein sede de la Filarmónica de Viena en cuya sala de oro (Goldener Saal) se celebra cada año nuevo el famoso concierto. Sin olvidar el enorme y florido parque que contiene los Palacios del Belvedere. A continuación, posibilidad de visitar opcionalmente el interior y los jardines del impresionante Palacio de Verano Schönbrunn y la Opera de Viena. Por la noche tendrán posibilidad de contemplar los Valses de Viena. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 16. VIENA<br>
                    Desayuno. Día libre para seguir explorando la ciudad. Tendrán posibilidad de conocer interesantes lugares en la región sur de los Bosques de Viena. Pasando cerca del pueblo balneario romano de Baden, se llega al fabuloso valle de Santa Helena. De ahí se va al antiguo Pabellón de Caza de Mayerling (visita de la capilla conmemorativa), donde el Príncipe Rodolfo murió trágicamente en 1889 en compañía de la Baronesa Vetsera. En el Monasterio Cisterciense Heiligenkreuz (Santa Cruz, 1133), visitará el claustro medieval con los sepulcros de los últimos miembros de la Dinastía Babenberg. A continuación, pasando por Höldrichsmühle, se llega a la Seegrotte. Se regresa a Viena, después de realizar un paseo en barco por el lago subterráneo más grande de Europa. Regreso a Viena. Por la noche recomendamos asistir excursión a Grinzing, población famosa por sus tabernas y su vino verde. Alojamiento.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 17. VIENA – COLOMBIA<br>
                    Desayuno. Día libre para disfrutar de la ciudad y a la hora indicada traslado al aeropuerto para tomar el vuelo de TK1888 con salida a las 20:15 hrs. con destino a Estambul, llegada a las 23:35 hrs., conexión con el vuelo de TK800 con salida a las 02:00 hrs. con destino la ciudad de Bogotá, llegada a las 07:45 hrs. del día 30 de Mayo de 2018.
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
