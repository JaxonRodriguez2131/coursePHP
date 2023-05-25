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
    };

    //Estrucuta algoritmica repetitiva indefinida  o bucle indefinida
    $jaxon = 1;

    while($jaxon <= 10){
        echo $jaxon;
        echo "<br/>";
        $jaxon++;
    }

    do{
        echo "La condicion se ejecuta al menos una vez";
    }while($jaxon == 10);

    // base = 2 exponente = 5
    $base = 2;
    $exp = 5;
    $cont = 1;
    $valorexp = 1 ; 

    while($cont<=$exp){
       $valorexp = $valorexp * $base;
       $cont++;
    }
    echo "<br/>";
    echo "resultado = $valorexp";

    // bucles definidos o secuencias algoritmicas repetitivas definidas
    for($i = 0 ; $i<=$exp ; $i++){
        $valorexp = $valorexp * $base;
    }

    echo "<br/>";
    echo "resultado = $valorexp";


    $filas = 10;

    for ($i= 1 ; $i <= $filas ; $i++) { 
         for ($j=1; $j <= $i ; $j++) { 
              echo "*";
         }
         echo "<br/>";
    }

    $nombres = ['victor','pedro','paco'];

    foreach ($nombres as $indice => $nombre) {
        echo $nombre . "indice $indice";
        echo "<br/>";
    }
    //Ademas de las condiciones se pueden controlar la continuidad de los bucles con continue and break

    //Funciones, son lineas de codigo que ejecutan acciones que pueden usar varias veces en nuestro codigo
    // Hay dos tipos de funciones, prestablecidas, ya creadas que vienen con php y propias

    //Estos son algunos ejemplos de funciones prestablecidas 
    echo "tiempo" . time() . "<br/>"; //una marca de tiempo
    echo "raiz cuadrada de 9 " . sqrt(9) . "<br/>"; //para sacar raiz cuadrada de un numero
    echo "numero aleatorio entre 0 y 100 = " . rand(0,100) . "<br/>"; // para un numero aleatorio
    echo "pi = " . pi(); // el valor de pi

    // como crear funciones propias

    function factorial($parametro){
        $factorial = 1;
        for ($i=1; $i <=$parametro ; $i++) { 
            $factorial = $factorial * $i;
        }
        echo "el factorial de $parametro es " . $factorial;
        return $factorial;
    }
    echo "<br/>";
    $answer = factorial(10);
    echo $answer;

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