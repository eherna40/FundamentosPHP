<?php
namespace Vehicles;

require_once 'VehicleBase.php';

// la interface Serializable no es parte de nuestro namespace actual sino de PHP y por eso se agrea \
Class ToyCar extends VehicleBase {

        
        public function move() {
            echo $this->startEngine() . '<br>';
            echo 'Car Moving<br>';
        }
        public function startEngine(){
            // Exception es una clase por default de php
            throw new \Exception('Engine not Found');
    }
}