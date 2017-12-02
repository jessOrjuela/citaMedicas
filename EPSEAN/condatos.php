<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location: index.php");
  }
  $conexion=mysqli_connect("localhost","root","siembo25","EPSEAN");
  $notificacion="";
  $flag="NO";
  $algoSalioMal="NO";
  $conCorreo="SELECT afi_correo FROM afiliado WHERE afi_id != '".$_SESSION["id"]."'";
  $ejeconCorreo=mysqli_query($conexion,$conCorreo);
  while($fejeconCorreo=mysqli_fetch_array($ejeconCorreo)){
    if($_POST["actCorreo"]==$fejeconCorreo["afi_correo"]){
      $flag="SI";
    }
  }
  if(trim($_POST["actCorreo"]=='')||trim($_POST["actNombres"]=='')||trim($_POST["actApellidos"]=='')||trim($_POST["actTelefono"]=='')||trim($_POST["actFecha"]=='')){
    $notificacion="<label>Para realizar la actualización es necesario ingresar los datos completos.</label>";
    $algoSalioMal="SI";
  }
  else{
    if($flag=="SI"){
      $notificacion="<label>El correo electrónico introducido se encuentra en uso.</label><br>";
      $algoSalioMal="SI";
    }
    elseif(filter_var($_POST["actCorreo"],FILTER_VALIDATE_EMAIL)===FALSE){
      $notificacion="<label>El correo eléctronico ingresado es inválido.</label><br>";
      $algoSalioMal="SI";
    }
    else{
      $_SESSION["correo"]=$_POST["actCorreo"];
    }
    if(filter_var($_POST["actTelefono"],FILTER_VALIDATE_INT)===FALSE){
      $notificacion=$notificacion."<label>El número de teléfono ingresado es inválido.</label>";
      $algoSalioMal="SI";
    }
    else{
      $_SESSION["telefono"]=$_POST["actTelefono"];
    }
    if($algoSalioMal=="NO"){
      $conNombre="UPDATE afiliado SET afi_nombres='".$_POST["actNombres"]."' WHERE afi_id=".$_SESSION["id"];
      $actNombre=mysqli_query($conexion,$conNombre);
      $_SESSION["nombre"]=$_POST["actNombres"];
      $conApellido="UPDATE afiliado SET afi_apellidos='".$_POST["actApellidos"]."' WHERE afi_id=".$_SESSION["id"];
      $actApellido=mysqli_query($conexion,$conApellido);
      $_SESSION["apellido"]=$_POST["actApellidos"];
      $conFecha="UPDATE afiliado SET afi_fechanacimiento='".$_POST["actFecha"]."' WHERE afi_id=".$_SESSION["id"];
      $actFecha=mysqli_query($conexion,$conFecha);
      $_SESSION["fechaNac"]=$_POST["actFecha"];
      $conEdad="UPDATE afiliado SET afi_edad=TIMESTAMPDIFF(YEAR,afi_fechanacimiento,CURRENT_DATE()) WHERE afi_id=".$_SESSION["id"];
      $actEdad=mysqli_query($conexion,$conEdad);
      $queEdad="SELECT afi_edad FROM afiliado WHERE afi_id=".$_SESSION["id"];
      $ejeEdad=mysqli_query($conexion,$queEdad);
      $fejeEdad=mysqli_fetch_array($ejeEdad);
      $_SESSION["edad"]=$fejeEdad["afi_edad"];
      $conTipoidCC="UPDATE afiliado SET afi_tipoid='CEDULA DE CIUDADANIA' WHERE afi_edad>=18";
      $actTipoidCC=mysqli_query($conexion,$conTipoidCC);
      $conTipoidTI="UPDATE afiliado SET afi_tipoid='TARJETA DE IDENTIDAD' WHERE afi_edad>=7 AND afi_edad<18";
      $actTipoidCC=mysqli_query($conexion,$conTipoidTI);
      $conTipoidRC="UPDATE afiliado SET afi_tipoid='REGISTRO CIVIL' WHERE afi_edad>=0 AND afi_edad<7";
      $actTipoidCC=mysqli_query($conexion,$conTipoidRC);
      $queTipoid="SELECT afi_tipoid FROM afiliado WHERE afi_id=".$_SESSION["id"];
      $ejeTipoid=mysqli_query($conexion,$queTipoid);
      $fejeTipoid=mysqli_fetch_array($ejeTipoid);
      $_SESSION["tipoid"]=$fejeTipoid["afi_tipoid"];
      $notificacion="<label>Sus datos personales han sido actualizados satisfactoriamente.</label>";
    }  
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Confirmación actualización</title>
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
                <span class="fa fa-pencil-square-o"></span>CONFIRMACIÓN ACTUALIZACIÓN DE DATOS
              </h3>
            </div>
            <form action="" method="post" role="form" class="contactForm lead">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <?php
                      echo $notificacion;
                    ?>
                  </div>
                </div>
              </div>
              <a href="PARTE2.php" class="btn btn-skin btn-lg">VOLVER</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>