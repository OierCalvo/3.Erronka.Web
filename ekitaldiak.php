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
    <div class="ekitaldiak-container">
    <?php
        if($_SESSION["_LANGUAGE"] == "eus"){
        $stmt = $pdo->query("SELECT * FROM ekitaldiak");
        foreach($stmt as $row){
            echo "<div>";
            echo "<h1>" . $row['ekitaldi_izena'] . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<h2>" . $row["ordua"] . "</h2>";
            echo "<p>" . $row["deskribapena"] . "</p>";
            if(isset($_SESSION["erab"])){
            echo "<button><a href='erreserbatu.php?id=" . $row["id"] . "'>" . trans("Erreserbatu") . "</a></button>";
            }
            echo "</div>";
        }
        }else if($_SESSION["_LANGUAGE"] == "es"){
           $stmt = $pdo->query("SELECT * FROM ekitaldiak_es");
        foreach($stmt as $row){
            echo "<div>";
            echo "<h1>" . trans($row['ekitaldi_izena']) . "</h1>";
            echo "<img src='irudiak/" . $row['irudiak'] . "' />";
            echo "<h2>" . $row["ordua"] . "</h2>";
            echo "<p>" . $row["deskribapena"] . "</p>";
            if(isset($_SESSION["erab"])){
            echo "<button><a href='erreserbatu.php?id=" . $row["id"] . "'>" . trans("Erreserbatu") . "</a></button>";
            }
            echo "</div>";
        }
        }
    ?>
    </div>
</body>
</html>