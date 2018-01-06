<?php
    // ---  creamos variables para conexion a BBDD
    $dbHost = 'localhost';
    $dbName = 'cursophp';
    $dbUser = 'root';
    $dbPass = '';
    try{
            //PDO (tipo de base de datos:la ubicación de la BBDD;nombre de base de datos, usuario para conectar, password del usuario )
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass); // Clase para crear una conexion a una BBDD
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //CONTROLAR ERRORES
    }catch (Exception $e) {
        echo $e->getMessage();
    }

?>