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
    <title>Citas médicas</title>
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
          <img src="img/Logo-Universidad-EAN.png" alt="" width="50" height="50"/>
        </div>
        <br>
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
                <span class="fa fa-pencil-square-o"></span> ASIGNACIÓN DE CITAS 
              </h3>
            </div>
            <div class="panel-body">
              <div id="sendmessage">Su cita se ha registrado correctamente.</div>
              <div id="errormessage"></div>
                <form action="cita2.php" method="POST" role="form" class="contactForm lead">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Especialidad</label>
                      <div class="dropdown">
                        <?php
                        if(($_SESSION["tipoid"]=="CEDULA DE CIUDADANIA")||($_SESSION["tipoid"]=="TARJETA DE IDENTIDAD")){
                          echo 
                            "<select name=\"citEspecialidad\" class=\"form-control input-md\">
                              <option value=\"MEDICINA GENERAL\" class=\"active\">Medicina General</option>
                              <option value=\"ODONTOLOGIA\" class=\"active\">Odontología</option>
                            </select>";
                        }
                        elseif($_SESSION["tipoid"]=="REGISTRO CIVIL"){
                          echo 
                            "<select name=\"citEspecialidad\" class=\"form-control input-md\">
                              <option value=\"PEDIATRIA\" class=\"active\">Pediatría</option>
                              <option value=\"ODONTOLOGIA\" class=\"active\">Odontología</option>
                            </select>";
                        }
                        ?>
                      </div>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Fecha</label>
                      <?php
                        $dia=date("j");
                        $mes=date("n");
                        $ano=date("Y");
                        $anos=$ano+1;
                        echo "<input type=\"date\" name=\"citFecha\" id=\"cit_date\" class=\"form-control input-md\" data-rule=\"minlen:3\" min=\"".$ano."-".$mes."-".$dia."\" max=\"".$anos."-".$mes."-".$dia."\"><br>";
                      ?>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <input type="submit" value="BUSCAR CITA" class="btn btn-skin btn-lg">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  </body>
</html>