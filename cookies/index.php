<?php
    //Para crear una cookie setcookie(
        // Nomre de la cookie
        // Valor
        // Tiempo de vida
    //)

    // En este ejemplo vamos a ver cuantas veces un usuario visita mi pagina
    setcookie('count', '1', time() + 3600);
    echo '<p>Cookies</p>';

?>