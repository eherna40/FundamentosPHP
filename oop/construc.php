<?php
    //Programacion orientada a objetos  
    
    
    class Car{
        private $owner; // Las propiedades son lo mismo que las variables

        public function __construct($owner){ //el constructor se llama cada ver que se instacia la clase
            $this->owner = $owner; // el constructor es bueno para establecer variables iniciales
            echo 'construct<br>';
        }

        public function __destruct(){ // PHP al detectar que las variables no se usan mas, ejecuta el destruct
            echo 'destruc<br>';
        }
        public function move() { // Los metodos son lo mismo que las funciones
            echo 'moving<br>';
        }

        public function getOwner(){
            return $this->owner; // this para acceder a una propiedad de la clase
        }

        public function setOwner($owner) {
            $this->owner = $owner;
        }
    }

    echo 'Class Car<br>';
    $car = new Car('Alex');
    $car2 = new Car('Max');
    echo 'Owner Car 1: ' . $car->getOwner() . '<br>';
    echo 'Owner Car 2: ' . $car2->getOwner() . '<br>';
