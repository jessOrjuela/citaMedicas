<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Notificación de registro</title>
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
  <body>
    <div class="col-lg-6">
      <div class="form-wrapper">
        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
          <div class="panel panel-skin">
            <div class="panel-heading">
              <h3 class="panel-title">
                <span class="fa fa-pencil-square-o"></span>NOTIFICACIÓN DE REGISTRO
              </h3>
            </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <?php
                      $conexion=mysqli_connect("localhost","root","siembo25","EPSEAN");
                      $consultaId="SELECT afi_id FROM afiliado";
                      $ejeconsultaId=mysqli_query($conexion,$consultaId);
                      $flagId="NO";
                      while($fejeconsultaId=mysqli_fetch_array($ejeconsultaId)){
                        if($_POST["regId"]==$fejeconsultaId["afi_id"]){
                          $flagId="SI";
                        }
                      }
                      $consultaCorreo="SELECT afi_correo FROM afiliado";
                      $ejeconsultaCorreo=mysqli_query($conexion,$consultaCorreo);
                      $flagCorreo="NO";
                      while($fejeconsultaCorreo=mysqli_fetch_array($ejeconsultaCorreo)){
                        if($_POST["regCorreo"]==$fejeconsultaCorreo["afi_correo"]){
                          $flagCorreo="SI";
                        }
                      }
                      list($ano,$mes,$dia) = explode("-",$_POST["regFecha"]);
                      $diaActual=date("j");
                      $mesActual=date("n");
                      $anoActual=date("Y");
                      if ((($mes==$mesActual)&&($dia>$diaActual))||($mes > $mesActual)) {
                        $anoActual=$anoActual-1; 
                      }
                      $edad=$anoActual-$ano;
                      $tipoid="";
                      if($edad>=0&&$edad<7){
                        $tipoid="REGISTRO CIVIL";
                      }
                      else if($edad>=7&&$edad<18){
                        $tipoid="TARJETA DE IDENTIDAD";
                      }
                      else if($edad>=18){
                        $tipoid="CEDULA DE CIUDADANIA";
                      }
                      $algoSalioMal="NO";
                      if(trim($_POST["regCorreo"]=='')||trim($_POST["regId"]=='')||trim($_POST["regNombres"]=='')||trim($_POST["regApellidos"]=='')||trim($_POST["regTelefono"]=='')||trim($_POST["regId"]=='')||trim($_POST["regFecha"]=='')){
                        echo "<label>Ingrese sus datos de registro completos.</label>";
                        $algoSalioMal="SI";
                      }
                      else {
                        if(filter_var($_POST["regId"],FILTER_VALIDATE_INT)===FALSE){
                          echo "<label>Su documento de identidad no es válido.</label><br>";
                          $algoSalioMal="SI";
                        }
                        if(filter_var($_POST["regCorreo"],FILTER_VALIDATE_EMAIL)===FALSE){
                          echo "<label>Su correo electrónico no es válido.</label><br>";
                          $algoSalioMal="SI";
                        }
                        if(filter_var($_POST["regTelefono"],FILTER_VALIDATE_INT)===FALSE){
                          echo "<label>Su número de teléfono no es válido.</label><br>";
                          $algoSalioMal="SI";
                        }
                      }  
                      if($flagId=="SI"&&$flagCorreo=="SI"){
                        echo "<label>Los datos de acceso ya se encuentran en uso.</label>";
                        $algoSalioMal="SI";
                      }
                      else {
                        if($flagId=="SI"){
                          echo "<label>El número de identificación ya se encuentra registrado.</label>";
                          $algoSalioMal="SI";
                        }
                        if($flagCorreo=="SI"){
                          echo "<label>El correo electrónico ya se encuentra registrado.</label>";
                          $algoSalioMal="SI";
                        }
                      }
                      if($tipoid!=$_POST["regTipoid"]){
                        echo "<label>Escoga un tipo de documento acorde a su edad.</label>";
                          $algoSalioMal="SI";
                      }  
                    ?>
                  </div>
                </div>
              </div>
              <?php
                if($algoSalioMal=="NO"){
                  echo "<label>Ha culminado satisfactoriamente el registro.</label><br>";
                  echo "<a href=\"index.php\" class=\"btn btn-skin btn-lg\">INGRESAR</a>";
                  $addRegistro="INSERT INTO afiliado (afi_id,afi_tipoid,afi_nombres,afi_apellidos,afi_fechanacimiento,afi_edad,afi_genero,afi_telefono,afi_correo) VALUES ('".$_POST["regId"]."','".$_POST["regTipoid"]."','".$_POST["regNombres"]."','".$_POST["regApellidos"]."','".$_POST["regFecha"]."','".$edad."','".$_POST["regGenero"]."','".$_POST["regTelefono"]."','".$_POST["regCorreo"]."')";
                    $ejeaddRegistro=mysqli_query($conexion,$addRegistro);
                }  
                else{
                  echo "<a href=\"registro.php\" class=\"btn btn-skin btn-lg\">VOLVER</a>";
                }
              ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>