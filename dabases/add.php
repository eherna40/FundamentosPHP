<?php
    require_once 'config.php'; // LLAMAMOS AL ARCHIVO DE CONEXION A BBDD

    $result = false; // -- $result SE USA PARA SABER SI SE INSERTO EL DATO CORRECTAMENTE MEDIANTE UN BOLEANO

    // VERIFICAMOS SI POST VIENE VACIO
    if(!empty($_POST)){
        // GUARDAMOS LOS VALORES DEL FROM EN VARIABLES
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        // ---
        //$password = $_POST['password'];
        
        $password = md5($_POST['password']); // MD5 SE USA PARA NO GUARDAR LA CLAVE EN TEXTO PLANO, no usar en produccion
        
        // ---

        // REALIZAMOS INSTRUCCION SQL
        $sql = "INSERT INTO users(name, email, password) 
                VALUES (:name, :email, :password)"; // VALUES, ETIQUETAS PHP PARA GUARDAR INFO
        $query = $pdo->prepare($sql); //PREPARAMOS LA CONEXION PARA NUESTRA CONSULTA

        // -- INSERTAMOS DATO EN BBDD
            
        $result = $query->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);    



    }
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
        <h1>Add User</h1>
        <a href="index.php">Home</a>
        <form action ="add.php"  method="post">
        <?php
            if($result == true){
                echo  '<div class="alert alert-success">Success</div>';

            }
        ?>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="pass" />
            <br>
            <input type="submit" value="Save"></imput>
        </form>
    </div>    
</body>
</html>