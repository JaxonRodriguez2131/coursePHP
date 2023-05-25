<?php


    interface iTemplate{
        public function setVariable();
        public function getHtml();

    }

    class personas implements iTemplate{
        public $nombre,$edad;
        public $apellido1,$apellido2;
        protected $protected = "protected";

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre);
        }

        public function setVariable(){

        }

        public function getHtml(){

        }

        public function setApellido($apellido1,$apellido2){
            $this->$apellido1 = strtolower($apellido1);
            $this->$apellido2 = strtolower($apellido2);


        }

        public function getNombre(){
            return ucwords($this->nombre);
        }

    }



    class peruano extends personas{
        public $departamento , $ciudad;

        public function setApellido($apellido1,$apellido2){
           
            parent::setApellido($apellido1,$apellido2);
            echo "apellido asignados con exito";

        }

    }


    class colombiano extends personas{
        public $departamento, $region;

    }


    abstract class calseabstracta
    {
        abstract protected function getValor();
        abstract protected function valorPrefijo($prefijo);

        public function imprimir(){
            echo $this-> getValor();
        }

    }

    class claseConcreta extends calseabstracta
    {
        protected function getValor(){
            
        }

        protected function valorPrefijo($prefijo){

        }
    }

?>