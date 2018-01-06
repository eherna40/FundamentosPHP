<?php
    //funciones anonimas

    $var = function () {
        echo 'This is a clousure';
        echo '<br>';
    };

    $var();

    // -------

    //una funcion anonima no tiene acceso al scoope global
    // Para que tenga acceso usamos la palabra reservada use ()
    $var2 = 1;
    $var3 = function () use ($var2) {
        echo 'This is a clousure';
        echo '<br>';
        echo 'Value: ' . $var2;
        echo '<br>';
    };

    $var3();

    $numbers = [1,2,3,4,5];
    $result = array_map(function ($n) {
        return $n * 2;
    }, $numbers);
    //array_map(es una funcion que modifica los elementos de un array. array_map((pasamos una funcion con lo qu equeremos hacer), donde guardamos el array)
    var_dump($result);
?>