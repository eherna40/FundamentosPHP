<?php
//include 'function.php' //es igual que el require, lo unico es el caso de error la diferencia
//include_once 'function.php' // Revisa si la funcion ya se incluyo, si es asi la incluye una sola vez
require 'function.php';

echo '<p>Text from index.php</p>';
$c = sum(10,1);
echo '<p>Resultado de la función es ' . $c;
