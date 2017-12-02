<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location: index.php");
  }
  $_SESSION=array();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fin sesión</title>
    <link rel="icon" href="img/icono.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet"/>
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen"/>
    <link href="css/owl.theme.css" rel="stylesheet" media="screen"/>
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet">
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css"/>
    <link id="t-colors" href="color/default.css" rel="stylesheet">
  </head>
  <body onload="nobackbutton();">
    <div class="col-lg-6">
      <div class="form-wrapper">
        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
          <div class="panel panel-skin">
            <div class="panel-heading">
              <h3 class="panel-title">
                <span class="fa fa-pencil-square-o"></span>FIN DE LA SESIÓN
              </h3>
            </div>
            <form action="" method="post" role="form" class="contactForm lead">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label>Ha finalizado su sesión correctamente.<br>Gracias por utilizar nuestros servicios.</label>
                  </div>
                </div>
              </div>
              <a href="index.php" class="btn btn-skin btn-lg">INICIO</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/botonatras.js"></script>
  </body>
</html>