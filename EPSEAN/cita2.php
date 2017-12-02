<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location: index.php");
  }
  $conexion=mysqli_connect("localhost","root","siembo25","EPSEAN");
  $notificacion="";
  if(trim($_POST["citFecha"])==''){
    $notificacion="Ingrese una fecha válida";
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
              <a href="cita.php">Volver</a>
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
              <?php
                $concita="SELECT cita.cit_fecha, cita.cit_hora, medico.med_nombres, medico.med_apellidos FROM cita INNER JOIN medico ON cita.cit_medico=medico.med_id WHERE cita.cit_fecha='".$_POST["citFecha"]."' AND medico.med_especialidad='".$_POST["citEspecialidad"]."' AND cita.cit_estado='1'";
                $ejeconcita=mysqli_query($conexion,$concita);
                $contador=0;
                while($fejeconcita=mysqli_fetch_array($ejeconcita)){
                  $contador=$contador+1;
                }
                $_POST["contador"]=$contador;
                if($notificacion==""&&$contador!=0){
                  echo "<form action=\"concita.php\" method=\"POST\" role=\"form\" class=\"contactForm lead\">";
                }
                else{
                  echo "<form action=\"cita.php\" role=\"form\" class=\"contactForm lead\">";
                }
              ?>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Especialidad</label>
                      <div class="dropdown">
                        <input type="text" value="<?php echo $_POST["citEspecialidad"]; ?>" readonly="readonly" class="form-control input-md">
                      </div>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Fecha</label>
                      <input type="date" id="cit_date" class="form-control input-md" data-rule="minlen:3" readonly="readonly" value="<?php echo $_POST["citFecha"] ?>">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <?php
                        if($notificacion==""&&$contador!=0){
                          echo "<label>Citas disponibles</label>";
                        }
                        elseif($notificacion==""&&$contador==0){
                          echo "No hay citas disponibles para esta fecha.";
                        }
                        else{
                          echo $notificacion;
                        }
                      ?>
                      <div class="container">
                        <?php
                          $concita="SELECT cita.cit_fecha, cita.cit_hora, medico.med_nombres, medico.med_apellidos FROM cita INNER JOIN medico ON cita.cit_medico=medico.med_id WHERE cita.cit_fecha='".$_POST["citFecha"]."' AND medico.med_especialidad='".$_POST["citEspecialidad"]."' AND cita.cit_estado='1'";
                          $ejeconcita=mysqli_query($conexion,$concita);
                          while($fejeconcita=mysqli_fetch_array($ejeconcita)){
                            echo "<div class=\"checkbox\">
                                  <input type=\"radio\" name=\"eleccion\">".$fejeconcita["cit_fecha"]." - ".$fejeconcita["cit_hora"]." - ".$fejeconcita["med_nombres"]." ".$fejeconcita["med_apellidos"].
                                  "</div>";
                          }
                         ?> 
                      </div>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <?php
                    if($notificacion!=""||$contador==0){
                      echo "<input type=\"submit\" value=\"VOLVER\" class=\"btn btn-skin btn-lg\">";
                    }
                    else{
                      echo "<input type=\"submit\" value=\"PEDIR CITA\" class=\"btn btn-skin btn-lg\">";
                    }
                  ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  </body>
</html>