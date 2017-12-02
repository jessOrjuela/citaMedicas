<?php
  session_start();
  $_SESSION["tipoid"]=$_POST["tipoid"];
  $_SESSION["id"]=$_POST["id"];
  $_SESSION["correo"]=$_POST["correo"];
  $conexion=mysqli_connect("localhost","root","siembo25","EPSEAN");
  $consultaEdad="SELECT afi_edad FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $edad=mysqli_query($conexion,$consultaEdad);
  $fedad=mysqli_fetch_array($edad);
  $_SESSION["edad"]=$fedad["afi_edad"];
  $consultaFechaNac="SELECT afi_fechanacimiento FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $fechaNac=mysqli_query($conexion,$consultaFechaNac);
  $ffechaNac=mysqli_fetch_array($fechaNac);
  $_SESSION["fechaNac"]=$ffechaNac["afi_fechanacimiento"];
  $consultaTelefono="SELECT afi_telefono FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $telefono=mysqli_query($conexion,$consultaTelefono);
  $ftelefono=mysqli_fetch_array($telefono);
  $_SESSION["telefono"]=$ftelefono["afi_telefono"];
  $consultaNombre="SELECT afi_nombres FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $nombre=mysqli_query($conexion,$consultaNombre);
  $fnombre=mysqli_fetch_array($nombre);
  $_SESSION["nombre"]=$fnombre["afi_nombres"];
  $consultaApellido="SELECT afi_apellidos FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $apellido=mysqli_query($conexion,$consultaApellido);
  $fapellido=mysqli_fetch_array($apellido);
  $_SESSION["apellido"]=$fapellido["afi_apellidos"];
  $consultaGenero="SELECT afi_genero FROM afiliado WHERE afi_id='".$_SESSION["id"]."'";
  $genero=mysqli_query($conexion,$consultaGenero);
  $fgenero=mysqli_fetch_array($genero);
  $_SESSION["genero"]=$fgenero["afi_genero"];
  $consulta="SELECT * FROM afiliado";
  $datos=mysqli_query($conexion,$consulta);
  $flag="NO";
  while($fila=mysqli_fetch_array($datos)){
    if(($fila["afi_correo"]==$_SESSION["correo"])&&($fila["afi_id"]==$_SESSION["id"])&&($fila["afi_tipoid"]==$_SESSION["tipoid"])){
      $flag="SI";
    }
  }
  if($flag=="SI"){
    header('Location: PARTE2.php');
  }
  else{
    header('Location: notiacceso.php');
  }
?>