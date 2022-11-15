<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT * FROM clientes where usuario='$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:descarga.php");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">Usuario o contraseña incorrectos</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>