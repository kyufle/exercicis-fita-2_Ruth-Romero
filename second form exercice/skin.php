<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skins</title>
    <link rel="stylesheet" href="skin.css">
</head>
<body>
    <form method="post">
        <select name="elements" id="types">
            <option value="foc">FOC!</option>
            <option value="aigua">~aIGuA~</option>
            <option value="terra">terra</option>
        </select>
        <input type="submit" value="Tramet consulta">
    </form>
    <?php
        $selectOption = $_POST['elements'];
        if ($selectOption === "foc"){
            echo "<style>html{background-color:red}</style>";
        } elseif($selectOption === "aigua"){
                echo "<style>html{background-color:blue}</style>";
        } else {
            echo "<style>html{background-color:brown}</style>";
        }
        
        
    ?>
    
</body>
</html>