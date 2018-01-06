<?php
    include_once 'config.php';
    $result = false; // -- $result SE USA PARA SABER SI SE INSERTO EL DATO CORRECTAMENTE MEDIANTE UN BOLEANO


    // --- VAMOS A COMPROBAR SI EL ID VIENE DEL POST O DEL GET
    if(!empty($_POST)){
        $id = $_POST['id'];
        $newName = $_POST['name'];
        $newEmail = $_POST['email'];
        // -- CONSULTA PARA ACTUALIZAR USUAROS CUANDO LE DE AL BOTON
        $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
        $query = $pdo->prepare($sql);
        // -- VINCULAMOS LOS NUEVOS VALORES A LAS ETIQUETAS
        $result = $query->execute([
            'id' => $id,
            'name' => $newName,
            'email' => $newEmail
        ]);

    $nameValue = $newName;
    $emailValue = $newEmail;
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute([
            'id' => $id // HACEMOS ASIGNAR A LA ETIQUETA :id EL VALOR DE $id
        ]);
    
        // --- TRAEMOS LOS DATOS DE NUESTRO USUARIO
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $nameValue = $row['name'];
        $emailValue = $row['email'];

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
        <h1>DataUpdate User</h1>
        <form action ="update.php"  method="post">
        <?php
            if($result == true){
                echo  '<div class="alert alert-success">Success</div>';

            }
        ?>
        <a href="list.php">Back</a>
        <br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $nameValue?>" />
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $emailValue?>"/>
            <br>
            <!-- CREAMOS UN INPUT ESCONDIDO GUARDANDO EL ID -->
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="Update"></imput>
        </form>
    </div>    
</body>
</html>