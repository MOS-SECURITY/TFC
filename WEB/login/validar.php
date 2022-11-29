<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

// Verificación de contraseña encriptada

//$password = hash('sha512' , $password);

$consulta="SELECT * FROM registro where usuario='$usuario'and contraseña='$password'";
$consulta_tarifa="SELECT tarifa FROM registro";
$resultado=mysqli_query($connect_db,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas && $consulta_tarifa = "tarifa1"){
  
    header("location:descarga.html");

}else if ($filas && $consulta_tarifa = "tarifa2"){

    header("location:descargaAlmacenamiento.html");

}else if ($filas && $consulta_tarifa = "tarifa3"){

  header("location:descargaRemoto.html");

} else {
  include("index.html")

  ?>
   <h1 class="bad">Usuario o contraseña incorrectos</h1><br>
   <h3 class="bad">¿No tienes cuenta?</h3>
   <h3 class="bad">¡Regístrate abajo!</h3>
 <?php
}
mysqli_free_result($resultado);
mysqli_close($connect_db);
?>