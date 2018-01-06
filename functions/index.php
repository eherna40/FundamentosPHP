<?php

    function hello() {
        echo 'Hello';
        echo '<br>';
    }

    hello();

    function hello2($name) {
        echo "Hola $name";
        echo '<br>';
    }

    hello2('Emilio');
    hello2('Carlos');

    function sum($a, $b) {
        $r = $a + $b;
        echo 'La suma es de ' . $r;
        echo '<br>';

    }

    sum (2,1);

    function sum2($a, $b) {
        return $a + $b;
    }

    $r = sum2(2,1);
    echo "Retornado de la funcion sum2 $r";
    echo '<br>';

    // -----
    $x = 100;

    function scope($a, $b) {
        $x =  $a + $b;
        return $x;
    }

    $c = scope(2,1);
    echo "Retornado de la funcion scope $c";
    echo '<br>';
    var_dump($x);



?>