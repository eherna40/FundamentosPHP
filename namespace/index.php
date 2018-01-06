<?php

    include 'vehicles/Truck.php';
    include 'vehicles/Car.php';
    
    
    use Vehicles\{Car, Truck};

    echo 'Class Car<br>';
    $car = new Car('Alex');
    $car->move();
    echo 'Owner Car: ' . $car->getOwner() . '<br>';
    
    echo '<br><br>';
    
    echo 'Class Truck 1<br>';
    $truck = new Truck('Max', 'Pickup');
    $truck->move(); // utiliza el metodo move de la clase Vehicle
    $truck->move2();
    echo 'Owner Truck: ' . $truck->getOwner() . '<br>';

        echo '<br><br>';
    
    echo 'Class Truck 2<br>';
    $truck = new Truck('Emilio  ', 'Pickup');
    $truck->move(); // utiliza el metodo move de la clase Vehicle
    $truck->move2();
    echo 'Owner Truck: ' . $truck->getOwner() . '<br>';

    echo '<br>Total Trucks: ' . Truck::$count . '<br>'; //para acceder a metodos o variables estaticas
    echo '<br>Total Trucks fom getTotal: ' . Truck::getTotal() . '<br>'; //para acceder a metodos o variables estaticas




