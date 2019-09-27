<head>
<link rel="stylesheet" href="/style.css">
</head>
<?php
    include("conectar.php");
    $query = 'SELECT * FROM usuarios';
    $resultados=$con->query($query);
   
?>
<div id="listado">
    <table class="tabla" style="width: 650px;">
        <thead>
            <tr style="color: blue;">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Generos</th>
            </tr>     
        </thead>
               
        <?php
        foreach($resultados as $rows){
            $generos = 'SELECT generos.descripcion FROM usuarios
            JOIN interes ON id_usuario=interes.usuario
            JOIN generos ON id_gen=interes.genero
            WHERE id_usuario='.$rows["id_usuario"];
            $recorrido=$con->query($generos);
            $array_generos=[];
            foreach($recorrido as $genero){
                $array_generos[]=$genero["descripcion"];
            }
            ?>
            <tbody>
                <tr>
                    <th><?=$rows["id_usuario"]?></th>
                    <th><?=$rows["nombre"]?></th>
                    <th><?=$rows["apellido"]?></th>
                    <th><?=$rows["email"]?></th>
                    <th><?php array_map(function($genero){
                        echo $genero ." ";
                    }, $array_generos); ?>
                    </th>
                </tr>
            </tbody>
<?php
    };
    ?>
    </table>
</div>