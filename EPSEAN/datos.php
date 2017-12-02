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
    <title>Datos personales</title>
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
  <body>
    <nav>
      <div class="container navigation">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <img src="img/Logo-Universidad-EAN.png" alt="" width="50" height="50" />
        </div><br>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="PARTE2.php">Volver</a>
            </li>
            <li>
              <a href="salida.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="col-lg-12">
      <div class="form-wrapper">
        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
          <div class="panel panel-skin">
            <div class="panel-heading">
              <h3 class="panel-title">
                <span class="fa fa-pencil-square-o"></span>MIS DATOS PERSONALES
              </h3>
            </div>
            <div class="panel-body">
              <div id="sendmessage">Sus datos han sido actualizados correctamente</div>
              <div id="errormessage"></div>
              <form action="condatos.php" method="POST" role="form" class="contactForm lead">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label>Nombres</label>
                      <input type="text" name="actNombres" id="first_name" class="form-control input-md" data-rule="minlen:3"  value="<?php echo $_SESSION["nombre"]; ?>">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label>Apellidos</label>
                      <input type="text" name="actApellidos" id="last_name" class="form-control input-md" data-rule="minlen:3"  value="<?php echo $_SESSION["apellido"]; ?>">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                      <label>Fecha de nacimiento</label>
                      <?php
                        $dia=date("j");
                        $mes=date("n");
                        $ano=date("Y");
                        echo "<input type=\"date\" name=\"actFecha\" id=\"date\" class=\"form-control input-md\" data-rule=\"minlen:3\" max=\"".$ano."-".$mes."-".$dia."\" min=\"1900-01-01\" value=\"".$_SESSION["fechaNac"]."\">";
                      ?>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                      <label>Edad</label>
                      <input type="text" name="actEdad" id="edad" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["edad"]; ?>" readonly="readonly">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                      <label>Correo electrónico</label>
                      <input type="email" name="actCorreo" id="email" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["correo"]; ?>">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                      <label>Teléfono</label>
                      <input type="text" name="actTelefono" id="telefono" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["telefono"]; ?>">
                      <div class="validation"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="form-group">
                    <label>Tipo de documento</label>
                    <input type="text" name="actTipoid" id="tipoid" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["tipoid"]; ?>" readonly="readonly">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="form-group">
                    <label>Número de documento</label>
                    <input type="text" name="actId" id="id" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["id"]; ?>" readonly="readonly">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="form-group">
                    <label>Género</label>
                    <input type="text" name="actGenero" id="gender" class="form-control input-md" data-rule="minlen:3" value="<?php echo $_SESSION["genero"]; ?>" readonly="readonly">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="submit" value="ACTUALIZAR" class="btn btn-skin btn-block btn-lg">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <a href="eliminar.php" class="btn btn-skin btn-block btn-lg">ELIMINAR</a>
                    <div class="validation"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  </body>
</html>