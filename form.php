<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Volver</a>
    <h1>Formularios en PHP</h1>
    <form action="controllers/Controladorsaludar.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre"><br>
        <input type="text" name="edad" placeholder="Edad"><br>
        <button>Saludar</button><br>
    </form>
    <p>
        <?php
        session_start();//tambien colocar que trabajaré con sesiones
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);//una vez que la muestre se destruye la información
            }
        ?>
    </p>
</body>
</html>