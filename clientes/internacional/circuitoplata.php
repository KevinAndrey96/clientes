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
    <title>Circuito Plata</title>
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
        <div class="col-md-12 fondo" style="background-image:url(images/circuitoplata.jpg);/*padding-top:300px;*/">
            <div class="division" style="margin:auto;">
                <h2 class="text-center ciudad">CIRCUITO DE PLATA CON NEW YORK</h2></div>
            <div style="margin-top:50px;"><a class="btn btn-link btn-block btn-sm" role="button" href="https://protointernational.typeform.com/to/kvZwwD" style="border-color:#ffffff;color:#ffffff;width:200px;margin:auto;font-family:open sans condensed;font-size:20px;">Reservar </a></div>
        </div>
    </div>
    <!-- ciudades -->
    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="titulos2 text-center" style="font-weight:600;">CIUDADES</h2>
                  <p class="hotel text-center" style="font-size:21px;">NEW YORK - WASHINGTON - NIAGARA FALL - BOSTON
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
                        <li>- Alojamiento segun programa en hoteles entre Turista a Primera en habitacion estandar</li>
                        <li>- Desayuno americano diario en los hoteles, excepto en New York</li>
                        <li>- Propinas a maleteros en los hoteles a razón de una maleta por persona, las demás tendrán un cargo extra por cuenta de los pasajeros.</li>
                        <li>- Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús con todas las comodidades.</li>
                        <li>- Guías profesionales de habla hispana</li>
                        <li>- Visitas mencionadas en las diferentes ciudades.</li>
                        <li>- Crucero en Las Cataratas del Niágara, de acuerdo a la temporada.</li>
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
                  <div class="col-md-6 hotel"><img class="img-responsive container" src="https://www.manhattanhoteltimessquare.com/images/aboutus-img.jpg">
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
                                          <td>Promo</td>
                                          <td> U$ 1.338</td>
                                          <td> U$ 1.478</td>
                                          <td> U$ 1.738</td>
                                          <td> U$ 2.818</td>
                                          <td> U$ 768</td>

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
                                          <td>NEW YORK</td>
                                          <td>THE MANHATTAN AT TIMES SQUARE o similar</td>


                                      </tr>
                                      <tr>
                                          <td>WASHINGTON</td>
                                          <td>COURTYARD MARRIOT EMBASY / THE LIASON CAPITOL HILL</td>


                                      </tr>
                                      <tr>
                                          <td>NIAGARA FALL</td>
                                          <td>SHERATON AT THE FALL / BUFFALO NIAGARA MARRIOT</td>


                                      </tr>
                                      <tr>
                                          <td>BOSTON </td>
                                          <td>MARRIOT QUINCY</td>


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
                  <p class="hotel" style="font-size:21px;">Día 1: (JUEVES) - NEW YORK <br>
                    raslado del aeropuerto  (JFK / LGA) en horarios diurnos al hotel. Resto de la dia libre. Alojamiento hotel The Manhattan at Time Square ò similar
                    Las habitaciones dobles en New York son con una cama matrimonial
                    consultar suplemento para habitacion twin (dos camas)</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 2: (VIERNES) - NEW YORK - PHILADELPHIA - WASHINGTON D.C<br>
                  Salida rumbo a Washington D.C, pasando por los estados de New Jersey, Pennsylvania, Delaware y Maryland. Visita a Philadelphia, Cuna de la Independencia Americana. Tour panorámico de la Campana de la Libertad, el Salón de la Independencia (No hay ingreso), lugar donde se redactaron los más importantes documentos de la historia Norteamericana. También se visitará otros lugares de gran interés turístico. Tiempo para almorzar por cuenta de los pasajeros. Posteriormente salida hacia Washington DC. Alojamiento en el hotel COURTYARD MARRIOTT EMBASSY ROW / THE LIASON CAPITOL HILL ó similar.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 3: (SABADO) - WASHINGTON D.C <br>
                    DESAYUNO. Tour panorámico de medio dia con algunas paradas para fotografías, pasando por la Casa Blanca, El Capitolio, los Monumentos de Washington, Lincoln y Jefferson, Corea y Vietnam Memorial, La Corte Suprema y el complejo de Museos del Instituto Smithsonian. Visita al Cementerio de Arlington, la tumba de los Hermanos Kennedy y del Soldado desconocido. Tarde libre. Alojamiento.</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 4: (DOMINGO) - WASHINGTON D.C. - NIAGARA FALLS <br>
                    DESAYUNO. Salida rumbo a las Cataratas del Niágara, atravesando la pintoresca región de Penssylvania Dutch. Breves paradas para descanso. Una vez llegamos resto de la tarde libre. Los pasajeros con documentos necesarios para ingresar al Canadá, pasaran por su cuenta a las Cataratas de lado Canadiense recibiendo previa información del guía de lo que pueden hacer allí. Alojamiento en el hotel SHERATON AT THE FALLS / BUFFALO NIAGARA MARRIOTT o similar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 5: (LUNES) - NIAGARA FALLS - BOSTON <br>
                    DESAYUNO. Todos los pasajeros estarán en el lado Americano para visitar: los rápidos del Niágara, el carro Aéreo-Español que se aprecia desde el Whirlpool State Park,pasaremos por la Hidroeléctrica Robert Moses, continuando hacia el lago Ontario, desde donde se puede observar la silueta de la ciudad de Toronto. Luego regresamos de nuevo hacia las cataratas para verlas más cerca, tanto la Americana como la Canadiense (La Herradura), abordando el famoso barco Maid of the Mist (Sujeto a operación entre Mayo y Octubre, el resto del año se reemplazara por la Cueva de los Vientos en la Isla de la Cabra). A las 12 del medio día aproximadamente, se continúa rumbo a Boston atravesando la bella región de los Finger Lakes, en el Estado de New York y Massachusetts. Breves paradas para descanso. Llegada a la ciudad de Boston. Alojamiento en el hotel MARRIOTT QUINCY o similar</p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 6: (MARTES) - BOSTON <br>
                    DESAYUNO. Tour de medio día a la bella ciudad de Boston, visitando en un recorrido panorámico la Universidad de Harvard, la Iglesia Trinity Church, Beacon Hill, el Instituto Tecnológico de Massachusetts (M.I.T.), Quincy Market y El Parque Common. Alojamiento
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 7: (MIERCOLES) - BOSTON - NEW PORT - NEW YORK<br>
                    DESAYUNO. Salida hacia el bello Puerto de Newport, donde se pasará por las hermosas mansiones de los Millonarios del siglo 1.800 y 1.900 como Los Vanderbilt Berwind, Fair Oelrichs, etc. Posteriormente salida hacia New York. Llegada, alojamiento hotel The Manhattan at Time Square ó similar
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 8: (JUEVES) - NEW YORK <br>
                    En la mañana se presta el tour de Alto y Bajo Manhattan, Recorrido por la avenida de las Americas, el Parque Central, Monumento de Cristóbal Colon, Lincoln Center el edificio Dakota, la Catedral San Juan el Divino, el Barrio Harlem, la 5ta Avenida con sus famosos museos (el Metropolitan y el Guggenheim), la casa donde vivió Jacqueline Kennedy, igual que renombradas casas comerciales como Bergdorf Goodman, Tiffany, Gucci, Trump Tower, Saks 5th Ave., y además la catedral San Patricio y Rockefeller Center. A continuación, la Biblioteca de Nueva York, el Empire State Building, el Flatiron Building (la plancha), el barrio Chelsea y el Barrio de los existencialistas Greenwich Village, Soho, La Pequena Italia, el Barrio Chino, Centre Cívico, la Zona Cero (donde se encontraban las Torres Gemelas), Wall Street, y donde finalizaremos el tour en el Battery Park; donde ustedes podrán disfrutar de la vista a la Estatua de la Libertad. Resto del día libre. Alojamiento
                  </p>
              </div>
              <div class="col-md-12">
                  <p class="hotel" style="font-size:21px;">Día 9: (VIERNES) - NEW YORK <br>
                    A la hora indicada traslado al aeropuerto JFK o LGA. El check out del hotel deberá ser antes de las 12:00PM.
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