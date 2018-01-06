<?php
//-------
//diferencias entre comillas simples y dobles
$intVar = 5;
$stringVar = 'hello $intVar'; //PHP interpretara todo como una cade de string
echo $stringVar;
$stringVar = "hello $intVar"; //PHP con las "" intentara buscar las variables para imprimir su valor mientras lo que no es variable lo imprimira com ostring
echo $stringVar;


//---------

$stringVar = "hello " . $intVar; //Concatenamos una cadera con un entreno. sin importar la diferencia de variables el segiora concatenando Hello 5
echo $stringVar;
