<?php

    session_start();
    //unset($_SESSION['counter']);  // Con esta manera destruimos la variable ligada a la sesion

    session_destroy(); // de esta manera eliminamos completamente la sesion y la cerramos de forma calculda
    echo '<p>Sesión cerrada</p>'