<?php
try {
    $connect_db = new PDO(
                    'mysql:host=127.0.0.1;dbname=mos',
                    'miguel',
                    'Clave_00'
                );
    $connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>