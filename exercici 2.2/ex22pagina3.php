<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Comanda</title>
</head>
<body>
    <?php 
        if (isset($_GET["comanda"])) {
            echo "<h1>Iniciar comanda ".($_GET["comanda"])."</h1>";
        }
    ?>
</body>
</html>