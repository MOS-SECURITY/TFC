<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];

$insert_into_db = $connect_db->prepare("INSERT INTO registro (usuario,correo,contraseña) VALUES ('$usuario','$correo','$password')");
$insert_into_db ->execute();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="../img/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="Caja ">
  <form action="" method="post">
<section class="form-register">
    <h3 class="animate__animated animate__backInLeft">Registrate en MoS SECURITY</h3>
    <input class="controls" type="text" name="usuario" id="usuario" placeholder="Introduzca su usuario">
    <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    
    <input class="botons btn-success" type="submit" value="Registrarse">
    <p><a href="./login.html">Volver a inicio de sesión</a></p>
    
  </section>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/morphext/morphext.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/stickyjs/sticky.js"></script>
  <script src="../lib/easing/easing.js"></script>
  

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../js/custom.js"></script>
  <script src="../js/slider.js"></script>

  <script src="../contactform/contactform.js"></script>



</body>
</html>