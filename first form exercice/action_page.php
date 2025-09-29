<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $usersDictionary = [
        "gos" => "bup",
        "gat" => "miau"
    ];

    $userExist = false;
    
    if(isset($_GET["usuari"])){
         $usuari = $_GET["usuari"];
          if (array_key_exists($usuari, $usersDictionary)) {
            $userExist = true;
        }

        if ($userExist) {
            $echo "<p>Usuari trobat: $usuari</p>";
        } else {
            $echo "<p>Usuari no trobat</p>";
        }
    }
    else{
        $echo "<p>Usuari no trobat</p>";
    }
    ?>
</body>
</html>