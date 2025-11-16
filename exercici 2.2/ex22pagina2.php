<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantitat links</title>
</head>
<body>
    <?php 
        if (isset($_POST["quantitat"])) {
                for ($i = 0; $i < $_POST["quantitat"]; $i++) {
                echo "<a href=ex22pagina3.php?comanda=".($i+1).">Comanda ".($i+1)."</a>";
            } 
        }
    ?>
    
</body>
</html>