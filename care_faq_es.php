<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Luna Beauty studio, Always look beautiful.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">


    <script src="https://kit.fontawesome.com/5e2c3bbd6a.js" crossorigin="anonymous"></script>
    <title>Luna Beauty Studio - Cuidados y Preguntas Frecuentes</title>
</head>
<body class="light care-body">

<style>
  .care-body .nav-link p{
    color: white;
  }

  .care-body .cus-nav .nav-link p{
    color: #6d6e70;
  }
</style>

<?php
	require_once("layouts/header.inc.php");
?>

	<main class="site-main">
    	<section id="presentation-page" class="p-5">
    	  <style>
    	    #presentation-page{
    	      height: 400px;
    	      position: relative;
    	      background: url(library/img/lashes-our.jpg);
    	      background-position: center;
    	      background-repeat: no-repeat;
    	      background-size: cover;
    	    }

    	    #presentation-page::before{
    	      position: absolute;
    	      content: "";
    	      width: 100%;
    	      height: 100%;
    	      bottom:0;
    	      right:0;
    	      background: rgba(0,0,0,0.5);
    	      z-index: 1;
    	    }

    	    #presentation-page .row{
    	      position: relative;
    	      height: 100%;
    	      z-index: 100;
    	    }
    	  </style>
    	  <div class="row align-items-center justify-content-center">
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Cuidados y Preguntas Frecuentes</h1>
    	  </div>
    	</section>

        <section id="care-section" class="px-4 py-5">
            <style>
                #care-section .modal p{
                    color:black!important;
                }

                #care-section .btn-ste{
                    border:0!important;
                }

                #care-section .cbtn .btnhero {
                  border-radius: 15px;
                  display: inline-block;
                  text-align: center;
                  cursor: pointer;
                  font-size: 1.1rem;
                  line-height: 45px;
                  max-width: 230px;
                  position: relative;
                  text-decoration: none;
                  padding: 5px 15px;
                  text-transform: uppercase;
                  width: 230px;
                }
                @media (max-width: 991.98px) {
                  #care-section .cbtn .btnhero {
                    text-align: center;
                    max-width: initial;
                    width: 100%;
                  }
                }
                @media (max-width: 575.98px) {
                  #care-section .cbtn .btnhero {
                    width: 100%;
                    max-width: initial;
                  }
                }
                #care-section .cbtn .btnhero:hover {
                  text-decoration: none;
                }
                #care-section .cbtn .effect01 {
                  font-family: "Playfair Display", serif;
                  color: #6d6e70;
                  border: 4px solid #f5d1d0;
                  box-shadow: 0px 0px 0px 1px #cd7c78 inset;
                  background-color: #f7aba5;
                  overflow: hidden;
                  position: relative;
                  transition: all 0.3s ease-in-out;
                }
                #care-section .cbtn .effect01:hover {
                  border: 4px solid #cd7c78;
                  background-color: #F3DFDE;
                  box-shadow: 0px 0px 0px 4px #f5d1d0 inset;
                }
                #care-section .cbtn .effect01 span {
                  color:white;
                  transition: all 0.2s ease-out;
                  z-index: 2;
                }
                #care-section .cbtn .effect01:hover span {
                  color: #6d6e70;
                }
                #care-section .cbtn .effect01:after {
                  background: #FFF;
                  border: 0px solid #cd7c78;
                  content: "";
                  height: 155px;
                  left: -75px;
                  opacity: 0.8;
                  position: absolute;
                  top: -50px;
                  -webkit-transform: rotate(35deg);
                  transform: rotate(35deg);
                  width: 50px;
                  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
                  z-index: 1;
                }
                #care-section .cbtn .effect01:hover:after {
                  background: #FFF;
                  border: 20px solid #cd7c78;
                  opacity: 0;
                  left: 120%;
                  -webkit-transform: rotate(40deg);
                  transform: rotate(40deg);

            </style>
            <div class="container py-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-3" style="color:#cd7c78!important; font-size: 30px;">Cuidados</h2>
                        <p>Para que su nueva permanente se cure correctamente, estas instrucciones de cuidados previos que se encuentran a continuaci??n son de suma importancia. Las instrucciones de cuidado previo est??n destinadas a limitar el sangrado y la sensibilidad de la piel durante el servicio. ??El sangrado excesivo durante el procedimiento diluir?? el color del pigmento y producir?? malos resultados!</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".pre-m"><span style="margin: 0;">PMU Pre-Cuidados</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".post-m"><span style="margin: 0;">PMU Post-Cuidados</span></button></div>
                    </div>
                    <div class="col-md-4 text-center my-3">
                        <div class="modals-zone cbtn"><button type="button" class="btnhero effect01" data-toggle="modal" data-target=".after-m"><span style="margin: 0;">PMU Post-Sanaci??n</span></button></div>
                    </div>
                </div>
            </div>

            <div class="modal fade pre-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>??? NO consumir alcohol ni cafe??na 48 horas antes del procedimiento (??S??, hay cafe??na en el caf?? y t?? descafeinado!).</p>

                                <p>??? Evite el sol y el bronceado en su cara dos semanas antes del procedimiento.</p>

                                <p>??? No tome aspirina, niacina, vitamina E o Advil / ibuprofeno 48 horas antes del procedimiento.</p>

                                <p>??? Evite el aceite de pescado, las vitaminas prenatales, los batidos nutricionales (Shakeology, etc.), los suplementos de ???Cabello, piel, u??as??? dos semanas antes del procedimiento.</p>

                                <p>??? Suspenda el Retin-A, las exfoliaciones qu??micas y l??ser, las microdermoabrasiones, el alfahidroxi??cido (AHA) y cualquier exfoliante qu??mico o cuidado de la piel "iluminante" al menos 6 semanas antes (una vez que sus cejas se hayan curado, debe evitar el uso de estos productos en la frente). procedimiento de ??rea para evitar la decoloraci??n prematura).</p>

                                <p>??? El Botox y el relleno en la frente, la sien y el ??rea de los ojos deben evitarse 4 SEMANAS antes del procedimiento para aquellos que no reciben inyectables con regularidad.</p>

                                <p>??? Evite las siguientes hierbas y especias 48 horas antes del procedimiento: jengibre, canela, ajo, pimienta negra y cayena.</p>

                                <p>??? No se debe depilar, te??ir ni enhebrar las cejas una semana antes (??cuanto m??s crecimiento natural del cabello tenga, mejor!</p>

                                <p>??? Tenga en cuenta: ser?? m??s sensible durante su ciclo menstrual.</p>

                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
                  </div>
                  </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="modal fade post-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>??? Mantenga limpia el ??rea de las cejas con agua y un gel limpiador sin perfume. Las manos deben estar reci??n limpias. Evite el uso de pa??os o esponjas abrasivas.</p>

                                <p>??? Deje que el ??rea se seque completamente antes de aplicar el ung??ento (seque con una toalla de papel o al aire).</p>

                                <p>??? Una vez que est?? completamente seco, aplique una fina capa de ung??ento (cantidad del tama??o de arroz).</p>

                                <p>??? Repita los pasos anteriores dos veces al d??a durante 7 d??as despu??s del servicio.</p>

                                <p>??? NO frote, pellizque ni raye el ??rea tratada. Deje que cualquier piel seca o con costras se exfolie naturalmente. ??El pinchazo puede causar cicatrices y p??rdida de pigmento!</p>

                                <p>??? Evite la exposici??n directa al sol y las camas solares durante un m??nimo de 4 semanas despu??s de su procedimiento. La luz solar directa puede hacer que el pigmento cambie de color mientras se cura y tambi??n puede causar hiperpigmentaci??n y cicatrices.</p>

                                <p>??? Evite la piscina, sauna, ba??os de vapor, duchas calientes y / o ba??os calientes durante 10 d??as.</p>

                                <p>??? Evite sudar en la cara durante 10 d??as. El sudor a trav??s o en las cejas expulsar?? el pigmento de la dermis produciendo malos resultados.</p>

                                <p>??? Evite dormir sobre su cara / cejas durante los primeros 10 d??as.</p>

                                <p>??? Mantenga el flequillo y el cabello recogidos de la cara durante los primeros 10 d??as.</p>

                                <p>??? NO usar maquillaje o productos para el cuidado de la piel en el ??rea tratada durante 10 d??as.</p>

                                <p>??? Despu??s de 10 d??as, una vez que el ??rea haya sanado por completo, considere usar bloqueador solar cuando salga al sol para evitar que el color se desvanezca.</p>

                                <p>??? El tinte de cejas no debe realizarse durante 2 semanas despu??s de su procedimiento.</p>

                                <p>??? Evite el Retin-A, los peelings qu??micos, los tratamientos con l??ser, las microdermoabrasiones y / o cualquier cosa para tratar la hiperpigmentaci??n alrededor del ??rea de la ceja una vez curada para evitar la decoloraci??n del tatuaje de la frente.</p>

                                <p>??? Informe a su t??cnico de resonancia magn??tica que se ha hecho un tatuaje.</p>

                                <p class="mt-5">Tenga en cuenta: el ??rea aparecer?? m??s oscura, m??s audaz y m??s n??tida debido a la formaci??n de costras y la cicatrizaci??n natural durante la primera semana. Esto es muy com??n para todos los procedimientos cosm??ticos permanentes.</p>

                                <p>Descargo de Responsabilidad: Tenemos el derecho de negar el servicio a los clientes que tengan las siguientes condiciones.</p>

                                <p class="mb-5">Si tiene alguna de las siguientes condiciones, comun??quese con nosotros inmediatamente antes de programar para asegurarse de que es un candidato.</p>

                                <p>??? Embarazada o lactante</p>

                                <p>??? Diab??tico</p>

                                <p>??? Infecciones y / o enfermedades virales</p>

                                <p>??? Epilepsia</p>

                                <p>??? Un Marcapasos o problemas card??acos importantes</p>

                                <p>??? Tuvo un trasplante de ??rgano</p>

                                <p>??? Tendencia a queloides o cicatrices</p>

                                <p>??? Dermatitis seborreica</p>

                                <p>??? Irritaciones de la piel o psoriasis cerca del ??rea tratada (erupciones, quemaduras solares, acn??, etc.)</p>

                                <p>??? Enfermo (resfriado, gripe, etc.)</p>

                                <p>??? Recibi?? Botox en los ??ltimos 2 meses</p>

                                <p>??? Us?? Accutane el a??o pasado</p>

                                <p>??? Al??rgico a los anest??sicos (lidoca??na)</p>

                                <p>??? Piel extremadamente grasa o problem??tica</p>

                                <p class="mt-5">Las afecciones diagnosticadas que no se aplican deben traer una nota del m??dico que indique su aprobaci??n.</p>

                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
                  </div>
                  </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="modal fade after-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="row">
                  <div class="col-12 text-center">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <p>??? La exposici??n al sol y las camas de bronceado puede provocar la decoloraci??n y decoloraci??n del pigmento.</p>

                                <p>??? Aplique siempre protector solar (50 SPF o m??s) en el ??rea de las cejas una vez que est??n completamente curadas.</p>

                                <p>??? Mantenga la eliminaci??n del vello de la frente no deseado fuera del dise??o de su ceja tatuada mediante pinzas, enhebrado, depilaci??n o afeitado.</p>

                                <p>??? No aplique l??ser alrededor del ??rea de la frente (IPL). Algunos l??seres pueden cambiar el color del pigmento.</p>

                                <p>??? Es posible que a??n se requiera una aplicaci??n adicional de maquillaje de cejas despu??s del tatuaje para lograr el aspecto deseado.</p>

                                <p>??? Para mayor protecci??n solar, use sombreros y gafas de sol.</p>

                                <p>??? Se recomiendan retoques anuales para mantener sus resultados.</p>

                                <p>??? Evite el uso de exfoliantes qu??micos para la piel en las cejas y el ??rea de la frente. El uso de estos productos provocar?? una decoloraci??n prematura y la decoloraci??n del tatuaje. Los ejemplos pueden incluir, pero no se limitan a: ??cido glic??lico, hidroquinona, retinol, retin A, vitamina C, "peelings" o "abrillantadores".</p>

                                <p>??? Debe evitarse cualquier servicio o producto utilizado para tratar la hiperpigmentaci??n en la zona de la frente y los ojos.</p>

                                <p class="mt-5"><strong>No cuidar adecuadamente su tatuaje cosm??tico puede resultar en que su artista rechace futuros servicios / retoques</strong></p>

                                <p><strong>ATENCI??N POR FAVOR: RECOMENDAMOS ENCARECIDAMENTE A LOS POSIBLES NUEVOS CLIENTES QUE RESERVEN SU CITA DE MICROBLADING AL MENOS 3-4 MESES ANTES DE LAS VACACIONES, BODAS Y OCASIONES ESPECIALES. ESTO PERMITE UN TIEMPO ADECUADO PARA LA CURACI??N.</strong></p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-ste" data-dismiss="modal">Cerrar</button>
                  </div>
                  </div>
                  </div>

                </div>
              </div>
            </div>
        </section>

        <section id="faq-section" class="p-4">
            <style>
                #faq-section{
                    background: radial-gradient(219% 100%,white,#f7aba5);
                }

                #faq-section .card{
                    margin-bottom: 14px;
                }

                #faq-section .card h3{
                    font-family: 'Playfair Display';
                    font-weight: normal!important;
                    font-size: 17px!important;
                    text-align: left;
                }

                #faq-section .card h4{
                    font-family: 'Playfair Display';
                }

                #faq-section .card-header{
                    background: #f7aba5;
                }
            </style>

            <div class="container">
            <div class="row align-items-center">

                <div class="col-12 text-center my-3"><h2 style="color:#6d6e70!important; font-size: 30px;">PF</h2></div>

                <div class="col-12 px-4">
                    <div id="accordion">


                      <div class="card">
                        <div class="card-header btn" id="what-is" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <h3 class="my-3" style="color:white;">??Qu?? es Microblading?</h3>
                        </div>

                        <div id="collapse1" class="collapse" aria-labelledby="what-is" data-parent="#accordion">
                          <div class="card-body">
                            <p>El microblading es un procedimiento semipermanente, en el que dibujamos manualmente trazos finos como un cabello con una herramienta de mano. Mojamos la hoja en pigmento, que luego se deposita debajo de la capa superior de piel. ??El microblading le permite a alguien mejorar, corregir e incluso reconstruir sus cejas! ??El procedimiento deja tus cejas con un aspecto natural, con forma y hermoso!</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <h3 class="my-3" style="color:white;">??Parece cabello real?</h3>
                        </div>

                        <div id="collapse2" class="collapse" aria-labelledby="does" data-parent="#accordion">
                          <div class="card-body">
                            <p>??Absolutamente! La hoja peque??a utilizada deja l??neas finas y n??tidas que imitan la apariencia de los pelos de las cejas reales. La forma en que se dibujan les da una apariencia realista en 3D.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-price" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h3 class="my-3" style="color:white;">??Cu??l es el precio?</h3>
                        </div>

                        <div id="collapse3" class="collapse" aria-labelledby="what-price" data-parent="#accordion">
                          <div class="card-body">
                            <p>Puedes leer m??s informaci??n sobre el costo en la Secci??n de Servicios</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-long" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h3 class="my-3" style="color:white;">??Cu??nto dura la cita / sesi??n?</h3>
                        </div>

                        <div id="collapse4" class="collapse" aria-labelledby="how-long" data-parent="#accordion">
                          <div class="card-body">
                            <p>El horario de la cita puede variar, pero una cita t??pica durar?? entre 2 y 3 horas. Durante la cita inicial hay una consulta, tiempo para adormecer el ??rea y dibujar formas de cejas adem??s del procedimiento. La sesi??n de retoque complementaria no tomar?? tanto tiempo, ya que retocaremos el color, la forma y los trazos del cabello.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-should" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h3 class="my-3" style="color:white;">??C??mo debo prepararme para mi cita?</h3>
                        </div>

                        <div id="collapse5" class="collapse" aria-labelledby="how-should" data-parent="#accordion">
                          <div class="card-body">
                            <p>Primero, reserve su cita y pague el dep??sito para guardar la fecha y hora de su cita. Puede leer m??s sobre la preparaci??n aqu??. Traiga $ 5 en efectivo si desea comprar un kit de curaci??n.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-does" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <h3 class="my-3" style="color:white;">??Cu??nto tiempo se tarda en sanar?</h3>
                        </div>

                        <div id="collapse6" class="collapse" aria-labelledby="how-does" data-parent="#accordion">
                          <div class="card-body">
                            <p>Debido a que los cuerpos de todos funcionan y se curan de manera diferente, el per??odo de curaci??n variar??. La buena noticia es que no hay tiempo de inactividad. Deber?? evitar la luz solar directa, mojarlas, hacer ejercicio extenuante y maquillarse las cejas o alrededor de ellas durante al menos 7 a 10 d??as. Puede experimentar una fase de descamaci??n durante el proceso de curaci??n durante un breve per??odo de tiempo.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-aftercare" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <h3 class="my-3" style="color:white;">??Qu?? es el cuidado posterior?</h3>
                        </div>

                        <div id="collapse7" class="collapse" aria-labelledby="what-aftercare" data-parent="#accordion">
                          <div class="card-body">
                            <p>Saldr?? de su cita bien informado sobre los procedimientos de cuidados posteriores y tendr?? una p??gina de cuidados posteriores para llevar a casa. Algunas partes importantes del cuidado posterior son evitar la luz solar directa mientras sus cejas se curan, mojarlas, hacer ejercicio extenuante que provoque sudoraci??n y maquillarse cerca de las cejas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="can-get" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h3 class="my-3" style="color:white;">??Puedo obtener Microblading durante el embarazo?</h3>
                        </div>

                        <div id="collapse8" class="collapse" aria-labelledby="can-get" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lamentablemente no. Le recomiendo que espere al menos 2 meses despu??s de haber dado a luz.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="am-good" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <h3 class="my-3" style="color:white;">??Soy un buen candidato para Microblading?</h3>
                        </div>

                        <div id="collapse9" class="collapse" aria-labelledby="am-good" data-parent="#accordion">
                          <div class="card-body">
                            <p>Si est?? embarazada o amamantando, si tiene diabetes, glaucoma, enfermedades de la piel como herpes z??ster, psoriasis o eccema en el ??rea de tratamiento, alergias al maquillaje, trastorno queloide, VIH / hepatitis, c??ncer de piel, hemofilia o si est?? tomando medicamentos para la piel como ro-accuta??na y esteroides.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-microblading" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <h3 class="my-3" style="color:white;">??Microblading duele?</h3>
                        </div>

                        <div id="collapse10" class="collapse" aria-labelledby="does-microblading" data-parent="#accordion">
                          <div class="card-body">
                            <p>En el estudio se aplica un ung??ento anest??sico t??pico para ayudar a reducir el dolor potencial de Microblading.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-have" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            <h3 class="my-3" style="color:white;">??Tengo que afeitarme las cejas?</h3>
                        </div>

                        <div id="collapse11" class="collapse" aria-labelledby="do-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>De ning??n modo. Trazamos la forma en funci??n de la estructura facial, las cejas actuales y la simetr??a del rostro del cliente. Se eliminar?? cualquier vello no deseado que no se desee en la nueva apariencia de cejas. Por favor, no se afeite las cejas, eso nunca se recomienda.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-last" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <h3 class="my-3" style="color:white;">??Cu??nto dura el Microblading?</h3>
                        </div>

                        <div id="collapse12" class="collapse" aria-labelledby="how-last" data-parent="#accordion">
                          <div class="card-body">
                            <p>El microblading puede durar mientras el cliente lo mantenga. En promedio, puede durar de 1 a 3 a??os seg??n el cliente y la atenci??n.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="i-have" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <h3 class="my-3" style="color:white;">Otro artista me hizo Microblading. ??Cu??nto cuesta hacerme las cejas?</h3>
                        </div>

                        <div id="collapse13" class="collapse" aria-labelledby="i-have" data-parent="#accordion">
                          <div class="card-body">
                            <p>Todos los nuevos clientes de Luna Beauty Studio pagan el costo del nuevo cliente. Su tarifa incluye una sesi??n de retoque de 5-8 semanas. Una vez que un cliente ha pagado el costo inicial, recibe un descuento significativo para todos los retoques futuros siempre que se mantengan las cejas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-schedule" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <h3 class="my-3" style="color:white;">??C??mo programo una cita?</h3>
                        </div>

                        <div id="collapse14" class="collapse" aria-labelledby="how-schedule" data-parent="#accordion">
                          <div class="card-body">
                            <p>Puede programar una cita haciendo click en 'Haz una Cita' o enviar un mensaje de texto al 786-613-9798.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="does-work" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <h3 class="my-3" style="color:white;">??Funciona Microblading en todos los tonos y tipos de piel?</h3>
                        </div>

                        <div id="collapse15" class="collapse" aria-labelledby="does-work" data-parent="#accordion">
                          <div class="card-body">
                            <p>S??, podemos realizar microblading en todos los tonos de piel. Podemos hacerlo en la mayor??a de los tipos de piel, pero si tiene la piel muy grasa, es posible que desee considerar otra opci??n, ya que es una combinaci??n de cejas, relleno de polvo o sombreado. Podemos discutir opciones.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="clients-who" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            <h3 class="my-3" style="color:white;">Cliente que NO es candidato:</h3>
                        </div>

                        <div id="collapse16" class="collapse" aria-labelledby="clients-who" data-parent="#accordion">
                          <div class="card-body">
                            <p>??? Mujeres embarazadas o en per??odo de lactancia</p>

                            <p>??? Clientes propensos a los queloides</p>

                            <p>??? Clientes que actualmente usan Accutane o Retin A</p>

                            <p>??? Clientes que actualmente reciben quimioterapia</p>

                            <p>??? Clientes que toman anticoagulantes</p>

                            <p>??? Clientes que son diab??ticos</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-lip" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            <h3 class="my-3" style="color:white;">??Qu?? es el rubor de labios?</h3>
                        </div>

                        <div id="collapse17" class="collapse" aria-labelledby="what-lip" data-parent="#accordion">
                          <div class="card-body">
                            <p>El rubor de labios es una forma de tatuaje cosm??tico semipermanente que realza el tinte y la forma naturales de los labios, d??ndoles un impulso y un toque brillante. Est?? dise??ado para definir y delinear tus labios, no para hacerlos m??s llenos. Da la ilusi??n de que est??n m??s llenos, pero de una manera muy natural. ??Es m??s o menos como un microblading para tus labios!</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-cost" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            <h3 class="my-3" style="color:white;">??Cu??nto cuesta el tatuaje de Labios?</h3>
                        </div>

                        <div id="collapse18" class="collapse" aria-labelledby="how-cost" data-parent="#accordion">
                          <div class="card-body">
                            <p>El rubor de labios suele costar entre 350 y 500 d??lares, incluido el retoque.</p>

                            <p>Recuerde que el rubor de labios es un servicio cosm??tico que requiere habilidades t??cnicas y solo debe confiar en profesionales completamente capacitados para tales procedimientos. Esto tiene un costo, pero debes poner tu cuerpo en manos de alguien en quien conf??es.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-longdoes" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            <h3 class="my-3" style="color:white;">??Cu??nto dura el rubor de labios?</h3>
                        </div>

                        <div id="collapse19" class="collapse" aria-labelledby="how-longdoes" data-parent="#accordion">
                          <div class="card-body">
                            <p>Entre 2 y 5 a??os, dependiendo de qu?? tan cuidadosamente sigas las instrucciones de postratamiento y cu??ntas sesiones de retoques tengas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-blushing" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            <h3 class="my-3" style="color:white;">??Cu??nto tiempo dura el rubor de labios?</h3>
                        </div>

                        <div id="collapse20" class="collapse" aria-labelledby="how-blushing" data-parent="#accordion">
                          <div class="card-body">
                            <p>Una sesi??n de tatuaje de labios dura aproximadamente 2 horas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="how-tattooing" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            <h3 class="my-3" style="color:white;">??Cu??nto tiempo tardan en curarse los tatuajes con tinte de labios?</h3>
                        </div>

                        <div id="collapse21" class="collapse" aria-labelledby="how-tattooing" data-parent="#accordion">
                          <div class="card-body">
                            <p>Una sesi??n de tatuaje de labios dura aproximadamente 2 horas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="what-expect" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            <h3 class="my-3" style="color:white;">??Qu?? esperar en su cita?</h3>
                        </div>

                        <div id="collapse22" class="collapse" aria-labelledby="what-expect" data-parent="#accordion">
                          <div class="card-body">
                            <p>Dile adi??s al dibujo en tus labios cada ma??ana. Saluda al puchero sin esfuerzo.</p>

                            <h4>Paso 1: Adormecemos tus labios</h4>

                            <p>Muchos clientes nos preguntan: "??Duele?" La respuesta es: ??pago m??nimo a leve! Antes de Lip Blush, aplicamos un anest??sico t??pico y esperamos 30 minutos para asegurarnos de que sienta la menor molestia posible.</p>

                            <h4>Paso 2: ??Te entrevistamos!</h4>

                            <p>Durante la entrevista, trabajaremos contigo para personalizar tu mejor puchero, que cambiar?? tu rutina de maquillaje durante 3-5 a??os. Te preguntaremos sobre tu rutina y estilo de maquillaje. ??Usas l??piz labial en tus labios todos los d??as o solo en ocasiones especiales? ??Eras l??piz labial de cobertura completa o simplemente brillo labial?</p>

                            <p>??Solo queremos asegurarnos de lograr el aspecto que deseas!</p>

                            <h4>Paso 3: Dibujamos tu mejor forma de labios</h4>

                            <p>Nuestro objetivo es crear hermosos labios que combinen con la simetr??a de tu rostro. Te ayudaremos a encontrar el color y la forma perfectos para tu rostro. Una vez que determinemos su mejor forma, dibujaremos su nuevo labio directamente en su cara.</p>

                            <h4>Paso 4: comienza el tratamiento de labios</h4>

                            <p>Una vez que sus labios est??n adormecidos, comenzamos el proceso de creaci??n de sus nuevos labios. El arte del rubor de labios es superponer los p??xeles a la perfecci??n sin que parezcan densos u oscuros. Es por eso que crear rubor de labios es una forma de arte y requiere personas profesionales para realizar este servicio.</p>

                            <h4>Paso 5: Revelamos tus nuevos labios</h4>

                            <p>??Y finalmente, la gran revelaci??n! Despu??s de que tus labios est??n terminados. No m??s mantenimiento matutino estresante. No m??s l??piz labial manchado en tu taza de caf??. Labios perfectos todos los d??as, llueva o haga sol, solo agrega un poco de brillo labial y listo.</p>

                            <p>Se recomienda un retoque gratuito despu??s de 6 a 8 semanas.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            <h3 class="my-3" style="color:white;">??Qu?? hacer y qu?? no hacer antes de una cita de rubor de labios?</h3>
                        </div>

                        <div id="collapse23" class="collapse" aria-labelledby="do-dont" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>HACER</strong>: Lleva fotos / l??pices labiales para mostrarle a tu tatuador cosm??tico el color que deseas. Tome una tableta preventiva el d??a de la cita si es propenso al herpes labial.</p>

                            <p><strong>LO QUE NO DEBE HACER</strong>: Consumir alcohol, cafe??na, aceite de pescado, vitamina E, aspirina e ibuprofeno, ya que hacen que la sangre se adelgace y producir?? m??s sangrado durante el procedimiento.</p>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header btn" id="do-dont2" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            <h3 class="my-3" style="color:white;">??Qu?? hacer y qu?? no hacer despu??s de una sesi??n de tatuaje Lip Blush?</h3>
                        </div>

                        <div id="collapse24" class="collapse" aria-labelledby="do-dont2" data-parent="#accordion">
                          <div class="card-body">
                            <p><strong>HACER</strong>: Use mucho b??lsamo labial para mantener sus labios hidratados. Planifique una cita de seguimiento con su artista.</p>

                            <p><strong>LO QUE NO DEBE HACER</strong>: Recoger sus costras. ??Nunca! Adem??s, evite la exposici??n al sol y los entrenamientos durante aproximadamente 2 semanas. No ingiera comida picante en las 48 horas siguientes a la sesi??n.</p>

                            <p>??Cu??nto dura el l??piz labial cosm??tico permanente o el rubor de labios? ??La pigmentaci??n labial natural de una persona tiene alg??n efecto sobre esto?</p>

                            <p>Los resultados duran entre dos y cinco a??os (o m??s) antes de requerir una actualizaci??n de color. La elecci??n del color es tan importante, y si no m??s importante, para un tatuaje de labios que para un tatuaje de cejas. Los tonos subyacentes de azul, violeta o marr??n deben equilibrarse y, en ciertos casos, corregirse con el uso de colores como los pigmentos modificadores de naranja. Siempre se debe considerar el tono natural de los labios y el tono de la piel para lograr un color apropiado para ese cliente.</p>

                            <p>De forma similar a las t??cnicas de maquillaje normales, ??existe alg??n m??todo para contornear los labios de forma permanente para que parezcan m??s llenos?</p>

                            <p>Algunos t??cnicos pueden usar diferentes tonos de pigmentos para lograr una apariencia contorneada en los labios, pero yo elijo la t??cnica. Encuentro que la clave de la sutileza es aplicar el color de manera m??s densa en ciertas ??reas de los labios para crear una apariencia de contorno natural, mezcl??ndose con todo el labio. Como la piel de los labios retiene el pigmento de una manera diferente a la piel de la cara, es importante no trabajar demasiado fuera del borde del labio, sino trabajar con ??l para realzar el borde natural y agregar volumen.</p>
                          </div>
                        </div>
                      </div>



                    </div>
                </div>
              </div>
              </div>
        </section>

	</main>

<?php
	require_once("layouts/footer.inc.php");
?>
    <!--External scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!--Local scripts-->
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/nav-query.js"></script>
  <script src="./js/app.js"></script>
</body>
</html>
