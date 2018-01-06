<?php
$arrayVar = ['red', 'blue', 'black'];
var_dump($arrayVar);


// podermos establecer llaves o id's diferentes al array
$arrayVar2 = [
    'color1' => 'red', 
    0 => 'blue', 
    1=> 'black'];
var_dump($arrayVar2);
var_dump($arrayVar2['color1']);
var_dump($arrayVar2[0]);
var_dump($arrayVar2[1]);