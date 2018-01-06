<?php
    //Modificamos el valos de la cookie
        $value = $_COOKIE['count'];
        $value++;
        setcookie('count', $value);
        echo '<p>Add +1</p>';