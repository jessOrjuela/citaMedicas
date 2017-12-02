<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro</title>
    <link rel="icon" href="img/icono.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <link id="t-colors" href="color/default.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="nobackbutton();">
    <div id="wrapper">
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <p class="bold text-left"></p>
              </div>
              <div class="col-sm-12 col-md-12 col-xs-12">
                <p class="bold text-left">EPS EAN</p>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <section id="intro" class="intro">
        <div class="intro-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                 <h2 class="h-ultra">REGISTRO AL PORTAL</h2>
                </div>
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                  <h4 class="h-light">INGRESA AQUÍ TUS DATOS PARA REGISTRARTE</h4>
                </div>
                <div class="well well-trans">
                  <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <form class="Formulario" action="verRegistro.php" method="POST">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Tipo de Documento:</label><br>
                          <select name="regTipoid" class="form-control input-md">
                            <option value="CEDULA DE CIUDADANIA">Cédula de ciudadanía</option>
                            <option value="TARJETA DE IDENTIDAD">Tarjeta de identidad</option>
                            <option value="REGISTRO CIVIL">Registro civil</option>
                          </select>
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Número de documento</label>
                          <input type="text" name="regId" id="reg_id" class="form-control input-md" data-rule="minlen:3">
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Nombres</label>
                          <input type="text" name="regNombres" id="reg_first_name" class="form-control input-md" data-rule="minlen:3">
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Apellidos</label>
                          <input type="text" name="regApellidos" id="reg_last_name" class="form-control input-md" data-rule="minlen:3">
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Género</label>
                          <select name="regGenero" class="form-control input-md">
                            <option value="MASCULINO">Masculino</option>
                            <option value="FEMENINO">Femenino</option>
                          </select>
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Fecha de nacimiento</label>
                          <?php
                            $dia=date("j");
                            $mes=date("n");
                            $ano=date("Y");
                            echo "<input type=\"date\" name=\"regFecha\" id=\"reg_birthday\" class=\"form-control input-md\" data-rule=\"minlen:3\" max=\"".$ano."-".$mes."-".$dia."\" min=\"1900-01-01\">";
                          ?>
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Correo</label>
                          <input type="text" name="regCorreo" id="reg_email" class="form-control input-md" data-rule="minlen:3">
                          <div class="validation"></div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label>Telefono</label>
                          <input type="text" name="regTelefono" id="reg_phone" class="form-control input-md" data-rule="minlen:3">
                          <div class="validation"></div><br>
                        </div>
                      </div>
                      <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                        <input type="submit" value="Registrar" class="btn btn-skin btn-lg"><br><br>
                        ¿Ya estás registrado? <a href="index.php">Ingresa aquí</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                  <img src="img/dummy/img-3.png" class="img-responsive" alt=""/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="widget">
                  <h5>Acerca de EPS EAN</h5>
                  <p>Esto es una página falsa, diseñada para un proyecto final de Desarrollo Web.</p>
                </div>
              </div>
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="widget">
                  <h5>Información</h5>
                  <p> Desarrollada por:<br>
                    <ul>
                      <li>Jonattan Gutiérrez</li>
                      <li>Crhistian Suárez</li>
                      <li>Diego Salgado</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="widget">
                  <h5>EPS EAN</h5>
                  <p>Información de contacto:</p>
                  <ul>
                    <li>
                      <span class="fa-stack fa-lg">
									     <i class="fa fa-circle fa-stack-2x"></i>
									     <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								      </span> Horario de atención: Lunes a Sábado de 8am a 10pm
                    </li>
                    <li>
                      <span class="fa-stack fa-lg">
									     <i class="fa fa-circle fa-stack-2x"></i>
									     <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								      </span> (1) 5936464
                    </li>
                    <li>
                      <span class="fa-stack fa-lg">
									      <i class="fa fa-circle fa-stack-2x"></i>
									      <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								      </span> 
                      <a href="https://www.universidadean.edu.co">www.universidadean.edu.co</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="widget">
                  <h5>Dirección:</h5>
                  <p>Cl. 79 #11-45, Bogotá, Cundinamarca</p>
                </div>
              </div>
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="widget">
                  <h5>Puedes seguirnos en:</h5>
                    <ul class="company-social">
                      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                      <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                  <div class="text-left">
                    <p>&copy;Copyright - Medicio Theme. All rights reserved.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <div class="text-right">
                    <div class="credits">
                      <a href="https://bootstrapmade.com/bootstrap-education-templates/">Bootstrap Education Templates</a> by BootstrapMade
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <a href="#" class="scrollup">
      <i class="fa fa-angle-up active"></i>
    </a>
    <script type="text/javascript" src="js/botonatras.js"></script>
  </body>
</html>
