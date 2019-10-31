<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Suscriptores Stearket</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="resources/demos/style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body style="margin: auto; padding:10px; width: 800px; background-image: url(img/backgames.jpg)">
 
<div id="tabs">
  <ul>
    <li><a href="#ingreso">Ingreso</a></li>
    <li><a href="#listado">Listado Suscriptores</a></li>
    <!-- <li><a href="#borrar">Borrar Registro</a></li> -->
    <li><a href="#genero">Asignar Interes de Usuario</a></li>
  </ul>
  <div id="tabs-1">
    <?php
        include ("ingreso.php");
    ?>
  </div>
  <div id="tabs-2">
    <?php
        include ("listado.php");
    ?>
  </div>
  <div id="tabs-3">
    <?php
        include ("borrar.php");
    ?>
  </div>
  <div id="tabs-4">
    <?php
        include ("./php/ingreGenero.php");
    ?>
  </div>

</div>
 
</body>
</html>