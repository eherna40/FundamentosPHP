<?php
    require_once 'config.php';
    //--    ejecutamos una consulta para listar todos los usuarios
    $queryResult = $pdo->query("SELECT * FROM users");
    

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
        <h1>List User</h1>
        <a href="index.php">Home</a>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php        
                // -- CON EL WHILE CONTROLAMOS QUE RESULT ESTA RECORRIENDO LA BBDD Y CUANCO NO TENGA NADA NO REGRESA NI IMPREME NADA FECTCH
                    //-- fetch — Obtiene la siguiente fila de un conjunto de resultados. MAS INFO http://php.net/manual/es/pdostatement.fetch.php

                while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
                    echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>    
</body>
</html>