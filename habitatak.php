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
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="habitat-container">
    <?php
        if($_SESSION["_LANGUAGE"] == "eus"){
        $stmt = $pdo->query("SELECT * FROM habitatak");
        foreach($stmt as $row){
            echo "<a href='" . $row["mota"] . ".php'>" ;
            echo "<div>";
            echo "<h1>" . $row['izena'] . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<h2>" . $row["mota"] . "</h2>";
            echo "<p>" . $row["temperatura"] . "ºC" . "</p>";
            echo "<p>" . $row["deskribapena"] . "</p>";
            echo "</div>";
            echo "</a>";
        }
        }else if($_SESSION["_LANGUAGE"] == "es"){
           $stmt = $pdo->query("SELECT * FROM habitatak_es");
        foreach($stmt as $row){
            echo "<a href='" . $row["mota"] . ".php'>" ;
            echo "<div>";
            echo "<h1>" . trans($row['nombre']) . "</h1>";
            echo "<img src='irudiak/" . $row['imagenes'] . "' />";
            echo "<h2>" . $row["tipo"] . "</h2>";
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