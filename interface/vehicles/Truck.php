<?php
namespace Vehicles;

require_once 'VehicleBase.php';

Class Truck extends VehicleBase {
        public static $count = 0; // no se puede acceder con this, sino con self::

        private $type;
        public function __construct($owner, $type){
            $this->type = $type;
            parent::__construct($owner); //llamamos al constructor del padre, de Vehicle
            self::$count++; // self para poder acceder a valores estaticos

        }
                public function move2() {
            echo 'Truck ' . $this->type . ' Moving<br>';
        }
        public static function getTotal() {
            return self::$count;
        }
                        public function startEngine(){
            return 'Truck: Start Motor<br>';
        }
    }