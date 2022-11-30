<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

// Verificación de contraseña encriptada

//$password = hash('sha512' , $password);

$consulta=$connect_db->query("SELECT * FROM registro where usuario='$usuario'and contraseña='$password'");

foreach($consulta as $rr) {
  $tarifa = $rr['tarifa'];
};

echo $tarifa;

// $filas=mysqli_num_rows($resultado);

if($tarifa == "tarifaCompleta"){
  
    header("location:descarga.html");

}else if ($tarifa == "tarifaAlmacenamiento"){

    header("location:descargaAlmacenamiento.html");

}else if ($tarifa == "tarifaRemoto"){

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