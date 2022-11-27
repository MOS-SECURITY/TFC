<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];

$insert_into_db = $connect_db->prepare("INSERT INTO registro (usuario,contraseña,correo) VALUES ('$usuario','$password','$correo')");
$insert_into_db ->execute();

if($insert_into_db){
  
    header("location:login.html");
}

?>