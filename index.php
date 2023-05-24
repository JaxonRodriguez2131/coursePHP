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


    // condicional añidada

    if($a>$b){
        echo   " $a es mayor que $b " ;
    }elseif($a<$b){
        echo "$b es mayor que $a";
    }else{
        echo "valor de a y b son iguales ";
    }

    //operador ternario
    $m = $a>$b ?  'mayor' : 'menor';
    echo $m;

    // seleccion multiple o switch
    $z =3;
    switch($z){
        case '1' : case '2' : case '3' :
            echo "Hello world";
            break;
        case '4' : case '5' : case '6' :
            echo "hola mundo";
            break; 
    }

    //estructura match, se utiliza solo para codigo que imprime un mensaje
    echo match($z){
        1 => "lunes",
        2 => "Martes",
        3 => "miercoles"
    }

    //Estrucuta algoritmica repetitiva o bucle
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