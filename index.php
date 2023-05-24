<?php
    
    $nombre = "jaxon";
    $Nombre = "alexander";
    define('CURSO',['PHP 8 ' , 'mySQL']); //funcion para definir una constante
    $numero = 3;
    $numero2 = 3.2;
    $informacion = 'hola mi nombre es "jaxon" y tengo "29" años';
    $a = 3;
    $b = 7;
    $c = $a + $b;

    $a += $b; // a = a+b; 

    echo $nombre;
    echo "mi sistema operativo es " . PHP_OS;
    echo "<br/>";
    echo "directorio" . __FILE__;
    echo $informacion;
    echo $c;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>
            <?php echo "Hola mi nombre es " .$Nombre; //Imprimir una variable
                  echo CURSO[1]; //imprimir una constante
            ?>
        </h1>
    </section>
    <section>
        
    </section>
</body>
</html>