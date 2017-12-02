<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio</title>
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
  <body onload="nobackbutton();">
    <nav>
      <div class="container navigation">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <img src="img/Logo-Universidad-EAN.png" alt="" width="50" height="50" />
        </div><br>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#boxes">Datos personales</a>
            </li>
            <li>
              <a href="#boxes">Solicitar cita</a>
            </li>
            <li class="active">
              <a href="salida.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="service" class="home-section nopadding paddingtop-60">
      <div class="container">
        <div class="row">
          <div class="col-sm- col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Revisión médica</h5>
                  <p>Asiste periódicamente a tu médico para un chequeo general.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Servicios de enfermeria</h5>
                  <p>Ofrecemos servicios de enfermeria para aquellos que requieren cuidados especiales.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Farmacia</h5>
                  <p>Reclama tus medicamentos y consumelos según como lo ordene tu médico.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Fisioterapia</h5>
                  <p>Ofrecemos acompañamiento de personal profesional y capacitado en sus procesos de fisioterapia.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Pediatría y nutrición</h5>
                  <p>Ofrecemos servicios especializados para el cuidado de los más pequeños.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Controla tu sueño</h5>
                  <p>Recuerda descansar lo suficiente y aprovechar tus ciclos de sueño.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="boxes" class="home-section paddingtop-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">MIS DATOS PERSONALES</h4>
                <p>Aquí puedes consultar y modificar tu información personal.<br><br></p>
                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                  <a href="datos.php" class="btn btn-skin btn-lg">INGRESAR 
                    <i class="fa fa-angle-right"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">SOLICITAR CITA</h4>
                <p>Aquí puedes realizar el proceso de reserva del procedimiento médico que necesites.</p>
                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                  <a href="cita.php" class="btn btn-skin btn-lg">INGRESAR 
                    <i class="fa fa-angle-right"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <script type="text/javascript" src="js/botonatras.js"></script>
  </body>
</html>