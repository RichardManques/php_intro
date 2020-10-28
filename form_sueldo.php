<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Volver</a>
    <h1>Calculo de sueldos</h1>
    <form action="controllers/ControlSueldo.php" method="POST">
    <input type="text" name="sueldo" placeholder="Sueldo base">
    <br><br>
    <select name="desc">
        <option value="">Seleccionar</option>
        <option value="0.2">20%</option>
        <option value="0.25">25%</option>
        <option value="0.3">30%</option>
    </select>
    <br><br>
    <button>Calcular</button>
    </form>
    <p>
        <?php
            session_start();
            if(isset($_SESSION['resp'])){
                echo $_SESSION['resp'];
                unset ($_SESSION['resp']);
            }
        ?>
    </p>
</body>
</html>