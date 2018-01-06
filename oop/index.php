<?php
    //Programacion orientada a objetos  
    
    
    class Car{
        public $owner; // Las propiedades son lo mismo que las variables
        private $owner2 = 'Mike'; // Las propiedades son lo mismo que las variables

        public function move() { // Los metodos son lo mismo que las funciones
            echo 'moving<br>';
        }

        public function getOwner(){
            return $this->owner2; // this para acceder a una propiedad de la clase
        }

        public function setOwner($owner) {
            $this->owner2 = $owner;
        }
    }

    echo 'Class Car<br>';
    $car = new Car(); // Creamos nuestra instancia de la clase Car()
    $car->move(); // LLamamos el metodo move() desde nuestra variable car

    $car->owner = 'Alex'; // Establecemos valor a la variable o propiedad public $owner
    echo 'Owner: ' . $car->owner . '<br>';

    //------

    //Para acceder a las propiedades de una clases desde fuera de la clase, se debe crear la propiedad como public, en caso de que sea private tenemos una manera de modificarla desde un metodo
    echo 'Owner2: ' . $car->getOwner() . '<br>';

    // cambiamos el valor de owner2 
    $car->setOwner('Emilio');
    echo 'New Owner2: ' . $car->getOwner() . '<br>';

    // creamos nuevo coche y listamos owner2 
    $car2 = new Car();
    $car->setOwner('Maria');
    $car2->setOwner('Jose');
    echo 'Owner2 Car 1: ' . $car->getOwner() . '<br>';
    echo 'Owner2 Car 2: ' . $car2->getOwner() . '<br>';

