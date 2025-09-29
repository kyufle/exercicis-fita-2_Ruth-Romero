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
        "gat" => "miau",
    ];

    $userExist = false;
    $userName = $_POST["usuari"];
    $password = $_POST["contrasenya"];
    if(isset($userName) && array_key_exists($userName, $usersDictionary) && $usersDictionary[$userName] === $password){
        $userExist = true;
    }
    
    if($userExist){
        echo "Login correcte";
    } else {
        echo "Login incorrecte";
    }
    ?>
</body>
</html>