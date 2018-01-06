<?php
    $v1 = 1;
    $v2 = 1;

    $v3 = 2;
    $v4 = 3;

    $result1 = $v1 == $v2;
    echo 'Result 1 de v1 == v2 <br>';
    var_dump($result1);
    
    echo '<br><br>';
    
    $result2 = $v3 == $v4;
    echo 'Result 2 de v3 == v4 <br>';
    var_dump($result2);
    
    echo '<br><br>';
    
    $result3 = $result1 && $result2;
    echo 'Result 3 de result1 &&(and) result2 <br>';
    var_dump($result3);

    echo '<br><br>';
    
    $result3 = $result1 || $result2;
    echo 'Result 4 de result1 ||(or) result2 <br>';
    var_dump($result3);


?>