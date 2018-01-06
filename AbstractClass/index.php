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
    echo 'Total Trucks fom getTotal: ' . Truck::getTotal() . '<br>'; //para acceder a metodos o variables estaticas
    
    echo '<br><br>';

    // Si la clase VehicleBase es abstracta nos dara error
    // $v1 = new \Vehicles\VehicleBase('Maria'); //nueva intancia a la calse VehicleBase desde nombre completo sin usar use
    // $v1->move();

