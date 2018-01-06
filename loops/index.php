<?php
    for ($i = 0; $i <= 10; $i++){
        echo $i . '<br>';
    }
    
    $i = 0;
    while ($i <= 10) {
        echo $i . '<br>';
        $i++;
    } 

    $i = 11;
    do {
        echo $i . '<br>';
        $i++;
    } while ($i <= 10);


    $names = ['alex' , 'carlos' , 'maria'];
    foreach ($names as $name){
        echo $name . '<br>';
    }

    foreach ($names as $key => $name){
        echo $key . '- ' . $name . '<br>';
    }

?>