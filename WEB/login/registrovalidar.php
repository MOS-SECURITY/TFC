<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];


$insert="INSERT INTO clientes (usuario, contraseña, correo)
            VALUES('$usuario','$password','$correo')";
$resultado=mysqli_query($conexion,$insert);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:primerlogin.html");

}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>