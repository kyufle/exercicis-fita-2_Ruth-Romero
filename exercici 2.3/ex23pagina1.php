<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector skins</title>
    <style>
        .foc {
            background-color: red;
        }
        .aigua {
            background-color: blue;
        }
        .terra {
            background-color: brown;
        }
    </style>
</head>
<?php 
        if (isset($_POST["tipus"])) {
            $tipus = $_POST["tipus"];
            if ($tipus == "foc") {
                echo "<body class='foc'>";
            } else if ($tipus == "aigua") {
                echo "<body class='aigua'>";
            } else if ($tipus == "terra") {
                echo "<body class='terra'>";
            }
        } else{
            echo "<body>";
        }
?>
    <form method="post">
        <select name="tipus">
            <option value="foc">foc</option>
            <option value="aigua">aigua</option>
            <option value="terra">terra</option>
        </select>
        <input type="submit" value="Tramet consulta">
    </form>

   
    
</body>
</html>