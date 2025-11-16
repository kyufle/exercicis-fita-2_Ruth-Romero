<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Són iguals les contrasenyas?</title>
</head>
<body>
    <?php

        if (isset($_POST["contrasenya1"]) && isset($_POST["contrasenya2"])) {
            $contrasenya1 = $_POST["contrasenya1"];
            $contrasenya2 = $_POST["contrasenya2"];
            $existeNumero = false;
            if ($contrasenya1 != $contrasenya2){
                echo "<p>ERROR: les contrasenyes han de coincidir</p>";
            } else if ($contrasenya1 == $contrasenya2){
                for ($i = 0; $i<strlen($contrasenya1);$i++){
                    if (is_numeric($contrasenya1[$i])){
                        $existeNumero = true;
                        break;
                    }
                }       
            }
            if ($existeNumero && $contrasenya1 == $contrasenya2) {
                echo "<p>Les contrasenyas que s'han posat són iguals i contenen per lo menys un número</p>";
            } else if (!$existeNumero && $contrasenya1 == $contrasenya2){
                echo "<p>Les contrasenyes són iguals pero han de tener un número</p>";
            }
        }
    ?>
</body>
</html>