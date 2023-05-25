<?php

    namespace clases; // se usa para identificar clases que comparten el mismo nombre

    class pais{
        public function __construct()
        {
            
        }
    }


    trait latinoamericanos{ // estos permiten la reutilizacion de codigo en diferentes metodos o clases
                            // los traits no pueden instanciarse
        protected function saludolatinoamericano(){
            echo " hola latinoamericano";
        }
    }


    class colombianos extends pais{
        public function __construct()
        {
            
        }

        use latinoamericanos{saludolatinoamericano as public;}

    }

    $colombiano = new colombianos;
    $colombiano->saludolatinoamericano();


    class peruanos extends pais {
        public function __construct()
        {
            
        }

        use latinoamericanos;
    }
?>