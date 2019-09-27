<?php
    include("conectar.php");
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $sql="INSERT INTO usuarios(nombre,apellido,email)
    VALUES ('".$nombre."','".$apellido."','".$email."');";
    $count=$con->exec($sql);
    print($count." Usuario Ingresado");
    include("index.php");
?>
