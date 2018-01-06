<?php
namespace Vehicles;

require_once 'VehicleBase.php';

Class Car extends VehicleBase {

        
        public function move() {
            echo $this->startEngine() . '<br>';
            echo 'Car Moving<br>';
        }
        public function startEngine(){
            return 'Car: Start Motor';
        }
    }