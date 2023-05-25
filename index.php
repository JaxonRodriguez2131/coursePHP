<?php
    declare(strict_types=1); //esta funcion sirve para cuando definimos un tipado fuerte 

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
    echo $answer . "<br/>";

    //Ambito de variables, locales y globales

    //las funciones se consideran bloques de codigo independientes, es decir no se pueden usar
    // variables que se hayan definido fuera de ellas
    //para acceder a las variables globales dentro de funciones usamos el atributo global y asi podemos
    // modificar su valor

    $f = 5;
    $g = 10;
    function variable(&$n){ // cuando agregamos este simbolo & no solo pasamos el valor de la variables
        $n+=10;             // si no todos sus atributos y asi los cambios que hagamos dentro de una funcion
                            // se veran reflejados de forma global 
    }

    variable($f);
    variable($g);

    echo $f . "<br/>";
    echo $g;

    //en caso que desconozcamos la cantidad de atributos que debe recibir una funcion la declaramos de la 
    // siguien manera

    function concatenar(...$palabras){ //esto lo que hace es que junta todos los valores en un array 
            $resultado = "" ;
            foreach ($palabras as $palabra) {
                $resultado = $resultado . $palabra . " ";
            }
            echo $resultado;
    }

    concatenar("curso" , "php" , "desde" , "cero");


    $steve = 5 ; 

    function sumarEnteros(int $entero1 , int $entero2):int | float //sirve para declara que se devuelva un tipo
    {                                                      // de dato en especifico
        return $entero1 + $entero2;
    }

    // podemos especificar tipos de datos int, float,string,boolean,array,object,null

    $resultadosumaE = sumarEnteros($f , $steve);
    echo $resultadosumaE;


    //cadenas

    $cadena = "jaxon alexander rodriguez cardona";
    $cadena1 = "pepe mujica";

    echo $cadena[1] . "<br/>"; //imprime un caracter especifico de una cadena
    echo mb_strlen($cadena); // devuelve la longitud de una cadena
    echo strpos($cadena,'i');// devuelve la posicion del caracter que le demos a buscar dentro de la cadena
    echo str_contains($cadena,'jaxon'); // devuelve falso o verdadero si encuentra una cedan dentro de otra cadena
    echo str_starts_with($cadena , 'jaxon'); // devuelve f o v si una cadena empieza con el parametro que le demos
    echo str_ends_with($cadena , 'jaxon'); // devuelve f o v si una cadena finaliza con el parametro que le demos
    
    //funcion para comparar dos cadenas de texto
    if(strcmp($cadena1 , $cadena) == 0 ){
        echo "las dos cadenas son iguales";
    }else{
        echo "las cadenas son diferentes";
    }

    substr($cadena1 , 3 , 7); //funcion para extraer una subcadena, le podremos indicar el indice inicio
                            // y fun de la subcadena
    echo str_replace("mujica" , "osvaldo" , $cadena1); //remplazar caracteres en una cadena
    echo strtolower($cadena1); // convierte una cadena a minisculas
    echo strtoupper($cadena1); // convierte una cadena en mayuscula
    echo ucwords($cadena); //convierte la primera letra de cada palabra en mayuscula

    //Arrays 

    $datos = [
        'nombre' => 'jaxon',
        'email' => 'alexander'
    ];

    echo $datos['nombre'];

    //de esta forma modificamos su indice para que sea mas facil identificar sus elementos
    // es decir no busca por numeros si no por el nombre que le dimos al indice
    

    // Arrays multidimensionales

    $data = [
        [
            'nombre' => 'camilo',
            'email' => 'valencia' 
        ],

        [
            'nombre' => 'mary',
            'email' => 'cardona'
        ],

        [
            'nombre' => 'pepe ',
            'email' => 'mujica'
        ]

    ];

    foreach($data as $datos){
        echo $datos['nombre'] . "<br/>";
    }

    //funciones para los arrays 

    $variablem;
    $variablej;
    $variablek;

    $datosmix = [1,2,3];

    list($variablem,$variablej,$variablek) = $datosmix; // esta funcion sirve para almacenar el indice de un array en una variable
    $datosmix = range(10,20); //almacena en el array un rango de numeros
    echo count($datosmix); //cuenta los elementos de un array

    if(in_array(11,$datosmix)){ //funcion para buscar un elemento en un array
        echo "el numero 11 de encuentea en el array";
    }

    unset($datosmix[4]); //elimina un elemento de un array



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

        <form action="procesar.php" method="GET">

            <label for="name">ingresa tu nombre</label>
            <input type="text" id="name" name="name">

            <label for="edad">ingresa tu edad</label>
            <input type="number" id="edad" name="edad">

            <label for="">ingresa tu genero</label>

            <input type="radio" id="masculino" name="sexo" value="masculino">
            <label for="sexo">Maculino</label>

            <input type="radio" id="femenino" name="sexo" value="femenino"> 
            <label for="sexo">Femenino</label>
           
            <input type="submit" value="enviar">
        </form>

        
       
    </section>

    <section>

    </section>
</body>
</html>