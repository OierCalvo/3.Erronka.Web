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
        $stmt = $pdo->query("SELECT * FROM ekitaldiak");
        foreach($stmt as $row){
            echo "<a href='" . $row["id"] . ".php'>" ;
            echo "<div>";
            echo "<h1>" . trans($row['ekitaldi_izena']) . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<h2>" . $row["data"] . "</h2>";
            echo "<p>" . $row["deskribapena"] . "</p>";
            echo "</div>";
            echo "</a>";
        }
        }
    ?>
</body>
</html>