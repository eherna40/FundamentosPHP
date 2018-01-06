<?php
    session_start(); //iniciar sesion para tener acceso a las variables super globales
    $_SESSION['counter'] = 0; // Variable super global

    echo '<p>Nueva sesión</p>';

    //la sesion es unica para cada navegador