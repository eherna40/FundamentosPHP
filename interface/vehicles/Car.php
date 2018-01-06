<?php
namespace Vehicles;

require_once 'VehicleBase.php';

// la interface Serializable no es parte de nuestro namespace actual sino de PHP y por eso se agrea \
Class Car extends VehicleBase implements \Serializable {

        
        public function move() {
            echo $this->startEngine() . '<br>';
            echo 'Car Moving<br>';
        }
        public function startEngine(){
            return 'Car: Start Motor';
        }

        public function serialize(){
            echo 'Serialize<br>';
            return $this->owner;
        }

        public function unserialize($serialized) {
            echo 'Unserialize<br>';
            $this->owner = $serialized;
        }
    }