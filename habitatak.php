<?php
include_once "header.php";
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="habitat-container">
    <?php
        if($_SESSION["_LANGUAGE"] == "eus"){
        $stmt = $pdo->query("SELECT * FROM habitatak");
        foreach($stmt as $row){
            echo "<a href='" . $row["mota"] . ".php?id=" . $row["id"] . "'>";
            echo "<div>";
            echo "<h1>" . $row['izena'] . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<p>" . $row["temperatura"] . "ºC" . "</p>";
            echo "<p>" . $row["deskribapena"] . "</p>";
            echo "</div>";
            echo "</a>";
        }
        }else if($_SESSION["_LANGUAGE"] == "es"){
           $stmt = $pdo->query("SELECT * FROM habitatak_es");
        foreach($stmt as $row){
            echo "<a href='" . $row["tipo"] . ".php?id=" . $row["id"] . "'>";
            echo "<div>";
            echo "<h1>" . trans($row['nombre']) . "</h1>";
            echo "<img src='irudiak/" . $row['imagenes'] . "' />";
            echo "<p>" . $row["temperatura"] . "ºC" . "</p>";
            echo "<p>" . $row["descripcion"] . "</p>";
            echo "</div>";
            echo "</a>";
        } 
        }
    ?>
    </div>
</body>
</html>