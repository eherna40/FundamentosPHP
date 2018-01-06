<?php
    //Programacion orientada a objetos  
     
    
    class Vehicle{
        private $owner; // Las propiedades son lo mismo que las variables

        public function __construct($owner){ //el constructor se llama cada ver que se instacia la clase
            $this->owner = $owner; // el constructor es bueno para establecer variables iniciales
            //echo 'construct<br>';
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

    Class Car extends Vehicle {
        public function move() {
            echo 'From Car moving<br>'; //se llaman desde aca las instacias hacia car
        }
    }
    Class Truck extends Vehicle {
        private $type;
        public function __construct($owner, $type){
            $this->type = $type;
            parent::__construct($owner); //llamamos al constructor del padre, de Vehicle
        }
                public function move2() {
            echo 'Truck ' . $this->type . ' Moving<br>';
        }
    }

    echo 'Class Car<br>';
    $car = new Car('Alex');
    $car->move();
    echo 'Owner Car: ' . $car->getOwner() . '<br>';
    
    echo '<br><br>';
    
    echo 'Class Truck<br>';
    $truck = new Truck('Max', 'Pickup');
    $truck->move(); // utiliza el metodo move de la clase Vehicle
    $truck->move2();
    echo 'Owner Truck: ' . $truck->getOwner() . '<br>';