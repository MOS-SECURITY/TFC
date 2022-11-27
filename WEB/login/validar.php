<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="SELECT * FROM registro where usuario='$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:descarga.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">Usuario o contraseña incorrectos</h1> <br>
  <h3 class="bad">¿O no tienes cuenta?</h3>
  <h3 class="bad">¿Regístrate abajo!</h3>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>