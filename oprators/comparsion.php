<?php

    $v1 = 10;
    $v2 = 12;

    $result = $v1 == $v2; // devolvera un false, $result = false

    var_dump($result);


    // -------

    $v1 = 10;
    $v2 = '10';

    $result = $v1 == $v2; // devolvera un true, $result = true, ya que php convertira a entero el $v2 y lo comparara con $v1

    var_dump($result);

    $v1 = 10;
    $v2 = '10';

    $result = $v1 === $v2; // verifica que los valores seran iguales tanto en resultado como en tipo de dato. resutl = true
    var_dump($result);

    // -------

    $v1 = '10';
    $v2 = '10';

    $result = $v1 != $v2; // comprara si el resultado es diferente, result = false se puede usar !==

    var_dump($result);

    // -------

    //Operador <=> (PHP7) para comprar si es menor, igual o mayor El operador <=> tiene tres opciones de resultado: 
    //A) 0 en caso de que los dos elementos sean iguales.
    //B) -1 en caso de que el primer elemento sea menor.    
    //C) 1 en caso de que el primer elemento sea mayor.

    $v1 = '10';
    $v2 = '10';

    $result = $v1 <=> $v2; // Result = 0, ya uqe son iguales los dos valores

    var_dump($result);

?>