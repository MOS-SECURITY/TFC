<?php 

include ("./conexion_db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r($_POST) ;
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['mensaje'];

    $insert_into_db = $connect_db->prepare("INSERT INTO formulario (nombre,email,asunto,mensaje) VALUES ('$nombre','$email','$asunto','$mensaje')");
    $insert_into_db ->execute();
}