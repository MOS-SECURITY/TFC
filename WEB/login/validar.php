<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta=$connect_db->query("SELECT * FROM registro where usuario='$usuario'and contraseña='$password'");

foreach($consulta as $rr) {
  $tarifa = $rr['tarifa'];
};

 echo $tarifa;

if($tarifa == "Servicios Completos"){
  
    header("location:descarga.html");

}else if ($tarifa == "Servicios de Almacenamiento"){

    header("location:descargaAlmacenamiento.html");

}else if ($tarifa == "Servicios Remotos"){

  header("location:descargaRemoto.html");

} else {
  header("location:login.html");

  ?>
   <h1 class="bad">Usuario o contraseña incorrectos</h1><br>
   <h3 class="bad">¿No tienes cuenta?</h3>
   <h3 class="bad">¡Regístrate abajo!</h3>
 <?php
} 
mysqli_close($connect_db);
?>