<?php
    $array1 = [
        0 => 'a',
        1 => 'b',
        2 => 'c'
    ];
    $array2 = [
        3 => 'd',
        4 => 'e',
    ];

    $result = $array1 + $array2; //une los dos array con sus id concatenados
    //var_dump($result);
    
    
    // ------
    $array1 = [
        0 => 'a',
        1 => 'b',
        2 => 'c'
    ];
    $array2 = [
        2 => 'd',
        4 => 'e',
    ];

    $result = $array1 + $array2; //omite el valor 'd' con llave 2 ya que coge solo la primera que es 'c' y la que esta repetida la elimina
    //var_dump($result)

    // ------

    $array1 = [
        0 => 'a',
        1 => 'b',
        2 => 'c'
    ];
    $array2 = ['a', 'b', 'c'];

    $result = $array1 == $array2; // Sus valores son iguales y en el mismo orden y devuele $result = true
    //var_dump($result);


        $array1 = [
        0 => 'c',
        1 => 'a',
        2 => 'b'
    ];
    $array2 = ['a', 'b', 'c'];

    $result = $array1 === $array2; // Sus valores son iguales pero no estan en el mismo orden y devuele $result = false
    var_dump($result);
?>