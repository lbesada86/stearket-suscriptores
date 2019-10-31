<?php
    include ("conectar.php");
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $sql="INSERT INTO usuarios(nombre,apellido,email) VALUES ('".$nombre."','".$apellido."','".$email."');";
    // var_dump($sql);
    $count=$con->exec($sql);
    print($count." Usuario Ingresado");
?>

<script type="text/javascript">
window.location="./index.php";
</script>