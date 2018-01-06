
<!-- ESTOS DATOS DE CONEXION SE USAN DESDE config.php PARA MAS ORGANIZACION -->
<?php
    // // ---  creamos variables para conexion a BBDD
    // $dbHost = 'localhost';
    // $dbName = 'cursophp';
    // $dbUser = 'root';
    // $dbPass = '';
    // try{
    //         //PDO (tipo de base de datos:la ubicación de la BBDD;nombre de base de datos, usuario para conectar, password del usuario )
    //     $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass); // Clase para crear una conexion a una BBDD
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //CONTROLAR ERRORES
    // }catch (Exception $e) {
    //     echo $e->getMessage();
    // }

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <title>Database with MySQL and PHP</title>
</head>
<body>
    <div class="container">
        <h1>DataBases</h1>
        
        <ul>
            <li>
                <a href="list.php">List User</a>
            </li>
            <li>
                <a href="add.php">Add User</a>
            </li>
            <li>
                <a href="fake-login.php">Fake Login</a>
            </li>
        </ul>
    </div>    
</body>
</html>