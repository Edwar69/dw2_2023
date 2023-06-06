<?php
include("libs/conex.php");
include("libs/ciudades.lib.php");
include("libs/personas.lib.php");

if (!isset($_GET["mod"])) { 
    $_GET["mod"] = "persona";
}

if (!isset($_GET["accion"])) { 
    $_GET["accion"] = "lst";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas De Personas</title>
    <style>
        /* Estilos para el título */
        h1 {
            color: blue;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
        <h1>Listas de:</h1>

<?php
if ($_GET["mod"] == "persona" && $_GET["accion"] == "lst")
{
    include("list.php");
} elseif ($_GET["mod"] == "persona" && ($_GET["accion"] == "nuevo" || $_GET["accion"] == "edit"))
{
    include("form.php");  
} elseif ($_GET["mod"] == "persona" && $_GET["accion"] == "borrar")
{
    include("borrar.php");    
} else 
{
    include("list.php"); 
}

?>
</body>
</html>
