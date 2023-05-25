<?php
    $genero = $_REQUEST['genero'];
    $nombre = $_REQUEST['name']; //para el metodo post utilizamos la variable global request
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['rol'];
    $images = $_FILES['imagen'];
    $patch = $_SERVER['DOCUMENT_ROOT'] . '/coursePHP/imagenes' . '/' . $images['name'];

    echo $genero;
    echo "<p> El nombre del usuario es <p/>" . $nombre . "su edad es " . $edad;
    echo $sexo;
    echo "<p> roles : </p>";

    echo "<ul>";

            foreach($roles as $rol ){
                echo "<li>$rol</li>";
            }


    echo "</ul>";

    var_dump($images);
    var_dump($patch);

    move_uploaded_file($images['tmp_name'],$patch); //esta funcion sirve para mover archivos montados en un servidor
?>

