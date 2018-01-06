<?php
    $a = 2;
    $b = 1;

    $c = $a + $b;
    var_dump($c);
    echo " Suma = $a + $b = $c";

    $c = $a - $b;
    var_dump($c);
    echo " Resta = $a - $b = $c";

    $c = $a * $b;
    var_dump($c);
    echo " Multiplicación = $a * $b = $c";

    $a = 10;
    $b = 3;
    $c = $a / $b;
    var_dump($c);
    echo " División = $a / $b = $c"; // Devuel un float ya que 10/3 es 3.3333

    $a = 10;
    $b = 3;
    $c = (int)($a / $b); // Devuelve solo la parte entera del float 3
    var_dump($c);
    echo " División = $a / $b = $c"; 

    $a = 10;
    $b = 3;
    $c = $a%$b; // Devuelve solo la parte entera del float 3
    var_dump($c);
    echo " Residulo de la divición = $a / $b = $c";
?>