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
    <title>Luna Beauty Studio - Servicios</title>
</head>
<body class="light services-body">

<style>
  .services-body .nav-link p{
    color: white;
  }

  .services-body .cus-nav .nav-link p{
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
    	      background: url(library/img/hybrid-fill.jpg);
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
    	    <h1 class="text-center" style="color:#fff; font-size: 45px!important;">Servicios</h1>
    	  </div>
    	</section>

      <div class="about-lashes">
        <div class="container-fluid px-0">
              <div class="row mx-0">
                <div class="col-lg-6 col-12 py-4">
                  <div class="overlay-img">
                    <div class="layer" style="padding-top:350px">
                      <figure class="thumb">
                        <img src="./library/img/lashes-our.jpg" alt="">
                      </figure>
                    </div>

                </div>
                </div>

                <div class="col-lg-6 col-12 text-center py-3">

                  <div class="content-lashes" data-aos="fade-up"
                  data-aos-anchor-placement="top-center">
                    <style>
                      .about-lashes h3{
                        font-size: 30px;
                      }
                    </style>
                    <h3 class="h2">
                      Sobre Nuestras Pesta??as
                    </h3>
                    <p>
                      Todos los servicios de pesta??as se realizan con marcas de la m??s alta calidad en la industria de las pesta??as.

                    </p>
                    <p>
                      Hay muchos diferentes tipos de rizos, longitudes y di??metros al dise??ar el conjunto perfecto y es nuestro trabajo consultar con nuestros clientes y encontrar una soluci??n para elegir el aspecto m??s favorable para la forma de su rostro y ojos.
                    </p>
                    <p>
                      Nos aseguramos de ayudar a nuestros clientes a mantener la extensi??n de sus pesta??as sin da??ar sus pesta??as naturales durante el proceso.
                    </p>
                  </div>
                </div>
              </div>

        </div>
      </div>

    	<section id="first-modals" class="p-4">
    		<style>
    			#first-modals{
                    background: #fdf9f8;
    			}

    			#first-modals p,h3{
    				color: white;
    			}

                #first-modals  .sv-rectangle {
                  position: relative;
                  background-color: #6d6e70;
                  background-size: cover;
                  background-position: center 50%;
                  background-repeat: no-repeat;
                  padding: 5px;
                  height: 150px;
                  transition: 0.3s;
                  overflow: hidden;
                  border-radius: 10px;
                  box-shadow: 3px 3px 6px #b1afaf;
                }
                #first-modals  .sv-rectangle .pos {
                  height: 100%;
                }
                #first-modals  .sv-rectangle::after {
                  content: "";
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  width: 100%;
                  height: 100%;
                  z-index: 1;
                  background: #131313;
                  background: radial-gradient(circle, rgba(19, 19, 19, 0.3) 72%, rgba(97, 94, 94, 0.5382528011) 100%);
                }
                #first-modals  .sv-rectangle:hover {
                  cursor: pointer;
                  opacity: 0.9;
                }
                #first-modals  .sv-rectangle .row {
                  position: relative;
                  height: 100%;
                  justify-content: center;
                  align-items: flex-end;
                  padding: 15px;
                  z-index: 5;
                }
                @media (max-width: 991.98px) {
                  #first-modals  .sv-rectangle .sv-content {
                    text-align: center;
                  }
                }
                #first-modals  .sv-rectangle .sv-content h3 {
                  color: #fff;
                }
                #first-modals  .sv-rectangle .smbtn {
                  text-align: center;
                }
                #first-modals  .sv-rectangle .sv-rectangle-link {
                  position: relative;
                  text-decoration: none;
                  display: block;
                  height: 100%;
                  z-index: 5;
                }
                #first-modals  .sv-rectangle .sv-rectangle-link:hover {
                  cursor: pointer;
                }

    	    	#first-modals .modal-body p{
    	    		color:black!important;
    	    	}

    	    	#first-modals .modal-body h3{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#first-modals .modal-body h4{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#first-modals .image-m{
    	    		overflow:hidden;
    	    	}

    	    	#first-modals img{
    	    		width:100%;
    	    	}
    		</style>

                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".classic-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/full-set.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Extensiones de Pesta??as Naturales
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".classic-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".hybrid-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/fillin.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Hybrid Lash Extensions
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".hybrid-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>


                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".volume-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/hybrid.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Extensiones de Pesta??as de Volumen</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".volume-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-6 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".lip-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/lip-blush.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Maquillaje de Labios</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".lip-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                      </div>
                  </div>

			<div class="modal fade classic-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/full-set.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Conjunto Completo Cl??sico</h3>
		    					<p style="font-weight: bold; font-size:20px;">$120</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Es una t??cnica en la que se aplica una sola extensi??n a una pesta??a natural aislada. Las pesta??as cl??sicas, son perfectas para agregar longitud y un poco de volumen a su l??nea natural de pesta??as. Un conjunto cl??sico puede resultar en una apariencia natural o llamativa, dependiendo de cu??ntas pesta??as naturales tenga el cliente para que trabajemos. Este estilo es menos dram??tico que los conjuntos de volumen y generalmente, es adecuado para aquellos que buscan crear un efecto de "r??mel".</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno Cl??sico</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 Semanas $60 - 3 Semanas $70 (1:30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos cl??sicos cada 2-3 semanas para garantizar un aspecto sim??trico.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pesta??as para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrar?? un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos, y puede ser necesario un servicio de eliminaci??n antes de aplicar un nuevo conjunto completo.</strong></p>
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


			<div class="modal fade hybrid-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/fillin.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Conjunto Completo H??brido</h3>
		    					<p style="font-size: 20px; font-weight: bold;">$150 (2 horas)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Las pesta??as h??bridas son una mezcla entre pesta??as cl??sicas y de volumen, esta t??cnica es vers??til al ofrecer un aspecto m??s grueso y denso que las pesta??as cl??sicas, pero sin la uniformidad y suavidad de un conjunto de volumen t??pico ruso.</p>

		    					<p>Si ha estado pensando en actualizar su estilo cl??sico, ??podemos garantizarle que le encantar??n las pesta??as h??bridas!</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno H??brido</h3>
		    					<p class="mt-3" style="font-size: 20px; font-weight: bold;">2 semanas $ 65 - 3 semanas $ 75 (1: 30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos h??bridos cada 2 ?? 3 semanas, es muy importante seguir las instrucciones de cuidado posterior, para garantizar un conjunto saludable y limpio.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pesta??as para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrar?? un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos y puede ser necesario un servicio de eliminaci??n antes de aplicar un nuevo conjunto completo.</strong></p>
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

			<div class="modal fade volume-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
		    		<div class="container">
		    			<div class="row">
		    				<div class="col-12 image-m">
		    					<img src="library/img/hybrid.jpg" alt="...">
		    				</div>
		    			</div>
		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Conjunto Completo de Volumen</h3>
		    					<p style="font-weight: bold; font-size:20px;">$190 (2:45min)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Las extensiones de pesta??as con volumen, son una t??cnica de aplicaci??n avanzada que da como resultado un efecto m??s dram??tico. Cada abanico hecho a mano se crea aplicando de 3 a 6 extensiones (m??s delgadas en di??metro) una a una y a cada pesta??a natural. Las pesta??as con volumen, son perfectas para los clientes que naturalmente tienen pesta??as delgadas y escasas y quieren una apariencia m??s atrevida, o para aquellos que naturalmente tienen pesta??as saludables pero que a??n buscan crear un estilo alargado y glamoroso.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Relleno de Volumen</h3>
		    					<p style="font-weight: bold; font-size:20px;">2 semanas $75 - 3 semanas $85</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>Se requieren rellenos de volumen cada 2 ?? 3 semanas, es muy importante seguir las instrucciones de cuidado posterior para garantizar un conjunto saludable y limpio.</p>

		    					<p><strong>Cumplimiento estricto</strong>: Debe quedar al menos un 40% de pesta??as para que se considere un relleno. Cualquier cantidad menor se considera un conjunto completo y se cobrar?? un precio de conjunto completo.</p>

		    					<p><strong>Tenga en cuenta: No aceptamos nuevos clientes para rellenos externos, y puede ser necesario un servicio de eliminaci??n antes de aplicar un nuevo conjunto completo</strong></p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center">
		    					<h3>Eliminaci??n de Pesta??as</h3>
		    					<p style="font-weight: bold; font-size:20px;">$25 (30min)</p>
		    				</div>

		    				<div class="col-md-7 text-center">
		    					<p>Si ha decidido tomar un descanso de las pesta??as, puede quitarlas en lugar de esperar a que se caigan todas.</p>

		    					<p>La eliminaci??n de pesta??as toma entre 10 y 30 minutos, dependiendo de cu??ntas extensiones de pesta??as te queden. Se aplica un removedor de pegamento especial para quitar las extensiones. Las remociones de pesta??as externas son bienvenidas.</p>
		    				</div>
		    			</div>

		    			<div class="row align-items-center py-4">
		    				<div class="col-md-5 text-center order-lg-2">
		    					<h3>Levantamiento de Pesta??as</h3>
		    					<p style="font-weight: bold; font-size:20px;">$95 (1 hora)</p>
		    				</div>

		    				<div class="col-md-7 text-center order-lg-1">
		    					<p>El levantamiento de pesta??as es una t??cnica semipermanente que levanta las pesta??as desde la ra??z y le da un aspecto m??s largo, m??s completo y m??s grueso. ??Podr??a durar hasta 8 semanas! Si te encantan las pesta??as largas pero no est??s seguro de las extensiones, ??este servicio es perfecto para ti!. Sus resultados ser??n m??s dram??ticos si sus pesta??as naturales son saludables y de longitud media a larga. Tambi??n puede agregar un tinte de pesta??as para que sus pesta??as se vean m??s oscuras</p>
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

      <div class="modal fade lip-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="row">
            <div class="col-12 text-center">
            <div class="modal-header">
            </div>
            <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12 image-m">
                  <img src="library/img/lip-blush.jpg" alt="...">
                </div>
              </div>
              <div class="row align-items-center py-4">
                <div class="col-md-5 text-center">
                  <h3></h3>
                  <p style="font-weight: bold; font-size:20px;"></p>
                </div>

                <div class="col-md-7 text-center">
                  <p></p>
                </div>
              </div>

              <div class="row align-items-center py-4">
                <div class="col-md-5 text-center order-lg-2">
                  <h3></h3>
                  <p style="font-weight: bold; font-size:20px;"></p>
                </div>

                <div class="col-md-7 text-center order-lg-1">
                  <p></p>

                  <p></p>

                  <p></p>
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

    	<section id="permanent-makeup" class="p-4">
    		<div class="container">
    			<div class="row">
    				<div class="col-12 text-center">
    					<h2 style="color:#cd7c78!important; font-size: 30px;"></h2>

    					<p></p>

    					<p></p>

    					<p></p>

    					<p></p>
    				</div>
    			</div>
    		</div>
    	</section>

      <div class="about-lashes">
        <div class="container-fluid px-0">
              <div class="row mx-0">

                <div class="col-lg-6 col-12 text-center py-3">

                  <div class="content-lashes" data-aos="fade-up"
                  data-aos-anchor-placement="top-center">
                    <style>
                      .about-lashes h3{
                        font-size: 30px;
                      }
                    </style>
                    <h3 class="h2">
                      Servicios de Maquillaje Permanente
                    </h3>
                    <p>
                      ??Hablemos de cejas! Todos hemos pasado la mayor parte de nuestras vidas depilando con pinzas, depilando con cera, enhebrando, rellenando, dibujando, ocultando cicatrices y tratando de lograr ese arco perfecto o esa forma perfecta en nuestras cejas.

                    </p>
                    <p>
                      Hay muchos factores que pueden afectar el crecimiento del vello de nuestras cejas, incluida la edad, el exceso de depilaci??n, las cicatrices, la quimioterapia, la alopecia, etc.
                    </p>
                    <p>
                      Elegir Microblading solo o hacer un combo de cejas, depende de lo que deseas alcanzar.
                    </p>
                    <p>
                      Si solo deseas crear una apariencia de trazo de cabello con luz natural, entonces Microblading solo es el camino a seguir. El Microblading por s?? solo, no lograr?? una "apariencia de maquillaje", est?? destinado ??nicamente a crear "peque??os pelos", pero tambi??n le brinda la capacidad de agregar maquillaje para una apariencia m??s impactante. Si lo que buscas es un "look de maquillaje" m??s oscuro, m??s completo, lo que est??s buscando es una combinaci??n de cejas.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 col-12 px-0">
                  <div class="overlay-img">
                    <div class="layer" style="padding-top:350px">
                      <figure class="thumb">
                        <img src="./library/img/microblading.jpg" alt="">
                      </figure>
                    </div>

                </div>
                </div>
              </div>
        </div>
      </div>

    	<section id="second-modals" class="p-4">
    		<style>
    			#second-modals{
					background: #fdf9f8;
    			}

    			#second-modals p,h3{
    				color: white;
    			}

                #second-modals  .sv-rectangle {
                  position: relative;
                  background-color: #6d6e70;
                  background-size: cover;
                  background-position: center 50%;
                  background-repeat: no-repeat;
                  padding: 5px;
                  height: 150px;
                  transition: 0.3s;
                  overflow: hidden;
                  border-radius: 10px;
                  box-shadow: 3px 3px 6px #b1afaf;
                }
                #second-modals  .sv-rectangle .pos {
                  height: 100%;
                }
                #second-modals  .sv-rectangle::after {
                  content: "";
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  width: 100%;
                  height: 100%;
                  z-index: 1;
                  background: #131313;
                  background: radial-gradient(circle, rgba(19, 19, 19, 0.3) 72%, rgba(97, 94, 94, 0.5382528011) 100%);
                }
                #second-modals  .sv-rectangle:hover {
                  cursor: pointer;
                  opacity: 0.9;
                }
                #second-modals  .sv-rectangle .row {
                  position: relative;
                  height: 100%;
                  justify-content: center;
                  align-items: flex-end;
                  padding: 15px;
                  z-index: 5;
                }
                @media (max-width: 991.98px) {
                  #second-modals  .sv-rectangle .sv-content {
                    text-align: center;
                  }
                }
                #second-modals  .sv-rectangle .sv-content h3 {
                  color: #fff;
                }
                #second-modals  .sv-rectangle .smbtn {
                  text-align: center;
                }

                #second-modals .sv-rectangle .sv-rectangle-link {
                  position: relative;
                  text-decoration: none;
                  display: block;
                  height: 100%;
                  z-index: 5;
                }
                #second-modals  .sv-rectangle .sv-rectangle-link:hover {
                  cursor: pointer;
                }

    	    	#second-modals .modal-body p{
    	    		color:black!important;
    	    	}

    	    	#second-modals .modal-body h3{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#second-modals .modal-body h4{
    	    		color:#cd7c78!important;
                    font-family: 'Playfair Display'!important;
    	    	}

    	    	#second-modals .image-m{
    	    		overflow:hidden;
    	    	}

    	    	#second-modals img{
    	    		width:100%;
    	    	}
    		</style>

                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".microblading-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/microblading.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Microblanding
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".microblading-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".powder-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/powder-brows.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Powder Brows
                                    </h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".powder-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>


                          <div class="col-12 col-lg-4 g-1 my-2" data-aos="fade-in" data-toggle="modal" data-target=".combo-m">

                            <div class="sv-rectangle" style="background-image:url(./library/img/microshading.jpg);">

                                <div class="pos">

                              <div class="row">

                                <div class="col-lg-8 col-12">

                                 <div class="sv-content">
                                     <h3>Microshading - Combo Brows</h3>
                                 </div>
                                </div>

                                 <div class="col-lg-4">
                                   <div class="smbtn pb-2">
                                     <a class="btn-ste" data-toggle="modal" data-target=".combo-m"><span>Haz una Cita</span></a>
                                    </div>
                                 </div>

                               </div>
                                </div>

                            </div>
                          </div>
                      </div>
                  </div>

			<div class="modal fade microblading-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/microblading.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Microblading</h3>
			  	  				<p>Microblading es un servicio de tatuaje de cejas semipermanente, que dura entre 1 y 3 a??os dependiendo de tu tipo de piel y estilo de vida, despu??s de su retoque de 6 a 10 semanas. Microblading se realiza con una herramienta manual dise??ada para crear trazos finos, parecidos a un cabello, para una apariencia natural. Microblading es ideal para rellenar ??reas dispersas de la ceja, definiendo y mejorando la forma de la misma.</p>

			  	  				<p>El Microblading es similar a hacerse un tatuaje en el cuerpo, pero no es tan profundo. Los tatuajes son permanentes porque van a la dermis, mientras que el microblading va a la epidermis. Esta es la raz??n por la que no se decolora si se hace correctamente, y dura unos a??os y no toda la vida.</p>

			  	  				<p>La forma y el color de las cejas est??n hechos a la medida de su estructura facial y preferencia; con la ??ltima t??cnica hiperrealista, podemos lograr un aspecto muy natural y suave. Solo utilizamos pigmentos veganos / libres de crueldad animal de la m??s alta calidad, as?? como herramientas est??rilizadas desechables.</p>

			  	  				<p>??? Resultados realistas naturales</p>

			  	  				<p>??? Ideal para piel normal / seca</p>

			  	  				<p>??? NO es ideal para pieles extremadamente grasas y gruesas con poros dilatados</p>

			  	  				<p>??? NO es ideal para cejas muy dispersas</p>

			  	  				<h3 class="my-4">Beneficios del Microblading </h3>

			  	  				<p>Cualquiera que se beneficie del l??piz de cejas podr??a ser candidato para el microblading.</p>

			  	  				<p>Angella Marselo Reviwe: Tengo mis cejas tatuadas. En solo 2 horas, pas?? de tener cero cejas a tener arcos suaves y de apariencia natural. Me sent?? renacida, como si mis cejas hubieran sido bautizadas, y nunca volver??an a ser las mismas (bueno, durante el pr??ximo a??o o dos).</p>

			  	  				<h3 class="my-4">C??mo prepararse para el Microblading</h3>

			  	  				<p>Aproximadamente una semana antes de su cita de microblading, espera a depilarse, enhebrar o depilar las cejas. Un d??a antes, debes evitar el alcohol y la cafe??na, ya que pueden aumentar la sensibilidad de la piel. Adem??s, evita tomar ibuprofeno, aspirina, aceite de pescado o suplementos de vitamina E y otros anticoagulantes. Y no olvidemos: Trata de relajarte.</p>

			  	  				<h3 class="my-4">Qu?? esperar durante una cita de Microblading:</h3>
			  	  				<h4 class="mb-4">Paso 1: Anestesiamos tus cejas</h4>

			  	  				<p>Muchos clientes nos preguntan: "??Duele?" La respuesta es: ??no! La mayor??a de los clientes no se quejan de ning??n dolor, ??y algunos incluso se quedan dormidos durante el proceso! Antes del procedimiento, aplicamos un anest??sico t??pico y esperamos 20 minutos para asegurarnos de que sientas la menor molestia posible. Puedes sentarte, relajarte y so??ar con tener cejas en la ducha ... ??porque todo est?? sucediendo!</p>

			  	  				<h4 class="my-4">Paso 2: Te entrevistamos</h4>

			  	  				<p>Despu??s de adormecerte las cejas, te entrevistaremos sobre tu rutina de maquillaje y tu estilo de vida. ??Dibujas tus cejas todos los d??as o solo en ocasiones especiales? ??Te gustan las cejas llamativas y atrevidas o las cejas suaves y sutiles? Muchos clientes han depilado demasiado en el pasado y quieren volver a su aspecto caracter??stico. Durante la entrevista, trabajaremos contigo para personalizar tu mejor ceja.</p>

			  	  				<h4 class="my-4">Paso 3: Dibujamos tus mejores cejas</h4>

			  	  				<p>Una vez que determinemos tus mejores cejas, dibujaremos tus nuevas cejas directamente en tu cara. Durante este paso, te pediremos que sonr??as, r??as y hagas diferentes expresiones faciales. Nuestro objetivo es crear hermosas cejas que combinen con la simetr??a de tu rostro. Te ayudaremos a encontrar el color y la forma perfectos para tu rostro.</p>

			  	  				<h4 class="my-4">Paso 4: Comienza el procedimiento</h4>

			  	  				<p>Una vez que tus cejas est??n adormecidas, comenzamos el tratamiento. Esto toma aproximadamente una hora.</p>

			  	  				<h4 class="my-4">Paso 5: Revelamos tus Nuevas Cejas</h4>

			  	  				<p>??Y finalmente, la gran revelaci??n! ??Este es el comienzo de una hermosa relaci??n entre t?? y tus cejas! No m??s mantenimiento matutino estresante. No m??s cejas en tu almohada. ??Cejas perfectas todos los d??as, llueva o haga sol!</p>

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

			<div class="modal fade powder-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/powder-brows.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Cejas con Polvo</h3>

			  	  				<p>Las cejas en polvo, es una t??cnica de maquillaje cosm??tico semipermanente dise??ada para crear cejas con efecto de polvo suave, muy similar al maquillaje en polvo. El efecto de polvo se realiza con una t??cnica de sombreado, utilizando un dispositivo de maquillaje permanente, que es similar a una pistola de tatuaje. Da una gran definici??n y profundidad a las cejas. Est?? especialmente recomendado para mujeres con piel grasa o mixta o cualquier persona que se rellene las cejas regularmente con l??piz o sombra.</p>

			  	  				<p>??? Ideal para pieles grasas y todo tipo</p>

			  	  				<p>??? Puede ser suave o en negrita seg??n la preferencia.</p>

			  	  				<p>??? Maquillaje-look </p>

			  	  				<p>??? De larga duraci??n</p>

			  	  				<p>??? T??cnica de tendencia</p>

			  	  				<h3 class="my-4">??Cu??l es la diferencia entre Ombre Powder Brows y Microblading?</h3>

			  	  				<p>La mayor diferencia entre estas dos t??cnicas de peinado de cejas semipermanentes, es c??mo se deposita el pigmento en la piel. Microblading utiliza una herramienta de mano para tallar peque??os cortes en la piel, mientras que las cejas Ombre se realizan con una m??quina. La t??cnica del polvo ombre es un poco menos invasiva que la del microblading.</p>

			  	  				<h3 class="my-4">??Cu??nto tiempo duran las cejas Ombre?</h3>

			  	  				<p>Las cejas Ombre pueden durar de dos a cinco a??os. La duraci??n depender?? de una serie de factores, como el estilo de vida, el tipo de piel, la exposici??n al sol, el estado de salud, etc.</p>

			  	  				<h3 class="my-4">??Cu??les son los principales beneficios de las cejas en polvo Ombre?</h3>

			  	  				<p>??? Las cejas en polvo Ombre son ideales para cualquier tipo de piel, a diferencia del microblading, que puede no funcionar bien en las bellezas de piel grasa.</p>

			  	  				<p>??? Su ceja se ver?? m??s llena, m??s definida y llamativa.</p>

			  	  				<p>??? Las cejas Ombre duran m??s que las cejas tatuadas, por lo general hasta 5 a??os.</p>

			  	  				<p>??? La t??cnica del polvo ombre es un poco menos invasiva que la del Microblading.</p>

			  	  				<p>??? Adem??s, esta t??cnica de peinado de cejas semipermanente es menos dolorosa que la del Microblading.</p>

			  	  				<h3 class="my-4">??Qui??n es un buen candidato para las Cejas Ombre?</h3>

			  	  				<P>A diferencia de Microblading, las cejas en polvo Ombre son ideales para cualquier tipo de piel. Las bellezas de piel grasa y las clientas de cabello muy oscuro son las que m??s se benefician de Ombre Powder Brows.</P>
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

			<div class="modal fade combo-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			  	<div class="modal-content">

			  	  <div class="row">
			  	  <div class="col-12 text-center">
			  	  <div class="modal-header">
			  	  </div>
			  	  <div class="modal-body">
			  	  	<div class="container">
			  	  		<div class="row">
			  	  			<div class="col-12 image-m">
			  	  				<img src="library/img/microshading.jpg" alt="...">
			  	  			</div>
			  	  		</div>
			  	  		<div class="row">
			  	  			<div class="col-12 text-center">
			  	  				<h3 class="my-4">Microshading - Combo Brows</h3>

			  	  				<p>Microshading es un servicio de tatuaje de cejas semipermanente, que dura entre 1 y 3 a??os dependiendo de tu tipo de piel y estilo de vida, despu??s de su retoque de 6 a 10 semanas. El microshading es una combinaci??n de t??cnica manual en la que cortamos trazos de cabello individuales y sombreado manual o autom??tico donde rellenamos los espacios. El microshading se denomina a menudo "cejas combinadas" porque combinamos las dos t??cnicas.</p>

			  	  				<p>El Microshading es similar a hacerse un tatuaje en el cuerpo, pero no es tan profundo.Los tatuajes son permanentes porque van a la dermis, mientras que el micro sombreado va a la epidermis. Esta es la raz??n por la que no se decolora si se hace correctamente, y dura unos a??os y no toda la vida.</p>

			  	  				<h3 class="my-4">??Qui??n es el cliente ideal?</h3>

			  	  				<p>??? Cualquiera que busque un estilo de cejas completo </p>

			  	  				<p>??? Cualquiera con poco o ning??n cabello </p>

			  	  				<p>??? Todo tipo de piel, especialmente grasa</p>

			  	  				<p>??? Viejo encubrimiento de maquillaje permanente (debe consultar el libro para repasar los objetivos realistas)</p>

			  	  				<p>La experiencia de cada individuo variar?? seg??n su tipo de piel y tambi??n su estilo de vida, pero es importante programar su consulta gratuita para analizar las preguntas y preocupaciones individuales.</p>

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

    	<section id="contact-section" class="p-4 py-5">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 text-center">
    					<h2 style="color:#cd7c78!important; font-size: 35px;">Reserva tu Cita Hoy</h2>
    				</div>
    				<div class="col-md-6 text-center">
    					<a href="contact_es.php"><button type="button" class="btn btn-ste" data-dismiss="modal">Cont??ctanos</button></a>
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
