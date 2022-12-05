<?php
include('db.php');
print_r($_POST);
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];
$tarifa=$_POST['tarifa'];
 
// Encriptamos contraseña

//$pass_encript = password_hash($password,PASSWORD_DEFAULT);

$insert_into_db = $connect_db->prepare("INSERT INTO registro (usuario,correo,contraseña,tarifa) VALUES ('$usuario','$correo','$password','$tarifa')");
$insertCorrecto=$insert_into_db ->execute();

if($insertCorrecto){
  
    header("location:login.html");
}
?>