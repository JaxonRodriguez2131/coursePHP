<?php
    $nombre = $_GET['name']; //para el metodo post utilizamos la variable global request
    $edad = $_GET['edad'];
    $sexo = $_GET['sexo'];

    echo "<p> El nombre del usuario es <p/>" . $nombre . "su edad es " . $edad;
    echo $sexo;
?>

