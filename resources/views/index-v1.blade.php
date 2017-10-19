<!DOCTYPE html>
<html lang="en">

<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Logictools</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.growl.css">
  
  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/revslider.css" id="option_color">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Icons -->
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/59e83dfcc28eca75e4626e54/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
  </script>

</head>

 <body class="body-wrapper">
      <div class="main-wrapper">
        <header id="pageTop" class="header-wrapper">
          <div class="container-fluid color-bar top-fixed clearfix">
              <div class="row">
                  <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
                  <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
              </div>
            </div>

            <!-- NAVBAR -->
            <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" id="logictools1" class="navbar-brand dropdown-toggle" data-toggle="dropdown">
                      <img src="images/logo.png" alt="Logictools" style="width: 70%">
                    </a>
                  </div>

                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active dropdown singleDrop color-1">
                          <a href="" id="inicio" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span>Inicio</span>
                          </a>
                        </li>
                        <li class="dropdown singleDrop color-4">
                          <a href="" id="servicios" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list-ul bg-color-4" aria-hidden="true"></i> <span>Servicios</span>
                          </a>
                        </li>
                        <li class="dropdown megaDropMenu color-3">
                          <a href="" id="equipo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users bg-color-3" aria-hidden="true"></i> <span>Conócenos</span>
                          </a>
                        </li>
                      <li class="dropdown singleDrop color-2">
                          <a href="" id="proyectos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-send bg-color-2" aria-hidden="true"></i> <span>Proyectos</span>
                          </a>
                        </li>
                        <li class="dropdown singleDrop color-5">
                          <a href="" id="contacto" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-phone bg-color-5" aria-hidden="true"></i> <span>Contacto</span>
                          </a>
                        </li>
                    </ul>
                  </div>
              </div>
            </nav>
        </header>

        <!-- HOME BANNERS -->
        <section id="inicio" class="bannercontainer bannercontainerV1">
            <div class="fullscreenbanner-container">
              <div class="fullscreenbanner">
                  <ul>

                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <img src="images/img1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <div class="slider-caption container">
                          <div class="tp-caption rs-caption-1 sft start"
                              data-hoffset="0"
                              data-y="200"
                              data-speed="800"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Software a la medida
                          </div>

                          <div class="tp-caption rs-caption-2 sft"
                              data-hoffset="0"
                              data-y="265"
                              data-speed="1000"
                              data-start="1500"
                              data-easing="Power4.easeOut"
                              data-endspeed="300"
                              data-endeasing="Power1.easeIn"
                              data-captionhidden="off">
                              Creamos soluciones diseñadas especialmente para su organización. <br />
                              Soluciones de calidad, responsabilidad, honestidad y compromiso.
                          </div>
                        </div>
                    </li>

                     <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <img src="images/img2.jpeg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <div class="slider-caption container">
                          <div class="tp-caption rs-caption-1 sft start"
                              data-hoffset="0"
                              data-y="200"
                              data-speed="800"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Identificamos tus necesidades
                          </div>

                          <div class="tp-caption rs-caption-2 sft"
                              data-hoffset="0"
                              data-y="265"
                              data-speed="1000"
                              data-start="1500"
                              data-easing="Power4.easeOut"
                              data-endspeed="300"
                              data-endeasing="Power1.easeIn"
                              data-captionhidden="off">
                              Ponemos a tu disposición un equipo de diseño y programación.<br />
                              A la vanguardia del desarrollo web y capaz de asombrarte.
                          </div>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                        <img src="images/img3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <div class="slider-caption container">
                          <div class="tp-caption rs-caption-1 sft start"
                              data-hoffset="0"
                              data-y="200"
                              data-speed="800"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Amamos nuestro trabajo
                          </div>

                          <div class="tp-caption rs-caption-2 sft"
                              data-hoffset="0"
                              data-y="265"
                              data-speed="1000"
                              data-start="1500"
                              data-easing="Power4.easeOut"
                              data-endspeed="300"
                              data-endeasing="Power1.easeIn"
                              data-captionhidden="off">
                              Hacemos que tus herramientas sean fáciles de usar. <br />
                              Software / Aplicaciones Web / App Móviles.
                          </div>
                        </div>
                    </li>

                  </ul>
              </div>
            </div>
        </section>
      
        <!-- HOME ITEMS -->
        <section class="clearfix linkSection hidden-xs">
            <div class="sectionLinkArea hidden-xs scrolling">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-3">
                        <a href="" id="a1" class="sectionLink bg-color-1 dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-laptop linkIcon border-color-1" style="font-size: 50px;" aria-hidden="true"></i>
                          <span class="linkText">Aplicaciones<br />Web</span>
                          <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="" id="a2" class="sectionLink bg-color-2 dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-mobile linkIcon border-color-2" style="font-size: 60px;" aria-hidden="true"></i>
                          <span class="linkText">Aplicaciones<br />Móviles</span>
                          <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="" id="a3" class="sectionLink bg-color-3 dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-desktop linkIcon border-color-3" style="font-size: 40px;" aria-hidden="true"></i>
                          <span class="linkText">Aplicaciones<br />Escritorio</span>
                          <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="" id="a4" class="sectionLink bg-color-4 dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-bullhorn linkIcon border-color-4" style="font-size: 45px;" aria-hidden="true"></i>
                          <span class="linkText">Estrategias<br/ >Digitales</span>
                          <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
                        </a>
                    </div>
                  </div>
              </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section id="servicios1" class="colorSection full-width clearfix">
            <div class="container">
              <div class="sectionTitle text-center ">
                  <h2>
                    <span class="shape shape-left bg-color-4"></span>
                    <span>SERVICIOS</span>
                    <span class="shape shape-right bg-color-4"></span>
                  </h2>
              </div>
              <br /><br />
              <br /><br />
              <br /><br />
            
              <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <div class="media servicesStyle">
                        <span class="media-left bg-color-5">
                          <i class="fa fa-heart bg-color-5" aria-hidden="true"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-5">Diseño</h3>
                          <p align="justify">Que los consumidores sientan su presencia mediante un excelente diseño corporativo.</p>
                        </div>
                    </div>

                    <div class="media servicesStyle">
                        <span class="media-left bg-color-1">
                          <i class="fa fa-graduation-cap bg-color-1" aria-hidden="true"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-1">Páginas web corporativas</h3>
                          <p align="justify">Páginas web informativas de sus productos y servicios. Además visible y navegable en cualquier dispositivo móvil o tablet.</p>
                        </div>
                    </div>

                    <div class="media servicesStyle">
                        <span class="media-left bg-color-3">
                          <i class="fa fa-mobile bg-color-3" style="font-size: 45px"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-3">Desarrollo de apps</h3>
                          <p align="justify">Cada vez mas agricultores o clientes del agro se unen a la era digital y le dedican más tiempo al celular, materialice su idea de innovación, venda más y tome la delantera frente a sus competidores.</p>
                        </div>
                    </div>
                  </div>

                  <div class="col-sm-4 hidden-xs">
                    <div class="text-center">
                        <img src="img/home/services.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-xs-12">
                    <div class="media servicesStyle">
                        <span class="media-left bg-color-6">
                          <i class="fa fa-line-chart bg-color-6" style="font-size: 25px;"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-6">Mercadeo digital</h3>
                          <p align="justify">Desarrollamos fórmulas eficientes para el posicionamiento de sus productos o servicios.</p>
                        </div>
                    </div>
                    
                    <div class="media servicesStyle">
                        <span class="media-left bg-color-2">
                          <i class="fa fa-leaf bg-color-2" aria-hidden="true"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-2">Sitios web personalizados</h3>
                          <p align="justify">Desarrollamos sitios web desde cero totalmente personalizados, justo a su medida, tanto en la Web como en su Panel de Administración.</p>
                        </div>
                    </div>

                    <div class="media servicesStyle">
                        <span class="media-left bg-color-4">
                          <i class="fa fa-server bg-color-4" style="font-size: 30px;"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-4">Software dedicado</h3>
                          <p align="justify">Tome el control de su empresa y vea toda su operación en la palma de su mano. Optimice procesos, aumente su productividad, mejore sus tiempos y apoye sus procesos de certificación.</p>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </section>

        <!-- TEAM -->
        <section id="equipo1" class="colorSection full-width clearfix bg-color-5 teamSection">
            <div class="container">
              <div class="sectionTitle text-center alt">
                  <h2>
                    <span class="shape shape-left bg-color-3"></span>
                    <span>CONÓCEMOS</span>
                    <span class="shape shape-right bg-color-3"></span>
                  </h2>
              </div>
              <br/ ><br/ >
              <br/ ><br/ ><br/ >
            
              <div class="row">
                <div class="col-xs-12">
                  <div class="commentContent text-center">
                    <h2>
                      Somos un equipo de trabajo que nos gusta entregar resultados de calidad en el menor tiempo posible, por ello nos ajustamos a las necesidades y condiciones de su proyecto, entregando lo mejor del mercado en Experiencia, Seguridad y Diseño, haciendo que los productos que desarrolle con nosotros sean fáciles y prácticos de usar, también te acompañamos a definir el alcance de tu idea. Cada proyecto que desarrollamos es confidencial.
                    </h2>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- MAIN SECTION -->
        <section id="proyectos1" class="mainContent full-width clearfix">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="sectionTitle text-center">
                  <h2>
                    <span class="shape shape-left bg-color-4"></span>
                    <span><a href="http://www.agromapp.com" target="_blank" class="agromapp">AGROMAPP</a></span>
                    <span class="shape shape-right bg-color-4"></span>
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="tabCommon">
                  <div class="tab-content">
                    <div id="agromapp" class="tab-pane fade in active">
                      <div class="media"><br>
                        <!--Carousel-->
                        <div id="headCarousel" class="col-md-4">
                          <div class="widget-content widget-content-full">
                            <div id="info-carousel1" class="carousel slide remove-margin"><br>
                              <div class="carousel-inner">
                                <div class="item active"><img src="http://www.agromapp.com/assets/images/background/phone-1.png" alt="Agromapp"></div>
                                <div class="item"><img src="http://www.agromapp.com/assets/images/background/phone-2.png" alt="Selecciona tu cultivo."></div>
                                <div class="item"><img src="http://www.agromapp.com/assets/images/background/phone-3.png" alt=""></div>
                                <div class="item"><img src="http://www.agromapp.com/assets/images/background/phone-4.png" alt="Plagas y enfermedades."></div>
                                <div class="item"><img src="http://www.agromapp.com/assets/images/background/phone-5.png" alt=""></div>
                              </div>
                              <a class="left carousel-control" href="#info-carousel1" data-slide="prev" style="visibility: hidden;">
                                <span><i class="fa fa-chevron-left"></i></span>
                              </a>
                              <a id="right1" class="right carousel-control" href="#info-carousel1" data-slide="next" style="visibility: hidden;">
                                <span><i class="fa fa-chevron-right"></i></span>
                              </a>
                            </div>
                          </div>
                        </div>
                        
                        <!--Agromapp-->
                        <div class="media-body">
                          <h3 class="media-heading" style="margin-top: -30px">
                          <a href="http://www.agromapp.com" target="_blank" class="agromapp">Agromapp</a></h3>
                          <p>Agromapp es un ejemplo de las aplicaciones móviles que  desarrollamos pensando en ayudar, está enfocada al sector agrícola y es totalmente gratis, contiene mas de 180 cultivos con información para identificar y conocer plagas, enfermedades, deficiencias, propagación y posibles soluciones. Esta app es una guía para el nuevo agricultor, facilitándole  la toma de decisiones. <br /><br />
                          <b>Pensamos en todo:</b> ​<br />Todos pueden registrar y promocionar sus productos o servicios gratis​.<br /><br />
                          <b>Funciona sin internet:</b><br />Sabemos que la cobertura en el campo no es la mejor y es allí  donde más se necesita la información.​<br /><br />
                          <b>Todos pueden ayudar:</b><br /> Descargando la app y enviando sugerencias y fotos desde la misma o a <a href="mailto:contacto@agromapp.com​">contacto@agromapp.com​</a><br /><br />
                          <b>Publicidad gratis:</b><br /> Pon tu marca o datos en las fotos que envíes, así millones de personas te conocerán y te lo agradecerán.<br />
                          Cuantas mas envíes mas visibilidad ganarás. ​<br /><br />          
                          <b>Retroalimentación:</b> <br />Contamos con blog, Foros y Redes sociales.​</p>
                          <a href="https://play.google.com/store/apps/details?id=air.com.bionet.agromapp" target="_blank">
                            <img src="images/googlePlay.png" width="15%" style="border-radius: 5px; width: 154px; height: 56px;">
                          </a>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <a href="https://play.google.com/store/apps/details?id=air.com.bionet.agromapp" target="_blank">
                            <img src="images/appStore.png" width="15%" style="border-radius: 5px; width: 154px; height: 56px;">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="promotionWrapper" style="background-image: url(images/img4.jpeg);">
          <div class="container">
            <div class="promotionInfo">
              <h2>¿Necesitas una cotización?</h2>
              <p>No dudes en contactarnos</p>
              <a href="" id="btn_contacto" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-send" aria-hidden="true"></i>Solicitar
              </a>
            </div>
          </div>
        </section>

        <!-- SECTION CONTACT -->
        <section id="contacto1" class="lightSection full-width clearfix homeContactSection">
            <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="homeContactContent">
                        <h2>Dirección</h2>
                        <p>Regístrate y recibe más información, también nos puedes enviar tus sugerencias o inquietudes las cuales resolveremos de inmediato.</p>
                        <address>
                          <p><i class="fa fa-map-marker bg-color-1" aria-hidden="true"></i>Cra 72 Bis # 24D - 50 Bogotá</p>
                          <p><i class="fa fa-envelope bg-color-4" aria-hidden="true"></i><a href="mailto:contacto@logictools.co">contacto@logictools.co</a></p>
                          <p><i class="fa fa-phone bg-color-3" aria-hidden="true"></i>(57-1) 2630353 Bogotá</p>
                          <p><i class="fa fa-mobile bg-color-2" aria-hidden="true"></i>Cel. 312 437 8174</p><br>
                        </address>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                      <div class="homeContactContent">
                        <form action="{{ url('/email_contact') }}" method="POST" role="form">
                          <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control border-color-1" id="InputName" name="InputName" placeholder="Nombre">
                          </div>
                          <div class="form-group">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="text" class="form-control border-color-2" id="InputEmail" name="InputEmail" placeholder="Correo">
                          </div>
                          <div class="form-group">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <textarea class="form-control border-color-4" name="Inputdescription" placeholder="Mensaje"></textarea>
                          </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="row">
                            <div class="col-md-12">
                              <center><div class="g-recaptcha" data-sitekey="6LdN5BoUAAAAAGbGcZGmTSlbR2HShhKKy2Zt_Uur"></div></center><br>
                            </div>
                            <div class="col-md-12">
                              <center>
                                <button id="enviar" type="submit" class="btn btn-primary" style="">Enviar mensaje</button>
                                <button id="enviando" type="submit" class="btn btn-success">&nbsp;&nbsp;Enviando...&nbsp;&nbsp;</button>
                              </center>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
        </section>

        <!-- MAP -->
        <section class="mapArea">
          <div id="map"></div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="container-fluid color-bar clearfix">
              <div class="row">
                  <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
                  <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
                  <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
                  <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
              </div>
            </div>

            <div class="footerInfoArea full-width clearfix" style="background-image: url(images/footer.png);">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="footerTitle" align="center">
                          <a href="" id="logictools2" class="dropdown-toggle" data-toggle="dropdown"><img src="images/logo.png" width="100%"></a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>

            <!-- COPY RIGHT -->
            <div class="copyRight clearfix">
              <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-push-7 col-xs-12">
                        <ul class="list-inline">
                          <li>
                            <a href="#" target="_blank" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          </li>
                          <li>
                            <a href="#" target="_blank" class="bg-color-4"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          </li>
                          <li>
                            <a href="#" target="_blank" class="bg-color-3"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </li>
                          <li>
                            <a href="#" target="_blank" class="bg-color-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                          </li>
                      </ul>
                    </div>
                    <div class="col-sm-7 col-sm-pull-5 col-xs-12">
                        <div class="copyRightText">
                          <p>© 2017 Copyright <a href="" id="logictools3" class="dropdown-toggle" data-toggle="dropdown"><u>Logictools.co</u></a></p>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </footer>
    </div>

      <div class="scrolling">
        <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
      </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="plugins/jquery-ui/jquery-ui.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
      <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
      <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
      <script src="plugins/owl-carousel/owl.carousel.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="plugins/counter-up/jquery.counterup.min.js"></script>
      <script src="plugins/isotope/isotope.min.js"></script>
      <script src="plugins/isotope/jquery.fancybox.pack.js"></script>
      <script src="plugins/isotope/isotope-triger.js"></script>
      <script src="plugins/countdown/jquery.syotimer.js"></script>
      <script src="plugins/velocity/velocity.min.js"></script>
      <script src="plugins/smoothscroll/SmoothScroll.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/jquery.growl.js"></script>
      <script src="plugins/google-custom-map/google-map.js"></script>
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyAjUY8rnvqvQmnUvnztrDgnIpQTLxidt18&callback=initMap"></script>

  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $("#enviando").hide();

    //Carousel
    function click(){
      $("#right1").click(); $("#right2").click();
    }
    setInterval(click, 4000);
  });

  //Functions
  function inicio(){
      $("html, body").animate({scrollTop:0+"px"});
  }
  function servicios(){
      var posicion= $("#servicios1").offset().top-90+"px";
      $("html, body").animate({scrollTop:posicion+"px"});
  }
  function equipo(){
      var posicion= $("#equipo1").offset().top-90+"px";
      $("html, body").animate({scrollTop:posicion+"px"});
  }
  function proyectos(){
      var posicion= $("#proyectos1").offset().top-90+"px";
      $("html, body").animate({scrollTop:posicion+"px"});
  }
  function contacto(){
      var posicion= $("#contacto1").offset().top-90+"px";
      $("html, body").animate({scrollTop:posicion+"px"});
  }

  //Click buttons
  $("#inicio").click(function(){ inicio(); });
  $("#servicios").click(function(){ servicios(); });
  $("#equipo").click(function(){ equipo(); });
  $("#proyectos").click(function(){ proyectos(); });
  $("#contacto").click(function(){ contacto(); });
  $("#logictools1").click(function(){ inicio(); });
  $("#logictools2").click(function(){ inicio(); });
  $("#logictools3").click(function(){ inicio(); });
  $("#a1").click(function(){ servicios(); });
  $("#a2").click(function(){ servicios(); });
  $("#a3").click(function(){ servicios(); });
  $("#a4").click(function(){ servicios(); });
  $("#btn_contacto").click(function(){ contacto(); });
  

</script>