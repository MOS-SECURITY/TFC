<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];

$insert_into_db = $connect_db->prepare("INSERT INTO registro (usuario,correo,contraseña) VALUES ('$usuario','$correo','$password')");
$insert_into_db ->execute();


?>