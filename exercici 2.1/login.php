<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body> 
    <form method="post">
        <input type="text" name="usuari">
        <input type="password" name="contrasenya">
        <button type="submit">Iniciar sessió</button>
    </form>
    <?php
        $diccionariUsuaris = array(
            "hola"=> "1234",
            "meri"=> "12345",
        );

        if (isset($_POST['usuari']) && isset($_POST['contrasenya'])){
            if (isset(($diccionariUsuaris[$_POST['usuari']])) && $diccionariUsuaris[$_POST['usuari']] == $_POST['contrasenya']) {
                echo "Login correcte!";
            } else {
                if (!isset(($diccionariUsuaris[$_POST['usuari']])) || $diccionariUsuaris[$_POST['usuari']] != $_POST['contrasenya']){
                    echo "Login incorrecte";
                }
            }
        } 
    ?>
</body>
</html>