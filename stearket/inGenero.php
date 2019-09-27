<?php
    include("conectar.php");
    $generos = $_POST;
    $usuario = $_POST['numeroid'];
    unset($generos['numeroid']);
    // var_dump($generos);
    foreach($generos as $valor){
        $sql="INSERT INTO interes(usuario,genero)
        VALUES ('".$usuario."','".$valor."');";
        $count=$con->exec($sql);
        print($count." Generos Ingresados");
    };
include("index.php");

?>