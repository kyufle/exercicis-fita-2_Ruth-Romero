<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post">
        <input type="text" name="user">
        <input type="password" name="password">
        <input type="submit" value="enviar dades">
    </form>
</body>

</html>

<?php
$correcto = false;
$users = array("maria" => "passwordmaria123");
$usersNames = array_keys($users);
$usersPasswords = array_values($users);
if (isset($_POST["user"]) && isset($_POST["password"])) {
    $userName = $_POST["user"];
    $userPassword = $_POST["password"];
    for ($i = 0; $i < count($users); $i++) {
        if ($userName == $usersNames[$i] && $userPassword == $usersPasswords[$i]) {
            $correcto = true;
        }
    }
    if ($correcto) {
        echo "Login correcte!";
    } else {
        echo "Login incorrecte.";
    }
}

?>