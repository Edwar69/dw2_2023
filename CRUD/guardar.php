<?php
include("libs/conex.php");
include("libs/personas.lib.php");
if ($_POST) {
    $err = validarPersonas($_POST);
    if (count($err) == 0) {
        if ($_POST['id'] == -1) {
            agregarPersona($_POST, $conn);
        } else {
            editarPersona($_POST, $conn);
        }
        echo "<p>soy guardar</p>"; // El código de éxito se ejecuta aquí
    } else {
        $errores = implode(',', $err);
        header('Location:index.php?mod=persona&accion=edit&errores='.$errores);
        exit;
    }
}

header('Location:index.php?mod=persona&accion=lst');
exit;
?>
