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
    <title>Paris y Paises Bajos</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/paris.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">PARIS Y PAISES BAJOS</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">París – Brujas – Bruselas – Róterdam – La Haya – Ámsterdam</p>
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
                        <li>- 08 noches de alojamiento en categoría indicada.</li>
                        <li>- Régimen alimenticio según itinerario.</li>
                        <li>- Visitas según itinerario.</li>
                        <li>- Seguro turístico (servicio terrestre).</li>
                        <li>- Guía profesional de habla hispana.</li>
                        <li>- Traslados los indicados.</li>
                        <li>- Transporte en autocar turístico.</li>
                    </ul>

                    <h3 class="hotel titulos2" style="font-size:21px;font-weight:600;">El viaje NO INCLUYE</h3>
                    <ul class="incluyen">
                        <li>- Boleto de avión Colombia – Paris – Ámsterdam – Colombia volando en clase turista.</li>
                        <li>- Fee bancario 2%</li>
                        <li>- Ningún servicio no especificado</li>
                        <li>- Alimentos no especificados en el itinerario.</li>
                        <li>- Ningún servicio no especificado</li>
                        <li>- Gastos personales y propinas</li>
                        <li>- Tarjeta de asistencia medica</li>
                        <li>- Excursiones opcionales</li>
                        <li>- Pueden aplicar IMPUESTOS locales hoteleros a pagar directo en destino</li>
                    </ul>
                </div>
                <!-- INCIO INCLUYE Y NO INCLUYE -->

                <!-- INICIO TARIFAS -->
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://media-cdn.tripadvisor.com/media/photo-s/01/c3/bb/49/l-hotel-vue-de-l-exterieur.jpg">
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
                                          <td>SUPL. SENCILLO</td>
                                          <td>Menor( 4 a 7 años)</td>
                                      </tr>
                                      <tr>
                                          <td>PRIMERA</td>
                                          <td>$1.100 USD</td>
                                          <td>$1.100 USD</td>
                                          <td>$510 USD</td>
                                          <td>$825 USD</td>

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
                                          <td>PARÍS</td>
                                          <td>NOVOTEL SUITE PARIS NORD 18EME</td>
                                          <td>P</td>

                                      </tr>
                                      <tr>
                                          <td>BRUSELAS</td>
                                          <td>SILKEN BERLAYMONT</td>
                                          <td>P</td>

                                      </tr>
                                      <tr>
                                          <td>ÁMSTERDAM</td>
                                          <td>PARK PLAZA AMSTERDAM AIRPORT</td>
                                          <td>P</td>

                                      </tr>

                                  </tbody>
                              </table>
                              <p class="hotel" style="font-size:12px;">Ésta es la relación de los hoteles utilizados más frecuentemente en este circuito. Reflejada tan sólo a efectos indicativos, pudiendo ser el pasajero alojado en establecimientos similares o alternativos</p>
                              <p class="hotel" style="font-size:12px;">EN CASO DE QUE LA SALIDA NO CUBRA UN MÍNIMO DE 20 PLAZAS, EL CIRCUITO PODRÁ CANCELARSE POR LO QUE SE OFRECERÁ OTRO CIRCUITO SIMILAR PRÓXIMO A LA FECHA DE SALIDA</p>
                              <p class="hotel" style="font-size:12px;">LA TARIFA DEL MENOR ES APLICABLE ENTRE LOS 04 Y HASTA 06 AÑOS 11 MESES, COMPARTIENDO HABITACION CON 02 ADULTOS. (SOLICITAMOS COPIA DEL PASAPORTE DEL MENOR).</p>


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
                  <p class="hotel" style="font-size:21px;">DÍA 01 COLOMBIA – PARIS <br>
                    Cita en el aeropuerto de la Ciudad de Bogotá para tomar el vuelo trasatlántico con destino a París. Noche a bordo.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DÍA 02 PARIS<br>
                  Llegada al aeropuerto internacional de París. Asistencia y traslado al hotel. Posibilidad de realizar opcionalmente una visita de París iluminado y un romántico paseo en Bateau Mouche por el rio Sena. Alojamiento </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">DIA 03 PARIS <br>
                    Desayuno. Por la mañana visita panorámica de la Ciudad Luz para conocer recorriendo sus lugares más emblemáticos como la Place de la Concorde y Arco del Triunfo, los Campos Elíseos, La Bastilla, la Isla de la Ciudad con la imponente Iglesia de Notre Dame, los Inválidos donde se encuentra la tumba de Napoleón, con breve parada fotográfica para captar la Torre Eiffel. Por la tarde recomendamos realizar una excursión opcional al magnífico Palacio de Versalles, declarado Patrimonio de la Humanidad, para conocer su imponente arquitectura y sus bellos jardines. Por la noche, opcionalmente podrá asistir a un afamado espectáculo. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 04 PARIS  <br>
                    Desayuno. Día libre para visitar opcionalmente los interiores del importante Museo del Louvre y la Catedral de Notre Dame, o para realizar actividades personales y continuar descubriendo los importantes monumentos de esta ciudad cosmopolita. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 05 PARIS – BRUJAS – BRUSELAS <br>
                    Desayuno. Salida hacia Bélgica para llegar a la bella y romántica ciudad de Brujas. Breve parada para pasear por el casco antiguo y conocer sus bellos canales. Continuación hacia la capital Bruselas, y tiempo libre para conocer la emblemática Grand Place, considerada como una de las más bellas del mundo. Alojamiento</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 06 BRUSELAS – RÓTERDAM – LA HAYA – ÁMSTERDAM<br>
                    Desayuno. Salida hacia Róterdam, segunda ciudad en importancia de Holanda. Breve visita panorámica y continuación hacia La Haya, capital administrativa, con breve visita y continuación hasta Ámsterdam. Alojamiento
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 07 ÁMSTERDAM<br>
                    Desayuno. Por la mañana visita panorámica de Ámsterdam también llamada la Venecia del Norte por sus canales, recorriendo la Plaza del Dam, Barrio Judio, Torre de las lágrimas y visita a un taller de tallado y pulido de diamantes. Tarde libre. Excursión opcional a los típicos pueblos pesqueros de Marken y Volendam, o un paseo en barco por sus canales contemplando la bella arquitectura de los edificios ribereños.
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 08 ÁMSTERDAM– COLOMBIA <br>
                    Desayuno. A la hora oportuna traslado al aeropuerto (POR CUENTA DE LOS PASAJEROS) para tomar el vuelo de regreso con destino a la Ciudad de Bogotá.
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