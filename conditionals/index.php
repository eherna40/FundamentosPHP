<?php
    $color = 'white';

    if ($color == 'white'){
        echo 'Color is Black';
    } elseif ($color == 'white'){
        echo 'Color is White';  
    } else {
        echo 'Color not found.';
    }
    
    echo '<br>';

    //switch($variableAEvaluar){
    // Desarrollar los casos = case
    // Finalizar con Break
    //}
    switch ($color) {
    case 'black':
        echo 'Color is black';
        break;
    
    case 'white':
        echo 'Color is white';
        break;
    
    default:
        echo 'Other case';
        break;
?>